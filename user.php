<?php

require_once 'WebAuthn/WebAuthn.php';

class User
{
    private $hg = NULL;
    private $initialized = false;
    private $globalSettings = array();
    private $userSettings = array();
    private $twofaSettings = array();
    private $webAuthn = NULL;

    public function getName()
    {
        return $_SESSION['user'];
    }

    public function getSettings()
    {
        return $this->userSettings;
    }

    public function hasWebAuthn()
    {
        return isset($this->twofaSettings['registrations']) && count($this->twofaSettings['registrations']) > 0;
    }

    public function __construct($globalSettings = array())
    {
        $this->hg = new \Homegear\Homegear();
        $this->globalSettings = $globalSettings;
        if(session_status() == PHP_SESSION_NONE)
        {
            ini_set('session.gc_maxlifetime', 5);
            session_start(array('name' => 'PHPSESSIDUI'));
        }
    }

    private function initialize()
    {
        $metadata = $this->hg->getUserMetadata($_SESSION['user']);
        $_SESSION['locale'] = array((array_key_exists('locale', $metadata) ? $metadata['locale'] : 'en-US'));
        if(is_array($_SESSION['locale']) && count($_SESSION['locale']) > 0) $_SESSION['locale'] = $_SESSION['locale'][0];
        if(!is_string($_SESSION['locale'])) $_SESSION['locale'] = 'en-US';
        $_SESSION['locale'] = str_replace('_', '-', $_SESSION['locale']);
        if($_SESSION['locale'] == 'de') $_SESSION['locale'] = 'de-DE';
        else if($_SESSION['locale'] == 'en') $_SESSION['locale'] = 'en-US';
        hg_set_user_privileges($_SESSION['user']);
        
        $this->userSettings = $this->globalSettings['userDefaults'] ?? array();
        if(isset($metadata['interface'])) $this->userSettings = array_merge($this->userSettings, $metadata['interface']);

        $this->twofaSettings = $this->userSettings['2fa'] ?? array();
        unset($this->userSettings['2fa']);

        $this->initialized = true;
    }

    public function checkAuth($redirectToLogin)
    {
        $authorized = (isset($_SESSION["authorized"]) && $_SESSION["authorized"] === true && isset($_SESSION['user']));
        
        if(!$authorized)
        {
            //Try certificate login
            if(isset($_SERVER['SSL_CLIENT_VERIFY']) && $_SERVER['SSL_CLIENT_VERIFY'] == "SUCCESS")
            {
                $authorized = $this->certificateLogin();
            }
        }

        if(!$authorized)
        {
            //Try OAuth login
            if(isset($_COOKIE['accessKey']) && isset($_COOKIE['refreshKey']))
            {
                $authorized = $this->oauthLogin();
            }
        }

        if(!$authorized)
        {
            //Try API key login
            if(isset($this->globalSettings['directLoginUser']) &&
                strlen($this->globalSettings['directLoginUser']) > 0 &&
                isset($this->globalSettings['directLoginApiKey']) &&
                strlen($this->globalSettings['directLoginApiKey']) > 16 &&
                isset($_REQUEST['key']))
            {
                $authorized = $this->apiKeyLogin();
            }
        }
        
        if(!$authorized && $redirectToLogin)
        {
            header("Location: signin.php");
            die("unauthorized");
        }

        if(!$this->initialized) $this->initialize();

        return $authorized;
    }

    public function login($user, $password)
    {
        if(hg_auth($user, $password) === true)
        {
            hg_set_user_privileges($user);
            if(\Homegear\Homegear::checkServiceAccess("ui") !== true) return -2;
            $_SESSION["user"] = $user;
            $this->initialize();
            if(isset($this->twofaSettings['type']) && $this->twofaSettings['type'] == 'webauthn')
            {
                 $_SESSION['firstFactorAuthorized'] = true;
                return 1;
            }
            else $_SESSION['authorized'] = true;
            return 0;
        }
        return -1;
    }

    public function getWebAuthnCreateArgs()
    {
        if(!isset($_SESSION['user']) || !$_SESSION['user'] || (!isset($_SESSION["authorized"]) || $_SESSION["authorized"] !== true))
        {
            return array();
        }
        if(is_null($this->webAuthn)) $this->webAuthn = new \WebAuthn\WebAuthn('Shif WebAuthn', explode(':', $_SERVER['HTTP_HOST'])[0], array('fido-u2f', 'packed', 'android-key', 'none'));
        $createArgs = null;
        try
        {
            $createArgs = $this->webAuthn->getCreateArgs($_SESSION["user"], $_SESSION["user"], $_SESSION["user"], 20, false, false);
        }
        catch(\WebAuthn\WebAuthnException $e)
        {
            return array();
        }
        $_SESSION['challenge'] = $this->webAuthn->getChallenge();
        return $createArgs;
    }

    public function getWebAuthnLoginArgs()
    {
        if(!isset($_SESSION['user']) || !$_SESSION['user'] || (!isset($_SESSION["firstFactorAuthorized"]) || $_SESSION["firstFactorAuthorized"] !== true))
        {
            return array();
        }
        if(is_null($this->webAuthn)) $this->webAuthn = new \WebAuthn\WebAuthn('Shif WebAuthn', explode(':', $_SERVER['HTTP_HOST'])[0], array('fido-u2f', 'packed', 'android-key', 'none'));

        $ids = array();

        if(!isset($this->twofaSettings['registrations'])) return array();
        foreach($this->twofaSettings['registrations'] as $registration)
        {
            $ids[] = $registration['credentialId'];
        }

        $loginArgs = null;
        try
        {
            $loginArgs = $this->webAuthn->getGetArgs($ids);
        }
        catch(\WebAuthn\WebAuthnException $e)
        {
            return array();
        }
        $_SESSION['challenge'] = $this->webAuthn->getChallenge();
        return $loginArgs;
    }

    public function registerWebAuthnDevice($clientDataJson, $attestationObject)
    {
        if(!isset($_SESSION['user']) || !$_SESSION['user'] || !$_SESSION["authorized"] || !isset($_SESSION['challenge']) || $this->hasWebAuthn()) return false;
        if(is_null($this->webAuthn)) $this->webAuthn = new \WebAuthn\WebAuthn('Shif WebAuthn', explode(':', $_SERVER['HTTP_HOST'])[0], array('fido-u2f', 'packed', 'android-key', 'none'));

        $data = null;

        try
        {
            $data = get_object_vars($this->webAuthn->processCreate($clientDataJson, $attestationObject, $_SESSION['challenge']));
        }
        catch(\WebAuthn\WebAuthnException $e)
        {
            return false;
        }

        unset($_SESSION['challenge']);

        $metadata = $this->hg->getUserMetadata($_SESSION['user']);
        if(!isset($metadata['interface'])) $metadata['interface'] = array();
        if(!isset($metadata['interface']['2fa'])) $metadata['interface']['2fa'] = array();
        if(!isset($metadata['interface']['2fa']['registrations'])) $metadata['interface']['2fa']['registrations'] = array();
        $metadata['interface']['2fa']['type'] = 'webauthn';
        $metadata['interface']['2fa']['registrations'][] = $data;
        $this->hg->setUserMetadata($_SESSION['user'], $metadata);

        return true;
    }

    public function twofaLogin($clientDataJson, $authenticatorData, $signature, $id)
    {
        if(!isset($_SESSION['user']) || !$_SESSION['user'] || !isset($_SESSION['challenge'])) return false;
        if(!isset($_SESSION["firstFactorAuthorized"]) || $_SESSION["firstFactorAuthorized"] !== true) return false;
        if(!$this->initialized) $this->initialize();
        if(is_null($this->webAuthn)) $this->webAuthn = new \WebAuthn\WebAuthn('Shif WebAuthn', explode(':', $_SERVER['HTTP_HOST'])[0], array('fido-u2f', 'packed', 'android-key', 'none'));

        $credentialPublicKey = null;

        if(!isset($this->twofaSettings['registrations'])) return false;
        foreach($this->twofaSettings['registrations'] as $registration)
        {
            if ($registration['credentialId'] === $id) {
                $credentialPublicKey = $registration['credentialPublicKey'];
                break;
            }
        }
        if($credentialPublicKey === null) return false;

        try
        {
            $this->webAuthn->processGet($clientDataJson, $authenticatorData, $signature, $credentialPublicKey, $_SESSION['challenge']);
        }
        catch(\WebAuthn\WebAuthnException $e)
        {
            return false;
        }

        unset($_SESSION['challenge']);
        unset($_SESSION['firstFactorAuthorized']);
        $_SESSION['authorized'] = true;
        return true;
    }

    private function certificateLogin()
    {
        if(isset($_SERVER['SSL_CLIENT_VERIFY']) && $_SERVER['SSL_CLIENT_VERIFY'] == "SUCCESS")
        {
            // Certificate auth
            $user = $_SERVER['SSL_CLIENT_S_DN_CN'];
            hg_set_user_privileges($user);
            if(\Homegear\Homegear::checkServiceAccess("ui") !== true) return false;
            $_SESSION['authorized'] = true;
            $_SESSION['user'] = $user;
            $this->initialize();
            return true;
        }

        return false;
    }

    private function oauthLogin()
    {
        try
        {
            if(isset($_COOKIE['accessKey']) && isset($_COOKIE['refreshKey']))
            {
                $user = $this->hg->verifyOauthKey($_COOKIE['accessKey']);
                if(!$user)
                {
                    $keys = $this->hg->refreshOauthKey($_COOKIE['refreshKey']);
                    setcookie("accessKey", $keys['access_token'], time() + 2592000);
                    setcookie("refreshKey", $keys['refresh_token'], time() + 2592000);
                    $user = $keys['user'];
                }
                if($user)
                {
                    hg_set_user_privileges($user);
                    if(\Homegear\Homegear::checkServiceAccess("ui") !== true) return -2;
                    $_SESSION['authorized'] = true;
                    $_SESSION['user'] = $user;
                    $this->initialize();
                    return true;
                }
            }
        }
        catch(\Homegear\HomegearException $e)
        {
        }
        return false;
    }

    private function apiKeyLogin()
    {
        try
        {
            if(isset($this->globalSettings['directLoginUser']) &&
                strlen($this->globalSettings['directLoginUser']) > 0 &&
                isset($this->globalSettings['directLoginApiKey']) &&
                strlen($this->globalSettings['directLoginApiKey']) > 16 &&
                isset($_REQUEST['key']))
            {
                if($_REQUEST['key'] !== $this->globalSettings['directLoginApiKey']) return false;
                $user = $this->globalSettings['directLoginUser'];
                if(!$this->hg->userExists($user)) return false;
                hg_set_user_privileges($user);
                if(\Homegear\Homegear::checkServiceAccess("ui") !== true) return -2;
                $_SESSION['authorized'] = true;
                $_SESSION['user'] = $user;
                $this->initialize();
                return true;
            }
        }
        catch(\Homegear\HomegearException $e)
        {
        }
        return false;
    }

    public function logout()
    {
        if (ini_get("session.use_cookies"))
        {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }
}
