<?php
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
        if($_SESSION['locale'] == 'de') $_SESSION['locale'] = 'de-DE';
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
