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

    // http://localhost/setup.php?key=[interfaceData.settings.setupKey]
    // &action=generateExtensions
    if (file_exists(getcwd()."/interfacedata.php")){
        include(getcwd()."/interfacedata.php");
        $interfaceData["options"] = array(
            "language" => "en-US"
        );
    }
    else {
        die("No interfaceData file!");
    }

    if ( isset($interfaceData["settings"]["setupKey"]) && isset($_GET["key"]) && $_GET["key"] == $interfaceData["settings"]["setupKey"] ){
        if(isset($_GET["action"]) && is_dir(getcwd()."/admin")){
            include(getcwd()."/admin/admin.php");
            die();
        }
    }
    else {
        die("Access denied!");
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // json raw
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    if(isset($_GET["json"])){
        header('Content-Type: application/json; charset=utf-8');
        die(json_encode($interfaceData, JSON_PRETTY_PRINT));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // homegear json raw
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if(isset($_GET["homegear-json-raw"])){
        header('Content-Type: application/json; charset=utf-8');
        try {
            $hg = new \Homegear\Homegear();
            $allInterfaceData = array();
            $allInterfaceData["Stories"] = $hg->getStories($interfaceData["options"]["language"]);
            $allInterfaceData["Rooms"] = $hg->getRooms($interfaceData["options"]["language"]);
            $allInterfaceData["Users"] = $hg->listUsers();
            $allInterfaceData["systemVariables"] = $hg->getAllSystemVariables();
            $allInterfaceData["Roles"] = $hg->getRoles($interfaceData["options"]["language"]);
            $allInterfaceData["UiElements"] = $hg->getAllUiElements($interfaceData["options"]["language"]);
            $allInterfaceData["Devices"] = $hg->getAllValues();
            die(json_encode($allInterfaceData, JSON_PRETTY_PRINT));
        }
        catch (\Homegear\HomegearException $e) {
            die('{"error": "Exception catched"; "Code": "'.$e->getCode().'", "Message": "'.$e->getMessage().'"}');
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // homegear json processed
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if(isset($_GET["homegear-json"])){
        header('Content-Type: application/json; charset=utf-8');
        if(file_exists(getcwd()."/admin/master/homegear/functions.php")){
            include(getcwd()."/admin/master/homegear/functions.php");
            die(json_encode(homegear_init(), JSON_PRETTY_PRINT));
        }
        else{
            die('{"error": "No homegear functions.php file!"}');
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // homegear
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if(isset($_GET["homegear"])){
        header('Content-Type: application/json; charset=utf-8');
        try {
            $hg = new \Homegear\Homegear();
        }
        catch(\Homegear\HomegearException $e) {
            die('{"error": "Exception catched"; "Code": "'.$e->getCode().'", "Message": "'.$e->getMessage().'"}');
        }

        if (file_exists(getcwd()."/interfacedata.import.php")) {
            include_once(getcwd()."/interfacedata.import.php");
        }
        if (isset($customImportInterfaceDataJson)) {
            $oldInterfaceData = json_decode($customImportInterfaceDataJson, true);
        }
        else if(isset($importInterfaceDataJson)){
            $oldInterfaceData = json_decode($importInterfaceDataJson, true);
        }
        else {
            die('{"error": "No importInterfaceDataJson set!"}');
        }

        $allInterfaceData = array();

        if(isset($_GET["deleteDevice"])){
            $CurrentDevices = $hg->getAllValues();
            if(count($CurrentDevices) > 0){
                foreach($CurrentDevices as $value){
                    $allInterfaceData["deleteDevice"][$value["ID"]] = $hg->deleteDevice($value["ID"]);
                }
            }
        }

        if(isset($_GET["createDevice"])){
            foreach($oldInterfaceData["devices"] as $value){
                $device = $hg->createDevice($value["FAMILY"], $value["TYPE_ID"], $value["SERIALNUMBER"], $value["ADDRESS"], $value["FIRMWAREVERSION"], $value["INTERFACEID"]);
                $deviceName = $hg->setName($device, $value["NAME"]);
                if ($device != ""){
                    $allInterfaceData["createDevice"][$device]["SERIALNUMBER"] = $value["SERIALNUMBER"];
                    $allInterfaceData["createDevice"][$device]["name"] = $value["NAME"];
                    $allInterfaceData["createDevice"][$device]["nameChange"] = $deviceName;
                }
                else {
                    $allInterfaceData["createDevice"]["error"][$value["SERIALNUMBER"]] = true;
                }
            }
        }

        if(isset($_GET["getDevice"])){
            $CurrentDevices = $hg->getAllValues();
            foreach($CurrentDevices as $key => $value){
                unset($CurrentDevices[$key]["CHANNELS"]);
                unset($CurrentDevices[$key]["ID"]);
                $CurrentDevices[$key]["TYPE_ID"] = "0x".dechex($value["TYPE_ID"]);
                $CurrentDevices[$key]["SERIALNUMBER"] = $CurrentDevices[$key]["ADDRESS"];
                $CurrentDevices[$key]["ADDRESS"] = -1;
                $CurrentDevices[$key]["FIRMWAREVERSION"] = -1;
                $CurrentDevices[$key]["INTERFACEID"] = "";
            }
            $allInterfaceData["getAllValues"] = $CurrentDevices;
        }

        /*
            homegear -e rc 'print_v(call_user_func("Homegear\\Homegear::system.methodHelp", "addUiElement"));'
            homegear -e rc 'print_v(call_user_func("Homegear\\Homegear::system.methodSignature", "addUiElement"));'
            homegear -e rc 'print_v(call_user_func("Homegear\\Homegear::system.methodSignature", "getAllUiElements"));'
            homegear -e rc 'print_v(call_user_func("Homegear\\Homegear::system.methodSignature", "getAvailableUiElements"));'
            homegear -e rc 'print_v(call_user_func("Homegear\\Homegear::system.methodSignature", "getCategoryUiElements"));'
            homegear -e rc 'print_v(call_user_func("Homegear\\Homegear::system.methodSignature", "getRoomUiElements"));'
            homegear -e rc 'print_v(call_user_func("Homegear\\Homegear::system.methodSignature", "removeUiElement"));'
            homegear -e rc 'print_v(call_user_func("Homegear\\Homegear::system.methodSignature", "addRoleToVariable"));'
        */

        if(isset($_GET["deleteUIE"])){
            $CurrentUiElements = $hg->getAllUiElements("en-US");
            if(is_array($CurrentUiElements)){
                foreach($CurrentUiElements as $value){
                    try {
                        $allInterfaceData["removeUiElement"][$value["databaseId"]] = $hg->removeUiElement($value["databaseId"]);
                    }
                    catch (\Homegear\HomegearException $e) {
                        $allInterfaceData["removeUiElement"][$value["databaseId"]]["error"] =  $e->getMessage();
                        $hg->log(2, 'Homegear Exception catched. ' .
                                               "Code: {$e->getCode()} " .
                                            "Message: {$e->getMessage()}");
                        continue;
                    }
                }
            }
        }

        if(isset($_GET["createUIE"])){
            foreach($oldInterfaceData["uiElements"] as $value){
                $uielement = $hg->addUiElement($value[0], $value[1]);
                $allInterfaceData["addUiElement"][$value[0]][$uielement]["label"] = $value[1]["label"];
            }
        }

        if(isset($_GET["getUIE"])){
            $allInterfaceData["getAllUiElements"] = $hg->getAllUiElements("en-US");
        }

        if(isset($_GET["getAvailableUIE"])){
            $availableUiElements = $hg->getAvailableUiElements("en-US");
            foreach ($availableUiElements as $key => $value) {
                $allInterfaceData["getAvailableUiElements"][$value["uniqueUiElementId"]] = array (
                    "role" => $value["role"]
                );
            }
            $allInterfaceData["allAvailableUiElements"] = $availableUiElements;
        }

        if(isset($_GET["createUser"])){
            foreach($oldInterfaceData["users"] as $key => $value){
                $currentUserMeta = $hg->getUserMetadata($value["username"]);
                $allInterfaceData["usermetadata"][$value["username"]]["currentUserMeta"] = $currentUserMeta;
                unset($currentUserMeta["interface"]);
                $allInterfaceData["usermetadata"][$value["username"]]["after InterfaceRemoval"] = $currentUserMeta;
                $currentUserMeta["interface"] = $value["interface"];
                $allInterfaceData["usermetadata"][$value["username"]]["newUserMeta"] = $value["interface"];
                $allInterfaceData["usermetadata"][$value["username"]]["merged"] = $currentUserMeta;
                $allInterfaceData["usermetadata"][$value["username"]]["state"] = $hg->setUserMetadata($value["username"], $currentUserMeta);
            }
        }

        if(isset($_GET["listUsers"])){
            $allInterfaceData["listUsers"] = $hg->listUsers();
        }

        if(isset($_GET["deleteUsersMetadata"])){
            $currentUsers = $hg->listUsers();
            foreach($currentUsers as $key => $value){
                $currentUserMeta = $hg->getUserMetadata($value["name"]);
                $allInterfaceData["deleteUsersMetadata"][$value["name"]]["currentUserMeta"] = $currentUserMeta;
                unset($currentUserMeta["interface"]);
                $currentUserMeta["interface"] = (object) array();
                $allInterfaceData["deleteUsersMetadata"][$value["name"]]["newUserMeta"] = $currentUserMeta;
                $allInterfaceData["deleteUsersMetadata"][$value["name"]]["status"] = $hg->setUserMetadata($value["name"], $currentUserMeta);
            }
        }

        if(isset($_GET["createStories"])){
            foreach($oldInterfaceData["floors"] as $key => $value){
                $allInterfaceData["createStory"][$value["name"]] = $hg->createStory(array("en-US" => $value["name"], "de-DE" => $value["name"]));
            }
        }

        if(isset($_GET["getStories"])){
            $allInterfaceData["getStories"] = $hg->getStories();
        }

        if(isset($_GET["deleteStories"])){
            $CurrentStories = $hg->getStories();
            foreach($CurrentStories as $value){
                $allInterfaceData["deleteStory"][$value["ID"]] = $hg->deleteStory($value["ID"]);
            }
        }

        if(isset($_GET["createRooms"])){
            foreach($oldInterfaceData["rooms"] as $key => $value){
                $roomId = $hg->createRoom(array("en-US" => $value["name"], "de-DE" => $value["name"]), array("icon" => $value["icon"]));
                $allInterfaceData["createRooms"][$roomId]["addRoomToStory"] = $hg->addRoomToStory(intval($value["floor"]), $roomId);
            }
        }

        if(isset($_GET["getRooms"])){
            $allInterfaceData["getRooms"] = $hg->getRooms();
        }

        if(isset($_GET["deleteRooms"])){
            $CurrentRooms = $hg->getRooms();
            foreach($CurrentRooms as $value){
                $allInterfaceData["deleteRoom"] = $hg->deleteRoom($value["ID"]);
            }
        }

        if(isset($_GET["createRoles"])){
            foreach($oldInterfaceData["roles"] as $key => $value){
                $roleMetadata = $hg->getRoleMetadata($value["id"]);
                $roleMetadata["ui"] = $value["ui"];
                $allInterfaceData["setRoleMetadata"][$value["id"]] = $hg->setRoleMetadata($value["id"], $roleMetadata);
            }
        }

        if(isset($_GET["getRoles"])){
            $aggregationType = 2;
            foreach($hg->getRoles() as $role){
                if(isset($role["METADATA"]["interface"]["aggregationType"])){
                    $aggregationType = $role["METADATA"]["interface"]["aggregationType"];
                }
                if(isset($role["METADATA"]["interface"]["rolesInclude"])){
                    foreach($role["METADATA"]["interface"]["rolesInclude"] as $include){
                        $rolesInclude["test"] = $hg->aggregateRoles($include["aggregationType"], $include["roles"], array());
                    }
                }
                $aggregated = $hg->aggregateRoles($aggregationType, $role["ID"], array());
                $varInRole = $hg->getVariablesInRole($role["ID"]);
                $allInterfaceData[$role["ID"]] = $role;
                $allInterfaceData[$role["ID"]]["aggregated"] = $aggregated;
                $allInterfaceData[$role["ID"]]["varInRole"] = $varInRole;
                if(isset($rolesInclude)){
                    $allInterfaceData[$role["ID"]]["rolesInclude"] = $rolesInclude;
                }
            }
        }

        if(isset($_GET["deleteRoles"])){
            $roles = $hg->getRoles();
            if(is_array($roles)){
                foreach($roles as $role){
                    $allInterfaceData["deleteRole"][$role["ID"]] = $hg->deleteRole($role["ID"]);
                }
            }
            else{
                $allInterfaceData["error"] = "no roles!";
            }
        }

        if(isset($_GET["aggregateRoles"])){
            $aggregationType = 2;
            foreach($hg->getRoles() as $role){
                unset($rolesInclude);
                if(isset($role["METADATA"]["interface"]["aggregationType"])){
                    $aggregationType = $role["METADATA"]["rolesInclude"]["aggregationType"];
                }
                if(isset($role["METADATA"]["interface"]["rolesInclude"])){
                    foreach($role["METADATA"]["interface"]["rolesInclude"] as $include){
                        $rolesInclude[] = $hg->aggregateRoles($include["aggregationType"], $include["roles"], array());
                    }
                }
                $aggregated = $hg->aggregateRoles($aggregationType, $role["ID"], array());
                $allInterfaceData["aggregateRoles"][$role["ID"]] = $aggregated;
                if(isset($rolesInclude)){
                    $allInterfaceData["aggregateRoles"][$role["ID"]]["rolesInclude"] = $rolesInclude;
                }
            }
        }

        if(isset($_GET["roles2var"])){
            foreach($oldInterfaceData["roles2var"] as $value){
                if($value["roleId"]){
                    if (!is_array($value["roleId"])) {
                        $value["roleId"] = array($value["roleId"]);
                    }
                    try {
                        $directionString = $value['direction'] ?? 'both';
                        if($directionString == 'in') $direction = 0;
                        else if($directionString == 'out') $direction = 1;
                        else $direction = 2; //both=2
                        $invert = $value['invert'] ?? false;
                        foreach ($value["roleId"] as $roleId) {
                            $allInterfaceData["roles2var"][$value["deviceId"]][$value["channel"]][$value["varName"]] = $hg->addRoleToVariable($value["deviceId"], $value["channel"], $value["varName"], $roleId, $direction, $invert);
                        }
                    }
                    catch(\Homegear\HomegearException $e) {
                        $allInterfaceData["roles2var"][$value["deviceId"]][$value["channel"]][$value["varName"]] = "Exception catched. Code: ".$e->getCode().". Message: ".$e->getMessage();
                    }
                }
            }
        }

        if(isset($_GET["removeRolesFromVar"])){
            foreach($hg->getRoles() as $role){
                $varInRole = $hg->getVariablesInRole($role["ID"]);
                if(is_array($varInRole)){
                    foreach($varInRole as $deviceid => $deviceid_value){
                        foreach($deviceid_value as $channel => $channel_value){
                            foreach($channel_value as $var => $var_value){
                                $allInterfaceData["removeRolesFromVar"][$role["ID"]][$deviceid][$channel][$var] = $hg->removeRoleFromVariable(intval($deviceid), intval($channel), $var, intval($role["ID"]));
                            }
                        }
                    }
                }
            }
        }

        if(isset($_GET["deleteSV"])){
            foreach($oldInterfaceData["systemVariables"] as $value){
                $allInterfaceData["deleteSystemVariable"][$value["name"]] = $hg->deleteSystemVariable($value["name"]);
            }
        }

        if(isset($_GET["createSV"])){
            foreach($oldInterfaceData["systemVariables"] as $value){
                $allInterfaceData["setSystemVariable"][$value["name"]] = $hg->setSystemVariable($value["name"], $value["value"]);
            }
        }

        if(isset($_GET["getSV"])){
            $allInterfaceData["getAllSystemVariables"] = $hg->getAllSystemVariables();
        }

        die(json_encode($allInterfaceData, JSON_PRETTY_PRINT));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Admin Button
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    $admin_url = 'setup.php?key='.$interfaceData["settings"]["setupKey"];

?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
    <title>Shif - Setup</title>
    <meta charset="UTF-8">
    <style>
        body{
            background: #222;
            color: #fff;
            font-family: Arial;
            font-size: 14px;
        }

        h2, h4{
            margin-top: 8px;
            margin-bottom: 4px;
            font-size: 15px;
        }

        h2{
            font-size: 20px;
        }

        pre{
            margin: 0;
        }

        #adminmenu{
          width: 240px;
          height: calc(100% - 20px);
          position: fixed;
          display: inline-block;
          vertical-align: top;
          padding-top: 0px;
          overflow-y: auto;
          -webkit-appearance: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        #adminmenu.active{
            display: inline-block;
        }

        #adminButtonToggle {
            position:fixed;
            top:0;
            right:0;
            display: none;
            z-index:999;
        }

        .adminButton {
          width: calc(100% - 30px);
          background: #3498db;
          background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
          background-image: -moz-linear-gradient(top, #3498db, #2980b9);
          background-image: -ms-linear-gradient(top, #3498db, #2980b9);
          background-image: -o-linear-gradient(top, #3498db, #2980b9);
          background-image: linear-gradient(to bottom, #3498db, #2980b9);
          font-family: Arial;
          color: #ffffff;
          font-size: 14px;
          display: inline-block;
          margin: 3px;
          padding: 4px 8px;
          text-decoration: none;
          -webkit-appearance: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        .adminButton:hover {
          background: #3cb0fd;
          background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
          background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
          background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
          background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
          background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
          text-decoration: none;
        }

        .loader_wrapper {
        overflow: hidden;
        }

        .loader {
        border: 16px solid #f3f3f3;
        border-top: 16px solid #3498db;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        margin: auto;
        }

        @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }

        #output{
          width: calc(100% - 280px);
          position: absolute;
          right: 10px;
          display: inline-block;
          padding-top: 0px;
          overflow-y: auto;
        }
    </style>
</head>
<body>
    <div id="adminButtonToggle" class="adminButton">ADMIN</div>
    <div id="adminmenu">
        <a href="/" class="adminButton">Login</a>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&action=generateExtensions', outputResult)" class="adminButton">Erweiterungen generieren</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&action=getAssetMaster', outputResult)" class="adminButton">Assets aktualisieren</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&action=renameIcons', outputResult)" class="adminButton">Rename Icons</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&json', outputResult)" class="adminButton">Raw interfacedata json output</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&action=phpinfo', outputResult)" class="adminButton">PHP Info</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&action=icons', outputResult)" class="adminButton">Icons</div>

        <h2>Homegear</h2>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear-json-raw', outputResult)" class="adminButton">Raw json output</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear-json', outputResult)" class="adminButton">Processed json output</div>

        <h4>Devices</h4>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&createDevice', outputResult)" class="adminButton">create</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&getDevice', outputResult)" class="adminButton">list</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&deleteDevice', outputResult)" class="adminButton">delete</div>

        <h4>Stories</h4>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&createStories', outputResult)" class="adminButton">create</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&getStories', outputResult)" class="adminButton">list</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&deleteStories', outputResult)" class="adminButton">delete</div>

        <h4>Rooms</h4>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&createRooms', outputResult)" class="adminButton">create</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&getRooms', outputResult)" class="adminButton">list</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&deleteRooms', outputResult)" class="adminButton">delete</div>

        <h4>Roles</h4>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&createRoles', outputResult)" class="adminButton">create</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&getRoles', outputResult)" class="adminButton">list</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&deleteRoles', outputResult)" class="adminButton">delete</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&aggregateRoles', outputResult)" class="adminButton">aggregate</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&roles2var', outputResult)" class="adminButton">roles2var</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&removeRolesFromVar', outputResult)" class="adminButton">removeRolesFromVar</div>

        <h4>UI Element</h4>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&createUIE', outputResult)" class="adminButton">create</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&getUIE', outputResult)" class="adminButton">list</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&deleteUIE', outputResult)" class="adminButton">delete</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&getAvailableUIE', outputResult)" class="adminButton">list available</div>

        <h4>User</h4>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&createUser', outputResult)" class="adminButton">create</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&listUsers', outputResult)" class="adminButton">list</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&deleteUsersMetadata', outputResult)" class="adminButton">Delete Metadata</div>

        <h4>System Variables</h4>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&createSV', outputResult)" class="adminButton">create</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&getSV', outputResult)" class="adminButton">list</div>
        <div onclick="loadDoc('<?php echo $admin_url; ?>&homegear&deleteSV', outputResult)" class="adminButton">delete</div>
    </div>
    <div id="output"></div>
    <script>
        function loadDoc(url, cFunction) {
          document.getElementById("output").innerHTML = '<div class="loader_wrapper"><div class="loader"></div></div>';
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              cFunction(this);
            }
          };
          xhttp.open("GET", url, true);
          xhttp.send();
        }
        function outputResult(xhttp) {
          console.log(xhttp.responseText);
          document.getElementById("output").innerHTML = "<pre>"+xhttp.responseText+"</pre>";
        }
    </script>
</body>
</html>
