<?php $dummyInterfaceDataJson = '
{
    "devices": {
        "1": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 1,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "police_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Regenalarm Helper",
            "metadata": [],
            "room": 13,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.helperSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "helperSwitch",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "RAINALARM",
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
                                                "name": "police_1"
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
                                                "name": "police_1"
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
                            "name": "RAINALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.helperSwitch"
                }
            ],
            "rooms": [
                13
            ]
        },
        "2": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 2,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "police_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Windalarm Helper",
            "metadata": [],
            "room": 13,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.helperSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "helperSwitch",
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
                                                "name": "police_1"
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
                                                "name": "police_1"
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
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.helperSwitch"
                }
            ],
            "rooms": [
                13
            ]
        },
        "3": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 3,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "police_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fensteralarm Helper",
            "metadata": [],
            "room": 13,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.helperSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "helperSwitch",
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
                                                "name": "police_1"
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
                                                "name": "police_1"
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
                            "name": "WINDOWALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.helperSwitch"
                }
            ],
            "rooms": [
                13
            ]
        },
        "4": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 4,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht in Stockwerkslos",
            "metadata": [],
            "room": 13,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "rooms": [
                13
            ]
        },
        "5": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 5,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": [],
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "6": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 6,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht Decke",
            "metadata": [],
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "7": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 7,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht Spiegel",
            "metadata": [],
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "8": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 8,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": [],
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "9": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 9,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht c",
            "metadata": [],
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
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
            "categories": [],
            "clickCount": 0,
            "databaseId": 10,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht b",
            "metadata": [],
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
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
            "categories": [],
            "clickCount": 0,
            "databaseId": 11,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht d",
            "metadata": [],
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "12": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 12,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Steckdose",
            "metadata": [],
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.socketSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "socket_1"
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
                                                "name": "socket_1"
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
                                {
                                    "direction": 2,
                                    "id": 400001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 400000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 400000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.socketSwitch"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "13": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 13,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": [],
            "room": 1,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                1
            ]
        },
        "14": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 14,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": [],
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "15": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 15,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Steckdose",
            "metadata": [],
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.socketSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "socket_1"
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
                                                "name": "socket_1"
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
                                {
                                    "direction": 2,
                                    "id": 400001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 400000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 400000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.socketSwitch"
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "16": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 16,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": [],
            "room": 10,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                10
            ]
        },
        "17": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 17,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht Decke",
            "metadata": [],
            "room": 5,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                5
            ]
        },
        "18": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 18,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht Spiegel",
            "metadata": [],
            "room": 5,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 100000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingSwitch"
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                5
            ]
        },
        "19": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 19,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Steckdose",
            "metadata": [],
            "room": 11,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.socketSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "socket_1"
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
                                                "name": "socket_1"
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
                                {
                                    "direction": 2,
                                    "id": 400001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 400000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 400000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.socketSwitch"
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                11
            ]
        },
        "20": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 20,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Steckdose",
            "metadata": [],
            "room": 4,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.socketSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "SOCKET1",
                            "peer": 0,
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
                                                "name": "socket_1"
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
                                                "name": "socket_1"
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
                                {
                                    "direction": 2,
                                    "id": 400001
                                },
                                {
                                    "direction": 2,
                                    "id": 400000
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "SOCKET1",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001
                                },
                                {
                                    "direction": 2,
                                    "id": 400000
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "uniqueUiElementId": "Base.socketSwitch"
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
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtonsSingleStep",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                    "uniqueUiElementId": "Base.shadingButtonsSingleStep",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
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
                                                "name": "arrow_up_step_1"
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
                                                "name": "arrow_up_step_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
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
                                                "name": "arrow_down_step_1"
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
                                                "name": "arrow_down_step_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": 1
                        },
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": 2
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": 1
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
                                }
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
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
                            "peer": 18,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 15
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Lamellen"
                        },
                        "title": {
                            "color": "title",
                            "content": "Lamellenposition"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPositionSlats",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 18,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 15
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windalarm"
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
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
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 21,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 6,
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
            "uniqueUiElementId": "Base.shadingButtonsSingleStepPositionPositionSlatsWindalarm",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "22": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 19,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Lamellen"
                        },
                        "title": {
                            "color": "title",
                            "content": "Lamellenposition"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPositionSlats",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 19,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 22,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen KNX",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
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
            "categories": [],
            "clickCount": 0,
            "databaseId": 23,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Dachfl\u00e4chenfenster",
            "metadata": {
                "l3_force": true
            },
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.windowButtonsUpDown",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowButtonsUpDown",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 17,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 600001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 17,
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 600002,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 17,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ],
                    "uniqueUiElementId": "Base.windowButtonsUpDown"
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "24": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "windowButtonsUpDown",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_2"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.windowButtonsUpDown",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 17,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 600001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 17,
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 600002,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 17,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
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
                    "control": "windowRainalarm",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "weather_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Regen"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.windowRainalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "RAINALARM",
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
                                                "name": "weather_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "aktiv"
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
                                                "name": "weather_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "inaktiv"
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
                            "name": "RAINALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 24,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "window_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "window_2": {
                    "color": "icon",
                    "name": "window_2"
                }
            },
            "label": "Dachfl\u00e4chenfenster Rainalarm",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Fenster"
                },
                "title": {
                    "color": "title",
                    "content": "Fenster"
                }
            },
            "uniqueUiElementId": "Base.windowButtonsUpDownRainalarm",
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "25": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "switches_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 600001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                            "name": "DOWN",
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 600002,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 20,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_2"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600004,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600004,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 25,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "window_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "window_2": {
                    "color": "icon",
                    "name": "window_2"
                }
            },
            "label": "Fenstermotor",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Fenster"
                },
                "title": {
                    "color": "title",
                    "content": "Fenster"
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
        "26": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "switches_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 600001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                            "name": "DOWN",
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 600002,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 20,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_2"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600004,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600004,
                                    "level": 2
                                },
                                {
                                    "direction": 2,
                                    "id": 600000,
                                    "level": 0
                                }
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
                    "control": "windowRainalarm",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "weather_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Regen"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.windowRainalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "RAINALARM",
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
                                                "name": "weather_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "aktiv"
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
                                                "name": "weather_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "inaktiv"
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
                            "name": "RAINALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 26,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "window_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "window_2": {
                    "color": "icon",
                    "name": "window_2"
                }
            },
            "label": "Fenstermotor Rainalarm",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Fenster"
                },
                "title": {
                    "color": "title",
                    "content": "Fenster"
                }
            },
            "uniqueUiElementId": "Base.windowButtonsPositionRainalarm",
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "27": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 21,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 21,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 21,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "ventilator_2"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "L\u00fcftung"
                        },
                        "title": {
                            "color": "title",
                            "content": "L\u00fcftung"
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
                                                "name": "ventilator_2"
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
                                                "name": "ventilator_2"
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windalarm"
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
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
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 27,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen links",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 9,
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
            "uniqueUiElementId": "Base.shadingButtonsPositionVentilationWindalarm",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "28": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 22,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 22,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
                            "peer": 22,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 30
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 22,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windalarm"
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
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
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 28,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen rechts",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 9,
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
            "uniqueUiElementId": "Base.shadingButtonsPositionWindalarm",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "29": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 23,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 23,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 23,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 501004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 29,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen Wohnen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 12,
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
            "uniqueUiElementId": "Base.shadingButtonsPosition",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "30": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 25,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 25,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
                            "peer": 25,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 10
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 25,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502004,
                                    "level": 2
                                }
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
                    "controlMetadata": {
                        "texts": {
                            "title": "Wind alarm"
                        }
                    },
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windalarm"
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
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
                            "name": "WINDALARM",
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
                    "control": "shadingRainalarm",
                    "controlMetadata": {
                        "texts": {
                            "title": "Rain alarm"
                        }
                    },
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "weather_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Regenalarm"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingRainalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "RAINALARM",
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
                                                "name": "weather_1"
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
                                                "name": "weather_1"
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
                            "name": "RAINALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 30,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "awning_1": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Markise Wohnen Alarmtest",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 7,
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
            "uniqueUiElementId": "Base.shadingAwningButtonsPositionWindalarmRainalarm",
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "31": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 28,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 28,
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 28,
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 28,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 28,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 28,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
                            "peer": 28,
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 28,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502004,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windalarm"
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
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
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
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
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 31,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "awning_1": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Markise Wohnen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
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
            "uniqueUiElementId": "Base.shadingAwningButtonsPositionWindalarm",
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "32": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 26,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502004,
                                    "level": 2
                                }
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
                    "control": "shadingRainalarm",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "weather_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Regenalarm"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingRainalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "RAINALARM",
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
                                                "name": "weather_1"
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
                                                "name": "weather_1"
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
                            "name": "RAINALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 32,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "awning_1": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Markise Wohnen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 7,
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
            "uniqueUiElementId": "Base.shadingAwningButtonsPositionRainalarm",
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "33": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 33,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "shadingButtons",
            "metadata": {
                "l3_force": true
            },
            "room": 13,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.shadingButtons",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 27,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 27,
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 27,
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "UP",
                            "peer": 27,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 27,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 27,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ],
                    "uniqueUiElementId": "Base.shadingButtons"
                }
            ],
            "rooms": [
                13
            ]
        },
        "34": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
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
                                                "name": "close_x_1"
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
                                                "name": "close_x_1"
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
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
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
                                                "name": "arrow_down_1"
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
                                                "name": "arrow_down_1"
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
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502001,
                                    "level": 2
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 26,
                            "properties": [],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "DOWN",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "LEVEL",
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "LEVEL",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 500000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 502004,
                                    "level": 2
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 34,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "awning_1": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Markise Essen",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
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
        "35": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingTemperature",
                    "controlMetadata": [],
                    "icons": {
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
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
                    "uniqueUiElementId": "Base.heatingTemperature",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE1",
                            "peer": 0,
                            "properties": {
                                "automationInfo": {
                                    "maximumValue": 50,
                                    "minimumValue": 0,
                                    "step": 0.5,
                                    "type": false
                                },
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.1234568
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE1",
                            "peer": 0,
                            "properties": [],
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
                    "control": "heatingSlider",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 78,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 18
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 78,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "CONTROL_MODE",
                            "peer": 78,
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
                                                "color": "active",
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
                                }
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
                    "control": "windowHandle",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Status"
                        }
                    },
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWCONTACT1",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWCONTACT1",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 35,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "heater_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "heater_1"
                }
            },
            "label": "Heizung Fensterkontakt",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingSliderModeWindowhandle",
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "36": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingTemperature",
                    "controlMetadata": [],
                    "icons": {
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
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
                    "uniqueUiElementId": "Base.heatingTemperature",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 79,
                            "properties": {
                                "automationInfo": {
                                    "maximumValue": 50,
                                    "minimumValue": 0,
                                    "step": 0.5,
                                    "type": false
                                },
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 79,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
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
                    "control": "heatingSlider",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 79,
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 79,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "CONTROL_MODE",
                            "peer": 79,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
                                }
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
                    "control": "windowHandle",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Status"
                        }
                    },
                    "uniqueUiElementId": "Base.windowHandle",
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
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
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
            "databaseId": 36,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "heater_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "heater_1"
                }
            },
            "label": "Heizung Windowalarm",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingSliderModeWindowhandle",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "37": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingTemperature",
                    "controlMetadata": [],
                    "icons": {
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
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
                    "uniqueUiElementId": "Base.heatingTemperature",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 80,
                            "properties": {
                                "automationInfo": {
                                    "maximumValue": 50,
                                    "minimumValue": 0,
                                    "step": 0.5,
                                    "type": false
                                },
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 80,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
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
                    "control": "heatingSlider",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 80,
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 80,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "CONTROL_MODE",
                            "peer": 80,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 37,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingSliderMode",
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "38": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingTemperature",
                    "controlMetadata": [],
                    "icons": {
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
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
                    "uniqueUiElementId": "Base.heatingTemperature",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 81,
                            "properties": {
                                "automationInfo": {
                                    "maximumValue": 50,
                                    "minimumValue": 0,
                                    "step": 0.5,
                                    "type": false
                                },
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 81,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
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
                    "control": "heatingSlider",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 81,
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 81,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "CONTROL_MODE",
                            "peer": 81,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 38,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingSliderMode",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "39": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingTemperature",
                    "controlMetadata": [],
                    "icons": {
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
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
                    "uniqueUiElementId": "Base.heatingTemperature",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 82,
                            "properties": {
                                "automationInfo": {
                                    "maximumValue": 50,
                                    "minimumValue": 0,
                                    "step": 0.5,
                                    "type": false
                                },
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 82,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
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
                    "control": "heatingSlider",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 82,
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 82,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "CONTROL_MODE",
                            "peer": 82,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
                                }
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
                    "control": "windowHandle",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Status"
                        }
                    },
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE1",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE1",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 39,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "heater_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "heater_1"
                }
            },
            "label": "Heizung WindowContact",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingSliderModeWindowhandle",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "40": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingTemperature",
                    "controlMetadata": [],
                    "icons": {
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
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
                    "uniqueUiElementId": "Base.heatingTemperature",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 83,
                            "properties": {
                                "automationInfo": {
                                    "maximumValue": 50,
                                    "minimumValue": 0,
                                    "step": 0.5,
                                    "type": false
                                },
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "TEMPERATURE",
                            "peer": 83,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201001,
                                    "level": 2
                                }
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
                    "control": "heatingSlider",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 83,
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 83,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201002,
                                    "level": 2
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
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
                            "name": "CONTROL_MODE",
                            "peer": 83,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
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
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201000,
                                    "level": 1
                                },
                                {
                                    "direction": 2,
                                    "id": 200000,
                                    "level": 0
                                },
                                {
                                    "direction": 2,
                                    "id": 201003,
                                    "level": 2
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 40,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 5,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingSliderMode",
            "floors": [
                2
            ],
            "rooms": [
                5
            ]
        },
        "42": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 42,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenstergriff Rund",
            "metadata": [],
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.windowHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE1",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE1",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.windowHandle"
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "43": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 43,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenstergriff links",
            "metadata": [],
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.windowHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE2",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE2",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.windowHandle"
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "44": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 44,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenstergriff rechts",
            "metadata": [],
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.windowHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE3",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE3",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.windowHandle"
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "45": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 45,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenstergriff Bad",
            "metadata": [],
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.windowHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE4",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE4",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.windowHandle"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "46": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 46,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenstergriff links",
            "metadata": [],
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.windowHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE5",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE5",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.windowHandle"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "47": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 47,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenstergriff rechts",
            "metadata": [],
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.windowHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE6",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE6",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.windowHandle"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "48": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 48,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenstergriff K\u00fcche links",
            "metadata": [],
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.windowHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE7",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE7",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.windowHandle"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "49": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 49,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenstergriff Wohnen",
            "metadata": [],
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.windowHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE8",
                            "peer": 0,
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWHANDLE8",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301002
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.windowHandle"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "50": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 50,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "door_open_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "T\u00fcrgriff",
            "metadata": [],
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.doorHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "doorHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "DOORCONTACT",
                            "peer": 0,
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
                                                "name": "door_open_1"
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
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "door_open_1"
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
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301000
                                },
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301001,
                                    "invert": true
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "DOORCONTACT",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301000
                                },
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301001,
                                    "invert": true
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.doorHandle"
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "51": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 51,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "door_open_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "T\u00fcrgriff",
            "metadata": [],
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.doorHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "doorHandle",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "DOORHANDLE",
                            "peer": 0,
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
                                                "name": "door_open_1"
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
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "door_open_1"
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
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301000
                                },
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301001,
                                    "invert": true
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "DOORHANDLE",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301000
                                },
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301001,
                                    "invert": true
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.doorHandle"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "52": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 52,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "door-handle_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "T\u00fcr Verriegelung",
            "metadata": [],
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.doorLock",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "doorLock",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "DOORLOCK",
                            "peer": 0,
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
                                                "name": "door-handle_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "unverriegelt"
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
                                                "color": "active",
                                                "name": "door-handle_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "verriegelt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301003
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "DOORLOCK",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 300000
                                },
                                {
                                    "direction": 2,
                                    "id": 301003
                                },
                                {
                                    "direction": 2,
                                    "id": 301000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.doorLock"
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "53": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 53,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "ventilator_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Ventilation",
            "metadata": {
                "l3_force": true
            },
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
            "uniqueUiElementId": "Base.ventilationMode",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "ventilationMode",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATIONMODE",
                            "peer": 0,
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                                                "name": "arrow_up_1"
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
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 200000
                                },
                                {
                                    "direction": 2,
                                    "id": 202001
                                },
                                {
                                    "direction": 2,
                                    "id": 202000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATIONMODE",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 200000
                                },
                                {
                                    "direction": 2,
                                    "id": 202001
                                },
                                {
                                    "direction": 2,
                                    "id": 202000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.ventilationMode"
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                8
            ]
        },
        "54": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 54,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_dim_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "light_dim_1"
                }
            },
            "label": "Dimmlicht Ohne Switch",
            "metadata": {
                "l3_force": true
            },
            "room": 12,
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
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingBrightness",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "DIMMER4",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 63
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
                                                "name": "light_dim_1"
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
                                                "name": "light_dim_1"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100000
                                },
                                {
                                    "direction": 2,
                                    "id": 101001
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "DIMMER4",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100000
                                },
                                {
                                    "direction": 2,
                                    "id": 101001
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "uniqueUiElementId": "Base.lightingBrightness"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "55": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Status"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT1",
                            "peer": 0,
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100000
                                },
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT1",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100000
                                },
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_dim_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "light_dim_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
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
                            "channel": -1,
                            "name": "DIMMER1",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 1
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
                                                "name": "light_dim_1"
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
                                                "name": "light_dim_1"
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
                            "channel": -1,
                            "name": "DIMMER1",
                            "peer": 0,
                            "properties": [],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 55,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "light_dim_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "light_dim_1": {
                    "color": "icon",
                    "name": "light_dim_1"
                }
            },
            "label": "Dimmlicht",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Beleuchtung"
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
        "56": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Status"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT2",
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100000
                                },
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT2",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100000
                                },
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_dim_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "light_dim_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
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
                            "channel": -1,
                            "name": "DIMMER2",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 35
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
                                                "name": "light_dim_1"
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
                                                "name": "light_dim_1"
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
                            "channel": -1,
                            "name": "DIMMER2",
                            "peer": 0,
                            "properties": [],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 56,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "light_dim_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "light_dim_1": {
                    "color": "icon",
                    "name": "light_dim_1"
                }
            },
            "label": "Dimmlicht",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Beleuchtung"
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
        "57": {
            "categories": [],
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
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Status"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT3",
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                                {
                                    "direction": 2,
                                    "id": 100000
                                },
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT3",
                            "peer": 0,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100000
                                },
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
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
                    "control": "lightingColor",
                    "controlMetadata": [],
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "statusColor": true
                    },
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Farbe"
                        },
                        "title": {
                            "color": "title",
                            "content": "Farbe"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingColor",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "COLOR",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": ""
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
                                                "name": "light_on_1"
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
                                                "name": "light_on_1"
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
                            "type": "string"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "COLOR",
                            "peer": 0,
                            "properties": [],
                            "type": "string"
                        }
                    ]
                }
            ],
            "databaseId": 57,
            "dynamicMetadata": [],
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "light_dim_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "light_dim_1": {
                    "color": "icon",
                    "name": "light_dim_1"
                }
            },
            "label": "Farblicht",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beleuchtung"
                },
                "title": {
                    "color": "title",
                    "content": "Beleuchtung"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitchColor",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "58": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 2
                    },
                    "control": "refresh",
                    "controlMetadata": {
                        "visualizeInOverview": false
                    },
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "reload_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Erneuern"
                        }
                    },
                    "uniqueUiElementId": "254.0x100.Refresh",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE4",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": 21.1234568
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
                                                "name": "reload_1"
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
                                                "name": "reload_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "ungedr\u00fcckt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "deviceTypeId": 256,
                            "family": 254,
                            "name": "TEMPERATURE4",
                            "peer": 0,
                            "properties": [],
                            "type": "float"
                        }
                    ]
                }
            ],
            "databaseId": 58,
            "dynamicMetadata": {
                "favorites": {
                    "state": true
                }
            },
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "weather_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "weather": {
                    "color": "inactive",
                    "name": "weather_1"
                }
            },
            "label": "Wetter",
            "metadata": {
                "l2_action": {
                    "control": 0,
                    "input": 0
                }
            },
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
        "71": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 71,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenstergriff",
            "metadata": [],
            "node": "32538e48.7e3a92",
            "room": 1,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.windowHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "variableInputs": [
                        {
                            "channel": 0,
                            "name": "32538e48.7e3a92",
                            "peer": 1342177280,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "window_1"
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
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "unbekannt"
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
                            "name": "",
                            "peer": 0,
                            "properties": []
                        }
                    ],
                    "uniqueUiElementId": "Base.windowHandle"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                1
            ]
        },
        "72": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 72,
            "dynamicMetadata": [],
            "icons": {
                "main": {
                    "color": "inactive",
                    "name": "bell_1"
                }
            },
            "label": "Schalter",
            "metadata": [],
            "node": "db0c575e.f9cfe8",
            "room": 1,
            "texts": {
                "title": {
                    "color": "title",
                    "content": ""
                }
            },
            "uniqueUiElementId": "Base.genericSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "genericSwitch",
                    "variableInputs": [
                        {
                            "channel": 0,
                            "name": "db0c575e.f9cfe8",
                            "peer": 1342177280,
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
                                                "name": "bell_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
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
                                                "color": "active",
                                                "name": "bell_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                }
                            ]
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 0,
                            "name": "db0c575e.f9cfe8",
                            "peer": 1342177281,
                            "properties": []
                        }
                    ],
                    "uniqueUiElementId": "Base.genericSwitch"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                1
            ]
        },
        "73": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 73,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "door_open_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "T\u00fcrkontakt",
            "metadata": [],
            "node": "62c8cbce.245474",
            "room": 1,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "uniqueUiElementId": "Base.doorHandle",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "doorHandle",
                    "variableInputs": [
                        {
                            "channel": 0,
                            "name": "62c8cbce.245474",
                            "peer": 1342177280,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
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
                                                "name": "door_open_1"
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
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "ge\u00f6ffnet"
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
                                                "name": "door_open_1"
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
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Unbekannt"
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
                            "name": "",
                            "peer": 0,
                            "properties": []
                        }
                    ],
                    "uniqueUiElementId": "Base.doorHandle"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                1
            ]
        },
        "74": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 74,
            "dynamicMetadata": [],
            "icons": {
                "main": {
                    "color": "inactive",
                    "name": "aircondition_1"
                }
            },
            "label": "Button",
            "metadata": [],
            "node": "9bbb81f4.181ae",
            "room": 1,
            "texts": {
                "title": {
                    "color": "title",
                    "content": ""
                }
            },
            "uniqueUiElementId": "Base.genericButton",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "genericButton",
                    "variableInputs": [
                        {
                            "channel": 0,
                            "name": "9bbb81f4.181ae",
                            "peer": 1342177280,
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
                                                "name": "aircondition_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
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
                                                "color": "active",
                                                "name": "aircondition_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                }
                            ]
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 0,
                            "name": "9bbb81f4.181ae",
                            "peer": 1342177281,
                            "properties": []
                        }
                    ],
                    "uniqueUiElementId": "Base.genericButton"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                1
            ]
        },
        "75": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 75,
            "dynamicMetadata": [],
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Steckdose",
            "metadata": [],
            "node": "bee19580.5386c8",
            "room": 1,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "uniqueUiElementId": "Base.socketSwitch",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 0,
                            "name": "bee19580.5386c8",
                            "peer": 1342177280,
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
                                                "name": "socket_1"
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
                                                "name": "socket_1"
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
                            "channel": 0,
                            "name": "bee19580.5386c8",
                            "peer": 1342177281,
                            "properties": []
                        }
                    ],
                    "uniqueUiElementId": "Base.socketSwitch"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                1
            ]
        },
        "76": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 76,
            "dynamicMetadata": [],
            "icons": {
                "main": {
                    "color": "inactive",
                    "name": "house_1"
                }
            },
            "label": "Status",
            "metadata": [],
            "node": "ca8796fa.c4e468",
            "room": 1,
            "texts": {
                "title": {
                    "color": "title",
                    "content": ""
                }
            },
            "uniqueUiElementId": "Base.genericStatus",
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "genericStatus",
                    "variableInputs": [
                        {
                            "channel": 0,
                            "name": "ca8796fa.c4e468",
                            "peer": 1342177280,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": []
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "",
                            "peer": 0,
                            "properties": []
                        }
                    ],
                    "uniqueUiElementId": "Base.genericStatus"
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                1
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
                14,
                15
            ]
        },
        "3": {
            "name": "Dachgeschoss",
            "rooms": [
                3,
                7,
                16,
                17
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
    "notifications": [],
    "automations": [],
    "rooms": {
        "1": {
            "devices": [
                13,
                71,
                72,
                73,
                74,
                75,
                76
            ],
            "floors": [
                1
            ],
            "name": "Abstellraum",
            "icon": "broom_1"
        },
        "2": {
            "devices": [
                6,
                7,
                25,
                26,
                37,
                45
            ],
            "floors": [
                1
            ],
            "name": "Bad",
            "icon": "bathtube_1"
        },
        "3": {
            "devices": [
                23,
                24,
                35,
                42,
                50,
                52
            ],
            "floors": [
                3
            ],
            "name": "Diele",
            "icon": "floor_1"
        },
        "4": {
            "devices": [
                20
            ],
            "floors": [
                4
            ],
            "name": "Garage",
            "icon": "garage_1"
        },
        "5": {
            "devices": [
                17,
                18,
                40
            ],
            "floors": [
                2
            ],
            "name": "G\u00e4ste WC",
            "icon": "wc_1"
        },
        "6": {
            "devices": [
                5,
                21,
                22,
                36,
                43,
                44,
                58
            ],
            "floors": [
                2
            ],
            "name": "Kind",
            "icon": "rockinghorse_1"
        },
        "7": {
            "devices": [
                14,
                15,
                30,
                31,
                32,
                34
            ],
            "floors": [
                3
            ],
            "name": "Loggia",
            "icon": "balcony_1"
        },
        "8": {
            "devices": [
                53
            ],
            "floors": [
                4
            ],
            "name": "L\u00fcftung",
            "icon": "ventilator_2"
        },
        "9": {
            "devices": [
                8,
                27,
                28,
                38,
                46,
                47,
                56,
                57
            ],
            "floors": [
                1
            ],
            "name": "Schlafen",
            "icon": "bed_1"
        },
        "10": {
            "devices": [
                16
            ],
            "floors": [
                4
            ],
            "name": "Technikraum",
            "icon": "tools_1"
        },
        "11": {
            "devices": [
                19
            ],
            "floors": [
                4
            ],
            "name": "Waschraum",
            "icon": "washer_1"
        },
        "12": {
            "devices": [
                9,
                10,
                11,
                12,
                29,
                39,
                48,
                49,
                51,
                54,
                55
            ],
            "floors": [
                1
            ],
            "name": "Wohnbereich",
            "icon": "sofa_1"
        },
        "13": {
            "devices": [
                1,
                2,
                3,
                4,
                33
            ],
            "floors": [],
            "name": "Stockwerkslos",
            "icon": "notification_update_1"
        },
        "14": {
            "devices": [],
            "floors": [
                2
            ],
            "name": "Baby",
            "icon": "child_1"
        },
        "15": {
            "devices": [],
            "floors": [
                2
            ],
            "name": "Bad",
            "icon": "shower_1"
        },
        "16": {
            "devices": [],
            "floors": [
                3
            ],
            "name": "Studio",
            "icon": "library_1"
        },
        "17": {
            "devices": [],
            "floors": [
                3
            ],
            "name": "Fitness",
            "icon": "sport_1"
        },
        "18": {
            "devices": [],
            "floors": [],
            "name": "Leer",
            "icon": "lock_1"
        }
    },
    "roles": {
        "100000": {
            "name": "Licht",
            "aggregated": {
                "0": 15,
                "1": 3,
                "63": 1,
                "variableCount": 19
            },
            "varInRole": {
                "0": {
                    "-1": {
                        "DIMMER4": {
                            "direction": 2
                        },
                        "LIGHT": {
                            "direction": 2
                        },
                        "LIGHT1": {
                            "direction": 2
                        },
                        "LIGHT2": {
                            "direction": 2
                        },
                        "LIGHT3": {
                            "direction": 2
                        },
                        "LIGHT4": {
                            "direction": 2
                        }
                    }
                },
                "1": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "10": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "11": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "13": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "14": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "15": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "2": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "3": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "4": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "5": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "6": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "7": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "8": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                }
            }
        },
        "100001": {
            "name": "Beleuchtung",
            "texts": {
                
                "0": "aus",
                "1": "an"
            },
            "icon": "light_on_1",
            "roleProfileValues": {
                "options": {
                    
                    "false": "aus",
                    "true": "an"
                },
                "type": "select"
            },
            "aggregated": {
                "0": 15,
                "1": 3,
                "variableCount": 18
            },
            "varInRole": {
                "0": {
                    "-1": {
                        "LIGHT": {
                            "direction": 2
                        },
                        "LIGHT1": {
                            "direction": 2
                        },
                        "LIGHT2": {
                            "direction": 2
                        },
                        "LIGHT3": {
                            "direction": 2
                        },
                        "LIGHT4": {
                            "direction": 2
                        }
                    }
                },
                "1": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "10": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "11": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "13": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "14": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "15": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "2": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "3": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "4": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "5": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "6": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "7": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "8": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "101001": {
            "name": "Beleuchtung - Helligkeit",
            "texts": {
                
                "0": "aus",
                "100": "an"
            },
            "aggregationType": 1,
            "icon": "light_dim_1",
            "l2_status": false,
            "roleProfileValues": {
                "options": {
                    
                    "false": "aus",
                    "true": "an"
                },
                "type": "select"
            },
            "aggregated": {
                "63": 1,
                "variableCount": 1
            },
            "varInRole": [
                {
                    "-1": {
                        "DIMMER4": {
                            "direction": 2
                        }
                    }
                }
            ]
        },
        "200000": {
            "name": "HLK",
            "aggregated": {
                "0": 1,
                "1": 11,
                "18": 7,
                "2": 1,
                "21": 17,
                "5": 6,
                "variableCount": 43
            },
            "varInRole": {
                "0": {
                    "-1": {
                        "VENTILATIONMODE": {
                            "direction": 2
                        }
                    }
                },
                "78": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "79": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "80": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "81": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "82": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "83": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 0
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                }
            }
        },
        "201000": {
            "name": "Heizung",
            "texts": {
                
                "0": "Frostschutz",
                "1": "Komfort",
                "2": "Spar"
            },
            "icon": "heater_1",
            "roleProfileValues": {
                "options": {
                    
                    "0": "Frostschutz",
                    "1": "Komfort",
                    "2": "Spar"
                },
                "type": "select"
            },
            "rolesInclude": [
                {
                    "aggregationType": 2,
                    "roles": [
                        201003
                    ]
                }
            ],
            "aggregated": {
                "1": 11,
                "18": 7,
                "2": 1,
                "21": 17,
                "5": 6,
                "variableCount": 42
            },
            "varInRole": {
                "78": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "79": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "80": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "81": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "82": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "83": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 1
                        },
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                }
            }
        },
        "201001": {
            "name": "Heizung - Ist-Temperatur",
            "texts": {
                
                "0": "Ist"
            },
            "aggregated": {
                "21": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "201002": {
            "name": "Heizung - Soll-Temperatur",
            "texts": {
                
                "0": "Soll"
            },
            "aggregated": {
                "18": 1,
                "21": 5,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "201003": {
            "name": "Heizung - Temperaturmodus",
            "texts": {
                
                "0": "Frostschutz",
                "1": "Komfort",
                "2": "Spar"
            },
            "aggregated": {
                "1": 11,
                "2": 1,
                "variableCount": 12
            },
            "varInRole": {
                "78": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2,
                            "level": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "201004": {
            "name": "Heizung - Komforttemperatur",
            "texts": {
                
                "0": "Komfort"
            },
            "aggregated": {
                "21": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "201005": {
            "name": "Heizung - Absenktemperatur",
            "texts": {
                
                "0": "Spar"
            },
            "aggregated": {
                "18": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "201006": {
            "name": "Heizung - Frostschutztemperatur",
            "texts": {
                
                "0": "Frostschutz"
            },
            "aggregated": {
                "5": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "202000": {
            "name": "L\u00fcftung",
            "aggregated": {
                "0": 1,
                "variableCount": 1
            },
            "varInRole": [
                {
                    "-1": {
                        "VENTILATIONMODE": {
                            "direction": 2
                        }
                    }
                }
            ]
        },
        "202001": {
            "name": "L\u00fcftung",
            "texts": {
                
                "0": "Stufe 1",
                "1": "Stufe 2",
                "2": "Stufe 3",
                "3": "Stufe 4"
            },
            "icon": "ventilator_2",
            "aggregated": {
                "0": 1,
                "variableCount": 1
            },
            "varInRole": [
                {
                    "-1": {
                        "VENTILATIONMODE": {
                            "direction": 2
                        }
                    }
                }
            ]
        },
        "300000": {
            "name": "Sicherheit",
            "aggregated": {
                "0": 10,
                "1": 2,
                "variableCount": 12
            },
            "varInRole": [
                {
                    "-1": {
                        "DOORCONTACT": {
                            "direction": 2
                        },
                        "DOORHANDLE": {
                            "direction": 2
                        },
                        "DOORLOCK": {
                            "direction": 2
                        },
                        "WINDOWCONTACT1": {
                            "direction": 2
                        },
                        "WINDOWHANDLE1": {
                            "direction": 2
                        },
                        "WINDOWHANDLE2": {
                            "direction": 2
                        },
                        "WINDOWHANDLE3": {
                            "direction": 2
                        },
                        "WINDOWHANDLE4": {
                            "direction": 2
                        },
                        "WINDOWHANDLE5": {
                            "direction": 2
                        },
                        "WINDOWHANDLE6": {
                            "direction": 2
                        },
                        "WINDOWHANDLE7": {
                            "direction": 2
                        },
                        "WINDOWHANDLE8": {
                            "direction": 2
                        }
                    }
                }
            ]
        },
        "301000": {
            "name": "Sicherheit - Kontaktsensor",
            "aggregated": {
                "0": 10,
                "1": 2,
                "variableCount": 12
            },
            "varInRole": [
                {
                    "-1": {
                        "DOORCONTACT": {
                            "direction": 2
                        },
                        "DOORHANDLE": {
                            "direction": 2
                        },
                        "DOORLOCK": {
                            "direction": 2
                        },
                        "WINDOWCONTACT1": {
                            "direction": 2
                        },
                        "WINDOWHANDLE1": {
                            "direction": 2
                        },
                        "WINDOWHANDLE2": {
                            "direction": 2
                        },
                        "WINDOWHANDLE3": {
                            "direction": 2
                        },
                        "WINDOWHANDLE4": {
                            "direction": 2
                        },
                        "WINDOWHANDLE5": {
                            "direction": 2
                        },
                        "WINDOWHANDLE6": {
                            "direction": 2
                        },
                        "WINDOWHANDLE7": {
                            "direction": 2
                        },
                        "WINDOWHANDLE8": {
                            "direction": 2
                        }
                    }
                }
            ]
        },
        "301001": {
            "name": "Sicherheit - T\u00fcrzustand",
            "texts": {
                
                "0": "geschlossen",
                "1": "ge\u00f6ffnet"
            },
            "icon": "door_open_2",
            "aggregated": {
                "0": 1,
                "1": 1,
                "variableCount": 2
            },
            "varInRole": [
                {
                    "-1": {
                        "DOORCONTACT": {
                            "direction": 2,
                            "invert": true
                        },
                        "DOORHANDLE": {
                            "direction": 2,
                            "invert": true
                        }
                    }
                }
            ]
        },
        "301002": {
            "name": "Fenster",
            "texts": {
                
                "0": "geschlossen",
                "1": "ge\u00f6ffnet"
            },
            "icon": "window_1",
            "aggregated": {
                "0": 8,
                "1": 1,
                "variableCount": 9
            },
            "varInRole": [
                {
                    "-1": {
                        "WINDOWCONTACT1": {
                            "direction": 2
                        },
                        "WINDOWHANDLE1": {
                            "direction": 2
                        },
                        "WINDOWHANDLE2": {
                            "direction": 2
                        },
                        "WINDOWHANDLE3": {
                            "direction": 2
                        },
                        "WINDOWHANDLE4": {
                            "direction": 2
                        },
                        "WINDOWHANDLE5": {
                            "direction": 2
                        },
                        "WINDOWHANDLE6": {
                            "direction": 2
                        },
                        "WINDOWHANDLE7": {
                            "direction": 2
                        },
                        "WINDOWHANDLE8": {
                            "direction": 2
                        }
                    }
                }
            ]
        },
        "301003": {
            "name": "T\u00fcren",
            "texts": {
                
                "0": "unverriegelt",
                "1": "verriegelt"
            },
            "icon": "door-handle_1",
            "aggregated": {
                "0": 1,
                "variableCount": 1
            },
            "varInRole": [
                {
                    "-1": {
                        "DOORLOCK": {
                            "direction": 2
                        }
                    }
                }
            ]
        },
        "400000": {
            "name": "Steckdose",
            "aggregated": {
                "0": 3,
                "1": 1,
                "variableCount": 4
            },
            "varInRole": {
                "0": {
                    "-1": {
                        "SOCKET1": {
                            "direction": 2
                        }
                    }
                },
                "12": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "16": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "9": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                }
            }
        },
        "400001": {
            "name": "Steckdosen",
            "texts": {
                
                "0": "aus",
                "1": "an"
            },
            "icon": "socket_1",
            "roleProfileValues": {
                "options": {
                    
                    "false": "aus",
                    "true": "an"
                },
                "type": "select"
            },
            "aggregated": {
                "0": 3,
                "1": 1,
                "variableCount": 4
            },
            "varInRole": {
                "0": {
                    "-1": {
                        "SOCKET1": {
                            "direction": 2
                        }
                    }
                },
                "12": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "16": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "9": {
                    "1": {
                        "STATE": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "500000": {
            "name": "Beschattung",
            "aggregated": {
                "0": 25,
                "10": 1,
                "15": 1,
                "30": 1,
                "variableCount": 28
            },
            "varInRole": {
                "18": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "19": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "21": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "22": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "23": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "24": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "25": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "26": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "27": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "28": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                }
            }
        },
        "501000": {
            "name": "Beschattung",
            "texts": {
                
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
            },
            "icon": "blind_1",
            "roleProfileValues": {
                "options": {
                    
                    "false": "ausfahren",
                    "true": "einfahren"
                },
                "type": "select"
            },
            "rolesInclude": [
                {
                    "aggregationType": 2,
                    "roles": [
                        501001,
                        501002
                    ]
                },
                {
                    "aggregationType": 1,
                    "roles": [
                        501004
                    ]
                }
            ],
            "aggregated": {
                "0": 14,
                "15": 1,
                "30": 1,
                "variableCount": 16
            },
            "varInRole": {
                "18": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 1
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        },
                        "UP": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "19": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "21": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 1
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        },
                        "UP": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "22": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 1
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        },
                        "UP": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "23": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 1
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        },
                        "UP": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "24": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 1
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        },
                        "UP": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                }
            }
        },
        "501001": {
            "name": "Beschattung - hoch",
            "texts": {
                
                "0": "Hoch"
            },
            "aggregated": {
                "0": 5,
                "variableCount": 5
            },
            "varInRole": {
                "18": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "21": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "22": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "23": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "24": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "501002": {
            "name": "Beschattung - runter",
            "texts": {
                
                "0": "Runter"
            },
            "aggregated": {
                "0": 5,
                "variableCount": 5
            },
            "varInRole": {
                "18": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "21": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "22": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "23": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "24": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "501003": {
            "name": "Beschattung - Stopp",
            "texts": {
                
                "0": "Stopp"
            },
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "501004": {
            "name": "Beschattung - Position",
            "aggregated": {
                "0": 4,
                "15": 1,
                "30": 1,
                "variableCount": 6
            },
            "varInRole": {
                "18": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "19": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "21": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "22": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "23": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "24": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "501005": {
            "name": "Beschattung - hoch und runter",
            "texts": {
                
                "0": "Hoch",
                "1": "Runter"
            },
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "501006": {
            "name": "Beschattung - Stufe",
            "texts": {
                
                "0": "Hoch",
                "1": "Runter"
            },
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "502000": {
            "name": "Beschattung - Markise",
            "texts": {
                
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
            },
            "icon": "awning_1",
            "roleProfileValues": {
                "options": {
                    
                    "false": "einfahren",
                    "true": "ausfahren"
                },
                "type": "select"
            },
            "rolesInclude": [
                {
                    "aggregationType": 1,
                    "roles": [
                        502004
                    ]
                }
            ],
            "aggregated": {
                "0": 11,
                "10": 1,
                "variableCount": 12
            },
            "varInRole": {
                "25": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 1
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        },
                        "UP": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "26": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 1
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        },
                        "UP": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "27": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 1
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        },
                        "UP": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                },
                "28": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 1
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 1
                        },
                        "UP": {
                            "direction": 2,
                            "level": 1
                        }
                    }
                }
            }
        },
        "502001": {
            "name": "Beschattung - Markise - einfahren",
            "texts": {
                
                "0": "einfahren"
            },
            "aggregated": {
                "0": 4,
                "variableCount": 4
            },
            "varInRole": {
                "25": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "26": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "27": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "28": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "502002": {
            "name": "Beschattung - Markise - ausfahren",
            "texts": {
                
                "0": "ausfahren"
            },
            "aggregated": {
                "0": 4,
                "variableCount": 4
            },
            "varInRole": {
                "25": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "26": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "27": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "28": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "502003": {
            "name": "Beschattung - Markise - Stopp",
            "texts": {
                
                "0": "Stopp"
            },
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "502004": {
            "name": "Beschattung - Markise - Position",
            "aggregated": {
                "0": 3,
                "10": 1,
                "variableCount": 4
            },
            "varInRole": {
                "25": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "26": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "27": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "28": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "502005": {
            "name": "Beschattung - Markise - einfahren und ausfahren",
            "texts": {
                
                "0": "Einfahren",
                "1": "Ausfahren"
            },
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "502006": {
            "name": "Beschattung - Markise - Stufe",
            "texts": {
                
                "0": "Hoch",
                "1": "Runter"
            },
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "600000": {
            "name": "Fenster",
            "texts": {
                
                "falseCount": "ge\u00f6ffnet",
                "trueCount": "geschlossen"
            },
            "icon": "window_2",
            "l2_status": false,
            "roleProfileValues": {
                "options": {
                    
                    "false": "\u00f6ffnen",
                    "true": "schlie\u00dfen"
                },
                "type": "select"
            },
            "rolesInclude": [
                {
                    "aggregationType": 1,
                    "roles": [
                        600001
                    ]
                }
            ],
            "aggregated": {
                "0": 6,
                "variableCount": 6
            },
            "varInRole": {
                "17": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                },
                "20": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 0
                        },
                        "LEVEL": {
                            "direction": 2,
                            "level": 0
                        },
                        "UP": {
                            "direction": 2,
                            "level": 0
                        }
                    }
                }
            }
        },
        "600001": {
            "name": "Fenster - hoch",
            "texts": {
                
                "0": "Hoch"
            },
            "aggregated": {
                "0": 2,
                "variableCount": 2
            },
            "varInRole": {
                "17": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "20": {
                    "1": {
                        "UP": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "600002": {
            "name": "Fenster - runter",
            "texts": {
                
                "0": "Runter"
            },
            "aggregated": {
                "0": 2,
                "variableCount": 2
            },
            "varInRole": {
                "17": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "20": {
                    "1": {
                        "DOWN": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "600003": {
            "name": "Fenster - Stopp",
            "texts": {
                
                "0": "Stopp"
            },
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "600004": {
            "name": "Fenster - Position",
            "aggregated": {
                "0": 2,
                "variableCount": 2
            },
            "varInRole": {
                "17": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                },
                "20": {
                    "1": {
                        "LEVEL": {
                            "direction": 2,
                            "level": 2
                        }
                    }
                }
            }
        },
        "700001": {
            "name": "Wetter - Stadt",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700002": {
            "name": "Wetter - Bew\u00f6lkung",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700003": {
            "name": "Wetter - Datum Zeit",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700004": {
            "name": "Wetter - Luftfeuchtigkeit",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700005": {
            "name": "Wetter - Luftdruck",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700006": {
            "name": "Wetter - Regenvorhersage 3h",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700007": {
            "name": "Wetter - Schneevorhersage 3h",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700008": {
            "name": "Wetter - Sonnenaufgang",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700009": {
            "name": "Wetter - Sonnenuntergang",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700010": {
            "name": "Wetter - Temperatur",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700011": {
            "name": "Wetter - Wetter",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700012": {
            "name": "Wetter - Windrichtung",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700013": {
            "name": "Wetter - Windb\u00f6en",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "700014": {
            "name": "Wetter - Windgeschwindigkeit",
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        }
    },
    "mainmenu": [
        {
            "id": "Favorites",
            "name": "favorites",
            "icon": "star_1"
        },
        {
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
        {
            "id": "notifications",
            "name": "notifications",
            "icon": "notification_2"
        },
        {
            "id": "settings",
            "name": "settings",
            "icon": "settings_1"
        },
        {
            "id": "logoff",
            "name": "logoff",
            "icon": "power_1"
        }
    ],
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
    "profiles": {
        "13": {
            "activeVariableCount": 0,
            "global": true,
            "icon": "statistic_1",
            "id": 13,
            "isActive": false,
            "locations": [],
            "name": "Anwesend",
            "totalVariableCount": 3,
            "values": [
                {
                    "channel": 1,
                    "peerId": 9,
                    "value": 1,
                    "variable": "STATE"
                },
                {
                    "channel": 1,
                    "peerId": 10,
                    "value": 1,
                    "variable": "STATE"
                },
                {
                    "channel": 1,
                    "peerId": 11,
                    "value": 1,
                    "variable": "STATE"
                }
            ]
        },
        "12": {
            "activeVariableCount": 0,
            "global": true,
            "icon": "statistic_1",
            "id": 12,
            "isActive": false,
            "locations": [],
            "name": "Abwesend",
            "totalVariableCount": 3,
            "values": [
                {
                    "channel": 1,
                    "peerId": 6,
                    "value": 0,
                    "variable": "STATE"
                },
                {
                    "channel": 1,
                    "peerId": 7,
                    "value": 0,
                    "variable": "STATE"
                },
                {
                    "channel": 1,
                    "peerId": 8,
                    "value": 0,
                    "variable": "STATE"
                }
            ]
        },
        "11": {
            "activeVariableCount": 0,
            "icon": "statistic_1",
            "id": 11,
            "isActive": false,
            "locations": [
                {
                    "floorId": 1,
                    "roomId": 9
                }
            ],
            "name": "Schlafen",
            "totalVariableCount": 3,
            "values": [
                {
                    "channel": 1,
                    "peerId": 3,
                    "value": 0,
                    "variable": "STATE"
                },
                {
                    "channel": 1,
                    "peerId": 4,
                    "value": 0,
                    "variable": "STATE"
                },
                {
                    "channel": 1,
                    "peerId": 5,
                    "value": 0,
                    "variable": "STATE"
                }
            ]
        },
        "10": {
            "activeVariableCount": 2,
            "global": false,
            "icon": "statistic_1",
            "id": 10,
            "isActive": false,
            "locations": [
                {
                    "floorId": 1,
                    "roomId": 9
                },
                {
                    "floorId": 1,
                    "roomId": 12
                }
            ],
            "name": "Arbeiten",
            "roles": [],
            "totalVariableCount": 3,
            "values": [
                {
                    "channel": -1,
                    "peerId": 0,
                    "value": true,
                    "variable": "LIGHT"
                },
                {
                    "channel": 1,
                    "peerId": 1,
                    "value": true,
                    "variable": "STATE"
                },
                {
                    "channel": 1,
                    "peerId": 2,
                    "value": true,
                    "variable": "STATE"
                }
            ]
        },
        "9": {
            "activeVariableCount": 8,
            "categories": [
                7
            ],
            "editable": false,
            "global": false,
            "icon": "arrow_down_1",
            "id": 9,
            "isActive": false,
            "locations": [],
            "name": "zentral ausfahren",
            "roles": [
                {
                    "role": 502000,
                    "value": false
                }
            ],
            "totalVariableCount": 12,
            "values": []
        },
        "8": {
            "activeVariableCount": 0,
            "categories": [
                7
            ],
            "editable": false,
            "global": false,
            "icon": "arrow_up_1",
            "id": 8,
            "isActive": false,
            "locations": [],
            "name": "zentral einfahren",
            "roles": [
                {
                    "role": 502000,
                    "value": true
                }
            ],
            "totalVariableCount": 12,
            "values": []
        },
        "7": {
            "activeVariableCount": 10,
            "categories": [
                6
            ],
            "editable": false,
            "global": false,
            "icon": "arrow_down_1",
            "id": 7,
            "isActive": false,
            "locations": [],
            "name": "zentral ausfahren",
            "roles": [
                {
                    "role": 501000,
                    "value": false
                }
            ],
            "totalVariableCount": 16,
            "values": []
        },
        "2": {
            "activeVariableCount": 0,
            "categories": [
                1
            ],
            "editable": false,
            "global": false,
            "icon": "thermometer_1",
            "id": 2,
            "isActive": false,
            "locations": [],
            "name": "zentral frostschutz",
            "roles": [
                {
                    "role": 201003,
                    "value": 0
                }
            ],
            "totalVariableCount": 12,
            "values": []
        },
        "1": {
            "activeVariableCount": 15,
            "categories": [
                0
            ],
            "editable": false,
            "global": false,
            "icon": "power_1",
            "id": 1,
            "isActive": false,
            "locations": [],
            "name": "zentral aus",
            "roles": [
                {
                    "role": 100001,
                    "value": false
                },
                {
                    "role": 101001,
                    "value": 0
                }
            ],
            "totalVariableCount": 19,
            "values": []
        },
        "3": {
            "activeVariableCount": 11,
            "categories": [
                1
            ],
            "editable": false,
            "global": false,
            "icon": "thermometer_1",
            "id": 3,
            "isActive": false,
            "locations": [],
            "name": "zentral komfort",
            "roles": [
                {
                    "role": 201003,
                    "value": 1
                }
            ],
            "totalVariableCount": 12,
            "values": []
        },
        "4": {
            "activeVariableCount": 1,
            "categories": [
                1
            ],
            "editable": false,
            "global": false,
            "icon": "thermometer_1",
            "id": 4,
            "isActive": false,
            "locations": [],
            "name": "zentral spar",
            "roles": [
                {
                    "role": 201003,
                    "value": 2
                }
            ],
            "totalVariableCount": 12,
            "values": []
        },
        "5": {
            "activeVariableCount": 3,
            "categories": [
                5
            ],
            "editable": false,
            "global": false,
            "icon": "power_1",
            "id": 5,
            "isActive": false,
            "locations": [],
            "name": "zentral aus",
            "roles": [
                {
                    "role": 400001,
                    "value": false
                }
            ],
            "totalVariableCount": 4,
            "values": []
        },
        "6": {
            "activeVariableCount": 0,
            "categories": [
                6
            ],
            "editable": false,
            "global": false,
            "icon": "arrow_up_1",
            "id": 6,
            "isActive": false,
            "locations": [],
            "name": "zentral einfahren",
            "roles": [
                {
                    "role": 501000,
                    "value": true
                }
            ],
            "totalVariableCount": 16,
            "values": []
        }
    },
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
                "highlight_active": "",
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
                "highlight_active": "",
                "highlight_inactive": "#cccccc"
            }
        }
    ],
    "options": {
        "twofaEnabled": true,
        "userHasTwofaRegistrations": false,
        "theme": "dark",
        "highlight": "#e3a104",
        "language": "de-DE",
        "startPath": "house.tab.rooms",
        "viewportScale": 0.65000000000000002,
        "scrollbarScale": 4,
        "roleProfileDefinable": false,
        "enableAutomations": false,
        "languageChangeable": true,
        "deviceAggregation": false,
        "twofaChangeable": true,
        "disabledMainmenus": [],
        "disabledMenus": {
            "settings.automations": true,
            "settings.log": true
        },
        "showFloor": true,
        "consoleLog": true,
        "websocket_url": "location.hostname",
        "websocket_port": "location.port",
        "websocket_security_ssl": "location.protocol",
        "elementOrder": [],
        "dont_show_again": {
            "foo": true,
            "foo2": true,
            "foo3": true
        }
    },
    "manifest": {
        "lang": "de",
        "name": "Shif",
        "short_name": "Shif",
        "description": "Smart Home Interface",
        "author": "Homegear GmbH",
        "license": "LGPLv3",
        "licenseurl": "https:\/\/opensource.org\/licenses\/alphabetical",
        "background_color": "#333",
        "theme_color": "#333",
        "dir": "ltr",
        "start_url": "index.php",
        "display": "fullscreen",
        "orientation": "any",
        "manifest_version": 2,
        "revision": 379,
        "developer": {
            "name": "Marwin Hubach",
            "url": "https:\/\/marwinh.de\/"
        },
        "options_ui": {
            "page": "\/#\/setting"
        },
        "icons": [
            {
                "src": "media\/logo\/icon\/smarthome36.png",
                "sizes": "36x36",
                "type": "image\/png",
                "density": "0.75"
            },
            {
                "src": "media\/logo\/icon\/smarthome48.png",
                "sizes": "48x48",
                "type": "image\/png",
                "density": "1.0"
            },
            {
                "src": "media\/logo\/icon\/smarthome72.png",
                "sizes": "72x72",
                "type": "image\/png",
                "density": "1.5"
            },
            {
                "src": "media\/logo\/icon\/smarthome96.png",
                "sizes": "96x96",
                "type": "image\/png",
                "density": "2.0"
            },
            {
                "src": "media\/logo\/icon\/smarthome128.png",
                "sizes": "128x128",
                "type": "image\/png",
                "density": "2.0"
            },
            {
                "src": "media\/logo\/icon\/smarthome144.png",
                "sizes": "144x144",
                "type": "image\/png",
                "density": "3.0"
            },
            {
                "src": "media\/logo\/icon\/smarthome192.png",
                "sizes": "192x192",
                "type": "image\/png",
                "density": "4.0"
            }
        ]
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
    "deviceCategories": [
        {
            "name": "Beleuchtung",
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
                "0": "aus",
                "1": "an",
                "falseCount": "aus",
                "trueCount": "an"
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
        {
            "name": "Heizung",
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
            "statusMap": [
                "Frostschutz",
                "Komfort",
                "Spar"
            ],
            "uiElements": {
                "heatingTemperature": true,
                "heatingSliderMode": true,
                "heatingSliderModeWindowhandle": true,
                "heatingMode": true,
                "heatingSlider": true
            }
        },
        {
            "name": "L\u00fcftung",
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
            "statusMap": [
                "Stufe 1",
                "Stufe 2",
                "Stufe 3",
                "Stufe 4"
            ],
            "uiElements": {
                "ventilationMode": true
            }
        },
        {
            "name": "T\u00fcren",
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
                "0": "geschlossen",
                "1": "ge\u00f6ffnet",
                "3": "verriegelt"
            },
            "uiElements": {
                "doorHandle": true,
                "doorLock": true
            }
        },
        {
            "name": "Fenster",
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
            "statusMap": [
                "geschlossen",
                "ge\u00f6ffnet",
                "gekippt"
            ],
            "uiElements": {
                "windowHandle": true,
                "windowPosition": true
            }
        },
        {
            "name": "Steckdosen",
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
            "statusMap": [
                "aus",
                "an"
            ],
            "uiElements": {
                "socketButton": true,
                "socketSwitch": true
            }
        },
        {
            "name": "Beschattung",
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
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
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
        {
            "name": "Markisen",
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
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
            },
            "uiElements": {
                "shadingAwningButtonsPosition": true,
                "shadingAwningButtonsPositionRainalarm": true,
                "shadingAwningButtonsPositionWindalarm": true,
                "shadingAwningButtonsPositionWindalarmRainalarm": true
            }
        },
        {
            "name": "Fenstermotoren",
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
                "falseCount": "ge\u00f6ffnet",
                "trueCount": "geschlossen"
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
        {
            "name": "Wetter",
            "icon": "weather_1",
            "l2_status": false,
            "highlightIcon": false,
            "aggregation": [],
            "statusMap": [],
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
        {
            "name": "Klima",
            "icon": "weather_1",
            "l2_status": false,
            "highlightIcon": false,
            "aggregation": [],
            "statusMap": [],
            "uiElements": {
                "humidity": true,
                "temperature": true
            }
        },
        {
            "name": "Media",
            "icon": "speaker_1",
            "l2_status": false,
            "highlightIcon": false,
            "aggregation": [],
            "statusMap": [],
            "uiElements": {
                "mediaButtons": true
            }
        },
        {
            "name": "Helper",
            "icon": "police_1",
            "l2_status": false,
            "highlightIcon": false,
            "aggregation": [],
            "statusMap": [],
            "uiElements": {
                "helperSwitch": true
            }
        }
    ],
    "i18n": {
        "error.page_not_found": "Fehler",
        "error.title": "Die Seite konnte nicht angezeigt werden",
        "error.link.text": "Zur\u00fcck zur Raumansicht",
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
        "house.storyless": "Sonstige",
        "house.tab.rooms": "R\u00e4ume",
        "house.tab.devices": "Ger\u00e4te",
        "house.tab.profiles": "Profile",
        "favorites": "Favoriten",
        "notifications": "Benachrichtigungen",
        "notifications.amount": "Anzahl",
        "notifications.close_delete": "L\u00f6schen und Schlie\u00dfen",
        "notifications.dont_show_again": "Nicht erneut anzeigen",
        "settings": "Einstellungen",
        "settings.automations": "Automatisierungen",
        "settings.automations.new": "Neu",
        "settings.automations.description": "Automatisierungen erstellen oder l\u00f6schen",
        "settings.automations.selection": "Auswahl",
        "settings.automations.automation.name": "Name",
        "settings.automations.automation.description": "Beschreibung",
        "settings.automations.automation.state": "Aktiviert",
        "settings.automations.automation.icon": "Icon",
        "settings.automations.automation.condition": "Bedingung",
        "settings.automations.automation.condition.astrofunction": "Astrofunktion",
        "settings.automations.automation.condition.astrofunction.sunrise": "Sonnenaufgang",
        "settings.automations.automation.condition.astrofunction.sunset": "Sonnenuntergang",
        "settings.automations.automation.condition.astrofunction.offset": "Abweichung (+\/- Min.)",
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
        "settings.automations.automation.condition.devices": "Ger\u00e4te",
        "settings.automations.automation.condition.devices.table.place": "Ort",
        "settings.automations.automation.condition.devices.table.device": "Ger\u00e4t",
        "settings.automations.automation.condition.devices.table.control": "Regler",
        "settings.automations.automation.condition.devices.table.input": "Input",
        "settings.automations.automation.condition.devices.table.operator": "Operator",
        "settings.automations.automation.condition.devices.table.value": "Wert",
        "settings.automations.automation.condition.devices.table.delete": "L\u00f6schen",
        "settings.automations.automation.condition.devices.add": "Hinzuf\u00fcgen",
        "settings.automations.automation.action": "Aktion",
        "settings.automations.automation.action.device": "Ger\u00e4t",
        "settings.automations.automation.action.profile": "Profil",
        "settings.automations.automation.save": "Speichern",
        "settings.automations.automation.delete": "L\u00f6schen",
        "settings.favorites": "Favoriten",
        "settings.favorites.mode": "Favoriten bearbeiten",
        "settings.favorites.description": "Favoriten hinzuf\u00fcgen und entfernen",
        "settings.log": "Log",
        "settings.log.description": "Zeige Browser-Log",
        "settings.sort": "Sortieren",
        "settings.sort.mode": "Elemente sortieren",
        "settings.sort.description": "Neuanordnen: Stockwerke, R\u00e4ume, Ger\u00e4te, Favoriten, Profile, ...",
        "settings.profiles": "Profile",
        "settings.profiles.new": "Neu",
        "settings.profiles.profile.name": "Name",
        "settings.profiles.profile.icon": "Icon",
        "settings.profiles.profile.locations": "Visualisierungsort",
        "settings.profiles.profile.locations.global": "Im Tab \"Profile\" anzeigen",
        "settings.profiles.profile.locations.favorite": "Favorit",
        "settings.profiles.profile.locations.floor": "Stockwerk",
        "settings.profiles.profile.locations.room": "R\u00e4ume",
        "settings.profiles.profile.locations.add": "Hinzuf\u00fcgen",
        "settings.profiles.profile.locations.remove": "Entfernen",
        "settings.profiles.profile.categories": "Ger\u00e4tekategorien",
        "settings.profiles.profile.roles": "Rolle",
        "settings.profiles.profile.roles.name": "Rolle",
        "settings.profiles.profile.roles.value": "Status",
        "settings.profiles.profile.roles.add": "Hinzuf\u00fcgen",
        "settings.profiles.profile.roles.remove": "Entfernen",
        "settings.profiles.profile.delete": "L\u00f6schen",
        "settings.profiles.profile.load": "Zugeh\u00f6rige Ger\u00e4te bearbeiten",
        "settings.profiles.profile.load.description": "Bitte w\u00e4hlen Sie jetzt die Ger\u00e4te aus, welche in das Profil aufgenommen werden sollen. Bitte setzen Sie vor dem Speichern den gew\u00fcnschten Ger\u00e4tezustand.<br \/><br \/>Hinweis: Um \u00c4nderungen am Profil live verfolgen zu k\u00f6nnen, werden alle relevanten Ger\u00e4te in den eingestellten Zustand gebracht.",
        "settings.profiles.profile.save": "Speichern",
        "settings.profiles.profile.edit": "Bearbeiten",
        "settings.profiles.profile.unsaved": "Sie haben noch nicht gespeicherte \u00c4nderungen. Trotzdem fortsetzen?",
        "settings.profiles.profile.abort": "Abbruch",
        "settings.profiles.profile.global_or_room": "Ein Profil muss entweder als \"global\" markiert, oder mindestens einem Raum zugewiesen sein. Bitte \u00e4ndern Sie ihre Konfiguration.",
        "settings.profiles.profile.name_required": "Ein Profil muss einen Namen besitzen. Bitte \u00e4ndern Sie ihre Konfiguration.",
        "settings.profiles.profile.delete_request": "Sind Sie sicher, dass Sie das Profil l\u00f6schen m\u00f6chten?",
        "settings.profiles.description": "Profile erstellen und l\u00f6schen",
        "settings.user": "Benutzer",
        "settings.user.description": "Verwalten",
        "settings.user.manage": "Benutzereinstellungen",
        "settings.user.manage.description": "Theme, Farben und andere Einstellungen",
        "settings.user.manage.twofa": "Zweifaktorauthentifizierung",
        "settings.user.manage.registerTwofa": "WebAuthn-Ger\u00e4t registrieren",
        "settings.user.manage.unregisterTwofa": "WebAuthn-Ger\u00e4t entfernen",
        "settings.user.manage.twofaRegistered": "WebAuthn ist aktiviert",
        "settings.user.manage.browserNotSupported": "Browser wird nicht unterst\u00fctzt",
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
        "settings.user.manage.unsaved": "Sie haben noch nicht gespeicherte \u00c4nderungen. Trotzdem fortsetzen?",
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
        "modemenu.profiles.button.settings": "Zur\u00fcck zur Profilkonfiguration",
        "modemenu.profiles.button.end": "Speichern",
        "modemenu.profiles.button.abort": "abbrechen",
        "refresh.message": "Bitte das Interface neu laden",
        "refresh.message.button.text": "neu laden",
        "logoff": "Abmelden",
        "disabled_text": "gesperrt",
        "hide": "ausblenden",
        "close": "schlie\u00dfen",
        "user_interaction.alert.button.true": "Best\u00e4tigen",
        "user_interaction.confirm.button.false": "Abbruch",
        "user_interaction.confirm.button.true": "Best\u00e4tigen",
        "draggable.confirm.invalid_keys": "Durch \u00c4nderung des Datenbestands ist keine plausible Darstellung der benutzerdefinierten Sortierung mehr m\u00f6glich. Um die aufgerufene Seite wieder darstellen zu k\u00f6nnen, ist ein Zur\u00fccksetzen der Sortierung f\u00fcr diese Seite zwingend notwendig.",
        "draggable.confirm.invalid_keys.button.reset": "Zur\u00fccksetzen",
        "draggable.confirm.invalid_keys.button.abort": "Abbrechen",
        "default": {
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
                    "noaccess": "No access permission",
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
            "settings.automations.automation.condition.astrofunction.offset": "Offset (+\/- Min.)",
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
            "settings.profiles.profile.load.description": "Please choose the devices you want to have added to the profile. Please adjust the device states of the wanted devices before saving.<br \/><br \/>Note: To showcase profiles changes live, all relevant devices are set to their configured value.",
            "settings.profiles.profile.save": "Save",
            "settings.profiles.profile.edit": "Edit",
            "settings.profiles.profile.delete_request": "Are you sure you want to delete this profile?",
            "settings.profiles.profile.unsaved": "You have unsaved changes. Continue anyway?",
            "settings.profiles.profile.abort": "Abort",
            "settings.profiles.profile.global_or_room": "A profile must either be marked as \"global\" or be assigned to a room. Please change your configuration.",
            "settings.profiles.profile.name_required": "A profile must have a name. Please change your configuration.",
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
        "0": {
            "-1": {
                "RAINALARM": [
                    {
                        "databaseId": 1,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 1,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 24,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 24,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 26,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 26,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 30,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 30,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 32,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 32,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WINDALARM": [
                    {
                        "databaseId": 2,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 2,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 21,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 21,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 27,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 27,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 28,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 28,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 30,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 30,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 31,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 31,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WINDOWALARM": [
                    {
                        "databaseId": 3,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 3,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 36,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 36,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    }
                ],
                "SOCKET1": [
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            },
                            {
                                "direction": 2,
                                "id": 400000
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            },
                            {
                                "direction": 2,
                                "id": 400000
                            }
                        ]
                    }
                ],
                "VENTILATION": [
                    {
                        "databaseId": 27,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 27,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ],
                "TEMPERATURE1": [
                    {
                        "databaseId": 35,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 35,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WINDOWCONTACT1": [
                    {
                        "databaseId": 35,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 35,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "WINDOWHANDLE1": [
                    {
                        "databaseId": 39,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 39,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 42,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 42,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "WINDOWHANDLE2": [
                    {
                        "databaseId": 43,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 43,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "WINDOWHANDLE3": [
                    {
                        "databaseId": 44,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 44,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "WINDOWHANDLE4": [
                    {
                        "databaseId": 45,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 45,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "WINDOWHANDLE5": [
                    {
                        "databaseId": 46,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 46,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "WINDOWHANDLE6": [
                    {
                        "databaseId": 47,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 47,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "WINDOWHANDLE7": [
                    {
                        "databaseId": 48,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 48,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "WINDOWHANDLE8": [
                    {
                        "databaseId": 49,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 49,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301002
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "DOORCONTACT": [
                    {
                        "databaseId": 50,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301000
                            },
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301001,
                                "invert": true
                            }
                        ]
                    },
                    {
                        "databaseId": 50,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301000
                            },
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301001,
                                "invert": true
                            }
                        ]
                    }
                ],
                "DOORHANDLE": [
                    {
                        "databaseId": 51,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301000
                            },
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301001,
                                "invert": true
                            }
                        ]
                    },
                    {
                        "databaseId": 51,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301000
                            },
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301001,
                                "invert": true
                            }
                        ]
                    }
                ],
                "DOORLOCK": [
                    {
                        "databaseId": 52,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301003
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    },
                    {
                        "databaseId": 52,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 300000
                            },
                            {
                                "direction": 2,
                                "id": 301003
                            },
                            {
                                "direction": 2,
                                "id": 301000
                            }
                        ]
                    }
                ],
                "VENTILATIONMODE": [
                    {
                        "databaseId": 53,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 200000
                            },
                            {
                                "direction": 2,
                                "id": 202001
                            },
                            {
                                "direction": 2,
                                "id": 202000
                            }
                        ]
                    },
                    {
                        "databaseId": 53,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 200000
                            },
                            {
                                "direction": 2,
                                "id": 202001
                            },
                            {
                                "direction": 2,
                                "id": 202000
                            }
                        ]
                    }
                ],
                "DIMMER4": [
                    {
                        "databaseId": 54,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100000
                            },
                            {
                                "direction": 2,
                                "id": 101001
                            }
                        ]
                    },
                    {
                        "databaseId": 54,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100000
                            },
                            {
                                "direction": 2,
                                "id": 101001
                            }
                        ]
                    }
                ],
                "LIGHT1": [
                    {
                        "databaseId": 55,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100000
                            },
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 55,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100000
                            },
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ],
                "DIMMER1": [
                    {
                        "databaseId": 55,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 55,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    }
                ],
                "LIGHT2": [
                    {
                        "databaseId": 56,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100000
                            },
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 56,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100000
                            },
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ],
                "DIMMER2": [
                    {
                        "databaseId": 56,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 56,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    }
                ],
                "LIGHT3": [
                    {
                        "databaseId": 57,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100000
                            },
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 57,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100000
                            },
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ],
                "COLOR": [
                    {
                        "databaseId": 57,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 57,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    }
                ],
                "TEMPERATURE4": [
                    {
                        "databaseId": 58,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 58,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "": [
                    {
                        "databaseId": 71,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 73,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 76,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ]
            }
        },
        "1": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 4,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 4,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "2": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 5,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 5,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "3": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 6,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 6,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "4": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 7,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 7,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "5": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 8,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 8,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "6": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 9,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 9,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "7": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 10,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 10,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "8": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 11,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 11,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "9": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 12,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 400000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 12,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 400000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "10": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 13,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 13,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "11": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 14,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 14,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "12": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 15,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 400000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 15,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 400000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "13": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 16,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 16,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "14": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 17,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 17,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "15": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 18,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 18,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 100000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "16": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 19,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 400000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 19,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 400000,
                                "level": 0
                            }
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
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 3,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 3,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 3,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 3,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 3,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "LEVEL": [
                    {
                        "databaseId": 21,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
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
                    },
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 2,
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
                    },
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "LEVEL": [
                    {
                        "databaseId": 22,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 22,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 22,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 22,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "17": {
            "1": {
                "UP": [
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "20": {
            "1": {
                "UP": [
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    }
                ],
                "LEVEL": [
                    {
                        "databaseId": 25,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600004,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 25,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600004,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 26,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600004,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    },
                    {
                        "databaseId": 26,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600004,
                                "level": 2
                            },
                            {
                                "direction": 2,
                                "id": 600000,
                                "level": 0
                            }
                        ]
                    }
                ]
            }
        },
        "21": {
            "1": {
                "UP": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "LEVEL": [
                    {
                        "databaseId": 27,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 27,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "22": {
            "1": {
                "UP": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "LEVEL": [
                    {
                        "databaseId": 28,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 28,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "23": {
            "1": {
                "UP": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "LEVEL": [
                    {
                        "databaseId": 29,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 29,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 501004,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "25": {
            "1": {
                "UP": [
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "LEVEL": [
                    {
                        "databaseId": 30,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 30,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502004,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "28": {
            "1": {
                "UP": [
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "LEVEL": [
                    {
                        "databaseId": 31,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 31,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502004,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "26": {
            "1": {
                "UP": [
                    {
                        "databaseId": 32,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 32,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 34,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 34,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 32,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 32,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    },
                    {
                        "databaseId": 34,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 34,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 32,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 32,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 34,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 34,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "LEVEL": [
                    {
                        "databaseId": 32,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 32,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 34,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502004,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 34,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502004,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "27": {
            "1": {
                "UP": [
                    {
                        "databaseId": 33,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 33,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 33,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 33,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 33,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 33,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 500000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 502002,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "78": {
            "1": {
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 35,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 35,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 35,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 35,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "79": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 36,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 36,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 36,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 36,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 36,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 36,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "80": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 37,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 37,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 37,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 37,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 37,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 37,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "81": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 38,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 38,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 38,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 38,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 38,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 38,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "82": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 39,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 39,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 39,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 39,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 39,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 39,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "83": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 40,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 40,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201001,
                                "level": 2
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 40,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 40,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201002,
                                "level": 2
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 40,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    },
                    {
                        "databaseId": 40,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201000,
                                "level": 1
                            },
                            {
                                "direction": 2,
                                "id": 200000,
                                "level": 0
                            },
                            {
                                "direction": 2,
                                "id": 201003,
                                "level": 2
                            }
                        ]
                    }
                ]
            }
        },
        "1342177280": [
            {
                "32538e48.7e3a92": [
                    {
                        "databaseId": 71,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "db0c575e.f9cfe8": [
                    {
                        "databaseId": 72,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "62c8cbce.245474": [
                    {
                        "databaseId": 73,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "9bbb81f4.181ae": [
                    {
                        "databaseId": 74,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "bee19580.5386c8": [
                    {
                        "databaseId": 75,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "ca8796fa.c4e468": [
                    {
                        "databaseId": 76,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ]
            }
        ],
        "1342177281": [
            {
                "db0c575e.f9cfe8": [
                    {
                        "databaseId": 72,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "9bbb81f4.181ae": [
                    {
                        "databaseId": 74,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "bee19580.5386c8": [
                    {
                        "databaseId": 75,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ]
            }
        ]
    },
    "map_automation": {
        "devices": [],
        "profiles": []
    }
}
';
