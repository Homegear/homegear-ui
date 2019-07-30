<?php 
    $adminInterfaceDataJson = '
{
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
