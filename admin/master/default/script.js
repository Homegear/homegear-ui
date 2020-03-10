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

    logFrontend += value + '<br/>';

    if($('#log').length){
        $('#log').html(logFrontend);
        $('#log').scrollTop(9999999999);
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// isJSON
////////////////////////////////////////////////////////////////////////////////////////////////////////
function isJSON(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
$('#'+interfaceData.options.breadcrumbs_id_array[0]).addClass('content_single');
$('.breadcrumbsJump').html(interfaceData.options.firstBreadcrumb);

////////////////////////////////////////////////////////////////////////////////////////////////////////
// verhindert das die Zurück Funktion bei DesktopBrowsern ausgeführt werden kann
////////////////////////////////////////////////////////////////////////////////////////////////////////
location.hash = 'nb';
$(window).on('hashchange', function() {
    content('back', {back: '1'});
    location.hash = 'nb';
});

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
// ermoeglicht die gesamte Navigationslogik
// Über ein Array wird zwischen den Ebenen gesprungen
////////////////////////////////////////////////////////////////////////////////////////////////////////
function content_delete_breadcumb_container(ids, vals) {
    $('#' + ids[ids.length - 1]).remove();
    vals.pop();
    ids.pop();
}

function content_hndl_breadcrumb_classes(ids, destSize) {
    if (ids.length > 1) {
        $('#' + ids[ids.length - 1]).addClass(destSize);
        $('#' + ids[ids.length - 2]).addClass('content_small');
    }
    else if (interfaceData.options.breadcrumbs_id_array.length == 1) {
        $('#' + ids[ids.length - 1]).addClass('content_single');
        $('#back').addClass('inactive');
    }
    else
        $('#back').addClass('inactive');
}

function content(element, options) {
    var destSize = 'content_big';

    if (typeof options != 'object')
        options = $.parseJSON(options);

    if ('back' in options && interfaceData.options.breadcrumbs_id_array.length <= 1) {
        $('#back').addClass('inactive');
        $('.content').scrollTop(0);
        return;
    }

    if ('existing' in options)
        var id = options.existing;

    if ('size' in options && options.size === 'mega_big')
        destSize = 'content_mega_big';

    if ('content' in options) {
        var id = '';
        const possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        for (let i = 0; i < 8; i++)
            id += possible.charAt(Math.floor(Math.random() * possible.length));

        if (options.vue) {
            $('#inhalt').append(`<div id="${id}" class="content"></div>`);
            let vueContent = app.$el.querySelector('#' + id);
            for (let i in options.content)
                vueContent.appendChild(options.content[i]);
        }
        else
            $('#inhalt').append(`
                <div id="${id}" class="content">
                    ${options['content']}
                </div>
            `);
    }

    $('.content_single').removeClass('content_single');
    $('.content_small').removeClass('content_small');
    $('.content_big').removeClass('content_big');
    $('.content_mega_big').removeClass('content_mega_big');
    $('.content_back').remove();

    if ('jump' in options) {
        for (let i = interfaceData.options.breadcrumbs_id_array.length - options.jump; i > 1; i--)
            content_delete_breadcumb_container(interfaceData.options.breadcrumbs_id_array,
                interfaceData.options.breadcrumbs_array);

        content_hndl_breadcrumb_classes(interfaceData.options.breadcrumbs_id_array, destSize);
    }

    else if ('back' in options) {
        //löschen des aktuellen containers
        content_delete_breadcumb_container(interfaceData.options.breadcrumbs_id_array, interfaceData.options.breadcrumbs_array);

        content_hndl_breadcrumb_classes(interfaceData.options.breadcrumbs_id_array, destSize);
    }

    else {
        interfaceData.options.breadcrumbs_array.push(`
            <div class="breadcrumbsJump"
                 onclick='content(this, {"jump":"${interfaceData.options.breadcrumbs_array.length}"});'>
                ${options.name}
            </div>
        `);

        $('#' + id).addClass(destSize);
        $('#' + interfaceData.options.breadcrumbs_id_array[interfaceData.options.breadcrumbs_id_array.length - 1]).addClass('content_small');
        interfaceData.options.breadcrumbs_id_array.push(id);
        $('#back').removeClass('inactive');
    }

    $('.content_small').append(`
        <div class="content_back" onclick='content(this, {"back":"1"});'>
        </div>
    `);

    let text = '';
    for  (let i = 0; i < interfaceData.options.breadcrumbs_array.length; i++) {
        text += interfaceData.options.breadcrumbs_array[i];

        if (i + 1 != interfaceData.options.breadcrumbs_array.length)
            text += '<div class="breadcrumbs_separator">|</div>';
    }

    document.getElementById('breadcrumbsSub').innerHTML = text;

    $('#breadcrumbsSub').scrollLeft(9999999999);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// triggert beim Logoff eines Users das Löschen des Cookies
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user_logoff() {
    window.location.href = 'signin.php?logout=1';
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Tabs
////////////////////////////////////////////////////////////////////////////////////////////////////////
function showTab(element, tab) {
    // Aktiven Tab finden und deaktivieren
    $(element).parent().find('.active').removeClass('active');
    $(element).parent().find('.tab_pfeil').remove();

    // Angeklickten Tab aktivieren
    $(element).addClass('active');
    $(element).append('<div class="tab_pfeil"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="200" height="100" viewBox="0, 0, 200, 100"><g id="Ebene_1"><path d="M0,-0 L204,-0 L101.747,100.002" /></g></svg></div>');

    // Content im aktiven Tab finden und deaktivieren
    $(element).parents('.content').find('.activeTab').removeClass('activeTab');

    // Content im angeklicktem Tab aktivieren
    $(element).parents('.content').find('.tabWrapper:eq(' + tab + ')').addClass('activeTab');

    $(element).parents('.content').scrollTop(0);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// License
////////////////////////////////////////////////////////////////////////////////////////////////////////
function license() {
    const table_rows = licenses.map(x => `
        <tr>
            <td>${x.name}</td>
            <td>${x.version}</td>
            <td>${x.rights}</td>
            <td>${x.licensename}</td>
            <td>${x.licenseurl}</td>
        </tr>
    `).join('\n');

    let data = `
        <div class="table1">
            <table>
                <tr>
                    <th onclick='content(this, {\"name\":\"Log\",\"content\":\"<div id=log>\"+logFrontend+\"</div>\"})'>
                        ${i18n('settings.about.table.name')}
                    </th>
                    <th>${i18n('settings.about.table.version')}</th>
                    <th>${i18n('settings.about.table.rights')}</th>
                    <th>${i18n('settings.about.table.license')}</th>
                    <th>${i18n('settings.about.table.license.url')}</th>
                </tr>
                ${table_rows}
            </table>
        </div>
    `;

    content('this', {'content':data,'name':i18n('settings.about')});
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function check_value_in_key(haystack, haystackkey, haystackneedle) {
    $.each(haystack, function(_, value) {
        if (value[haystackkey] === haystackneedle) {
            return true;
        }
    });

    return false;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function i18n(key) {
    for (let i of [interfaceData.i18n, interfaceData.i18n.default])
        if (key in i)
            return i[key];
        else
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
                    <span v-for="i in key_vals"
                        class="device_status_entry">
                        <span v-if="i.key" class="name">{{ i.key }}:</span>
                        <span class="value">{{ i.value }}</span>
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
        <div v-bind:class="classname">
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
        disabled: {
            type: Object,
            default: () => ({flag: false})
        },
    },

    template: `
        <div class="device_wrapper" v-bind:class="{disabled: disabled.flag}">
            <div class="device">
                <shif-title v-bind:disabled="disabled">{{ title }}</shif-title>
                <select class="device_dropdown" v-bind:class="{disabled: disabled.flag}" v-on:change="$emit('change', $event.target.value)">
                    <template v-for="i in values">
                            <option v-bind:value="i.value"
                                    v-bind:selected="i.selected">{{ i.name }}</option>
                    </template>
                </select>
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
        width:  { type: Number, required: true, },
        height: { type: Number, required: true, },
        color:  { type: String, required: true, },
        title:  { type: String, required: true, },
        padding:      { type: Number, default:  1 },
        borderWidth:  { type: Number, default:  1 },
        handleRadius: { type: Number, default: 30 },
        sliderMargin: { type: Number, default: 32 },
        sliderHeight: { type: Number, default: 64 },
        borderColor:  { type: String, default: '#000' },
        anticlockwise:  { type: Boolean, default: true }
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
        this.handle = new iro.ColorPicker(this.$refs.colorpicker, {
            width:         this.width,
            height:        this.height,
            color:         this.color,
            title:         this.title,
            handleRadius:  this.handleRadius,
            padding:       this.padding,
            sliderMargin:  this.sliderMargin,
            sliderHeight:  this.sliderHeight,
            borderWidth:   this.borderWidth,
            borderColor:   this.borderColor,
            anticlockwise: this.anticlockwise,
            display:       'inline-block',
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
        this.handle.on('input:start', function (color, changes) {
            outer.$emit('input:start', {color: color, changes: changes});
        });
        this.handle.on('input:end', function (color, changes) {
            outer.$emit('input:end', {color: color, changes: changes});
        });
    },

    template: `
        <div class="device_wrapper">
            <div class="device color">
                <shif-title>{{ title }}</shif-title>
                <div ref="colorpicker">
                </div>
            </div>
        </div>
    `
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
        }
    },

    template: `
        <div class="device_wrapper"
             v-bind:class="{disabled: disabled.flag}"
             v-on:mousedown="emit('mousedown')"
             v-on:mouseup="emit('mouseup')"
             v-on:click="emit('click')">
            <div class="device">
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
function status_impl(control) {
    let out = [];

    const key = (control.texts &&
                 control.texts.l2_state_title &&
                 control.texts.l2_state_title.content) ?
        control.texts.l2_state_title.content :
        null;
    let val = [];

    for (const input of control.variableInputs) {
        if (!input.properties.visualizeInOverview)
            continue;

        if (input.rendering) {
            const sel = condition_get_matching(input.rendering, input.properties);
            if (Object.keys(sel).length > 0) {
                val.push(sel.texts.state.content);
                continue;
            }
        }

        const unit = input.properties.unit ? input.properties.unit : '';
        val.push(input.properties.value + unit);
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
            lastClickCount: 0
        };
    },

    methods: {
        status_minimal: function (descs=true) {
            const raw = status_impl(this.control);

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
                out = out.concat(status_impl(control));

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
