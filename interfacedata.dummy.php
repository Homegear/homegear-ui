<?php $dummyInterfaceDataJson = '
{
    "devices": {
        "50": {
            "categories": [
                1
            ],
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
                        "role": "100000"
                    },
                    "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 93,
                            "properties": []
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
                        "role": "100000"
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
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL_FAST",
                            "peer": 93,
                            "properties": []
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
                "role": "100000"
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
        "49": {
            "categories": [
                1
            ],
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
                        "role": "100000"
                    },
                    "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 92,
                            "properties": []
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
                        "role": "100000"
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
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL_FAST",
                            "peer": 92,
                            "properties": []
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
                "role": "100000"
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
        "48": {
            "categories": [
                1
            ],
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
                        "role": "100000"
                    },
                    "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 94,
                            "properties": []
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
                        "role": "100000"
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
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL_FAST",
                            "peer": 94,
                            "properties": []
                        }
                    ]
                }
            ],
            "databaseId": 48,
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
                "role": "100000"
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
                    "content": "Lighting"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitchBrightness",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "47": {
            "categories": [
                2
            ],
            "databaseId": 47,
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
                            "name": "LEVEL",
                            "peer": 86,
                            "properties": []
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
        "46": {
            "categories": [
                4
            ],
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
                                        "operator": "not",
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
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 69,
                            "properties": []
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
        "45": {
            "categories": [
                3
            ],
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 70,
                            "properties": []
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 67,
                            "properties": []
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
        "43": {
            "categories": [
                3
            ],
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 66,
                            "properties": []
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
        "42": {
            "categories": [
                3
            ],
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 65,
                            "properties": []
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
        "41": {
            "categories": [
                3
            ],
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 64,
                            "properties": []
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
        "40": {
            "categories": [
                3
            ],
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 63,
                            "properties": []
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
        "39": {
            "categories": [
                3
            ],
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 62,
                            "properties": []
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
        "38": {
            "categories": [
                3
            ],
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 61,
                            "properties": []
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
        "37": {
            "categories": [
                3
            ],
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 60,
                            "properties": []
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
        "16": {
            "categories": [
                1
            ],
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 15,
                            "properties": []
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
        "15": {
            "categories": [
                1
            ],
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 14,
                            "properties": []
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
        "14": {
            "categories": [
                1
            ],
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 13,
                            "properties": []
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
        "13": {
            "categories": [
                7
            ],
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
                "role": "400000"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 12,
                            "properties": []
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
        "12": {
            "categories": [
                1
            ],
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 11,
                            "properties": []
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
        "11": {
            "categories": [
                1
            ],
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 10,
                            "properties": []
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
        "10": {
            "categories": [
                7
            ],
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
                "role": "400000"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 9,
                            "properties": []
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 8,
                            "properties": []
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 7,
                            "properties": []
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
        "7": {
            "categories": [
                1
            ],
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 6,
                            "properties": []
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
        "2": {
            "categories": [
                1
            ],
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 1,
                            "properties": []
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "name": "TEST",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
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
                            ]
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "TEST",
                            "peer": 0,
                            "properties": []
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 2,
                            "properties": []
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 3,
                            "properties": []
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 4,
                            "properties": []
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 5,
                            "properties": []
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
        "17": {
            "categories": [
                7
            ],
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
                "role": "400000"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 16,
                            "properties": []
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
                "role": "100000"
            },
            "role": 1048576,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 84,
                            "properties": []
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
                "role": "400000"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 91,
                            "properties": []
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
        "20": {
            "categories": [
                2
            ],
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "bool"
                        },
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 17,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 17,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 17,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "peer": 17,
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
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 17,
                            "properties": []
                        }
                    ]
                }
            ],
            "databaseId": 20,
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
            "label": "Rollladen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "500000"
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
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "21": {
            "categories": [
                2
            ],
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 18,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 18,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 18,
                            "properties": []
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
            "label": "Rollladen links",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "500000"
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
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "peer": 19,
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
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 19,
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
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 19,
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 19,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 19,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 19,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 19,
                            "properties": []
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
            "label": "Rollladen rechts",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "500000"
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
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
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
                            ],
                            "type": "bool"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 20,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 20,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 20,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "peer": 20,
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
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 20,
                            "properties": []
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
            "label": "Rollladen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "500000"
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
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
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
                            ],
                            "type": "bool"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 21,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 21,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 21,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 21,
                            "properties": []
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
                "role": "500000"
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
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
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
                            ],
                            "type": "bool"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 22,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 22,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 22,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 22,
                            "properties": []
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
                "role": "500000"
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
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
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
                            ],
                            "type": "bool"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 23,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 23,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 23,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 23,
                            "properties": []
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
                "role": "500000"
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
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
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
                            ],
                            "type": "bool"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 24,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 24,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 24,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 24,
                            "properties": []
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
                "role": "500000"
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
                    "content": "Shading"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
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
                            ],
                            "type": "bool"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 25,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 25,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 25,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 25,
                            "properties": []
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
            "label": "Markise Wohnen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "500000"
            },
            "role": 0,
            "room": 7,
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
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
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
                            ],
                            "type": "bool"
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 26,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 26,
                            "properties": []
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 26,
                            "properties": []
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
                            "name": "markiese1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "pfeil3"
                        }
                    },
                    "metadata": {
                        "role": "500000"
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
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CURRENT_POSITION",
                            "peer": 26,
                            "properties": []
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
            "label": "Markise Essen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "500000"
            },
            "role": 0,
            "room": 7,
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
            "uniqueUiElementId": "Base.shadingButtonsPositionSlats",
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "30": {
            "categories": [
                5
            ],
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
                                "value": 21
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 78,
                            "properties": []
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
                                                "content": "Komfort"
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
                                                "content": "Frostschutz"
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CONTROL_MODE",
                            "peer": 78,
                            "properties": []
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
                "l2_action": {
                    "control": 0,
                    "input": 0
                },
                "role": "201000"
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
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderMode",
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "31": {
            "categories": [
                5
            ],
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
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 79,
                            "properties": []
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
                                                "content": "Komfort"
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
                                                "content": "Frostschutz"
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CONTROL_MODE",
                            "peer": 79,
                            "properties": []
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
                                "value": 13
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 80,
                            "properties": []
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
                                                "content": "Komfort"
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
                                                "content": "Frostschutz"
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CONTROL_MODE",
                            "peer": 80,
                            "properties": []
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
                                "value": 20
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 81,
                            "properties": []
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
                                                "content": "Komfort"
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
                                                "content": "Frostschutz"
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CONTROL_MODE",
                            "peer": 81,
                            "properties": []
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
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 82,
                            "properties": []
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
                                                "content": "Komfort"
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
                                                "content": "Frostschutz"
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CONTROL_MODE",
                            "peer": 82,
                            "properties": []
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
                                "value": 22
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 83,
                            "properties": []
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
                                                "content": "Komfort"
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
                                                "content": "Frostschutz"
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
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "CONTROL_MODE",
                            "peer": 83,
                            "properties": []
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
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "STATE",
                            "peer": 87,
                            "properties": []
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
                40,
                4,
                5,
                23,
                32
            ],
            "floors": [
                1
            ],
            "name": "Bad",
            "icon": "wc2"
        },
        "3": {
            "devices": [
                46,
                37,
                2,
                1,
                20,
                30
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
                16,
                15,
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
                50,
                39,
                38,
                3,
                21,
                22,
                31
            ],
            "floors": [
                2
            ],
            "name": "Kind",
            "icon": "bett1"
        },
        "7": {
            "devices": [
                13,
                12,
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
                47
            ],
            "floors": [
                4
            ],
            "name": "L\u00fcftung",
            "icon": "ventilator"
        },
        "9": {
            "devices": [
                48,
                42,
                41,
                6,
                24,
                25,
                33
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
                49,
                45,
                44,
                43,
                10,
                9,
                8,
                7,
                18,
                26,
                27,
                34,
                36
            ],
            "floors": [
                1
            ],
            "name": "Wohnbereich",
            "icon": "sofa1"
        }
    },
    "users": {
        "1": {
            "name": "homegear",
            "groups": [
                1
            ],
            "afterLogin": "",
            "expert": "true",
            "locale": "en-US",
            "theme": "dark"
        },
        "2": {
            "name": "ui",
            "groups": [
                1
            ],
            "interface": {
                "consoleLog": "true",
                "firstBreadcrumb": "Haus",
                "firstBreadcrumbId": "house",
                "highlight": "#e3a104",
                "houseView": "scroll",
                "language": "de-DE",
                "showFloor": "true",
                "theme": "dark"
            }
        },
        "3": {
            "name": "interface",
            "groups": [
                1
            ],
            "afterLogin": "",
            "expert": "true",
            "interface": {
                "consoleLog": "true",
                "firstBreadcrumb": "Haus",
                "firstBreadcrumbId": "house",
                "highlight": "#00e304",
                "houseView": "scroll",
                "language": "de-DE",
                "showFloor": "true",
                "theme": "dark"
            },
            "locale": "de-DE",
            "theme": "dark"
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
        "100000": {
            "name": "Licht",
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
            "aggregated": {
                "0": 18,
                "variableCount": 18
            },
            "varInRole": {
                "0": {
                    "-1": [
                        "TEST"
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
                "Komfort",
                "Frostschutz",
                "Spar"
            ],
            "icon": "heater",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral Komfort",
                    "roleId": 201003,
                    "value": 0
                },
                {
                    "buttonText": "Zentral Frostschutz",
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
            "aggregated": {
                "13": 1,
                "20": 1,
                "21": 1,
                "22": 3,
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
                "Komfort",
                "Frostschutz",
                "Spar"
            ],
            "aggregated": {
                "0": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": [
                        "CONTROL_MODE"
                    ]
                },
                "79": {
                    "1": [
                        "CONTROL_MODE"
                    ]
                },
                "80": {
                    "1": [
                        "CONTROL_MODE"
                    ]
                },
                "81": {
                    "1": [
                        "CONTROL_MODE"
                    ]
                },
                "82": {
                    "1": [
                        "CONTROL_MODE"
                    ]
                },
                "83": {
                    "1": [
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
                "variableCount": 0
            },
            "varInRole": []
        },
        "201005": {
            "name": "Heizung - Absenktemperatur",
            "texts": [
                "Absenk"
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "201006": {
            "name": "Heizung - Frostschutztemperatur",
            "texts": [
                "Frost"
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
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
            "aggregated": {
                "0": 4,
                "1": 2,
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
        "400000": {
            "name": "Steckdose",
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
            "aggregated": {
                "0": 4,
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
        "500000": {
            "name": "Beschattung",
            "texts": {
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
            },
            "icon": "rolladen1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral auf",
                    "roleId": 501003,
                    "value": 0
                },
                {
                    "buttonText": "Zentral ab",
                    "roleId": 501003,
                    "value": 100
                }
            ],
            "rolesInclude": [
                {
                    "aggregationType": 1,
                    "roles": [
                        501003,
                        502003
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
                "1": 8,
                "variableCount": 8
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
                "20": {
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
                "1": 8,
                "variableCount": 8
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
                "20": {
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
            "name": "Beschattung - Position",
            "texts": [
                "Stop"
            ],
            "aggregated": {
                "0": 10,
                "variableCount": 10
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
                "20": {
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
                },
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
        "502001": {
            "name": "Beschattung - Markise - einfahren",
            "texts": [
                "einfahren"
            ],
            "aggregated": {
                "1": 2,
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
            "name": "Beschattung - Markise - Position",
            "texts": [
                "Stop"
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        }
    },
    "mainmenu": [
        {
            "id": "1",
            "name": "house",
            "icon": "haus1",
            "access": "-1",
            "onclick": "main(this, {name:firstBreadcrumb,content:\'house\'})"
        },
        {
            "id": "2",
            "name": "settings",
            "icon": "einstellungen1",
            "access": "-1",
            "onclick": "main(this, {name:\'Einstellungen\',content:\'settings\',menu:\'settings\'})"
        },
        {
            "id": "3",
            "name": "logoff",
            "icon": "power1",
            "access": "-1",
            "onclick": "user_logoff()"
        }
    ],
    "menu": [
        {
            "id": "1",
            "name": "Benutzer",
            "mainmenu": "settings",
            "category": "user",
            "level": "1",
            "icon": "profil1",
            "access": "-1",
            "onclick": "menu({mainmenu:\'settings\',level:\'2\',category:\'user\',name:\'Benutzer\',content:\'true\'})",
            "description": "Verwalten"
        },
        {
            "id": "2",
            "name": "Benutzereinstellungen",
            "mainmenu": "settings",
            "category": "user",
            "level": "2",
            "icon": "profil1",
            "access": "-1",
            "onclick": "user(this, {name:\'Benutzereinstellungen\',content:\'edit\'})",
            "description": "Theme, ..."
        },
        {
            "id": "3",
            "name": "Lizenz",
            "mainmenu": "settings",
            "category": "license",
            "level": "1",
            "icon": "information1",
            "access": "-1",
            "onclick": "license(this, {name:\'Lizenz\',content:\'license\'})",
            "description": "Credits"
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
    "l18n": {
        "login.username": "Benutzername",
        "login.password": "Passwort",
        "login.loginbutton": "Anmelden",
        "login.dataerror": "Falsche Logindaten!",
        "house": "Haus",
        "house.tab.rooms": "R\u00e4ume",
        "house.tab.devices": "Ger\u00e4te",
        "widgets": "Widgets",
        "settings": "Einstellungen",
        "settings.user.manage.language": "Sprache",
        "settings.user.manage.language.name": "Deutsch",
        "settings.user.manage.theme": "Theme",
        "settings.user.manage.theme.dark": "Dunkel",
        "settings.user.manage.theme.light": "Hell",
        "settings.user.manage.theme.blue": "Blau",
        "settings.user.manage.theme.purple": "Lila",
        "settings.user.manage.highlight": "Highlight Farbe",
        "settings.user.manage.save": "Speichern",
        "settings.about.table.name": "Name",
        "settings.about.table.version": "Version",
        "settings.about.table.rights": "Rechte",
        "settings.about.table.license": "Lizenz",
        "settings.about.table.license.url": "Lizenz URL",
        "logoff": "Abmelden",
        "default": {
            "login.username": "Username",
            "login.password": "Password",
            "login.loginbutton": "Login",
            "login.dataerror": "Incorrect login data!",
            "house": "House",
            "house.tab.rooms": "Rooms",
            "house.tab.devices": "Devices",
            "widgets": "Widgets",
            "settings": "Settings",
            "settings.user.manage.theme": "Theme",
            "settings.user.manage.theme.dark": "Dark",
            "settings.user.manage.theme.light": "Light",
            "settings.user.manage.theme.blue": "Blue",
            "settings.user.manage.theme.purple": "Purple",
            "settings.user.manage.language": "Language",
            "settings.user.manage.language.name": "English",
            "settings.user.manage.highlight": "Highlighting",
            "settings.user.manage.save": "Save",
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
        "93": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 50,
                        "control": 0,
                        "input": 0
                    }
                ],
                "LEVEL_FAST": [
                    {
                        "databaseId": 50,
                        "control": 1,
                        "input": 0
                    }
                ]
            }
        },
        "92": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 49,
                        "control": 0,
                        "input": 0
                    }
                ],
                "LEVEL_FAST": [
                    {
                        "databaseId": 49,
                        "control": 1,
                        "input": 0
                    }
                ]
            }
        },
        "94": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 48,
                        "control": 0,
                        "input": 0
                    }
                ],
                "LEVEL_FAST": [
                    {
                        "databaseId": 48,
                        "control": 1,
                        "input": 0
                    }
                ]
            }
        },
        "86": {
            "1": {
                "LEVEL": [
                    {
                        "databaseId": 47,
                        "control": 0,
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
                    }
                ]
            }
        },
        "0": {
            "-1": {
                "TEST": [
                    {
                        "databaseId": 1,
                        "control": 0,
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
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
                        "input": 0
                    },
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 20,
                        "control": 1,
                        "input": 0
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
                        "input": 0
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 21,
                        "control": 1,
                        "input": 0
                    }
                ]
            }
        },
        "19": {
            "1": {
                "UP": [
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 0
                    },
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 22,
                        "control": 1,
                        "input": 0
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
                        "input": 0
                    },
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 23,
                        "control": 1,
                        "input": 0
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
                        "input": 0
                    },
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 24,
                        "control": 1,
                        "input": 0
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
                        "input": 0
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 25,
                        "control": 1,
                        "input": 0
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
                        "input": 0
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 26,
                        "control": 1,
                        "input": 0
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
                        "input": 0
                    },
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 27,
                        "control": 1,
                        "input": 0
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
                        "input": 0
                    },
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 28,
                        "control": 1,
                        "input": 0
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
                        "input": 0
                    },
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 1
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 29,
                        "control": 1,
                        "input": 0
                    }
                ]
            }
        },
        "78": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 0
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 30,
                        "control": 1,
                        "input": 0
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 30,
                        "control": 2,
                        "input": 0
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
                        "input": 0
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 31,
                        "control": 1,
                        "input": 0
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 31,
                        "control": 2,
                        "input": 0
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
                        "input": 0
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 32,
                        "control": 1,
                        "input": 0
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 32,
                        "control": 2,
                        "input": 0
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
                        "input": 0
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 33,
                        "control": 1,
                        "input": 0
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 33,
                        "control": 2,
                        "input": 0
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
                        "input": 0
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 34,
                        "control": 1,
                        "input": 0
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 34,
                        "control": 2,
                        "input": 0
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
                        "input": 0
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 35,
                        "control": 1,
                        "input": 0
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 35,
                        "control": 2,
                        "input": 0
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
                        "input": 0
                    }
                ]
            }
        }
    }
}
';
