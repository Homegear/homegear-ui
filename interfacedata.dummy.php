<?php $dummyInterfaceDataJson = '
{
    "devices": {
        "30": {
            "categories": [
                5
            ],
            "clickCount": 11,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer1"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 78,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.199999999999999
                            },
                            "rendering": [],
                            "roles": [
                                201001
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 78,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 10
                            },
                            "rendering": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 78,
                            "properties": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 78,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 78,
                            "properties": [],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingWindow",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "warnung1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": [],
                    "role": 2101248,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Fenster Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Fenster Modus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingWindow",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "warnung1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "warnung1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 30,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "event_hooks": [
                    {
                        "trigger": ["0", "-1", "WINDOWALARM"],
                        "disable": {
                            "1": true,
                            "__dummy__": false
                        }
                    }
                ],
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "201000"
            },
            "role": 2101248,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Heating"
                },
                "title": {
                    "color": "title",
                    "content": "Heating"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderModeWindow",
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "20": {
            "categories": [
                2
            ],
            "clickCount": 2,
            "databaseId": 20,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Dachfl\u00e4chenfenster",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "600000"
            },
            "role": 0,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Trigger"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowButtonsUpDown",
                    "uniqueUiElementId": "Base.windowButtonsUpDown",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 17,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 17,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 17,
                            "properties": [],
                            "roles": [
                                501001
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 17,
                            "properties": [],
                            "roles": [
                                501002
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "1": {
            "categories": [],
            "clickCount": 1,
            "databaseId": 1,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht SystemVar",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "2": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 2,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 1,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 1,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "3": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 3,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 2,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 2,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "4": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 4,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht Decke",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 3,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 3,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "5": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 5,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht Spiegel",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 4,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 4,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "6": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 6,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 5,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 5,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "7": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 7,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht c",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 6,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 6,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "8": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 8,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht b",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 7,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 7,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "9": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 9,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht d",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 8,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 8,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "10": {
            "categories": [
                7
            ],
            "clickCount": 0,
            "databaseId": 10,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Steckdose",
            "metadata": {
                "l2_only": true,
                "role": "400001"
            },
            "role": 0,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Button"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketButton",
                    "uniqueUiElementId": "Base.socketButton",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 9,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "play"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gedr\u00fcckt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "play"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "losgelassen"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                400001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 9,
                            "properties": [],
                            "roles": [
                                400001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "11": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 11,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 1,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 10,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 10,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1,
                2
            ],
            "rooms": [
                1,
                1
            ]
        },
        "12": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 12,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 11,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 11,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "13": {
            "categories": [
                7
            ],
            "clickCount": 0,
            "databaseId": 13,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Steckdose",
            "metadata": {
                "l2_only": true,
                "role": "400001"
            },
            "role": 0,
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "uniqueUiElementId": "Base.socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 12,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "socket1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "socket1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                400001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 12,
                            "properties": [],
                            "roles": [
                                400001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "14": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 14,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 10,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 13,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 13,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                10
            ]
        },
        "15": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 15,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht Decke",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 5,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 14,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 14,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                5
            ]
        },
        "16": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 16,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht Spiegel",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 5,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 15,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 15,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                5
            ]
        },
        "17": {
            "categories": [
                7
            ],
            "clickCount": 0,
            "databaseId": 17,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Steckdose",
            "metadata": {
                "l2_only": true,
                "role": "400001"
            },
            "role": 0,
            "room": 11,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "uniqueUiElementId": "Base.socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 16,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "socket1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "socket1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                400001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 16,
                            "properties": [],
                            "roles": [
                                400001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                11
            ]
        },
        "18": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "databaseId": 18,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "licht1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Licht Unterschrank",
            "metadata": {
                "l2_only": true,
                "role": "100001"
            },
            "role": 1048577,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 84,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 84,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "19": {
            "categories": [
                7
            ],
            "clickCount": 0,
            "databaseId": 19,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Steckdose",
            "metadata": {
                "l2_only": true,
                "role": "400001"
            },
            "role": 0,
            "room": 4,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Toggle"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "uniqueUiElementId": "Base.socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 91,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "socket1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "socket1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                400001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 91,
                            "properties": [],
                            "roles": [
                                400001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                4
            ]
        },
        "21": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                501001
                            ],
                            "type": "bool",
                            "value": 1
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 18,
                            "properties": [],
                            "value": 2
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                501002
                            ],
                            "type": "bool",
                            "value": 3
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtonsSingleStep",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Button"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtonsSingleStep",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil-stepp2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil-stepp2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil-stepp4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil-stepp4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501002
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                501001
                            ],
                            "type": "bool",
                            "value": 1
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 18,
                            "properties": [],
                            "value": 2
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                501002
                            ],
                            "type": "bool",
                            "value": 1
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                501002
                            ],
                            "type": "bool",
                            "value": 2
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtonsUpDown",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtonsUpDown",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                501001
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                501002
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 18,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPositionSlats",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Blenden"
                        },
                        "title": {
                            "color": "title",
                            "content": "Slats Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPositionSlats",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 18,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingVentilation",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "ventilator"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "L\u00fcftung"
                        },
                        "title": {
                            "color": "title",
                            "content": "Ventilation"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingVentilation",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATION",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "ventilator"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "ventilator"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATION",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingWindalarm",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windalarm1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": [],
                    "role": 4194304,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Alarm"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingWindalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "windalarm1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "windalarm1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 21,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "rolladen1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "rolladen1": {
                    "color": "icon",
                    "name": "rolladen1"
                }
            },
            "label": "Rollladen Windalarm",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "501000"
            },
            "role": 5246976,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Shading"
                },
                "title": {
                    "color": "title",
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsButtonsSingleStepButtonsUpDownPositionPositionSlatsVentilationWindalarm",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "22": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "MOVE",
                            "peer": 19,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "name": "STEP",
                            "peer": 19,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "name": "MOVE",
                            "peer": 19,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "MOVE",
                            "peer": 19,
                            "properties": [],
                            "value": false
                        },
                        {
                            "channel": 1,
                            "name": "STEP",
                            "peer": 19,
                            "properties": [],
                            "value": false
                        },
                        {
                            "channel": 1,
                            "name": "MOVE",
                            "peer": 19,
                            "properties": [],
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 19,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 19,
                            "properties": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPositionSlats",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Blenden"
                        },
                        "title": {
                            "color": "title",
                            "content": "Slats Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPositionSlats",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 19,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 19,
                            "properties": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 22,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "rolladen1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "rolladen1": {
                    "color": "icon",
                    "name": "rolladen1"
                }
            },
            "label": "Rollladen KNX",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "501000"
            },
            "role": 0,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionPositionSlats",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "23": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "windowButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "switches"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "600000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.windowButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 20,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                600001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 20,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 20,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                600002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                600001
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 20,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                600002
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "windowPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "fenster1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "600000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.windowPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 20,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                600004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                600004
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 23,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "fenster1": {
                    "color": "icon",
                    "name": "fenster1"
                },
                "l2": {
                    "color": "icon",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenstermotor",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "600000"
            },
            "role": 6291456,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Shading"
                },
                "title": {
                    "color": "title",
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.windowButtonsPosition",
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "24": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 21,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 21,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 21,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 21,
                            "properties": [],
                            "roles": [
                                501001
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 21,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 21,
                            "properties": [],
                            "roles": [
                                501002
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 21,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 21,
                            "properties": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingVentilation",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "ventilator"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "L\u00fcftung"
                        },
                        "title": {
                            "color": "title",
                            "content": "Ventilation"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingVentilation",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATION",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "ventilator"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "ventilator"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATION",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingWindalarm",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windalarm1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": [],
                    "role": 4194304,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Alarm"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingWindalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "windalarm1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "windalarm1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 24,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "rolladen1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "rolladen1": {
                    "color": "icon",
                    "name": "rolladen1"
                }
            },
            "label": "Rollladen links",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "501000"
            },
            "role": 5246976,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Shading"
                },
                "title": {
                    "color": "title",
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionVentilationWindalarm",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "25": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 22,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 22,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 22,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 22,
                            "properties": [],
                            "roles": [
                                501001
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 22,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 22,
                            "properties": [],
                            "roles": [
                                501002
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 22,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 22,
                            "properties": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingWindalarm",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windalarm1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": [],
                    "role": 4194304,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Alarm"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingWindalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "windalarm1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "windalarm1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 25,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "rolladen1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "rolladen1": {
                    "color": "icon",
                    "name": "rolladen1"
                }
            },
            "label": "Rollladen rechts",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "501000"
            },
            "role": 5246976,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Shading"
                },
                "title": {
                    "color": "title",
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionWindalarm",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "26": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 23,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 23,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 23,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 23,
                            "properties": [],
                            "roles": [
                                501001
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 23,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 23,
                            "properties": [],
                            "roles": [
                                501002
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 23,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 23,
                            "properties": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 26,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "rolladen1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "rolladen1": {
                    "color": "icon",
                    "name": "rolladen1"
                }
            },
            "label": "Rollladen Wohnen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "501000"
            },
            "role": 5246976,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Shading"
                },
                "title": {
                    "color": "title",
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPosition",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "27": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 24,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 24,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 24,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                501002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 24,
                            "properties": [],
                            "roles": [
                                501001
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 24,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 24,
                            "properties": [],
                            "roles": [
                                501002
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 24,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 24,
                            "properties": [],
                            "roles": [
                                501004
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 27,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "rolladen1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "rolladen1": {
                    "color": "icon",
                    "name": "rolladen1"
                }
            },
            "label": "Rollladen Essen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "501000"
            },
            "role": 5246976,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Shading"
                },
                "title": {
                    "color": "title",
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPosition",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "28": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 25,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                502001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 25,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 25,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                502002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 25,
                            "properties": [],
                            "roles": [
                                502001
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 25,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 25,
                            "properties": [],
                            "roles": [
                                502002
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 25,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                502004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 25,
                            "properties": [],
                            "roles": [
                                502004
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 28,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "markiese1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "markiese1": {
                    "color": "icon",
                    "name": "markiese1"
                }
            },
            "label": "Markise Wohnen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "502000"
            },
            "role": 5251072,
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beschattung"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingAwningButtonsPosition",
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "29": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 26,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                502001
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 26,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "schliesen1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 26,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "pfeil4"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                502002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                502001
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 26,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                502002
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "rolladen1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "501000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 26,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                502004
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                502004
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 29,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "markiese1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "markiese1": {
                    "color": "icon",
                    "name": "markiese1"
                }
            },
            "label": "Markise Essen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "502000"
            },
            "role": 5251072,
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beschattung"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingAwningButtonsPosition",
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "31": {
            "categories": [
                5
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer1"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 79,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.600000000000001
                            },
                            "rendering": [],
                            "roles": [
                                201001
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 79,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.5
                            },
                            "rendering": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 79,
                            "properties": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 79,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 79,
                            "properties": [],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 31,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "201000"
            },
            "role": 0,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderMode",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "32": {
            "categories": [
                5
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer1"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 80,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 22.899999999999999
                            },
                            "rendering": [],
                            "roles": [
                                201001
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 80,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 5
                            },
                            "rendering": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 80,
                            "properties": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 80,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 80,
                            "properties": [],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 32,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "201000"
            },
            "role": 0,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderMode",
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "33": {
            "categories": [
                5
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer1"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 81,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 20
                            },
                            "rendering": [],
                            "roles": [
                                201001
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 81,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 25
                            },
                            "rendering": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 81,
                            "properties": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 81,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 81,
                            "properties": [],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 33,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "201000"
            },
            "role": 0,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderMode",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "34": {
            "categories": [
                5
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer1"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 82,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.600000000000001
                            },
                            "rendering": [],
                            "roles": [
                                201001
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 82,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.5
                            },
                            "rendering": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 82,
                            "properties": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 82,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 82,
                            "properties": [],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 34,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "201000"
            },
            "role": 0,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderMode",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "35": {
            "categories": [
                5
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer1"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 83,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 22
                            },
                            "rendering": [],
                            "roles": [
                                201001
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 83,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 8
                            },
                            "rendering": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 83,
                            "properties": [],
                            "roles": [
                                201002
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 83,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 83,
                            "properties": [],
                            "roles": [
                                201003
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 35,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "201000"
            },
            "role": 0,
            "room": 5,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderMode",
            "floors": [
                2
            ],
            "rooms": [
                5
            ]
        },
        "36": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 36,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster Essen",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowContact",
                    "uniqueUiElementId": "Base.windowContact",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 87,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 87,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "37": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 37,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 60,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 60,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "38": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 38,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster links",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 61,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 61,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "39": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 39,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster rechts",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 62,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 62,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "40": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 40,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster Bad",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 63,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 2
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 63,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "41": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 41,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster links",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 64,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 64,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "42": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 42,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster rechts",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 65,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 2
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 65,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "43": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 43,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster K\u00fcche links",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 66,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 2
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 66,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "44": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 44,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster K\u00fcche rechts",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 67,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 2
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 67,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "45": {
            "categories": [
                3
            ],
            "clickCount": 0,
            "databaseId": 45,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "fenster1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Fenster Wohnen",
            "metadata": {
                "l2_only": true,
                "role": "301002"
            },
            "role": 0,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 70,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "fenster1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301002
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 70,
                            "properties": [],
                            "roles": [
                                301002
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "46": {
            "categories": [
                4
            ],
            "clickCount": 0,
            "databaseId": 46,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "door1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "T\u00fcr",
            "metadata": {
                "l2_only": true,
                "role": "301001"
            },
            "role": 0,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "doorContact",
                    "uniqueUiElementId": "Base.doorContact",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "door1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "door1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": [],
                            "roles": [
                                301001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "47": {
            "categories": [
                4
            ],
            "clickCount": 0,
            "databaseId": 47,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "door1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "T\u00fcr",
            "metadata": {
                "l2_only": true,
                "role": "301001"
            },
            "role": 0,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "State"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "doorHandle",
                    "uniqueUiElementId": "Base.doorHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "door1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "door1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "door1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "tilted"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "door1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unknown state"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                301001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": [],
                            "roles": [
                                301001
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "48": {
            "categories": [
                2
            ],
            "clickCount": 0,
            "databaseId": 48,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "ventilator"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Ventilation",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "role": 2101251,
            "room": 8,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Stufe"
                },
                "title": {
                    "color": "title",
                    "content": "Bel\u00fcftung"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "ventilationMode",
                    "uniqueUiElementId": "Base.ventilationMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 4,
                            "minimumValue": 1,
                            "name": "LEVEL",
                            "peer": 86,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Stufe 1"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Stufe 2"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Stufe 3"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "3"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "pfeil2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Stufe 4"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 4,
                            "minimumValue": 1,
                            "name": "LEVEL",
                            "peer": 86,
                            "properties": [],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                8
            ]
        },
        "49": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "lightingSwitch",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "licht1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "100001"
                    },
                    "role": 1048577,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Toggle"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 94,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 94,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "lightingButton",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "licht1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Button"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingButton",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 94,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "pushed"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "unpushed"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 94,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "lightingBrightness",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "licht1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "100001"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Helligkeit"
                        },
                        "title": {
                            "color": "title",
                            "content": "Helligkeit"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingBrightness",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 94,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "roles": [
                                101000
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 94,
                            "properties": [],
                            "roles": [
                                101000
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 49,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "licht3"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "licht3": {
                    "color": "icon",
                    "name": "licht3"
                }
            },
            "label": "LightComplex",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "100001"
            },
            "role": 1048577,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Lighting"
                },
                "title": {
                    "color": "title",
                    "content": "Lighting"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitchButtonBrightness",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "50": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "lightingSwitch",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "licht1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "100001"
                    },
                    "role": 1048577,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Toggle"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 92,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 92,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "lightingBrightness",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "licht1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "100001"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Helligkeit"
                        },
                        "title": {
                            "color": "title",
                            "content": "Helligkeit"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingBrightness",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 92,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "roles": [
                                101000
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 92,
                            "properties": [],
                            "roles": [
                                101000
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 50,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "licht3"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "licht3": {
                    "color": "icon",
                    "name": "licht3"
                }
            },
            "label": "LightComplex",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "100001"
            },
            "role": 0,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Lighting"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitchBrightness",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "51": {
            "categories": [
                1
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "lightingSwitch",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "licht1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "100001"
                    },
                    "role": 1048577,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Toggle"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 93,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "licht1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 93,
                            "properties": [],
                            "roles": [
                                100001
                            ],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "lightingBrightness",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "licht1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "100001"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Helligkeit"
                        },
                        "title": {
                            "color": "title",
                            "content": "Helligkeit"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingBrightness",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 93,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "roles": [
                                101000
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 93,
                            "properties": [],
                            "roles": [
                                101000
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 51,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "licht3"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "licht3": {
                    "color": "icon",
                    "name": "licht3"
                }
            },
            "label": "LightComplex",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "100001"
            },
            "role": 0,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "State"
                },
                "title": {
                    "color": "title",
                    "content": "Lighting"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitchBrightness",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "52": {
            "categories": [
                5
            ],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "temperature",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermomenter1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer1"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Temp:"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.temperature",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.210000000000001
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "humidity",
                    "icons": {
                        "humidity": {
                            "color": "inactive",
                            "name": "humidity1"
                        },
                        "l2": {
                            "color": "inactive",
                            "name": "humidity1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "201000"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Feuchte"
                        },
                        "title": {
                            "color": "title",
                            "content": "Luftfeuchtigkeit"
                        }
                    },
                    "uniqueUiElementId": "Base.humidity",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "HUMIDITY",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 51.509999999999998
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 2
                    },
                    "control": "socketButton",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "socket1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "400001"
                    },
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Button"
                        }
                    },
                    "uniqueUiElementId": "Base.socketButton",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "REQUEST",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "play"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gedr\u00fcckt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "play"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "losgelassen"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "REQUEST",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 52,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "weather1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "weather": {
                    "color": "inactive",
                    "name": "weather1"
                }
            },
            "label": "OpenWeatherMap",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "role": 0,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "OpenWeatherMap"
                },
                "title": {
                    "color": "title",
                    "content": "OpenWeatherMap"
                }
            },
            "uniqueUiElementId": "254.0x100.OpenWeatherMap",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "53": {
            "categories": [
                4
            ],
            "clickCount": 0,
            "databaseId": 53,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermomenter1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer1"
                }
            },
            "label": "Temperatur",
            "metadata": {
                "l2_only": true,
                "role": "201000"
            },
            "role": 0,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Temp:"
                },
                "title": {
                    "color": "title",
                    "content": "Temperatur"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "temperature",
                    "uniqueUiElementId": "Base.temperature",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.210000000000001
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "54": {
            "categories": [
                4
            ],
            "clickCount": 0,
            "databaseId": 54,
            "icons": {
                "humidity": {
                    "color": "inactive",
                    "name": "humidity1"
                },
                "l2": {
                    "color": "inactive",
                    "name": "humidity1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "pfeil3"
                }
            },
            "label": "Feuchte",
            "metadata": {
                "l2_only": true,
                "role": "201000"
            },
            "role": 0,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Feuchte"
                },
                "title": {
                    "color": "title",
                    "content": "Luftfeuchtigkeit"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "humidity",
                    "uniqueUiElementId": "Base.humidity",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "HUMIDITY",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 51.509999999999998
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        }
    },
    "floors": {
        "1": {
            "name": "Erdgeschoss",
            "rooms": [
                1,
                2,
                9,
                12
            ]
        },
        "2": {
            "name": "Obergeschoss",
            "rooms": [
                5,
                6,
                1
            ]
        },
        "3": {
            "name": "Dachgeschoss",
            "rooms": [
                3,
                7
            ]
        },
        "4": {
            "name": "Untergeschoss",
            "rooms": [
                4,
                8,
                10,
                11
            ]
        }
    },
    "rooms": {
        "1": {
            "devices": [
                11
            ],
            "floors": [
                1,
                2
            ],
            "name": "Abstellraum",
            "icon": "clean1"
        },
        "2": {
            "devices": [
                4,
                5,
                23,
                32,
                40
            ],
            "floors": [
                1
            ],
            "name": "Bad",
            "icon": "wc2"
        },
        "3": {
            "devices": [
                30,
                20,
                1,
                2,
                37,
                46,
                47,
                53,
                54
            ],
            "floors": [
                3
            ],
            "name": "Diele",
            "icon": "floor1"
        },
        "4": {
            "devices": [
                19
            ],
            "floors": [
                4
            ],
            "name": "Garage",
            "icon": "garage1"
        },
        "5": {
            "devices": [
                15,
                16,
                35
            ],
            "floors": [
                2
            ],
            "name": "G\u00e4ste WC",
            "icon": "wc1"
        },
        "6": {
            "devices": [
                3,
                21,
                22,
                31,
                38,
                39,
                51,
                52
            ],
            "floors": [
                2
            ],
            "name": "Kind",
            "icon": "bett1"
        },
        "7": {
            "devices": [
                12,
                13,
                28,
                29
            ],
            "floors": [
                3
            ],
            "name": "Loggia",
            "icon": "balcony1"
        },
        "8": {
            "devices": [
                48
            ],
            "floors": [
                4
            ],
            "name": "L\u00fcftung",
            "icon": "ventilator"
        },
        "9": {
            "devices": [
                6,
                24,
                25,
                33,
                41,
                42,
                49
            ],
            "floors": [
                1
            ],
            "name": "Schlafen",
            "icon": "bett1"
        },
        "10": {
            "devices": [
                14
            ],
            "floors": [
                4
            ],
            "name": "Technikraum",
            "icon": "tools"
        },
        "11": {
            "devices": [
                17
            ],
            "floors": [
                4
            ],
            "name": "Waschraum",
            "icon": "waschmaschiene1"
        },
        "12": {
            "devices": [
                7,
                8,
                9,
                10,
                18,
                26,
                27,
                34,
                36,
                43,
                44,
                45,
                50
            ],
            "floors": [
                1
            ],
            "name": "Wohnbereich",
            "icon": "sofa1"
        }
    },
    "categories": {
        "1": {
            "name": "Beleuchtung",
            "interface": {
                "countInputs": [
                    {
                        "variableInputIndex": 0
                    }
                ],
                "icon": "licht1",
                "invokeOutputs": [
                    {
                        "buttonText": "Zentral aus",
                        "value": true,
                        "variableOutputParamset": "LIGHTING_ALL_OFF"
                    }
                ]
            }
        },
        "2": {
            "name": "Beschattung",
            "interface": {
                "countInputs": [
                    {
                        "variableInputIndex": 0
                    }
                ],
                "icon": "rolladen1",
                "invokeOutputs": [
                    {
                        "buttonText": "Zentral auf",
                        "value": true,
                        "variableOutputParamset": "BLINDS_ALL_UP"
                    },
                    {
                        "buttonText": "Zentral ab",
                        "value": true,
                        "variableOutputParamset": "BLINDS_ALL_DOWN"
                    }
                ]
            }
        },
        "3": {
            "name": "Fenster",
            "interface": {
                "countInputs": [
                    {
                        "variableInputIndex": 0
                    }
                ],
                "icon": "fenster1"
            }
        },
        "4": {
            "name": "T\u00fcren",
            "interface": {
                "countInputs": [
                    {
                        "variableInputIndex": 0
                    }
                ],
                "icon": "sicherheit1"
            }
        },
        "5": {
            "name": "Heizung",
            "interface": {
                "countInputs": [
                    {
                        "variableInputIndex": 0
                    }
                ],
                "icon": "heater",
                "invokeOutputs": [
                    {
                        "buttonText": "Zentral Komfort",
                        "value": true,
                        "variableOutputParamset": "HEATING_ALL_KOMFORT"
                    },
                    {
                        "buttonText": "Zentral Frostschutz",
                        "value": true,
                        "variableOutputParamset": "HEATING_ALL_MINIMAL"
                    },
                    {
                        "buttonText": "Zentral Spar",
                        "value": true,
                        "variableOutputParamset": "HEATING_ALL_SPAR"
                    }
                ]
            }
        },
        "6": {
            "name": "L\u00fcftung",
            "interface": {
                "countInputs": [
                    {
                        "variableInputIndex": 0
                    }
                ],
                "icon": "ventilator"
            }
        },
        "7": {
            "name": "Steckdosen",
            "interface": {
                "countInputs": [
                    {
                        "variableInputIndex": 0
                    }
                ],
                "icon": "socket1",
                "invokeOutputs": [
                    {
                        "buttonText": "Zentral aus",
                        "value": true,
                        "variableOutputParamset": "SOCKET_ALL_OFF"
                    }
                ]
            }
        }
    },
    "roles": {
        "100001": {
            "name": "Licht - Status",
            "texts": [
                "aus",
                "an"
            ],
            "icon": "licht1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral aus",
                    "value": 0
                }
            ],
            "simpleCreationInfo": {
                "element": "Base.lightingSwitch",
                "metadata": {
                    "l2_only": true
                },
                "roleIdsIn": [
                    [
                        100001
                    ]
                ],
                "roleIdsOut": [
                    [
                        100001
                    ]
                ]
            },
            "aggregated": {
                "0": 15,
                "1": 3,
                "variableCount": 18
            },
            "varInRole": {
                "0": {
                    "-1": [
                        "LIGHT"
                    ]
                },
                "1": {
                    "1": [
                        "STATE"
                    ]
                },
                "10": {
                    "1": [
                        "STATE"
                    ]
                },
                "11": {
                    "1": [
                        "STATE"
                    ]
                },
                "13": {
                    "1": [
                        "STATE"
                    ]
                },
                "14": {
                    "1": [
                        "STATE"
                    ]
                },
                "15": {
                    "1": [
                        "STATE"
                    ]
                },
                "2": {
                    "1": [
                        "STATE"
                    ]
                },
                "3": {
                    "1": [
                        "STATE"
                    ]
                },
                "4": {
                    "1": [
                        "STATE"
                    ]
                },
                "5": {
                    "1": [
                        "STATE"
                    ]
                },
                "6": {
                    "1": [
                        "STATE"
                    ]
                },
                "7": {
                    "1": [
                        "STATE"
                    ]
                },
                "8": {
                    "1": [
                        "STATE"
                    ]
                },
                "84": {
                    "1": [
                        "STATE"
                    ]
                },
                "92": {
                    "1": [
                        "STATE"
                    ]
                },
                "93": {
                    "1": [
                        "STATE"
                    ]
                },
                "94": {
                    "1": [
                        "STATE"
                    ]
                }
            }
        },
        "101000": {
            "name": "Licht - Helligkeit",
            "texts": {
                "0": "aus",
                "100": "an"
            },
            "icon": "licht3",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral aus",
                    "value": 0
                }
            ],
            "simpleCreationInfo": {
                "element": "Base.lightingBrightness",
                "metadata": {
                    "l2_only": true
                },
                "roleIdsIn": [
                    [
                        101000
                    ]
                ],
                "roleIdsOut": [
                    [
                        101000
                    ]
                ]
            },
            "aggregated": {
                "0": 3,
                "variableCount": 3
            },
            "varInRole": {
                "92": {
                    "1": [
                        "LEVEL_FAST"
                    ]
                },
                "93": {
                    "1": [
                        "LEVEL_FAST"
                    ]
                },
                "94": {
                    "1": [
                        "LEVEL_FAST"
                    ]
                }
            }
        },
        "201000": {
            "name": "Heizung",
            "texts": [
                "Frostschutz",
                "Komfort",
                "Spar"
            ],
            "icon": "heater",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral Frostschutz",
                    "roleId": 201003,
                    "value": 0
                },
                {
                    "buttonText": "Zentral Komfort",
                    "roleId": 201003,
                    "value": 1
                },
                {
                    "buttonText": "Zentral Spar",
                    "roleId": 201003,
                    "value": 2
                }
            ],
            "rolesInclude": [
                {
                    "aggregationType": 2,
                    "roles": [
                        201003
                    ]
                }
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "201001": {
            "name": "Heizung - Ist-Temperatur",
            "texts": [
                "Ist"
            ],
            "aggregated": {
                "20": 1,
                "21": 1,
                "22": 3,
                "23": 1,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": [
                        "TEMPERATURE"
                    ]
                },
                "79": {
                    "1": [
                        "TEMPERATURE"
                    ]
                },
                "80": {
                    "1": [
                        "TEMPERATURE"
                    ]
                },
                "81": {
                    "1": [
                        "TEMPERATURE"
                    ]
                },
                "82": {
                    "1": [
                        "TEMPERATURE"
                    ]
                },
                "83": {
                    "1": [
                        "TEMPERATURE"
                    ]
                }
            }
        },
        "201002": {
            "name": "Heizung - Soll-Temperatur",
            "texts": [
                "Soll"
            ],
            "simpleCreationInfo": {
                "element": "Base.heatingIsStateSliderMode",
                "metadata": {
                    "l2_only": true
                },
                "roleIdsIn": [
                    [
                        201001
                    ],
                    [
                        201002
                    ],
                    [
                        201003
                    ]
                ],
                "roleIdsOut": [
                    [
                        201001
                    ],
                    [
                        201002
                    ],
                    [
                        201003
                    ]
                ]
            },
            "aggregated": {
                "10": 1,
                "22": 2,
                "25": 1,
                "5": 1,
                "8": 1,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": [
                        "SETPOINT_TEMPERATURE"
                    ]
                },
                "79": {
                    "1": [
                        "SETPOINT_TEMPERATURE"
                    ]
                },
                "80": {
                    "1": [
                        "SETPOINT_TEMPERATURE"
                    ]
                },
                "81": {
                    "1": [
                        "SETPOINT_TEMPERATURE"
                    ]
                },
                "82": {
                    "1": [
                        "SETPOINT_TEMPERATURE"
                    ]
                },
                "83": {
                    "1": [
                        "SETPOINT_TEMPERATURE"
                    ]
                }
            }
        },
        "201003": {
            "name": "Heizung - Temperaturmodus",
            "texts": [
                "Frostschutz",
                "Komfort",
                "Spar"
            ],
            "aggregated": {
                "0": 11,
                "1": 1,
                "variableCount": 12
            },
            "varInRole": {
                "78": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE",
                        "CONTROL_MODE"
                    ]
                },
                "79": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE",
                        "CONTROL_MODE"
                    ]
                },
                "80": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE",
                        "CONTROL_MODE"
                    ]
                },
                "81": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE",
                        "CONTROL_MODE"
                    ]
                },
                "82": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE",
                        "CONTROL_MODE"
                    ]
                },
                "83": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE",
                        "CONTROL_MODE"
                    ]
                }
            }
        },
        "201004": {
            "name": "Heizung - Komforttemperatur",
            "texts": [
                "Komfort"
            ],
            "aggregated": {
                "21": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE"
                    ]
                },
                "79": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE"
                    ]
                },
                "80": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE"
                    ]
                },
                "81": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE"
                    ]
                },
                "82": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE"
                    ]
                },
                "83": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE"
                    ]
                }
            }
        },
        "201005": {
            "name": "Heizung - Absenktemperatur",
            "texts": [
                "Spar"
            ],
            "aggregated": {
                "18": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE"
                    ]
                },
                "79": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE"
                    ]
                },
                "80": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE"
                    ]
                },
                "81": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE"
                    ]
                },
                "82": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE"
                    ]
                },
                "83": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE"
                    ]
                }
            }
        },
        "201006": {
            "name": "Heizung - Frostschutztemperatur",
            "texts": [
                "Frostschutz"
            ],
            "aggregated": {
                "5": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE"
                    ]
                },
                "79": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE"
                    ]
                },
                "80": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE"
                    ]
                },
                "81": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE"
                    ]
                },
                "82": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE"
                    ]
                },
                "83": {
                    "1": [
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE"
                    ]
                }
            }
        },
        "301001": {
            "name": "Sicherheit - T\u00fcrzustand",
            "texts": [
                "geschlossen",
                "offen"
            ],
            "icon": "door2",
            "aggregated": {
                "0": 1,
                "variableCount": 1
            },
            "varInRole": {
                "69": {
                    "1": [
                        "STATE"
                    ]
                }
            }
        },
        "301002": {
            "name": "Sicherheit - Fensterzustand",
            "texts": [
                "geschlossen",
                "ge\u00f6ffnet",
                "gekippt"
            ],
            "icon": "fenster1",
            "simpleCreationInfo": {
                "element": "Base.windowContact",
                "metadata": {
                    "l2_only": true
                },
                "roleIdsIn": [
                    [
                        301002
                    ]
                ],
                "roleIdsOut": [
                    [
                        301002
                    ]
                ]
            },
            "aggregated": {
                "0": 5,
                "1": 1,
                "2": 4,
                "variableCount": 10
            },
            "varInRole": {
                "60": {
                    "1": [
                        "STATE"
                    ]
                },
                "61": {
                    "1": [
                        "STATE"
                    ]
                },
                "62": {
                    "1": [
                        "STATE"
                    ]
                },
                "63": {
                    "1": [
                        "STATE"
                    ]
                },
                "64": {
                    "1": [
                        "STATE"
                    ]
                },
                "65": {
                    "1": [
                        "STATE"
                    ]
                },
                "66": {
                    "1": [
                        "STATE"
                    ]
                },
                "67": {
                    "1": [
                        "STATE"
                    ]
                },
                "70": {
                    "1": [
                        "STATE"
                    ]
                },
                "87": {
                    "1": [
                        "STATE"
                    ]
                }
            }
        },
        "301003": {
            "name": "Sicherheit - T\u00fcrschloss",
            "texts": [
                "verriegelt",
                "unverriegelt"
            ],
            "icon": "sicherheit1",
            "simpleCreationInfo": {
                "element": "Base.doorLock",
                "metadata": {
                    "l2_only": true
                },
                "roleIdsIn": [
                    [
                        301003
                    ]
                ],
                "roleIdsOut": [
                    [
                        301003
                    ]
                ]
            },
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "400001": {
            "name": "Steckdose - Zustand",
            "texts": [
                "aus",
                "an"
            ],
            "icon": "socket1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral aus",
                    "value": 0
                }
            ],
            "simpleCreationInfo": {
                "element": "Base.socketSwitch",
                "metadata": {
                    "l2_only": true
                },
                "roleIdsIn": [
                    [
                        400001
                    ]
                ],
                "roleIdsOut": [
                    [
                        400001
                    ]
                ]
            },
            "aggregated": {
                "0": 2,
                "1": 2,
                "variableCount": 4
            },
            "varInRole": {
                "12": {
                    "1": [
                        "STATE"
                    ]
                },
                "16": {
                    "1": [
                        "STATE"
                    ]
                },
                "9": {
                    "1": [
                        "STATE"
                    ]
                },
                "91": {
                    "1": [
                        "STATE"
                    ]
                }
            }
        },
        "501000": {
            "name": "Beschattung - Rollladen",
            "texts": {
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
            },
            "icon": "rolladen1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral auf",
                    "roleId": 501001,
                    "value": false
                },
                {
                    "buttonText": "Zentral ab",
                    "roleId": 501002,
                    "value": true
                }
            ],
            "rolesInclude": [
                {
                    "aggregationType": 1,
                    "roles": [
                        501001,
                        502002
                    ]
                }
            ],
            "simpleCreationInfo": [
                {
                    "element": "Base.shadingButtonsPositionSlats",
                    "metadata": {
                        "l2_action": {
                            "control": 0,
                            "input": 0
                        }
                    },
                    "roleIdsIn": [
                        [
                            501001,
                            501003,
                            501002
                        ],
                        [
                            501004
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            501001,
                            501003,
                            501002
                        ],
                        [
                            501004
                        ]
                    ]
                },
                {
                    "element": "Base.shadingButtonsUpDown",
                    "metadata": {
                        "l2_action": {
                            "control": 0,
                            "input": 0
                        }
                    },
                    "roleIdsIn": [
                        [
                            501001,
                            501002
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            501001,
                            501002
                        ]
                    ]
                }
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "501001": {
            "name": "Beschattung - hoch",
            "texts": [
                "Hoch"
            ],
            "aggregated": {
                "0": 6,
                "1": 1,
                "variableCount": 7
            },
            "varInRole": {
                "17": {
                    "1": [
                        "UP"
                    ]
                },
                "18": {
                    "1": [
                        "UP"
                    ]
                },
                "19": {
                    "1": [
                        "UP"
                    ]
                },
                "21": {
                    "1": [
                        "UP"
                    ]
                },
                "22": {
                    "1": [
                        "UP"
                    ]
                },
                "23": {
                    "1": [
                        "UP"
                    ]
                },
                "24": {
                    "1": [
                        "UP"
                    ]
                }
            }
        },
        "501002": {
            "name": "Beschattung - runter",
            "texts": [
                "Runter"
            ],
            "aggregated": {
                "1": 7,
                "variableCount": 7
            },
            "varInRole": {
                "17": {
                    "1": [
                        "DOWN"
                    ]
                },
                "18": {
                    "1": [
                        "DOWN"
                    ]
                },
                "19": {
                    "1": [
                        "DOWN"
                    ]
                },
                "21": {
                    "1": [
                        "DOWN"
                    ]
                },
                "22": {
                    "1": [
                        "DOWN"
                    ]
                },
                "23": {
                    "1": [
                        "DOWN"
                    ]
                },
                "24": {
                    "1": [
                        "DOWN"
                    ]
                }
            }
        },
        "501003": {
            "name": "Beschattung - Stopp",
            "texts": [
                "Stopp"
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "501004": {
            "name": "Beschattung - Position",
            "aggregated": {
                "0": 1,
                "100": 6,
                "variableCount": 7
            },
            "varInRole": {
                "17": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                },
                "18": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                },
                "19": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                },
                "21": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                },
                "22": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                },
                "23": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                },
                "24": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                }
            }
        },
        "502000": {
            "name": "Beschattung - Markise",
            "texts": {
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
            },
            "icon": "markiese1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral auf",
                    "roleId": 502001,
                    "value": false
                },
                {
                    "buttonText": "Zentral ab",
                    "roleId": 502002,
                    "value": true
                }
            ],
            "rolesInclude": [
                {
                    "aggregationType": 1,
                    "roles": [
                        502004
                    ]
                }
            ],
            "simpleCreationInfo": [
                {
                    "element": "Base.shadingButtonsPositionSlats",
                    "metadata": {
                        "l2_action": {
                            "control": 0,
                            "input": 0
                        }
                    },
                    "roleIdsIn": [
                        [
                            502001,
                            502003,
                            502002
                        ],
                        [
                            502004
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            502001,
                            502003,
                            502002
                        ],
                        [
                            502004
                        ]
                    ]
                },
                {
                    "element": "Base.shadingButtonsUpDown",
                    "metadata": {
                        "l2_action": {
                            "control": 0,
                            "input": 0
                        }
                    },
                    "roleIdsIn": [
                        [
                            502001
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            502001
                        ]
                    ]
                }
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "502001": {
            "name": "Beschattung - Markise - einfahren",
            "texts": [
                "einfahren"
            ],
            "aggregated": {
                "0": 2,
                "variableCount": 2
            },
            "varInRole": {
                "25": {
                    "1": [
                        "UP"
                    ]
                },
                "26": {
                    "1": [
                        "UP"
                    ]
                }
            }
        },
        "502002": {
            "name": "Beschattung - Markise - ausfahren",
            "texts": [
                "ausfahren"
            ],
            "aggregated": {
                "1": 2,
                "variableCount": 2
            },
            "varInRole": {
                "25": {
                    "1": [
                        "DOWN"
                    ]
                },
                "26": {
                    "1": [
                        "DOWN"
                    ]
                }
            }
        },
        "502003": {
            "name": "Beschattung - Markise - Stopp",
            "texts": [
                "Stopp"
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "502004": {
            "name": "Beschattung - Markise - Position",
            "aggregated": {
                "100": 2,
                "variableCount": 2
            },
            "varInRole": {
                "25": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                },
                "26": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                }
            }
        },
        "600000": {
            "name": "Fenster",
            "texts": {
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
            },
            "icon": "fenster1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral auf",
                    "roleId": 600001,
                    "value": false
                },
                {
                    "buttonText": "Zentral ab",
                    "roleId": 600002,
                    "value": true
                }
            ],
            "rolesInclude": [
                {
                    "aggregationType": 1,
                    "roles": [
                        600004
                    ]
                }
            ],
            "simpleCreationInfo": [
                {
                    "element": "Base.windowButtonsUpDown",
                    "metadata": {
                        "l2_action": {
                            "control": 0,
                            "input": 0
                        }
                    },
                    "roleIdsIn": [
                        [
                            600001,
                            600002
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            600001,
                            600002
                        ]
                    ]
                }
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "600001": {
            "name": "Fenster - hoch",
            "texts": [
                "Hoch"
            ],
            "aggregated": {
                "0": 1,
                "variableCount": 1
            },
            "varInRole": {
                "20": {
                    "1": [
                        "UP"
                    ]
                }
            }
        },
        "600002": {
            "name": "Fenster - runter",
            "texts": [
                "Runter"
            ],
            "aggregated": {
                "1": 1,
                "variableCount": 1
            },
            "varInRole": {
                "20": {
                    "1": [
                        "DOWN"
                    ]
                }
            }
        },
        "600003": {
            "name": "Fenster - Stopp",
            "texts": [
                "Stopp"
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "600004": {
            "name": "Fenster - Position",
            "aggregated": {
                "100": 1,
                "variableCount": 1
            },
            "varInRole": {
                "20": {
                    "1": [
                        "CURRENT_POSITION"
                    ]
                }
            }
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
                "mainmenu": "settings",
                "level": "2",
                "category": "user",
                "name": "settings.user",
                "content": "true"
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
                "name": "settings.user.manage",
                "content": "edit"
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
                "name": "settings.about",
                "content": "license"
            },
            "description": "settings.about.description"
        }
    ],
    "themes": [
        {
            "id": "0",
            "name": "highlight",
            "colors": {
                "Orange": "#e3a104",
                "Pink": "#c72c8b",
                "Blau": "#1798db",
                "Gr\u00fcn": "#4da829",
                "Rot": "#b82c25",
                "T\u00fcrkis": "#29ab9a",
                "Violette": "#8e44ad",
                "Gelb": "#e2e437"
            }
        },
        {
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
        {
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
        {
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
        {
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
        {
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
    ],
    "options": {
        "twofaEnabled": true,
        "userHasTwofaRegistrations": false,
        "firstBreadcrumb": "Haus",
        "firstBreadcrumbId": "house",
        "breadcrumbs_array": [
            "<div class=\"breadcrumbsJump\" onclick=\"main({name:interfaceData.options.firstBreadcrumb,content:interfaceData.options.firstBreadcrumbId});\">Haus<\/div>"
        ],
        "breadcrumbs_id_array": [
            "house"
        ],
        "theme": "dark",
        "highlight": "#00a2fb",
        "language": "de-DE",
        "languageChangeable": true,
        "twofaChangeable": true,
        "showFloor": true,
        "consoleLog": true,
        "interfacePath": "\/",
        "websocket_url": "location.hostname",
        "websocket_port": "location.port",
        "websocket_security_ssl": true
    },
    "i18n": {
        "login": {
            "username": "Benutzername",
            "password": "Kennwort",
            "signin": "Anmelden",
            "waitingFor2ndFactor": "Warte auf zweiten Faktor...",
            "error": {
                "wrongpassword": "Unbekannter Benutzer oder falsches Kennwort.",
                "noaccess": "Keine Zugriffsberechtigung.",
                "twofaError": "Fehler beim zweiten Faktor",
                "browserNotSupported": "Browser wird nicht unterst\u00fctzt."
            }
        },
        "house": "Haus",
        "house.tab.rooms": "R\u00e4ume",
        "house.tab.devices": "Ger\u00e4te",
        "widgets": "Widgets",
        "settings": "Einstellungen",
        "settings.user": "Benutzer",
        "settings.user.description": "Verwalten",
        "settings.user.manage": "Benutzereinstellungen",
        "settings.user.manage.description": "Auth, Sprache, Theme, Farben",
        "settings.user.manage.twofa": "Zweifaktorauthentifizierung",
        "settings.user.manage.registerTwofa": "WebAuthn-Ger\u00e4t registrieren",
        "settings.user.manage.unregisterTwofa": "WebAuthn-Ger\u00e4t entfernen",
        "settings.user.manage.twofaRegistered": "WebAuthn ist aktiviert",
        "settings.user.manage.browserNotSupported": "Browser wird nicht unterst\u00fctzt.",
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
        "logoff": "Abmelden",
        "default": {
            "login": {
                "username": "Username",
                "password": "Password",
                "signin": "Login",
                "waitingFor2ndFactor": "Waiting for second factor...",
                "error": {
                    "wrongpassword": "Wrong username or password",
                    "noaccess": "No access permission",
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
        "languages": {
            "en-US": {
                "name": "English"
            },
            "de-DE": {
                "name": "Deutsch"
            }
        }
    },
    "map_invoke": {
        "78": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            201001
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 30,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            201002
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 30,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            201003
                        ]
                    }
                ]
            }
        },
        "0": {
            "-1": {
                "WINDOWALARM": [
                    {
                        "databaseId": 30,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    }
                ],
                "LIGHT": [
                    {
                        "databaseId": 1,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ],
                "VENTILATION": [
                    {
                        "databaseId": 21,
                        "control": 5,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 24,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WINDALARM": [
                    {
                        "databaseId": 21,
                        "control": 6,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 24,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 25,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ],
                "TEMPERATURE": [
                    {
                        "databaseId": 52,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 53,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "HUMIDITY": [
                    {
                        "databaseId": 52,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 54,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "REQUEST": [
                    {
                        "databaseId": 52,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ]
            }
        },
        "17": {
            "1": {
                "UP": [
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            501001
                        ]
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            501002
                        ]
                    }
                ]
            }
        },
        "1": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 2,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "2": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 3,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "3": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 4,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "4": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 5,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "5": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 6,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "6": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 7,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "7": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 8,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "8": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 9,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "9": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 10,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            400001
                        ]
                    }
                ]
            }
        },
        "10": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 11,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "11": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 12,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "12": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 13,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            400001
                        ]
                    }
                ]
            }
        },
        "13": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 14,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "14": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 15,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "15": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 16,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "16": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 17,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            400001
                        ]
                    }
                ]
            }
        },
        "84": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 18,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ]
            }
        },
        "91": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 19,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            400001
                        ]
                    }
                ]
            }
        },
        "18": {
            "1": {
                "UP": [
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            501001
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            501001
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            501001
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 21,
                        "control": 1,
                        "input": 1,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            501002
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 1,
                        "input": 2,
                        "roles": [
                            501002
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 1,
                        "input": 3,
                        "roles": [
                            501002
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 2,
                        "input": 1,
                        "roles": [
                            501002
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 21,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            501004
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 4,
                        "input": 0,
                        "roles": [
                            501004
                        ]
                    }
                ]
            }
        },
        "19": {
            "1": {
                "MOVE": [
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "STEP": [
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 22,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            501004
                        ]
                    },
                    {
                        "databaseId": 22,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            501004
                        ]
                    }
                ]
            }
        },
        "20": {
            "1": {
                "UP": [
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            600001
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            600002
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 23,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            600004
                        ]
                    }
                ]
            }
        },
        "21": {
            "1": {
                "UP": [
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            501001
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            501002
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 24,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            501004
                        ]
                    }
                ]
            }
        },
        "22": {
            "1": {
                "UP": [
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            501001
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            501002
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 25,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            501004
                        ]
                    }
                ]
            }
        },
        "23": {
            "1": {
                "UP": [
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            501001
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            501002
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 26,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            501004
                        ]
                    }
                ]
            }
        },
        "24": {
            "1": {
                "UP": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            501001
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            501002
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 27,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            501004
                        ]
                    }
                ]
            }
        },
        "25": {
            "1": {
                "UP": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            502001
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            502002
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 28,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            502004
                        ]
                    }
                ]
            }
        },
        "26": {
            "1": {
                "UP": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            502001
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            502002
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 29,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            502004
                        ]
                    }
                ]
            }
        },
        "79": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            201001
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 31,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            201002
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 31,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            201003
                        ]
                    }
                ]
            }
        },
        "80": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 32,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            201001
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 32,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            201002
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 32,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            201003
                        ]
                    }
                ]
            }
        },
        "81": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 33,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            201001
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 33,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            201002
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 33,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            201003
                        ]
                    }
                ]
            }
        },
        "82": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 34,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            201001
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 34,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            201002
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 34,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            201003
                        ]
                    }
                ]
            }
        },
        "83": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 35,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            201001
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 35,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            201002
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 35,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            201003
                        ]
                    }
                ]
            }
        },
        "87": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 36,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "60": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 37,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "61": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 38,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "62": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 39,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "63": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 40,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "64": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 41,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "65": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 42,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "66": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 43,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "67": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 44,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "70": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 45,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301002
                        ]
                    }
                ]
            }
        },
        "69": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 46,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301001
                        ]
                    },
                    {
                        "databaseId": 47,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            301001
                        ]
                    }
                ]
            }
        },
        "86": {
            "1": {
                "LEVEL": [
                    {
                        "databaseId": 48,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ]
            }
        },
        "94": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 49,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    },
                    {
                        "databaseId": 49,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ],
                "LEVEL_FAST": [
                    {
                        "databaseId": 49,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            101000
                        ]
                    }
                ]
            }
        },
        "92": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 50,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ],
                "LEVEL_FAST": [
                    {
                        "databaseId": 50,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            101000
                        ]
                    }
                ]
            }
        },
        "93": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 51,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            100001
                        ]
                    }
                ],
                "LEVEL_FAST": [
                    {
                        "databaseId": 51,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            101000
                        ]
                    }
                ]
            }
        }
    }
}
';
