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
            "languageChangeable": true,
            "twofaChangeable": true,
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
    }
}
';

$defaultInterfaceData = json_decode($defaultInterfaceDataJson, true);
$interfaceData = $defaultInterfaceData;

if (file_exists("interfacedata.custom.php")) {
    include_once("interfacedata.custom.php");
}

if(isset($customInterfaceDataJson)) {
    $customInterfaceData = json_decode($customInterfaceDataJson, true);
    $interfaceData = array_replace_recursive($interfaceData, $customInterfaceData);
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
    $interfaceData["options"]["languageChangeable"] = ($user->getSettings()["languageChangeable"] ?? $interfaceData["settings"]["userDefaults"]["languageChangeable"]);
    $interfaceData["options"]["twofaChangeable"] = ($user->getSettings()["twofaChangeable"] ?? $interfaceData["settings"]["userDefaults"]["twofaChangeable"]);
    $interfaceData["options"]["showFloor"] = ($user->getSettings()["showFloor"] ?? $interfaceData["settings"]["userDefaults"]["showFloor"]);
    $interfaceData["options"]["consoleLog"] = ( ((isset($_GET['console_log']) && ($user->getSettings()["consoleLog"] ?? '') == "url") || ($user->getSettings()["consoleLog"] ?? $interfaceData["settings"]["userDefaults"]["consoleLog"]) == true )  ? true : false);
    $interfaceData["options"]["interfacePath"] = $interfaceData["settings"]["interfacePath"];
    $interfaceData["options"]["controller_url"] = $interfaceData["settings"]["controllerUrl"];
    $interfaceData["options"]["websocket_url"] = $interfaceData["settings"]["homegear"]["url"];
    $interfaceData["options"]["websocket_port"] = $interfaceData["settings"]["homegear"]["port"];
    $interfaceData["options"]["websocket_security_ssl"] = $interfaceData["settings"]["homegear"]["ssl"];
}

if (!is_array($interfaceData)) die("Invalid JSON file!");
