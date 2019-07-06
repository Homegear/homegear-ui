<?php
    // http://localhost/setup.php?key=[interfaceData.settings.directLoginUrlKey]
    // &action=generateExtensions
    if(file_exists(getcwd()."/interfacedata.php")){
        include(getcwd()."/interfacedata.php");
        $urlKey = $interfaceData["settings"]["directLoginUrlKey"];
    }
    else{
        die("No interfaceData file!");
    }

    if( (isset($_GET["key"]) && $_GET["key"] == $urlKey) ){
        if(isset($_GET["action"]) && is_dir(getcwd()."/admin")){
            include(getcwd()."/admin/settings.php");
            include(getcwd()."/admin/admin.php");
            $date = "\n"."SUCCESS: ".date("Y-m-d H:i:s");
            die($date);
        }

        if( isset($_GET["origin"]) && $_GET["origin"] == "cli" ){
            die();
          }
    }
    else{
        die("Access denied!");
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // json raw
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    if(isset($_GET["json"])){
        header('Content-Type: application/json; charset=utf-8');
        die("<pre>".json_encode($interfaceData, JSON_PRETTY_PRINT)."</pre>");
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // homegear json raw
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if(isset($_GET["homegear-json-raw"])){
        header('Content-Type: application/json; charset=utf-8');
        $homegear_json_lang = "en-US";
        try {
            $hg = new \Homegear\Homegear();
            $allInterfaceData = array();
            $allInterfaceData["UiElements"] = $hg->getAllUiElements($homegear_json_lang);
            $allInterfaceData["Stories"] = $hg->getStories($homegear_json_lang);
            $allInterfaceData["Rooms"] = $hg->getRooms($homegear_json_lang);
            $allInterfaceData["Categories"] = $hg->getCategories($homegear_json_lang);
            $allInterfaceData["Roles"] = $hg->getRoles($homegear_json_lang);
            $allInterfaceData["Devices"] = $hg->getAllValues();
            die("<pre>".json_encode($allInterfaceData, JSON_PRETTY_PRINT)."</pre>");
        } 
        catch(\Homegear\HomegearException $e) {
            print "Exception catched. Code: ".$e->getCode().". Message: ".$e->getMessage();
        }
        die();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // homegear json processed 
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if(isset($_GET["homegear-json"])){
        if(file_exists(getcwd()."/admin/master/homegear/functions.php")){
            include(getcwd()."/admin/master/homegear/functions.php");
        }
        else{
            die("No homegear functions.php file!");
        }
        header('Content-Type: application/json; charset=utf-8');
        die("<pre>".json_encode($hg_interfaceData, JSON_PRETTY_PRINT)."</pre>");
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
            die("Exception catched. Code: ".$e->getCode().". Message: ".$e->getMessage());
        }

        $allInterfaceData = array();

        if(isset($_GET["deleteUIE"])){
            $CurrentUiElements = $hg->getAllUiElements("en-US");
            if(count($CurrentUiElements) > 0){
                for($i = 1; $i <= count($CurrentUiElements) + 1; $i++){
                    $allInterfaceData["removeUiElement"][$i] = $CurrentUiElements[$i];
                    $allInterfaceData["removeUiElement"][$i] = $hg->removeUiElement($i);
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
                $allInterfaceData["setRoleMetadata"][$value["id"]] = $hg->setRoleMetadata($value["id"], $value["metadata"]);
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
                    try {
                        $allInterfaceData["roles2var"][$value["deviceId"]][$value["channel"]][$value["varName"]] = $hg->addRoleToVariable($value["deviceId"], $value["channel"], $value["varName"], $value["roleId"]);
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
                            foreach($channel_value as $var){
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

        echo "\n";
        echo "<pre>";
        echo "\n";
        // https://www.sitepoint.com/community/t/json-encode-sometimes-does-or-does-not-add-keys-for-array-elements/116226
        //echo json_encode($allInterfaceData, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT);
        echo json_encode($allInterfaceData, JSON_PRETTY_PRINT);
        echo "\n";
        echo "</pre>";
        echo "\n";
        die();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // jsoneditor
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
     else if(isset($_GET["jsoneditor"])){
        function setupIcon(){
            global $rootPath;
            $files = null;
            $out = null;
            $path = "admin/media/icons/";
            $handle=opendir($path);

            while ($file = readdir($handle)){
              if ($file != "." && $file != ".." && $file != str_replace('/','','thumbs')) {
                  $files[] = $file;
              }
            }

            sort($files);

            $out .= '
              <style>
                #icons{
                    background: rgba(0,0,0,.95);
                    width:100%;
                    height:100%;
                    display: none;
                    position: fixed;
                    overflow: auto;
                    padding: 4px;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    margin: auto;
                    z-index: 999;
                }
                .icon{
                    width:170px;
                    height:170px;
                    float: left;
                    display: inline-block;
                    border: 1px solid #222;
                    padding: 4px;
                    cursor: pointer;
                    text-align: center;
                }

                .icon .title{
                    padding-bottom: 6px;
                    font-weight: bold;
                    overflow-wrap: break-word;
                    color: #ffffff;
                }

                .icon svg{
                    width: 100px;
                    height: 100px;
                    font-size: 100px;
                    fill: #ffffff;
                }

                #clipboardTextarea{
                    width: 200px;
                    height: 24px;
                    background: #111;
                    color: #999;
                }
              </style>

              <div id="icons">
                <p style="color:#ff0000;margin-bottom: 10px;">Per Klick auf ein Icon wird dessen Name in die Zwischenablage kopiert! <textarea id="clipboardTextarea" rows="1"></textarea></p>
            ';

            foreach($files as $icon){
                $icon_data = file_get_contents($path.$icon);

                $search  = array( "\n", "\r", '"');
                $replace = array( "",   "",   "'");
                $icon_data = str_replace($search, $replace, $icon_data);

                $icon_data = preg_replace('/<!--(.*)-->/Uis', '', $icon_data);
                $icon_data = preg_replace('!\s+!', ' ', $icon_data);

                $out .= '<div class="icon" onclick="selectIcon(\''.str_replace(".svg","",$icon).'\');"><div class="title">'.$icon.'</div> ' . $icon_data . '</div>';

            }

            $out .= '</div>';

            return $out;
        }

        $content = '<style type="text/css">'."\n".str_replace("img/jsoneditor-icons.svg", "admin/assets/masters/jsoneditor/img/jsoneditor-icons.svg", file_get_contents("admin/assets/masters/jsoneditor/jsoneditor.min.css"))."\n".'</style>'."\n";

        $content .= '<script>'."\n".file_get_contents("admin/assets/masters/jsoneditor/jsoneditor.min.js")."\n".'</script>'."\n";

        $content .= setupIcon();

        $content .= '
            <a id="downloadAnchorElem" style="display:none"></a>
            <button class="adminButton" style="display:inline-block; margin:0 0 5px 0;" onclick="setJSON();">Reset</button>
            <button class="adminButton" style="display:inline-block; margin:0 0 5px 0;" onclick="saveJSON();">Speichern</button>
            <button class="adminButton" style="display:inline-block; margin:0 0 5px 0;" onclick="alert(\'to be implemented...\');">Import Json</button>
            <button class="adminButton" style="display:inline-block; margin:0 0 5px 0;" onclick="exportJSON();">Export Json</button>
            <button class="adminButton" style="display:inline-block; margin:0 0 5px 0;" onclick="toggleElement(\'icons\')">Icons anzeigen</button>
            <div id="message" style="width: 400px; height: 30px; display:inline-block; color: #fff;"></div>
            <div id="jsoneditor" style="width: 400px; height: 400px; background: #fff;"></div>

            <script>
                var iWidth = window.innerWidth || (window.document.documentElement.clientWidth || window.document.body.clientWidth);
                var iHeight = window.innerHeight || (window.document.documentElement.clientHeight || window.document.body.clientHeight);
                document.getElementById("jsoneditor").style.width = (iWidth-30)+"px";
                document.getElementById("jsoneditor").style.height = (iHeight-90)+"px";
                var container = document.getElementById("jsoneditor");

                var options = {
                    modes: ["text", "code", "tree", "form", "view"],
                    mode: "tree"
                };

                var editor = new JSONEditor(container, options);

                // set json
                var json = '.json_encode($interfaceData, JSON_PRETTY_PRINT).';
                editor.set(json);

                function setJSON () {
                    editor.set(json);
                    $("#message").html("Erfolgreich zurückgesetzt!");
                }

                // save json
                function saveJSON(){
                    var json = editor.get();
                    var jsonString = JSON.stringify(json, null, 4);
                    var dataString = "jsoneditor="+encodeURIComponent(jsonString);
                    $.ajax({
                        url: "index.php",
                        type: "POST",
                        data: dataString,
                        processData: false,
                        success: function(data){
                            console.log(data);
                            if(data == "true"){
                                $("#message").html("Erfolgreich gespeichert!");
                            }
                            else{
                                $("#message").html("Speichern fehlgeschlagen!");
                            }
                        },
                        error: function(msg){
                            console.log("Error:");
                            console.log(msg);
                        },
                    });
                }

                // export json
                function exportJSON(){
                    var json = editor.get();
                    var jsonString = JSON.stringify(json, null, 4);
                    var dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(jsonString);
                    var dlAnchorElem = document.getElementById("downloadAnchorElem");
                    dlAnchorElem.setAttribute("href", dataStr);
                    dlAnchorElem.setAttribute("download", "interfacedata.json");
                    dlAnchorElem.click();
                }

                function toggleElement(elementId){
                    document.getElementById(elementId).style.display = "block";
                }

                function selectIcon(selectIconName){
                    console.log(selectIconName);
                    setClipboardText(selectIconName);
                    document.getElementById("icons").style.display = "none";
                }

                function setClipboardText(text){
                    var id = "clipboardTextarea";
                    var existsTextarea = document.getElementById(id);

                    if(!existsTextarea){
                        console.log("Creating textarea");
                        var textarea = document.createElement("textarea");
                        textarea.id = id;
                        // Place in top-left corner of screen regardless of scroll position.
                        textarea.style.position = "fixed";
                        textarea.style.top = 0;
                        textarea.style.left = 0;

                        // Ensure it has a small width and height. Setting to 1px / 1em
                        // doesn"t work as this gives a negative w/h on some browsers.
                        textarea.style.width = "1px";
                        textarea.style.height = "1px";

                        // We don"t need padding, reducing the size if it does flash render.
                        textarea.style.padding = 0;

                        // Clean up any borders.
                        textarea.style.border = "none";
                        textarea.style.outline = "none";
                        textarea.style.boxShadow = "none";

                        // Avoid flash of white box if rendered for any reason.
                        textarea.style.background = "transparent";
                        document.querySelector("body").appendChild(textarea);
                        console.log("The textarea now exists :)");
                        existsTextarea = document.getElementById(id);
                    }else{
                        console.log("The textarea already exists :3")
                    }

                    existsTextarea.value = text;
                    existsTextarea.select();

                    try {
                        var status = document.execCommand("copy");
                        if(!status){
                            console.error("Cannot copy text");
                        }else{
                            console.log("The text is now on the clipboard");
                        }
                    } catch (err) {
                        console.log("Unable to copy.");
                    }
                }
            </script>
        ';

        die($content);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // jsoneditor save
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if( isset($_POST['jsoneditor']) && $_POST['jsoneditor'] != "" ){
        if( $json = json_decode(mb_convert_encoding(rawurldecode ($_POST['jsoneditor']), 'UTF-8'), true) ){
            //file_put_contents($databaseJsonPath, '<?php $interfaceData = \' '.mb_convert_encoding(rawurldecode ($_POST['jsoneditor']), 'UTF-8')."';");
            die("true");
        }
        else{
            die("false");
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Admin Button
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    $admin_url = 'setup.php?key='.$urlKey;

    $admin = '
        <div id="adminButtonToggle" class="adminButton">ADMIN</div>
        <div id="adminmenu">
            <a href="/" class="adminButton">Login</a>
            <div onclick="loadDoc(\''.$admin_url.'&action=generateExtensions\', outputResult)" class="adminButton">Erweiterungen generieren</div>
            <div onclick="loadDoc(\''.$admin_url.'&action=getAssetMaster\', outputResult)" class="adminButton">Assets aktualisieren</div>
            <div onclick="loadDoc(\''.$admin_url.'&json\', outputResult)" class="adminButton">Raw interfacedata json output</div>
            <div onclick="loadDoc(\''.$admin_url.'&action=phpinfo\', outputResult)" class="adminButton">PHP Info</div>
            <div onclick="passForm()" class="adminButton">Password</div>
            <a href="/'.$admin_url.'&jsoneditor" class="adminButton">Jsoneditor</a>
            <div onclick="loadDoc(\''.$admin_url.'&action=icons\', outputResult)" class="adminButton">Icons</div>

            <h2>Homegear</h2>
            <div onclick="loadDoc(\''.$admin_url.'&homegear-json-raw\', outputResult)" class="adminButton">Raw json output</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear-json\', outputResult)" class="adminButton">Processed json output</div>

            <h4>Stories</h4>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&createStories\', outputResult)" class="adminButton">create</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&getStories\', outputResult)" class="adminButton">list</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&deleteStories\', outputResult)" class="adminButton">delete</div>

            <h4>Rooms</h4>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&createRooms\', outputResult)" class="adminButton">create</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&getRooms\', outputResult)" class="adminButton">list</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&deleteRooms\', outputResult)" class="adminButton">delete</div>

            <h4>Roles</h4>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&createRoles\', outputResult)" class="adminButton">create</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&getRoles\', outputResult)" class="adminButton">list</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&deleteRoles\', outputResult)" class="adminButton">delete</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&aggregateRoles\', outputResult)" class="adminButton">aggregate</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&roles2var\', outputResult)" class="adminButton">roles2var</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&removeRolesFromVar\', outputResult)" class="adminButton">removeRolesFromVar</div>

            <h4>UI Element</h4>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&createUIE\', outputResult)" class="adminButton">create</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&getUIE\', outputResult)" class="adminButton">list</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&deleteUIE\', outputResult)" class="adminButton">delete</div>

            <h4>User</h4>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&createUser\', outputResult)" class="adminButton">create</div>

            <h4>System Variables</h4>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&createSV\', outputResult)" class="adminButton">create</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&getSV\', outputResult)" class="adminButton">list</div>
            <div onclick="loadDoc(\''.$admin_url.'&homegear&deleteSV\', outputResult)" class="adminButton">delete</div>
        </div>
    ';
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
        }

        h2, h4{
            margin-bottom: 5px;
        }

        #adminmenu{
          width: 300px;
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
          width: 100%;
          max-width: 240px;
          background: #3498db;
          background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
          background-image: -moz-linear-gradient(top, #3498db, #2980b9);
          background-image: -ms-linear-gradient(top, #3498db, #2980b9);
          background-image: -o-linear-gradient(top, #3498db, #2980b9);
          background-image: linear-gradient(to bottom, #3498db, #2980b9);
          font-family: Arial;
          color: #ffffff;
          font-size: 16px;
          display: inline-block;
          margin: 3px;
          padding: 10px 15px 10px 15px;
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
          width: calc(100% - 330px);
          position: absolute;
          right: 10px;
          display: inline-block;
          padding-top: 0px;
          overflow-y: auto;
        }
    </style>
</head>
<body>
    <?php echo $admin; ?>
    <div id="output"></div>
    <script>
        function loadDoc(url, cFunction) {
          var xhttp;
          document.getElementById("output").innerHTML = '<div class="loader_wrapper"><div class="loader"></div></div>';
          xhttp=new XMLHttpRequest();
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
          document.getElementById("output").innerHTML = xhttp.responseText;
        }
        function passForm() {
            var output = Array;
            output["responseText"] = `
                <form id="passForm" name="passForm" action="javascript:void(0);" onsubmit="loadDoc('<?php echo $admin_url; ?>&action=password&password='+document.getElementById('password'), outputResult);">
                    <input id="password" type="text" name="password">
                    <input type="submit" name="passForm" value="Hash">
                </form>
            `
            outputResult(output);
        }
    </script>
</body>
</html>
