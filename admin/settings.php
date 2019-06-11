<?php //////////////////////////////////////////////////////////////////////////////////////
// Einstellungen und globale Variablen
///////////////////////////////////////////////////////////////////////////////////////////

// Pfad zum Rootverzeichnis des Interfaces
$rootPath = getcwd();

// Pfad zu den Admin Daten
$adminPath = $rootPath."/admin";

// Pfad zum Master der Erweiterungen
$masterPath = $adminPath."/master/";

// Pfad zur json Config Datei
$databaseJsonPath = $rootPath."/interfacedata.php";

////////////////////////////////////////////////////////////////////////////////////////////////////////
// include and parse the json config file
////////////////////////////////////////////////////////////////////////////////////////////////////////
if( (file_exists($databaseJsonPath) && !isset($_GET["interfacedata"])) || (isset($_GET["interfacedata"]) && file_exists($rootPath."interfacedata_".$_GET["interfacedata"].".php")) ){
    if(isset($_GET["interfacedata"])){
        include_once($rootPath."/interfacedata_".$_GET["interfacedata"].".php");
    }
    else{
        include_once($databaseJsonPath);
    }

    if(is_array($interfaceData)){
    }
    else if(!($interfaceData = json_decode($interfaceData, true))){
        die("Invalid JSON file!");
    }
}
else{
    die("JSON file missing!");
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// SESSION
////////////////////////////////////////////////////////////////////////////////////////////////////////
if (session_status() == PHP_SESSION_NONE) {
    session_start(array('name' => 'PHPSESSIDUI'));
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
// Zeitzone
date_default_timezone_set($interfaceData["settings"]["timezone"]);

// Fehlermeldungen im DemoModus unterdrücken, damit die Statusrückgabe angezeigt werden kann
error_reporting($interfaceData["settings"]["errorReporting"]);

// Name des Authentifizierungs Cookies
$cookie_name = $interfaceData["settings"]["cookieName"];

// Direktlogin eines bestimmten Users
$directLoginUserKey = $interfaceData["settings"]["directLoginUserKey"];
$directLoginUrlKey = $interfaceData["settings"]["directLoginUrlKey"];

////////////////////////////////////////////////////////////////////////////////////////////////////////
// validation
////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($directLoginUserKey != "" && $directLoginUrlKey != "" && class_exists('\Homegear\Homegear')) {
    $_POST['user'] = $directLoginUserKey;
    $_POST['password'] = $directLoginUrlKey;
}

function authorized() {
    return isset($_SESSION['authorized']) && $_SESSION['authorized'] === true &&
           isset($_SESSION['user']);

}

function oauth_init_cookies($oauth_keys)
{
    $thirty_days = time() + 2592000;
    setcookie('key_access',  $oauth_keys['access_token'],  $thirty_days);
    setcookie('key_refresh', $oauth_keys['refresh_token'], $thirty_days);
}

function oauth_deinit_cookies()
{
    // Choose some time in the past, so browsers will remove the cookie(s)
    $past = time() - 42000;

    if(ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', $past,
            $params["path"],   $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
}

function oauth_init_session($username)
{
    $_SESSION['authorized'] = true;
    $_SESSION['user'] = $username;
}

function oauth_deinit_session()
{
    if (isset($_SESSION['authorized']))
        unset($_SESSION['authorized']);
    if (isset($_SESSION['user']))
        unset($_SESSION['user']);
}

// Homegear exceptions must be catched by the caller.
// The caller has to provide a $hg, so he should have a try-catch already.
function oauth_login(&$hg)
{
    if (!isset($_POST['user']) || !isset($_POST['password']))
        return false;

    if ($hg->auth($_POST['user'], $_POST['password']) !== true)
        return false;

    oauth_init_cookies($hg->createOauthKeys($_POST['user']));
    oauth_init_session($_POST['user']);

    return $_POST['user'];
}

function oauth_clear()
{
    oauth_deinit_cookies();
    oauth_deinit_session();
}

// Homegear exceptions must be catched by the caller.
// The caller has to provide a $hg, so he should have a try-catch already.
function oauth_check_logged_in(&$hg)
{
    // No OAuth keys saved, leave
    if (!isset($_COOKIE['key_access']) || !isset($_COOKIE['key_refresh']))
        return false;

    // Session is still active, skip revalidation
    if (authorized())
        return true;

    // Session timed out, but cookies still exist
    $username = $hg->verifyOauthKey($_COOKIE['key_access']);
    if (!$username) {
        // Our OAuth timed out, get a new one
        $oauth_keys = $hg->refreshOauthKey($_COOKIE['key_refresh']);
        oauth_init_cookies($oauth_keys);
        $username = $oauth_keys['user'];
    }

    oauth_init_session($username);
    return true;
}

function current_user_init(&$hg) {
    foreach ($hg->listUsers() as $user) {
        if ($user['name'] !== $_SESSION['user'])
            continue;

        return [
            'id'       => $user['id'],
            'settings' => $user['metadata']['interface'] ?? array(),
            'groups'   => $user['groups'],
            'username' => $_SESSION['user'],
        ];
    }
}

$currentUser = ['id' => null];
$hg_login_verified = false;
if (class_exists('\Homegear\Homegear')) {

    try {

        $hg = new \Homegear\Homegear();

        if (!oauth_check_logged_in($hg)) {
            $user = oauth_login($hg);
            if ($user === false)
                oauth_clear();
        }

        // If everything was successful, prepare interfaceData and currentUser;
        if (authorized()) {
            $currentUser = current_user_init($hg);
            $interfaceData['users'][$currentUser['id']] = $currentUser;
        }

        $hg_login_verified = true;

    } catch (\Homegear\HomegearException $e) {
        oauth_clear();
    }
}

if (!$hg_login_verified) {
    // valid if session exist
    if( isset($_SESSION['authorized']) && $_SESSION['authorized'] == true && isset($_SESSION['interfaceUser']) ){
        $currentUser = $interfaceData["users"][$_SESSION['interfaceUser']];
    }
    // valid if directLogin is set and user exists or if only cookie exist and is valid -> cookie autologin
    else if( $directLoginUserKey != "" || $directLoginUrlKey != "" || (isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] != "") ){
        if($directLoginUserKey != "" && $directLoginUrlKey == ""){
            $tempKey = $directLoginUserKey;
        }
        else if(!isset($_GET["login"]) && $directLoginUrlKey != "" && isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] != ""){
            $tempKey = $_COOKIE[$cookie_name];
        }
        else if($directLoginUserKey != "" && $directLoginUrlKey != "" && isset($_GET["login"]) && $_GET["login"] == $directLoginUrlKey){
                $tempKey = $directLoginUserKey;
        }
        else if(isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] != ""){
            $tempKey = $_COOKIE[$cookie_name];
        }

        if( isset($tempKey) ){
            foreach($interfaceData["users"] as $key => $line){
                if($line["key"] == $tempKey){
                    $_SESSION['authorized'] = true;
                    $_SESSION['user'] = $interfaceData["settings"]["homegear"]["user"];
                    $_SESSION['interfaceUser'] = $key;
                    $currentUser = $interfaceData["users"][$_SESSION['interfaceUser']];
                }
            }
        }
        // if no user where found reset
        else{
            unset($_COOKIE[$cookie_name]);
            setcookie($cookie_name, "", time() - 3600, "/");
            unset($_SESSION['authorized']);
            unset($_SESSION['user']);
            unset($_SESSION['interfaceUser']);
        }
    }
    else{
        unset($_SESSION['authorized']);
        unset($_SESSION['user']);
        unset($_SESSION['interfaceUser']);
        $currentUser = array("id" => "1");
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
// Crypt Salt zur Passwortgenerierung
$salt = $interfaceData["settings"]["salt"];

// Pfad zum Interfaceverzeichnis ab URL Root
$interfacePath = $interfaceData["settings"]["interfacePath"].(isset($_GET["login"]) ? '?login='.$_GET["login"] : "");

// Einstellen der standard Loginmethode: patternlock | input | userselect
$loginMethod = $interfaceData["settings"]["loginMethod"];

if($currentUser["id"] !== null){
    $firstBreadcrumb = $interfaceData["users"][$currentUser["id"]]["settings"]["firstBreadcrumb"] ?? '';
    $firstBreadcrumbId = $interfaceData["users"][$currentUser["id"]]["settings"]["firstBreadcrumbId"] ?? '';

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Javascript Optionen
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    $javascript_options = "<script>";
    $javascript_options .= "    var firstBreadcrumb = '".$firstBreadcrumb."';"."\n";
    $javascript_options .= "    var firstBreadcrumbId = '".$firstBreadcrumbId."';"."\n";
    $javascript_options .= "    var breadcrumbs_array = ['<div class=\"breadcrumbsJump\" onclick=\'main(this, {\"name\":firstBreadcrumb,\"content\":firstBreadcrumbId});\'>".$firstBreadcrumb."</div>'];"."\n";
    $javascript_options .= "    var breadcrumbs_id_array = [firstBreadcrumbId];"."\n";
    $javascript_options .= "    var showFloor = '".($interfaceData["users"][$currentUser["id"]]["settings"]["showFloor"] ?? false)."';"."\n";
    $javascript_options .= "    var console_log = '".( ((isset($_GET['console_log']) && ($interfaceData["users"][$currentUser["id"]]["settings"]["consoleLog"] ?? '') == "url") || ($interfaceData["users"][$currentUser["id"]]["settings"]["consoleLog"] ?? '') == "true" )  ? 'true' : 'false')."';"."\n";
    $javascript_options .= "    var mainmenu = [];"."\n";
    $javascript_options .= "    var text;"."\n";
    $javascript_options .= "    var interfacePath = '".$interfacePath."';"."\n";
    $javascript_options .= "    var controller_url = '".$interfaceData["settings"]["controllerUrl"]."';"."\n";
    if(isset($interfaceData["settings"]["homegear"])){
        $javascript_options .= "    var websocket_url = ".$interfaceData["settings"]["homegear"]["url"].";"."\n";
        $javascript_options .= "    var websocket_port = ".$interfaceData["settings"]["homegear"]["port"].";"."\n";
        $javascript_options .= "    var websocket_security = '".$interfaceData["settings"]["homegear"]["security"]."';"."\n";
        $javascript_options .= "    var websocket_security_ssl = '".$interfaceData["settings"]["homegear"]["ssl"]."';"."\n";
        $javascript_options .= "    var websocket_user = '".$interfaceData["settings"]["homegear"]["user"]."';"."\n";
        $javascript_options .= "    var websocket_password = '".$interfaceData["settings"]["homegear"]["password"]."';"."\n";
    }
    $javascript_options .= "</script>";
}
else{
    $firstBreadcrumb = "Shif - Login";
}
