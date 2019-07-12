<?php
    ///////////////////////////////////////////////////////////////////////////////////////////
    // logged in | logged out
    ///////////////////////////////////////////////////////////////////////////////////////////
    $content = null;

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Content
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //$content .= '<style>'.stripslashes($interfaceStyleVendor).'</style>';
    //$content .= '<style>'.stripslashes($interfaceStyle).'</style>';

    if(file_exists("style.vendor.css")){
        $content .= '<link href="style.vendor.css" rel="stylesheet" type="text/css">'."\n";
    }
    else{
        die("Vendor style file is missing!");
    }

    //$content .= '<link href="style.css" rel="stylesheet" type="text/css">';
    $content .= '<style>'."\n";
    $content .= userStyle();
    $content .= '</style>'."\n";

    $content .= '
        <script type="text/javascript">
        var startDate = '.(time() * 1000).';
        var userSettings = '.json_encode($user->getSettings(), JSON_PRETTY_PRINT).';
    ';

    if(isset($hg)){
        if(isset($hg_interfaceData) && $hg_interfaceData != ""){
            foreach($interfaceData["i18n"] as $key => $value){
                $hg_interfaceData["i18n"]["languages"][$key]["name"] = $value["settings.user.manage.language.name"];
            }
            $content .= "var interfaceData = ".json_encode($hg_interfaceData, JSON_PRETTY_PRINT).";"."\n";
        }
    }
    else if(isset($databaseJsonPath) && $databaseJsonPath != ""){
        $content .= clean_json_to_js()."\n";
    }
    else{
        die('error interfaceData parsing!');
    }

    if(isset($hgMessage)){
        $content .= $hgMessage."\n";
    }

    if(is_dir($adminPath)){
        $content .= 'console.log("Das admin Verzeichnis im webroot zu belassen ist unsicher, bitte löschen!");'."\n";
    }

    $content .= '</script>';
    $content .= $javascript_options;

    $content .= '
    </head>
    <body>
      <div id="loadingPage">
        <div class="loadingWrapper">
          <svg version="1.1" id="ani_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="104.9px" height="104.9px" viewBox="0 0 104.9 104.9" enable-background="new 0 0 104.9 104.9" xml:space="preserve">
            <g>
              <polygon points="52.2,44 28.7,64 28.7,103.9 74.6,103.9 74.6,64" />
              <g>
                <path class="ani_logo_stroke ani_logo_stroke_1" fill="none" stroke-width="3" stroke-miterlimit="10" d="M12.4,19.2C22.8,9.1,36.9,2.9,52.5,2.9c15.5,0,29.6,6.2,40,16.2"/>
                <path class="ani_logo_stroke ani_logo_stroke_2" fill="none" stroke-width="3" stroke-miterlimit="10" d="M32.6,39.4c5.2-5.1,12.2-8.2,20.1-8.2c7.7,0,14.6,3,19.8,7.9"/>
                <path class="ani_logo_stroke ani_logo_stroke_3" fill="none" stroke-width="3" stroke-miterlimit="10" d="M22.6,29.3c7.7-7.5,18.3-12.1,29.9-12.1c11.6,0,22.1,4.6,29.8,12"/>
              </g>
            </g>
          </svg>
        </div>
      </div>

      <div id="breadcrumbs_wrapper">
        <div id="breadcrumbs">
          <div id="back" class="inactive" onclick=\'content(this, {"back":"1"});\'>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg" x="0" y="0" width="370.81" height="370.81" viewBox="0 0 370.81 370.81" xml:space="preserve" enable-background="new 0 0 370.814 370.814">
              <polygon points="292.92 24.85 268.78 0 77.9 185.4 268.78 370.81 292.92 345.96 127.64 185.4 "/>
            </svg>
          </div><div id="breadcrumbsSub"><div class="breadcrumbsJump" onclick=\'content(this, {"back":"0"});\'></div></div>
        </div>
      </div>

      <div id="inhalt">
        <div id="house" class="content">
          '.tabs("".i18n("house.tab.rooms")."*;".i18n("house.tab.devices")."", '{"id":"house"}').'
          <div id="houseJS" class="tabWrapper activeTab">
          </div>
          <div class="tabWrapper">
            <shif-all-devices></shif-all-devices>
          </div>
        </div>
        <div id="widgets" class="content">
        </div>
        <div id="notifications" class="content">
          '.tabs("Aktuell*;Archiv;Erstellen", '{"id":"notification_tab"}').'
          <div id="notifications_current" class="tabWrapper activeTab">
          </div>
          <div id="notifications_archiv" class="tabWrapper">
          </div>
          <div id="notifications_new" class="tabWrapper">
          </div>
        </div>
        <div id="settings" class="content">
        </div>
        <div id="log" class="content">
        </div>
      </div>
    ';

    if (file_exists("icons.js")) {
        $content .= '<script src="icons.js"></script>';
    } 
    else {
        die("App icon file is missing!");
    }

    if (file_exists("script.vendor.js")) {
        $content .= '<script src="script.vendor.js"></script>';
    } 
    else {
        die("Vendor script file is missing!");
    }

    if (file_exists("script.min.js")) {
        $content .= '<script src="script.min.js"></script>';
    } 
    elseif (file_exists("script.js")) {
        $content .= '<script src="script.js"></script>';
    } 
    else {
        die("App script file is missing!");
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
    // Content output
    ///////////////////////////////////////////////////////////////////////////////////////////
    if($content != ""){
        echo '
<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
  <title>Shif - '.$firstBreadcrumb.'</title>

  <meta charset="UTF-8">
  <meta name="author" content="" />
  <meta name="keywords" content="Shif" />
  <meta name="description" content="Shif" />
  <meta name="publisher" content="" />
  <meta name="robots" content="noindex, nofollow" />

  <meta id="viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=0.65, minimum-scale = 0.65,  maximum-scale = 0.65, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="msapplication-tap-highlight" content="no">

  <link rel="manifest" href="manifest.json">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

  <meta name="application-name" content="Shif">
  <meta name="short_name" content="Shif">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#333">

  <link rel="icon" sizes="36x36" href="media/logo/icon/smarthome36.png">
  <link rel="icon" sizes="48x48" href="media/logo/icon/smarthome48.png">
  <link rel="icon" sizes="72x72" href="media/logo/icon/smarthome72.png">
  <link rel="icon" sizes="96x96" href="media/logo/icon/smarthome96.png">
  <link rel="icon" sizes="144x144" href="media/logo/icon/smarthome144.png">
  <link rel="icon" sizes="128x128" href="media/logo/icon/smarthome128.png">
  <link rel="icon" sizes="192x192" href="media/logo/icon/smarthome192.png">

  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <link rel="apple-touch-icon" sizes="128x128" href="media/logo/icon/smarthome128.png">
  <link rel="apple-touch-icon-precomposed" sizes="128x128" href="media/logo/icon/smarthome128.png">
  <link rel="apple-touch-startup-image" href="media/logo/icon/smarthome128.png">
        ';
        echo $content;
        echo '
</body>
</html>
        ';
    }

?>
