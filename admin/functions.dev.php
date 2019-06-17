<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////
// for dev interface installations outside a homegear webserver
////////////////////////////////////////////////////////////////////////////////////////////////////////
function hgLessLogin(){
    global $currentUser, $interfaceData, $directLoginUserKey, $directLoginUrlKey, $cookie_name;

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
// PHP JSON clean to Javascript
////////////////////////////////////////////////////////////////////////////////////////////////////////
function clean_json_to_js(){
    global $currentUser;
    global $interfaceData;
    $interfaceDataOut = array();
    $interfaceDataOut["devices"] = $interfaceData["devices"];
    $interfaceDataOut["rooms"] = $interfaceData["rooms"];
    $interfaceDataOut["floors"] = $interfaceData["floors"];
    $interfaceDataOut["menu"] = $interfaceData["menu"];
    $interfaceDataOut["mainmenu"] = $interfaceData["mainmenu"];
    $interfaceDataOut["themes"] = $interfaceData["themes"];
    $interfaceDataOut["users"] = $interfaceData["users"];
    $interfaceDataOut["map_invoke"] = $interfaceData["map_invoke"];
    $interfaceDataOut["categories"] = $interfaceData["categories"];
    $interfaceDataOut["roles"] = $interfaceData["roles"];

    foreach($interfaceDataOut["users"] as $keyLine => $line){
        unset($interfaceDataOut["users"][$keyLine]["id"]);
        unset($interfaceDataOut["users"][$keyLine]["username"]);
        unset($interfaceDataOut["users"][$keyLine]["rights"]);
        unset($interfaceDataOut["users"][$keyLine]["settings"]);
        unset($interfaceDataOut["users"][$keyLine]["password"]);
        unset($interfaceDataOut["users"][$keyLine]["controllerkey"]);
        unset($interfaceDataOut["users"][$keyLine]["key"]);
    }

    foreach($interfaceDataOut as $key => $type){
        foreach($type as $keyLine => $line){
            if($line == null){
                unset($interfaceDataOut[$key][$keyLine]);
                continue;
            }
            else if(!array_key_exists("access", $line)){
                continue;
            }
            else if($line["access"] == ""){
                unset($interfaceDataOut[$key][$keyLine]);
            }
            else if($line["access"] != ""){
                $access = explode(",", $line["access"]);
                if(!in_array("-1", $access) && !in_array($currentUser['id'], $access)){
                    unset($interfaceDataOut[$key][$keyLine]);
                }
            }
        }
    }

    if($currentUser["settings"]["language"] != "en-US"){
        $interfaceDataOut["l18n"] = $interfaceData["l18n"][$currentUser["settings"]["language"]];
        $interfaceDataOut["l18n"]["default"] = $interfaceData["l18n"]["en-US"];
    }
    else{
        $interfaceDataOut["l18n"] = $interfaceData["l18n"]["en-US"];
    }

    foreach($interfaceData["l18n"] as $key => $value){
        $interfaceDataOut["l18n"]["languages"][$key]["name"] = $value["settings.user.manage.language.name"];
    }

    $out = "var interfaceData = ".json_encode($interfaceDataOut, JSON_PRETTY_PRINT).';'."\n";

    return $out;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Login Validation
////////////////////////////////////////////////////////////////////////////////////////////////////////
if( !authorized() && isset($_POST['user']) && isset($_POST['password']) ){

    $username = htmlentities($_POST['user']);
    $password = htmlentities($_POST['password']);

    // only with patternlock no user is valid
    if($loginMethod != "patternlock" && ($username == "" || $password == "")){
        die();
    }

    // check for valid user
    $validUser = false;
    foreach($interfaceData["users"] as $line){
        if(password_verify($password, $line["password"])){
            $validUser = true;
            setcookie($cookie_name, $line["key"], time() + (86400 * 30), "/"); // name, value
            die("true");
        }
        else{
            setcookie($cookie_name, "", time() - 3600, "/");
            unset($_COOKIE[$cookie_name]);
        }
    }

    if($validUser != true){
        die("false");
    }
}