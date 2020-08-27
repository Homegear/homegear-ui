<?php

if (file_exists(getcwd()."/interfacedata.php")) {
    include_once(getcwd()."/interfacedata.php");
}
else die("JSON file missing!");
require_once("user.php");
if(!$_SERVER['WEBSOCKET_ENABLED']) die('WebSockets are not enabled on this server in "rpcservers.conf".');
if($_SERVER['WEBSOCKET_AUTH_TYPE'] != 'session') die('WebSocket authorization type is not set to "session" in "rpcservers.conf".');
$user = new User($interfaceData['settings']);
if($user->checkAuth(true) !== 0) die('unauthorized');
if ($user->checkAuth(true) === 0) {
    userSettings();
}
function homegear_init() {
    global $interfaceData;
    if(!$_SERVER['WEBSOCKET_ENABLED']) die('WebSockets are not enabled on this server in "rpcservers.conf".');
    if($_SERVER['WEBSOCKET_AUTH_TYPE'] != 'session') die('WebSocket authorization type is not set to "session" in "rpcservers.conf".');
    $hg = new \Homegear\Homegear();
    try {
        $hg_lang     = $interfaceData["options"]["language"] ?? 'en-US';
        $hg_ui_elems = $hg->getAllUiElements($hg_lang);
        $hg_floors   = $hg->getStories($hg_lang);
        $hg_rooms    = $hg->getRooms($hg_lang);
        $hg_roles    = $hg->getRoles($hg_lang);
        $hg_profiles = $hg->getAllVariableProfiles($hg_lang);
    }
    catch (\Homegear\HomegearException $e) {
        die( $hg->log(2, 'Homegear Exception catched. ' .
                               "Code: {$e->getCode()} " .
                            "Message: {$e->getMessage()}")
        );
    }
    function array_move_element($key, &$from, &$dest) {
        $dest[$key] = $from[$key];
        unset($from[$key]);
    }
    function floor_parse(&$house, &$floor) {
        $id = $floor['ID'];
        $house['floors'][$id] = [
            'name'  => $floor['NAME'],
            'rooms' => $floor['ROOMS'],
        ];
        foreach ($floor['METADATA'] as $name => &$data)
            $house['floors'][$id][$name] = $data;
    }
    function room_parse(&$house, &$room) {
        $id = $room['ID'];
        $house['rooms'][$id] = [
            'devices' => [],
            'floors'  => [],
            'name'    => $room['NAME'],
        ];
        foreach ($room['METADATA'] as $name => &$data)
            $house['rooms'][$id][$name] = $data;
    }
    function profile_parse(&$house, &$profile) {
        $id = $profile['id'];
        $house['profiles'][$id] = $profile;
    }
    function device_is_simple(&$dev) {
        return $dev['type'] == 'simple';
    }
        function device_values_into_props(&$dev) {
        foreach ($dev['controls'] as &$control)
            foreach ($control['variableInputs'] as &$input)
                if (array_key_exists('value', $input))
                    array_move_element('value', $input, $input['properties']);
    }
    function device_cleanup_type(&$dev) {
        foreach ($dev['controls'] as &$control)
            unset($control['type']);
        unset($dev['type']);
    }
    function device_cleanup_language_disabled(&$dev, $lang) {
        if (! array_key_exists('metadata', $dev) ||
            ! array_key_exists('event_hooks', $dev['metadata']))
            return;
        $event_hooks = &$dev['metadata']['event_hooks'];
        foreach ($event_hooks as &$event) {
            if (! array_key_exists('translations', $event))
                continue;
            $trans    = &$event['translations'];
            $lang_sel = array_key_exists($lang, $trans) ? $lang : 'en-US';
            $event['texts'] = $trans[$lang_sel];
            unset($event['translations']);
        }
    }
    function device_make_complex($dev) {
                $dev['grid'] = null;
        $dev['controls'][]['cell'] = null;
        $fields_to_move = [
            'control', 'uniqueUiElementId', 'variableInputs', 'variableOutputs'
        ];
        foreach ($fields_to_move as $field)
            array_move_element($field, $dev, $dev['controls'][0]);
        return $dev;
    }
    function device_build_invoke_map(&$map, $dev, $id) {
        foreach ($dev['controls'] as $key_control => $control) {
            foreach ($control['variableInputs'] as $key_input => $input) {
                $roles = $input['roles'] ?? array();
                $map[$input['peer']]
                    [$input['channel']]
                    [$input['name']][] = [
                        'databaseId' => $id,
                        'control'    => $key_control,
                        'input'      => $key_input,
                        'roles'      => $roles
                ];
            }
            foreach ($control['variableOutputs'] as $key_output => $output) {
                $roles = $output['roles'] ?? array();
                $map[$output['peer']]
                    [$output['channel']]
                    [$output['name']][] = [
                        'databaseId' => $id,
                        'control'    => $key_control,
                        'input'      => $key_input,
                        'roles'      => $roles
                ];
            }
        }
    }
    function device_parse(&$house, &$map_invoke, &$dev, $lang) {
        $id = $dev['databaseId'];
                $house['rooms'][$dev['room']]['devices'][] = $id;
        if (device_is_simple($dev))
            $dev = device_make_complex($dev);
        device_values_into_props($dev);
        device_cleanup_type($dev);
        device_cleanup_language_disabled($dev, $lang);
        device_build_invoke_map($map_invoke, $dev, $id);
        foreach ($dev['controls'] as $key => $control) {
            if (isset($control['controlMetadata']['visualizeInOverview'])) {
                $dev['controls'][$key]['variableInputs'][0]['properties']['visualizeInOverview'] = $control['controlMetadata']['visualizeInOverview'];
            }
                    }
        $house['devices'][$id] = $dev;
    }
    function house_build_back_refs(&$house) {
        foreach ($house['floors'] as $id_floor => &$floor) {
            foreach ($floor['rooms'] as $id_room) {
                $house['rooms'][$id_room]['floors'][] = $id_floor;
                foreach ($house['rooms'][$id_room]['devices'] as $id_dev) {
                    $house['devices'][$id_dev]['floors'][] = $id_floor;
                    $house['devices'][$id_dev]['rooms'][] = $id_room;
                }
            }
        }
    }
    function mainmenu_parse() {
        global $interfaceData;
        foreach ($interfaceData["mainmenu"] as $key => $value) {
            if ($value["name"] == "") {
                unset($interfaceData["mainmenu"][$key]);
            }
        }
        return $interfaceData["mainmenu"];
    }
    function menu_parse() {
        global $interfaceData;
        foreach ($interfaceData["menu"] as $key => $value) {
            if ($value["name"] == "") {
                unset($interfaceData["menu"][$key]);
            }
        }
        return $interfaceData["menu"];
    }
    $house = [
        'devices'      => [],
        'floors'       => [],
        'rooms'        => [],
        'roles'        => [],
        'mainmenu'     => mainmenu_parse(),
        'menu'         => menu_parse(),
        'profiles'     => [],
        'themes'       => $interfaceData["themes"],
        'options'      => $interfaceData["options"],
        'manifest'     => $interfaceData["manifest"],
        'iconFallback' => $interfaceData["iconFallback"],
    ];
    if($hg_lang != "en-US"){
        $i18nOut = $interfaceData["i18n"][$hg_lang];
        $i18nOut["default"] = $interfaceData["i18n"]["en-US"];
    }
    else{
        $i18nOut = $interfaceData["i18n"]["en-US"];
    }
    $house["i18n"] = $i18nOut;
        $map_invoke = [];
    foreach($hg_roles as $key => $value){
        $aggregated = $hg->aggregateRoles(2, $value["ID"], array());
        $varInRole = $hg->getVariablesInRole($value["ID"]);
        if($aggregated["variableCount"] > 0 || isset($value["METADATA"]["ui"])){
            $house['roles'][$value["ID"]]["name"] = $value["NAME"];
            if(isset($value["METADATA"]["ui"]) && isset($value["METADATA"]["ui"]["translations"]) && is_array($value["METADATA"]["ui"]["translations"])){
                foreach ($value["METADATA"]["ui"]["translations"] as $key => $translation) {
                    $translation = array("dummy" => "toBeRemoved") + $translation;
                    $value["METADATA"]["ui"]["translations"][$key] = $translation;
                }
            }
            if(isset($value["METADATA"]["ui"]) && is_array($value["METADATA"]["ui"]["translations"]) && array_key_exists($hg_lang, $value["METADATA"]["ui"]["translations"])){
                $house['roles'][$value["ID"]]["texts"] = $value["METADATA"]["ui"]["translations"][$hg_lang];
                unset($value["METADATA"]["ui"]["translations"]);
            }
            else if(isset($value["METADATA"]["ui"]) && is_array($value["METADATA"]["ui"]["translations"])){
                $house['roles'][$value["ID"]]["texts"] = $value["METADATA"]["ui"]["translations"]["en-US"];
                unset($value["METADATA"]["ui"]["translations"]);
            }
            if(isset($value["METADATA"]["ui"]) && isset($value["METADATA"]["ui"]["label"]) && array_key_exists($hg_lang, $value["METADATA"]["ui"]["label"])){
                $house['roles'][$value["ID"]]["name"] = $value["METADATA"]["ui"]["label"][$hg_lang];
                unset($value["METADATA"]["ui"]["label"]);
            }
            else if(isset($value["METADATA"]["ui"]) && isset($value["METADATA"]["ui"]["label"])){
                $house['roles'][$value["ID"]]["name"] = $value["METADATA"]["ui"]["label"]["en-US"];
                unset($value["METADATA"]["ui"]["label"]);
            }
            if(isset($value["METADATA"]["ui"]) && isset($value["METADATA"]["ui"]["simpleCreationInfo"])){
                unset($value["METADATA"]["ui"]["simpleCreationInfo"]);
            }
            if(is_array($house['roles'][$value["ID"]]) && isset($value["METADATA"]["ui"]) && is_array($value["METADATA"]["ui"])){
                $house['roles'][$value["ID"]] = array_replace_recursive($house['roles'][$value["ID"]], $value["METADATA"]["ui"]);
            }
            if(isset($value["METADATA"]["ui"]) && isset($value["METADATA"]["ui"]["roleProfileValues"]["options"])){
                $house['roles'][$value["ID"]]["roleProfileValues"]["options"] = array("dummy" => "toBeRemoved") + $value["METADATA"]["ui"]["roleProfileValues"]["options"];
            }
            $house['roles'][$value["ID"]]["aggregated"] = $aggregated;
            $house['roles'][$value["ID"]]["varInRole"] = $varInRole;
        }
    }
    foreach ($hg_floors as &$floor)
        floor_parse($house, $floor);
    foreach ($hg_rooms as &$room)
        room_parse($house, $room);
    foreach ($hg_profiles as &$profile)
        profile_parse($house, $profile);
    foreach ($hg_ui_elems as &$dev)
        device_parse($house, $map_invoke, $dev, $hg_lang);
        house_build_back_refs($house);
    $house["map_invoke"] = $map_invoke;
    return $house;
}


function userStyle() {
    global $user;
    global $interfaceData;
    if (file_exists("style.min.css")) {
        $style = file_get_contents("style.min.css");
    } 
    elseif (file_exists("style.css")) {
        $style = file_get_contents("style.css");
    } 
    else {
        die("App style file is missing!");
    }
    $themes = $interfaceData["themes"];
    $theme = $interfaceData["themes"][1];
    $theme_highlight = $themes[0];
    $theme_standard = $themes[1];
    foreach($themes as $key => $value){
        if($value["name"] == $user->getSettings()['theme']){
            $theme = $themes[$key];
            break;
        }
    }
    unset($themes[0]);
    unset($themes[1]);
    if($theme["colors"]["highlight_active"] == ""){
        $theme["colors"]["highlight_active"] = $user->getSettings()['highlight'];
    }
    $style_theme = str_replace($theme_standard["colors"], $theme["colors"], $style);
    return $style_theme;
}


?>
<?php


          error_reporting($interfaceData["settings"]["errorReporting"]);

?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
    <title>Shif</title>
    <meta charset="UTF-8">
    <meta name="author" content="Homegear GmbH" />
    <meta name="keywords" content="Shif" />
    <meta name="description" content="Shif" />
    <meta name="publisher" content="Homegear GmbH" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" id="viewport" content="width=device-width, height=device-height, initial-scale=<?php echo $interfaceData["options"]["viewportScale"]; ?>, minimum-scale=<?php echo $interfaceData["options"]["viewportScale"]; ?>,  maximum-scale=<?php echo $interfaceData["options"]["viewportScale"]; ?>, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="application-name" content="Shif">
    <meta name="short_name" content="Shif">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" sizes="36x36" href="media/logo/icon/smarthome36.png">
    <link rel="icon" sizes="48x48" href="media/logo/icon/smarthome48.png">
    <link rel="icon" sizes="72x72" href="media/logo/icon/smarthome72.png">
    <link rel="icon" sizes="96x96" href="media/logo/icon/smarthome96.png">
    <link rel="icon" sizes="144x144" href="media/logo/icon/smarthome144.png">
    <link rel="icon" sizes="128x128" href="media/logo/icon/smarthome128.png">
    <link rel="icon" sizes="192x192" href="media/logo/icon/smarthome192.png">
    <link rel="apple-touch-icon" sizes="128x128" href="media/logo/icon/smarthome128.png">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="media/logo/icon/smarthome128.png">
    <link rel="apple-touch-startup-image" href="media/logo/icon/smarthome128.png">
<?php
if (file_exists("style.vendor.css")) {
        echo '    <link href="style.vendor.css?revision='.$interfaceData["manifest"]["revision"].'" rel="stylesheet" type="text/css">'."\n";
}
else {
    die("Vendor style file is missing!");
}

echo '<style>'."\n";
echo userStyle()."\n";

echo '
/* scrollbar */
::-webkit-scrollbar {
  width: '.$interfaceData["options"]["scrollbarScale"].'px;
}
';
echo'</style>'."\n";

echo '
    <script type="text/javascript">
';

if (class_exists('\Homegear\Homegear')) {
    $hg_interfaceData = homegear_init();
    foreach($interfaceData["i18n"] as $key => $value){
        $hg_interfaceData["i18n"]["languages"][$key]["name"] = $value["settings.user.manage.language.name"];
    }
            $json_str = json_encode($hg_interfaceData, JSON_PRETTY_PRINT);
    $json_str = str_replace(array('"dummy": "toBeRemoved",', '"dummy": "toBeRemoved"'), array("", ""), $json_str);
    echo "var interfaceData = ".$json_str.";"."\n";

        echo "if (Array.isArray(interfaceData.profiles)) interfaceData.profiles = {}";

}
else {
    echo 'console.log("HOMEGEAR PHP API NOT FOUND!");'."\n";
    echo clean_json_to_js()."\n";
}

echo '</script>';
?>
</head>
<body>
  <div id="loadingPage">
    <div class="loadingWrapper">
      <svg version="1.1" id="ani_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="104.9px" height="104.9px" viewBox="0 0 104.9 104.9" enable-background="new 0 0 104.9 104.9" xml:space="preserve">
        <g>
          <polygon points="52.2,44 28.7,64 28.7,103.9 74.6,103.9 74.6,64" />
          <g>
            <path class="ani_logo_stroke ani_logo_stroke_1" fill="none" stroke-width="3" stroke-miterlimit="10" d="M12.4,19.2C22.8,9.1,36.9,2.9,52.5,2.9c15.5,0,29.6,6.2,40,16.2"/>
            <path class="ani_logo_stroke ani_logo_stroke_2" fill="none" stroke-width="3" stroke-miterlimit="10" d="M32.6,39.4c5.2-5.1,12.2-8.2,20.1-8.2c7.7,0,14.6,3,19.8,7.9"/>
            <path class="ani_logo_stroke ani_logo_stroke_3" fill="none" stroke-width="3" stroke-miterlimit="10" d="M22.6,29.3c7.7-7.5,18.3-12.1,29.9-12.1c11.6,0,22.1,4.6,29.8,12"/>
          </g>
        </g>
      </svg>
    </div>
  </div>

  <div id="error">
  </div>

  <div id="breadcrumbs_wrapper">
    <div id="breadcrumbs"></div>
  </div>
  <div id="inhalt"></div>

<?php
  if (file_exists("icons.js")) {
      echo '<script src="icons.js?revision='.$interfaceData["manifest"]["revision"].'"></script>'."\n";
  }
  else {
      die("App icon file is missing!");
  }

  if (file_exists("script.vendor.js")) {
      echo '<script src="script.vendor.js?revision='.$interfaceData["manifest"]["revision"].'"></script>'."\n";
  }
  else {
      die("Vendor script file is missing!");
  }

  if (file_exists("script.min.js")) {
      echo '<script src="script.min.js?revision='.$interfaceData["manifest"]["revision"].'"></script>'."\n";
  }
  elseif (file_exists("script.js")) {
      echo '<script src="script.js?revision='.$interfaceData["manifest"]["revision"].'"></script>'."\n";
  }
  else {
      die("App script file is missing!");
  }

  echo '<script>
    '.(isset($javascript_options) ? $javascript_options : "").'
    console.log("UI revision: '.$interfaceData["manifest"]["revision"].'");
  </script>';
?>

</body>
</html>
