<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////
// i18n
////////////////////////////////////////////////////////////////////////////////////////////////////////
function i18n($langKey){
    global $interfaceData;
    $i18nOut = null;

    if(array_key_exists($interfaceData["options"]["language"], $interfaceData["i18n"]) && $interfaceData["options"]["language"] != "en-US"){
        $i18nOut = $interfaceData["i18n"][$interfaceData["options"]["language"]];
        $i18nOut["default"] = $interfaceData["i18n"]["en-US"];
    }
    else if(array_key_exists("language", $interfaceData["settings"]["userDefaults"]) && array_key_exists($interfaceData["settings"]["userDefaults"]["language"], $interfaceData["i18n"]) && $interfaceData["settings"]["userDefaults"]["language"] != 'en-US'){
        $i18nOut = $interfaceData["settings"]["userDefaults"]["language"];
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

////////////////////////////////////////////////////////////////////////////////////////////////////////
// content
////////////////////////////////////////////////////////////////////////////////////////////////////////
function content() {
    global $interfaceData;
    $out = '<div id="inhalt">'."\n";
    $activeArrow = '<div class="tab_pfeil"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="200" height="100" viewBox="0, 0, 200, 100"><g id="Ebene_1"><path d="M0,-0 L204,-0 L101.747,100.002" /></g></svg></div>';

    foreach($interfaceData["mainmenu"] as $mainmenu) {
        $out .= '<div id="'.$mainmenu["id"].'" class="content">'."\n";
        if (isset($mainmenu["tabs"])) {
            $out .= '<div id="tabs">'."\n";
            $tabsCount = count($mainmenu["tabs"]);
            $tabSize = 100 / $tabsCount;
            $count = 0;
            $tabWrappers = null;
            foreach($mainmenu["tabs"] as $tab) {
                $out .= '<div id="'.$mainmenu["id"].'_'.$tab["id"].'_button" class="tab button '.(isset($tab["active"]) && $tab["active"] == true ?  "active" : "" ).'" style="width:'.$tabSize.'%;" onclick="showTab(this, '.$count.');">'."\n";
                $out .= i18n($tab["name"])."\n";
                $out .= (isset($tab["active"]) && $tab["active"] == true ?  $activeArrow : "" )."\n";
                $out .= '</div>'."\n";
                $tabWrappers .= '<div id="'.$mainmenu["id"].'_'.$tab["id"].'" class="tabWrapper '.(isset($tab["active"]) && $tab["active"] == true ?  "activeTab" : "" ).'">'."\n";
                if (isset($tab["content"])){
                    $tabWrappers .= $tab["content"]."\n";
                }
                $tabWrappers .= '</div>'."\n";
                $count++;
            }
            $out .= '</div>'."\n";
            $out .= $tabWrappers."\n";
        }
        $out .= '</div>'."\n";
    }

    $out .= '</div>'."\n";

    return $out;
}

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
