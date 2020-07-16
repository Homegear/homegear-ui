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

    data: function () {
        return {
            click_icon_patched: this.$listeners &&
                                this.$listeners.click !== undefined &&
                                this.$listeners.click_icon === undefined,
        };
    },

    mounted: function () {
        if (this.click_icon_patched)
            this.$on('click_icon', this.$listeners.click);
    },

    beforeDestroy: function () {
        if (this.click_icon_patched)
            this.$off('click_icon', this.$listeners.click);
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
            if (sel.texts !== undefined &&
                sel.texts.state !== undefined &&
                sel.texts.state.content !== undefined) {
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

    inject: {
        layer: 'layer',
        role_id: {default: undefined,},
        room_id: 'room_id',
        floor_id: 'floor_id',
    },

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

            if (room.floors.length === 0)
                return `${i18n('house.storyless')} - ${room.name}`;

            return room.floors.map(x => interfaceData.floors[x])
                              .map(x => x.name + ' - ' + room.name)
                              .join(' | ');
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
                    floor_id: floor_key,
                    room_id:  room_val,
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
