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

if($user->checkAuth(true) === 0)
{
    $firstBreadcrumb     = $user->getSettings()["firstBreadcrumb"] ?? '';
    $firstBreadcrumbId   = $user->getSettings()["firstBreadcrumbId"] ?? '';
    $javascript_options  = "<script>";
    $javascript_options .= "    var twofaEnabled = ".(in_array('webauthn', $user->getSecondFactorAuthMethods(), true) ? "true" : "false").";"."\n";
    $javascript_options .= "    var userHasTwofaRegistrations = ".($user->hasWebAuthn() ? "true" : "false").";"."\n";
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
    $javascript_options .= "</script>";
}
