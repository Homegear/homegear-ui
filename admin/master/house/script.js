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
                        floor_id: this.floor_id,
                        room_id:  this.room_id,
                        device_id: device,
                    },
                });
            }

            if (matched.indexOf('house.tab.devices') !== -1) {
                // TODO: verify that there is always at least a room and a floor
                return this.$router.push({
                    name: `${last}.device`,
                    params: {
                        role_id:   this.role_id,
                        floor_id:  interfaceData.devices[device].floors[0],
                        room_id:   interfaceData.devices[device].rooms[0],
                        device_id: device,
                    },
                });
            }

            if (matched.indexOf('favorites.list') !== -1) {
                // TODO: verify that there is always at least a room and a floor
                return this.$router.push({
                    name: 'favorites.device',
                    params: {
                        floor_id: interfaceData.devices[device].floors[0],
                        room_id:  interfaceData.devices[device].rooms[0],
                        device_id: device,
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

        date: date_format,
    },
});



let ShifLogoff = Vue.component('shif-logoff', {
    mounted: function () {
        user_logoff();
    }
});


const scroll_positions = {};


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
                },
                {
                    name: 'house.tab.rooms.room',
                    path: 'rooms/floor/:floor_id/room/:room_id',
                    components: {small: ShifHouseRooms, big: ShifHouseLvl2},
                    meta: {
                        breadcrumbs: ['house', 'house.tab.rooms', 'house.tab.rooms.room'],
                        cache_ident: {big: {params: ['room_id']}}
                    },
                    props: {small: false, big: true},
                },
                {
                    name: 'house.tab.rooms.room.device',
                    path: 'rooms/floor/:floor_id/room/:room_id/device/:device_id',
                    components: {small: ShifHouseLvl2, big: ShifHouseLvl3},
                    meta: {
                        breadcrumbs: ['house', 'house.tab.rooms', 'house.tab.rooms.room', 'house.tab.rooms.room.device'],
                        cache_ident: {small: {params: ['room_id']}, big: {params: ['room_id', 'device_id']}},
                    },
                    props: {small: true, big: true},
                },

                {
                    name: 'house.tab.devices',
                    path: 'devices',
                    component: ShifHouseDevices,
                    meta: {breadcrumbs: ['house', 'house.tab.devices'], base: true,},
                    props: true,
                },
                {
                    name: 'house.tab.devices.device',
                    path: 'devices/role/:role_id/floor/:floor_id/room/:room_id/device/:device_id',
                    components: {small: ShifHouseDevices, big: ShifAllDevicesLvl3},
                    meta: {
                        breadcrumbs: ['house', 'house.tab.devices', 'house.tab.rooms.room', 'house.tab.devices.device'],
                        cache_ident: {small: {bc_idx: 1}, big: {params: ['role_id', 'room_id', 'device_id']}},
                    },
                    props: {small: true, big: true},
                },

                {
                    name: 'house.tab.profiles',
                    path: 'profiles',
                    component: ShifProfiles,
                    meta: {breadcrumbs: ['house', 'house.tab.profiles'], base: true},
                },
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
                    path: 'profiles/edit/:profile_id',
                    name: 'settings.profiles.profile',
                    components: {small: ShifSettingsProfiles, big: ShifSettingsProfile},
                    meta: {breadcrumbs: ['settings', 'settings.profiles', 'settings.profiles.profile']},
                    props: {small: false, big: true},
                },
                {
                    path: 'automations',
                    name: 'settings.automations',
                    components: {small: ShifSettingsItems(1), big: ShifSettingsAutomations},
                    meta: {breadcrumbs: ['functions', 'settings.automations'],},
                },
                {
                    path: 'automations/add',
                    name: 'settings.automations.new',
                    components: {small: ShifSettingsAutomations, big: ShifSettingsAutomationsForm},
                    meta: {breadcrumbs: ['settings', 'settings.automations', 'settings.automations.new'],},
                },
                {
                    path: 'automations/edit/:automation_id',
                    name: 'settings.automations.automation',
                    components: {small: ShifSettingsAutomations, big: ShifSettingsAutomationsForm},
                    meta: {
                        breadcrumbs: ['settings', 'settings.automations', 'settings.automations.automation'],
                        cache_ident: {big: {params: ['automation_id']}},
                    },
                    props: {small: false, big: true},
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
                    path: 'floor/:floor_id/room/:room_id/device/:device_id',
                    components: {small: ShifFavoritesLvl1, big: ShifFavoritesLvl3},
                    meta: {
                        breadcrumbs: ['favorites', 'house.tab.rooms.room', 'favorites.device'],
                        cache_ident: {small: {bc_idx: 0}, big: {params: ['room_id', 'device_id']}}
                    },
                    props: {small: false, big: true},
                }
            ],
        },

        { path: '/notifications', name: 'notifications', component: ShifNotifications, redirect: {name: 'notifications.list'},
            children: [
                {
                    name: 'notifications.list',
                    path: 'list',
                    component: ShifNotificationsLvl1,
                    meta: {breadcrumbs: ['notifications'], base: true},
                },
                {
                    name: 'notifications.notification',
                    path: ':notification_id',
                    components: {small: ShifNotificationsLvl1, big: ShifNotificationsNotification},
                    meta: {
                        breadcrumbs: ['notifications', 'notifications.notification'],
                        cache_ident: {big: {params: ['notification_id']}},
                    },
                    props: {small: false, big: true},
                },
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
    name: 'App',

    data: {
        debug: false,

        favorites: {
            enabled: false,
        },
        profiles: {
            devs:    {},
            enabled: false,
            active:  null,
        },

        show: false,
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
        <div v-show="show"
             id="inhalt"
             v-bind:class="{'modemenu-visible': modemenu_show}">
            <router-view />

            <shif-modemenu />
            <shif-mainmenu />
        </div>
    `,
});



let breadcrumbs = new Vue({
    name: 'Breadcrumbs',

    router: router,

    data: {
        show: false,
    },

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

                return Number(params.floor_id) === -1
                    ? i18n('house.storyless') + ' - '
                    : interfaceData.floors[params.floor_id].name + ' - ';
            }

            const params  = this.$route.params;

            switch (route_name) {
                case 'house.tab.rooms.room':
                    return floor() + interfaceData.rooms[params.room_id].name;

                case 'house.tab.rooms.room.device':
                case 'house.tab.devices.device':
                case 'favorites.device':
                    return interfaceData.devices[params.device_id].label;

                case 'log':
                    return 'Log';

                case 'settings.profiles.profile':
                    return interfaceData.profiles[params.profile_id].name;

                case 'settings.automations.automation':
                    return interfaceData.automations[params.automation_id].name;

                case 'notifications.notification':
                    return interfaceData.notifications[params.notification_id].title;
            }

            return i18n(route_name);
        },
    },

    template: `
        <div v-show="show"
             id="breadcrumbs_wrapper">
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
        </div>
    `
});



let error = new Vue({
    name: 'Error',
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
                <button v-if="msg.close === true"
                        class="toast_close"
                        v-on:click="remove_msg(i)">
                    X
                </button>
                <div class="toast_content" v-html="msg.content"></div>
            </div>
        </div>
    `
});



function interface_mount(show=true) {
    app.$mount('#inhalt');
    breadcrumbs.$mount('#breadcrumbs');

    if (show)
        interface_show();
}



function interface_show() {
    app.show = true;
    breadcrumbs.show = true;
}
