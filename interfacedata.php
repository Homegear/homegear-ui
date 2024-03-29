<?php
    $defaultInterfaceDataJson = '
{
    "settings": {
        "errorReporting": "0",
        "directLoginUser": "",
        "directLoginApiKey": "",
        "setupKey": "",
        "env": "",
        "homegear": {
            "url": "location.hostname",
            "port": "location.port"
        },
        "userDefaults": {
            "theme": "dark",
            "highlight": "#e3a104",
            "startPath": "house.tab.rooms",
            "showFloor": true,
            "roleProfileDefinable": false,
            "enableAutomations": false,
            "deviceAggregation": false,
            "languageChangeable": true,
            "twofaChangeable": true,
            "consoleLog": true,
            "viewportScale": 0.65,
            "scrollbarScale": 4,
            "intercom": {
                "visible": false,
                "ringVolume": {
                    "visible": true,
                    "status": 100
                },
                "outstationVolume": {
                    "visible": true,
                    "status": 100
                },
                "mute": {
                    "visible": true,
                    "status": false
                },
                "micVolume": {
                    "visible": true,
                    "status": 100
                }
            },
            "intercomSettings": {
                "visible": false
            },
            "disabledMainmenus": {
            },
            "disabledMenus": {
                "settings.automations": true,
                "settings.log": true
            },
            "firstFactorAuthMethods": ["login", "cloud", "certificate", "oauth", "apiKey"],
            "secondFactorAuthMethods": ["webauthn"],
            "dont_show_again": {
            },
            "elementOrder": {
            }
        }
    },
    "automations": {
    },
    "notifications": {
    },
    "mainmenu": {
        "0": {
            "id": "Favorites",
            "name": "favorites",
            "icon": "star_1"
        },
        "1": {
            "id": "house",
            "name": "house",
            "icon": "house_1",
            "tabs": [
                {
                    "id": "rooms",
                    "name": "house.tab.rooms",
                    "icon": "house_1"
                },
                {
                    "id": "devices",
                    "name": "house.tab.devices",
                    "icon": "switches_1"
                },
                {
                    "id": "profiles",
                    "name": "house.tab.profiles",
                    "icon": "slider_1"
                }
            ]
        },
        "2": {
            "id": "intercom",
            "name": "intercom",
            "icon": "telephone_1",
            "condition": {
                "route": {
                    "query": "intercom"
                },
                "options": {
                    "path": ["intercom", "visible"],
                    "value": true
                }
            },
            "invoke": {
                "jsonrpc": 2.0,
                "method": "triggerIntercom",
                "params": []
            }
        },
        "3": {
            "id": "notifications",
            "name": "notifications",
            "icon": "notification_2"
        },
        "4": {
            "id": "settings",
            "name": "settings",
            "icon": "settings_1"
        },
        "5": {
            "id": "logoff",
            "name": "logoff",
            "icon": "power_1"
        }
    },
    "menu": [
        {
            "name": "settings.user.manage",
            "mainmenu": "settings",
            "category": "user",
            "level": "1",
            "icon": "profile_1",
            "type": "submenu",
            "description": "settings.user.manage.description"
        },
        {
            "name": "settings.favorites",
            "type": "finalmenu",
            "component": "ShifSettingsFavorites",
            "mainmenu": "settings",
            "category": "favorites",
            "level": "1",
            "icon": "star_1",
            "description": "settings.favorites.description"
        },
        {
            "name": "settings.sort",
            "type": "finalmenu",
            "component": "ShifSettingsSort",
            "mainmenu": "settings",
            "category": "sort",
            "level": "1",
            "icon": "move_1",
            "description": "settings.sort.description"
        },
        {
            "name": "settings.profiles",
            "type": "submenu",
            "mainmenu": "settings",
            "category": "profiles",
            "level": "1",
            "icon": "slider_1",
            "description": "settings.profiles.description"
        },
        {
            "name": "settings.automations",
            "type": "submenu",
            "mainmenu": "settings",
            "category": "automations",
            "level": "1",
            "icon": "calendar-time_1",
            "description": "settings.automations.description"
        },
        {
            "name": "settings.intercom",
            "type": "submenu",
            "mainmenu": "settings",
            "category": "intercom",
            "level": "1",
            "icon": "telephone_1",
            "description": "settings.intercom.description",
            "condition": {
                "route": {
                    "query": "intercom"
                },
                "options": {
                    "path": ["intercomSettings", "visible"],
                    "value": true
                }
            }
        },
        {
            "name": "settings.roomnames",
            "type": "submenu",
            "mainmenu": "settings",
            "category": "roomnames",
            "level": "1",
            "icon": "speech_bubble_1",
            "description": "settings.roomnames.description"
        },
        {
            "name": "settings.log",
            "type": "submenu",
            "component": "ShifSettingsLog",
            "mainmenu": "settings",
            "category": "log",
            "level": "1",
            "icon": "warning_1",
            "description": "settings.log.description"
        },
        {
            "name": "settings.about",
            "type": "submenu",
            "mainmenu": "settings",
            "category": "license",
            "level": "1",
            "icon": "information_1",
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
                "highlight_active": "",
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
                "highlight_active": "",
                "highlight_inactive": "#cccccc"
            }
        }
    },
    "deviceCategories": {
        "0": {
            "name": {
                "en-US": "Lighting",
                "de-DE": "Beleuchtung"
            },
            "icon": "light_on_1",
            "l2_status": true,
            "highlightIcon": true,
            "aggregation": [
                {
                    "type": 2,
                    "roles": [
                        100001
                    ]
                },
                {
                    "type": 1,
                    "roles": [
                        101001
                    ]
                }
            ],
            "statusMap": {
                "de-DE": {
                    "0": "aus",
                    "1": "an",
                    "falseCount": "aus",
                    "trueCount": "an"
                },
                "en-US": {
                    "0": "off",
                    "1": "on",
                    "falseCount": "off",
                    "trueCount": "on"
                }
            },
            "uiElements": {
                "lightingBrightness": true,
                "lightingButton": true,
                "lightingColor": true,
                "lightingSwitch": true,
                "lightingSwitchBrightness": true,
                "lightingSwitchBrightnessTemp": true,
                "lightingSwitchColor": true,
                "lightingTemp": true
            }
        },
        "1": {
            "name": {
                "en-US": "Heating",
                "de-DE": "Heizung"
            },
            "icon": "heater_1",
            "l2_status": true,
            "highlightIcon": false,
            "aggregation": [
                {
                    "type": 2,
                    "roles": [
                        201003
                    ]
                }
            ],
            "statusMap": {
                "de-DE": {
                    "0": "Frostschutz",
                    "1": "Komfort",
                    "2": "Spar"
                },
                "en-US": {
                    "0": "Frost protection",
                    "1": "Comfort",
                    "2": "Eco"
                }
            },
            "uiElements": {
                "heatingTemperature": true,
                "heatingSliderMode": true,
                "heatingSliderModeWindowhandle": true,
                "heatingMode": true,
                "heatingSlider": true
            }
        },
        "2": {
            "name": {
                "en-US": "Ventilation",
                "de-DE": "Lüftung"
            },
            "icon": "ventilator_2",
            "l2_status": true,
            "highlightIcon": false,
            "aggregation": [
                {
                    "type": 2,
                    "roles": [
                        202001
                    ]
                }
            ],
            "statusMap": {
                "de-DE": {
                    "0": "Stufe 1",
                    "1": "Stufe 2",
                    "2": "Stufe 3",
                    "3": "Stufe 4"
                },
                "en-US": {
                    "0": "Level 1",
                    "1": "Level 2",
                    "2": "Level 3",
                    "3": "Level 4"
                }
            },
            "uiElements": {
                "ventilationMode": true
            }
        },
        "3": {
            "name": {
                "en-US": "Doors",
                "de-DE": "Türen"
            },
            "icon": "door_open_2",
            "l2_status": true,
            "highlightIcon": true,
            "aggregation": [
                {
                    "type": 2,
                    "roles": [
                        301001,
                        301003
                    ]
                }
            ],
            "statusMap": {
                "de-DE": {
                    "0": "geschlossen",
                    "1": "geöffnet",
                    "3": "verriegelt"
                },
                "en-US": {
                    "0": "closed",
                    "1": "opened",
                    "3": "locked"
                }
            },
            "uiElements": {
                "doorHandle": true,
                "doorLock": true
            }
        },
        "4": {
            "name": {
                "en-US": "Windows",
                "de-DE": "Fenster"
            },
            "icon": "window_1",
            "l2_status": true,
            "highlightIcon": true,
            "aggregation": [
                {
                    "type": 2,
                    "roles": [
                        301002
                    ]
                }
            ],
            "statusMap": {
                "de-DE": {
                    "0": "geschlossen",
                    "1": "geöffnet",
                    "2": "gekippt"
                },
                "en-US": {
                    "0": "geschlossen",
                    "1": "geöffnet",
                    "2": "tilted"
                }
            },
            "uiElements": {
                "windowHandle": true,
                "windowPosition": true
            }
        },
        "5": {
            "name": {
                "en-US": "Sockets",
                "de-DE": "Steckdosen"
            },
            "icon": "socket_1",
            "l2_status": true,
            "highlightIcon": true,
            "aggregation": [
                {
                    "type": 2,
                    "roles": [
                        400001
                    ]
                }
            ],
            "statusMap": {
                "de-DE": {
                    "0": "aus",
                    "1": "an"
                },
                "en-US": {
                    "0": "off",
                    "1": "on"
                }
            },
            "uiElements": {
                "socketButton": true,
                "socketSwitch": true
            }
        },
        "6": {
            "name": {
                "en-US": "Shading",
                "de-DE": "Beschattung"
            },
            "icon": "blind_1",
            "l2_status": true,
            "highlightIcon": false,
            "aggregation": [
                {
                    "type": 2,
                    "roles": [
                        501000
                    ]
                },
                {
                    "type": 1,
                    "roles": [
                        501004
                    ]
                }
            ],
            "statusMap": {
                "de-DE": {
                    "falseCount": "eingefahren",
                    "trueCount": "ausgefahren"
                },
                "en-US": {
                    "falseCount": "retracted",
                    "trueCount": "extended"
                }
            },
            "uiElements": {
                "shadingButtons": true,
                "shadingButtonsPosition": true,
                "shadingButtonsPositionPositionSlats": true,
                "shadingButtonsPositionVentilationWindalarm": true,
                "shadingButtonsPositionWindalarm": true,
                "shadingButtonsSingleStep": true,
                "shadingButtonsSingleStepPositionPositionSlatsWindalarm": true,
                "shadingButtonsUpDown": true,
                "shadingPosition": true,
                "shadingPositionSlats": true,
                "shadingRainalarm": true,
                "shadingVentilation": true,
                "shadingWindalarm": true
            }
        },
        "7": {
            "name": {
                "en-US": "Awnings",
                "de-DE": "Markisen"
            },
            "icon": "awning_1",
            "l2_status": true,
            "highlightIcon": false,
            "aggregation": [
                {
                    "type": 2,
                    "roles": [
                        502000
                    ]
                },
                {
                    "type": 1,
                    "roles": [
                        502004
                    ]
                }
            ],
            "statusMap": {
                "de-DE": {
                    "falseCount": "eingefahren",
                    "trueCount": "ausgefahren"
                },
                "en-US": {
                    "falseCount": "retracted",
                    "trueCount": "extended"
                }
            },
            "uiElements": {
                "shadingAwningButtonsPosition": true,
                "shadingAwningButtonsPositionRainalarm": true,
                "shadingAwningButtonsPositionWindalarm": true,
                "shadingAwningButtonsPositionWindalarmRainalarm": true
            }
        },
        "8": {
            "name": {
                "en-US": "Window motors",
                "de-DE": "Fenstermotoren"
            },
            "icon": "window_2",
            "l2_status": true,
            "highlightIcon": false,
            "aggregation": [
                {
                    "type": 2,
                    "roles": [
                        600000
                    ]
                },
                {
                    "type": 1,
                    "roles": [
                        600004
                    ]
                }
            ],
            "statusMap": {
                "de-DE": {
                    "falseCount": "geöffnet",
                    "trueCount": "geschlossen"
                },
                "en-US": {
                    "falseCount": "open",
                    "trueCount": "closed"
                }
            },
            "uiElements": {
                "windowButtons": true,
                "windowButtonsPosition": true,
                "windowButtonsPositionRainalarm": true,
                "windowButtonsUpDown": true,
                "windowButtonsUpDownRainalarm": true,
                "windowRainalarm": true
            }
        },
        "9": {
            "name": {
                "en-US": "weather",
                "de-DE": "Wetter"
            },
            "icon": "weather_1",
            "l2_status": false,
            "highlightIcon": false,
            "aggregation": [

            ],
            "statusMap": {

            },
            "uiElements": {
                "OpenWeatherMap": true,
                "climateCity": true,
                "climateCloudcoverage": true,
                "climateDate": true,
                "climatePressure": true,
                "climateRain": true,
                "climateRain3h": true,
                "climateSnow3h": true,
                "climateSunrise": true,
                "climateSunset": true,
                "climateDusk": true,
                "climateWeather": true,
                "climateWinddirection": true,
                "climateWindgust": true,
                "climateWindspeed": true
            }
        },
        "10": {
            "name": {
                "en-US": "Climate",
                "de-DE": "Klima"
            },
            "icon": "weather_1",
            "l2_status": false,
            "highlightIcon": false,
            "aggregation": [

            ],
            "statusMap": {

            },
            "uiElements": {
                "humidity": true,
                "temperature": true
            }
        },
        "11": {
            "name": {
                "en-US": "Media",
                "de-DE": "Media"
            },
            "icon": "speaker_1",
            "l2_status": false,
            "highlightIcon": false,
            "aggregation": [

            ],
            "statusMap": {

            },
            "uiElements": {
                "mediaButtons": true
            }
        },
        "12": {
            "name": {
                "en-US": "Helper",
                "de-DE": "Helper"
            },
            "icon": "police_1",
            "l2_status": false,
            "highlightIcon": false,
            "aggregation": [

            ],
            "statusMap": {

            },
            "uiElements": {
                "helperSwitch": true
            }
        }
    },
    "i18n": {
        "en-US": {
            "error.page_not_found": "Error",
            "error.title": "The page could not be found",
            "error.link.text": "Back to home",
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
            "notifications": "Notifications",
            "notifications.amount": "Amount",
            "notifications.close_delete": "Close and Delete",
            "notifications.dont_show_again": "Don\'t show again",
            "settings": "Settings",
            "settings.automations": "Automations",
            "settings.automations.description": "Add and delete automations",
            "settings.automations.new": "New",
            "settings.automations.selection": "Selection",
            "settings.automations.automation.name": "Name",
            "settings.automations.automation.description": "Description",
            "settings.automations.automation.state": "Enabled",
            "settings.automations.automation.icon": "Icon",
            "settings.automations.automation.condition": "Condition",
            "settings.automations.automation.condition.astrofunction": "Astro Function",
            "settings.automations.automation.condition.astrofunction.sunrise": "Sunrise",
            "settings.automations.automation.condition.astrofunction.sunset": "Sunset",
            "settings.automations.automation.condition.astrofunction.offset": "Offset (+/- Min.)",
            "settings.automations.automation.condition.days": "Date",
            "settings.automations.automation.condition.days.mo": "Mo.",
            "settings.automations.automation.condition.days.tu": "Tu.",
            "settings.automations.automation.condition.days.we": "We.",
            "settings.automations.automation.condition.days.th": "Th.",
            "settings.automations.automation.condition.days.fr": "Fr.",
            "settings.automations.automation.condition.days.sa": "Sa.",
            "settings.automations.automation.condition.days.su": "Su.",
            "settings.automations.automation.condition.time": "Time",
            "settings.automations.automation.condition.time.hour": "Hour",
            "settings.automations.automation.condition.time.minute": "Minute",
            "settings.automations.automation.condition.devices": "Devices",
            "settings.automations.automation.condition.devices.table.place": "Place",
            "settings.automations.automation.condition.devices.table.device": "Device",
            "settings.automations.automation.condition.devices.table.control": "Control",
            "settings.automations.automation.condition.devices.table.input": "Input",
            "settings.automations.automation.condition.devices.table.operator": "Operator",
            "settings.automations.automation.condition.devices.table.value": "Value",
            "settings.automations.automation.condition.devices.table.delete": "Delete",
            "settings.automations.automation.condition.devices.add": "Add",
            "settings.automations.automation.action": "Action",
            "settings.automations.automation.action.device": "Device",
            "settings.automations.automation.action.profile": "Profile",
            "settings.automations.automation.save": "Save",
            "settings.automations.automation.delete": "Delete",
            "settings.favorites": "Favorites",
            "settings.favorites.mode": "Modify favorites",
            "settings.favorites.description": "Set and unset favorites",
            "settings.intercom": "Intercom",
            "settings.intercom.description": "Intercom settings",
            "settings.intercom.volume_bell": "Bell volume",
            "settings.intercom.volume_voice": "Voice volume",
            "settings.intercom.sensitivity": "Microphone sensitivity",
            "settings.intercom.mute": "Mute bell",
            "settings.log": "Log",
            "settings.log.description": "View browser log",
            "settings.sort": "Sort",
            "settings.sort.mode": "Sort elements",
            "settings.sort.description": "Restructure: stories, rooms, devices, favorites, profiles, ...",
            "settings.profiles": "Profiles",
            "settings.profiles.new": "New",
            "settings.profiles.profile.name": "Name",
            "settings.profiles.profile.icon": "Icon",
            "settings.profiles.profile.locations": "Locations",
            "settings.profiles.profile.locations.global": "Show in \"Profiles\" tab",
            "settings.profiles.profile.locations.favorite": "Favorite",
            "settings.profiles.profile.locations.floor": "Story",
            "settings.profiles.profile.locations.room": "Rooms",
            "settings.profiles.profile.locations.add": "Add",
            "settings.profiles.profile.locations.remove": "Remove",
            "settings.profiles.profile.categories": "Device Categories",
            "settings.profiles.profile.roles": "Role",
            "settings.profiles.profile.roles.name": "Role",
            "settings.profiles.profile.roles.value": "State",
            "settings.profiles.profile.roles.add": "Add",
            "settings.profiles.profile.roles.remove": "Remove",
            "settings.profiles.profile.delete": "Delete",
            "settings.profiles.profile.load": "Modify Devices",
            "settings.profiles.profile.load.description": "Please choose the devices you want to have added to the profile. Please adjust the device states of the wanted devices before saving.<br /><br />Note: To showcase profiles changes live, all relevant devices are set to their configured value.",
            "settings.profiles.profile.save": "Save",
            "settings.profiles.profile.edit": "Edit",
            "settings.profiles.profile.delete_request": "Are you sure you want to delete this profile?",
            "settings.profiles.profile.unsaved": "You have unsaved changes. Continue anyway?",
            "settings.profiles.profile.abort": "Abort",
            "settings.profiles.profile.global_or_room": "A profile must either be marked as \"global\" or be assigned to a room. Please change your configuration.",
            "settings.profiles.profile.name_required": "A profile must have a name. Please change your configuration.",
            "settings.profiles.description": "Add and delete profiles",
            "settings.roomnames": "Room names",
            "settings.roomnames.description": "Change room names",
            "settings.roomnames.roomname.description": "Change room names",
            "settings.roomnames.roomname.icon": "Icon",
            "settings.roomnames.roomname.save": "Save",
            "settings.roomnames.roomname.unsaved": "You have unsaved changes. Continue anyway?",
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
            "settings.user.manage.startpath": "Start path",
            "settings.user.manage.save": "Save",
            "settings.user.manage.unsaved": "You have unsaved changes. Continue anyway?",
            "settings.about": "License",
            "settings.about.description": "Credits",
            "settings.about.table.name": "Name",
            "settings.about.table.version": "Version",
            "settings.about.table.rights": "Rights",
            "settings.about.table.license": "License",
            "settings.about.table.license.url": "License URL",
            "modemenu.favorites.name": "Favorites mode",
            "modemenu.favorites.button.end": "Exit editing",
            "modemenu.sort.name": "Sort mode",
            "modemenu.sort.button.end": "Save",
            "modemenu.profiles.name.label": "Profile",
            "modemenu.profiles.name.new": "New profile",
            "modemenu.profiles.button.settings": "Back to profile configuration",
            "modemenu.profiles.button.end": "Save",
            "modemenu.profiles.button.abort": "abort",
            "refresh.message": "Please reload the interface",
            "refresh.message.button.text": "reload",
            "logoff": "Logoff",
            "disabled_text": "disabled",
            "hide": "hide",
            "close": "close",
            "user_interaction.alert.button.true": "Confirm",
            "user_interaction.confirm.button.false": "Abort",
            "user_interaction.confirm.button.true": "Confirm",
            "draggable.confirm.invalid_keys": "Due to changes of data, it is impossible to visualize the user defined order of elments. To be able to display the page, this configuration needs to be resettet first.",
            "draggable.confirm.invalid_keys.button.reset": "Reset",
            "draggable.confirm.invalid_keys.button.abort": "Abort"
        },
        "de-DE": {
            "error.page_not_found": "Fehler",
            "error.title": "Die Seite konnte nicht angezeigt werden",
            "error.link.text": "Zurück zur Raumansicht",
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
            "notifications": "Benachrichtigungen",
            "notifications.amount": "Anzahl",
            "notifications.close_delete": "Löschen und Schließen",
            "notifications.dont_show_again": "Nicht erneut anzeigen",
            "settings": "Einstellungen",
            "settings.automations": "Automatisierungen",
            "settings.automations.new": "Neu",
            "settings.automations.description": "Automatisierungen erstellen oder löschen",
            "settings.automations.selection": "Auswahl",
            "settings.automations.automation.name": "Name",
            "settings.automations.automation.description": "Beschreibung",
            "settings.automations.automation.state": "Aktiviert",
            "settings.automations.automation.icon": "Icon",
            "settings.automations.automation.condition": "Bedingung",
            "settings.automations.automation.condition.astrofunction": "Astrofunktion",
            "settings.automations.automation.condition.astrofunction.sunrise": "Sonnenaufgang",
            "settings.automations.automation.condition.astrofunction.sunset": "Sonnenuntergang",
            "settings.automations.automation.condition.astrofunction.offset": "Abweichung (+/- Min.)",
            "settings.automations.automation.condition.days": "Wochentag",
            "settings.automations.automation.condition.days.mo": "Mo.",
            "settings.automations.automation.condition.days.tu": "Di.",
            "settings.automations.automation.condition.days.we": "Mi.",
            "settings.automations.automation.condition.days.th": "Do.",
            "settings.automations.automation.condition.days.fr": "Fr.",
            "settings.automations.automation.condition.days.sa": "Sa.",
            "settings.automations.automation.condition.days.su": "So.",
            "settings.automations.automation.condition.time": "Uhrzeit",
            "settings.automations.automation.condition.time.hour": "Stunde",
            "settings.automations.automation.condition.time.minute": "Minute",
            "settings.automations.automation.condition.devices": "Geräte",
            "settings.automations.automation.condition.devices.table.place": "Ort",
            "settings.automations.automation.condition.devices.table.device": "Gerät",
            "settings.automations.automation.condition.devices.table.control": "Regler",
            "settings.automations.automation.condition.devices.table.input": "Input",
            "settings.automations.automation.condition.devices.table.operator": "Operator",
            "settings.automations.automation.condition.devices.table.value": "Wert",
            "settings.automations.automation.condition.devices.table.delete": "Löschen",
            "settings.automations.automation.condition.devices.add": "Hinzufügen",
            "settings.automations.automation.action": "Aktion",
            "settings.automations.automation.action.device": "Gerät",
            "settings.automations.automation.action.profile": "Profil",
            "settings.automations.automation.save": "Speichern",
            "settings.automations.automation.delete": "Löschen",
            "settings.favorites": "Favoriten",
            "settings.favorites.mode": "Favoriten bearbeiten",
            "settings.favorites.description": "Favoriten hinzufügen und entfernen",
            "settings.intercom": "Sprechanlage",
            "settings.intercom.description": "Sprechanlageneinstellungen",
            "settings.intercom.volume_bell": "Klingellautstärke",
            "settings.intercom.volume_voice": "Sprachlautstärke",
            "settings.intercom.sensitivity": "Mikrofonempfindlichkeit",
            "settings.intercom.mute": "Klingelton stummschalten",
            "settings.log": "Log",
            "settings.log.description": "Zeige Browser-Log",
            "settings.sort": "Sortieren",
            "settings.sort.mode": "Elemente sortieren",
            "settings.sort.description": "Neuanordnen: Stockwerke, Räume, Geräte, Favoriten, Profile, ...",
            "settings.profiles": "Profile",
            "settings.profiles.new": "Neu",
            "settings.profiles.profile.name": "Name",
            "settings.profiles.profile.icon": "Icon",
            "settings.profiles.profile.locations": "Visualisierungsort",
            "settings.profiles.profile.locations.global": "Im Tab \"Profile\" anzeigen",
            "settings.profiles.profile.locations.favorite": "Favorit",
            "settings.profiles.profile.locations.floor": "Stockwerk",
            "settings.profiles.profile.locations.room": "Räume",
            "settings.profiles.profile.locations.add": "Hinzufügen",
            "settings.profiles.profile.locations.remove": "Entfernen",
            "settings.profiles.profile.categories": "Gerätekategorien",
            "settings.profiles.profile.roles": "Rolle",
            "settings.profiles.profile.roles.name": "Rolle",
            "settings.profiles.profile.roles.value": "Status",
            "settings.profiles.profile.roles.add": "Hinzufügen",
            "settings.profiles.profile.roles.remove": "Entfernen",
            "settings.profiles.profile.delete": "Löschen",
            "settings.profiles.profile.load": "Zugehörige Geräte bearbeiten",
            "settings.profiles.profile.load.description": "Bitte wählen Sie jetzt die Geräte aus, welche in das Profil aufgenommen werden sollen. Bitte setzen Sie vor dem Speichern den gewünschten Gerätezustand.<br /><br />Hinweis: Um Änderungen am Profil live verfolgen zu können, werden alle relevanten Geräte in den eingestellten Zustand gebracht.",
            "settings.profiles.profile.save": "Speichern",
            "settings.profiles.profile.edit": "Bearbeiten",
            "settings.profiles.profile.unsaved": "Sie haben noch nicht gespeicherte Änderungen. Trotzdem fortsetzen?",
            "settings.profiles.profile.abort": "Abbruch",
            "settings.profiles.profile.global_or_room": "Ein Profil muss entweder als \"global\" markiert, oder mindestens einem Raum zugewiesen sein. Bitte ändern Sie ihre Konfiguration.",
            "settings.profiles.profile.name_required": "Ein Profil muss einen Namen besitzen. Bitte ändern Sie ihre Konfiguration.",
            "settings.profiles.profile.delete_request": "Sind Sie sicher, dass Sie das Profil löschen möchten?",
            "settings.profiles.description": "Profile erstellen und löschen",
            "settings.roomnames": "Raumnamen",
            "settings.roomnames.description": "Raumnamen abändern",
            "settings.roomnames.roomname.description": "Raumnamen abändern",
            "settings.roomnames.roomname.icon": "Icon",
            "settings.roomnames.roomname.save": "Speichern",
            "settings.roomnames.roomname.unsaved": "Sie haben noch nicht gespeicherte Änderungen. Trotzdem fortsetzen?",
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
            "settings.user.manage.startpath": "Startpunkt",
            "settings.user.manage.save": "Speichern",
            "settings.user.manage.unsaved": "Sie haben noch nicht gespeicherte Änderungen. Trotzdem fortsetzen?",
            "settings.about": "Lizenz",
            "settings.about.description": "Credits",
            "settings.about.table.name": "Name",
            "settings.about.table.version": "Version",
            "settings.about.table.rights": "Rechte",
            "settings.about.table.license": "Lizenz",
            "settings.about.table.license.url": "Lizenz URL",
            "modemenu.favorites.name": "Favoriten Modus",
            "modemenu.favorites.button.end": "Bearbeiten beenden",
            "modemenu.sort.name": "Sortiermodus",
            "modemenu.sort.button.end": "Speichern",
            "modemenu.profiles.name.label": "Profil",
            "modemenu.profiles.name.new": "Neues Profil",
            "modemenu.profiles.button.settings": "Zurück zur Profilkonfiguration",
            "modemenu.profiles.button.end": "Speichern",
            "modemenu.profiles.button.abort": "abbrechen",
            "refresh.message": "Bitte das Interface neu laden",
            "refresh.message.button.text": "neu laden",
            "logoff": "Abmelden",
            "disabled_text": "gesperrt",
            "hide": "ausblenden",
            "close": "schließen",
            "user_interaction.alert.button.true": "Bestätigen",
            "user_interaction.confirm.button.false": "Abbruch",
            "user_interaction.confirm.button.true": "Bestätigen",
            "draggable.confirm.invalid_keys": "Durch Änderung des Datenbestands ist keine plausible Darstellung der benutzerdefinierten Sortierung mehr möglich. Um die aufgerufene Seite wieder darstellen zu können, ist ein Zurücksetzen der Sortierung für diese Seite zwingend notwendig.",
            "draggable.confirm.invalid_keys.button.reset": "Zurücksetzen",
            "draggable.confirm.invalid_keys.button.abort": "Abbrechen"
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
        "door2": "door_open_1",
        "door_open_2": "door_open_1",
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
        "humidity_1": "waterdrops_1",
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
    "map_automation": {
        "devices": [],
        "profiles": []
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

    if(isset($customInterfaceData['mainmenu']) && is_array($customInterfaceData['mainmenu'])){
        foreach ($customInterfaceData['mainmenu'] as $key => $mainmenu) {
            if (isset($mainmenu["name"]) && $mainmenu["name"] == "") {
                unset($customInterfaceData['mainmenu'][$key]);
            }
        }
    }

    $interfaceData = array_replace_recursive($interfaceData, $customInterfaceData);

    //Overwrite auth methods if they exist in custom interface data
    if(isset($customInterfaceData['settings']['userDefaults']['firstFactorAuthMethods'])){
        $interfaceData['settings']['userDefaults']['firstFactorAuthMethods'] = $customInterfaceData['settings']['userDefaults']['firstFactorAuthMethods'];
    }

    if(isset($customInterfaceData['settings']['userDefaults']['secondFactorAuthMethods'])){
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
    $interfaceData["options"]["language"] = $user->getSettings()["language"];
    $interfaceData["options"]["startPath"] = ($user->getSettings()["startPath"] ?? $interfaceData["settings"]["userDefaults"]["startPath"]);
    $interfaceData["options"]["intercom"] = ($user->getSettings()["intercom"] ?? $interfaceData["settings"]["userDefaults"]["intercom"]);
    $interfaceData["options"]["intercomSettings"] = ($user->getSettings()["intercomSettings"] ?? $interfaceData["settings"]["userDefaults"]["intercomSettings"]);
    if (isset($_GET['intercom'])) {
        $interfaceData["options"]["intercom"]["visible"] = true;
        $interfaceData["options"]["intercomSettings"]["visible"] = true;
    }
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
    $interfaceData["options"]["roleProfileDefinable"] = ($user->getSettings()["roleProfileDefinable"] ?? $interfaceData["settings"]["userDefaults"]["roleProfileDefinable"]);
    $interfaceData["options"]["enableAutomations"] = ($user->getSettings()["enableAutomations"] ?? $interfaceData["settings"]["userDefaults"]["enableAutomations"]);
    $interfaceData["options"]["languageChangeable"] = ($user->getSettings()["languageChangeable"] ?? $interfaceData["settings"]["userDefaults"]["languageChangeable"]);
    $interfaceData["options"]["deviceAggregation"] = ($user->getSettings()["deviceAggregation"] ?? $interfaceData["settings"]["userDefaults"]["deviceAggregation"]);
    $interfaceData["options"]["twofaChangeable"] = ($user->getSettings()["twofaChangeable"] ?? $interfaceData["settings"]["userDefaults"]["twofaChangeable"]);
    $interfaceData["options"]["disabledMainmenus"] = ($user->getSettings()["disabledMainmenus"] ?? $interfaceData["settings"]["userDefaults"]["disabledMainmenus"]);
    $interfaceData["options"]["disabledMenus"] = ($user->getSettings()["disabledMenus"] ?? $interfaceData["settings"]["userDefaults"]["disabledMenus"]);
    $interfaceData["options"]["showFloor"] = ($user->getSettings()["showFloor"] ?? $interfaceData["settings"]["userDefaults"]["showFloor"]);
    $interfaceData["options"]["consoleLog"] = ( ((isset($_GET['console_log']) && ($user->getSettings()["consoleLog"] ?? '') == "url") || ($user->getSettings()["consoleLog"] ?? $interfaceData["settings"]["userDefaults"]["consoleLog"]) == true )  ? true : false);
    $interfaceData["options"]["websocket_url"] = $interfaceData["settings"]["homegear"]["url"];
    $interfaceData["options"]["websocket_port"] = $interfaceData["settings"]["homegear"]["port"];
    $interfaceData["options"]["websocket_security_ssl"] = $interfaceData["settings"]["homegear"]["ssl"] ?? "location.protocol";
    $interfaceData["options"]["elementOrder"] = ($user->getSettings()["elementOrder"] ?? $interfaceData["settings"]["userDefaults"]["elementOrder"]);
    $interfaceData["options"]["dont_show_again"] = ($user->getSettings()["dont_show_again"] ?? $interfaceData["settings"]["userDefaults"]["dont_show_again"]);
}

if (!is_array($interfaceData)) die("Invalid JSON file!");
