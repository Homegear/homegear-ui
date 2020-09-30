/*
    global
        check_disabled
        get_or_default
        mixin_components
        mixin_modemenu
        mixin_profiles
        mixin_print_mounted
        mixin_scroll_position
        mixin_states
        shif_device_slot_draggable
*/
/*
    exported
        ShifAllDevicesLvl3
        ShifHouseDevices
        ShifHouseDevicesRole
*/



Vue.component('shif-ctrl-summary', {
    mixins: [mixin_components, mixin_modemenu, mixin_profiles, mixin_print_mounted()],

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

    watch: {
        submenu_show: function () {
            this.$emit('accordion-open', this.role_id);
        },
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
                ${shif_device_slot_draggable}
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

                    <shif-draggable v-bind:value="dev_objs"
                                    v-slot="draggable"
                                    v-bind:name="role_id"
                                    handle=".drag_drop_icon">
                        <template v-for="dev in draggable.values">
                            <component v-bind="dev.val" v-bind:include_place="true" />
                        </template>
                    </shif-draggable>
                </div>
            </shif-trans-drop-down>
        </div>
    `,
});

                            // <template v-if="$root.debug">
                                // {{ dev | pretty | log }}
                            // </template>



let ShifAllDevices = {
    mixins: [mixin_modemenu, mixin_states, mixin_print_mounted()],

    data: function () {
        return {
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

    created: function () {
        this.states_refetch_dirty();
    },

    watch: {
        states_is_dirty: function () {
            this.states_refetch_dirty();
        },
    },

    template: `
        <div>
            <shif-draggable v-bind:value="map_roles_devs"
                            v-slot="draggable"
                            handle=".drag_drop_icon">
                <template v-for="i in draggable.values">

                    <template v-if="i.key in interfaceData.roles">
                        <shif-ctrl-summary
                            v-bind:actions="interfaceData.roles[i.key].invokeOutputs"
                            v-bind:icon="interfaceData.roles[i.key].icon"
                            v-bind:title="interfaceData.roles[i.key].name"
                            v-bind:devs="i.val"
                            v-bind:role_id="i.key"
                            v-bind:status="states[i.key]"
                            v-on:accordion-open="x => role_id_opened = x"
                            >
                        </shif-ctrl-summary>
                    </template>

                    <template v-else>
                        {{ "This role is not defined: " + i.key | log }}
                    </template>

                </template>
            </shif-draggable>
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
