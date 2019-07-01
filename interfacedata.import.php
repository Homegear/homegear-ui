<?php $importInterfaceDataJson = '
{
    "floors": [
        {
            "id": "1",
            "name": "Erdgeschoss"
        },
        {
            "id": "2",
            "name": "Obergeschoss"
        },
        {
            "id": "3",
            "name": "Dachgeschoss"
        },
        {
            "id": "4",
            "name": "Untergeschoss"
        }
    ],
    "rooms": {
        "1": {
            "id": "1",
            "name": "Abstellraum",
            "floor": "1",
            "icon": "clean1"
        },
        "2": {
            "id": "2",
            "name": "Bad",
            "floor": "1",
            "icon": "wc2"
        },
        "3": {
            "id": "3",
            "name": "Diele",
            "floor": "3",
            "icon": "floor1"
        },
        "4": {
            "id": "4",
            "name": "Garage",
            "floor": "4",
            "icon": "garage1"
        },
        "5": {
            "id": "5",
            "name": "Gäste WC",
            "floor": "2",
            "icon": "wc1"
        },
        "6": {
            "id": "6",
            "name": "Kind",
            "floor": "2",
            "icon": "player"
        },
        "7": {
            "id": "7",
            "name": "Loggia",
            "floor": "3",
            "icon": "balcony1"
        },
        "8": {
            "id": "8",
            "name": "Lüftung",
            "floor": "4",
            "icon": "ventilator"
        },
        "9": {
            "id": "9",
            "name": "Schlafen",
            "floor": "1",
            "icon": "bett1"
        },
        "10": {
            "id": "10",
            "name": "Technikraum",
            "floor": "4",
            "icon": "tools"
        },
        "11": {
            "id": "11",
            "name": "Waschraum",
            "floor": "4",
            "icon": "waschmaschiene1"
        },
        "12": {
            "id": "12",
            "name": "Wohnbereich",
            "floor": "1",
            "icon": "sofa1"
        }
    },
    "users": {
        "1":{
            "username": "ui",
            "groups": [1],
            "interface": {
                "language": "de-DE",
                "theme": "dark",
                "highlight": "#e3a104",
                "houseView": "scroll",
                "firstBreadcrumb": "Haus",
                "firstBreadcrumbId": "house",
                "showFloor": "true",
                "consoleLog": "true"
            }
        }
    },
    "roles": [
        {
            "id": 100000,
            "metadata": {
                "interface": {
                    "icon": "licht1",
                    "invokeOutputs": [
                        {
                            "value": 0,
                            "buttonText": "Zentral aus"
                        }
                    ],
                    "translations": {
                       "de-DE": {
                         "0": "aus",
                         "1": "an"
                       },
                       "en-US": {
                         "0": "off",
                         "1": "on"
                       }
                    }
                }
            }
        },
        {
            "id": 201000,
            "metadata": {
                "interface": {
                    "icon": "heater",
                    "invokeOutputs": [
                        {
                            "roleId": 201003,
                            "value": 0,
                            "buttonText": "Zentral Komfort"
                        },
                        {
                            "roleId": 201003,
                            "value": 1,
                            "buttonText": "Zentral Frostschutz"
                        },
                        {
                            "roleId": 201003,
                            "value": 2,
                            "buttonText": "Zentral Spar"
                        }
                    ],
                    "translations": {
                       "de-DE": {
                         "0": "Komfort",
                         "1": "Frostschutz",
                         "2": "Spar"
                       },
                       "en-US": {
                         "0": "Comfort",
                         "1": "Frost",
                         "2": "Eco"
                       }
                    },
                    "rolesInclude": [
                        {
                            "aggregationType": 2,
                            "roles": [
                                201003
                            ]
                        }
                    ]
                }
            }
        },
        {
            "id": 201001,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Ist"
                       },
                       "en-US": {
                         "0": "Is"
                       }
                    }
                }
            }
        },
        {
            "id": 201002,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Soll"
                       },
                       "en-US": {
                         "0": "Setpoint"
                       }
                    }
                }
            }
        },
        {
            "id": 201003,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Komfort",
                         "1": "Frostschutz",
                         "2": "Spar"
                       },
                       "en-US": {
                         "0": "Comfort",
                         "1": "Frost",
                         "2": "Spar"
                       }
                    }
                }
            }
        },
        {
            "id": 201004,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Komfort"
                       },
                       "en-US": {
                         "0": "Comfort"
                       }
                    }
                }
            }
        },
        {
            "id": 201005,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Absenk"
                       },
                       "en-US": {
                         "0": "Eco"
                       }
                    }
                }
            }
        },
        {
            "id": 201006,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Frost"
                       },
                       "en-US": {
                         "0": "Frost"
                       }
                    }
                }
            }
        },
        {
            "id": 301001,
            "metadata": {
                "interface": {
                    "icon": "door2",
                    "translations": {
                       "de-DE": {
                         "0": "geschlossen",
                         "1": "offen"
                       },
                       "en-US": {
                         "0": "closed",
                         "1": "opened"
                       }
                    }
                }
            }
        },
        {
            "id": 301002,
            "metadata": {
                "interface": {
                    "icon": "fenster1",
                    "translations": {
                       "de-DE": {
                         "0": "geschlossen",
                         "1": "geöffnet",
                         "2": "gekippt"
                       },
                       "en-US": {
                         "0": "closed",
                         "1": "opened",
                         "2": "Tilted"
                       }
                    }
                }
            }
        },
        {
            "id": 400000,
            "metadata": {
                "interface": {
                    "icon": "socket1",
                    "invokeOutputs": [
                        {
                            "value": 0,
                            "buttonText": "Zentral aus"
                        }
                    ],
                    "translations": {
                       "de-DE": {
                         "0": "aus",
                         "1": "an"
                       },
                       "en-US": {
                         "0": "off",
                         "1": "on"
                       }
                    }
                }
            }
        },
        {
            "id": 500000,
            "metadata": {
                "interface": {
                    "icon": "rolladen1",
                    "invokeOutputs": [
                        {
                            "roleId": 501003,
                            "value": 0,
                            "buttonText": "Zentral auf"
                        },
                        {
                            "roleId": 501003,
                            "value": 100,
                            "buttonText": "Zentral ab"
                        }
                    ],
                    "translations": {
                       "de-DE": {
                         "falseCount": "eingefahren",
                         "trueCount": "ausgefahren"
                       },
                       "en-US": {
                         "falseCount": "retracted",
                         "trueCount": "extended"
                       }
                    },
                    "rolesInclude": [
                        {
                            "aggregationType": 1,
                            "roles": [
                                501003,
                                502003
                            ]
                        }
                    ]
                }
            }
        },
        {
            "id": 501001,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Hoch"
                       },
                       "en-US": {
                         "0": "Up"
                       }
                    }
                }
            }
        },
        {
            "id": 501002,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Runter"
                       },
                       "en-US": {
                         "0": "Down"
                       }
                    }
                }
            }
        },
        {
            "id": 501003,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Stop"
                       },
                       "en-US": {
                         "0": "Stop"
                       }
                    }
                }
            }
        },
        {
            "id": 502001,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "einfahren"
                       },
                       "en-US": {
                         "0": "retract"
                       }
                    }
                }
            }
        },
        {
            "id": 502002,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "ausfahren"
                       },
                       "en-US": {
                         "0": "extend"
                       }
                    }
                }
            }
        },
        {
            "id": 502003,
            "metadata": {
                "interface": {
                    "translations": {
                       "de-DE": {
                         "0": "Stop"
                       },
                       "en-US": {
                         "0": "Stop"
                       }
                    }
                }
            }
        }
    ],
    "roles2var": [
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "TEST",
            "roleId": 100000
        },
        {
            "deviceId": 1,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 2,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 3,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 4,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 5,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 6,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 7,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 8,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 9,
            "channel": 1,
            "varName": "STATE",
            "roleId": 400000
        },
        {
            "deviceId": 10,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 11,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 12,
            "channel": 1,
            "varName": "STATE",
            "roleId": 400000
        },
        {
            "deviceId": 13,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 14,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 15,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 16,
            "channel": 1,
            "varName": "STATE",
            "roleId": 400000
        },
        {
            "deviceId": 17,
            "channel": 1,
            "varName": "UP",
            "roleId": 501001
        },
        {
            "deviceId": 17,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 501002
        },
        {
            "deviceId": 17,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 18,
            "channel": 1,
            "varName": "UP",
            "roleId": 501001
        },
        {
            "deviceId": 18,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 501002
        },
        {
            "deviceId": 18,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 19,
            "channel": 1,
            "varName": "UP",
            "roleId": 501001
        },
        {
            "deviceId": 19,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 501002
        },
        {
            "deviceId": 19,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 20,
            "channel": 1,
            "varName": "UP",
            "roleId": 501001
        },
        {
            "deviceId": 20,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 501002
        },
        {
            "deviceId": 20,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 21,
            "channel": 1,
            "varName": "UP",
            "roleId": 501001
        },
        {
            "deviceId": 21,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 501002
        },
        {
            "deviceId": 21,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 22,
            "channel": 1,
            "varName": "UP",
            "roleId": 501001
        },
        {
            "deviceId": 22,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 501002
        },
        {
            "deviceId": 22,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 23,
            "channel": 1,
            "varName": "UP",
            "roleId": 501001
        },
        {
            "deviceId": 23,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 501002
        },
        {
            "deviceId": 23,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 24,
            "channel": 1,
            "varName": "UP",
            "roleId": 501001
        },
        {
            "deviceId": 24,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 501002
        },
        {
            "deviceId": 24,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 25,
            "channel": 1,
            "varName": "UP",
            "roleId": 502001
        },
        {
            "deviceId": 25,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 502002
        },
        {
            "deviceId": 25,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 26,
            "channel": 1,
            "varName": "UP",
            "roleId": 502001
        },
        {
            "deviceId": 26,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 502002
        },
        {
            "deviceId": 26,
            "channel": 1,
            "varName": "CURRENT_POSITION",
            "roleId": 501003
        },
        {
            "deviceId": 60,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 61,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 62,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 63,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 64,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 65,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 66,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 67,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 69,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301001
        },
        {
            "deviceId": 70,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 78,
            "channel": 1,
            "varName": "TEMPERATURE",
            "roleId": 201001
        },
        {
            "deviceId": 78,
            "channel": 1,
            "varName": "SETPOINT_TEMPERATURE",
            "roleId": 201002
        },
        {
            "deviceId": 78,
            "channel": 1,
            "varName": "CONTROL_MODE",
            "roleId": 201003
        },
        {
            "deviceId": 79,
            "channel": 1,
            "varName": "TEMPERATURE",
            "roleId": 201001
        },
        {
            "deviceId": 79,
            "channel": 1,
            "varName": "SETPOINT_TEMPERATURE",
            "roleId": 201002
        },
        {
            "deviceId": 79,
            "channel": 1,
            "varName": "CONTROL_MODE",
            "roleId": 201003
        },
        {
            "deviceId": 80,
            "channel": 1,
            "varName": "TEMPERATURE",
            "roleId": 201001
        },
        {
            "deviceId": 80,
            "channel": 1,
            "varName": "SETPOINT_TEMPERATURE",
            "roleId": 201002
        },
        {
            "deviceId": 80,
            "channel": 1,
            "varName": "CONTROL_MODE",
            "roleId": 201003
        },
        {
            "deviceId": 81,
            "channel": 1,
            "varName": "TEMPERATURE",
            "roleId": 201001
        },
        {
            "deviceId": 81,
            "channel": 1,
            "varName": "SETPOINT_TEMPERATURE",
            "roleId": 201002
        },
        {
            "deviceId": 81,
            "channel": 1,
            "varName": "CONTROL_MODE",
            "roleId": 201003
        },
        {
            "deviceId": 82,
            "channel": 1,
            "varName": "TEMPERATURE",
            "roleId": 201001
        },
        {
            "deviceId": 82,
            "channel": 1,
            "varName": "SETPOINT_TEMPERATURE",
            "roleId": 201002
        },
        {
            "deviceId": 82,
            "channel": 1,
            "varName": "CONTROL_MODE",
            "roleId": 201003
        },
        {
            "deviceId": 83,
            "channel": 1,
            "varName": "TEMPERATURE",
            "roleId": 201001
        },
        {
            "deviceId": 83,
            "channel": 1,
            "varName": "SETPOINT_TEMPERATURE",
            "roleId": 201002
        },
        {
            "deviceId": 83,
            "channel": 1,
            "varName": "CONTROL_MODE",
            "roleId": 201003
        },
        {
            "deviceId": 84,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 87,
            "channel": 1,
            "varName": "STATE",
            "roleId": 301002
        },
        {
            "deviceId": 91,
            "channel": 1,
            "varName": "STATE",
            "roleId": 400000
        },
        {
            "deviceId": 92,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 93,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 94,
            "channel": 1,
            "varName": "STATE",
            "roleId": 100000
        },
        {
            "deviceId": 92,
            "channel": 1,
            "varName": "LEVEL_FAST",
            "roleId": 101000
        },
        {
            "deviceId": 93,
            "channel": 1,
            "varName": "LEVEL_FAST",
            "roleId": 101000
        },
        {
            "deviceId": 94,
            "channel": 1,
            "varName": "LEVEL_FAST",
            "roleId": 101000
        }
    ],
    "uiElements": [
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEST"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEST"
                        }
                    ]
                ],
                "label": "Licht SystemVar",
                "room": 3,
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 1,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 1,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht",
                "room": 3,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 2,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 2,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht",
                "room": 6,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 3,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 3,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht Decke",
                "room": 2,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 4,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 4,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht Spiegel",
                "room": 2,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 5,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 5,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht",
                "room": 9,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 6,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 6,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht c",
                "room": 12,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 7,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 7,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht b",
                "room": 12,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 8,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 8,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht d",
                "room": 12,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.socketButton",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 9,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 9,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Steckdose",
                "room": 12,
                "categories": [
                    7
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 10,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 10,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht",
                "room": 1,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 11,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 11,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht",
                "room": 7,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.socketSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 12,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 12,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Steckdose",
                "room": 7,
                "categories": [
                    7
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 13,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 13,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht",
                "room": 10,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 14,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 14,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht Decke",
                "room": 5,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 15,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 15,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht Spiegel",
                "room": 5,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.socketSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 16,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 16,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Steckdose",
                "room": 11,
                "categories": [
                    7
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.lightingSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 84,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 84,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Licht Unterschrank",
                "room": 12,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.socketSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 91,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 91,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Steckdose",
                "room": 4,
                "categories": [
                    7
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.shadingButtonsUpDown",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 17,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 17,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 17,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 17,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ]
                ],
                "label": "Dachflächenfenster",
                "room": 3,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.shadingButtonsButtonsSingleStepButtonsUpDownPositionPositionSlatsVentilationWindalarm",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "VENTILATION"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDALARM"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "VENTILATION"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDALARM"
                        }
                    ]
                ],
                "label": "Rollladen Windalarm",
                "room": 6,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.shadingButtonsPositionPositionSlats",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "label": "Rollladen rechts",
                "room": 6,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.shadingButtonsPositionSlats",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 20,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 20,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 20,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 20,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 20,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 20,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 20,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 20,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "label": "Rollladen",
                "room": 2,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.shadingButtonsPositionVentilationWindalarm",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 21,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 21,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 21,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 21,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 21,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 21,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 21,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 21,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "label": "Rollladen links",
                "room": 9,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.shadingButtonsPositionWindalarm",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 22,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 22,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 22,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 22,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 22,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 22,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 22,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 22,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "label": "Rollladen rechts",
                "room": 9,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.shadingButtonsPosition",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 23,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 23,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 23,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 23,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 23,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 23,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 23,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 23,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "label": "Rollladen Wohnen",
                "room": 12,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.shadingButtonsPosition",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 24,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 24,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 24,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 24,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 24,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 24,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 24,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 24,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "label": "Rollladen Essen",
                "room": 12,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.shadingButtonsPosition",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 25,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 25,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 25,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 25,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 25,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 25,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 25,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 25,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "label": "Markise Wohnen",
                "room": 7,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.shadingButtonsPosition",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 26,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 26,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 26,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 26,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 26,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 26,
                            "channel": 1,
                            "name": "UP"
                        },
                        {
                            "peer": 26,
                            "channel": 1,
                            "name": "DOWN"
                        }
                    ],
                    [
                        {
                            "peer": 26,
                            "channel": 1,
                            "name": "CURRENT_POSITION"
                        }
                    ]
                ],
                "label": "Markise Essen",
                "room": 7,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.heatingIsStateSliderModeWindow",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 78,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 78,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 78,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWALARM"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 78,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 78,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 78,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWALARM"
                        }
                    ]
                ],
                "label": "Heizung",
                "room": 3,
                "categories": [
                    5
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.heatingIsStateSliderMode",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 79,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 79,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 79,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 79,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 79,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 79,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "label": "Heizung",
                "room": 6,
                "categories": [
                    5
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.heatingIsStateSliderMode",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 80,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 80,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 80,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 80,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 80,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 80,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "label": "Heizung",
                "room": 2,
                "categories": [
                    5
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.heatingIsStateSliderMode",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 81,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 81,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 81,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 81,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 81,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 81,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "label": "Heizung",
                "room": 9,
                "categories": [
                    5
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.heatingIsStateSliderMode",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 82,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 82,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 82,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 82,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 82,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 82,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "label": "Heizung",
                "room": 12,
                "categories": [
                    5
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.heatingIsStateSliderMode",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 83,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 83,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 83,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 83,
                            "channel": 1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 83,
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 83,
                            "channel": 1,
                            "name": "CONTROL_MODE"
                        }
                    ]
                ],
                "label": "Heizung",
                "room": 5,
                "categories": [
                    5
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.windowContact",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 87,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 87,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster Essen",
                "room": 12,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 60,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 60,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster",
                "room": 3,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 61,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 61,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster links",
                "room": 6,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 62,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 62,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster rechts",
                "room": 6,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 63,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 63,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster Bad",
                "room": 2,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 64,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 64,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster links",
                "room": 9,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 65,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 65,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster rechts",
                "room": 9,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 66,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 66,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster Küche links",
                "room": 12,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 67,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 67,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster Küche rechts",
                "room": 12,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 70,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 70,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Fenster Wohnen",
                "room": 12,
                "categories": [
                    3
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.doorContact",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 69,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 69,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Tür",
                "room": 3,
                "categories": [
                    4
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.doorHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 69,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 69,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ]
                ],
                "label": "Tür",
                "room": 3,
                "categories": [
                    4
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.ventilationMode",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 86,
                            "channel": 1,
                            "name": "LEVEL"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 86,
                            "channel": 1,
                            "name": "LEVEL"
                        }
                    ]
                ],
                "label": "Ventilation",
                "room": 8,
                "categories": [
                    2
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.lightingSwitchButtonBrightness",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 94,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ],
                    [
                        {
                            "peer": 94,
                            "channel": 1,
                            "name": "LEVEL_FAST"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 94,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ],
                    [
                        {
                            "peer": 94,
                            "channel": 1,
                            "name": "LEVEL_FAST"
                        }
                    ]
                ],
                "label": "LightComplex",
                "room": 9,
                "categories": [
                    1
                ],
                "role": 101000,
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.lightingSwitchBrightness",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 92,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ],
                    [
                        {
                            "peer": 92,
                            "channel": 1,
                            "name": "LEVEL_FAST"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 92,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ],
                    [
                        {
                            "peer": 92,
                            "channel": 1,
                            "name": "LEVEL_FAST"
                        }
                    ]
                ],
                "label": "LightComplex",
                "room": 12,
                "categories": [
                    1
                ],
                "role": 101000,
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.lightingSwitchBrightness",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 93,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ],
                    [
                        {
                            "peer": 93,
                            "channel": 1,
                            "name": "LEVEL_FAST"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 93,
                            "channel": 1,
                            "name": "STATE"
                        }
                    ],
                    [
                        {
                            "peer": 93,
                            "channel": 1,
                            "name": "LEVEL_FAST"
                        }
                    ]
                ],
                "label": "LightComplex",
                "room": 6,
                "categories": [
                    1
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "254.0x100.OpenWeatherMap",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "REQUEST"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "REQUEST"
                        }
                    ]
                ],
                "label": "OpenWeatherMap",
                "room": 6,
                "categories": [
                    5
                ],
                "metadata": {
                    "l2_action": {
                        "control": 0,
                        "input": 0
                    }
                }
            }
        ],
        [
            "Base.temperature",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE"
                        }
                    ]
                ],
                "label": "Temperatur",
                "room": 3,
                "categories": [
                    4
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ],
        [
            "Base.humidity",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY"
                        }
                    ]
                ],
                "label": "Feuchte",
                "room": 3,
                "categories": [
                    4
                ],
                "metadata": {
                    "l2_only": true
                }
            }
        ]
    ]
}
';
