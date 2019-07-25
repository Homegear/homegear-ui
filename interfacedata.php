<?php 
    $defaultInterfaceDataJson = '
{
    "settings": {
        "errorReporting": "-1",
        "interfacePath": "/",
        "loginMethod": "input",
        "controllerUrl": "index.php",
        "directLoginUser": "",
        "directLoginApiKey": "",
        "homegear": {
            "url": "location.hostname",
            "port": "location.port",
            "ssl": true
        },
        "userDefaults": {
            "theme": "dark",
            "highlight": "#0056b7",
            "firstBreadcrumb": "Haus",
            "firstBreadcrumbId": "house",
            "showFloor": true,
            "language": "de-DE",
            "consoleLog": true,
            "firstFactorAuthMethods": ["login", "certificate", "oauth", "apiKey"],
            "secondFactorAuthMethods": ["webauthn"]
        }
    },
    "mainmenu": [
        {
            "id": "1",
            "name": "house",
            "icon": "haus1",
            "onclick": "main",
            "onclickOptions": {
                "name": "house",
                "content": "house"
            }
        },
        {
            "id": "2",
            "name": "settings",
            "icon": "einstellungen1",
            "onclick": "main",
            "onclickOptions": {
                "name": "settings",
                "content": "settings",
                "menu": "settings"
            }
        },
        {
            "id": "3",
            "name": "logoff",
            "icon": "power1",
            "onclick": "user_logoff",
            "onclickOptions": {
                "name": "logoff"
            }
        }
    ],
    "menu": [
        {
            "id": "1",
            "name": "settings.user",
            "mainmenu": "settings",
            "category": "user",
            "level": "1",
            "icon": "profil1",
            "onclick": "menu",
            "onclickOptions": {
                "mainmenu":"settings",
                "level":"2",
                "category":"user",
                "name":"settings.user",
                "content":"true"
            },
            "description": "settings.user.description"
        },
        {
            "id": "2",
            "name": "settings.user.manage",
            "mainmenu": "settings",
            "category": "user",
            "level": "2",
            "icon": "profil1",
            "onclick": "user",
            "onclickOptions": {
                "name":"settings.user.manage",
                "content":"edit"
            },
            "description": "settings.user.manage.description"
        },
        {
            "id": "3",
            "name": "settings.about",
            "mainmenu": "settings",
            "category": "license",
            "level": "1",
            "icon": "information1",
            "onclick": "license",
            "onclickOptions": {
                "name":"settings.about",
                "content":"license"
            },
            "description": "settings.about.description"
        }
    ],
    "themes": {
        "0": {
            "id": "0",
            "name": "highlight",
            "colors": {
                "Orange": "#e3a104",
                "Pink": "#c72c8b",
                "Blau": "#1798db",
                "Grün": "#4da829",
                "Rot": "#b82c25",
                "Türkis": "#29ab9a",
                "Violette": "#8e44ad",
                "Gelb": "#e2e437"
            }
        },
        "1": {
            "id": "1",
            "name": "standard",
            "colors": {
                "background": "#25282e",
                "foreground": "#191b1f",
                "text": "#fff",
                "highlight_active": "#e3a104",
                "highlight_inactive": "#898989"
            }
        },
        "2": {
            "id": "2",
            "name": "dark",
            "colors": {
                "background": "#25282e",
                "foreground": "#191b1f",
                "text": "#ffffff",
                "highlight_active": "",
                "highlight_inactive": "#898989"
            }
        },
        "3": {
            "id": "3",
            "name": "light",
            "colors": {
                "background": "#eeeeee",
                "foreground": "#d9d9d9",
                "text": "#343434",
                "highlight_active": "",
                "highlight_inactive": "#595959"
            }
        },
        "4": {
            "id": "4",
            "name": "blue",
            "colors": {
                "background": "#367cc1",
                "foreground": "#205388",
                "text": "#ffffff",
                "highlight_active": "#c0cb03",
                "highlight_inactive": "#cccccc"
            }
        },
        "5": {
            "id": "5",
            "name": "purple",
            "colors": {
                "background": "#9644fa",
                "foreground": "#6735a4",
                "text": "#ffffff",
                "highlight_active": "#e2d000",
                "highlight_inactive": "#cccccc"
            }
        }
    },
    "i18n": {
        "en-US": {
            "login": {
                "username": "Username",
                "password": "Password",
                "signin": "Login",
                "waitingFor2ndFactor": "Waiting for second factor...",
                "error": {
                    "wrongpassword": "Wrong username or password",
                    "noaccess":"No access permission",
                    "twofaError": "2nd factor error",
                    "browserNotSupported": "Browser not supported."
                }
            },
            "house": "House",
            "house.tab.rooms": "Rooms",
            "house.tab.devices": "Devices",
            "widgets": "Widgets",
            "settings": "Settings",
            "settings.user": "User",
            "settings.user.description": "Manage",
            "settings.user.manage": "User Settings",
            "settings.user.manage.description": "Auth, Language, Theme, Colors",
            "settings.user.manage.twofa": "Two-factor authentication",
            "settings.user.manage.registerTwofa": "Register WebAuthn device",
            "settings.user.manage.unregisterTwofa": "Unregister WebAuthn device",
            "settings.user.manage.twofaRegistered": "WebAuthn activated",
            "settings.user.manage.browserNotSupported": "Browser not supported.",
            "settings.user.manage.theme": "Theme",
            "settings.user.manage.theme.dark": "Dark",
            "settings.user.manage.theme.light": "Light",
            "settings.user.manage.theme.blue": "Blue",
            "settings.user.manage.theme.purple": "Purple",
            "settings.user.manage.language": "Language",
            "settings.user.manage.language.name": "English",
            "settings.user.manage.highlight": "Highlighting",
            "settings.user.manage.save": "Save",
            "settings.about": "License",
            "settings.about.description": "Credits",
            "settings.about.table.name": "Name",
            "settings.about.table.version": "Version",
            "settings.about.table.rights": "Rights",
            "settings.about.table.license": "License",
            "settings.about.table.license.url": "License URL",
            "logoff": "Logoff"
        },
        "de-DE": {
            "login": {
                "username": "Benutzername",
                "password": "Kennwort",
                "signin": "Anmelden",
                "waitingFor2ndFactor": "Warte auf zweiten Faktor...",
                "error": {
                    "wrongpassword": "Unbekannter Benutzer oder falsches Kennwort.",
                    "noaccess": "Keine Zugriffsberechtigung.",
                    "twofaError": "Fehler beim zweiten Faktor",
                    "browserNotSupported": "Browser wird nicht unterstützt."
                }
            },
            "house": "Haus",
            "house.tab.rooms": "Räume",
            "house.tab.devices": "Geräte",
            "widgets": "Widgets",
            "settings": "Einstellungen",
            "settings.user": "Benutzer",
            "settings.user.description": "Verwalten",
            "settings.user.manage": "Benutzereinstellungen",
            "settings.user.manage.description": "Auth, Sprache, Theme, Farben",
            "settings.user.manage.twofa": "Zweifaktorauthentifizierung",
            "settings.user.manage.registerTwofa": "WebAuthn-Gerät registrieren",
            "settings.user.manage.unregisterTwofa": "WebAuthn-Gerät entfernen",
            "settings.user.manage.twofaRegistered": "WebAuthn ist aktiviert",
            "settings.user.manage.browserNotSupported": "Browser wird nicht unterstützt.",
            "settings.user.manage.language": "Sprache",
            "settings.user.manage.language.name": "Deutsch",
            "settings.user.manage.theme": "Theme",
            "settings.user.manage.theme.dark": "Dunkel",
            "settings.user.manage.theme.light": "Hell",
            "settings.user.manage.theme.blue": "Blau",
            "settings.user.manage.theme.purple": "Lila",
            "settings.user.manage.highlight": "Vordergrundfarbe",
            "settings.user.manage.save": "Speichern",
            "settings.about": "Lizenz",
            "settings.about.description": "Credits",
            "settings.about.table.name": "Name",
            "settings.about.table.version": "Version",
            "settings.about.table.rights": "Rechte",
            "settings.about.table.license": "Lizenz",
            "settings.about.table.license.url": "Lizenz URL",
            "logoff": "Abmelden"
        }
    },
    "admin": {
        "settings": {
            "extensions": {
                "homegear": {
                    "activated": true,
                    "requiredAssets": [
                        "homegearws",
                        "jquery"
                    ]
                },
                "default": {
                    "activated": true,
                    "requiredAssets": [
                        "jquery",
                        "patternlock",
                        "vue",
                        "iro",
                        "flaticons"
                    ]
                },
                "user": {
                    "activated": true,
                    "requiredAssets": [
			"webauthn"
                    ]
                },
                "shading": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "window": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "door": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "house": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "icons": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "info": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "lighting": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "menu": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "socket": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "status": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "climate": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "heating": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "ventilation": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                }
            },
            "assets": {
                "plotly": {
                    "user": "plotly",
                    "repository": "/node_modules/plotly.js",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "plotly-basic.min.js",
                            "outputName": "plotly.min.js"
                        }
                    ],
                    "license": {
                        "name": "plotly",
                        "version": "",
                        "rights": "",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "jquery": {
                    "user": "jquery",
                    "repository": "/node_modules/jquery",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "jquery.min.js",
                            "outputName": "jquery.min.js"
                        }
                    ],
                    "license": {
                        "name": "jQuery",
                        "version": "",
                        "rights": "JS Foundation",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "bootstrap": {
                    "user": "twbs",
                    "repository": "/node_modules/bootstrap",
                    "files": [
                        {
                            "rawMinUrl": "/dist/js/",
                            "rawMinUrlFile": "bootstrap.min.js",
                            "outputName": "bootstrap.min.js"
                        },
                        {
                            "rawMinUrl": "/dist/css/",
                            "rawMinUrlFile": "bootstrap.min.css",
                            "outputName": "bootstrap.min.css"
                        }
                    ],
                    "license": {
                        "name": "Bootstrap",
                        "version": "",
                        "rights": "Bootstrap Foundation",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "c3": {
                    "user": "c3js",
                    "repository": "/node_modules/c3",
                    "files": [
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "c3.min.js",
                            "outputName": "c3.min.js"
                        },
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "c3.min.css",
                            "outputName": "c3.min.css"
                        }
                    ],
                    "license": {
                        "name": "c3",
                        "version": "",
                        "rights": "Masayuki Tanaka",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "d3": {
                    "user": "d3",
                    "repository": "/node_modules/d3",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "d3.min.js",
                            "outputName": "d3.min.js"
                        }
                    ],
                    "license": {
                        "name": "d3",
                        "version": "",
                        "rights": "Michael Bostock",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "BSD-like license"
                    }
                },
                "homegearws": {
                    "user": "Homegear",
                    "repository": "/node_modules/@homegear/homegearws",
                    "files": [
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "homegear-ws-1.0.10.min.js",
                            "outputName": "homegearws.min.js"
                        }
                    ],
                    "license": {
                        "name": "HomegearWS",
                        "version": "",
                        "rights": "Sathya Laufer",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "GNU LGPL"
                    }
                },
                "patternlock": {
                    "user": "s-yadav",
                    "repository": "/node_modules/patternlock",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "patternlock.min.js",
                            "outputName": "patternlock.min.js"
                        },
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "patternlock.css",
                            "outputName": "patternlock.css"
                        },
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "patternLock.min.js",
                            "outputName": "patternlock.min.js"
                        },
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "patternLock.css",
                            "outputName": "patternlock.css"
                        }
                    ],
                    "license": {
                        "name": "PatternLock",
                        "version": "",
                        "rights": "Sudhanshu Yadav",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "push": {
                    "user": "Nickersoft",
                    "repository": "/node_modules/push.js",
                    "files": [
                        {
                            "rawMinUrl": "/bin/",
                            "rawMinUrlFile": "push.min.js",
                            "outputName": "push.min.js"
                        },
                        {
                            "rawMinUrl": "/bin/",
                            "rawMinUrlFile": "serviceWorker.min.js",
                            "outputName": "serviceWorker.min.js"
                        }
                    ],
                    "license": {
                        "name": "push",
                        "version": "",
                        "rights": "Tyler Nickerson",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "notie": {
                    "user": "jaredreich",
                    "repository": "/node_modules/notie",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "notie.min.js",
                            "outputName": "notie.min.js"
                        },
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "notie.min.css",
                            "outputName": "notie.min.css"
                        }
                    ],
                    "license": {
                        "name": "notie",
                        "version": "",
                        "rights": "Jared Reich",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "jsoneditor": {
                    "user": "josdejong",
                    "repository": "/node_modules/jsoneditor",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "jsoneditor.min.js",
                            "outputName": "jsoneditor.min.js"
                        },
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "jsoneditor.min.css",
                            "outputName": "jsoneditor.min.css"
                        }
                    ],
                    "license": {
                        "name": "jsoneditor",
                        "version": "",
                        "rights": "Jos de Jong",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "Apache2"
                    }
                },
                "slick": {
                    "user": "kenwheeler",
                    "repository": "/node_modules/slick-carousel",
                    "files": [
                        {
                            "rawMinUrl": "/slick/",
                            "rawMinUrlFile": "slick.min.js",
                            "outputName": "slick.min.js"
                        },
                        {
                            "rawMinUrl": "/slick/",
                            "rawMinUrlFile": "slick-theme.css",
                            "outputName": "slick-theme.css"
                        },
                        {
                            "rawMinUrl": "/slick/",
                            "rawMinUrlFile": "slick.css",
                            "outputName": "slick.css"
                        }
                    ],
                    "license": {
                        "name": "Slick",
                        "version": "",
                        "rights": "Ken Wheeler",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "vue": {
                    "user": "vuejs",
                    "repository": "/node_modules/vue",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "vue.js",
                            "outputName": "vue.js"
                        }
                    ],
                    "license": {
                        "name": "Vuejs",
                        "version": "",
                        "rights": "Evan You",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "iro": {
                    "user": "jaames",
                    "repository": "/node_modules/@jaames/iro",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "iro.min.js",
                            "outputName": "iro.min.js"
                        }
                    ],
                    "license": {
                        "name": "iro.js",
                        "version": "",
                        "rights": "James Daniel",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "webauthn": {
                    "user": "lbuchs",
                    "repository": "https://github.com/lbuchs/WebAuthn",
                    "license": {
                        "name": "WebAuthn",
                        "version": "",
                        "rights": "Lukas Buchs, Thomas Bleeker",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "touchswipe": {
                    "user": "jaames",
                    "repository": "/node_modules/jquery-touchswipe",
                    "files": [
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "jquery.touchSwipe.min.js",
                            "outputName": "touchSwipe.min.js"
                        }
                    ],
                    "license": {
                        "name": "Touchswipe",
                        "version": "",
                        "rights": "Matt Bryson",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "flaticons": {
                    "license": {
                        "name": "FlatIcons",
                        "version": "",
                        "rights": "Various Autors",
                        "licenseurl": "https://profile.flaticon.com/license/free",
                        "licensename": ""
                    }
                }
            }
        }
    }
}
';

$interfaceData = array();
$defaultInterfaceData = json_decode($defaultInterfaceDataJson, true);

if (file_exists("interfacedata.dummy.php")) {
    include_once("interfacedata.dummy.php");
    $dummyInterfaceData = json_decode($dummyInterfaceDataJson, true);
    $interfaceData = array_merge($interfaceData, $dummyInterfaceData);
}

$interfaceData = array_merge($interfaceData, $defaultInterfaceData);

if (file_exists("interfacedata.custom.php")) {
    include_once("interfacedata.custom.php");
    if($customInterfaceDataJson) {
        $customInterfaceData = json_decode($customInterfaceDataJson, true);
        $interfaceData = array_merge($interfaceData, $customInterfaceData);
    }
}

function userSettings() {
    global $interfaceData;
    global $user;
    $interfaceData["options"]["twofaEnabled"] = (in_array('webauthn', $user->getSecondFactorAuthMethods(), true) ? true : false);
    $interfaceData["options"]["userHasTwofaRegistrations"] = ($user->hasWebAuthn() ? true : false);
    $interfaceData["options"]["firstBreadcrumb"] = $user->getSettings()["firstBreadcrumb"] ?? $interfaceData["settings"]["userDefaults"]["firstBreadcrumb"];
    $interfaceData["options"]["firstBreadcrumbId"] = $user->getSettings()["firstBreadcrumbId"] ?? $interfaceData["settings"]["userDefaults"]["firstBreadcrumbId"];
    $interfaceData["options"]["breadcrumbs_array"] = ["<div class=\"breadcrumbsJump\" onclick=\"main({name:interfaceData.options.firstBreadcrumb,content:interfaceData.options.firstBreadcrumbId});\">".$interfaceData["options"]["firstBreadcrumb"]."</div>"];
    $interfaceData["options"]["breadcrumbs_id_array"] = [$interfaceData["options"]["firstBreadcrumbId"]];
    $interfaceData["options"]["theme"] = ($user->getSettings()["theme"] ?? $interfaceData["settings"]["userDefaults"]["theme"]);
    $interfaceData["options"]["highlight"] = ($user->getSettings()["highlight"] ?? $interfaceData["settings"]["userDefaults"]["highlight"]);
    $interfaceData["options"]["language"] = ($user->getSettings()["language"] ?? $interfaceData["settings"]["userDefaults"]["language"]);
    $interfaceData["options"]["showFloor"] = ($user->getSettings()["showFloor"] ?? $interfaceData["settings"]["userDefaults"]["showFloor"]);
    $interfaceData["options"]["consoleLog"] = ( ((isset($_GET['console_log']) && ($user->getSettings()["consoleLog"] ?? '') == "url") || ($user->getSettings()["consoleLog"] ?? $interfaceData["settings"]["userDefaults"]["consoleLog"]) == true )  ? true : false);
    $interfaceData["options"]["interfacePath"] = $interfaceData["settings"]["interfacePath"];
    $interfaceData["options"]["controller_url"] = $interfaceData["settings"]["controllerUrl"];
    $interfaceData["options"]["websocket_url"] = $interfaceData["settings"]["homegear"]["url"];
    $interfaceData["options"]["websocket_port"] = $interfaceData["settings"]["homegear"]["port"];
    $interfaceData["options"]["websocket_security_ssl"] = $interfaceData["settings"]["homegear"]["ssl"];
}

if (!is_array($interfaceData)) die("Invalid JSON file!");
