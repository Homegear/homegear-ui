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
