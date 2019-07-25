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

/* Include this file to check authorization */

//{{{ Load settings
if (file_exists(getcwd()."/interfacedata.php")) {
    include_once(getcwd()."/interfacedata.php");
}
else die("JSON file missing!");
//}}}

require_once("user.php");

if(!$_SERVER['WEBSOCKET_ENABLED']) die('WebSockets are not enabled on this server in "rpcservers.conf".');
if($_SERVER['WEBSOCKET_AUTH_TYPE'] != 'session') die('WebSocket authorization type is not set to "session" in "rpcservers.conf".');

$user = new User($interfaceData['settings']);
if($user->checkAuth(true) !== 0) die('unauthorized');

if ($user->checkAuth(true) === 0) {
    userSettings();
}