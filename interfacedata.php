<?php 
    $defaultInterfaceDataJson = '
{
    "settings": {
        "errorReporting": "-1",
        "directLoginUser": "",
        "directLoginApiKey": "",
        "setupKey": "",
        "homegear": {
            "url": "location.hostname",
            "port": "location.port"
        },
        "userDefaults": {
            "theme": "dark",
            "highlight": "#e3a104",
            "language": "de-DE",
            "startPath": "/favorites",
            "showFloor": true,
            "languageChangeable": true,
            "twofaChangeable": true,
            "consoleLog": true,
            "viewportScale": 0.65,
            "scrollbarScale": 4,
            "firstFactorAuthMethods": ["login", "certificate", "oauth", "apiKey"],
            "secondFactorAuthMethods": ["webauthn"]
        }
    },
    "mainmenu": {
        "0": {
            "id": "Favorites",
            "name": "favorites",
            "icon": "star_1",
            "onclick": "main",
            "onclickOptions": {
                "name": "favorites",
                "content": "favorites",
                "menu": "favorites"
            }
        },
        "1": {
            "id": "house",
            "name": "house",
            "icon": "house_1",
            "onclick": "main",
            "onclickOptions": {
                "name": "house",
                "content": "house"
            },
            "tabs": [
                {
                    "id": "rooms",
                    "name": "house.tab.rooms",
                    "icon": "house_1",
                    "active": true
                },
                {
                    "id": "devices",
                    "name": "house.tab.devices",
                    "icon": "switches_1",
                    "content": "<shif-all-devices></shif-all-devices>"
                },
                {
                    "id": "profiles",
                    "name": "house.tab.profiles",
                    "icon": "slider_1",
                    "content": "<shif-profiles></shif-profiles>"
                }
            ]
        },
        "2": {
            "id": "settings",
            "name": "settings",
            "icon": "settings_1",
            "onclick": "main",
            "onclickOptions": {
                "name": "settings",
                "content": "settings",
                "menu": "settings"
            }
        },
        "3": {
            "id": "logoff",
            "name": "logoff",
            "icon": "power_1",
            "onclick": "user_logoff",
            "onclickOptions": {
                "name": "logoff"
            }
        }
    },
    "menu": [
        {
            "name": "settings.user",
            "mainmenu": "settings",
            "category": "user",
            "level": "1",
            "icon": "profile_1",
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
            "name": "settings.user.manage",
            "mainmenu": "settings",
            "category": "user",
            "level": "2",
            "icon": "profile_1",
            "onclick": "user",
            "onclickOptions": {
                "name":"settings.user.manage",
                "content":"edit"
            },
            "description": "settings.user.manage.description"
        },
        {
            "name": "settings.favorites",
            "mainmenu": "settings",
            "category": "favorites",
            "level": "1",
            "icon": "star_1",
            "onclick": "menu",
            "onclickOptions": {
                "mainmenu":"settings",
                "level":"2",
                "category":"favorites",
                "name":"settings.favorites",
                "content":"true"
            },
            "description": "settings.favorites.description"
        },
        {
            "name": "settings.profiles",
            "mainmenu": "settings",
            "category": "profiles",
            "level": "1",
            "icon": "slider_1",
            "onclick": "menu",
            "onclickOptions": {
                "mainmenu":"settings",
                "level":"2",
                "category":"profiles",
                "name":"settings.profiles",
                "content":"true"
            },
            "description": "settings.profiles.description"
        },
        {
            "name": "settings.about",
            "mainmenu": "settings",
            "category": "license",
            "level": "1",
            "icon": "information_1",
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
            "house.storyless": "Other",
            "house.tab.rooms": "Rooms",
            "house.tab.devices": "Devices",
            "house.tab.profiles": "Profiles",
            "favorites": "Favorites",
            "widgets": "Widgets",
            "settings": "Settings",
            "settings.favorites": "Favorites",
            "settings.favorites.mode": "Modify favorites",
            "settings.favorites.description": "Set and unset favorites",
            "settings.profiles": "Profiles",
            "settings.profiles.new": "New",
            "settings.profiles.profile.name": "Name",
            "settings.profiles.profile.Icon": "Icon",
            "settings.profiles.profile.locations": "Locations",
            "settings.profiles.profile.locations.global": "Global",
            "settings.profiles.profile.locations.floor": "Story",
            "settings.profiles.profile.locations.room": "Room",
            "settings.profiles.profile.locations.add": "Add",
            "settings.profiles.profile.locations.remove": "Remove",
            "settings.profiles.profile.delete": "Delete",
            "settings.profiles.profile.load": "Modify Devices",
            "settings.profiles.profile.load.description": "Modify Device Mode activ",
            "settings.profiles.profile.save": "Save",
            "settings.profiles.profile.edit": "Edit",
            "settings.profiles.description": "Add and delete profiles",
            "settings.user": "User",
            "settings.user.description": "Manage",
            "settings.user.manage": "User Settings",
            "settings.user.manage.description": "Theme, colors and other settings",
            "settings.user.manage.twofa": "Two-factor authentication",
            "settings.user.manage.registerTwofa": "Register WebAuthn device",
            "settings.user.manage.unregisterTwofa": "Unregister WebAuthn device",
            "settings.user.manage.twofaRegistered": "WebAuthn activated",
            "settings.user.manage.browserNotSupported": "Browser not supported",
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
            "modemenu.favorites.name": "Favorites mode",
            "modemenu.favorites.button.end": "Exit Favorites mode",
            "modemenu.profiles.name.label": "Profil",
            "modemenu.profiles.button.settings": "Profil Einstellungen",
            "modemenu.profiles.button.end": "speichern & beenden",
            "logoff": "Logoff",
            "disabled_text": "disabled"
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
            "house.storyless": "Sonstige",
            "house.tab.rooms": "Räume",
            "house.tab.devices": "Geräte",
            "house.tab.profiles": "Profile",
            "favorites": "Favoriten",
            "widgets": "Widgets",
            "settings": "Einstellungen",
            "settings.favorites": "Favoriten",
            "settings.favorites.mode": "Favoriten bearbeiten",
            "settings.favorites.description": "Favoriten auswählen",
            "settings.profiles": "Profile",
            "settings.profiles.new": "Neu",
            "settings.profiles.profile.name": "Name",
            "settings.profiles.profile.Icon": "Icon",
            "settings.profiles.profile.locations": "Ort",
            "settings.profiles.profile.locations.global": "Global",
            "settings.profiles.profile.locations.floor": "Stockwerk",
            "settings.profiles.profile.locations.room": "Raum",
            "settings.profiles.profile.locations.add": "Hinzufügen",
            "settings.profiles.profile.locations.remove": "Entfernen",
            "settings.profiles.profile.delete": "Löschen",
            "settings.profiles.profile.load": "Zugehörige Geräte bearbeiten",
            "settings.profiles.profile.load.description": "Geräte bearbeiten aktiv",
            "settings.profiles.profile.save": "Speichern",
            "settings.profiles.profile.edit": "Bearbeiten",
            "settings.profiles.description": "Profile erstellen und löschen",
            "settings.user": "Benutzer",
            "settings.user.description": "Verwalten",
            "settings.user.manage": "Benutzereinstellungen",
            "settings.user.manage.description": "Theme, Farben und andere Einstellungen",
            "settings.user.manage.twofa": "Zweifaktorauthentifizierung",
            "settings.user.manage.registerTwofa": "WebAuthn-Gerät registrieren",
            "settings.user.manage.unregisterTwofa": "WebAuthn-Gerät entfernen",
            "settings.user.manage.twofaRegistered": "WebAuthn ist aktiviert",
            "settings.user.manage.browserNotSupported": "Browser wird nicht unterstützt",
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
            "modemenu.favorites.name": "Favorites mode",
            "modemenu.favorites.button.end": "Exit Favorites mode",
            "modemenu.profiles.name.label": "Profil",
            "modemenu.profiles.button.settings": "Profil Einstellungen",
            "modemenu.profiles.button.end": "speichern & beenden",
            "logoff": "Abmelden",
            "disabled_text": "gesperrt"
        }
    },
    "iconFallback": {
        "Pfeil_unten1": "arrow_down_filled_1",
        "abriegeln1": "close_house_1",
        "ankleide": "commode_1",
        "arbeitszimmer1": "desk_1",
        "back": "arrow_left_filled_1",
        "balcony1": "balcony_1",
        "bett1": "bed_1",
        "bicycle1": "fitnessbike_1",
        "candy1": "candy_1",
        "car1": "car_1",
        "checkbox": "checkbox_1",
        "clean1": "broom_1",
        "computer1": "computer_1",
        "controller1": "controller_1",
        "door1": "door_open_1",
        "door2": "door_open_2",
        "einstellungen1": "settings_1",
        "fenster1": "window_1",
        "feuerwehr1": "fire_1",
        "fitnessraum1": "biceps_1",
        "floor1": "floor_1",
        "forward": "arrow_right_filled_1",
        "garage1": "garage_1",
        "garten1": "plant_1",
        "gauge1": "speedometer_1",
        "guest": "traveler_1",
        "gym1": "weights_1",
        "haus1": "house_1",
        "heater": "heater_1",
        "hood": "hood_1",
        "humidity1": "waterdrops_1",
        "information1": "information_1",
        "kind1": "rockinghorse_1",
        "kind2": "child_1",
        "kueche1": "fork_knife_1",
        "kuehlschrank1": "fridge_1",
        "lautsprecher1": "speaker_1",
        "lautsprecher2": "speaker_2",
        "library1": "library_1",
        "licht1": "light_on_1",
        "licht2": "light_off_1",
        "licht3": "light_dim_1",
        "load1": "reload_1",
        "loudspeaker-active": "speaker_3",
        "loudspeaker-inactive": "speaker_4",
        "lunchbox1": "lunchbox_1",
        "markiese1": "awning_1",
        "mikrowelle1": "microwave_1",
        "mitteilung1": "bell_1",
        "mitteilungen1": "bell_2",
        "mower": "mower_1",
        "on-off": "on_off_1",
        "oven1": "oven_1",
        "pfeil-stepp2": "arrow_up_step_1",
        "pfeil-stepp4": "arrow_down_step_1",
        "pfeil1": "arrow_left_1",
        "pfeil2": "arrow_up_1",
        "pfeil3": "arrow_right_1",
        "pfeil4": "arrow_down_1",
        "pfeil5": "arrow_fast_right_1",
        "pfeil6": "arrow_fast_down_2",
        "pfeil7": "arrow_fast_left_3",
        "pfeil8": "arrow_fast_up_4",
        "play": "play_1",
        "plus1": "plus_1",
        "polizei1": "police_1",
        "pool1": "waves_1",
        "power1": "power_1",
        "profil1": "profile_1",
        "question1": "question_1",
        "rasenmaeher1": "mower_2",
        "rasensprenger1": "shower_1",
        "rolladen1": "blind_1",
        "room1": "groundplan_1",
        "schliesen1": "close_x_1",
        "schuppen": "shelter_1",
        "sicherheit1": "lock_1",
        "socket1": "socket_1",
        "sofa1": "sofa_1",
        "sport1": "sport_1",
        "sprechblase1": "speech_bubble_1",
        "stairs1": "stairs_1",
        "stairs2": "stairs_2",
        "stairs8": "stairs_3",
        "statistiken1": "statistic_1",
        "staubsauger1": "vacuum_1",
        "step-backward": "arrow_left_step_2",
        "step-downward": "arrow_down_step_2",
        "step-forward": "arrow_right_step_1",
        "step-upward": "arrow_up_step_2",
        "stop": "stop_1",
        "table1": "table_1",
        "table2": "table_2",
        "telephone1": "telephone_1",
        "terrace1": "table_outside_1",
        "thermometer1": "thermometer_1",
        "tools": "tools_1",
        "tv1": "tv_1",
        "ventilator": "ventilator_2",
        "ventilator1": "ventilator_1",
        "wardrobe": "hanger_1",
        "warnung1": "warning_1",
        "waschmaschiene1": "washer_1",
        "wc1": "wc_1",
        "wc2": "bathtube_1",
        "weather1": "weather_1",
        "wheelbarrow1": "wheelbarrow_1",
        "widgets1": "widgets_1",
        "windalarm1": "windhose_1",
        "wine1": "wine_1",
        "air-quality": "air-quality_1",
        "aircondition": "aircondition_1",
        "blocks": "blocks_1",
        "calendar-time": "calendar-time_1",
        "door-handle": "door-handle_1",
        "history": "history_1",
        "player": "hokeyplayer_1",
        "plus-minus": "plus-minus_1",
        "powerplug": "powerplug_1",
        "rocking-horse": "rockinghorse_2",
        "slider": "slider_1",
        "soccer-ball": "soccer-ball_1",
        "switches": "switches_1",
        "wind": "wind_1",
        "blinds_1": "blind_2",
        "blinds_2": "blind_3"
    },
    "rolesIncludes": {
        "501000": [
            {
                "aggregationType": 1,
                "roles": [
                    501004
                ]
            }
        ],
        "502000": [
            {
                "aggregationType": 1,
                "roles": [
                    502004
                ]
            }
        ],
        "600000": [
            {
                "aggregationType": 1,
                "roles": [
                    600004
                ]
            }
        ]
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

    //Overwrite auth methods if they exist in custom interface data
    if(isset($customInterfaceData['settings']['userDefaults']['firstFactorAuthMethods']))
    {
        $interfaceData['settings']['userDefaults']['firstFactorAuthMethods'] = $customInterfaceData['settings']['userDefaults']['firstFactorAuthMethods'];
    }

    if(isset($customInterfaceData['settings']['userDefaults']['secondFactorAuthMethods']))
    {
        $interfaceData['settings']['userDefaults']['secondFactorAuthMethods'] = $customInterfaceData['settings']['userDefaults']['secondFactorAuthMethods'];
    }
}

if (file_exists("manifest.json")) {
    $manifestJson = file_get_contents("manifest.json");
    $manifest = json_decode($manifestJson, true);
    $interfaceData["manifest"] = $manifest;
}

function userSettings() {
    global $interfaceData;
    global $user;
    $interfaceData["options"]["twofaEnabled"] = (in_array('webauthn', $user->getSecondFactorAuthMethods(), true) ? true : false);
    $interfaceData["options"]["userHasTwofaRegistrations"] = ($user->hasWebAuthn() ? true : false);
    $interfaceData["options"]["theme"] = ($user->getSettings()["theme"] ?? $interfaceData["settings"]["userDefaults"]["theme"]);
    $interfaceData["options"]["highlight"] = ($user->getSettings()["highlight"] ?? $interfaceData["settings"]["userDefaults"]["highlight"]);
    $interfaceData["options"]["language"] = ($user->getSettings()["language"] ?? $interfaceData["settings"]["userDefaults"]["language"]);
    $interfaceData["options"]["startPath"] = ($user->getSettings()["startPath"] ?? $interfaceData["settings"]["userDefaults"]["startPath"]);
    if (isset($_GET['viewportScale']) && is_float(floatval($_GET['viewportScale']))) {
        $interfaceData["options"]["viewportScale"] = floatval($_GET['viewportScale']);
    }
    else {
        $interfaceData["options"]["viewportScale"] = ($user->getSettings()["viewportScale"] ?? $interfaceData["settings"]["userDefaults"]["viewportScale"]);
    }
    if (isset($_GET['scrollbarScale']) && is_float(floatval($_GET['scrollbarScale']))) {
        $interfaceData["options"]["scrollbarScale"] = floatval($_GET['scrollbarScale']);
    }
    else {
        $interfaceData["options"]["scrollbarScale"] = ($user->getSettings()["scrollbarScale"] ?? $interfaceData["settings"]["userDefaults"]["scrollbarScale"]);
    }
    $interfaceData["options"]["languageChangeable"] = ($user->getSettings()["languageChangeable"] ?? $interfaceData["settings"]["userDefaults"]["languageChangeable"]);
    $interfaceData["options"]["twofaChangeable"] = ($user->getSettings()["twofaChangeable"] ?? $interfaceData["settings"]["userDefaults"]["twofaChangeable"]);
    $interfaceData["options"]["showFloor"] = ($user->getSettings()["showFloor"] ?? $interfaceData["settings"]["userDefaults"]["showFloor"]);
    $interfaceData["options"]["consoleLog"] = ( ((isset($_GET['console_log']) && ($user->getSettings()["consoleLog"] ?? '') == "url") || ($user->getSettings()["consoleLog"] ?? $interfaceData["settings"]["userDefaults"]["consoleLog"]) == true )  ? true : false);
    $interfaceData["options"]["websocket_url"] = $interfaceData["settings"]["homegear"]["url"];
    $interfaceData["options"]["websocket_port"] = $interfaceData["settings"]["homegear"]["port"];
    $interfaceData["options"]["websocket_security_ssl"] = $interfaceData["settings"]["homegear"]["ssl"] ?? "location.protocol";
}

if (!is_array($interfaceData)) die("Invalid JSON file!");
