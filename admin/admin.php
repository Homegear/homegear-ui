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

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Config
////////////////////////////////////////////////////////////////////////////////////////////////////////
if (file_exists(getcwd()."/interfacedata.php")) {
    include_once(getcwd()."/interfacedata.php");
}
else {
    die("No interfaceData file!");
}

if (file_exists("interfacedata.admin.php")) {
    include_once("interfacedata.admin.php");
}

if(isset($adminInterfaceDataJson)) {
    $adminInterfaceData = json_decode($adminInterfaceDataJson, true);
    $interfaceData = array_replace_recursive($interfaceData, $adminInterfaceData);
}

$configAdmin = $interfaceData["admin"];
$rootPath    = getcwd();
$adminPath   = $rootPath."/admin";

$action = '';
$origin = '';
if(isset($argc) && $argc > 1){
    $action = $argv[1];
    $origin = 'cli';
}
else if(isset($_GET['action'])) $action = $_GET['action'];

if(isset($_GET['origin'])) $origin = $_GET['origin'];

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
if($action !== ''){
////////////////////////////////////////////////////////////////////////////////////////////////////////
// Generieren der Erweiterungen
////////////////////////////////////////////////////////////////////////////////////////////////////////
    if($action == "generateExtensions"){
        $out = null;
        $tempInterfaceData = array(
            "style" => null,
            "script" => null,
            "functions" => null,
            "control" => null,
            "database" => null,
            "controller" => null,
            "scriptVendor" => null,
            "styleVendor" => null,
            "phpVendor" => null,
            "vendorLicense" => array(),
        );

        function cleanPhp($fileStr){
            $newStr  = '';
            $fileStr  = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $fileStr);
            $search  = array( "<?php", "?>");
            $replace = array( "", "");
            return str_replace($search, $replace, $fileStr);
        }

        function cleanPhpComments($fileStr){
            $newStr  = '';
            $commentTokens = array(T_COMMENT);

            if (defined('T_DOC_COMMENT')){
                $commentTokens[] = T_DOC_COMMENT;
            }

            $tokens = token_get_all($fileStr);

            foreach ($tokens as $token) {
                if (is_array($token)) {
                    if (in_array($token[0], $commentTokens)){
                        continue;
                    }
                    $token = $token[1];
                }

                $newStr .= $token;
            }

            return $newStr;
        }

        if( $origin == "cli" ){
          $actionSeparator = '';
        }
        else{
          $actionSeparator = ' <br> ';
        }

        $activeExtensions = array();
        $requiredAssets = array();
        foreach($configAdmin["settings"]["extensions"] as $key => $extension){
            if($extension["activated"] == true){
                $activeExtensions[] = $key;
                foreach($extension["requiredAssets"] as $asset){
                    if($asset != "" && !in_array($asset, $requiredAssets)){
                        $requiredAssets[] = $asset;
                    }
                }
            }
        }

        foreach($activeExtensions as $line){
          $out .= $line.$actionSeparator."\n";
          $path = $rootPath."/admin/master/".$line;
          if(!is_dir($path)){
              continue;
          }
          $handle=opendir($path);
          while ($file = readdir($handle)){
            if($file != "." && $file != ".." && !is_dir($path."/".$file)){
              $typePart = explode("_", $file);
              $search  = array(".php", ".css", ".js", ".csv");
              $typePart = str_replace($search, "", $typePart);

              if($typePart[0] == "style"){
                $tempInterfaceData["style"] .= file_get_contents($path."/".$file)."\n";
              }
              else if($typePart[0] == "script"){
                $tempInterfaceData["script"] .= file_get_contents($path."/".$file)."\n";
              }
              else if($typePart[0] == "functions"){
                $tempInterfaceData["functions"] .= cleanPhp(cleanPhpComments(file_get_contents($path."/".$file)))."\n";
              }
              else{
                  $out .= "Keine Verarbeitungsregel vorhanden für: ".$path."/".$file.$actionSeparator."\n";
              }
            }
          }
        }

        $out .= $actionSeparator."\n";

        foreach($requiredAssets as $line){
          $out .= $line.": ";
          $path = $adminPath."/assets/masters/".$line;
          if(!is_dir($path)){
            $tempInterfaceData["vendorLicense"][] = $configAdmin["settings"]["assets"][$line]["license"];
            $out .= "Warning: Nicht vorhanden -> ".$path.$actionSeparator."\n";
            continue;
          }
          if(file_exists($path."/package.json")){
			$packageJson = json_decode(file_get_contents($path."/package.json"), true);
			$license = array();
			$license["name"] = $configAdmin["settings"]["assets"][$line]["license"]["name"];
			$license["version"] = $packageJson["version"];

			$license["rights"] = $configAdmin["settings"]["assets"][$line]["license"]["rights"];
			$license["homepage"] = $packageJson["homepage"];
			$license["licenseurl"] = $configAdmin["settings"]["assets"][$line]["license"]["licenseurl"];
			if(isset($packageJson["license"])){
				$license["licensename"] = $packageJson["license"];
			}
			else if(isset($packageJson["licenses"])){
				$license["licensename"] = $packageJson["licenses"];
			}
			else{
				$license["licensename"] = $configAdmin["settings"]["assets"][$line]["license"]["licensename"];
			}
			$tempInterfaceData["vendorLicense"][] = $license;
		  }
		  else{
		  	$tempInterfaceData["vendorLicense"][] = $configAdmin["settings"]["assets"][$line]["license"];
		  }
          $handle=opendir($path);
          while ($file = readdir($handle)){
            if($file != "." && $file != ".." && !is_dir($path."/".$file) && $file != "LICENSE" && $file != "package.json"){
              $out .= $file." | ";
              $type = explode(".", $file);

              if(in_array("js", $type)){
                $tempInterfaceData["scriptVendor"] .= file_get_contents($path."/".$file)."\n";
              }
              else if(in_array("css", $type)){
                $tempInterfaceData["styleVendor"] .= file_get_contents($path."/".$file)."\n";
              }
              else if(in_array("php", $type)){
                $tempInterfaceData["phpVendor"] .= cleanPhp(cleanPhpComments(file_get_contents($path."/".$file)."\n"));
              }
              else{
                  $out .= "Keine Verarbeitungsregel vorhanden für: ".$file." | ";
              }
            }
          }
          $out .= $actionSeparator."\n";
        }

        /////////////////////////////////////////////////////////
        // parst die Style datei und bereinigt sie
        /////////////////////////////////////////////////////////
        $style = $tempInterfaceData["style"];
        $regex = array(
        "`^([\t\s]+)`ism"=>'',
        "`^\/\*(.+?)\*\/`ism"=>"",
        "`([\n\A;]+)\/\*(.+?)\*\/`ism"=>"$1",
        "`([\n\A;\s]+)//(.+?)[\n\r]`ism"=>"$1\n",
        "`(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+`ism"=>"\n",
        );
        $style = preg_replace(array_keys($regex),$regex,$style);

        $search  = array( "<style>", "</style>");
        $replace = array( "", "");
        $style = str_replace($search, $replace, $style);

        $style = preg_replace('/ {2,}/', ' ', $style);
        $tempInterfaceData["style"] = $style;

        //////////////////////////////////////////////////////////
        // parst die script datei und bereinigt sie
        //////////////////////////////////////////////////////////
        /*
        $script = $tempInterfaceData["script"];

        // Kommentare entfernen
        $pattern = '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\')\/\/.*))/';
        $script = preg_replace($pattern, '', $script);

        // Mehrere Zeilenumbrüche durch einen Zeilenumbruch ersetzen
        $script = preg_replace("/[\r\n]+[\s\t]*[\r\n]+/","\n", $script);

        $search  = array( "<script>", "</script>");
        $replace = array( "", "");
        $script = str_replace($search, $replace, $script);

        // alles in einer Zeile darstellen | Zeilenumbrüche entfernen
        $search  = array( "\n", "\r",);
        $replace = array( "", "");
        //$script = str_replace($search, $replace, $script);

        // doppelt Leerzeichen durch einfaches Leerzeichen ersetzen
        $script = preg_replace('/ {2,}/', ' ', $script);

        $tempInterfaceData["script"] = $script;
        */

        //////////////////////////////////////////////////////////
        // generieren aller Icons
        //////////////////////////////////////////////////////////
        $files = null;
        $out_icon = 'var icons = {'."\n";
        $path = $adminPath."/media/icons/";
        $handle=opendir($path);

        while ($file = readdir($handle)){
          if ($file != "." && $file != ".." && $file != str_replace('/','','thumbs')) {
              $files[] = $file;
          }
        }

        sort($files);

        foreach($files as $icon){
            $icon_data = file_get_contents($path.$icon);

            $search  = array( "\n", "\r", '"');
            $replace = array( "",   "",   "'");
            $icon_data = str_replace($search, $replace, $icon_data);

            $icon_data = preg_replace('/<!--(.*)-->/Uis', '', $icon_data);
            $icon_data = preg_replace('!\s+!', ' ', $icon_data);

            $out_icon .= '"'.str_replace(".svg", "", $icon).'":"'.$icon_data.'",'."\n";
        }

        $out_icon = substr($out_icon, 0, -2);
        $out_icon .= "\n".'};';
        $tempInterfaceData["icons"] = $out_icon;

        /////////////////////////////////////////////////////////
        // baut die index Datei
        /////////////////////////////////////////////////////////
        $tempInterfaceData["index"] = '<?php'."\n";

        if (isset($interfaceData["settings"]["env"]) && $interfaceData["settings"]["env"] == "dev" ) {
            $tempInterfaceData["index"] .= cleanPhp(cleanPhpComments(file_get_contents($adminPath."/functions.dev.php")));
        }
        else {
            $tempInterfaceData["index"] .= cleanPhp(cleanPhpComments(file_get_contents($adminPath."/auth.php")));
        }

        //$tempInterfaceData["index"] .= '$interfaceStyleVendor = "'.addslashes($tempInterfaceData["styleVendor"]).'";';
        //$tempInterfaceData["index"] .= '$interfaceStyle = "'.addslashes($tempInterfaceData["style"]).'";';
        //$tempInterfaceData["index"] .= '$interfaceScriptVendor = "'.base64_encode($tempInterfaceData["scriptVendor"]).'";';
        //$tempInterfaceData["index"] .= '$interfaceIcons = "'.addslashes($tempInterfaceData["icons"]).'";';
        $tempInterfaceData["index"] .= $tempInterfaceData["phpVendor"];
        $tempInterfaceData["index"] .= $tempInterfaceData["functions"];
        $tempInterfaceData["index"] .= "\n".'?>'."\n".'<?php'."\n";
        $tempInterfaceData["index"] .= cleanPhp(cleanPhpComments(file_get_contents($adminPath."/content.php")));

        //////////////////////////////////////////////////////////
        //
        //////////////////////////////////////////////////////////
        $distfiles = array(
            array(
                "path" => "style.vendor.css",
                "content" => $tempInterfaceData["styleVendor"]
            ),
            array(
                "path" => "style.css",
                "content" => $tempInterfaceData["style"]
            ),
            array(
                "path" => "script.js",
                "content" => $tempInterfaceData["script"]
            ),
            array(
                "path" => "icons.js",
                "content" => $tempInterfaceData["icons"]
            ),
            array(
                "path" => "script.vendor.js",
                "content" => $tempInterfaceData["scriptVendor"]."\n"." var licenses = ".json_encode($tempInterfaceData["vendorLicense"]).";"
            ),
            array(
                "path" => "index.php",
                "content" => $tempInterfaceData["index"]
            )
        );

        foreach($distfiles as $file){
			if(file_exists($rootPath."/".$file["path"])){
				unlink($rootPath."/".$file["path"]);
			}
            file_put_contents($rootPath."/".$file["path"], $file["content"], LOCK_EX);
        }

        //////////////////////////////////////////////////////////
        //
        //////////////////////////////////////////////////////////
        echo $out;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if($action == "getAssetMaster"){
		$activAssets = array();
		foreach($configAdmin["settings"]["extensions"] as $value){
			if($value["activated"] == true && isset($value["requiredAssets"][0]) && $value["requiredAssets"][0] != ""){
				$activAssets = array_replace_recursive($activAssets, $value["requiredAssets"]);
			}
		}
		$activAssets = array_unique($activAssets);

        $masters = $configAdmin["settings"]["assets"];
        if (!is_dir($adminPath.'/assets')) {
            mkdir($adminPath.'/assets');
        }
        if (!is_dir($adminPath.'/assets/updated')) {
            mkdir($adminPath.'/assets/updated');
        }
        if (!is_dir($adminPath.'/assets/versions')) {
            mkdir($adminPath.'/assets/versions');
        }
        foreach($masters as $key => $master){
			echo "<pre>";
			echo "------------------------"."\n";
			if(!in_array($key, $activAssets)){
				echo $key."\n";
				echo "not activ"."\n";
				continue;
			}
            echo $key."\n";
            if (isset($master["repository"]) && file_exists($rootPath.$master["repository"]."/LICENSE")) {
                $license = file_get_contents($rootPath.$master["repository"]."/LICENSE");
            }
            else if (isset($master["repository"]) && file_exists($rootPath.$master["repository"]."/license")) {
                $license = file_get_contents($rootPath.$master["repository"]."/license");
			}
            else if (isset($master["repository"]) && file_exists($rootPath.$master["repository"]."/LICENSE.txt")) {
                $license = file_get_contents($rootPath.$master["repository"]."/LICENSE.txt");
			}
            else if (isset($master["repository"]) && file_exists($rootPath.$master["repository"]."/MIT-LICENSE.txt")) {
                $license = file_get_contents($rootPath.$master["repository"]."/MIT-LICENSE.txt");
			}
			else{
				echo "failed license"."\n";
				$license = null;
			}
            if (isset($master["repository"]) && file_exists($rootPath.$master["repository"]."/package.json")) {
                $package = json_decode(file_get_contents($rootPath.$master["repository"]."/package.json"), true);
            }
            else{
				echo "failed package"."\n";
				$package = null;
            }
            if (!is_dir($adminPath.'/assets/updated/'.$key)) {
                mkdir($adminPath.'/assets/updated/'.$key);
            }
            if (!is_dir($adminPath.'/assets/versions/'.$key."_".$package["version"])) {
                mkdir($adminPath.'/assets/versions/'.$key."_".$package["version"]);
            }
            if(isset($master["repository"]) && isset($master["files"])){
				$counter = 0;
                foreach($master["files"] as $masterFile){
                    if(!file_exists($rootPath.$master["repository"].$masterFile["rawMinUrl"].$masterFile["rawMinUrlFile"])){
                        echo "file missing";
                        continue;
                    }
                    $data = file_get_contents($rootPath.$master["repository"].$masterFile["rawMinUrl"].$masterFile["rawMinUrlFile"]);
                    if($data == ""){
                        echo "data empty";
                        continue;
                    }
                    echo $masterFile["rawMinUrlFile"]." | ".$package["version"]."\n";
                    file_put_contents($adminPath.'/assets/updated/'.$key.'/'.$masterFile["outputName"], $data);
                    file_put_contents($adminPath.'/assets/versions/'.$key."_".$package["version"].'/'.$masterFile["outputName"], $data);
                    if($counter == 0 && isset($license)){
                        file_put_contents($adminPath.'/assets/updated/'.$key.'/'."LICENSE", $license);
						file_put_contents($adminPath.'/assets/versions/'.$key."_".$package["version"].'/'."LICENSE", $license);
						echo "license file copied"."\n";
                    }
                    if($counter == 0 && is_array($package)){
						$packageJson = json_encode($package, JSON_PRETTY_PRINT);
                        file_put_contents($adminPath.'/assets/updated/'.$key.'/'."package.json", $packageJson);
						file_put_contents($adminPath.'/assets/versions/'.$key."_".$package["version"].'/'."package.json", $packageJson);
						echo "package file copied"."\n";
					}
					$counter++;
                }
			}
			echo "</pre>";
        }
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if($action == "phpinfo"){
      echo phpinfo();
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if($action == "password"){
        $password = $_GET["password"];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        die('{"password":"'.$password_hash.'"}');
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Auflisten aller Icons
////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if($action == "icons"){
        $files = null;
        $out = null;
        $path = $adminPath."/media/icons/";
        $handle=opendir($path);

        while ($file = readdir($handle)){
          if ($file != "." && $file != ".." && $file != str_replace('/','','thumbs')) {
              $files[] = $file;
          }
        }

        sort($files);

        $out .= '
          <style>
            .icon{
                width:170px;
                height:170px;
                float: left;
                display: inline-block;
                border: 1px solid #ccc;
                padding: 4px;
            }

            .icon .title{
                padding-bottom: 6px;
                font-weight: bold;
                overflow-wrap: break-word;
            }

            .icon svg{
                width: 100px;
                height: 100px;
                font-size: 100px;
                fill: #fff;
            }
          </style>
        ';

        foreach($files as $icon){
            $icon_data = file_get_contents($path.$icon);

            $search  = array( "\n", "\r", '"');
            $replace = array( "",   "",   "'");
            $icon_data = str_replace($search, $replace, $icon_data);

            $icon_data = preg_replace('/<!--(.*)-->/Uis', '', $icon_data);
            $icon_data = preg_replace('!\s+!', ' ', $icon_data);

            $out .= '<div class="icon"><div class="title">'.$icon.'</div> ' . $icon_data . '</div>';

        }

        echo $out;
    }
  }
