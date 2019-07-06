<?php

if($user->checkAuth(true))
{
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
    $javascript_options .= "    var interfacePath = '".$interfacePath."';"."\n";
    $javascript_options .= "    var controller_url = '".$interfaceData["settings"]["controllerUrl"]."';"."\n";
    $javascript_options .= "    var websocket_url = ".$interfaceData["settings"]["homegear"]["url"].";"."\n";
    $javascript_options .= "    var websocket_port = ".$interfaceData["settings"]["homegear"]["port"].";"."\n";
    $javascript_options .= "    var websocket_security = '".$interfaceData["settings"]["homegear"]["security"]."';"."\n";
    $javascript_options .= "    var websocket_security_ssl = '".$interfaceData["settings"]["homegear"]["ssl"]."';"."\n";
    $javascript_options .= "    var websocket_user = '".$interfaceData["settings"]["homegear"]["user"]."';"."\n";
    $javascript_options .= "    var websocket_password = '".$interfaceData["settings"]["homegear"]["password"]."';"."\n";
    $javascript_options .= "</script>";
}
