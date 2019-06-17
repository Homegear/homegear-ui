<?php
    ///////////////////////////////////////////////////////////////////////////////////////////
    // logged in | logged out
    ///////////////////////////////////////////////////////////////////////////////////////////
    $content = null;

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Content
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    if(authorized()){
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
            var startDate = '.date('YmdHis').';
            var userSettings = '.json_encode($currentUser['settings'], JSON_PRETTY_PRINT).';
        ';

        if(isset($hg)){
            if(isset($hg_interfaceData) && $hg_interfaceData != ""){
                foreach($interfaceData["l18n"] as $key => $value){
                    $hg_interfaceData["l18n"]["languages"][$key]["name"] = $value["settings.user.manage.language.name"];
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
              '.tabs("".l18n("house.tab.rooms")."*;".l18n("house.tab.devices")."", '{"id":"house"}').'
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

        //$content .= '<script type="text/javascript">'.base64_decode($interfaceScriptVendor).'</script>';
        //$content .= '<script type="text/javascript">'.stripslashes($interfaceIcons).'</script>';
        //$content .= '<script type="text/javascript">'.stripslashes($interfaceScript).'</script>';
    }



    ///////////////////////////////////////////////////////////////////////////////////////////
    // Loginseitengenerierung
    ///////////////////////////////////////////////////////////////////////////////////////////
    else{
        $content .= '<link href="style.vendor.css" rel="stylesheet" type="text/css">';
        $content .= '
          <style>
            * {
              -moz-box-sizing: border-box;
              -webkit-box-sizing: border-box;
              box-sizing: border-box;
              margin: 0px;
              padding: 0px;
              border: 0;
              font-size: 100%;
              font: inherit;
              vertical-align: baseline;
              -webkit-tap-highlight-color: rgba(0,0,0,0);
              -webkit-tap-highlight-color: transparent;
            }

            /* HTML5 display-role reset for older browsers */
            article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
              display: block;
            }

            body, html {
              height: 100%;
              width: 100%;
              background: #25282e;
              color: #fff;
              font-family: Avenir, Arial;
              font-size: 20px;
              line-height: 1.3;
              vertical-align: top;
              text-align: left;
              empty-cells: show;
              overflow: visible;
              margin: 0;
              padding: 0;
            }

            #user_wrapper input,
            #user_wrapper radio,
            #user_wrapper checkbox,
            #user_wrapper textarea {
              width: 100%;
              color: #000;
              font-size: 20px;
              box-shadow: 0px 0px 0px 0px #aaa;
              border: 0px solid #000;
              padding: 20px 40px;
              margin: 0px;
            }

            #user_wrapper select {
              width: 100%;
              background: #191b1f;
              font-size: 20px;
              color: #000;
              box-shadow: 0px 0px 0px 0px #000;
              border: 0px solid #000;
              padding: 20px 40px;
              margin: 4px;
            }

            #user_wrapper option {
              color: #000;
              padding: 2px 4px;
            }

            #user_wrapper fieldset {
              padding: 4px;
              box-shadow: 0px 0px 0px 0px #aaa;
            }

            #user_wrapper .button {
              width: 100%;
              background: #191b1f;
              border: 0px solid #898989;
              color: #ffffff;
              position: relative;
              cursor: pointer;
              box-shadow: 0px 0px 0px 0px #000000;
              display: inline-block;
              text-decoration: none;
              padding: 25px 0px 25px 0px;
              margin: 20px 0px 20px 0px;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            #user_wrapper {
              width: 100%;
              max-width: 100%;
              height: 100%;
              clear: both;
              position: relative;
              margin: 0 auto;
              padding: 35px 35px 35px 35px;
              -webkit-appearance: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            .user_square {
              float: left;
              font-size: 20px;
              margin: 0 40px 40px 0;
              -webkit-appearance: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            .user_square .user {
              width: 145px;
              height: 145px;
              background: #191b1f;
              position: relative;
              color: #fff;
              border-right: 0px solid #25282e;
              border-radius: 10px;
              padding: 0;
              margin-bottom: 10px;
              text-align: center;
              -webkit-appearance: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            .user_square .user svg {
              width: 100px;
              height: 76px;
              color: #fff;
              fill: #fff;
              font-size: 76px;
              text-align: center;
              vertical-align: middle;
              position: absolute;
              top: 0;
              right: 0;
              bottom: 0;
              left: 0;
              margin: auto;
              -webkit-appearance: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            .user_square .description {
              font-size: 24px;
              float: left;
              margin-left: 30px;
              -webkit-appearance: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            .user_square label > input {
              display: none;
            }

            .user_square label > input + div {
              cursor: pointer;
              border: 1px solid transparent;
              -webkit-appearance: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            .user_square label > input:checked + div {
              border: 1px solid #ffffff;
            }

            #content{
              width: 100%;
              position: relative;
              display: inline-block;
              overflow-y: auto;
              padding: 10px;
            }

            #loginMessage{
              width: 100%;
              position: absolute;
              text-align: center;
              font-size: 22px;
              color: #ff0000;
              display: block;
              top: 0;
              left: 0;
              padding: 10px 20px;
            }
          </style>
        ';

        $content .= '
          <script type="text/javascript" src="script.vendor.js"></script>

          <script>
            $( document ).ready(function() {
                ////////////////////////////////////////////////////////////////////////////////////////////////////////
                // verhindert, dass der PullFromTopToRefresh im Android Chrome Browser ausgeführt werden kann
                ////////////////////////////////////////////////////////////////////////////////////////////////////////
                var lastTouchY = 0;
                var preventPullToRefresh = false;

                $("body").on("touchstart", function (e) {
                    if (e.originalEvent.touches.length != 1) { return; }
                    lastTouchY = e.originalEvent.touches[0].clientY;
                    preventPullToRefresh = window.pageYOffset == 0;
                });

                $("body").on("touchmove", function (e) {
                    var touchY = e.originalEvent.touches[0].clientY;
                    var touchYDelta = touchY - lastTouchY;
                    lastTouchY = touchY;
                    if (preventPullToRefresh) {
                        // To suppress pull-to-refresh it is sufficient to preventDefault the first overscrolling touchmove.
                        preventPullToRefresh = false;
                        if (touchYDelta > 0) {
                            e.preventDefault();
                            return;
                        }
                    }
                });
            });

            function validateLogin(user, password){
                var dataString = "user="+user+"&password="+password+"";
                $.ajax({
                    url: "index.php",
                    type: "POST",
                    data: dataString,
                    processData: false,
                    success: function(data){
                        if(data.indexOf("true") > -1){
                            window.location.href = "./";
                        }
                        else{
                            if(document.getElementById("patternContainer")){
                                lock.reset();
                            }
                            $("#loginMessage").text( "'.l18n("login.dataerror").'" );
                            return false;
                        }
                    },
                    error: function(msg){
                        console.log("Error:");
                        console.log(msg);
                        return false;
                    },
                });
            }
          </script>

        </head>
        <body>

        <div id="content">
            <div id="loginMessage"></div>
        ';

        if($loginMethod == "input"){
            $content .= '
                <div id="user_wrapper">
                  <h2>'.l18n("login.username").':</h2>
                  <input type="text" id="user" name="user">
                  <div style="clear: both; width:100%; height: 20px; display: block;"></div>
                  <h2>'.l18n("login.password").':</h2>
                  <input type="password" id="password" name="password">
                  <div style="clear: both; width:100%; height: 20px; display: block;"></div>
                  <input type="submit" id="login" name="login" value="'.l18n("login.loginbutton").'" class="button" onclick="validateLogin($(\'#user\').val(), $(\'#password\').val())">
                </div>
              <script>
                document.getElementById("user").addEventListener("keyup", function(event) {
                  if (event.keyCode === 13) {
                    event.preventDefault();
                    document.getElementById("login").click();
                  }
                });
                document.getElementById("password").addEventListener("keyup", function(event) {
                  if (event.keyCode === 13) {
                    event.preventDefault();
                    document.getElementById("login").click();
                  }
                });
              </script>
            ';
        }

        else if($loginMethod == "userselect"){
            $content .= '
                <div id="user_wrapper">
            ';

            $out = "";

            foreach($interfaceData["users"] as $line){
                $out .= '
                  <div class="user_square">
                  <label>
                    <input type="radio" name="user" value="'.$line['username'].'" />
                      <div class="user">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg" x="0" y="0" width="485.21" height="485.21" viewBox="0 0 485.21 485.21" xml:space="preserve">
                          <path d="M394.24 333.59h-30.33c-33.49 0-60.65-27.16-60.65-60.65v-19.48c13.42-15.95 23.04-34.81 29.02-54.74 0.62-3.36 3.86-5.02 6.01-7.33 11.61-11.61 13.89-31.2 5.19-45.15 -1.19-2.12-3.32-3.95-3.2-6.58 0-17.78 0.09-35.6-0.02-53.37 -0.48-21.45-6.61-43.77-21.65-59.66 -12.14-12.84-28.82-20.48-46.02-23.75 -21.74-4.15-44.48-3.94-66.01 1.54 -18.66 4.71-36.19 15.64-47.03 31.84 -9.6 14.08-13.8 31.18-14.51 48.04 -0.27 18.09-0.06 36.23-0.12 54.37 0.41 3.63-2.67 6.09-4.06 9.09 -8.2 14.88-4.59 35.16 8.59 45.98 3.34 2.31 3.97 6.52 5.18 10.14 5.75 17.92 15.28 34.49 27.34 48.93v20.14c0 33.5-27.16 60.65-60.65 60.65H90.98c0 0-54.96 15.16-90.98 90.98v30.33c0 16.76 13.56 30.32 30.33 30.32h424.56c16.76 0 30.32-13.56 30.32-30.32V424.56C449.2 348.75 394.24 333.59 394.24 333.59z"></path>
                        </svg>
                      </div>
                      '.$line['name'].' '.$line['surname'].'
                  </label>
                  </div>
                ';
            }

            $content .= $out;

            $content .= '
                  <div style="clear: both; width:100%; height: 0px; display: block;"></div>
                  <hr/>
                  <h2>'.l18n("login.password").':</h2>
                    <input type="password" id="password" class="" name="password">
                    <hr/>
                    <input type="submit" name="login" value="'.l18n("login.loginbutton").'" class="button" onClick="validateLogin($(\'input[name=user]:checked\').val(), $(\'#password\').val());">
                </div>
            ';
        }

        else if($loginMethod == "patternlock"){
            $content .= '
                <style>
                    #patternContainer{
                        position: relative;
                        top:0;
                        right:0;
                        bottom:0;
                        left:0;
                        margin:auto;
                    }
                    .patt-holder {
                        background: #25282E none repeat scroll 0% 0%;
                    }
                </style>

                <div id="patternContainer"></div>
                <script>
                    var iWidth = window.innerWidth || (window.document.documentElement.clientWidth || window.document.body.clientWidth);
                    var iHeight = window.innerHeight || (window.document.documentElement.clientHeight || window.document.body.clientHeight);

                    if(iWidth > iHeight){
                        iWidth = iHeight;
                    }

                    var iRadius = (iWidth/10)/2;
                    var iMargin = (iWidth/10)/2;

                    var lock = new PatternLock("#patternContainer",{
                        matrix:[4,4],
                        radius:iRadius,
                        margin:iMargin,
                        onDraw: function(pattern){
                            validateLogin("", pattern);
                        }
                    });
                </script>
            ';
        }

      $content .= '</div>';
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
