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
            submenu_show: this.role_id === this.last_role_id,
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
            role_id: this.role_id,
        };
    },

    inject: {
        last_role_id: {from: 'role_id'},
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

    watch: {
        submenu_show: function () {
            this.$emit('accordion-open', this.role_id);
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

                        <template v-if="$root.debug">
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
            role_id_opened: null,
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
            <template v-for="(devs, role_id) in map_roles_devs">

                <template v-if="role_id in interfaceData.roles">
                    <shif-ctrl-summary
                        v-bind:actions="interfaceData.roles[role_id].invokeOutputs"
                        v-bind:icon="interfaceData.roles[role_id].icon"
                        v-bind:title="interfaceData.roles[role_id].name"
                        v-bind:devs="devs"
                        v-bind:role_id="role_id"
                        v-bind:status="states_clean(role_id)"
                        v-on:accordion-open="x => role_id_opened = x"
                        >
                    </shif-ctrl-summary>
                </template>

                <template v-else>
                    {{ "This role is not defined: " + role_id | log }}
                </template>

            </template>
        </div>
    `,
};



let ShifHouseDevices = {
    mixins: [mixin_scroll_position, mixin_print_mounted('shif-house-devices')],

    components: {
        ShifAllDevices,
    },

    props: {
        room_id:   { },
        device_id: { },
        floor_id:  { },
        role_id:   { },
    },

    provide: function () {
        return {
            room_id:   this.room_id,
            floor_id:  this.floor_id,
            device_id: this.device_id,
            role_id:   this.role_id,
        };
    },

    template: `
        <shif-mainmenu-tabs>
            <shif-all-devices ref="devices" />
        </shif-mainmenu-tabs>
    `
};



let ShifHouseDevicesRole = {
    mixins: [mixin_scroll_position, mixin_print_mounted('shif-house-devices')],

    components: {
        ShifAllDevices,
    },

    props: {
        role_id:   { },
        room_id:   { },
        device_id: { },
        floor_id:  { },
    },

    provide: function () {
        return {
            role_id:   this.role_id,
            room_id:   this.room_id,
            floor_id:  this.floor_id,
            device_id: this.device_id,
        };
    },

    template: `
        <shif-mainmenu-tabs>
            <shif-all-devices />
        </shif-mainmenu-tabs>
    `
};



let ShifAllDevicesLvl3 = {
    mixins: [mixin_scroll_position, mixin_print_mounted('shif-all-devices-level-3')],

    props: {
        room_id:   { required: true, },
        device_id: { required: true, },
        floor_id:  { required: true, },
        role_id:   { required: true, },
    },

    provide: function () {
        return {
            room_id:   this.room_id,
            floor_id:  this.floor_id,
            device_id: this.device_id,
            role_id:   this.role_id,
        };
    },

    template: `
        <shif-house-collected-entries v-bind:layer="3" />
    `
};
