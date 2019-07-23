<?php
/* Copyright 2013-2019 Homegear GmbH
 *
 * Smart Home Interface (Shif, homegear-ui) is free software: you can
 * redistribute it and/or modify it under the terms of the GNU Lesser
 * General Public License as published by the Free Software Foundation,
 * either version 3 of the License, or (at your option) any later version.
 * 
 * Shif is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.

 * You should have received a copy of the GNU Lesser General Public
 * License along with Shif.  If not, see
 * <http://www.gnu.org/licenses/>.
*/

include_once(getcwd()."/interfacedata.php");

$_SERVER['WEBSOCKET_ENABLED'] = true;
$_SERVER['WEBSOCKET_AUTH_TYPE'] = "session";
$_SESSION['locale'] = "en-US";

////////////////////////////////////////////////////////////////////////////////////////////////////////
// PHP JSON clean to Javascript
////////////////////////////////////////////////////////////////////////////////////////////////////////
function clean_json_to_js(){
    global $interfaceData;
    $interfaceDataOut = array();
    $interfaceDataOut["devices"] = $interfaceData["devices"];
    $interfaceDataOut["rooms"] = $interfaceData["rooms"];
    $interfaceDataOut["floors"] = $interfaceData["floors"];
    $interfaceDataOut["menu"] = $interfaceData["menu"];
    $interfaceDataOut["mainmenu"] = $interfaceData["mainmenu"];
    $interfaceDataOut["themes"] = $interfaceData["themes"];
    $interfaceDataOut["map_invoke"] = $interfaceData["map_invoke"];
    $interfaceDataOut["categories"] = $interfaceData["categories"];
    $interfaceDataOut["roles"] = $interfaceData["roles"];

    foreach($interfaceDataOut as $key => $type){
        foreach($type as $keyLine => $line){
            if($line == null)
            {
                unset($interfaceDataOut[$key][$keyLine]);
                continue;
            }
        }
    }

    if($_SESSION['locale'] != "en-US"){
        $interfaceDataOut["i18n"] = $interfaceData["i18n"][$_SESSION['locale']];
        $interfaceDataOut["i18n"]["default"] = $interfaceData["i18n"]["en-US"];
    }
    else{
        $interfaceDataOut["i18n"] = $interfaceData["i18n"]["en-US"];
    }

    foreach($interfaceData["i18n"] as $key => $value){
        $interfaceDataOut["i18n"]["languages"][$key]["name"] = $value["settings.user.manage.language.name"];
    }

    $out = "var interfaceData = ".json_encode($interfaceDataOut, JSON_PRETTY_PRINT).';'."\n";

    return $out;
}

class User {
    public function getSettings() {
        global $interfaceData;
        return $interfaceData["users"]["1"]["settings"];
    }

    public function checkAuth($redirectToLogin) {
        if($redirectToLogin == true){
            return false;
        }
        return true;
    } 
}

$user = new User($interfaceData['settings']);

//die( print_r($interfaceData["settings"]));

$firstBreadcrumb     = $user->getSettings()["firstBreadcrumb"] ?? '';
$firstBreadcrumbId   = $user->getSettings()["firstBreadcrumbId"] ?? '';
$javascript_options  = "<script>";
$javascript_options .= "    var firstBreadcrumb = '".$firstBreadcrumb."';"."\n";
$javascript_options .= "    var firstBreadcrumbId = '".$firstBreadcrumbId."';"."\n";
$javascript_options .= "    var breadcrumbs_array = ['<div class=\"breadcrumbsJump\" onclick=\'main(this, {name:firstBreadcrumb,content:firstBreadcrumbId});\'>".$firstBreadcrumb."</div>'];"."\n";
$javascript_options .= "    var breadcrumbs_id_array = [firstBreadcrumbId];"."\n";
$javascript_options .= "    var showFloor = '".($user->getSettings()["showFloor"] ?? false)."';"."\n";
$javascript_options .= "    var console_log = '".( ((isset($_GET['console_log']) && ($user->getSettings()["consoleLog"] ?? '') == "url") || ($user->getSettings()["consoleLog"] ?? '') == "true" )  ? 'true' : 'false')."';"."\n";
$javascript_options .= "    var mainmenu = [];"."\n";
$javascript_options .= "    var text;"."\n";
$javascript_options .= "    var interfacePath = '".$interfaceData["settings"]["interfacePath"]."';"."\n";
$javascript_options .= "    var controller_url = '".$interfaceData["settings"]["controllerUrl"]."';"."\n";
$javascript_options .= "    var websocket_url = ".$interfaceData["settings"]["homegear"]["url"].";"."\n";
$javascript_options .= "    var websocket_port = ".$interfaceData["settings"]["homegear"]["port"].";"."\n";
$javascript_options .= "    var websocket_user = \"".$interfaceData['settings']['homegear']['user']."\""."\n";
$javascript_options .= "    var websocket_password = \"".$interfaceData['settings']['homegear']['password']."\""."\n";
$javascript_options .= "    var websocket_security_ssl = \"".$interfaceData['settings']['homegear']['ssl']."\""."\n";
$javascript_options .= "    var websocket_security = \"".$interfaceData['settings']['homegear']['security']."\""."\n";
$javascript_options .= "</script>";
