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
           "icon": "broom_1"
       },
       "2": {
           "id": "2",
           "name": "Bad",
           "floor": "1",
           "icon": "bathtube_1"
       },
       "3": {
           "id": "3",
           "name": "Diele",
           "floor": "3",
           "icon": "floor_1"
       },
       "4": {
           "id": "4",
           "name": "Garage",
           "floor": "4",
           "icon": "garage_1"
       },
       "5": {
           "id": "5",
           "name": "Gäste WC",
           "floor": "2",
           "icon": "wc_1"
       },
       "6": {
           "id": "6",
           "name": "Kind",
           "floor": "2",
           "icon": "hokeyplayer_1"
       },
       "7": {
           "id": "7",
           "name": "Loggia",
           "floor": "3",
           "icon": "balcony_1"
       },
       "8": {
           "id": "8",
           "name": "Lüftung",
           "floor": "4",
           "icon": "ventilator_2"
       },
       "9": {
           "id": "9",
           "name": "Schlafen",
           "floor": "1",
           "icon": "bed_1"
       },
       "10": {
           "id": "10",
           "name": "Technikraum",
           "floor": "4",
           "icon": "tools_1"
       },
       "11": {
           "id": "11",
           "name": "Waschraum",
           "floor": "4",
           "icon": "washer_1"
       },
       "12": {
           "id": "12",
           "name": "Wohnbereich",
           "floor": "1",
           "icon": "sofa_1"
       }
   },
   "systemVariables": [
       {
           "name": "HUMIDITY",
           "type": "float",
           "value": 51.51
       },
       {
           "name": "TEMPERATURE",
           "type": "float",
           "value": 21.21
       },
       {
           "name": "REQUEST",
           "type": "bool",
           "value": false
       },
       {
           "name": "VENTILATION",
           "type": "bool",
           "value": false
       },
       {
           "name": "WINDALARM",
           "type": "bool",
           "value": false
       },
       {
           "name": "WINDOWALARM",
           "type": "bool",
           "value": false
       },
       {
           "name": "LIGHT",
           "type": "bool",
           "value": false
       }
   ],
   "roles": [
       {
           "id": 101000,
           "metadata": {
               "ui": {
                   "simpleCreationInfo": {
                       "element": "Base.lightingBrightness",
                       "roleIdsIn": [
                           [
                               101000
                           ]
                       ],
                       "roleIdsOut": [
                           [
                               101000
                           ]
                       ],
                       "metadata": {
                           "l2_only": true
                       }
                   },
                   "icon": "light_dim_1",
                   "invokeOutputs": [
                       {
                           "value": 0,
                           "buttonText": "Zentral aus"
                       }
                   ],
                   "translations": {
                       "de-DE": {
                           "0": "aus",
                           "100": "an"
                       },
                       "en-US": {
                           "0": "off",
                           "100": "on"
                       }
                   }
               }
           }
       },
       {
           "id": 502000,
           "metadata": {
               "ui": {
                   "simpleCreationInfo": [
                       {
                           "element": "Base.shadingButtonsPositionSlats",
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
                           ],
                           "metadata": {
                               "l2_action": {
                                   "control": 0,
                                   "input": 0
                               }
                           }
                       },
                       {
                           "element": "Base.shadingButtonsUpDown",
                           "roleIdsIn": [
                               [
                                   502001
                               ]
                           ],
                           "roleIdsOut": [
                               [
                                   502001
                               ]
                           ],
                           "metadata": {
                               "l2_action": {
                                   "control": 0,
                                   "input": 0
                               }
                           }
                       }
                   ],
                   "icon": "awning_1",
                   "invokeOutputs": [
                       {
                           "roleId": 502001,
                           "value": false,
                           "buttonText": "Zentral auf"
                       },
                       {
                           "roleId": 502002,
                           "value": true,
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
                               502004
                           ]
                       }
                   ]
               }
           }
       },
       {
           "id": 600000,
           "metadata": {
               "ui": {
                   "simpleCreationInfo": [
                       {
                           "element": "Base.windowButtonsUpDown",
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
                           ],
                           "metadata": {
                               "l2_action": {
                                   "control": 0,
                                   "input": 0
                               }
                           }
                       }
                   ],
                   "icon": "window_1",
                   "invokeOutputs": [
                       {
                           "roleId": 600001,
                           "value": false,
                           "buttonText": "Zentral auf"
                       },
                       {
                           "roleId": 600002,
                           "value": true,
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
                               600004
                           ]
                       }
                   ]
               }
           }
       }
   ],
   "roles2var": [
       {
           "deviceId": 0,
           "channel": -1,
           "varName": "LIGHT",
           "roleId": 100001
       },
       {
           "deviceId": 1,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 2,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 3,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 4,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 5,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 6,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 7,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 8,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 9,
           "channel": 1,
           "varName": "STATE",
           "roleId": 400001
       },
       {
           "deviceId": 10,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 11,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 12,
           "channel": 1,
           "varName": "STATE",
           "roleId": 400001
       },
       {
           "deviceId": 13,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 14,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 15,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 16,
           "channel": 1,
           "varName": "STATE",
           "roleId": 400001
       },
       {
           "deviceId": 17,
           "channel": 1,
           "varName": "UP",
           "roleId": 600001
       },
       {
           "deviceId": 17,
           "channel": 1,
           "varName": "DOWN",
           "roleId": 600002
       },
       {
           "deviceId": 17,
           "channel": 1,
           "varName": "CURRENT_POSITION",
           "roleId": 600004
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
           "roleId": 501004
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
           "roleId": 501004
       },
       {
           "deviceId": 20,
           "channel": 1,
           "varName": "UP",
           "roleId": 600001
       },
       {
           "deviceId": 20,
           "channel": 1,
           "varName": "DOWN",
           "roleId": 600002
       },
       {
           "deviceId": 20,
           "channel": 1,
           "varName": "CURRENT_POSITION",
           "roleId": 600004
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
           "roleId": 501004
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
           "roleId": 501004
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
           "roleId": 501004
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
           "roleId": 501004
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
           "roleId": 502004
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
           "roleId": 502004
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
           "roleId": 100001
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
           "roleId": 400001
       },
       {
           "deviceId": 92,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 93,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
       },
       {
           "deviceId": 94,
           "channel": 1,
           "varName": "STATE",
           "roleId": 100001
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
                           "name": "LIGHT"
                       }
                   ]
               ],
               "outputPeers": [
                   [
                       {
                           "peer": 0,
                           "channel": -1,
                           "name": "LIGHT"
                       }
                   ]
               ],
               "label": "Licht SystemVar",
               "room": 3
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
               ]
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
           "Base.windowButtonsUpDown",
           {
               "inputPeers": [
                   [
                       {
                           "peer": 17,
                           "channel": 1,
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 17,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
                       }
                   ]
               ],
               "outputPeers": [
                   [
                       {
                           "peer": 17,
                           "channel": 1,
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 17,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
                       }
                   ]
               ],
               "label": "Dachflächenfenster",
               "room": 3,
               "categories": [
                   2
               ]
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
                           "name": "UP",
                           "value": 1
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "STOP",
                           "value": 2
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "DOWN",
                           "value": 3
                       }
                   ],
                   [
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "UP",
                           "value": 1
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "STOP",
                           "value": 2
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "DOWN",
                           "value": 1
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "DOWN",
                           "value": 2
                       }
                   ],
                   [
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
                           "name": "UP",
                           "value": 1
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "STOP",
                           "value": 2
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "DOWN",
                           "value": 3
                       }
                   ],
                   [
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "UP",
                           "value": 1
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "STOP",
                           "value": 2
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "DOWN",
                           "value": 1
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "DOWN",
                           "value": 2
                       }
                   ],
                   [
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 18,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
                    "event_hooks": [
                        {
                            "trigger": ["0", "-1", "WINDALARM"],
                            "disable": {
                                "0": true,
                                "1": true,
                                "2": true,
                                "3": true,
                                "4": true,
                                "5": true,
                                "__dummy__": false
                            },
                            "condition": {
                                "operator": "e",
                                "value": true
                            }
                        }
                    ]
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
                           "name": "MOVE",
                           "value": false
                       },
                       {
                           "peer": 19,
                           "channel": 1,
                           "name": "STEP",
                           "value": false
                       },
                       {
                           "peer": 19,
                           "channel": 1,
                           "name": "MOVE",
                           "value": true
                       }
                   ],
                   [
                       {
                           "peer": 19,
                           "channel": 1,
                           "name": "CURRENT_POSITION"
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
                           "name": "MOVE",
                           "value": false
                       },
                       {
                           "peer": 19,
                           "channel": 1,
                           "name": "STEP",
                           "value": false
                       },
                       {
                           "peer": 19,
                           "channel": 1,
                           "name": "MOVE",
                           "value": true
                       }
                   ],
                   [
                       {
                           "peer": 19,
                           "channel": 1,
                           "name": "CURRENT_POSITION"
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
               "label": "Rollladen KNX",
               "room": 6,
               "categories": [
                   2
               ]
           }
       ],
       [
           "Base.windowButtonsPosition",
           {
               "inputPeers": [
                   [
                       {
                           "peer": 20,
                           "channel": 1,
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 20,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 20,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 20,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 20,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
               "label": "Fenstermotor",
               "room": 2,
               "categories": [
                   2
               ]
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
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 21,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 21,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
                       }
                   ],
                   [
                       {
                           "peer": 21,
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
                           "peer": 21,
                           "channel": 1,
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 21,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 21,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
                       }
                   ],
                   [
                       {
                           "peer": 21,
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
               "label": "Rollladen links",
               "room": 9,
               "categories": [
                   2
               ],
               "metadata": {
                   "event_hooks": [
                       {
                           "trigger": ["0", "-1", "WINDALARM"],
                           "disable": {
                               "0": true,
                               "1": true,
                               "2": true,
                               "__dummy__": false
                           },
                           "condition": {
                               "operator": "e",
                               "value": true
                           }
                       }
                   ]
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
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 22,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 22,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
                       }
                   ],
                   [
                       {
                           "peer": 22,
                           "channel": 1,
                           "name": "CURRENT_POSITION"
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
                           "peer": 22,
                           "channel": 1,
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 22,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 22,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
                       }
                   ],
                   [
                       {
                           "peer": 22,
                           "channel": 1,
                           "name": "CURRENT_POSITION"
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
               "label": "Rollladen rechts",
               "room": 9,
               "categories": [
                   2
               ],
               "metadata": {
                   "event_hooks": [
                       {
                           "trigger": ["0", "-1", "WINDALARM"],
                           "disable": {
                               "0": true,
                               "1": true,
                               "__dummy__": false
                           },
                           "condition": {
                               "operator": "e",
                               "value": true
                           }
                       }
                   ]
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
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 23,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 23,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 23,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 23,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
               ]
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
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 24,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 24,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 24,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 24,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
               ]
           }
       ],
       [
           "Base.shadingAwningButtonsPosition",
           {
               "inputPeers": [
                   [
                       {
                           "peer": 25,
                           "channel": 1,
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 25,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 25,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 25,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 25,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
               ]
           }
       ],
       [
           "Base.shadingAwningButtonsPosition",
           {
               "inputPeers": [
                   [
                       {
                           "peer": 26,
                           "channel": 1,
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 26,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 26,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
                           "name": "UP",
                           "value": true
                       },
                       {
                           "peer": 26,
                           "channel": 1,
                           "name": "STOP",
                           "value": true
                       },
                       {
                           "peer": 26,
                           "channel": 1,
                           "name": "DOWN",
                           "value": true
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
               ]
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
                   "event_hooks": [
                        {
                            "trigger": ["0", "-1", "WINDOWALARM"],
                            "disable": {
                                "1": true,
                                "2": true,
                                "__dummy__": false
                            },
                            "condition": {
                                "operator": "e",
                                "value": true
                            }
                        },
                        {
                            "trigger": ["78", "1", "CONTROL_MODE"],
                            "disable": {
                                "1": true,
                                "__dummy__": false
                            },
                            "condition": {
                                "operator": "e",
                                "value": 0
                            }
                        }
                   ]
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
                   "event_hooks": [
                        {
                            "trigger": ["79", "1", "CONTROL_MODE"],
                            "disable": {
                                "1": true,
                                "__dummy__": false
                            },
                            "condition": {
                                "operator": "e",
                                "value": 0
                            }
                        }
                   ]
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
                   "event_hooks": [
                        {
                            "trigger": ["80", "1", "CONTROL_MODE"],
                            "disable": {
                                "1": true,
                                "__dummy__": false
                            },
                            "condition": {
                                "operator": "e",
                                "value": 0
                            }
                        }
                   ]
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
                   "event_hooks": [
                        {
                            "trigger": ["81", "1", "CONTROL_MODE"],
                            "disable": {
                                "1": true,
                                "__dummy__": false
                            },
                            "condition": {
                                "operator": "e",
                                "value": 0
                            }
                        }
                   ]
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
                   "event_hooks": [
                        {
                            "trigger": ["82", "1", "CONTROL_MODE"],
                            "disable": {
                                "1": true,
                                "__dummy__": false
                            },
                            "condition": {
                                "operator": "e",
                                "value": 0
                            }
                        }
                   ]
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
                   "event_hooks": [
                        {
                            "trigger": ["83", "1", "CONTROL_MODE"],
                            "disable": {
                                "1": true,
                                "__dummy__": false
                            },
                            "condition": {
                                "operator": "e",
                                "value": 0
                            }
                        }
                   ]
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
               ]
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
               ]
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
   ],
   "devices": [
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Diele",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0001",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Kind",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0002",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Decke Bad",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0003",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Spiegel Bad",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0004",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Schlafen",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0005",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht c Wohn",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0006",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht b Wohn",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0007",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht d Wohn",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0008",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Steckdose e Wohn",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0009",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Abstellraum",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0010",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Loggia",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0011",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Steckdose Loggia",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0012",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Technikraum",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0013",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Decke GÃ¤ste WC",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0014",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Spiegel GÃ¤ste WC",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0015",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Steckdose Waschraum",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0016",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Rollladen Diele",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0017",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Rollladen links Kind",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0018",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Rollladen rechts Kind",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0019",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Rollladen Bad",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0020",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Rollladen links Schlafen",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0021",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Rollladen rechts Schlafen",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0022",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Rollladen Wohnen",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0023",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Rollladen Essen",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0024",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Markise Wohnen",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0025",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "JA Markise Essen",
           "TYPE": "VirtualBlind",
           "TYPE_ID": "0xe011",
           "SERIALNUMBER": "VirtBl0026",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "FG Fenster Diele",
           "TYPE": "VirtualWindowHandle",
           "TYPE_ID": "0xf101",
           "SERIALNUMBER": "VirtWin060",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "FG Fenster links Kind",
           "TYPE": "VirtualWindowHandle",
           "TYPE_ID": "0xf101",
           "SERIALNUMBER": "VirtWin061",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "FG Fenster recht Kind",
           "TYPE": "VirtualWindowHandle",
           "TYPE_ID": "0xf101",
           "SERIALNUMBER": "VirtWin062",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "FG Fenster Bad",
           "TYPE": "VirtualWindowHandle",
           "TYPE_ID": "0xf101",
           "SERIALNUMBER": "VirtWin063",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "FG Fenster links Schlafen",
           "TYPE": "VirtualWindowHandle",
           "TYPE_ID": "0xf101",
           "SERIALNUMBER": "VirtWin064",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "FG Fenster rechts Schlafen",
           "TYPE": "VirtualWindowHandle",
           "TYPE_ID": "0xf101",
           "SERIALNUMBER": "VirtWin065",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "FG Fenster links KÃ¼che",
           "TYPE": "VirtualWindowHandle",
           "TYPE_ID": "0xf101",
           "SERIALNUMBER": "VirtWin066",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "FG Fenster rechts KÃ¼che",
           "TYPE": "VirtualWindowHandle",
           "TYPE_ID": "0xf101",
           "SERIALNUMBER": "VirtWin067",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Virtual Logic Module",
           "TYPE": "VirtualHeating",
           "TYPE_ID": "0x1002",
           "SERIALNUMBER": "VirtLog001",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Riegelkontakt TÃ¼r Diele",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtWin069",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Fenster Wohnen",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtWind70",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Sensor Diele",
           "TYPE": "VirtualSensor",
           "TYPE_ID": "0xa011",
           "SERIALNUMBER": "VirtSens71",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Sensor Kind",
           "TYPE": "VirtualSensor",
           "TYPE_ID": "0xa011",
           "SERIALNUMBER": "VirtSens72",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Sensor Bad",
           "TYPE": "VirtualSensor",
           "TYPE_ID": "0xa011",
           "SERIALNUMBER": "VirtSens73",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Sensor Schlafen",
           "TYPE": "VirtualSensor",
           "TYPE_ID": "0xa011",
           "SERIALNUMBER": "VirtSens74",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Sensor Wohnen",
           "TYPE": "VirtualSensor",
           "TYPE_ID": "0xa011",
           "SERIALNUMBER": "VirtSens75",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Sensor GÃ¤ste WC",
           "TYPE": "VirtualSensor",
           "TYPE_ID": "0xa011",
           "SERIALNUMBER": "VirtSens76",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Heizungsregler Diele",
           "TYPE": "Heizungsregler",
           "TYPE_ID": "0x1001",
           "SERIALNUMBER": "VirtHeat78",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Heizungsregler Kind",
           "TYPE": "Heizungsregler",
           "TYPE_ID": "0x1001",
           "SERIALNUMBER": "VirtHeat79",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Heizungsregler Bad",
           "TYPE": "Heizungsregler",
           "TYPE_ID": "0x1001",
           "SERIALNUMBER": "VirtHeat80",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Heizungsregler Schlafen",
           "TYPE": "Heizungsregler",
           "TYPE_ID": "0x1001",
           "SERIALNUMBER": "VirtHeat81",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Heizungsregler Wohnen",
           "TYPE": "Heizungsregler",
           "TYPE_ID": "0x1001",
           "SERIALNUMBER": "VirtHeat82",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Heizungsregler WC Gast",
           "TYPE": "Heizungsregler",
           "TYPE_ID": "0x1001",
           "SERIALNUMBER": "VirtHeat83",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "SA Licht Unterschrank KÃ¼che",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0084",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Lueftung",
           "TYPE": "Lueftung",
           "TYPE_ID": "0x1502",
           "SERIALNUMBER": "Lueftung01",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Fenster Essen",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "Virtwind85",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Steckdose Garage",
           "TYPE": "VirtualSwitch",
           "TYPE_ID": "0xa001",
           "SERIALNUMBER": "VirtSw0091",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Dimmer Wohnen",
           "TYPE": "VirtualDimmer",
           "TYPE_ID": "0xf001",
           "SERIALNUMBER": "VirtDi0092",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Dimmer Kinder",
           "TYPE": "VirtualDimmer",
           "TYPE_ID": "0xf001",
           "SERIALNUMBER": "VirtDi0093",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "Dimmer Schlafen",
           "TYPE": "VirtualDimmer",
           "TYPE_ID": "0xf001",
           "SERIALNUMBER": "VirtDi0094",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       },
       {
           "ADDRESS": -1,
           "FAMILY": 254,
           "NAME": "OpenWeatherMap",
           "TYPE": "OpenWeatherMap",
           "TYPE_ID": "0x100",
           "SERIALNUMBER": "ESY5110366",
           "FIRMWAREVERSION": -1,
           "INTERFACEID": ""
       }
   ]
}
';
