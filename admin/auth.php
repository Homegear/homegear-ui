<?php

/* Include this file to check authorization */

require_once("user.php");

if(!$_SERVER['WEBSOCKET_ENABLED']) die('WebSockets are not enabled on this server in "rpcservers.conf".');
if($_SERVER['WEBSOCKET_AUTH_TYPE'] != 'session') die('WebSocket authorization type is not set to "session" in "rpcservers.conf".');

$user = new User($interfaceData['settings']);
if(!$user->checkAuth(true)) die('unauthorized');
