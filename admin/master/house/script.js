/*
function house_level1_fix(){
    var roomSelectWrapperWidth = 185 + 30;
    var windowWidth = $( window ).width() - 20;
    var rooms_wrapper_child_count_max = 0;

    $('.rooms_wrapper').each(function(){
        if(this.childElementCount > rooms_wrapper_child_count_max){
            rooms_wrapper_child_count_max = this.childElementCount;
        }
    });

    var roomSelectWrapperMaxCount = windowWidth / roomSelectWrapperWidth;
    roomSelectWrapperMaxCount = roomSelectWrapperMaxCount.toString().split('.')[0];

    if (rooms_wrapper_child_count_max > roomSelectWrapperMaxCount) {
        var maxWidth = roomSelectWrapperMaxCount * roomSelectWrapperWidth + 20;
        //console.log('1 roomSelectWrapperMaxCount');
    }
    else {
        var maxWidth = rooms_wrapper_child_count_max * roomSelectWrapperWidth + 25;
        //console.log('2 rooms_wrapper_child_count_max');
    }

    /*
    console.log('roomSelectWrapperWidth: '+roomSelectWrapperWidth);
    console.log('windowWidth: '+windowWidth);
    console.log('rooms_wrapper_child_count_max: '+rooms_wrapper_child_count_max);
    console.log('roomSelectWrapperMaxCount: '+roomSelectWrapperMaxCount);
    console.log('maxWidth: '+maxWidth);
    * /

    $('#house_rooms').width(maxWidth);
    //$('.roomSelectTitle').width(maxWidth);
    //$('.rooms_wrapper').width(maxWidth);
    //$('.rooms_wrapper').css('display', 'inline-block');
}
*/

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
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

function component_object(control, device, input, output, is, indexes) {
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

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
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

            if (matched.indexOf('house.tab.rooms.room') !== -1) {
                return this.$router.push({
                    name: `${matched[matched.length - 1]}.device`,
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
                    name: `${matched[matched.length - 1]}.device`,
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



Vue.component('shif-ctrl-summary', {
    mixins: [mixin_components],

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
        }
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

            <transition name="slide-fade">
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

                    <template v-for="dev in dev_objs">
                        <component v-bind="dev" v-bind:include_place="true" />

                        <template v-if="debug">
                            {{ dev | pretty | log }}
                        </template>
                    </template>
                </div>
            </transition>
        </div>
    `,
});



let ShifAllDevices = Vue.component('shif-all-devices', {
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
                    if (res.error) {
                        console.log('[' + invoke_desc.ids.join(', ') + ']: ' + res.error.message);
                        return;
                    }

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
                         *    relative array index is needed.
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
            return this.states[role_id].some(x => x.value !== 0)
                    ? this.states[role_id]
                    : [];
        },
    },

    mounted: function () {
        this.$homegear.ready(() => {
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

        });

        this.$root.$on('role-update', (role_id) => this.status(Number(role_id)));
    },


    template: `
        <div>
            <template v-for="(devs, role) in map_roles_devs">
                <template v-if="role in interfaceData.roles">
                    <shif-ctrl-summary
                        v-on:role_update="status"
                        v-bind:actions="interfaceData.roles[role].invokeOutputs"
                        v-bind:icon="interfaceData.roles[role].icon"
                        v-bind:title="interfaceData.roles[role].name"
                        v-bind:devs="devs"
                        v-bind:role_id="role"
                        v-bind:status="states_clean(role)">
                    </shif-ctrl-summary>
                </template>
                <template v-else>
                    {{ log("This role is not defined: " + role) }}
                </template>
            </template>
        </div>
    `,
});



let ShifLogoff = Vue.component('shif-logoff', {
    mounted: function () {
        user_logoff();
    }
});



let router = new VueRouter({
    routes: [
        { path: '/',                                           redirect: {name: 'house'}, },
        { path: '/house', name: 'house', component: ShifHouse, redirect: {name: 'house.tab.rooms'},
            children: [
                {
                    name: 'house.tab.rooms',
                    path: 'rooms',
                    component: ShifHouseRooms,
                    meta: {breadcrumbs: ['house', 'house.tab.rooms']},
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
                    meta: {breadcrumbs: ['house', 'house.tab.devices']},
                }, {
                    name: 'house.tab.devices.device',
                    path: 'devices/floor/:floor/room/:room/device/:device',
                    components: {small: ShifHouseDevices, big: ShifAllDevicesLvl3},
                    meta: {breadcrumbs: ['house', 'house.tab.devices', 'house.tab.rooms.room', 'house.tab.devices.device']},
                },

                { path: 'profiles', name: 'house.tab.profiles', component: ShifProfiles, }
            ],
        },
        { path: '/settings', name: 'settings', component: ShifSettings, redirect: {name: 'settings.list'},
            children: [
                {
                    name: 'settings.list',
                    path: 'list',
                    component: ShifSettingsItems(1),
                    meta: {breadcrumbs: ['settings']},
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
                    path: 'favoritesmode',
                    name: 'settings.favorites.mode',
                    component: ShifProfiles,
                },
                {
                    path: 'profilessmode',
                    name: 'settings.profiles.mode',
                    component: ShifProfiles,
                },
            ],
        },
        { path: '/favorites', name: 'favorites', component: ShifFavorites, },
        { path: '/log',       name: 'log',       component: ShifLog, },
        { path: '/logoff',    name: 'logoff',    component: ShifLogoff, },
    ],
});



let app = new Vue({
    el: '#inhalt',

    router: router,

    template: `
        <div id="inhalt">
            <router-view />

            <shif-mainmenu />
        </div>
    `,
});



let breadcrumbs = new Vue({
    el: '#breadcrumbs',

    router: router,

    computed:  {
        routes_with_proper_names: function () {
            if (this.$route.meta === undefined ||
                this.$route.meta.breadcrumbs === undefined)
                return [];

            return this.$route.meta.breadcrumbs.map(name => ({
                                                    link: name,
                                                    name: this.get_name(name),
                                                }))
                                               .filter(x => x.name !== '?');
        },
    },

    methods: {
        get_name: function (route_name) {
            function floor() {
                return interfaceData.options.showFloor === true
                            ? interfaceData.floors[params.floor].name + ' - '
                            : '';
            }

            const params  = this.$route.params;

            switch (route_name) {
                case 'house.tab.rooms.room':
                    return floor() + interfaceData.rooms[params.room].name;

                case 'house.tab.rooms.room.device':
                case 'house.tab.devices.device':
                    return interfaceData.devices[params.device].label;

            }

            return i18n(route_name);
        },
    },

    template: `
        <div id="breadcrumbs">
            <template v-show="routes_with_proper_names.length > 1">
                <shif-icon id="back" src="arrow_left_1"
                           v-on:click="$router.back()"/>
            </template>

            <template v-for="i in routes_with_proper_names">
                <router-link v-bind:to="{name: i.link}">
                    {{ i.name }}
                </router-link>
            </template>
        </div>
    `
});
