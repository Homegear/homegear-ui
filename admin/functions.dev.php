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

if (file_exists("interfacedata.dummy.php")) {
    include_once("interfacedata.dummy.php");
}
else if (file_exists("../interfacedata.dummy.php")) {
    include_once("../interfacedata.dummy.php");
}
if(isset($dummyInterfaceDataJson)) {
    $dummyInterfaceData = json_decode($dummyInterfaceDataJson, true);
    unset($dummyInterfaceData["iconFallback"]);
    unset($dummyInterfaceData["i18n"]);
    unset($dummyInterfaceData["themes"]);
    unset($dummyInterfaceData["menu"]);
    unset($dummyInterfaceData["mainmenu"]);
    unset($dummyInterfaceData["deviceCategories"]);
    unset($dummyInterfaceData["manifest"]);
    unset($dummyInterfaceData["options"]);
    $interfaceData = array_replace_recursive($interfaceData, $dummyInterfaceData);
}

if (!is_array($interfaceData)) die("Invalid JSON file!");

////////////////////////////////////////////////////////////////////////////////////////////////////////
// ARRAY PRINT
// Hilfsfunktion zur lesbaren Darstellung von PHP Arrays
////////////////////////////////////////////////////////////////////////////////////////////////////////
function print_array($result){
    echo "<pre>";
    print_r($result);
    echo "</pre>";
  }

  ////////////////////////////////////////////////////////////////////////////////////////////////////////
  // in_array_r rcursive lookup
  ////////////////////////////////////////////////////////////////////////////////////////////////////////
  function in_array_r($needle, $haystack, $strict = false) {
      foreach ($haystack as $item) {
          if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
              return true;
          }
      }
      return false;
  }

////////////////////////////////////////////////////////////////////////////////////////////////////////
// PHP JSON clean to Javascript
////////////////////////////////////////////////////////////////////////////////////////////////////////
function clean_json_to_js() {
    global $interfaceData;
    global $defaultInterfaceData;

    $map_automation_json = '
    {
      "map_automation": {
          "devices": {
              "_dummy_": {}
          },
          "profiles": {
              "_dummy_": {}
          }
      }
    }
    ';
    $map_automation = json_decode($map_automation_json, true);
    
    $interfaceDataOut = array();
    $interfaceDataOut["devices"] = $interfaceData["devices"];
    $interfaceDataOut["rooms"] = $interfaceData["rooms"];
    $interfaceDataOut["floors"] = $interfaceData["floors"];
    $interfaceDataOut["notifications"] = $interfaceData["notifications"];
    $interfaceDataOut["automations"] = $interfaceData["automations"];
    $interfaceDataOut["map_automation"] = $interfaceData["map_automation"];
    $interfaceDataOut["menu"] = $interfaceData["menu"];
    $interfaceDataOut["mainmenu"] = $interfaceData["mainmenu"];
    $interfaceDataOut["themes"] = $interfaceData["themes"];
    $interfaceDataOut["map_invoke"] = $interfaceData["map_invoke"];
    $interfaceDataOut["roles"] = $interfaceData["roles"];
    $interfaceDataOut["options"] = $interfaceData["options"];
    $interfaceDataOut["manifest"] = $interfaceData["manifest"];
    $interfaceDataOut["profiles"] = $interfaceData["profiles"];
    $interfaceDataOut["iconFallback"] = $interfaceData["iconFallback"];
    $interfaceDataOut["deviceCategories"] = $interfaceData["deviceCategories"];
    $interfaceDataOut["map_automation"] = $map_automation["map_automation"];

    foreach ($interfaceDataOut as $key => $type ){
        foreach($type as $keyLine => $line){
            if ($line == null) {
                unset($interfaceDataOut[$key][$keyLine]);
                continue;
            }
        }
    }

    $lang = $interfaceData["options"]["language"];

    foreach ($interfaceDataOut["deviceCategories"] as &$category) {
        if (array_key_exists($lang, $category["name"]))
            $category["name"] = $category["name"][$lang];
        if (array_key_exists($lang, $category["statusMap"]))
            $category["statusMap"] = $category["statusMap"][$lang];
    }

    if ($lang != "en-US") {
        $interfaceDataOut["i18n"] = $interfaceData["i18n"][$lang];
        $interfaceDataOut["i18n"]["default"] = $interfaceData["i18n"]["en-US"];
    }
    else {
        $interfaceDataOut["i18n"] = $interfaceData["i18n"]["en-US"];
    }

    foreach($defaultInterfaceData["i18n"] as $key => $value){
        $interfaceDataOut["i18n"]["languages"][$key]["name"] = $value["settings.user.manage.language.name"];
    }
    $interfaceDataOutJson = json_encode($interfaceDataOut, JSON_PRETTY_PRINT);
    $interfaceDataOutJson = str_replace(array('"dummy": "toBeRemoved",', '"dummy": "toBeRemoved"', '"dynamicMetadata": null,'), array("", "", '"dynamicMetadata":[],'), $interfaceDataOutJson);

    $out = "var interfaceData = ".$interfaceDataOutJson.';'."\n";

    return $out;
}

class User {
    public function getSecondFactorAuthMethods()
    {
        return array(true);
    }

    public function hasWebAuthn()
    {
        return true;
    }

    public function getSettings() {
        global $interfaceData;
        return $interfaceData["settings"]["userDefaults"];
    }

    public function checkAuth($redirectToLogin) {
        if($redirectToLogin == true){
            return false;
        }
        return true;
    }
}

$user = new User($interfaceData['settings']);

userSettings();

$interfaceData["options"]["websocket_user"] = $interfaceData['settings']['homegear']['user'];
$interfaceData["options"]["websocket_password"] = $interfaceData['settings']['homegear']['password'];

$javascript_options  = "
    document.addEventListener('DOMContentLoaded', function(event) {
        homegear.onDisconnected = [];
        homegear.onReconnected = [];
        document.getElementById('loadingPage').style.display = 'none';
    });
";
