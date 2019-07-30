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

if (file_exists(getcwd()."/interfacedata.php")) {
    include_once(getcwd()."/interfacedata.php");
}
else {
    die("No interfaceData file!");
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// 
////////////////////////////////////////////////////////////////////////////////////////////////////////
$_SERVER['WEBSOCKET_ENABLED'] = true;
$_SERVER['WEBSOCKET_AUTH_TYPE'] = $interfaceData['settings']['homegear']['security'];

////////////////////////////////////////////////////////////////////////////////////////////////////////
// PHP JSON clean to Javascript
////////////////////////////////////////////////////////////////////////////////////////////////////////
function clean_json_to_js() {
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
    $interfaceDataOut["options"] = $interfaceData["options"];

    foreach ($interfaceDataOut as $key => $type ){
        foreach($type as $keyLine => $line){
            if ($line == null) {
                unset($interfaceDataOut[$key][$keyLine]);
                continue;
            }
        }
    }

    if ($interfaceData["options"]['language'] != "en-US") {
        $interfaceDataOut["i18n"] = $interfaceData["i18n"][$interfaceData["options"]['language']];
        $interfaceDataOut["i18n"]["default"] = $interfaceData["i18n"]["en-US"];
    }
    else {
        $interfaceDataOut["i18n"] = $interfaceData["i18n"]["en-US"];
    }

    foreach ($interfaceData["i18n"] as $key => $value) {
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

$interfaceData["options"]["twofaEnabled"] = "false";
$interfaceData["options"]["userHasTwofaRegistrations"] = "false";
$interfaceData["options"]["firstBreadcrumb"] = $user->getSettings()["firstBreadcrumb"] ?? $interfaceData["settings"]["userDefaults"]["firstBreadcrumb"];
$interfaceData["options"]["firstBreadcrumbId"] = $user->getSettings()["firstBreadcrumbId"] ?? $interfaceData["settings"]["userDefaults"]["firstBreadcrumbId"];
$interfaceData["options"]["breadcrumbs_array"] = ["<div class=\"breadcrumbsJump\" onclick=\"main({name:interfaceData.options.firstBreadcrumb,content:interfaceData.options.firstBreadcrumbId});\">".$interfaceData["options"]["firstBreadcrumb"]."</div>"];
$interfaceData["options"]["breadcrumbs_id_array"] = [$interfaceData["options"]["firstBreadcrumbId"]];
$interfaceData["options"]["theme"] = ($user->getSettings()["theme"] ?? $interfaceData["settings"]["userDefaults"]["theme"]);
$interfaceData["options"]["highlight"] = ($user->getSettings()["highlight"] ?? $interfaceData["settings"]["userDefaults"]["highlight"]);
$interfaceData["options"]["language"] = ($user->getSettings()["language"] ?? $interfaceData["settings"]["userDefaults"]["language"]);
$interfaceData["options"]["showFloor"] = ($user->getSettings()["showFloor"] ?? $interfaceData["settings"]["userDefaults"]["showFloor"]);
$interfaceData["options"]["consoleLog"] = ( ((isset($_GET['console_log']) && ($user->getSettings()["consoleLog"] ?? '') == "url") || ($user->getSettings()["consoleLog"] ?? $interfaceData["settings"]["userDefaults"]["consoleLog"]) == true )  ? true : false);
$interfaceData["options"]["interfacePath"] = $interfaceData["settings"]["interfacePath"];
$interfaceData["options"]["controller_url"] = $interfaceData["settings"]["controllerUrl"];
$interfaceData["options"]["websocket_url"] = $interfaceData["settings"]["homegear"]["url"];
$interfaceData["options"]["websocket_port"] = $interfaceData["settings"]["homegear"]["port"];
$interfaceData["options"]["websocket_user"] = $interfaceData['settings']['homegear']['user'];
$interfaceData["options"]["websocket_password"] = $interfaceData['settings']['homegear']['password'];
$interfaceData["options"]["websocket_security_ssl"] = $interfaceData['settings']['homegear']['ssl'];
$interfaceData["options"]["websocket_security"] = $interfaceData['settings']['homegear']['security'];

$javascript_options  = "
    document.addEventListener('DOMContentLoaded', function(event) {
        homegear.disconnect();

        var hg_save_invoke_multi = homegear.invoke_multi;
        var hg_save_value_set_multi = homegear.value_set_multi;
        var hg_save_value_set_clickcounter = homegear.value_set_clickcounter;

        homegear = homegear_new(interfaceData.options.websocket_user, interfaceData.options.websocket_password);

        document.getElementById('loadingPage').style.display = 'none';

        homegear.disconnected(function() {
        });

        homegear.reconnected(function() {
        });

        homegear.connect();

        homegear.invoke_multi = hg_save_invoke_multi;
        homegear.value_set_multi = hg_save_value_set_multi;
        homegear.value_set_clickcounter = hg_save_value_set_clickcounter;
    });
    
";
