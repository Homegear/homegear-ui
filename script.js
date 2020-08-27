
////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function readCookie(key) {
    const regex = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)');
    const result = regex.exec(document.cookie);

    return result ? result[1] : null;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function homegearRandomUserName() {
    const possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let id = 'shif-';

    for (let i = 0; i < 8; i++)
        id += possible.charAt(Math.floor(Math.random() * possible.length));

    return id;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function homegear_websocket_security() {
    const opts = interfaceData.options;

    if (location.protocol === 'https:')
        return true;

    if (opts.websocket_user || opts.websocket_password)
        return true;

    if (opts.websocket_security_ssl === undefined ||
        opts.websocket_security_ssl === 'location.protocol')
        return location.protocol === 'https:'

    return !! opts.websocket_security_ssl;

}

function homegear_new() {
    const host = (interfaceData.options.websocket_url == 'location.hostname')
                    ? location.hostname
                    : interfaceData.options.websocket_url;
    const port = (interfaceData.options.websocket_port == 'location.port')
                    ? location.port
                    : Number(interfaceData.options.websocket_port);

    const secure = homegear_websocket_security();

    return new HomegearWS(
        host,
        port,
        homegearRandomUserName(),
        secure,
        ...arguments
    );
}

if (interfaceData.options.websocket_user && interfaceData.options.websocket_password) {
    var homegear = homegear_new(interfaceData.options.websocket_user, interfaceData.options.websocket_password);
}
else {
    var homegear = homegear_new(readCookie('PHPSESSIDUI'));
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
homegear.ready(function() {
    var addDevicesAsHomegearPeers = Object.keys(interfaceData.map_invoke).map(Number);

    console.log('HomegearPeers: ');
    console.log(addDevicesAsHomegearPeers);

    homegear.addPeers( addDevicesAsHomegearPeers );
    $('#loadingPage').hide();
});

homegear.connected(function() {

});

homegear.disconnected(function() {
    $('#loadingPage').show();
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
//get new sessionid when websocket reconnects
////////////////////////////////////////////////////////////////////////////////////////////////////////
homegear.reconnected(function() {
    window.location.reload(true);
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
//print Homegear errors
////////////////////////////////////////////////////////////////////////////////////////////////////////
homegear.error(function (message) {
    console.log(message);
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
if(location.protocol == 'https:' && interfaceData.options.websocket_security_ssl == false)
    alert('Error: If you connect to the interface via https you have to use a secure websocket connection!');
else homegear.connect();

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function roles_relevant(roles) {
    return roles.filter(x => x.hasOwnProperty('id') && x.direction !== 1);
}




function handle_update_event(resp) {
    // DEBUG: works as expected
    const peer    = resp.params[1],
          channel = resp.params[2],
          name    = resp.params[3];
    let   value   = resp.params[4];

    if (!(peer    in interfaceData.map_invoke &&
          channel in interfaceData.map_invoke[peer] &&
          name    in interfaceData.map_invoke[peer][channel]))
        return;

    const inputs = interfaceData.map_invoke[peer][channel][name];
    for (const input of inputs) {
        if (!(input.databaseId in interfaceData.devices &&
              input.control    in interfaceData.devices[input.databaseId]
                                               .controls &&
              input.input      in interfaceData.devices[input.databaseId]
                                               .controls[input.control]
                                               .variableInputs))
            continue;

        if (input.roles === undefined)
            continue;

        interfaceData.devices[input.databaseId]
            .controls[input.control]
            .variableInputs[input.input].properties.value = value;

        for (const role of roles_relevant(input.roles))
            app.$root.$emit('role-update', role.id);
    }
}



function handle_update_request_ui_refresh(resp) {
    const dt = new Date ();

    const month  = (dt.getMonth()+1).toString().padStart(2, '0');
    const day    = dt.getDate().toString().padStart(2, '0');
    const year   = dt.getFullYear().toString().padStart(4, '0');
    const hour   = dt.getHours().toString().padStart(2, '0');
    const minute = dt.getMinutes().toString().padStart(2, '0')
    const second = dt.getSeconds().toString().padStart(2, '0');


    const fixedDate = `${month}.${day}.${year} ${hour}:${minute}:${second}`;
    error.set(`
        <div class="toast_text">
            ${fixedDate} | ${i18n('refresh.message')}
        </div>
        <button class="toast_action" onclick="window.location.reload(true)">
            ${i18n('refresh.message.button.text')}
        </button>
    `);
}



function handle_update_variable_profile_state_changed(resp) {
    const id    = resp.params[0],
          state = resp.params[1];

    if (interfaceData.profiles[id] === undefined)
        return;

    interfaceData.profiles[id].isActive = state;
}



function homegear_handle_update(resp) {
    console.log(JSON.stringify(resp, null, 4));

    const funcs = {
        'event': handle_update_event,
        'requestUiRefresh': handle_update_request_ui_refresh,
        'variableProfileStateChanged': handle_update_variable_profile_state_changed,
    };

    if (resp.method in funcs)
        funcs[resp.method](resp)
}



////////////////////////////////////////////////////////////////////////////////////////////////////////
// Extensions to the homegear object
////////////////////////////////////////////////////////////////////////////////////////////////////////
function params_create(input, value) {
    if ('value' in input) {
        value = input.value;
    }
    return [
        Number(input.peer),
        Number(input.channel),
        input.name,
        value,
        false,
    ];
}



function homegear_prepare(homegear) {
    homegear.event(homegear_handle_update);
    homegear.ready(() => {
        app.$mount('#inhalt');
        breadcrumbs.$mount('#breadcrumbs');
    });

    homegear.invoke_raw = homegear.invoke;
    homegear.invoke = function (op, cb) {
        homegear.invoke_raw(op, function (ret) {
            if (ret.error === undefined)
                return cb ? cb(ret) : undefined;

            console.log('Invoke Error: ' + JSON.stringify(ret.error, null, 4));
        })
    };

    homegear.invoke_multi = function (ops, cb) {
        const object = {
            jsonrpc: '2.0',
            method: 'system.multicall',
            params: ops,
        };

        console.log(JSON.stringify(object, null, 4));

        return this.invoke(object, cb);
    };

    homegear.value_set_multi = function (ops, cb) {
        return this.invoke_multi([
            ops.map(op => ({
                methodName: 'setValue',
                params: params_create(op.input, op.value),
            }))
        ], cb);
    };

    homegear.value_set_clickcounter = function(control, params, value) {
        let methods = [[
            {
                methodName: 'setValue',
                params: params_create(params, value)
            }
        ]];

        if(Date.now() - control.lastClickCount > 10000) {
            control.lastClickCount = Date.now();
            methods[0].push({
                methodName: 'setUserData',
                params: ['ui.clickCounts', control.uiElement.databaseId.toString(), ++control.uiElement.clickCount]
            });
        }

        return this.invoke_multi(methods);
    };
}
homegear_prepare(homegear);

////////////////////////////////////////////////////////////////////////////////////////////////////////
// globale Variablen
////////////////////////////////////////////////////////////////////////////////////////////////////////
var controlComponents = {};
var logFrontend = '';
////////////////////////////////////////////////////////////////////////////////////////////////////////
// write console logs to setting/about/nameClick/log page
////////////////////////////////////////////////////////////////////////////////////////////////////////
if (typeof interfaceData.options.consoleLog !== 'undefined' && (interfaceData.options.consoleLog == 'true' || interfaceData.options.consoleLog == true)) {
    console.oldLog = console.log;
    console.log = function(value) {
        console.oldLog(value);
        viewLog(value);
    };

    console.oldWarn = console.warn;
    console.warn = function(value) {
        console.oldWarn(value);
        viewLog(value);
    };

    console.oldError = console.error;
    console.error = function(value) {
        console.oldError(value);
        viewLog(value);
    };

    console.oldInfo = console.info;
    console.info = function(value) {
        console.oldInfo(value);
        viewLog(value);
    };
}
else {
    console.oldLog = console.log;
    console.log = function(){};
}

function viewLog(value) {
    if (value !== null && typeof value === 'object')
        value = JSON.stringify(value);

    logFrontend += value + '\r\n';

    if($('#log').length){
        $('#log').html(logFrontend);
        $('#log').scrollTop(9999999999);
    }
}


////////////////////////////////////////////////////////////////////////////////////////////////////////
// verhindert, dass der PullFromTopToRefresh im Android Chrome Browser ausgeführt werden kann
////////////////////////////////////////////////////////////////////////////////////////////////////////
let lastTouchY = 0;
let preventPullToRefresh = false;

$('body').on('touchstart', function (e) {
    if (e.originalEvent.touches.length != 1)
        return;

    lastTouchY = e.originalEvent.touches[0].clientY;
    preventPullToRefresh = window.pageYOffset == 0;
});

$('body').on('touchmove', function (e) {
    const touchY = e.originalEvent.touches[0].clientY;
    const touchYDelta = touchY - lastTouchY;

    lastTouchY = touchY;
    if (preventPullToRefresh) {
        preventPullToRefresh = false;
        if (touchYDelta > 0) {
            e.preventDefault();
            return;
        }
    }
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
// passt die Header Tab Anzeige beim scrollen an
////////////////////////////////////////////////////////////////////////////////////////////////////////
headerVisibility('true');
function headerVisibility(state) {
    const stateDownScroll = state === 'true' ? 'block' : 'none';
    const stateUpScroll = 'block';
    let lastScrollTop = 0;

    $('.content').scroll(function(event){
        var st = $(this).scrollTop();

        if (st > lastScrollTop) { // downscroll code
            $('.content_single #tabs').hide();
            $('.content_big #tabs').hide();
        }
        else { // upscroll code
            $('.content_single #tabs').show();
            $('.content_big #tabs').show();
        }
        lastScrollTop = st;
    });
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// triggert beim Logoff eines Users das Löschen des Cookies
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user_logoff() {
    window.location.href = 'signin.php?logout=1';
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function i18n(key) {
    for (let i of [interfaceData.i18n, interfaceData.i18n.default])
        if (key in i)
            return i[key];

    return '?';
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function condition_check(condition, value) {
    if (condition === null || condition === undefined)
        return true;

    switch (condition.operator) {
    case 'not':     return value != condition.value;
    case 'e':       return value == condition.value;
    case 'g':       return value  > condition.value;
    case 'l':       return value  < condition.value;
    case 'ge':      return value >= condition.value;
    case 'le':      return value <= condition.value;
    case 't':       return true;
    case 'f':       // fall through
    default:        return false;
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function condition_get_matching(rendering, props) {
    for (var i = 0; i < rendering.length; ++i) {
        var cur = rendering[i];

        if (condition_check(cur.condition, props.value))
            return cur.definitions;
    }

    // return empty default
    return {};
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function get_or_default(obj, key, def) {
    return (typeof(obj) == 'object' && key in obj) ? obj[key] : def;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function set_or_extend(arr, idx, vals) {
    if (idx >= arr.length)
        arr.push(vals);
    else {
        var keys = Object.keys(vals);
        for (var i = 0; i < keys.length; ++i)
            arr[idx][keys[i]] = vals[keys[i]];
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// VUE default components
////////////////////////////////////////////////////////////////////////////////////////////////////////
// Clone {{{
// src: https://stackoverflow.com/a/728694
function clone(obj) {
    var copy;

    // Handle the 3 simple types, and null or undefined
    if (null == obj || 'object' != typeof obj) return obj;

    // Handle Date
    if (obj instanceof Date) {
        copy = new Date();
        copy.setTime(obj.getTime());
        return copy;
    }

    // Handle Array
    if (obj instanceof Array) {
        copy = [];
        for (var i = 0, len = obj.length; i < len; i++) {
            copy[i] = clone(obj[i]);
        }
        return copy;
    }

    // Handle Object
    if (obj instanceof Object) {
        copy = {};
        for (var attr in obj) {
            if (obj.hasOwnProperty(attr)) copy[attr] = clone(obj[attr]);
        }
        return copy;
    }

    throw new Error('Unable to copy obj! Its type isn\'t supported.');
}
// }}}



// Utils {{{
Vue.component('shif-title', {
    props: {
        classname: String,
        disabled: {
            type: Object,
            default: () => ({flag: false})
        },
    },
    template: `
        <div class="device_title" v-bind:class="classname">
            <slot></slot>
            <span v-if="disabled.flag" class="disabled_text">
                {{ disabled.texts.title }}
            </span>
        </div>
    `,
});



Vue.component('shif-status', {
    props: [
        'classname',
        'key_vals'
    ],
    template: `
        <div class="device_status" v-bind:class="classname">
            <template v-if="key_vals">
                <template v-if="key_vals.length === 0">
                    <div class="device_status_entry"></div>
                </template>
                <template v-else>
                    <span v-for="i in key_vals" class="device_status_entry">
                        <span v-if="i.key" class="name">{{ i.key }}:</span>

                        <template v-if="typeof(i.value) === 'object' && i.value.type === 'color'">
                            <span class="status_color_bullet"
                                  v-bind:style="{backgroundColor: i.value.color}">
                            </span>
                        </template>
                        <template v-else>
                            <span class="value">{{ i.value }}</span>
                        </template>
                    </span>
                </template>
            </template>
            <template v-else>
                <div class="device_status_entry">
                    <slot></slot>
                </div>
            </template>
        </div>
    `,
});



Vue.component('shif-icon', {
    props: {
        src: {
            type: String,
            required: true,
        },
        classname: String,
        active:    String,
        rotate:    Boolean,
    },

    template: `
        <div v-bind:class="classname" v-on:click="$emit('click', this)">
            <template v-if="src in interfaceIcons">
                <div class="svg_icon"
                     v-bind:class="[src, active, {accordion_arrow_rotated: rotate}]"
                     v-html="interfaceIcons[src]">
                </div>
            </template>
            <template v-else-if="src in interfaceData.iconFallback">
                <div class="svg_icon"
                     v-bind:class="[src, active, {accordion_arrow_rotated: rotate}]"
                     v-html="interfaceIcons[interfaceData.iconFallback[src]]">
                </div>
            </template>
            <template v-else>
                <div class="svg_icon icon_default">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="500" height="500" viewBox="0 0 500 500">
                        <path d="M227.52 320.99L227.52 301.54Q227.52 289.25 229.31 279.52 231.1 269.79 234.94 261.09 238.78 252.38 245.18 244.19 251.58 236 261.31 226.78L284.35 204.77Q294.08 196.06 300.99 185.31 307.9 174.56 307.9 159.2 307.9 139.23 295.36 125.66 282.82 112.1 259.78 112.1 248 112.1 238.53 116.45 229.06 120.8 222.14 128.22 215.23 135.65 211.65 145.38 208.06 155.1 207.55 165.34L144.58 159.71Q147.65 135.14 157.63 115.94 167.62 96.74 183.49 83.42 199.36 70.11 219.84 63.2 240.32 56.29 263.87 56.29 285.89 56.29 305.6 62.69 325.31 69.09 340.42 81.63 355.52 94.18 364.22 112.61 372.93 131.04 372.93 155.1 372.93 171.49 369.34 183.78 365.76 196.06 359.1 206.3 352.45 216.54 342.98 226.02 333.5 235.49 321.73 245.73 311.49 254.43 305.09 261.09 298.69 267.74 294.85 274.4 291.01 281.06 289.47 288.74 287.94 296.42 287.94 307.68L287.94 320.99zM217.28 392.16Q217.28 375.78 229.31 364 241.34 352.22 258.24 352.22 274.62 352.22 286.91 363.49 299.2 374.75 299.2 391.14 299.2 407.52 287.17 419.3 275.14 431.07 258.24 431.07 250.05 431.07 242.62 428 235.2 424.93 229.57 419.81 223.94 414.69 220.61 407.52 217.28 400.35 217.28 392.16z"/>
                    </svg>
                </div>
            </template>
        </div>
    `,
});



Vue.component('shif-slider', {
    props: {
        min:   Number,
        max:   Number,
        unit:  String,
        value: Number,
        title: String,
        step:  Number,
        disabled: {
            type: Object,
            default: () => ({flag: false})
        },
        precision: {
            type: Number,
            default: 0,
        }
    },

    computed: {
        value_formatted: function () {
            return this.float_formatted(this.value, this.precision);
        },
    },

    template: `
        <div class="device_wrapper" v-bind:class="{disabled: disabled.flag}">
            <div class="device slider">
                <div v-if="$slots.profiles"
                     class="checkbox_wrapper">
                    <slot name="profiles" />
                </div>
                <shif-title v-bind:disabled="disabled">{{ title }}</shif-title>

                <div class="slider_action">
                    <div class="amount">
                        <p>{{ value_formatted }} {{ unit }}</p>
                    </div>
                </div>

                <input type="range"
                        class="range"
                        name="range"
                        v-bind:step="step"
                        v-bind:min="min"
                        v-bind:max="max"
                        v-bind:value="value"
                        v-bind:disabled="disabled.flag"
                        v-on:change="$emit('change', parseFloat($event.target.value))"
                        v-on:input="$emit('input', parseFloat($event.target.value))" />

                <div class="slider_marks">
                    <div class="left">
                        {{ min }} {{ unit }}
                    </div>
                    <div class="right">
                        {{ max }} {{ unit }}
                    </div>
                </div>
            </div>
        </div>
    `,
});



Vue.component('shif-radio', {
    props: {
        title:     String,
        classname: String,
        values:    Array,
        disabled: {
            type: Object,
            default: () => ({flag: false})
        },
    },

    computed: {
        identifier: function () {
            return 'x' + Math.random().toString(36).substring(10);
        },
    },

    template: `
        <div class="device_wrapper" v-bind:class="{disabled: disabled.flag}">
            <div class="device">
                <div v-if="$slots.profiles"
                     class="checkbox_wrapper">
                    <slot name="profiles" />
                </div>
                <shif-title v-bind:disabled="disabled">{{ title }}</shif-title>
                <div class="device_radio">
                    <template v-for="i in values">
                        <label class="rad">
                            <span class="rad_name">{{ i.name }}</span>
                            <input type="radio"
                                   v-bind:name="identifier"
                                   v-bind:value="i.value"
                                   v-bind:checked="i.selected"
                                   v-bind:disabled="disabled.flag"
                                   v-on:input="$emit('input', $event.target.value)" />
                            <i></i>
                        </label>
                    </template>
                </div>
            </div>
        </div>
    `,
});



Vue.component('shif-dropdown', {
    props: {
        title:     String,
        classname: String,
        values:    Array,
        selected:  [String, Number],
        disabled: {
            type: Object,
            default: () => ({flag: false})
        },
    },

    data: function () {
        return {
            selected_entry: this.selected,
        };
    },

    template: `
        <div class="device_wrapper" v-bind:class="{disabled: disabled.flag}">
            <div class="device">
                <div v-if="$slots.profiles"
                     class="checkbox_wrapper">
                    <slot name="profiles" />
                </div>
                <shif-title v-bind:disabled="disabled">{{ title }}</shif-title>
                <div class="device_dropdown">
                    <select v-bind:class="{disabled: disabled.flag}"
                            v-model="selected_entry"
                            v-on:change="$emit('change', selected_entry)">
                        <option v-for="i in values"
                                v-bind:value="i.value">
                            {{ i.name }}
                        </option>
                    </select>
                </div>
            </div>
        </div>
    `,
});



Vue.component('shif-button', {
    props: {
        width: {
            type: String,
            default: '100%',
        },
        classname: String,
        disabled: {
            type: Object,
            default: () => ({flag: false})
        },
    },
    template: `
        <div class="control_button"
             v-bind:class="{[classname]: true, disabled: disabled.flag}"
             v-bind:style="{width}"
             v-on:click="(!disabled.flag) && $emit('click', 1)">
            <slot></slot>
        </div>
    `,
});



Vue.component('shif-colorpicker', {
    props: {
        width:  { type: [Number, Object], required: true, },
        height: { type: [Number, Object], required: true, },
        color:  { type: String, required: true, },
        padding:      { type: Number, default:  1 },
        borderWidth:  { type: Number, default:  3 },
        handleRadius: { type: Number, default: 12 },
        sliderMargin: { type: Number, default: 24 },
        sliderHeight: { type: Number, default: 32 },
        borderColor:  { type: String, default: '#fff' },
        anticlockwise:  { type: Boolean, default: true },
        title:  { type: String},
    },

    data: function () {
        return {
            handle: null,
        };
    },

    watch: {
        color: function (color_new) {
            if (this.handle)
                this.handle.color.hexString = color_new;
        },
    },

    mounted: function () {
        function rel_to_abs_px(dim_elem, dim_wanted) {
            let result = dim_elem;

            if (typeof(dim_wanted) === 'number')
                return result * (dim_wanted / 100);

            if (typeof(dim_wanted) === 'object' &&
                'percent' in dim_wanted &&
                typeof(dim_wanted.percent) === 'number') {

                result *= (dim_wanted.percent / 100);

                if ('max_pixels' in dim_wanted &&
                    typeof(dim_wanted.max_pixels) === 'number')
                    result = Math.min(result, dim_wanted.max_pixels);
            }

            return result - 30;
        }

        const elem = this.$refs.colorpicker;
        this.handle = new iro.ColorPicker(elem, {
            width:         rel_to_abs_px(elem.scrollWidth,  this.width),
            height:        rel_to_abs_px(elem.scrollHeight, this.height),
            color:         this.color,
            title:         this.title,
            handleRadius:  this.handleRadius,
            padding:       this.padding,
            sliderMargin:  this.sliderMargin,
            sliderHeight:  this.sliderHeight,
            borderWidth:   this.borderWidth,
            borderColor:   this.borderColor,
            anticlockwise: this.anticlockwise,
            display:       'block',
            layout:        [
                {
                    component: iro.ui.Wheel,
                    options: {}
                },
                {
                    // regular value slider
                    component: iro.ui.Slider,
                    options: {}
                },
                {
                    // hue slider
                    component: iro.ui.Slider,
                    options: {
                        sliderType: 'hue'
                    }
                },
                {
                    // saturation slider
                    component: iro.ui.Slider,
                    options: {
                        sliderType: 'saturation'
                    }
                }
            ]
        });

        // `on` patches `this`.
        // So we need to back it up first.
        let outer = this;
        this.handle.on('color:change', function (color, changes) {
            outer.$emit('color:change', {color: color, changes: changes});
        });
        this.handle.on('input:start', function (color) {
            outer.$emit('input:start', {color: color});
        });
        this.handle.on('input:end', function (color) {
            outer.$emit('input', color.hexString);
        });
    },

    template: `
        <div class="device_wrapper">
            <div class="device color">
                <div v-if="$slots.profiles"
                     class="checkbox_wrapper">
                    <slot name="profiles" />
                </div>
                <shif-title v-if="title">{{ title }}</shif-title>
                <div ref="colorpicker">
                </div>
            </div>
        </div>
    `
});



Vue.component('shif-checkbox', {
    props: {
        value: {
            type: Boolean,
            required: true
        },
    },
    template: `
        <label class="check">
            <input type="checkbox"
                   v-bind:checked="value"
                   v-on:click="$emit('click', $event.target.checked)"
                   v-on:input="$emit('input', $event.target.checked)">
            <span class="checkmark"></span>
        </label>
    `,
})
// }}}



// Generic l2 {{{
Vue.component('shif-generic-l2', {
    props: {
        icon:        String,
        place:       String,
        title:       String,
        status:      [Array, String],
        actions:     Boolean,
        icon_rotate: Boolean,
        accordion:   Boolean,
        disabled: {
            type: Object,
            default: () => ({flag: false})
        },
        active:  {
            type: Object,

            default: function () {
                return {
                    icon: '',
                    text: '',
                };
            },
        },
    },

    mounted: function () {
        if (this.$listeners &&
            this.$listeners.click !== undefined &&
            this.$listeners.click_icon === undefined)
            this.$on('click_icon', this.$listeners.click);
    },

    methods: {
        emit: function (key, val) {
            if (this.disabled.flag)
                return;

            if (val === undefined)
                this.$emit(key);
            else
                this.$emit(key, val);
        },
    },

    template: `
        <div class="device_wrapper"
             v-bind:class="{disabled: disabled.flag}"
             v-on:mousedown="emit('mousedown')"
             v-on:mouseup="emit('mouseup')"
             v-on:click="emit('click')">
            <div class="device">

                <div v-if="$slots.favorites"
                     class="checkbox_right_50">
                    <slot name="favorites" />
                </div>

                <div v-if="$slots.profiles">
                    <slot name="profiles" />
                </div>

                <div v-on:click.stop="emit('click_icon')">
                    <shif-icon v-bind:src="icon"
                               v-bind:active="active.icon"
                               classname="device_icon">
                    </shif-icon>
                </div>
                <div class="device_text">
                    <shif-title v-bind:disabled="disabled">{{ title }}</shif-title>
                    <div v-if="place" class="device_location">
                        {{ place }}
                    </div>
                    <template v-if="typeof(status) === 'object'">
                        <shif-status v-bind:classname="active.text"
                                     v-bind:key_vals="status">
                        </shif-status>
                    </template>
                    <template v-else>
                        <shif-status v-bind:classname="active.text">{{ status }}</shif-status>
                    </template>
                </div>
                <div v-if="actions"
                     class="device_action">
                    <template v-if="accordion">
                        <shif-icon src="arrow_down_1" v-bind:rotate="icon_rotate"></shif-icon>
                    </template>
                    <template v-else>
                        <div class="svg_icon arrow_right_1">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg" x="0" y="0" width="370.81" height="370.81" viewBox="0 0 370.81 370.81">
                                <g id="Ebene_1">
                                    <path d="M77.9 345.97L102.03 370.81 292.92 185.41 102.03 0 77.9 24.85 243.18 185.41z"/>
                                </g>
                            </svg>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    `,
});
// }}}



// [shif_device] Generic Shif Device Component Object {{{
function status_impl(control, layer) {
    let out = [];

    const key = (control.texts &&
                 control.texts.l2_state_title &&
                 control.texts.l2_state_title.content) ?
        control.texts.l2_state_title.content :
        null;

    if (control.metadata !== undefined &&
        control.metadata.statusColor === true &&
        control.variableInputs.length > 0)
        return [{
            key: key,
            value: {
                type: 'color',
                color: control.variableInputs[0].properties.value,
            },
        }];

    let val = [];
    for (const input of control.variableInputs) {
        if (input.properties.visualizeInOverview === false && layer == 2)
            continue;

        if (input.rendering) {
            const sel = condition_get_matching(input.rendering, input.properties);
            if (Object.keys(sel).length > 0) {
                val.push(sel.texts.state.content);
                continue;
            }
        }

        const unit = input.properties.unit ? input.properties.unit : '';
        val.push(input.properties.value + ' ' + unit);
    }

    if (val.length > 0)
        out.push({key: key, value: val.join(', ')});

    return out;
}


const shif_device = {
    props: [
        'uiElement',
        'control',
        'device',
        'icons',
        'texts',
        'output',
        'props',
        'indexes',
        'rendering',
        'include_place',
    ],

    data: function() {
        return {
            lastClickCount: 0,
            profile_state: false,
        };
    },

    inject: ['layer'],

    methods: {
        status_minimal: function (descs=true) {
            const raw = status_impl(this.control, this.layer);

            return (descs) ? raw : raw.map(x => ({value: x.value}));
        },
    },

    computed: {
        cond: function () {
            const sel = condition_get_matching(this.rendering, this.props);

            return {
                text: get_or_default(sel.texts, 'state', {content: '', color: ''}),
                icon: get_or_default(sel.icons, 'state', {name:    '', color: ''}),
            };
        },

        dev: function () {
            return interfaceData.devices[this.device];
        },

        place: function () {
            if (!this.include_place)
                return null;

            const room = interfaceData.rooms[this.dev.room];
            if (interfaceData.options.showFloor !== true)
                return room.name;

            return room.floors.map(x => interfaceData.floors[x])
                .map(x => x.name + ' - ' + room.name).join(' | ');
        },

        title: function () {
            if (this.control.texts &&
                this.control.texts.title &&
                this.control.texts.title.content)
                return this.control.texts.title.content;

            return this.dev.label;
        },

        status: function () {
            let out = [];

            for (const control of this.dev.controls)
                out = out.concat(status_impl(control, this.layer));

            return out;
        },

        breadcrumb: function () {
            return (this.place ? this.place + ' | ' : '') + this.dev.label;
        },

        disabled: function () {
            return check_disabled(this.uiElement, this.indexes);
        },
    },
};



function shif_comps_create(name, l2, l3) {
    const shif_name = 'shif-' + name + '-';

    controlComponents[name] = {
        l2: Vue.component(shif_name + 'l2', l2),
        l3: Vue.component(shif_name + 'l3', l3),
    };
}
// }}}




Vue.component('shif-room', {
    props: {
        floor: Object,
        room:  [String, Number],
    },
    methods: {
        link: function (floor_key, room_val) {
            return {
                name: 'house.tab.rooms.room',
                params: {
                    floor: floor_key,
                    room:  room_val,
                },
            };
        },
    },

    template: `
        <div class="roomSelect_wrapper">
            <router-link v-bind:to="link(floor.key, room)">
                <shif-icon v-bind:src="interfaceData.rooms[room].icon"
                           class="roomSelect" />

                <div class="description">
                    {{ interfaceData.rooms[room].name }}
                </div>
            </router-link>
        </div>
    `,
});



Vue.component('shif-tab', {
    props: {
        width: {
            type:    String,
            default: '50%',
        }
    },
    template: `
        <div class="tab button"
             v-bind:style="{width: width}"
             v-on:click="$emit('click', 1)">
             <slot></slot>
        </div>
    `,
});

function comp_obj(control, device, input, output, is, indexes) {
    let ret = {
        uiElement: device,
        control:   control,
        device:    device.databaseId,
        icons:     device.icons,
        texts:     device.texts,
        output:    output,
        props:     input.properties,
        indexes:   indexes,
        rendering: input.rendering,
    };

    if (is)
        ret.is = is;

    return ret;
}



const mixin_menus = {
    methods: {
        disabled: function (type, key) {
            const key_type = ({
                'mainmenu': 'disabledMainmenus',
                'menu':     'disabledMenus',
            })[type];

            return interfaceData.options &&
                   interfaceData.options[key_type] &&
                   interfaceData.options[key_type][key] === true;
        },
    },
};



const mixin_components = {
    methods: {
        find_component: function (device, layer) {
            if (layer == 'l2' && typeof(device.metadata) == 'object') {
                if ('l2_action' in device.metadata) {
                    const keys = device.metadata.l2_action;

                    const control = device.controls[keys.control];
                    const input   = control.variableInputs[keys.input];
                    const output  = control.variableOutputs[keys.input];
                    const is      = 'shif-' + control.control + '-l2';

                    return [comp_obj(control, device, input, output, is,
                                     {input: keys.input, control: keys.control})];
                }

                if (device.controls.length <= 1 &&
                    (!('l3_force' in device.metadata) ||
                     device.metadata.l3_force !== true))
                    layer = 'l3';
            }

            let out = [];
            // for (const control of device.controls) {
            for (let i = 0; i < device.controls.length; ++i) {
                const control = device.controls[i];

                for (const k in control.variableInputs) {
                    const input  = control.variableInputs[k];
                    const output = control.variableOutputs[k];
                    const is     = 'shif-' + control.control + '-' + layer;

                    out.push(comp_obj(control, device, input, output, is,
                                      {input: k, control: i}));
                }
            }

            return out;
        },
    },
};



const mixin_print_mounted = function (name) {
    return {
        // This is for debug reasons only
        // mounted: function () {
            // console.log(this.$options.name || name);
        // },
    };
};



function root_profiles_idx(peer, channel, name) {
    return `${peer}.${channel}.${name}`;
}


const mixin_profiles = {
    computed: {
        global_profiles: function () {
            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(x => x.global === true);
        },

        local_profiles: function () {
            const floor = parseInt(this.$route.params.floor);
            const room  = parseInt(this.$route.params.room);

            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(
                x => x.locations.findIndex(
                    loc => loc.floorId === floor &&
                          (loc.roomId === undefined || loc.roomId === room)
                ) !== -1
            );
        },

    },

    methods: {
        locations: function (floor, room) {
            if (floor === undefined && room === undefined)
                return [];

            return [
                {
                    floorId: floor === null ? undefined : Number(floor),
                    roomId:  room  === null ? undefined : Number(room),
                }
            ];
        },

        role_profiles: function (role_id) {
            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(x => x.roles !== undefined &&
                                      x.roles.length > 0 &&
                                      x.roles.findIndex(x => x.role === Number(role_id)) !== -1);
        },

        profile_build_root_devs: function (profile) {
            // Overwrite current profile on new load
            this.$root.profiles.devs = {};

            for (const i of profile.values) {
                const idx = root_profiles_idx(i.peerId, i.channel, i.variable);
                this.$root.profiles.devs[idx] = {
                    peer:    i.peerId,
                    channel: i.channel,
                    name:    i.variable,
                    value:   i.value,
                };
            }
        },

        profile_load: function (profile, cb) {
            this.profile_start(profile, (result) => {
                this.$root.favorites.enabled = false;
                this.$root.profiles.enabled = true;

                if (cb)
                    return cb(result);
            });
        },

        profile_start: function (profile, cb) {
            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'activateVariableProfile',
                params: [profile.id],
            }, cb);
        },

        profile_delete: function (profile, cb) {
            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'deleteVariableProfile',
                params: [profile.id],
            }, (result) => {
                delete interfaceData.profiles[this.profile.id];

                if (cb)
                    return cb(result);
            });
        },

        profile_add: function (form, cb) {
            const locations = this.locations(form.location.floor,
                                             form.location.room);

            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'addVariableProfile',
                params: [
                    {
                        [interfaceData.options.language]: form.profile_name,
                    },
                    {
                        global:    form.location.global,
                        icon:      form.icon,
                        locations: locations,
                        roles:     [],
                        values:    [],
                    }
                ],
            }, (result) => {
                interfaceData.profiles[result.result] = {
                    id:        result.result,
                    icon:      form.icon,
                    locations: locations,
                    global:    form.location.global,
                    name:      form.profile_name,
                    roles:     [],
                    values:    [],
                }

                this.$root.profiles.enabled = false;

                if (cb)
                    return cb(result);
            });
        },

        profile_update: function (profile, form, cb) {
            function val_into_proper_type(value) {
                if (value === 'true')
                    return true;
                if (value === 'false')
                    return false;

                const as_nr = Number(value);
                if (! Number.isNaN(as_nr))
                    return as_nr;

                return value;
            }

            const locations = this.locations(form.location.floor,
                                             form.location.room);

            const [roles, values] = form.role.role !== null &&
                                    form.role.value !== undefined &&
                                    form.role.value !== null
                ? [[{
                        role: Number(form.role.role),
                        value: val_into_proper_type(form.role.value)
                  }], []]
                : [[], Object.keys(this.$root.profiles.devs)
                             .map(x => this.$root.profiles.devs[x])
                             .map(x => ({
                                peerId: x.peer,
                                channel: x.channel,
                                variable: x.name,
                                value: x.value,
                             }))];

            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'updateVariableProfile',
                params: [
                    profile.id,
                    {
                        [interfaceData.options.language]: form.profile_name,
                    },
                    {
                        global:    form.location.global,
                        icon:      form.icon,
                        locations: locations,
                        roles:     roles,
                        values:    values,
                    }
                ],
            }, (result) => {
                interfaceData.profiles[profile.id] = {
                    id:        profile.id,
                    name:      form.profile_name,
                    global:    form.location.global,
                    icon:      form.icon,
                    locations: locations,
                    roles:     roles,
                    values:    values,
                }

                this.$root.profiles.enabled = false;

                if (cb)
                    return cb(result);
            });
        },
    },
};



const mixin_favorites = {
    methods: {
        dev_toggle_favorite: function (dev, state) {
            this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'getUiElementMetadata',
                params: [dev],
            }, (data) => {
                let new_metadata = data.result;

                if (new_metadata.favorites === undefined)
                    new_metadata.favorites = {};

                new_metadata.favorites.state = state;

                this.$homegear.invoke({
                    jsonrpc: '2.0',
                    method: 'setUiElementMetadata',
                    params: [dev, new_metadata],
                }, () => {
                    interfaceData.devices[dev].dynamicMetadata.favorites =
                        new_metadata.favorites;
                });
            });
        },
    },
};



Vue.component('shif-trans-drop-down', {
    template: `
        <transition name="trans-drop-down">
            <slot />
        </transition>
    `,
});



Vue.component('shif-trans-right-in-out', {
    template: `
        <transition name="trans-right-in-out" tag="div">
            <slot />
        </transition>
    `,
});



Vue.component('shif-house-collected-entries', {
    mixins: [
        mixin_components,
        mixin_profiles,
        mixin_print_mounted(),
    ],

    props: {
        layer: {
            type: Number,
            required: true,
        },

        favorites: {
            type: Boolean,
            default: false,
        },

        include_place: {
            type: Boolean,
            default: false,
        }
    },

    provide: function () {
        return {
            layer: this.layer,
        };
    },

    computed: {
        dev_objs: function () {
            if (this.layer === 2) {
                const devices = this.favorites === true
                                    ? Object.keys(interfaceData.devices)
                                            .map(dev => interfaceData.devices[dev])
                                            .filter(dev => dev.dynamicMetadata.favorites &&
                                                           dev.dynamicMetadata.favorites.state)
                                    : interfaceData.rooms[this.$route.params.room]
                                                   .devices
                                                   .map(dev => interfaceData.devices[dev]);

                return devices.map(dev => this.find_component(dev, 'l2'));
            }

            if (this.layer === 3) {
                const device = interfaceData.devices[this.$route.params.device];
                return this.find_component(device, 'l3');
            }

            throw 'Not implemented';
        },
    },

    methods: {
        get_icon_or_default: function (profile) {
            return get_or_default(profile, 'icon', 'slider_1');
        },
    },

    template: `
        <div>
            <div class="profiles_wrapper">
                <template v-if="layer === 2 && ! favorites"
                          v-for="i in local_profiles">
                    <shif-generic-l2 v-bind:icon="get_icon_or_default(i)"
                                     v-bind:title="i.name"
                                     v-bind:status="i18n('modemenu.profiles.name.label')"
                                     v-bind:active="{icon: i.isActive ? 'active' : ''}"
                                     v-on:click="profile_start(i)">
                    </shif-generic-l2>
                </template>
            </div>

            <template v-for="dev in dev_objs">
                <component v-bind="dev"
                           v-bind:include_place="include_place" />

                <template v-if="debug">
                    {{ dev | pretty | log }}
                </template>
            </template>
        </div>
    `,
});



Vue.component('shif-mainmenu-tabs', {
    mixins: [mixin_print_mounted()],

    computed: {
        idx_mainmenu: function () {
            const menu_name = this.$route.matched[0].name;
            return interfaceData.mainmenu.findIndex(x => x.name === menu_name);
        },

        tabs: function () {
            return interfaceData.mainmenu[this.idx_mainmenu].tabs;
        },

        tab_width: function () {
            return (100 / this.tabs.length) + '%';
        },
    },

    template: `
        <div>
            <div id="tabs">
                <template v-for="tab in tabs">
                    <router-link v-bind:to="{name: tab.name}">
                        <shif-tab v-bind:width="tab_width">
                            {{ i18n(tab.name) }}
                        </shif-tab>
                    </router-link>
                </template>
            </div>

            <div class="tabWrapper activeTab" style="text-align: center;">
                <slot />
            </div>
        </div>
    `
});



Vue.component('shif-paging', {
    mixins: [mixin_print_mounted()],

    computed: {
        is_single_view: function () {
            const idx   = this.$route.matched.length - 1;
            const route = this.$route.matched[idx];

            return route !== undefined &&
                   route.components !== undefined &&
                   route.components.default !== undefined;
        }
    },

    template: `
        <div>
            <router-view v-if="is_single_view"
                         name="default"
                         class="content content_single"
                         v-bind:key="$route.fullPath + '_left'" />

            <router-view v-else
                         name="small"
                         class="content content_small"
                         v-on:click.native="$router.back()"
                         v-bind:key="$route.fullPath + '_left'" />

            <shif-trans-right-in-out>
                <router-view name="big"
                             v-if="!is_single_view"
                             class="content content_big"
                             v-bind:key="$route.fullPath" />
            </shif-trans-right-in-out>
        </div>
    `,
});



Vue.component('shif-checkbox-favorites', {
    mixins: [mixin_favorites],

    props: {
        dev: {
            type: Object,
            required: true,
        },
        classname: {
            type: String,
            default: 'checkbox_right_50',
        },
    },

    inject: ['layer'],

    data: function () {
        return {
            state: this.dev !== undefined &&
                   this.dev.dynamicMetadata !== undefined &&
                   this.dev.dynamicMetadata.favorites !== undefined &&
                   this.dev.dynamicMetadata.favorites.state === true,
        };
    },

    methods: {
        change: function () {
            return this.dev_toggle_favorite(this.dev.databaseId, this.state);
        },
    },

    template: `
        <div>
            <template v-if="layer === 2 && $root.favorites.enabled">
                <div v-on:click.stop=""
                     v-on:change.stop="change">
                    <div v-bind:class="classname">
                        <shif-checkbox v-model="state" />
                    </div>
                </div>
            </template>
        </div>
    `
});



Vue.component('shif-checkbox-profiles', {
    mixinx: [mixin_profiles],

    props: {
        dev: {
            type: Object,
            required: true,
        },
        output: {
            type: Object,
            required: true,
        },
        props: {
            type: Object,
            required: true,
        },
        classname: {
            type: String,
            default: '',
        },
    },

    data: function () {
        const idx = root_profiles_idx(this.output.peer, this.output.channel,
                                      this.output.name);

        return {
            idx:   idx,
            state: (idx in this.$root.profiles.devs),
        };
    },

    watch: {
        'props.value': function () {
            if (this.$root.profiles.enabled &&
                (this.idx in this.$root.profiles.devs))
                this.$root.profiles.devs[this.idx].value = this.props.value;
        },
    },

    methods: {
        change: function () {
            if (this.state)
                this.$root.profiles.devs[this.idx] = {
                    peer:    this.output.peer,
                    channel: this.output.channel,
                    name:    this.output.name,
                    value:   this.props.value,
                };

            else if (this.idx in this.$root.profiles.devs)
                delete this.$root.profiles.devs[this.idx];
        },
    },

    template: `
        <div>
            <template v-if="$root.profiles.enabled">
                <div v-on:click.stop=""
                     v-on:change.stop="change">
                    <div v-bind:class="classname">
                        <shif-checkbox v-model="state" />
                    </div>
                </div>
            </template>
        </div>
    `
});

Vue.component('shif-mainmenu', {
    mixins: [mixin_menus, mixin_print_mounted()],

    data: function () {
        return {
            enabled_menus: interfaceData.mainmenu
                            .filter(x => ! this.disabled('mainmenu', x.name)),
            active: true,
        };
    },

    computed: {
        width: function () {
            return (100 / this.enabled_menus.length) + '%';
        },
    },

    template: `
        <div id="mainmenu">
            <ul class="menu">
                <li v-for="i in enabled_menus"
                    v-bind:style="{width: width}">

                    <router-link v-bind:to="{name: i.name}">
                        <div v-bind:id="'mainmenu_' + i.name"
                             class="mainmenu_button">
                             <shif-icon v-bind:src="i.icon" />
                        </div>
                    </router-link>

                </li>
            </ul>
        </div>
    `,
});



Vue.component('shif-modemenu', {
    mixins: [mixin_profiles],

    methods: {
        link_profile: function () {
            return {
                name: 'settings.profiles.profile',
                params: {
                    profile: this.$root.profiles.id,
                },
            };
        },

        submit_profile: function () {
            this.profile_update(interfaceData.profiles[this.$root.profiles.id],
                                this.$root.profiles.form);
        },
    },

    template: `
        <div id="modemenu">
            <div v-if="$root.favorites.enabled">
                <div class="mode_text">
                    <span class="mode_name">{{ i18n('modemenu.favorites.name') }}</span>
                </div>
                <div class="mode_buttons">
                    <div v-on:click="$root.favorites.enabled = false" class="mode_end">
                        {{ i18n('modemenu.favorites.button.end') }}
                    </div>
                </div>
            </div>

            <div v-if="$root.profiles.enabled" id="mode_wrapper_profiles">
                <div class="mode_text">
                    <span class="mode_label">
                        {{ i18n('modemenu.profiles.name.label') }}:
                    </span>
                    <span class="mode_name">
                        {{ $root.profiles.form.profile_name }}
                    </span>
                </div>
                <div class="mode_buttons">
                    <router-link v-bind:to="link_profile()">
                        <div class="mode_settings">
                            {{ i18n('modemenu.profiles.button.settings') }}
                        </div>
                    </router-link>
                    <div v-on:click="submit_profile"
                         class="mode_end">
                        {{ i18n('modemenu.profiles.button.end') }}
                    </div>
                </div>
            </div>
        </div>
    `,
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Register a new WebAuthn device
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user_register_webauthn_device() {
    /**
     * convert RFC 1342-like base64 strings to array buffer
     * @param {mixed} obj
     * @returns {undefined}
     */
    function recursiveBase64StrToArrayBuffer(obj) {
        let prefix = '?BINARY?B?';
        let suffix = '?=';
        if (typeof obj === 'object') {
            for (let key in obj) {
                if (typeof obj[key] === 'string') {
                    let str = obj[key];
                    if (str.substring(0, prefix.length) === prefix && str.substring(str.length - suffix.length) === suffix) {
                        str = str.substring(prefix.length, str.length - suffix.length);

                        let binary_string = window.atob(str);
                        let len = binary_string.length;
                        let bytes = new Uint8Array(len);
                        for (var i = 0; i < len; i++)        {
                            bytes[i] = binary_string.charCodeAt(i);
                        }
                        obj[key] = bytes.buffer;
                    }
                } else {
                    recursiveBase64StrToArrayBuffer(obj[key]);
                }
            }
        }
    }

    /**
     * Convert a ArrayBuffer to Base64
     * @param {ArrayBuffer} buffer
     * @returns {String}
     */
    function arrayBufferToBase64(buffer) {
        var binary = '';
        var bytes = new Uint8Array(buffer);
        var len = bytes.byteLength;
        for (var i = 0; i < len; i++) {
            binary += String.fromCharCode( bytes[ i ] );
        }
        return window.btoa(binary);
    }

    if(interfaceData.options.userHasTwofaRegistrations) return;
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
        $('#registerWebauthn').val(i18n('settings.user.manage.browserNotSupported'));
        $('#registerWebauthn').attr('disabled', 'disabled');
        return;
    }

    window.fetch('webauthnServer.php?command=getCredentialArgs', {method:'GET',cache:'no-cache'}).then(function(response) {
        return response.json();
    }).then(function(json) {
        recursiveBase64StrToArrayBuffer(json);
        return json;
    }).then(function(createCredentialArgs) {
        return navigator.credentials.create(createCredentialArgs);
    }).then(function(cred) {
        return {
            clientDataJson: cred.response.clientDataJSON ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
            attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null
        };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
        return window.fetch('webauthnServer.php?command=registerDevice', {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        if (json.success) {
            $('#registerWebauthn').val(i18n('settings.user.manage.twofaRegistered'));
            $('#registerWebauthn').attr('disabled', 'disabled');
        } else {
            throw new Error(json.msg);
        }
    }).catch(function(error) {
        $('#registerWebauthn').val(error.message);
        $('#registerWebauthn').attr('disabled', 'disabled');
    });
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let shading_windalarm = clone(shif_device);
shading_windalarm.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">
    </shif-generic-l2>
`;

shif_comps_create('shadingWindalarm', shading_windalarm, shading_windalarm);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let shading_ventilation_l2 = clone(shif_device);
shading_ventilation_l2.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
shading_ventilation_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="change"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let shading_ventilation_l3 = clone(shif_device);
shading_ventilation_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
shading_ventilation_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status_minimal()"
                     v-bind:disabled="disabled"
                     v-on:click="change">
        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>
    </shif-generic-l2>
`;

shif_comps_create('shadingVentilation', shading_ventilation_l2, shading_ventilation_l3);



let shading_slider = clone(shif_device);
shading_slider.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, this.props.value);
}
shading_slider.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="props.maximumScaled"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step=5
                 v-bind:disabled="disabled"
                 v-on:change="change"
                 v-model:value="props.value">
        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>
    </shif-slider>
`;

shif_comps_create('shadingPosition',      shading_ventilation_l2, shading_slider);
shif_comps_create('shadingPositionSlats', shading_ventilation_l2, shading_slider);



let shading_buttons_l2 = clone(shif_device);
shading_buttons_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.l2.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.l2.color, text: texts.title.color}"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-bind:status="status"
                     v-on:click="level3(device, breadcrumb)">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;
let shading_buttons_l3 = clone(shif_device);
shading_buttons_l3.methods.change = function(event) {
    let upVar = this.control.variableOutputs[0];
    let downVar = this.control.variableOutputs[2];
    if((this.indexes.input == 0 || this.indexes.input == 2) &&
        !upVar.hasOwnProperty('value') &&
        !downVar.hasOwnProperty('value') &&
        upVar.peer == downVar.peer &&
        upVar.channel == downVar.channel &&
        upVar.name == downVar.name) {
        let down = (this.indexes.input == 2);
        if((this.output.type == 'integer' ||
            this.output.type == 'integer64' ||
            this.output.type == 'float') &&
            this.output.hasOwnProperty('minimumValue') &&
            this.output.hasOwnProperty('maximumValue')) {
            let output = clone(this.output);
            output.value = (down ? this.output.maximumValue : this.output.minimumValue);
            homegear.value_set_clickcounter(this, output, null);
        }
        else if(this.output.type == 'bool') {
            let output = clone(this.output);
            output.value = down;
            homegear.value_set_clickcounter(this, output, null);
        }
    }
    else homegear.value_set_clickcounter(this, this.output, true);
}
shading_buttons_l3.template = `
    <div class="control_button_wrapper">
        <shif-button v-bind:disabled="disabled"
                     v-on:click="change">
            <shif-icon v-bind:src="cond.icon.name"
                        v-bind:active="cond.icon.color">
            </shif-icon>
        </shif-button>
    </div>
`;

shif_comps_create('shadingButtons', shading_buttons_l2, shading_buttons_l3, shading_buttons_l3);
shif_comps_create('shadingButtonsSingleStep', shading_buttons_l2, shading_buttons_l3, shading_buttons_l3);
shif_comps_create('shadingButtonsUpDown', shading_buttons_l2, shading_buttons_l3, shading_buttons_l3);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let window_rainalarm = clone(shif_device);
window_rainalarm.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">
    </shif-generic-l2>
`;

shif_comps_create('windowRainalarm', window_rainalarm, window_rainalarm);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let window_status = clone(shif_device);
window_status.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place">
    </shif-generic-l2>
`;

let window_status_l3 = clone(shif_device);
window_status_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;

shif_comps_create('windowContact', window_status, window_status_l3);
shif_comps_create('windowHandle',  window_status, window_status_l3);

let window_buttons_l2 = clone(shif_device);
window_buttons_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.l2.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.l2.color, text: texts.title.color}"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-bind:status="status"
                     v-on:click="level3(device, breadcrumb)">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;
let window_buttons_l3 = clone(shif_device);
window_buttons_l3.methods.change = function(event) {
    let upVar = this.control.variableOutputs[0];
    let downVar = this.control.variableOutputs[2];
    if((this.indexes.input == 0 || this.indexes.input == 2) &&
        !upVar.hasOwnProperty('value') &&
        !downVar.hasOwnProperty('value') &&
        upVar.peer == downVar.peer &&
        upVar.channel == downVar.channel &&
        upVar.name == downVar.name) {
        let down = (this.indexes.input == 2);
        if((this.output.type == 'integer' ||
            this.output.type == 'integer64' ||
            this.output.type == 'float') &&
            this.output.hasOwnProperty('minimumValue') &&
            this.output.hasOwnProperty('maximumValue')) {
            let output = clone(this.output);
            output.value = (down ? this.output.maximumValue : this.output.minimumValue);
            homegear.value_set_clickcounter(this, output, null);
        }
        else if(this.output.type == 'bool') {
            let output = clone(this.output);
            output.value = down;
            homegear.value_set_clickcounter(this, output, null);
        }
    }
    else homegear.value_set_clickcounter(this, this.output, true);
}
window_buttons_l3.template = `
    <div>
        <div class="control_button_wrapper">
            <shif-button v-bind:disabled="disabled"
                         v-on:click="change">
                <shif-icon v-bind:src="cond.icon.name"
                           v-bind:active="cond.icon.color">
                </shif-icon>
            </shif-button>
        </div>
    </div>
`;

shif_comps_create('windowButtonsUpDown', window_buttons_l2, window_buttons_l3);
shif_comps_create('windowButtons', window_buttons_l2, window_buttons_l3);

let window_slider = clone(shif_device);
window_slider.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, this.props.value);
}
window_slider.provides = function () {
    return {
        checkbox_wanted: true,
    };
},
window_slider.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="props.maximumScaled"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step=5
                 v-bind:disabled="disabled"
                 v-on:change="change"
                 v-model:value="props.value">
    </shif-slider>
`;

shif_comps_create('windowPosition',      window_buttons_l2, window_slider);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let door_status = clone(shif_device);
door_status.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;

shif_comps_create('doorContact', door_status, door_status);
shif_comps_create('doorHandle',  door_status, door_status);
shif_comps_create('doorLock',  door_status, door_status);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let lighting_switch_l2 = clone(shif_device);
lighting_switch_l2.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
lighting_switch_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="change($event, true)"
                     v-on:click="level3(device, breadcrumb)">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;

let lighting_switch_l3 = clone(shif_device);
lighting_switch_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
};
lighting_switch_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status_minimal()"
                     v-on:click="change">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>

    </shif-generic-l2>
`;

shif_comps_create('lightingSwitch', lighting_switch_l2, lighting_switch_l3);



let lighting_brightness = clone(shif_device);
lighting_brightness.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, this.props.value);
}
lighting_brightness.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="props.maximumScaled"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step=5
                 v-on:change="change"
                 v-model:value="props.value">

        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>
    </shif-slider>
`;

shif_comps_create('lightingBrightness', lighting_switch_l2, lighting_brightness);
shif_comps_create('lightingSpeed', lighting_switch_l2, lighting_brightness);



let lighting_button_l2 = clone(shif_device);
lighting_button_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let lighting_button_l3 = clone(shif_device);
lighting_button_l3.methods.change = function(event, down) {
    homegear.value_set_clickcounter(this, this.output, down);
}
lighting_button_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place"
                     v-on:mousedown="change($event, true)"
                     v-on:mouseup="change($event, false)">
    </shif-generic-l2>
`;

shif_comps_create('lightingButton', lighting_button_l2, lighting_button_l3);
shif_comps_create('refresh', lighting_button_l2, lighting_button_l3);



let lighting_color_l2 = clone(shif_device);
lighting_color_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let lighting_color_l3 = clone(shif_device);
lighting_color_l3.methods.change = function(event) {
    this.props.value = event;
    homegear.value_set_clickcounter(this, this.output, this.props.value);
};
lighting_color_l3.template = `
    <shif-colorpicker v-bind:width="{max_pixels: 600, percent: 100}"
                      v-bind:height="{max_pixels: 620, percent: 100}"
                      v-bind:color="props.value"
                      v-bind:title="title"
                      v-on:input="change">

        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>

    </shif-colorpicker>
`;

shif_comps_create('lightingColor', lighting_color_l2, lighting_color_l3);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let lighting_function_l2 = clone(shif_device);
lighting_function_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.l2.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.l2.color, text: texts.title.color}"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-bind:status="status"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let lighting_function_l3 = clone(shif_device);
lighting_function_l3.methods.change = function(x) {
    homegear.value_set_clickcounter(this, this.output, x);
};
lighting_function_l3.computed.values = function () {
    return this.rendering
        .map(x => ({
            name:     x.definitions.texts.state.content,
            value:    x.condition.value,
        }));
};
lighting_function_l3.template = `
    <shif-dropdown v-bind:title="title"
                   v-bind:values="values"
                   v-bind:selected="props.value"
                   v-on:change="x => change(parseInt(x))">
        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>
    </shif-dropdown>
`;

shif_comps_create('lightingFunction', lighting_function_l2, lighting_function_l3);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let socket_switch_l2 = clone(shif_device);
socket_switch_l2.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
socket_switch_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="change"
                     v-on:click="level3(device, breadcrumb)">
        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>
    </shif-generic-l2>
`;

let socket_switch_l3 = clone(shif_device);
socket_switch_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
socket_switch_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status_minimal()"
                     v-on:click="change">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>

    </shif-generic-l2>
`;

shif_comps_create('socketSwitch', socket_switch_l2, socket_switch_l3);



let socket_button_l2 = clone(shif_device);
socket_button_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let socket_button_l3 = clone(shif_device);
socket_button_l3.methods.change = function(event, down) {
    homegear.value_set_clickcounter(this, this.output, down);
}
socket_button_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place"
                     v-on:mousedown="change($event, true)"
                     v-on:mouseup="change($event, false)">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;

shif_comps_create('socketButton', socket_button_l2, socket_button_l3);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function status_format(status, precision) {
    if (typeof(status) === 'string') {
        const regex = /^(\d+(?:[\.,]\d+)?)/;
        return status.replace(regex, (match) => this.float_formatted(match, precision));
    }

    for (let cur of status)
        cur.value = status_format.apply(this, [cur.value, precision]);

    return status;
}



let climate_main = clone(shif_device);
climate_main.computed.status_formatted = function () {
    return status_format.apply(this, [this.status_minimal(false), 1]);
};
climate_main.computed.icon = function () {
    return 'main' in this.icons
        ? this.icons.main
        : this.control.icons.main;
};
climate_main.template = `
    <shif-generic-l2 v-bind:icon="icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: icon.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;



let openweathermap_l2 = clone(shif_device);
openweathermap_l2.computed.status_formatted = function () {
    return status_format.apply(this, [this.status, 1]);
};
openweathermap_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.weather.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.weather.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click="level3(device, breadcrumb)">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;



shif_comps_create('humidity',             openweathermap_l2, climate_main);
shif_comps_create('temperature',          openweathermap_l2, climate_main);
shif_comps_create('climateCity',          openweathermap_l2, climate_main);
shif_comps_create('climateCloudcoverage', openweathermap_l2, climate_main);
shif_comps_create('climateDate',          openweathermap_l2, climate_main);
shif_comps_create('climatePressure',      openweathermap_l2, climate_main);
shif_comps_create('climateRain3h',        openweathermap_l2, climate_main);
shif_comps_create('climateSnow3h',        openweathermap_l2, climate_main);
shif_comps_create('climateSunrise',       openweathermap_l2, climate_main);
shif_comps_create('climateSunset',        openweathermap_l2, climate_main);
shif_comps_create('climateWeather',       openweathermap_l2, climate_main);
shif_comps_create('climateWinddirection', openweathermap_l2, climate_main);
shif_comps_create('climateWindgust',      openweathermap_l2, climate_main);
shif_comps_create('climateWindspeed',     openweathermap_l2, climate_main);
// shif_comps_create('OpenWeatherMap',    openweathermap_l2, openweathermap_l2);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let heating_slider_l2 = clone(shif_device);
heating_slider_l2.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
heating_slider_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="change"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;
let heating_slider_l3 = clone(shif_device);
heating_slider_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, this.props.value);
}
heating_slider_l3.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="parseFloat(props.maximumScaled)"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step="0.5"
                 v-bind:precision="1"
                 v-on:change="change"
                 v-bind:disabled="disabled"
                 v-model:value="props.value">
        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>
    </shif-slider>
`;

shif_comps_create('heatingSlider', heating_slider_l2, heating_slider_l3);



let heating_is_state_l2 = clone(shif_device);
heating_is_state_l2.template = `
    <shif-generic-l2 v-bind:icon="control.icons.temperature.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: control.icons.temperature.color, text: texts.title.color}"
                     v-bind:status="status"
                     v-bind:actions="true"
                     v-bind:place="place"
                     v-on:click="level3(device, breadcrumb)">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;
let heating_is_state_l3 = clone(shif_device);
heating_is_state_l3.template = `
    <shif-generic-l2 v-bind:icon="control.icons.temperature.name"
                     v-bind:title="title"
                     v-bind:active="{icon: control.icons.temperature.color, text: texts.title.color}"
                     v-bind:status="status"
                     v-bind:place="place">
    </shif-generic-l2>
`;

shif_comps_create('heatingIsState', heating_is_state_l2, heating_is_state_l3);



let heating_mode_l3 = clone(shif_device);
heating_mode_l3.computed.values = function () {
    return this.rendering
        .map(x => ({
            name:     x.definitions.texts.state.content,
            value:    x.condition.value,
            selected: x.condition.value == this.props.value,
        }));
};
heating_mode_l3.methods.change = function(x) {
    homegear.value_set_clickcounter(this, this.output, x);
}
heating_mode_l3.template = `
    <shif-radio v-bind:title="title"
                v-bind:values="values"
                v-bind:disabled="disabled"
                v-on:input="x => change(parseInt(x))">
        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>
    </shif-radio>
`;

shif_comps_create('heatingMode', heating_is_state_l2, heating_mode_l3);



let heating_window = clone(shif_device);
heating_window.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">
    </shif-generic-l2>
`;

shif_comps_create('heatingWindow', heating_window, heating_window);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let ventilation_mode_l2 = clone(shif_device);
ventilation_mode_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.l2.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.l2.color, text: texts.title.color}"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-bind:status="status"
                     v-on:click="level3(device, breadcrumb)">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;

let ventilation_mode_l3 = clone(shif_device);
ventilation_mode_l3.methods.change = function(x) {
    homegear.value_set_clickcounter(this, this.output, x);
};
ventilation_mode_l3.computed.values = function () {
    return this.rendering
        .map(x => ({
            name:     x.definitions.texts.state.content,
            value:    x.condition.value,
            selected: x.condition.value == this.props.value,
        }));
};
ventilation_mode_l3.template = `
    <shif-radio v-bind:title="title"
                v-bind:values="values"
                v-on:input="x => change(parseInt(x))">
        <template v-slot:profiles>
            <shif-checkbox-profiles v-bind:dev="dev"
                                    v-bind:output="output"
                                    v-bind:props="props" />
        </template>
    </shif-radio>
`;

shif_comps_create('ventilationMode', ventilation_mode_l2, ventilation_mode_l3);

let timer_l2 = clone(shif_device);
timer_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let timer_l3 = clone(shif_device);
timer_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}

timer_l3.template = `
    <form>
        <div class="timer_wrapper">
            <div>
                <input type="time" name="time">
            </div>
            <div>
                <select name="sun">
                    <option value="false">-</option>
                    <option value="sa">Sonnenaufgang</option>
                    <option value="su">Sonnenuntergang</option>
                </select>
            </div>
            <div>
                <select name="state">
                    <option value="false">off</option>
                    <option value="true">on</option>
                </select>
            </div>
            <div style="max-width: 456px;">
                <select class="select_day" name="day" multiple>
                    <option value="1">Mo.</option>
                    <option value="2">Di.</option>
                    <option value="3">Mi.</option>
                    <option value="4">Do.</option>
                    <option value="5">Fr.</option>
                    <option value="6">Sa.</option>
                    <option value="7">So.</option>
                </select>
            </div>
            <div>
                <select name="activ">
                    <option value="false">inactive</option>
                    <option value="true">active</option>
                </select>
            </div>
            <div>
                <input type="submit" name="submit" value="speichern">
            </div>
        </div>
    </form>
`;

shif_comps_create('timer', timer_l2, timer_l3);

let media_buttons_l2 = clone(shif_device);
media_buttons_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.l2.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.l2.color, text: texts.title.color}"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-bind:status="status"
                     v-on:click="level3(device, breadcrumb)">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>
    </shif-generic-l2>
`;

let media_buttons_l3 = clone(shif_device);
media_buttons_l3.methods.change = function(event) {
    let upVar = this.control.variableOutputs[0];
    let downVar = this.control.variableOutputs[2];
    if((this.indexes.input == 0 || this.indexes.input == 2) &&
        !upVar.hasOwnProperty('value') &&
        !downVar.hasOwnProperty('value') &&
        upVar.peer == downVar.peer &&
        upVar.channel == downVar.channel &&
        upVar.name == downVar.name) {
        let down = (this.indexes.input == 2);
        if((this.output.type == 'integer' ||
            this.output.type == 'integer64' ||
            this.output.type == 'float') &&
            this.output.hasOwnProperty('minimumValue') &&
            this.output.hasOwnProperty('maximumValue')) {
            let output = clone(this.output);
            output.value = (down ? this.output.maximumValue : this.output.minimumValue);
            homegear.value_set_clickcounter(this, output, null);
        }
        else if(this.output.type == 'bool') {
            let output = clone(this.output);
            output.value = down;
            homegear.value_set_clickcounter(this, output, null);
        }
    }
    else homegear.value_set_clickcounter(this, this.output, true);
}

media_buttons_l3.template = `
    <div class="control_button_wrapper">
        <shif-button v-bind:disabled="disabled"
                     v-on:click="change">
            <shif-icon v-bind:src="cond.icon.name"
                        v-bind:active="cond.icon.color">
            </shif-icon>
        </shif-button>
    </div>
`;

shif_comps_create('mediaButtons', media_buttons_l2, media_buttons_l3);

Vue.component('shif-ctrl-summary', {
    mixins: [mixin_components, mixin_profiles, mixin_print_mounted()],

    props: [
        'icon',
        'title',
        'status',
        'actions',
        'devs',
        'role_id',
    ],

    data: function () {
        return {
            submenu_show: false,
        };
    },

    computed: {
        dev_objs: function () {
            return this.devs.map(x => this.find_component(this.interfaceData.devices[x], 'l2'));
        },

        profiles_by_role: function () {
            return this.role_profiles(this.role_id);
        },
    },

    provide: function () {
        return {
            layer: 2,
        };
    },

    methods: {
        toggle_all: function(action) {
            const varInRole = 'roleId' in action
                            ? this.interfaceData.roles[action.roleId].varInRole
                            : this.interfaceData.roles[this.role_id].varInRole;

            let ops = [];
            for (const peer in varInRole)
                for (const channel in varInRole[peer])
                    for (const name in varInRole[peer][channel]) {
                        const cur = varInRole[peer][channel][name];

                        if ('direction' in cur && cur.direction === 0)
                            continue;

                        if (! (peer    in this.interfaceData.map_invoke &&
                               channel in this.interfaceData.map_invoke[peer] &&
                               name    in this.interfaceData.map_invoke[peer][channel]))
                            continue;
                        const devs = this.interfaceData.map_invoke[peer][channel][name];

                        const disabled = devs.some(dev => {
                            const device  = this.interfaceData.devices[dev.databaseId];
                            const control = device.controls[dev.control];

                            for (const i in control.variableInputs) {
                                if (check_disabled(device, {control: dev.control, input: i}).flag)
                                    return true;
                            }

                            return false;
                        });


                        if (! disabled)
                            ops.push({
                                input: {peer, channel, name},
                                value: action.value
                            });
                    }

            this.$homegear.value_set_multi(ops);
        },

        get_icon_or_default: function (profile) {
            return get_or_default(profile, 'icon', 'slider_1');
        },
    },

    template: `
        <div>
            <shif-generic-l2 v-bind:icon="icon"
                             v-bind:icon_rotate="submenu_show"
                             v-bind:title="title"
                             v-bind:status="status"
                             v-bind:actions="true"
                             v-bind:accordion="true"
                             v-on:click="submenu_show = !submenu_show"
                             class="accordion">
            </shif-generic-l2>

            <shif-trans-drop-down>
                <div v-if="submenu_show"
                     class="categoryContainer"
                     style="margin-top: 15px;">

                    <div class="control_button_wrapper">
                        <template v-for="action in actions">
                            <shif-button v-bind:width="(100 / actions.length) + '%'"
                                         v-on:click="toggle_all(action)">
                                {{ action.buttonText }}
                            </shif-button>
                        </template>
                    </div>

                    <div class="profiles_wrapper">
                        <template v-for="i in profiles_by_role">
                            <shif-generic-l2 v-bind:icon="get_icon_or_default(i)"
                                             v-bind:title="i.name"
                                             v-bind:status="i18n('modemenu.profiles.name.label')"
                                             v-bind:active="{icon: i.isActive ? 'active' : ''}"
                                             v-on:click="profile_start(i)">
                            </shif-generic-l2>
                        </template>
                    </div>

                    <template v-for="dev in dev_objs">
                        <component v-bind="dev" v-bind:include_place="true" />

                        <template v-if="debug">
                            {{ dev | pretty | log }}
                        </template>
                    </template>
                </div>
            </shif-trans-drop-down>
        </div>
    `,
});




let ShifAllDevices = {
    mixins: [mixin_print_mounted()],

    data: function () {
        let states = {};

        /**
         * Initialize the states so that the status component can show an empty
         * status line without error.
         **/
        for (const key of Object.keys(interfaceData.roles).map(Number))
            states[key] = [];

        return {
            status_initialized: false,
            states: states,
        };
    },

    computed: {
        map_roles_devs: function () {
            let ret = {};

            for (const dev_idx in interfaceData.devices) {
                let dev = interfaceData.devices[dev_idx];
                if (!('role' in dev))
                    continue;

                const role = dev.role;
                if (!(role in ret))
                    ret[role] = [];

                if (ret[role].indexOf(dev_idx) === -1)
                    ret[role].push(dev_idx);
            }

            return ret;
        },
    },

    methods: {
        status_gather_invokes: function (role, role_id) {
            let ret = [{
                type: get_or_default(role, 'aggregationType', 2),
                ids:  [{'id':role_id,'direction':0}],
            }];

            if (!('rolesInclude' in role))
                return ret;

            for (const role_inc of role.rolesInclude) {
                let ids = [];
                for(const index in role_inc.roles) {
                    ids.push({'id':role_inc.roles[index],'direction':0});
                }

                ret.push({
                    type: get_or_default(role_inc, 'aggregationType', 2),
                    ids:  ids,
                });
            }

            return ret;
        },

        status_text: function (role, texts_idx) {
            if (!('texts' in role))
                return '?';

            if ((typeof(texts_idx) === 'number' && role.texts.length > texts_idx) ||
                (typeof(texts_idx) === 'string' && texts_idx in role.texts))
                return role.texts[texts_idx];

            if (role.texts.length == 1)
                return role.texts[0];

            return '?';
        },

        status: function (role_id) {
            const role = interfaceData.roles[role_id];
            const invokes_descs = this.status_gather_invokes(role, role_id);

            if ('l2_status' in role) {
                this.states[role_id] = [];
                return;
            }

            for (const invoke_desc of invokes_descs) {
                this.$homegear.invoke({
                    jsonrpc: '2.0',
                    method: 'aggregateRoles',
                    params: [invoke_desc.type, invoke_desc.ids, []],
                }, (res) => {
                    /**
                     * Updating this is a two step process:
                     * 1) We need to fetch the new values from upstream.
                     * 2) We need to zero out the outdated old values.
                     **/
                    const keys = Object.keys(res.result)
                                       .filter(x => x !== 'variableCount');
                    for (const key of keys) {
                        /**
                         * We have to be very careful here, to not break Vue's
                         * reactiveness.
                         * 1) In case we need to insert a value, push is needed.
                         * 2) In case we need to change a value, direct
                         *    assignment of the single object members at
                         *    respective array index is needed.
                         **/
                        for (let i = 0; i < this.states[role_id].length; ++i) {
                            if (this.states[role_id][i].raw == key) {
                                set_or_extend(this.states[role_id], i, {
                                    key:   this.status_text(role, key),
                                    value: res.result[key],
                                    raw:   key,
                                });
                                break;
                            }
                        }
                    }

                    for (let j = this.states[role_id].length - 1; j >= 0; --j) {
                        if (keys.indexOf(this.states[role_id][j].raw) === -1)
                            this.states[role_id][j].value = 0;
                    }
                });
            }
        },

        states_clean: function (role_id) {
            return this.states[role_id];

            // return this.states[role_id].some(x => x.value !== 0)
                    // ? this.states[role_id]
                    // : [];
        },

        role_update_handle: function (role_id) {
            return this.status(Number(role_id));
        },
    },

    mounted: function () {
        for (const key of Object.keys(interfaceData.roles).map(Number)) {
            const role = interfaceData.roles[key];

            if (! ('texts' in role))
                continue;

            /**
             * Always reinitialize to an empty array here.
             * In case of a homegear reconnect, we would duplicate the
             * status text otherwise.
             **/
            this.states[key] = [];
            /**
             * This must be a for-in loop! Do not change it into a
             * traditional for loop or a map.
             * We need iterate over both, integer keys, as well as object
             * keys (iteration order does not matter for the integer keys).
             **/
            for (const text_idx in role.texts)
                this.states[key].push(
                    {
                        key:   this.status_text(role, text_idx),
                        raw:   text_idx + '',
                        value: 0,
                    }
                );
            this.status(key);
        }

        this.$root.$on('role-update', this.role_update_handle);
    },

    beforeDestroy: function () {
        this.$root.$off('role-update', this.role_update_handle);
    },

    template: `
        <div>
            <template v-for="(devs, role) in map_roles_devs">
                <template v-if="role in interfaceData.roles">
                    <shif-ctrl-summary
                        v-bind:actions="interfaceData.roles[role].invokeOutputs"
                        v-bind:icon="interfaceData.roles[role].icon"
                        v-bind:title="interfaceData.roles[role].name"
                        v-bind:devs="devs"
                        v-bind:role_id="role"
                        v-bind:status="states_clean(role)">
                    </shif-ctrl-summary>
                </template>
                <template v-else>
                    {{ "This role is not defined: " + role | log }}
                </template>
            </template>
        </div>
    `,
};



let ShifHouseDevices = {
    mixins: [mixin_print_mounted('shif-house-devices')],

    components: {
        ShifAllDevices,
    },

    template: `
        <shif-mainmenu-tabs>
            <shif-all-devices />
        </shif-mainmenu-tabs>
    `
};



let ShifAllDevicesLvl3 = {
    mixins: [mixin_print_mounted('shif-all-devices-level-3')],

    template: `
        <shif-house-collected-entries v-bind:layer="3" />
    `
};

let ShifFavoritesLvl3 = {
    mixins: [mixin_print_mounted('shif-favorites-level-3')],

    template: `
        <shif-house-collected-entries v-bind:layer="3" />
    `
};



let ShifFavoritesLvl1 = {
    mixins: [mixin_print_mounted('shif-favorites-level-1')],

    template: `
        <shif-house-collected-entries v-bind:layer="2"
                                      v-bind:favorites="true"
                                      v-bind:include_place="true" />
    `,
};



let ShifFavorites = {
    mixins: [mixin_print_mounted('shif-favorites')],

    template: `
        <shif-paging id="favorites" />
    `
};

Vue.component('shif-house-floors-rooms', {
    mixins: [mixin_print_mounted()],

    computed: {
        has_multiple_floors: function () {
            return Object.keys(interfaceData.floors).length > 1;
        },

        unassigned_rooms: function () {
            const tmp = Object.keys(interfaceData.floors)
                              .map(x => interfaceData.floors[x].rooms)
                              .flat();

            let assigned = {};
            for (const i of tmp)
                assigned[i] = true;

            return Object.keys(interfaceData.rooms)
                         .filter(x => ! assigned[x]);
        },
    },

    data: function () {
        let roomSelectWrapperWidth = 185 + 30;
        let windowWidth = $( window ).width() - 100;
        let maxWidth = 1080;

        const rooms_per_floor = Object.keys(interfaceData.floors)
                                      .map(x => interfaceData.floors[x].rooms.length);
        const max_rooms_per_floor = Math.max.apply(this, rooms_per_floor);

        let roomSelectWrapperMaxCount = windowWidth / roomSelectWrapperWidth;
        roomSelectWrapperMaxCount = roomSelectWrapperMaxCount.toString().split('.')[0];

        if (max_rooms_per_floor > roomSelectWrapperMaxCount) {
            maxWidth = roomSelectWrapperMaxCount * roomSelectWrapperWidth + 20;
        }
        else {
            maxWidth = max_rooms_per_floor * roomSelectWrapperWidth + 25;
        }

        return {
            maxWidth: maxWidth + 'px',
        };
    },

    template: `
        <div id="house_rooms" v-bind:style="{'max-width': maxWidth}">
            <template v-for="floor_val, floor_key in interfaceData.floors">
                <div v-if="has_multiple_floors || unassigned_rooms.length > 0"
                     class="roomSelectTitle">
                    {{ floor_val.name }}
                </div>

                <div class="rooms_wrapper">
                    <shif-room v-for="room_val in floor_val.rooms"
                               v-bind:key="room_val"
                               v-bind:floor="{key: floor_key, value: floor_val}"
                               v-bind:room="room_val" />
                </div>
            </template>

            <template v-if="unassigned_rooms.length > 0">
                <div class="roomSelectTitle">
                    {{ i18n('house.storyless') }}
                </div>

                <div class="rooms_wrapper">
                    <shif-room v-for="room_val in unassigned_rooms"
                               v-bind:key="room_val"
                               v-bind:floor="{key: -1}"
                               v-bind:room="room_val" />
                </div>
            </template>
        </div>
    `,
});



let ShifHouseLvl3 = {
    mixins: [mixin_print_mounted('shif-house-lvl3')],

    template: `
        <shif-house-collected-entries v-bind:layer="3" />
    `
};



let ShifHouseLvl2 = {
    mixins: [mixin_print_mounted('shif-house-lvl2')],

    template: `
        <shif-house-collected-entries v-bind:layer="2" />
    `
};



let ShifHouseRooms = {
    mixins: [mixin_print_mounted('shif-house-rooms')],

    template: `
        <shif-mainmenu-tabs>
            <shif-house-floors-rooms />
        </shif-mainmenu-tabs>
    `
};



let ShifHouse = {
    mixins: [mixin_print_mounted('shif-house')],

    template: `
        <shif-paging id="house" />
    `,
};

let ShifLog = Vue.component('shif-log', {
    mounted: function () {
        viewLog('-----------------------------')
    },

    template: `
        <pre id="log" class="content content_single">
        </pre>
    `
});

let ShifProfilesGlobal = {
    mixins: [mixin_profiles, mixin_print_mounted('shif-profiles-global')],

    methods: {
        get_icon_or_default: function (profile) {
            return get_or_default(profile, 'icon', 'slider_1');
        },
    },

    template: `
        <div id="profiles" class="content content_single">
            <div class="profiles_wrapper">
                <template v-for="i in global_profiles">
                    <shif-generic-l2 v-bind:icon="get_icon_or_default(i)"
                                     v-bind:title="i.name"
                                     v-bind:active="{icon: i.isActive ? 'active' : ''}"
                                     v-on:click="profile_start(i)">
                    </shif-generic-l2>
                </template>
            </div>
        </div>
    `
};



let ShifProfiles = {
    mixins: [mixin_print_mounted('shif-profiles')],

    components: {
        ShifProfilesGlobal,
    },

    template: `
        <shif-mainmenu-tabs>
            <shif-profiles-global />
        </shif-mainmenu-tabs>
    `
};

Vue.component('shif-settings-element', {
    mixins: [mixin_print_mounted()],

    props: {
        name:        { type: String, required: true, },
        description: { type: String, },
        icon:        { type: String, default: 'slider_1'},
        translate:   { type: Boolean, default: true, }
    },
    template: `
        <div class="button">
            <shif-icon v-if="icon" classname="button_icon" v-bind:src="icon" />
            <div class="button_text">
                <template v-if="description && description.length > 0">
                    <div class="button_title">{{ translate ? i18n(name) : name }}</div>
                </template>
                <template v-else="description && description.length > 0">
                    <div class="button_title button_no_description">{{ translate ? i18n(name) : name }}</div>
                </template>
                <template v-if="description && description.length > 0">
                    <div class="button_status" style="display:block;">{{ translate ? i18n(description) : description }}</div>
                </template>
            </div>
            <div class="button_action">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg" x="0" y="0" width="370.81" height="370.81" viewBox="0 0 370.81 370.81">
                    <g id="Ebene_1">
                        <path d="M77.9 345.97L102.03 370.81 292.92 185.41 102.03 0 77.9 24.85 243.18 185.41z"/>
                    </g>
                </svg>
            </div>
        </div>
    `
});



let ShifSettingsLicenses = {
    mixins: [mixin_print_mounted('shif-settings-licenses')],

    computed: {
        data: function () {
            return licenses;
        },
    },

    methods: {
        log_hook: function () {
            this.$router.push('/log');
        },
    },

    template: `
        <div>
        <div class="table1">
            <table>
                <thead>
                    <th v-on:click="log_hook">{{ i18n('settings.about.table.name') }}</th>
                    <th>{{ i18n('settings.about.table.version') }}</th>
                    <th>{{ i18n('settings.about.table.rights') }}</th>
                    <th>{{ i18n('settings.about.table.license') }}</th>
                    <th>{{ i18n('settings.about.table.license.url') }}</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ interfaceData.manifest.name }}</td>
                        <td>{{ interfaceData.manifest.revision }}</td>
                        <td>{{ interfaceData.manifest.author }}</td>
                        <td>{{ interfaceData.manifest.license }}</td>
                        <td>{{ interfaceData.manifest.licenseurl }}</td>
                    </tr>
                    <tr v-for="i in data">
                        <td>{{ i.name }}</td>
                        <td>{{ i.version }}</td>
                        <td>{{ i.rights }}</td>
                        <td>{{ i.licensename }}</td>
                        <td>{{ i.licenseurl }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    `
};



let ShifSettingsUser = {
    mixins: [mixin_print_mounted('shif-settings-user')],

    data: function () {
        return {
            options:   interfaceData.options,
            startpaths: [
                'favorites',
                'house.tab.rooms',
                'house.tab.devices',
                'house.tab.profiles',
            ],
            languages: interfaceData.i18n.languages,
            name:      this.$route.name,

            form: {
                name: 'user_edit',
                startPath: interfaceData.options.startPath,
                language:  interfaceData.options.language,
                theme:     interfaceData.options.theme,
                color:     interfaceData.options.highlight,
            }
        }
    },

    computed: {
        themes: function () {
            return interfaceData.themes.filter(x => x.name !== 'standard' &&
                                                    x.name !== 'highlight');
        },

        two_fa_value: function () {
            return this.options.userHasTwofaRegistrations
                ? i18n(this.name + '.twofaRegistered')
                : i18n(this.name + '.registerTwofa')
        },
    },

    methods: {
        form_submit: function () {
            this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'getUserMetadata',
                params: []
            }, (data) => {
                let new_settings = data.result;

                new_settings.locale    = this.form.language;

                if (new_settings.interface === undefined)
                    new_settings.interface = {};

                Object.assign(new_settings.interface, {
                    language:  this.form.language  || this.options.language  || 'en-US',
                    startPath: this.form.startPath || this.options.startPath || 'house.tab.rooms',
                    theme:     this.form.theme     || 'dark',
                    highlight: this.form.color     || '#e3a104',
                });

                this.$homegear.invoke({
                    jsonrpc: '2.0',
                    method: 'setUserMetadata',
                    params: [new_settings]
                }, function () {
                    window.location.reload(true);
                })
            })
        },

        two_fa_register_dev: function () {
            return user_register_webauthn_device()
        },
    },

    template: `
        <div class="user_wrapper">
            <form v-bind:id="form.name"
                  v-bind:name="form.name"
                  action="javascript:void(0);"
                  v-on:submit.stop="form_submit">

                <template v-if="options.twofaChangeable && options.twofaEnabled">
                    <div class="form-group">
                        <div class="label">{{ i18n(name + '.twofa') }}:</div>
                        <input id="registerWebauthn"
                               type="button"
                               v-bind:disabled="options.userHasTwofaRegistrations"
                               v-bind:value="two_fa_value"
                               v-on:click="two_fa_register_dev" />
                    </div>
                </template>

                <template v-if="options.languageChangeable">
                    <div class="form-group">
                        <div class="label">{{ i18n(name + '.language') }}:</div>
                        <select id="language"
                                name="language"
                                v-model="form.language">
                            <option v-for="value, key in languages"
                                    v-bind:value="key"
                                    autocomplete="off">
                                {{ value.name }}
                            </option>
                        </select>
                    </div>
                </template>

                <div class="form-group">
                    <div class="label">{{ i18n(name + '.startpath') }}:</div>
                    <select id="startpath"
                            name="startpath"
                            v-model="form.startPath">
                        <option v-for="i in startpaths"
                                v-bind:value="i"
                                autocomplete="off">
                            {{ i18n(i) }}
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="label">{{ i18n(name + '.theme') }}:</div>
                    <select id="theme"
                            name="theme"
                            v-model="form.theme">
                        <option v-for="i in themes"
                                v-bind:value="i.name"
                                autocomplete="off">
                                {{ i18n(name + '.theme.' + i.name) }}
                        </option>
                    </select>
                </div>

                <div id="user_highlight_display" class="form-group">
                    <div class="label">{{ i18n(name + '.highlight') }}:</div>
                    <input id="highlight"
                           type="hidden"
                           name="highlight"
                           v-bind:value="options.highlight" />
                    <shif-colorpicker v-bind:width=" {max_pixels: 600, percent: 100}"
                                      v-bind:height="{max_pixels: 620, percent: 100}"
                                      v-bind:color="options.highlight"
                                      v-model="form.color"
                                      />
                    <div style="clear:both;"></div>
                </div>

                <div class="form-group">
                    <input type="submit"
                           v-bind:name="form.name"
                           v-bind:value="i18n(name + '.save')" />
                </div>

            </form>
        </div>
    `
};



let ShifSettingsItems = function (level) {
    return {
        mixins: [mixin_menus, mixin_print_mounted('shif-settings-items')],

        methods: {
            elements: function (level) {
                return interfaceData.menu.filter(x => x.mainmenu === 'settings' &&
                                                      x.level    === String(level) &&
                                                      ! this.disabled('menu', x.name));
            },
        },

        template: `
            <div>
                <template v-for="i in elements(${level})">
                    <router-link v-bind:to="{name: i.name}">
                        <shif-settings-element v-bind:key="i.name"
                                               v-bind:icon="i.icon"
                                               v-bind:name="i.name"
                                               v-bind:description="i.description" />
                    </router-link>
                </template>
            </div>
        `,
    };
};



let ShifSettingsFavorites = {
    data: function () {
        return {
            state: this.$root.favorites,
        };
    },

    watch: {
        'state.enabled': function () {
            if (this.state.enabled) {
                this.$root.profiles.enabled = false;
                this.$router.push({name: 'house.tab.rooms'});
            }
        },
    },

    template: `
        <div class="device_wrapper">
            <div class="device"
                 v-on:click.prevent="state.enabled = ! state.enabled">
                <shif-title>{{ i18n('settings.favorites.mode') }}</shif-title>
                <shif-checkbox v-model="state.enabled" />
            </div>
        </div>
    `
};



let ShifSettingsProfiles = {
    mixins: [mixin_print_mounted('shif-settings-profile')],

    methods: {
        link: function (profile_id) {
            return {
                name: 'settings.profiles.profile',
                params: {
                    profile: profile_id,
                },
            };
        },
    },

    template: `
        <div>
            <div class="profiles_wrapper">
                <template v-for="i in interfaceData.profiles">
                    <template v-if="i.editable != '' || !('editable' in i)">
                        <router-link v-bind:to="link(i.id)">
                            <shif-settings-element v-bind:key="i.name"
                                                v-bind:name="i.name"
                                                v-bind:translate="false"
                                                v-bind:icon="i.icon"
                                                description=""
                                                />
                        </router-link>
                    </template>
                </template>

                <router-link v-bind:to="{name: 'settings.profiles.new'}">
                    <shif-settings-element v-bind:name="i18n('settings.profiles.new')"
                                           v-bind:translate="false"
                                           description=""
                                           icon="plus_1"
                                           />
                </router-link>
            </div>
        </div>
    `
};



let ShifSettingsProfileRoleValue = {
    mixins: [mixin_print_mounted('shif-settings-profile-role-value')],

    props: {
        value: {
            required: true,
        },
        role_id: {
            required: true,
        },
    },

    data: function () {
        return {
            value_: this.value,
        };
    },

    computed: {
        role: function () {
            return interfaceData.roles[this.role_id];
        },

        role_values: function () {
            return Object.keys(this.role.roleProfileValues.options)
                         .map(x => ({id: x, name: this.role.roleProfileValues.options[x]}))
                         .concat({id: null, name: '---'});
        },
    },

    watch: {
        value_: function () {
            this.$emit('input', this.value_);
            this.$emit('change', this.value_);
        },
    },

    template: `
        <div>
            <select v-if="role.roleProfileValues.type === 'select'"
                    v-model="value_">
                <option v-for="i in role_values"
                        v-bind:value="i.id">
                    {{ i.name }}
                </option>
            </select>
        </div>
    `,
};



let ShifSettingsProfile = {
    mixins: [mixin_profiles, mixin_print_mounted('shif-settings-profile')],

    components: {
        ShifSettingsProfileRoleValue,
    },

    data: function () {
        if (this.$route.params.profile === undefined ||
            ! (this.$route.params.profile in interfaceData.profiles))
            return {
                mode: 'add',
                profile: null,
                form: {
                    name: 'profile_add',
                    icon: 'slider_1',
                    profile_name: '',
                    role: {
                        role: null,
                        value: null,
                    },
                    location: {
                        floor:  null,
                        room:   null,
                        global: false,
                    },
                }
            };

        const profile = interfaceData.profiles[this.$route.params.profile];

        if (this.$root.profiles.enabled) {
            return {
                mode: 'edit',
                profile: profile,
                form: this.$root.profiles.form,
            };
        }

        const [floor, room, global] = profile.locations.length === 0
                ? [null, null, false, null]
                : [ profile.locations[0].floorId, profile.locations[0].roomId,
                    profile.global === true];

        const role = profile.roles !== undefined && profile.roles.length > 0
                        ? profile.roles[0]
                        : {role: null, value: null};

        return {
            mode: 'edit',
            profile: profile,
            form: {
                name: 'profile_edit',
                icon: profile.icon,
                profile_name: profile.name,
                location: {
                    floor:  floor === undefined ? null : floor,
                    room:   room  === undefined ? null : room,
                    global: global,
                },
                role: role,
            },
        };
    },

    computed: {
        floors: function () {
            return Object.keys(interfaceData.floors)
                         .map(x => ({id: x, name: interfaceData.floors[x].name}))
                         .concat({id: null, name: '---'});
        },

        filtered_rooms: function () {
            let rooms = Object.keys(interfaceData.rooms);

            if (this.form.location.floor !== undefined &&
                this.form.location.floor !== null &&
                this.form.location.floor in interfaceData.floors)
                rooms = interfaceData.floors[this.form.location.floor]
                                     .rooms;

            return rooms.map(x => ({id: x, name: interfaceData.rooms[x].name}))
                        .concat({id: null, name: '---'});
        },

        filtered_roles: function () {
            return Object.keys(interfaceData.roles)
                         .filter(x => interfaceData.roles[x].roleProfileValues !== undefined)
                         .map(x => ({id: x, name: interfaceData.roles[x].name}))
                         .concat({id: null, name: '---'});
        },

        show_roles: function () {
            return interfaceData.options.roleProfileDefinable === true;
        },
    },

    methods: {
        form_submit: function (source) {
            switch (source) {
                case 'load':
                    this.$root.profiles.form = this.form;
                    this.$root.profiles.id   = this.profile.id;

                    return this.profile_load(this.profile,
                        () => this.$router.push({name: 'house.tab.rooms'})
                    );

                case 'save':
                    if (this.mode === 'edit')
                        return this.profile_update(this.profile, this.form);

                    return this.profile_add(this.form,
                        (result) => this.$router.replace({
                            name: 'settings.profiles.profile',
                            params: {
                                profile: result.result
                            },
                        })
                    );

                case 'delete':
                    return this.profile_delete(this.profile,
                        () => this.$router.replace({name: 'settings.profiles'})
                    );
            };
        },
    },

    mounted: function () {
        if (this.mode === 'edit' && ! this.$root.profiles.enabled)
            return this.profile_build_root_devs(this.profile);
    },

    template: `
        <div class="profiles_wrapper">
            <form v-bind:id="form.name"
                  v-bind:name="form.name"
                  action="javascript:void(0);"
                  v-on:submit.stop="">

                <div class="form-group">
                    <div class="label">{{ i18n('settings.profiles.profile.name') }}:</div>
                    <input id="profile_name"
                           type="text"
                           name="profile_name"
                           v-model="form.profile_name" />
                </div>

                <div class="form-group">
                    <div class="label">{{ i18n('settings.profiles.profile.icon') }}:</div>
                        <div id="profile_icons">
                            <label v-for="icon, key in interfaceIcons"
                                   v-bind:class="{selected: form.icon == key}"
                                   class="profile_icon_wrapper">
                                <shif-icon classname="profile_icon" v-bind:src="key" />
                                <input type="radio"
                                       name="profile_icon"
                                       v-bind:value="key"
                                       v-model="form.icon"
                                       hidden />
                            </label>
                        </div>
                </div>

                <div class="form-group">
                    <div class="label">{{ i18n('settings.profiles.profile.locations') }}:</div>
                    <div class="global"
                         v-on:click.prevent="form.location.global = !form.location.global">
                        <div class="label">{{ i18n('settings.profiles.profile.locations.global') }}:</div>
                        <shif-checkbox v-model="form.location.global" />
                    </div>
                    <div class="label">{{ i18n('settings.profiles.profile.locations.floor') }}:</div>
                    <select id="locationsFloors"
                            name="locationsFloors"
                            v-model="form.location.floor">
                        <option v-for="i in floors"
                                v-bind:value="i.id"
                                autocomplete="off">
                            {{ i.name }}
                        </option>
                    </select>

                    <div class="label">{{ i18n('settings.profiles.profile.locations.room') }}:</div>
                    <select id="locationsRooms"
                            name="locationsRooms"
                            v-model="form.location.room">
                        <option v-for="i in filtered_rooms"
                                v-bind:value="i.id"
                                autocomplete="off">
                            {{ i.name }}
                        </option>
                    </select>
                </div>

                <div v-if="show_roles"
                     class="form-group">
                    <div class="label">{{ i18n('settings.profiles.profile.roles') }}:</div>

                    <select v-model="form.role.role">
                        <option v-for="i in filtered_roles"
                                v-bind:value="i.id"
                                autocomplete="off">
                            {{ i.name }}
                        </option>
                    </select>

                    <shif-settings-profile-role-value
                        v-if="form.role.role"
                        v-model="form.role.value"
                        v-bind:role_id="form.role.role" />
                </div>

                <div class="form-group">
                    <input v-if="mode === 'edit' && form.role.role === null"
                           type="submit"
                           name="load"
                           v-on:click="form_submit('load')"
                           v-bind:value="i18n('settings.profiles.profile.load')" />

                    <input type="submit"
                           name="save"
                           v-on:click="form_submit('save')"
                           v-bind:value="i18n('settings.profiles.profile.save')" />

                    <input v-if="mode === 'edit'"
                           type="submit"
                           name="delete"
                           v-on:click="form_submit('delete')"
                           v-bind:value="i18n('settings.profiles.profile.delete')" />
                </div>
            </form>
        </div>
    `,
};



let ShifSettings = {
    mixins: [mixin_print_mounted('shif-settings')],

    template: `
        <shif-paging id="settings" />
    `,
};

function check_disabled(device, indexes) {
    function check_event_trigger(event) {
        if (event.trigger == undefined || event.trigger.length != 3)
            return false;

        const trigger = event.trigger;
        return trigger[0] in interfaceData.map_invoke &&
               trigger[1] in interfaceData.map_invoke[trigger[0]] &&
               trigger[2] in interfaceData.map_invoke[trigger[0]][trigger[1]];
    }

    function check_event_disable(event, control_idx) {
        return 'disable' in event &&
               control_idx in event.disable;
    }

    function check_event_condition(event) {
        return 'condition' in event &&
               'operator'  in event.condition &&
               'value'     in event.condition;
    }

    const ret_enabled = {flag: false};

    if (! ('metadata'    in device &&
           'event_hooks' in device.metadata))
        return ret_enabled;

    for (let event of device.metadata.event_hooks) {
        if (! check_event_trigger(event) ||
            ! check_event_disable(event, indexes.control) ||
            ! check_event_condition(event))
            continue;

        const trigger   = event.trigger;
        const disable   = event.disable;
        const condition = event.condition;

        if (! disable[indexes.control])
            continue;

        let devices = interfaceData.map_invoke[trigger[0]][trigger[1]][trigger[2]];
        for (let dev of devices) {
            let res = condition_check(condition,
                                      interfaceData.devices[dev.databaseId]
                                                   .controls[dev.control]
                                                   .variableInputs[dev.input]
                                                   .properties
                                                   .value);
            if (res)
                return {
                    flag: true,
                    texts: event.texts,
                };
        }

    }

    return ret_enabled;
}



Vue.use({
    install: function (Vue, opts) {
        Vue.prototype.$homegear = homegear;
    },
});


Vue.mixin({
    data: function () {
        return  {
            debug:          false,
            interfaceIcons: icons,
            interfaceData:  interfaceData,
        };
    },

    filters: {
        pretty: function (val) {
            return JSON.stringify(val, null, 4);
        },

        warn: function (val) {
            console.warn(val);
        },

        log: function (val) {
            console.log(val);
        },
    },

    methods: {
        level3: function (device, name) {
            const matched = this.$route.matched.map(x => x.name);
            const last    = matched[matched.length - 1]

            if (matched.indexOf('house.tab.rooms.room') !== -1) {
                return this.$router.push({
                    name: `${last}.device`,
                    params: {
                        floor: this.$route.params.floor,
                        room:  this.$route.params.room,
                        device: device,
                    },
                });
            }

            if (matched.indexOf('house.tab.devices') !== -1) {
                // TODO: verify that there is always at least a room and a floor
                return this.$router.push({
                    name: `${last}.device`,
                    params: {
                        floor: interfaceData.devices[device].floors[0],
                        room:  interfaceData.devices[device].rooms[0],
                        device: device,
                    },
                });
            }

            if (matched.indexOf('favorites.list') !== -1) {
                // TODO: verify that there is always at least a room and a floor
                return this.$router.push({
                    name: 'favorites.device',
                    params: {
                        floor: interfaceData.devices[device].floors[0],
                        room:  interfaceData.devices[device].rooms[0],
                        device: device,
                    },
                });
            }

            /**
             * Only act in those two cases!
             * There might have been a click on the disabled content
             * (content_small) which we do not care about.
             **/
            // throw 'BUG: you should not get here';
        },

        round: function (val, precision) {
            const mul = Math.pow(10, precision || 0);

            return Math.round(val * mul) / mul;
        },

        float_formatted: function (val, precision=1) {
            return parseFloat(val).toFixed(precision);
        },

        alert: window.alert,

        i18n: i18n,
    },
});



let ShifLogoff = Vue.component('shif-logoff', {
    mounted: function () {
        user_logoff();
    }
});


let router = new VueRouter({
    routes: [
        { path: '/',   name: 'index',  redirect: {name: interfaceData.options.startPath || 'house'}, },
        { path: '/nb', name: 'legacy', redirect: {name: 'index'}},

        { path: '/house', name: 'house', component: ShifHouse, redirect: {name: 'house.tab.rooms'},
            children: [
                {
                    name: 'house.tab.rooms',
                    path: 'rooms',
                    component: ShifHouseRooms,
                    meta: {breadcrumbs: ['house', 'house.tab.rooms'], base: true,},
                }, {
                    name: 'house.tab.rooms.room',
                    path: 'rooms/floor/:floor/room/:room',
                    components: {small: ShifHouseRooms, big: ShifHouseLvl2},
                    meta: {breadcrumbs: ['house', 'house.tab.rooms', 'house.tab.rooms.room']},
                }, {
                    name: 'house.tab.rooms.room.device',
                    path: 'rooms/floor/:floor/room/:room/device/:device',
                    components: {small: ShifHouseLvl2, big: ShifHouseLvl3},
                    meta: {breadcrumbs: ['house', 'house.tab.rooms', 'house.tab.rooms.room', 'house.tab.rooms.room.device']},
                },

                {
                    name: 'house.tab.devices',
                    path: 'devices',
                    component: ShifHouseDevices,
                    meta: {breadcrumbs: ['house', 'house.tab.devices'], base: true,},
                }, {
                    name: 'house.tab.devices.device',
                    path: 'devices/floor/:floor/room/:room/device/:device',
                    components: {small: ShifHouseDevices, big: ShifAllDevicesLvl3},
                    meta: {breadcrumbs: ['house', 'house.tab.devices', 'house.tab.rooms.room', 'house.tab.devices.device']},
                },

                {
                    path: 'profiles',
                    name: 'house.tab.profiles',
                    component: ShifProfiles,
                    meta: {breadcrumbs: ['house', 'house.tab.profiles'], base: true}
                }
            ],
        },

        { path: '/settings', name: 'settings', component: ShifSettings, redirect: {name: 'settings.list'},
            children: [
                {
                    name: 'settings.list',
                    path: 'list',
                    component: ShifSettingsItems(1),
                    meta: {breadcrumbs: ['settings'], base: true,},
                },
                {
                    name: 'settings.about',
                    path: 'about',
                    components: {small: ShifSettingsItems(1), big: ShifSettingsLicenses},
                    meta: {breadcrumbs: ['settings', 'settings.about']},
                },
                {
                    path: 'user',
                    name: 'settings.user',
                    components: {small: ShifSettingsItems(1), big: ShifSettingsItems(2)},
                    meta: {breadcrumbs: ['settings', 'settings.user']},
                },
                {
                    path: 'user/manage',
                    name: 'settings.user.manage',
                    components: {small: ShifSettingsItems(2), big: ShifSettingsUser},
                    meta: {breadcrumbs: ['settings', 'settings.user', 'settings.user.manage']},
                },
                {
                    path: 'favorites',
                    name: 'settings.favorites',
                    components: {small: ShifSettingsItems(1), big: ShifSettingsFavorites},
                    meta: {breadcrumbs: ['settings', 'settings.favorites']}
                },
                {
                    path: 'profiles',
                    name: 'settings.profiles',
                    components: {small: ShifSettingsItems(1), big: ShifSettingsProfiles},
                    meta: {breadcrumbs: ['settings', 'settings.profiles']}
                }, {
                    path: 'profiles/add',
                    name: 'settings.profiles.new',
                    components: {small: ShifSettingsProfiles, big: ShifSettingsProfile},
                    meta: {breadcrumbs: ['settings', 'settings.profiles', 'settings.profiles.new']}
                }, {
                    path: 'profiles/edit/:profile',
                    name: 'settings.profiles.profile',
                    components: {small: ShifSettingsProfiles, big: ShifSettingsProfile},
                    meta: {breadcrumbs: ['settings', 'settings.profiles', 'settings.profiles.profile']}
                },
            ],
        },

        { path: '/favorites', name: 'favorites', component: ShifFavorites, redirect: {name: 'favorites.list'},
            children: [
                {
                    name: 'favorites.list',
                    path: 'list',
                    component: ShifFavoritesLvl1,
                    meta: {breadcrumbs: ['favorites'], base: true},
                },
                {
                    name: 'favorites.device',
                    path: 'floor/:floor/room/:room/device/:device',
                    components: {small: ShifFavoritesLvl1, big: ShifFavoritesLvl3},
                    meta: {breadcrumbs: ['favorites', 'house.tab.rooms.room', 'favorites.device']},
                }
            ],
        },

        {
            path: '/log',
            name: 'log',
            component: ShifLog,
            meta: {breadcrumbs: ['log']},
        },
        { path: '/logoff',    name: 'logoff',    component: ShifLogoff, },
    ],
});



let app = new Vue({
    data: {
        favorites: {
            enabled: false,
        },
        profiles: {
            devs:    {},
            enabled: false,
            active:  null,
        },
    },

    // Hack: decrease .content height when modemenu is enabled.
    computed: {
        modemenu_show: function () {
            return this.favorites.enabled === true ||
                   this.profiles.enabled === true;
        },
    },

    router: router,

    template: `
        <div id="inhalt" v-bind:class="{'modemenu-visible': modemenu_show}">
            <router-view />

            <shif-modemenu />
            <shif-mainmenu />
        </div>
    `,
});



let breadcrumbs = new Vue({
    router: router,

    computed:  {
        routes_with_proper_names: function () {
            if (this.$route.meta === undefined ||
                this.$route.meta.breadcrumbs === undefined)
                return [];

            let routes = this.$route.meta.breadcrumbs
                                         .map(name => ({
                                            link:     name,
                                            name:     this.get_name(name),
                                            disabled: false,
                                         }))
                                         .filter(x => x.name !== '?');

            if (routes.length > 0)
                routes[routes.length - 1].disabled = true;

            return routes;
        },

        back_wanted: function () {
            return (! this.$route.meta.base) &&
                   this.routes_with_proper_names.length > 1;
        },
    },

    methods: {
        get_name: function (route_name) {
            function floor() {
                if (! interfaceData.options.showFloor)
                    return ''

                return Number(params.floor) === -1
                    ? i18n('house.storyless') + ' - '
                    : interfaceData.floors[params.floor].name + ' - ';
            }

            const params  = this.$route.params;

            switch (route_name) {
                case 'house.tab.rooms.room':
                    return floor() + interfaceData.rooms[params.room].name;

                case 'house.tab.rooms.room.device':
                case 'house.tab.devices.device':
                case 'favorites.device':
                    return interfaceData.devices[params.device].label;

                case 'log':
                    return 'Log';

                case 'settings.profiles.profile':
                    return interfaceData.profiles[params.profile].name;
            }

            return i18n(route_name);
        },
    },

    template: `
        <div id="breadcrumbs">
            <template>
                <shif-icon id="back" src="arrow_left_1"
                           v-bind:style="{visibility: back_wanted ? 'visible' : 'hidden'}"
                           v-on:click="$router.back()"/>
            </template>
            <div id="breadcrumb_wrapper">
                <template v-for="i in routes_with_proper_names">
                    <router-link v-bind:to="{name: i.link}"
                                 v-bind:disabled="i.disabled"
                                 v-bind:class="{disabled: i.disabled}"
                                 >{{ i.name }}</router-link>
                </template>
            </div>
        </div>
    `
});



let error = new Vue({
    el: '#error',

    data: {
        msgs: [],
    },

    methods: {
        remove_msg: function (msg_idx) {
            this.msgs.splice(msg_idx, 1);
        },

        push: function (msg) {
            this.msgs.unshift(msg);
        },

        set: function (msg) {
            this.msgs = [msg];
        },
    },

    template: `
        <div id="error">
            <div v-for="msg, i in msgs"
                 class="toast">
                <button class="toast_close" v-on:click="remove_msg(i)">{{i18n('hide')}}</button>
                <div class="toast_content" v-html="msg"></div>
            </div>
        </div>
    `
});

