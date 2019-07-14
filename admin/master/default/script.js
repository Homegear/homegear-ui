////////////////////////////////////////////////////////////////////////////////////////////////////////
// globale Variablen sind zusätzlich in der settings.php definiert
////////////////////////////////////////////////////////////////////////////////////////////////////////
var controlComponents = {};

////////////////////////////////////////////////////////////////////////////////////////////////////////
// write console logs to setting/about/nameClick/log page
////////////////////////////////////////////////////////////////////////////////////////////////////////
if (typeof console_log !== 'undefined' && (console_log == 'true' || console_log == true)) {
    console.oldLog = console.log;
    console.log = function(value) {
        console.oldLog(value);

        if (value !== null && typeof value === 'object')
            value = JSON.stringify(value);

        $('#log').append(value + '<br/>');
        $('#log').scrollTop(9999999999);
    };
}
else {
    console.oldLog = console.log;
    console.log = function(){};
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
$('#'+breadcrumbs_id_array[0]).addClass('content_single');
$('.breadcrumbsJump').html(firstBreadcrumb);

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
    else if (breadcrumbs_id_array.length == 1) {
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

    if ('back' in options && breadcrumbs_id_array.length <= 1) {
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
        for (let i = breadcrumbs_id_array.length - options.jump; i > 1; i--)
            content_delete_breadcumb_container(breadcrumbs_id_array,
                                               breadcrumbs_array);

        content_hndl_breadcrumb_classes(breadcrumbs_id_array, destSize);
    }

    else if ('back' in options) {
        //löschen des aktuellen containers
        content_delete_breadcumb_container(breadcrumbs_id_array, breadcrumbs_array);

        content_hndl_breadcrumb_classes(breadcrumbs_id_array, destSize);
    }

    else {
        breadcrumbs_array.push(`
            <div class="breadcrumbsJump"
                 onclick='content(this, {"jump":"${breadcrumbs_array.length}"});'>
                ${options.name}
            </div>
        `);

        $('#' + id).addClass(destSize);
        $('#' + breadcrumbs_id_array[breadcrumbs_id_array.length - 1]).addClass('content_small');
        breadcrumbs_id_array.push(id);
        $('#back').removeClass('inactive');
    }

    $('.content_small').append(`
        <div class="content_back" onclick='content(this, {"back":"1"});'>
        </div>
    `);

    let text = '';
    for  (let i = 0; i < breadcrumbs_array.length; i++) {
        text += breadcrumbs_array[i];

        if (i + 1 != breadcrumbs_array.length)
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
// Ladebildschirm
////////////////////////////////////////////////////////////////////////////////////////////////////////
$(document).ready(function () {
});

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
                    <th onclick='main(this, {"name":"Log","content":"log"})'>
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

    content('this', {'content':data,'name':'Lizenz'});
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

    return 'NoTrans.';
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
    },
    template: `
        <div class="device_title" v-bind:class="classname">
            <slot></slot>
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
                <span v-for="i in key_vals"
                    class="device_status_entry">
                    <span v-if="i.key" class="name">{{ i.key }}:</span>
                    <span class="value">{{ i.value }}</span>
                </span>
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
            <template v-else>
                <div class="svg_icon icon_default"></div>
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
    },

    template: `
        <div class="device_wrapper">
            <div class="device slider">
                <shif-title>{{ title }}</shif-title>

                <div class="slider_action">
                    <div class="amount">
                        <p>{{ value }} {{ unit }}</p>
                    </div>
                </div>

                <input type="range"
                        class="range"
                        name="range"
                        step="1"
                        v-bind:min="min"
                        v-bind:max="max"
                        v-bind:value="value"
                        v-on:change="$emit('change', parseInt($event.target.value))"
                        v-on:input="$emit('input', parseInt($event.target.value))" />

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
    props: [
        'title',
        'classname',
        'values',
    ],

    computed: {
        identifier: function () {
            return 'x' + Math.random().toString(36).substring(10);
        },
    },

    template: `
        <div class="device_wrapper">
            <div class="device">
                <shif-title>{{ title }}</shif-title>
                <div class="device_radio">
                    <template v-for="i in values">
                        <label class="rad">
                            <span class="rad_name">{{ i.name }}</span>
                            <input type="radio"
                                   v-bind:name="identifier"
                                   v-bind:value="i.value"
                                   v-bind:checked="i.selected"
                                   v-on:input="$emit('input', $event.target.value)" />
                            <i></i>
                        </label>
                    </template>
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
    },
    template: `
        <div class="control_button"
             v-bind:class="classname"
             v-bind:style="{width}"
             v-on:click="$emit('click', 1)">
            <slot></slot>
        </div>
    `,
});
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

    template: `
        <div class="device_wrapper"
             v-on:mousedown="$emit('mousedown')"
             v-on:mouseup="$emit('mouseup')"
             v-on:click="$emit('click')">
            <div class="device">
                <div v-on:click.stop="$emit('click_icon')">
                    <shif-icon v-bind:src="icon"
                               v-bind:active="active.icon"
                               classname="device_icon">
                    </shif-icon>
                </div>
                <div class="device_text">
                    <shif-title>{{ title }}</shif-title>
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
                        <shif-icon src="pfeil4" v-bind:rotate="icon_rotate"></shif-icon>
                    </template>
                    <template v-else>
                        <shif-icon src="pfeil3"></shif-icon>
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
        'control',
        'device',
        'icons',
        'texts',
        'output',
        'props',
        'index',
        'rendering',
        'include_place',
    ],

    methods: {},

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
            if (userSettings.showFloor !== 'true')
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

        status_minimal: function () {
            return status_impl(this.control);
        },

        breadcrumb: function () {
            return (this.place ? this.place + ' | ' : '') + this.dev.label;
        }
    },
};



function shif_comps_create(name, l2, l2_only_and_l3) {
    const shif_name = 'shif-' + name + '-';

    controlComponents[name] = {
        l2:      Vue.component(shif_name + 'l2',      l2),
        l2_only: Vue.component(shif_name + 'l2_only', l2_only_and_l3),
        l3:      Vue.component(shif_name + 'l3',      l2_only_and_l3),
    };
}
// }}}
