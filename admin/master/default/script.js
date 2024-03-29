/*
    global
        mixin_modemenu
        check_disabled_backend
        check_disabled_frontend
*/
/*
    exported
        PromiseAllSettled
        clone
        set_or_extend
        shif_device
        shif_comps_create
        shif_register_disable_hooks
        user_logoff
        status_format
*/



////////////////////////////////////////////////////////////////////////////////////////////////////////
// globale Variablen
////////////////////////////////////////////////////////////////////////////////////////////////////////
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
        if (i !== undefined && i[key] !== undefined)
            return i[key];

    return '?';
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function condition_check(cond, values) {
    if (cond === undefined || cond === null)
        return true;

    if (cond.not !== undefined)
        return ! condition_check(cond.not, values);

    if (cond.and !== undefined)
        return cond.and.map(x => condition_check(x, values))
                       .every(x => x === true);

    if (cond.or !== undefined) {
        for (const i of cond.or)
            if (condition_check(i, values) === true)
                return true;
        return false;
    }

    if (cond.operator === undefined)
        return false;

    const value = typeof values === 'object' && cond.index !== undefined
                    ? values[cond.index].value
                    : values;

    switch (cond.operator) {
        case 'not':
        case 'ne':      return value != cond.value;
        case 'e':
        case 'eq':      return value == cond.value;
        case 'g':
        case 'gt':      return value  > cond.value;
        case 'l':
        case 'lt':      return value  < cond.value;
        case 'ge':      return value >= cond.value;
        case 'le':      return value <= cond.value;
        case 't':
        case 'true':    return true;
        case 'f':
        case 'false':
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
/**
 * For some reason, babel does not polyfill Promise.allSettled.
 * https://stackoverflow.com/a/39031032
 **/
function PromiseAllSettled(promises) {
    let wrappedPromises = promises.map(
        p => Promise.resolve(p)
                    .then(
                        val => ({ status: 'fulfilled', value: val }),
                        err => ({ status: 'rejected', reason: err })
                     )
    );
    return Promise.all(wrappedPromises);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function status_format(status, precision) {
    if (typeof(status) === 'string') {
        const regex = /^(\d+(?:[.,]\d+)?)/;
        return status.replace(regex, (match) => this.float_formatted(match, precision));
    }

    for (let cur of status)
        cur.value = status_format.apply(this, [cur.value, precision]);

    return status;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// VUE default components
////////////////////////////////////////////////////////////////////////////////////////////////////////
// Clone {{{
// src: https://stackoverflow.com/a/728694
function clone(obj) {
    let copy;

    // Handle the 3 simple types, and null or undefined
    if (null == obj || 'object' != typeof obj)
        return obj;

    // Handle Date
    if (obj instanceof Date) {
        copy = new Date();
        copy.setTime(obj.getTime());
        return copy;
    }

    // Handle Array
    if (obj instanceof Array) {
        copy = [];
        for (let i = 0, len = obj.length; i < len; i++)
            copy[i] = clone(obj[i]);

        return copy;
    }

    // Handle Object
    if (obj instanceof Object) {
        copy = {};
        for (let attr in obj) {
            if (obj.hasOwnProperty(attr)) copy[attr] = clone(obj[attr]);
        }
        return copy;
    }

    throw new Error('Unable to copy obj! Its type isn\'t supported.');
}
// }}}



// Mixins {{{
const mixin_device_control_wrapper = {
    inject: {
        layer: {default: 3},
    },

    computed: {
        device_control_wrapper: function () {
            return this.layer > 2 ? 'control_wrapper' : 'device_wrapper';
        },
    },
};
// }}}



// Utils {{{
Vue.component('TODO', {
    abstract: true,

    template: `<span style="color: red">TODO: <slot /></span>`
});



Vue.component('shif-title', {
    props: {
        classname: {type: String, default: undefined},
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

    computed: {
        icon: function () {
            const font_awesome = 'font-awesome/fa-';

            if (this.interfaceIcons[this.src] !== undefined)
                return this.interfaceIcons[this.src];

            if (this.src.startsWith(font_awesome)) {
                const key = this.src.replace(font_awesome, '');

                if (this.interfaceIcons.fontawesome_solid[key] !== undefined)
                    return this.interfaceIcons.fontawesome_solid[key];

                if (this.interfaceIcons.fontawesome_regular[key] !== undefined)
                    return this.interfaceIcons.fontawesome_regular[key];
            }

            if (this.interfaceData.iconFallback[this.src] !== undefined)
                return this.interfaceIcons[this.interfaceData.iconFallback[this.src]];

            return undefined;
        },
    },

    template: `
        <div v-bind:class="classname" v-on:click="$emit('click', this)">
            <template v-if="icon !== undefined">
                <div class="svg_icon"
                     v-bind:class="[src, active, {accordion_arrow_rotated: rotate}]"
                     v-html="icon">
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
    mixins: [mixin_device_control_wrapper],

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
        <div v-bind:class="[device_control_wrapper, {disabled: disabled.flag}]">
            <div class="device slider">
                <div class="checkbox_wrapper">
                    <div v-if="$slots.profiles"
                        class="checkbox_profiles_wrapper">
                        <slot name="profiles" />
                    </div>
                    <div v-if="$slots.automations" class="checkbox_automation_wrapper">
                        <slot name="automations" />
                    </div>
                    <div v-if="$slots.draggable" class="checkbox_draggable_wrapper">
                        <slot name="draggable" />
                    </div>
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
    mixins: [mixin_device_control_wrapper],

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
        <div v-bind:class="[device_control_wrapper, {disabled: disabled.flag}]">
            <div class="device">
                <div class="checkbox_wrapper">
                    <div v-if="$slots.profiles"
                        class="checkbox_profiles_wrapper">
                        <slot name="profiles" />
                    </div>

                    <div v-if="$slots.automations" class="checkbox_automation_wrapper">
                        <slot name="automations" />
                    </div>

                    <div v-if="$slots.draggable" class="checkbox_draggable_wrapper">
                        <slot name="draggable" />
                    </div>
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
    mixins: [mixin_device_control_wrapper],

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
        <div v-bind:class="[device_control_wrapper, {disabled: disabled.flag}]">
            <div class="device">
                <div class="checkbox_wrapper">
                    <div v-if="$slots.profiles"
                        class="checkbox_profiles_wrapper">
                        <slot name="profiles" />
                    </div>
                    <div v-if="$slots.automations" class="checkbox_automation_wrapper">
                        <slot name="automations" />
                    </div>
                    <div v-if="$slots.draggable" class="checkbox_draggable_wrapper">
                        <slot name="draggable" />
                    </div>
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
            <slot />
            <div class="checkbox_wrapper">
                <div v-if="$slots.draggable" class="checkbox_draggable_wrapper">
                    <slot name="draggable" />
                </div>
                <div v-if="$slots.automations" class="checkbox_automation_wrapper">
                    <slot name="automations" />
                </div>
            </div>
        </div>
    `,
});



Vue.component('shif-colorpicker', {
    mixins: [mixin_device_control_wrapper],

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
        title:  { type: String, default: ''},
        disabled: {
            type: Object,
            default: () => ({flag: false})
        },
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
        <div v-bind:class="[device_control_wrapper, {disabled: disabled.flag}]">
            <div class="device color">
                <div class="checkbox_wrapper">
                    <div v-if="$slots.profiles"
                        class="checkbox_profiles_wrapper">
                        <slot name="profiles" />
                    </div>
                    <div v-if="$slots.automations" class="checkbox_automation_wrapper">
                        <slot name="automations" />
                    </div>
                    <div v-if="$slots.draggable" class="checkbox_draggable_wrapper">
                        <slot name="draggable" />
                    </div>
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
});
// }}}



// Generic l2 {{{
Vue.component('shif-generic-l2', {
    mixins: [mixin_device_control_wrapper],

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

    computed: {
        computedClass() {
            if (typeof this.status !== 'undefined' && this.status.length < 1) {
            return 'title_only';
            }
            return '';
        }
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
        <div v-bind:class="[device_control_wrapper, {disabled: disabled.flag}]"
             v-on:mousedown="emit('mousedown')"
             v-on:mouseup="emit('mouseup')"
             v-on:click="emit('click')">
            <div class="device">
                <div class="checkbox_wrapper">

                    <div v-if="$slots.draggable" class="checkbox_draggable_wrapper">
                        <slot name="draggable" />
                    </div>

                    <div v-if="$slots.favorites" class="checkbox_favorites_wrapper">
                        <slot name="favorites" />
                    </div>

                    <div v-if="$slots.profiles" class="checkbox_profiles_wrapper">
                        <slot name="profiles" />
                    </div>

                    <div v-if="$slots.automations" class="checkbox_automation_wrapper">
                        <slot name="automations" />
                    </div>

                </div>

                <div v-on:click.stop="emit('click_icon')">
                    <shif-icon v-bind:src="icon"
                               v-bind:active="active.icon"
                               classname="device_icon">
                    </shif-icon>
                </div>
                <div class="device_text" v-bind:class="computedClass">
                    <shif-title v-bind:disabled="disabled">{{ title }}</shif-title>
                    <div v-if="place" class="device_location">
                        {{ place }}
                    </div>
                    <template v-if="status !== undefined">
                        <template v-if="typeof(status) === 'object'">
                            <shif-status v-bind:classname="active.text"
                                        v-bind:key_vals="status">
                            </shif-status>
                        </template>
                        <template v-else>
                            <shif-status v-bind:classname="active.text">{{ status }}</shif-status>
                        </template>
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



Vue.component('shif-multi-select', {
    props: {
        options: {
            type: [Array, Object],
            required: true,
        },
        value: {
            type: Array,
            default: function () { return []; },
        },
        func_group_name: {
            type: Function,
            default: function(x) {
                if (Array.isArray(x))
                    return undefined;

                return x;
            },
        },
        func_item_name: {
            type: Function,
            default: function (x, y) {
                if (Array.isArray(this.options))
                    return x;

                return `${x}-${y}`;
            },
        },
        func_key: {
            type: Function,
            default: function (x, y) {
                if (Array.isArray(this.options))
                    return x;

                return `${x}-${y}`;
            },
        },
    },

    computed: {
        options_is_array: function () {
            return Array.isArray(this.options);
        },

        _model_object: function () {
            if (this.options_is_array)
                return undefined;

            let out = {};

            for (const opt in this.options) {
                const cur = this.options[opt];
                for (const i of cur)
                    out[this.func_key(opt, i)] = {
                        selected: this.is_selected(opt, i),
                    };
            }

            return out;
        },

        _model_array: function () {
            if (! this.options_is_array)
                return undefined;

            return Array.from(this.options.keys()).map(x => ({
                selected: this.is_selected(x)
            }));
        },

        model: function () {
            return this.options_is_array
                    ? this._model_array
                    : this._model_object;
        },

        selected: function () {
            let selected = [];

            if (this.options_is_array) {
                for (let i = 0; i < this.model.length; ++i)
                    if (this.model[i].selected === true)
                        selected.push(i);
            } else {
                for (const i in this.model)
                    if (this.model[i].selected === true)
                        selected.push(i);
            }

            return selected;
        }
    },

    methods: {
        is_selected: function (group, item) {
            return this.value.indexOf(this.func_key(group, item)) !== -1;
        },

        has_selected_class: function (group, item) {
            return this.model[this.func_key(group, item)].selected;
        },

        on_click: function (group, item) {
            const key = this.func_key(group, item);
            this.model[key].selected = ! this.model[key].selected;

            this.$emit('input', this.selected);
        },
    },

    template: `
        <div class="select">

            <template v-if="options_is_array">
                <div v-for="_, i in options"
                     v-bind:class="{selected: has_selected_class(i)}"
                     v-on:click="on_click(i)"
                     class="option">
                    <p>{{ func_item_name(i) }}</p>
                </div>
            </template>

            <template v-else>
                <div class="optgroup" v-for="group, group_key in options">
                    <p>{{ func_group_name(group_key) }}</p>
                    <div v-for="i in group"
                         v-bind:class="{selected: has_selected_class(group_key, i)}"
                         v-on:click="on_click(group_key, i)"
                         class="option">
                        <p>{{ func_item_name(group_key, i) }}</p>
                    </div>
                </div>
            </template>

        </div>
    `
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
        'dynamicMetadata',
        'include_place',
        'sibling_idx',
    ],

    mixins: [mixin_modemenu],

    data: function() {
        return {
            profile_state: false,
        };
    },

    inject: {
        layer: 'layer',
        cat_id: {default: undefined,},
        room_id: 'room_id',
        floor_id: 'floor_id',
        // siblings: 'siblings',
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
            function find_dev_obj_props(cur) {
                while (cur.dev_obj_props === undefined && cur.$parent !== undefined)
                    cur = cur.$parent;

                return cur.dev_obj_props;
            }

            const backend = check_disabled_backend(this.uiElement, this.indexes);
            if (backend.flag === true)
                return backend;

            return check_disabled_frontend(this.uiElement, this.sibling_idx,
                                           find_dev_obj_props(this));
        },

        used_by_automations: function () {
            if (interfaceData.map_automation === undefined ||
                interfaceData.map_automation.devices === undefined)
                return false;

            const map = interfaceData.map_automation.devices;
            if (map[this.device] === undefined)
                return false;

            const dev = map[this.device];
            if (dev[this.indexes.control] === undefined)
                return false;

            const control = dev[this.indexes.control];
            if (control[this.indexes.input] === undefined)
                return false;

            const input = control[this.indexes.input];
            if(input.lenght === 0)
                return false;

            return input;
        },

        automation_link: function () {
            if (this.used_by_automations === false)
                return {};

            return this.used_by_automations.length === 1
                    ? {
                        name: 'settings.automations.automation',
                        params: {
                            automation_id: this.used_by_automations,
                        },
                      }
                    : {
                        name: 'settings.automations.selection',
                        params: {
                            automation_ids: this.used_by_automations.join('-'),
                        },
                      };
        }
    },
};



function shif_comps_create(name, l2, l3) {
    const shif_name = 'shif-' + name + '-';

    Vue.component(shif_name + 'l2', l2);
    Vue.component(shif_name + 'l3', l3);
}



function shif_register_disable_hooks(objs) {
    if (interfaceData.disable_hooks === undefined)
        Vue.set(interfaceData, 'disable_hooks', {});

    for (const i in objs)
        Vue.set(interfaceData.disable_hooks, i, objs[i]);
}
// }}}



Vue.component('shif-room', {
    props: {
        floor: Object,
        room:  [String, Number],
    },

    mixins: [mixin_modemenu],

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
                <shif-icon v-if="modemenu_is_state('DRAGGABLE')"
                           src="move_2" classname="drag_drop_icon_right" />
                <div class="description">
                    {{ interfaceData.rooms[room].name }}
                </div>
            </router-link>
        </div>
    `,
});



Vue.component('shif-tab', {
    template: `
        <div class="tab button"
             v-on:click="$emit('click', 1)">
             <slot></slot>
        </div>
    `,
});
