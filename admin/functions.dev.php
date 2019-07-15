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
