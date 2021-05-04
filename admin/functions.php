<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////
// i18n
////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
function i18n($langKey){
    global $interfaceData;
    $i18nOut = null;

    if(array_key_exists($interfaceData["options"]["language"], $interfaceData["i18n"]) && $interfaceData["options"]["language"] != "en-US"){
        $i18nOut = $interfaceData["i18n"][$interfaceData["options"]["language"]];
        $i18nOut["default"] = $interfaceData["i18n"]["en-US"];
    }
    else if(array_key_exists("language", $interfaceData["settings"]["userDefaults"]) && array_key_exists($interfaceData["settings"]["userDefaults"]["language"], $interfaceData["i18n"]) && $interfaceData["settings"]["userDefaults"]["language"] != 'en-US'){
        $i18nOut = $interfaceData["i18n"][$interfaceData["settings"]["userDefaults"]["language"]];
        $i18nOut["default"] = $interfaceData["i18n"]["en-US"];
    }
    else{
        $i18nOut = $interfaceData["i18n"]["en-US"];
    }

    if(array_key_exists($langKey, $i18nOut)){
        return $i18nOut[$langKey];
    }
    else if(isset($i18nOut["default"]) && array_key_exists($langKey, $i18nOut["default"])){
        return $i18nOut["default"][$langKey];
    }
    else{
        return $langKey;
    }
}
*/

////////////////////////////////////////////////////////////////////////////////////////////////////////
// parst die Styledatei und ersetzt je nach gewähltem Theme die Farbeinstellungen
////////////////////////////////////////////////////////////////////////////////////////////////////////
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

////////////////////////////////////////////////////////////////////////////////////////////////////////
// homegear
////////////////////////////////////////////////////////////////////////////////////////////////////////
function homegear_init() {
    global $interfaceData;

    if(!$_SERVER['WEBSOCKET_ENABLED']) die('WebSockets are not enabled on this server in "rpcservers.conf".');
    if($_SERVER['WEBSOCKET_AUTH_TYPE'] != 'session') die('WebSocket authorization type is not set to "session" in "rpcservers.conf".');

    $hg = new \Homegear\Homegear();

    try {
        //Set browser language when no language is set in settings.
        $hg_lang = $interfaceData["options"]["language"];
        if (!$hg_lang) {
            $locales = explode(',', explode(';', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0]);
            foreach($locales as $locale) {
                if($locale == 'de') $locale = 'de-DE';
                if(array_key_exists($locale, $interfaceData['i18n'])) {
                    $hg_lang = $locale;
                    break;
                }
            }
            if (!$hg_lang) $hg_lang = 'en-US';
        }
        $hg_ui_elems = $hg->getAllUiElements($hg_lang);
        $hg_floors   = $hg->getStories($hg_lang);
        $hg_rooms    = $hg->getRooms($hg_lang);
        $hg_roles    = $hg->getRoles($hg_lang);
        $hg_profiles = $hg->getAllVariableProfiles($hg_lang);
        $hg_notifications = $hg->getUiNotifications($hg_lang);
        # TODO: insert homegear call
        $hg_automations = $interfaceData["automations"];
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

    // Move the values key-value-pairs into their respective properties
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
        // Create an empty grid frame
        $dev['grid'] = null;
        $dev['controls'][]['cell'] = null;

        $fields_to_copy = [
            'uniqueUiElementId',
        ];
        $fields_to_move = [
            'control', 'variableInputs', 'variableOutputs'
        ];
        foreach ($fields_to_move as $field)
            array_move_element($field, $dev, $dev['controls'][0]);
        foreach ($fields_to_copy as $field)
            $dev['controls'][0][$field] = $dev[$field];

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

        // Push device into the room it is located in
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
            //$dev['controls'][$key]['metadata'] = array_replace_recursive($control['metadata'], $control['controlMetadata']);
        }

        $house['devices'][$id] = $dev;
    }

    function device_category_patch_language(&$house, &$categories, $lang) {
        foreach ($categories as &$category) {
            if (array_key_exists($lang, $category["name"]))
                $category['name'] = $category['name'][$lang];
            if (array_key_exists($lang, $category['statusMap']))
                $category['statusMap'] = $category['statusMap'][$lang];
        }

        $house['deviceCategories'] = $categories;
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

        $rooms_without_floor = [];
        foreach ($house['rooms'] as $id_room => &$room) {
            if (! array_key_exists('floors', $room) ||
                count($room['floors']) === 0)
                $rooms_without_floor[] = $id_room;
        }

        foreach ($rooms_without_floor as $id_room) {
            foreach ($house['rooms'][$id_room]['devices'] as $id_dev) {
                $house['devices'][$id_dev]['rooms'][] = $id_room;
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

    function automations_parse($automations) {
        function add_to_map(&$map, $dev, $id) {
            $map[$dev['device_id']]
                [$dev['control']]
                [$dev['input']]
                [] = $id;

            $map[$dev['device_id']]
                [$dev['control']]
                [$dev['input']] = array_unique($map[$dev['device_id']]
                                                   [$dev['control']]
                                                   [$dev['input']]);
        }

        $out = [
            'devices'  => [],
            'profiles' => [],
        ];

        foreach ($automations as $id => $automation) {
            if (array_key_exists('condition', $automations) &&
                array_key_exists('devices', $automations['condition']) &&
                array_key_exists('values', $automations['condition']['devices']))
                foreach ($automations['condition']['devices']['values'] as $dev)
                    add_to_map($out['devices'], $dev);

            if (array_key_exists('action', $automations) &&
                array_key_exists('device', $automations['action']))
                add_to_map($out['devices'], $automations['action']['device']);

            if (array_key_exists('action', $automations) &&
                array_key_exists('profile', $automations['action'])) {
                $out['profile']['profile_id'][] = $id;
                $out['profile']['profile_id'] = array_unique($out['profile']['profile_id']);
            }
        }

        return $out;
    }

    function notification_parse(&$hg_notifications) {
        $out = [];

        foreach ($hg_notifications as &$notification)
            $out[$notification['id']] = $notification;

        return $out;
    }

    $house = [
        'devices'      => [],
        'floors'       => [],
        'notifications'=> notification_parse($hg_notifications),
        'automations'  => $hg_automations,
        'rooms'        => [],
        'roles'        => [],
        'mainmenu'     => mainmenu_parse(),
        'menu'         => menu_parse(),
        'profiles'     => [],
        'themes'       => $interfaceData["themes"],
        'options'      => $interfaceData["options"],
        'manifest'     => $interfaceData["manifest"],
        'iconFallback' => $interfaceData["iconFallback"],
        'deviceCategories' => $interfaceData["deviceCategories"],
    ];

    if($hg_lang != "en-US"){
        $i18nOut = $interfaceData["i18n"][$hg_lang];
        $i18nOut["default"] = $interfaceData["i18n"]["en-US"];
    }
    else{
        $i18nOut = $interfaceData["i18n"]["en-US"];
    }

    $house["i18n"] = $i18nOut;

    // will be filled while deviceparsing
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

    device_category_patch_language($house, $interfaceData['deviceCategories'],
                                   $hg_lang);

    // Insert the cross references
    house_build_back_refs($house);

    $house["map_invoke"] = $map_invoke;
    $house["map_automation"] = automations_parse($hg_automations);

    return $house;
}
