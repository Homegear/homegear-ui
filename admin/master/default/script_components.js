/*
    global
        ModeMenuState
        clone
        get_or_default
        mixin_modemenu
        scroll_positions
        shif_device_slot_automations_profile
        shif_device_slot_draggable
        shif_device_slot_favorites_profile
*/
/*
    exported
        mixin_menus
        mixin_rooms
        mixin_scroll_position
*/



function comp_obj(control, device, input, output, is, indexes) {
    let ret = {
        uiElement:       device,
        control:         control,
        device:          device.databaseId,
        icons:           device.icons,
        texts:           device.texts,
        output:          output,
        props:           input.properties,
        indexes:         indexes,
        rendering:       input.rendering,
        dynamicMetadata: device.dynamicMetadata
    };

    if (is)
        ret.is = is;

    return ret;
}



const mixin_rooms = {
    computed: {
        unassigned_rooms: function () {
            const tmp = Object.keys(interfaceData.floors)
                              .map(x => interfaceData.floors[x].rooms)
                              .flat();

            let assigned = {};
            for (const i of tmp)
                assigned[i] = true;

            return Object.keys(interfaceData.rooms)
                         .filter(x => ! assigned[x])
                         .filter(x => this.room_has_devices(x));
        },
    },

    methods: {
        room_has_devices: function (room_key) {
            const room = interfaceData.rooms[room_key];

            return room.devices !== undefined && room.devices.length > 0;
        },
    }
};


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



const mixin_unique_view_key = {
    methods: {
        _specific_bc_idx_wanted: function (mode) {
            const ident = this.$route.meta.cache_ident;

            return ident !== undefined &&
                   ident[mode] !== undefined &&
                   ident[mode].bc_idx !== undefined;
        },

        _uniqueify_needed: function (mode) {
            const ident = this.$route.meta.cache_ident;

            return ident !== undefined &&
                   ident[mode] !== undefined &&
                   ident[mode].params !== undefined &&
                   ident[mode].params.length > 0;
        },

        _base: function (mode) {
            const meta = this.$route.meta;
            const breadcrumbs = meta.breadcrumbs;

            if (breadcrumbs === undefined)
                return this.$route.fullPath;

            if (this._specific_bc_idx_wanted(mode)) {
                const idx = meta.cache_ident[mode].bc_idx;

                if (breadcrumbs[idx] !== undefined)
                    return breadcrumbs[idx];
            }

            switch (mode) {
                case 'default': // fall through
                case 'single': // fall through
                case 'big':    return breadcrumbs[breadcrumbs.length - 1];
                case 'small':  return breadcrumbs[breadcrumbs.length - 2];
            }

            throw `BUG: mixin_unique_view_key: mode is unknown: ${mode}`;
        },

            // Make base unique over the rooms/devices/etc.
        _uniqueify: function (old, mode) {
            const cache_ident = this.$route.meta.cache_ident;

            if (! this._uniqueify_needed(mode))
                return old;

            const unique = cache_ident[mode].params
                                            .map(x => this.$route.params[x])
                                            .join('-');

            return `${old}-${unique}`;
        },

        /**
         * It's hard to defined a unique key for each view part.
         * Requirements:
         *   * lvl(1).default/single == lvl(2).small
         *   * lvl(n).big == lvl(n + 1).small
         **/
        unique_view_key: function (mode) {
            /**
             * To prevent me from debugging this function another time...
             * The `__transition-\d+-` part in `$vnode.key` is added somewhere
             * else!
             **/
            const base = this._base(mode);
            return this._uniqueify(base, mode);
        },

        find_unique_view_key: function () {
            let cur = this;

            while(cur.$vnode.key === undefined && cur.$parent !== undefined)
                cur = cur.$parent;

            const key = cur.$vnode.key;
            if (key === undefined)
                return key;

            return key.replace(/^__transition-\d+-/, '');
        }
    },
};



const mixin_scroll_position = {
    methods: {
        // _find_scroll_position_marker: function (start) {
        //     let cur = start;
        //
        //     for (; cur !== undefined; cur = cur.$parent) {
        //         if (cur.$options.name === 'shif-scroll-position-marker')
        //             return cur;
        //     }
        //
        //     return cur;
        // },

        _key: function (vm) {
            return vm.$vnode.key.replace(/^__transition-\d+-/, '');
        },
    },

    beforeRouteLeave: function (to, from, next) {
        const key = this._key(this);

        scroll_positions[key] = {
            x: this.$el.scrollLeft,
            y: this.$el.scrollTop,
        };

        if (key === 'house.tab.devices')
            scroll_positions[key].role_id = this.$refs.devices.role_id_opened;

        next();
    },

    beforeRouteEnter: function (to, from, next) {
        next(vm => {
            const key = vm._key(vm);

            if (scroll_positions[key] === undefined)
                return;

            const pos = scroll_positions[key];

            vm.$el.scroll(pos.x, pos.y);
        });
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



const mixin_print_mounted = function () {
    return {
        // This is for debug reasons only
        // mounted: function () {
            // console.log(this.$options.name || arguments[0]);
        // },
    };
};



function root_profiles_idx(peer, channel, name) {
    return `${peer}.${channel}.${name}`;
}


const mixin_profiles = {
    computed: {
        favorite_profiles: function () {
            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(x => x.favorite === true);
        },

        global_profiles: function () {
            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(x => x.global === true);
        },

        local_profiles: function () {
            const floor = parseInt(this.floor_id);
            const room  = parseInt(this.room_id);

            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(
                x => x.locations !== undefined &&
                     x.locations.findIndex(
                    loc => loc.floorId === floor &&
                          (loc.roomId  === undefined || loc.roomId === room)
                ) !== -1
            );
        },

        editable_profiles: function () {
            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(x => x.editable !== false);
        },
    },

    methods: {
        val_into_proper_type: function (value) {
            if (value === 'true')
                return true;
            if (value === 'false')
                return false;

            const as_nr = Number(value);
            if (! Number.isNaN(as_nr))
                return as_nr;

            return value;
        },

        locations: function (locations) {
            if (locations === undefined || locations.length === 0)
                return [];

            return locations.map(x => ({
                floorId: Number(x.floorId),
                roomId:  Number(x.roomId),
            }));
        },

        roles_rooms: function (form) {
            return form.role.role !== null &&
                   form.role.value !== undefined &&
                   form.role.value !== null
                ? [[{
                        role: Number(form.role.role),
                        value: this.val_into_proper_type(form.role.value)
                  }], []]
                : [[], Object.keys(this.$root.profiles.devs)
                             .map(x => this.$root.profiles.devs[x])
                             .map(x => ({
                                peerId: x.peer,
                                channel: x.channel,
                                variable: x.name,
                                value: x.value,
                             }))];
        },

        dev_cat_profiles: function (cat_id) {
            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(x => x.categories !== undefined &&
                                      x.categories.length > 0 &&
                                      x.categories.indexOf(Number(cat_id)) !== -1);
        },

        profile_build_root_devs: function (profile) {
            // Overwrite current profile on new load
            Vue.set(this.$root.profiles, 'devs', {});

            if (! profile || ! profile.values)
                return;

            for (const i of profile.values) {
                const idx = root_profiles_idx(i.peerId, i.channel, i.variable);
                Vue.set(this.$root.profiles.devs, idx, {
                    peer:    i.peerId,
                    channel: i.channel,
                    name:    i.variable,
                    value:   i.value,
                });
            }
        },

        profile_icon: function (profile) {
            return get_or_default(profile, 'icon', 'slider_1');
        },

        profile_load: function (profile, cb) {
            this.profile_start(profile, (result) => {
                this.modemenu_show(ModeMenuState.PROFILES);

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
                Vue.delete(interfaceData.profiles, this.profile.id);

                if (this.modemenu_is_state(ModeMenuState.PROFILES))
                    this.modemenu_hide();

                if (cb)
                    return cb(result);
            });
        },

        profile_add: function (form, cb) {
            const locations = this.locations(form.locations.rooms);
            const [roles, values] = this.roles_rooms(form);

            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'addVariableProfile',
                params: [
                    {
                        [interfaceData.options.language]: form.profile_name,
                    },
                    {
                        global:     form.locations.global,
                        favorite:   false,
                        categories: form.locations.categories,
                        icon:       form.icon,
                        locations:  locations,
                        roles:      roles,
                        values:     values,
                    }
                ],
            }, (result) => {
                Vue.set(interfaceData.profiles, result.result, {
                    id:         result.result,
                    icon:       form.icon,
                    locations:  locations,
                    global:     form.locations.global,
                    favorite:   form.locations.favorite,
                    favorite:   false,
                    categories: form.locations.categories,
                    name:       form.profile_name,
                    roles:      roles,
                    values:     values,
                });

                if (this.modemenu_is_state(ModeMenuState.PROFILES))
                    this.modemenu_hide();

                if (cb)
                    return cb(result);
            });
        },

        profile_update: function (profile, form, cb) {
            const locations = this.locations(form.locations.rooms);
            const [roles, values] = this.roles_rooms(form);

            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'updateVariableProfile',
                params: [
                    profile.id,
                    {
                        [interfaceData.options.language]: form.profile_name,
                    },
                    {
                        global:     form.locations.global,
                        favorite:   profile.favorite,
                        categories: form.locations.categories,
                        icon:       form.icon,
                        locations:  locations,
                        roles:      roles,
                        values:     values,
                    }
                ],
            }, (result) => {
                Vue.set(interfaceData.profiles, profile.id, {
                    id:         profile.id,
                    name:       form.profile_name,
                    global:     form.locations.global,
                    favorite:   profile.favorite,
                    categories: form.locations.categories,
                    icon:       form.icon,
                    locations:  locations,
                    roles:      roles,
                    values:     values,
                });

                if (this.modemenu_is_state(ModeMenuState.PROFILES))
                    this.modemenu_hide();

                if (cb)
                    return cb(result);
            });
        },

        profile_update_favorite(profile, favorite, cb) {
            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'updateVariableProfile',
                params: [
                    profile.id,
                    {
                        [interfaceData.options.language]: profile.name,
                    },
                    {
                        global:    profile.global,
                        favorite:  favorite,
                        icon:      profile.icon,
                        locations: profile.locations,
                        roles:     profile.roles,
                        values:    profile.values,
                    }
                ],
            }, (result) => {
                Vue.set(interfaceData.profiles[profile.id], 'favorite', favorite);

                if (cb)
                    return cb(result);
            });
        },

        profile_used_by_automations: function (id) {
            return interfaceData.map_automation.profiles[id] === undefined
                    ? false
                    : interfaceData.map_automation.profiles[id];
        },

        profile_automation_link: function (id) {
            const used_by_automations = this.profile_used_by_automations(id);

            if (used_by_automations === false)
                return {};

            return used_by_automations.length === 1
                    ? {
                        name: 'settings.automations.automation',
                        params: {
                            automation_id: used_by_automations,
                        },
                      }
                    : {
                        name: 'settings.automations.selection',
                        params: {
                            automation_ids: used_by_automations.join('-'),
                        },
                      };
        }
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
                // Theoretically this should never be an array...
                let meta_new = (typeof(data.result) !== 'object' ||
                                data.result === null ||
                                Array.isArray(data.result))
                                    ? {}
                                    : clone(data.result);

                if (meta_new.favorites === undefined)
                    meta_new.favorites = {};

                meta_new.favorites.state = state;

                this.$homegear.invoke({
                    jsonrpc: '2.0',
                    method: 'setUiElementMetadata',
                    params: [dev, meta_new],
                }, () => {
                    Vue.set(interfaceData.devices[dev], 'dynamicMetadata',
                            meta_new);
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
        mixin_modemenu,
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
        },
    },

    provide: function () {
        return {
            layer: this.layer,
            siblings: this.dev_objs,
        };
    },

    inject: {
        device_id: { default: undefined, },
        room_id:   { default: undefined, },
        floor_id:  { default: undefined, },
    },

    data: function () {
        return {
            dev_obj_keys: [],
        };
    },

    watch: {
        dev_obj_keys: function () {
            if (this.$root.debug)
                console.log(JSON.stringify(this.dev_obj_keys, null, 4));
        },

        dev_objs: function () {
            if (this.$root.debug)
                console.log(this.dev_objs);
        },
    },

    mounted: function () {
        this.dev_obj_keys = Array.from(this.dev_objs.keys());
    },

    computed: {
        dev_objs: function () {
            if (this.layer === 2) {
                const devices = this.favorites === true
                                    ? Object.keys(interfaceData.devices)
                                            .map(dev => interfaceData.devices[dev])
                                            .filter(dev => ! Array.isArray(dev.dynamicMetadata) &&
                                                           dev.dynamicMetadata.favorites !== undefined &&
                                                           dev.dynamicMetadata.favorites.state === true)
                                    : interfaceData.rooms[this.room_id]
                                                   .devices
                                                   .map(dev => interfaceData.devices[dev]);

                return devices.map(dev => this.find_component(dev, 'l2'));
            }

            if (this.layer === 3) {
                const device = interfaceData.devices[this.device_id];
                return this.find_component(device, 'l3');
            }

            throw 'Not implemented';
        },

        dev_obj_props: function () {
            return this.dev_objs.map(x => x.props);
        },

        profiles: function () {
            if (this.layer !== 2)
                return [];

            return this.favorites === true
                        ? this.favorite_profiles
                        : this.local_profiles;
        },
    },

    template: `
        <div>
            <div v-if="profiles.length > 0" class="profiles_wrapper">
                <shif-draggable v-bind:value="profiles"
                                v-slot="draggable"
                                handle=".drag_drop_icon"
                                name="profiles">
                    <template v-for="i in draggable.values">
                        <shif-generic-l2 v-bind:icon="profile_icon(i.val)"
                                         v-bind:key="i.val.id"
                                         v-bind:title="i.val.name"
                                         v-bind:status="i18n('modemenu.profiles.name.label')"
                                         v-bind:active="{icon: i.val.isActive ? 'active' : ''}"
                                         v-on:click="profile_start(i.val)">
                            ${shif_device_slot_favorites_profile}
                            ${shif_device_slot_automations_profile}
                            ${shif_device_slot_draggable}
                        </shif-generic-l2>
                    </template>
                </shif-draggable>
            </div>

            <shif-draggable v-bind:value="dev_objs"
                            v-slot="draggable"
                            handle=".drag_drop_icon">
                <template v-for="idx in draggable.keys">
                    <component v-if="dev_objs[idx] !== undefined"
                               v-bind="dev_objs[idx]"
                               v-bind:sibling_idx="idx"
                               v-bind:include_place="include_place" />
                </template>
            </shif-draggable>
        </div>
    `,
});



// This is a helper component, so we have defined parent where we can read the
// scroll positions from.
// Although not defining own DOM elements, it must not be abstract!
// We won't be able to access the scroll positions!
//
// Backup: currently unused.
const ShifScrollPositionMarker = {
    // Explicitly set, so it does not get (accidently?) set to true in the
    // future.
    abstract: false,
    name: 'shif-scroll-position-marker',

    render: function () {
        return this.$slots.default;
    },
};



Vue.component('shif-paging', {
    mixins: [mixin_unique_view_key, mixin_print_mounted()],

    components: {
        ShifScrollPositionMarker,
    },

    computed: {
        is_single_view: function () {
            const idx   = this.$route.matched.length - 1;
            const route = this.$route.matched[idx];

            return route !== undefined &&
                   route.components !== undefined &&
                   route.components.default !== undefined;
        },

        views: function () {
            if (this.is_single_view)
                return [{
                    name:       'default',
                    class:      'content content_single',
                    click:      false,
                    transition: false,
                }];

            return [
                {
                    name:       'small',
                    class:      'content content_small',
                    click:      true,
                    transition: false,
                },
                {
                    name:       'big',
                    class:      'content content_big',
                    click:      false,
                    transition: true,
                }
            ];
        },
    },

    render: function (h) {
        return h('div', {}, this.views.map(i => {
            const router_view = h('router-view', {
                class:    i.class,
                key:      this.unique_view_key(i.name),
                props:    {name: i.name},
                nativeOn: i.click ? {click: () => this.$router.back()} : {}
            });

            if (! i.transition)
                return router_view;

            return h('shif-trans-right-in-out', {}, [router_view]);
        }));
    }
});



Vue.component('shif-checkbox-favorites', {
    mixins: [mixin_favorites, mixin_modemenu],

    props: {
        dev: {
            type: Object,
            required: true,
        },
        classname: {
            type: String,
            default: 'checkbox_favorites',
        },
    },

    inject: ['layer'],

    computed: {
        show: function () {
            return this.layer === 2 &&
                   this.modemenu_is_state(ModeMenuState.FAVORITES);
        },

        dyn: function () {
            return this.dev.dynamicMetadata;
        },

        state: {
            get: function () {
                return this.dyn !== undefined &&
                       ! Array.isArray(this.dyn) &&
                       this.dyn.favorites !== undefined &&
                       this.dyn.favorites.state === true;
            },

            set: function (new_) {
                this.dev_toggle_favorite(this.dev.databaseId, new_);
            },
        },
    },

    methods: {
        on_click: function () {
            this.state = ! this.state;
        },
    },

    template: `
        <div>
            <template v-if="show">
                <label class="check"
                       v-bind:class="{checked: state}"
                       v-on:click.stop="on_click">
                    <span class="checkmark"></span>
                </label>
            </template>
        </div>
    `
});



Vue.component('shif-checkbox-favorites-profile', {
    mixins: [mixin_profiles, mixin_modemenu],

    props: {
        profile_id: {
            type: [Number, String],
            required: true,
        },
        classname: {
            type: String,
            default: 'checkbox_favorites',
        },
    },

    inject: ['layer'],

    computed: {
        profile: function () {
            return interfaceData.profiles[this.profile_id];
        },

        show: function () {
            return this.layer === 2 &&
                   this.modemenu_is_state(ModeMenuState.FAVORITES);
        },

        state: {
            get: function () {
                return this.profile.favorite === true;
            },
            set: function (new_) {
                this.profile_update_favorite(this.profile, new_);
            },
        }
    },

    methods: {
        on_click: function () {
            this.state = ! this.state;
        },
    },

    template: `
        <div>
            <template v-if="show">
                <label class="check"
                       v-bind:class="{checked: state}"
                       v-on:click.stop="on_click">
                    <span class="checkmark"></span>
                </label>
            </template>
        </div>
    `
});



Vue.component('shif-checkbox-profiles', {
    mixins: [mixin_modemenu, mixin_profiles],

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

    watch: {
        'props.value': function () {
            if (this.modemenu_is_state(ModeMenuState.PROFILES) &&
                this.state === true)
                this.$root.profiles.devs[this.idx].value = this.props.value;
        },
    },

    computed: {
        idx: function () {
            return root_profiles_idx(this.output.peer, this.output.channel,
                                     this.output.name);
        },

        state: {
            get: function () {
                return this.idx in this.$root.profiles.devs;
            },

            set: function (new_) {
                if (new_)
                    Vue.set(this.$root.profiles.devs, this.idx, {
                        peer:    this.output.peer,
                        channel: this.output.channel,
                        name:    this.output.name,
                        value:   this.props.value,
                    });
                else if (this.state)
                    Vue.delete(this.$root.profiles.devs, this.idx);
            },
        },
    },

    methods: {
        on_click: function () {
            this.state = !this.state;
        },
    },

    template: `
        <div>
            <template v-if="modemenu_is_state('PROFILES')">
                <label class="check"
                       v-bind:class="{checked: state}"
                       v-on:click.stop="on_click">
                    <span class="checkmark"></span>
                </label>
            </template>
        </div>
    `
});



Vue.component('shif-icon-selection', {
    props: {
        value:    {type: String,  required: true,},
        profiles: {type: Boolean, default: false,},
    },

    computed: {
        icons: function () {
            return this.profiles
                    ? this.interfaceIcons.profiles
                    : this.interfaceIcons;
        },
    },

    methods: {
        on_click: function (new_) {
            this.$emit('input', new_);
        },
    },

    template: `
        <div id="profile_icons">
            <template v-for="_, key in icons"
                      v-if="key !== 'profiles'">
                <label v-bind:class="{selected: value === key}"
                       v-bind:title="$root.debug ? key : undefined"
                       class="profile_icon_wrapper">
                    <shif-icon classname="profile_icon" v-bind:src="key" />
                    <input type="radio"
                            name="profile_icon"
                            v-bind:value="value"
                            v-on:click="on_click(key)"
                            hidden />
                </label>
            </template>
        </div>
    `
});
