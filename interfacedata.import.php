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
            "icon": "rockinghorse_1"
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
        },
        "13": {
            "id": "13",
            "name": "Stockwerkslos",
            "icon": "notification_update_1"
        },
        "14": {
            "id": "14",
            "name": "Baby",
            "floor": "2",
            "icon": "child_1"
        },
        "15": {
            "id": "15",
            "name": "Bad",
            "floor": "2",
            "icon": "shower_1"
        },
        "16": {
            "id": "16",
            "name": "Studio",
            "floor": "3",
            "icon": "library_1"
        },
        "17": {
            "id": "17",
            "name": "Fitness",
            "floor": "3",
            "icon": "sport_1"
        },
        "18": {
            "id": "18",
            "name": "Leer",
            "icon": "lock_1"
        }
    },
    "systemVariables": [
        {
            "name": "LAST_DATA",
            "type": "date",
            "value": "01.12.2020"
        },
        {
            "name": "CITY",
            "type": "string",
            "value": "Berlin"
        },
        {
            "name": "CITY_LONGITUDE",
            "type": "float",
            "value": 7.42
        },
        {
            "name": "CITY_LATITUDE",
            "type": "float",
            "value": 47.67
        },
        {
            "name": "SUNRISE_STRING",
            "type": "string",
            "value": "05:01:34"
        },
        {
            "name": "SUNSET_STRING",
            "type": "string",
            "value": "20:01:34"
        },
        {
            "name": "DUSK",
            "type": "int",
            "value": "400"
        },
        {
            "name": "WEATHER",
            "type": "string",
            "value": "Mist"
        },
        {
            "name": "WEATHER_DESCRIPTION",
            "type": "string",
            "value": "Trüb"
        },
        {
            "name": "WEATHER_ICON",
            "type": "string",
            "value": "50d"
        },
        {
            "name": "WEATHER_ICON_URL",
            "type": "string",
            "value": "http://openweathermap.org/img/w/50d.png"
        },
        {
            "name": "PRESSURE",
            "type": "float",
            "value": 1014,
            "unit": "hPa"
        },
        {
            "name": "WIND_SPEED",
            "type": "float",
            "value": 2.6,
            "unit": "meter/sec"
        },
        {
            "name": "WIND_GUST",
            "type": "float",
            "value": 0
        },
        {
            "name": "WIND_DIRECTION",
            "type": "float",
            "value": 350,
            "unit": "degrees"
        },
        {
            "name": "RAIN_3H",
            "type": "float",
            "value": 0,
            "unit": "mm"
        },
        {
            "name": "RAIN",
            "type": "bool",
            "value": 0
        },
        {
            "name": "SNOW_3H",
            "type": "float",
            "value": 0,
            "unit": "volume"
        },
        {
            "name": "CLOUD_COVERAGE",
            "type": "float",
            "value": 90,
            "unit": "%"
        },
        {
            "name": "HUMIDITY",
            "type": "float",
            "value": 51.123456789
        },
        {
            "name": "TEMPERATURE",
            "type": "float",
            "value": 21.123456789
        },
        {
            "name": "HUMIDITY1",
            "type": "float",
            "value": 51.123456789
        },
        {
            "name": "TEMPERATURE1",
            "type": "float",
            "value": 21.123456789
        },
        {
            "name": "HUMIDITY2",
            "type": "float",
            "value": 51.123456789
        },
        {
            "name": "TEMPERATURE2",
            "type": "float",
            "value": 21.123456789
        },
        {
            "name": "HUMIDITY3",
            "type": "float",
            "value": 51.123456789
        },
        {
            "name": "TEMPERATURE3",
            "type": "float",
            "value": 21.123456789
        },
        {
            "name": "HUMIDITY4",
            "type": "float",
            "value": 51.123456789
        },
        {
            "name": "TEMPERATURE4",
            "type": "float",
            "value": 21.123456789
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
            "name": "VENTILATIONMODE",
            "type": "float",
            "value": 2
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
            "name": "RAINALARM",
            "type": "bool",
            "value": false
        },
        {
            "name": "LIGHT",
            "type": "bool",
            "value": false
        },
        {
            "name": "LIGHT1",
            "type": "bool",
            "value": false
        },
        {
            "name": "LIGHT2",
            "type": "bool",
            "value": false
        },
        {
            "name": "LIGHT3",
            "type": "bool",
            "value": false
        },
        {
            "name": "LIGHT4",
            "type": "bool",
            "value": false
        },
        {
            "name": "DIMMER1",
            "type": "float",
            "value": 12
        },
        {
            "name": "DIMMER2",
            "type": "float",
            "value": 12
        },
        {
            "name": "DIMMER3",
            "type": "float",
            "value": 12
        },
        {
            "name": "DIMMER4",
            "type": "float",
            "value": 12
        },
        {
            "name": "SOCKET1",
            "type": "int",
            "value": 0
        },
        {
            "name": "COLOR",
            "type": "string",
            "value": "#ffff00"
        },
        {
            "name": "FUNCTION",
            "type": "int",
            "value": 0
        },
        {
            "name": "SPEED",
            "type": "int",
            "value": 0
        },
        {
            "name": "DOORCONTACT",
            "type": "int",
            "value": 0
        },
        {
            "name": "DOORLOCK",
            "type": "int",
            "value": 0
        },
        {
            "name": "DOORHANDLE",
            "type": "int",
            "value": 0
        },
        {
            "name": "WINDOWCONTACT1",
            "type": "int",
            "value": 0
        },
        {
            "name": "WINDOWHANDLE1",
            "type": "int",
            "value": 0
        },
        {
            "name": "WINDOWHANDLE2",
            "type": "int",
            "value": 0
        },
        {
            "name": "WINDOWHANDLE3",
            "type": "int",
            "value": 0
        },
        {
            "name": "WINDOWHANDLE4",
            "type": "int",
            "value": 0
        },
        {
            "name": "WINDOWHANDLE5",
            "type": "int",
            "value": 0
        },
        {
            "name": "WINDOWHANDLE6",
            "type": "int",
            "value": 0
        },
        {
            "name": "WINDOWHANDLE7",
            "type": "int",
            "value": 0
        },
        {
            "name": "WINDOWHANDLE8",
            "type": "int",
            "value": 0
        }
    ],
    "roles": [],
    "roles2var": [
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "VENTILATIONMODE",
            "roleId": 202001
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "LIGHT",
            "roleId": 100001
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "LIGHT1",
            "roleId": 100001
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "LIGHT2",
            "roleId": 100001
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "LIGHT3",
            "roleId": 100001
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "LIGHT4",
            "roleId": 100001
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "SOCKET1",
            "roleId": 400001
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
            "varName": "LEVEL",
            "roleId": [
                600004
            ]
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
            "varName": "LEVEL",
            "roleId": [
                501004
            ]
        },
        {
            "deviceId": 19,
            "channel": 1,
            "varName": "MOVE",
            "roleId": 501001
        },
        {
            "deviceId": 19,
            "channel": 1,
            "varName": "STEP",
            "roleId": 501002
        },
        {
            "deviceId": 19,
            "channel": 1,
            "varName": "LEVEL",
            "roleId": [
                501004
            ]
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
            "varName": "LEVEL",
            "roleId": [
                600004
            ]
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
            "varName": "LEVEL",
            "roleId": [
                501004
            ]
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
            "varName": "LEVEL",
            "roleId": [
                501004
            ]
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
            "varName": "LEVEL",
            "roleId": [
                501004
            ]
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
            "varName": "LEVEL",
            "roleId": [
                501004
            ]
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
            "varName": "LEVEL",
            "roleId": [
                502004
            ]
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
            "varName": "LEVEL",
            "roleId": [
                502004
            ]
        },
        {
            "deviceId": 27,
            "channel": 1,
            "varName": "UP",
            "roleId": 502001
        },
        {
            "deviceId": 27,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 502002
        },
        {
            "deviceId": 27,
            "channel": 1,
            "varName": "LEVEL",
            "roleId": [
                502004
            ]
        },
        {
            "deviceId": 28,
            "channel": 1,
            "varName": "UP",
            "roleId": 502001
        },
        {
            "deviceId": 28,
            "channel": 1,
            "varName": "DOWN",
            "roleId": 502002
        },
        {
            "deviceId": 28,
            "channel": 1,
            "varName": "LEVEL",
            "roleId": [
                502004
            ]
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "WINDOWCONTACT1",
            "roleId": 301002
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "WINDOWHANDLE1",
            "roleId": 301002
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "WINDOWHANDLE2",
            "roleId": 301002
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "WINDOWHANDLE3",
            "roleId": 301002
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "WINDOWHANDLE4",
            "roleId": 301002
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "WINDOWHANDLE5",
            "roleId": 301002
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "WINDOWHANDLE6",
            "roleId": 301002
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "WINDOWHANDLE7",
            "roleId": 301002
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "WINDOWHANDLE8",
            "roleId": 301002
        },
        {
            "name": "door contact",
            "deviceId": 0,
            "channel": -1,
            "varName": "DOORCONTACT",
            "roleId": 301001,
            "invert": true
        },
        {
            "name": "door handle",
            "deviceId": 0,
            "channel": -1,
            "varName": "DOORHANDLE",
            "roleId": 301001,
            "invert": true
        },
        {
            "name": "door lock",
            "deviceId": 0,
            "channel": -1,
            "varName": "DOORLOCK",
            "roleId": 301003
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
            "roleId": [
                201003
            ]
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
            "roleId": [
                201003
            ]
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
            "roleId": [
                201003
            ]
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
            "roleId": [
                201003
            ]
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
            "roleId": [
                201003
            ]
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
            "roleId": [
                201003
            ]
        },
        {
            "deviceId": 0,
            "channel": -1,
            "varName": "DIMMER4",
            "roleId": 101001
        }
    ],
    "profiles": [
        [
            {
                "en-US": "central off",
                "de-DE": "zentral aus"
            },
            {
                "id": 1,
                "icon": "power_1",
                "editable": false,
                "locations": [],
                "global": false,
                "categories": [
                    0
                ],
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
                "values": []
            }
        ],
        [
            {
                "en-US": "central frost",
                "de-DE": "zentral frostschutz"
            },
            {
                "id": 2,
                "icon": "thermometer_1",
                "editable": false,
                "locations": [],
                "global": false,
                "categories": [
                    1
                ],
                "roles": [
                    {
                        "role": 201003,
                        "value": 0
                    }
                ],
                "values": []
            }
        ],
        [
            {
                "en-US": "central comfort",
                "de-DE": "zentral komfort"
            },
            {
                "id": 3,
                "icon": "thermometer_1",
                "editable": false,
                "locations": [],
                "global": false,
                "categories": [
                    1
                ],
                "roles": [
                    {
                        "role": 201003,
                        "value": 1
                    }
                ],
                "values": []
            }
        ],
        [
            {
                "en-US": "central spar",
                "de-DE": "zentral spar"
            },
            {
                "id": 4,
                "icon": "thermometer_1",
                "editable": false,
                "locations": [],
                "global": false,
                "categories": [
                    1
                ],
                "roles": [
                    {
                        "role": 201003,
                        "value": 2
                    }
                ],
                "values": []
            }
        ],
        [
            {
                "en-US": "central off",
                "de-DE": "zentral aus"
            },
            {
                "id": 8,
                "icon": "power_1",
                "editable": false,
                "locations": [],
                "global": false,
                "categories": [
                    5
                ],
                "roles": [
                    {
                        "role": 400001,
                        "value": false
                    }
                ],
                "values": []
            }
        ],
        [
            {
                "en-US": "central retract",
                "de-DE": "zentral einfahren"
            },
            {
                "id": 7,
                "icon": "arrow_up_1",
                "editable": false,
                "locations": [],
                "global": false,
                "categories": [
                    6
                ],
                "roles": [
                    {
                        "role": 501000,
                        "value": true
                    }
                ],
                "values": []
            }
        ],
        [
            {
                "en-US": "central extend",
                "de-DE": "zentral ausfahren"
            },
            {
                "id": 6,
                "icon": "arrow_down_1",
                "editable": false,
                "locations": [],
                "global": false,
                "categories": [
                    6
                ],
                "roles": [
                    {
                        "role": 501000,
                        "value": false
                    }
                ],
                "values": []
            }
        ],
        [
            {
                "en-US": "central retract",
                "de-DE": "zentral einfahren"
            },
            {
                "id": 9,
                "icon": "arrow_up_1",
                "editable": false,
                "locations": [],
                "global": false,
                "categories": [
                    7
                ],
                "roles": [
                    {
                        "role": 502000,
                        "value": true
                    }
                ],
                "values": []
            }
        ],
        [
            {
                "en-US": "central extend",
                "de-DE": "zentral ausfahren"
            },
            {
                "id": 8,
                "icon": "arrow_down_1",
                "editable": false,
                "locations": [],
                "global": false,
                "categories": [
                    7
                ],
                "roles": [
                    {
                        "role": 502000,
                        "value": false
                    }
                ],
                "values": []
            }
        ],
        [
            {
                "en-US": "Arbeiten",
                "de-DE": "Arbeiten"
            },
            {
                "id": 10,
                "icon": "statistic_1",
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
                "values": [
                    {
                        "peerId": 0,
                        "channel": -1,
                        "variable": "LIGHT",
                        "value": 1
                    },
                    {
                        "peerId": 1,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 1
                    },
                    {
                        "peerId": 2,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 1
                    }
                ]
            }
        ],
        [
            {
                "en-US": "Schlafen",
                "de-DE": "Schlafen"
            },
            {
                "id": 11,
                "icon": "statistic_1",
                "locations": [
                    {
                        "floorId": 1,
                        "roomId": 9
                    }
                ],
                "values": [
                    {
                        "peerId": 3,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 0
                    },
                    {
                        "peerId": 4,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 0
                    },
                    {
                        "peerId": 5,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 0
                    }
                ]
            }
        ],
        [
            {
                "en-US": "Abwesend",
                "de-DE": "Abwesend"
            },
            {
                "id": 12,
                "icon": "statistic_1",
                "global": true,
                "locations": [],
                "values": [
                    {
                        "peerId": 6,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 0
                    },
                    {
                        "peerId": 7,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 0
                    },
                    {
                        "peerId": 8,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 0
                    }
                ]
            }
        ],
        [
            {
                "en-US": "Anwesend",
                "de-DE": "Anwesend"
            },
            {
                "id": 13,
                "icon": "statistic_1",
                "global": true,
                "locations": [],
                "values": [
                    {
                        "peerId": 9,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 1
                    },
                    {
                        "peerId": 10,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 1
                    },
                    {
                        "peerId": 11,
                        "channel": 1,
                        "variable": "STATE",
                        "value": 1
                    }
                ]
            }
        ]
    ],
    "uiElements": [
        [
            "Base.helperSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
                        }
                    ]
                ],
                "label": "Regenalarm Helper",
                "room": 13,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
                }
            }
        ],
        [
            "Base.helperSwitch",
            {
                "inputPeers": [
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
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDALARM"
                        }
                    ]
                ],
                "label": "Windalarm Helper",
                "room": 13,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
                }
            }
        ],
        [
            "Base.helperSwitch",
            {
                "inputPeers": [
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
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWALARM"
                        }
                    ]
                ],
                "label": "Fensteralarm Helper",
                "room": 13,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
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
                "label": "Licht in Stockwerkslos",
                "room": 13,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
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
                "room": 6
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
                "room": 2
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
                "room": 2
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
                "room": 9
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
                "room": 12
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
                "room": 12
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
                "room": 12
            }
        ],
        [
            "Base.socketSwitch",
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
                "room": 12
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
                "room": 1
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
                "room": 7
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
                "room": 7
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
                "room": 10
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
                "room": 5
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
                "room": 5
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
                "room": 11
            }
        ],
        [
            "Base.socketSwitch",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "SOCKET1"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "SOCKET1"
                        }
                    ]
                ],
                "label": "Steckdose",
                "room": 4
            }
        ],
        [
            "Base.shadingButtonsSingleStepPositionPositionSlatsWindalarm",
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
                            "name": "UP",
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "LEVEL"
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
                            "name": "UP",
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 18,
                            "channel": 1,
                            "name": "LEVEL"
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
                "label": "Rollladen",
                "room": 6
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "LEVEL"
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 19,
                            "channel": 1,
                            "name": "LEVEL"
                        }
                    ]
                ],
                "label": "Rollladen KNX",
                "room": 6,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
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
                "room": 3
            }
        ],
        [
            "Base.windowButtonsUpDownRainalarm",
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
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
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
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
                        }
                    ]
                ],
                "label": "Dachflächenfenster Rainalarm",
                "room": 3
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
                            "name": "LEVEL"
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
                            "name": "LEVEL"
                        }
                    ]
                ],
                "label": "Fenstermotor",
                "room": 2
            }
        ],
        [
            "Base.windowButtonsPositionRainalarm",
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
                        }
                    ]
                ],
                "label": "Fenstermotor Rainalarm",
                "room": 2
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
                            "name": "LEVEL"
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
                            "name": "LEVEL"
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
                "room": 9
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
                            "name": "LEVEL"
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
                            "name": "LEVEL"
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
                "room": 9
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
                            "name": "LEVEL"
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
                            "name": "LEVEL"
                        }
                    ]
                ],
                "label": "Rollladen Wohnen",
                "room": 12
            }
        ],
        [
            "Base.shadingAwningButtonsPositionWindalarmRainalarm",
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDALARM"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDALARM"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
                        }
                    ]
                ],
                "label": "Markise Wohnen Alarmtest",
                "room": 7
            }
        ],
        [
            "Base.shadingAwningButtonsPositionWindalarm",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 28,
                            "channel": 1,
                            "name": "UP",
                            "value": true
                        },
                        {
                            "peer": 28,
                            "channel": 1,
                            "name": "STOP",
                            "value": true
                        },
                        {
                            "peer": 28,
                            "channel": 1,
                            "name": "DOWN",
                            "value": true
                        }
                    ],
                    [
                        {
                            "peer": 28,
                            "channel": 1,
                            "name": "LEVEL"
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
                            "peer": 28,
                            "channel": 1,
                            "name": "UP",
                            "value": true
                        },
                        {
                            "peer": 28,
                            "channel": 1,
                            "name": "STOP",
                            "value": true
                        },
                        {
                            "peer": 28,
                            "channel": 1,
                            "name": "DOWN",
                            "value": true
                        }
                    ],
                    [
                        {
                            "peer": 28,
                            "channel": 1,
                            "name": "LEVEL"
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
                "label": "Markise Wohnen",
                "room": 7
            }
        ],
        [
            "Base.shadingAwningButtonsPositionRainalarm",
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
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
                            "name": "LEVEL"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAINALARM"
                        }
                    ]
                ],
                "label": "Markise Wohnen",
                "room": 7
            }
        ],
        [
            "Base.shadingButtons",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 27,
                            "channel": 1,
                            "name": "UP",
                            "value": true
                        },
                        {
                            "peer": 27,
                            "channel": 1,
                            "name": "STOP",
                            "value": true
                        },
                        {
                            "peer": 27,
                            "channel": 1,
                            "name": "DOWN",
                            "value": true
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 27,
                            "channel": 1,
                            "name": "UP",
                            "value": true
                        },
                        {
                            "peer": 27,
                            "channel": 1,
                            "name": "STOP",
                            "value": true
                        },
                        {
                            "peer": 27,
                            "channel": 1,
                            "name": "DOWN",
                            "value": true
                        }
                    ]
                ],
                "label": "shadingButtons",
                "room": 13
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
                            "name": "LEVEL"
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
                            "name": "LEVEL"
                        }
                    ]
                ],
                "label": "Markise Essen",
                "room": 7
            }
        ],
        [
            "Base.heatingSliderModeWindowhandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE1"
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
                            "name": "WINDOWCONTACT1"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE1"
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
                            "name": "WINDOWCONTACT1"
                        }
                    ]
                ],
                "label": "Heizung Fensterkontakt",
                "room": 3,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
                }
            }
        ],
        [
            "Base.heatingSliderModeWindowhandle",
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
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWALARM"
                        }
                    ]
                ],
                "label": "Heizung Windowalarm",
                "room": 6
            }
        ],
        [
            "Base.heatingSliderMode",
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
                "room": 2
            }
        ],
        [
            "Base.heatingSliderMode",
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
                "room": 9
            }
        ],
        [
            "Base.heatingSliderModeWindowhandle",
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
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE1"
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
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE1"
                        }
                    ]
                ],
                "label": "Heizung WindowContact",
                "room": 12
            }
        ],
        [
            "Base.heatingSliderMode",
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
                "room": 5
            }
        ],
        [
            "Base.windowContact",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWCONTACT1"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWCONTACT1"
                        }
                    ]
                ],
                "label": "Fensterkontakt Essen",
                "room": 12,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
                }
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE1"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE1"
                        }
                    ]
                ],
                "label": "Fenstergriff Rund",
                "room": 3
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE2"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE2"
                        }
                    ]
                ],
                "label": "Fenstergriff links",
                "room": 6
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE3"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE3"
                        }
                    ]
                ],
                "label": "Fenstergriff rechts",
                "room": 6
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE4"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE4"
                        }
                    ]
                ],
                "label": "Fenstergriff Bad",
                "room": 2
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE5"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE5"
                        }
                    ]
                ],
                "label": "Fenstergriff links",
                "room": 9
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE6"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE6"
                        }
                    ]
                ],
                "label": "Fenstergriff rechts",
                "room": 9
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE7"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE7"
                        }
                    ]
                ],
                "label": "Fenstergriff Küche links",
                "room": 12
            }
        ],
        [
            "Base.windowHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE8"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WINDOWHANDLE8"
                        }
                    ]
                ],
                "label": "Fenstergriff Wohnen",
                "room": 12
            }
        ],
        [
            "Base.doorHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DOORCONTACT"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DOORCONTACT"
                        }
                    ]
                ],
                "label": "Türgriff",
                "room": 3,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
                }
            }
        ],
        [
            "Base.doorHandle",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DOORHANDLE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DOORHANDLE"
                        }
                    ]
                ],
                "label": "Türgriff",
                "room": 12,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
                }
            }
        ],
        [
            "Base.doorLock",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DOORLOCK"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DOORLOCK"
                        }
                    ]
                ],
                "label": "Tür Verriegelung",
                "room": 3,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
                }
            }
        ],
        [
            "Base.ventilationMode",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "VENTILATIONMODE"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "VENTILATIONMODE"
                        }
                    ]
                ],
                "label": "Ventilation",
                "room": 8,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
                }
            }
        ],
        [
            "Base.lightingBrightness",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DIMMER4"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DIMMER4"
                        }
                    ]
                ],
                "label": "Dimmlicht Ohne Switch",
                "room": 12,
                "role": 101001,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
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
                            "peer": 0,
                            "channel": -1,
                            "name": "LIGHT1"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DIMMER1"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "LIGHT1"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DIMMER1"
                        }
                    ]
                ],
                "label": "Dimmlicht",
                "room": 12,
                "role": 101001,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
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
                            "peer": 0,
                            "channel": -1,
                            "name": "LIGHT2"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DIMMER2"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "LIGHT2"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DIMMER2"
                        }
                    ]
                ],
                "label": "Dimmlicht",
                "room": 9
            }
        ],
        [
            "Base.lightingSwitchColor",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "LIGHT3"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "COLOR"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "LIGHT3"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "COLOR"
                        }
                    ]
                ],
                "label": "Farblicht",
                "room": 9
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
                            "name": "TEMPERATURE4"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY4"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "CITY"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "CLOUD_COVERAGE"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "LAST_DATA"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "PRESSURE"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAIN_3H"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "SNOW_3H"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "SUNRISE_STRING"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "SUNSET_STRING"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WEATHER"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WIND_DIRECTION"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WIND_GUST"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WIND_SPEED"
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
                            "name": "TEMPERATURE4"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY4"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "CITY"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "CLOUD_COVERAGE"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "LAST_DATA"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "PRESSURE"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAIN_3H"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "SNOW_3H"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "SUNRISE_STRING"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "SUNSET_STRING"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WEATHER"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WIND_DIRECTION"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WIND_GUST"
                        }
                    ],
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "WIND_SPEED"
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
                "label": "Wetter",
                "room": 6,
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
                }
            }
        ],
        [
            "base.climateRain",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAIN"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "RAIN"
                        }
                    ]
                ],
                "label": "Regen",
                "room": 6
            }
        ],
        [
            "base.climateDusk",
            {
                "inputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DUSK"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "DUSK"
                        }
                    ]
                ],
                "label": "Dämmerung",
                "room": 6
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
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
                    }
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
                "dynamicMetadata": {
                    "favorites": {
                        "state": true
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
                            "name": "TEMPERATURE1"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE1"
                        }
                    ]
                ],
                "label": "Temperatur1",
                "room": 15
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
                            "name": "HUMIDITY1"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY1"
                        }
                    ]
                ],
                "label": "Feuchte1",
                "room": 15
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
                            "name": "TEMPERATURE2"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE2"
                        }
                    ]
                ],
                "label": "Temperatur2",
                "room": 16
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
                            "name": "HUMIDITY2"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY2"
                        }
                    ]
                ],
                "label": "Feuchte2",
                "room": 16
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
                            "name": "TEMPERATURE3"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE3"
                        }
                    ]
                ],
                "label": "Temperatur3",
                "room": 17
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
                            "name": "HUMIDITY3"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY3"
                        }
                    ]
                ],
                "label": "Feuchte3",
                "room": 17
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
                            "name": "TEMPERATURE4"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "TEMPERATURE4"
                        }
                    ]
                ],
                "label": "Temperatur4",
                "room": 14
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
                            "name": "HUMIDITY4"
                        }
                    ]
                ],
                "outputPeers": [
                    [
                        {
                            "peer": 0,
                            "channel": -1,
                            "name": "HUMIDITY4"
                        }
                    ]
                ],
                "label": "Feuchte4",
                "room": 14
            }
        ]
    ],
    "devices": [
        {
            "SERIALNUMBER": "VirtSw0001",
            "FAMILY": 254,
            "ID": 1,
            "NAME": "SA Licht Diele",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xf004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0002",
            "FAMILY": 254,
            "ID": 2,
            "NAME": "SA Licht Kind",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0003",
            "FAMILY": 254,
            "ID": 3,
            "NAME": "SA Licht Decke Bad",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0004",
            "FAMILY": 254,
            "ID": 4,
            "NAME": "SA Licht Spiegel Bad",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0005",
            "FAMILY": 254,
            "ID": 5,
            "NAME": "SA Licht Schlafen",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0006",
            "FAMILY": 254,
            "ID": 6,
            "NAME": "SA Licht c Wohn",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0007",
            "FAMILY": 254,
            "ID": 7,
            "NAME": "SA Licht b Wohn",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0008",
            "FAMILY": 254,
            "ID": 8,
            "NAME": "SA Licht d Wohn",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0009",
            "FAMILY": 254,
            "ID": 9,
            "NAME": "SA Steckdose e Wohn",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0010",
            "FAMILY": 254,
            "ID": 10,
            "NAME": "SA Licht Abstellraum",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0011",
            "FAMILY": 254,
            "ID": 11,
            "NAME": "SA Licht Loggia",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0012",
            "FAMILY": 254,
            "ID": 12,
            "NAME": "SA Steckdose Loggia",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0013",
            "FAMILY": 254,
            "ID": 13,
            "NAME": "SA Licht Technikraum",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0014",
            "FAMILY": 254,
            "ID": 14,
            "NAME": "SA Licht Decke G\u00e4ste WC",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0015",
            "FAMILY": 254,
            "ID": 15,
            "NAME": "SA Licht Spiegel G\u00e4ste WC",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtSw0016",
            "FAMILY": 254,
            "ID": 16,
            "NAME": "SA Steckdose Waschraum",
            "TYPE": "VirtualSwitch",
            "TYPE_ID": "0xF004",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0017",
            "FAMILY": 254,
            "ID": 17,
            "NAME": "JA Rollladen Diele",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0018",
            "FAMILY": 254,
            "ID": 18,
            "NAME": "JA Rollladen links Kind",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0019",
            "FAMILY": 254,
            "ID": 19,
            "NAME": "JA Rollladen rechts Kind",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0020",
            "FAMILY": 254,
            "ID": 20,
            "NAME": "JA Rollladen Bad",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0021",
            "FAMILY": 254,
            "ID": 21,
            "NAME": "JA Rollladen links Schlafen",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0022",
            "FAMILY": 254,
            "ID": 22,
            "NAME": "JA Rollladen rechts Schlafen",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0023",
            "FAMILY": 254,
            "ID": 23,
            "NAME": "JA Rollladen Wohnen",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0024",
            "FAMILY": 254,
            "ID": 24,
            "NAME": "JA Rollladen Essen",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0025",
            "FAMILY": 254,
            "ID": 25,
            "NAME": "JA Markise Wohnen",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0026",
            "FAMILY": 254,
            "ID": 26,
            "NAME": "JA Markise Essen",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0027",
            "FAMILY": 254,
            "ID": 27,
            "NAME": "JA Markise",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtBl0028",
            "FAMILY": 254,
            "ID": 28,
            "NAME": "JA Markise",
            "TYPE": "VirtualBlind",
            "TYPE_ID": "0xF002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtHeat01",
            "FAMILY": 254,
            "ID": 78,
            "NAME": "Heating 1",
            "TYPE": "VirtualHeating",
            "TYPE_ID": "0x1002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtHeat02",
            "FAMILY": 254,
            "ID": 79,
            "NAME": "Heating 2",
            "TYPE": "VirtualHeating",
            "TYPE_ID": "0x1002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtHeat03",
            "FAMILY": 254,
            "ID": 80,
            "NAME": "Heating 3",
            "TYPE": "VirtualHeating",
            "TYPE_ID": "0x1002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtHeat04",
            "FAMILY": 254,
            "ID": 81,
            "NAME": "Heating 4",
            "TYPE": "VirtualHeating",
            "TYPE_ID": "0x1002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtHeat05",
            "FAMILY": 254,
            "ID": 82,
            "NAME": "Heating 5",
            "TYPE": "VirtualHeating",
            "TYPE_ID": "0x1002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "VirtHeat06",
            "FAMILY": 254,
            "ID": 83,
            "NAME": "Heating 6",
            "TYPE": "VirtualHeating",
            "TYPE_ID": "0x1002",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        },
        {
            "SERIALNUMBER": "ESY5110366",
            "FAMILY": 254,
            "ID": 95,
            "NAME": "OpenWeatherMap",
            "TYPE": "OpenWeatherMap",
            "TYPE_ID": "0x100",
            "ADDRESS": -1,
            "FIRMWAREVERSION": -1,
            "INTERFACEID": ""
        }
    ]
}
';
