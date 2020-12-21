/*
    global
        categories_relevant
        condition_get_matching
        get_or_default
        mixin_components
        mixin_modemenu
        mixin_profiles
        mixin_print_mounted
        mixin_scroll_position
        mixin_states
        shif_device_slot_draggable
        shif_device_slot_favorites_profile
*/
/*
    exported
        ShifAllDevicesLvl3
        ShifHouseDevices
        ShifHouseDevicesCategory
*/



Vue.component('shif-ctrl-summary', {
    mixins: [mixin_components, mixin_modemenu, mixin_profiles, mixin_print_mounted()],

    props: [
        'icon',
        'title',
        'status',
        'devs',
        'cat_id',
    ],

    data: function () {
        return {
            submenu_show: this.cat_id === this.last_cat_id,
        };
    },

    computed: {
        dev_objs: function () {
            return this.devs.map(x => this.find_component(this.interfaceData.devices[x], 'l2'));
        },

        profiles_by_dev_cat: function () {
            return this.dev_cat_profiles(this.cat_id);
        },

        summary_active: function () {
            if (interfaceData.deviceCategories[this.cat_id].highlightIcon !== true)
                return {};

            for (const devs of this.dev_objs) {
                for (const key in devs) {
                    const i = devs[key];
                    const sel = condition_get_matching(i.rendering, i.props);
                    if (Object.keys(sel).length > 0) {
                        const state = get_or_default(sel.icons, 'state', {
                            name: '',
                            color: ''
                        });
                        if (state.color === 'active')
                            return state;
                    }
                }
            }

            return {};
        },
    },

    provide: function () {
        return {
            layer: 2,
            cat_id: this.cat_id,
        };
    },

    inject: {
        last_cat_id: {from: 'cat_id'},
    },

    watch: {
        submenu_show: function () {
            this.$emit('accordion-open', this.cat_id);
        },
    },

    methods: {
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
                             v-bind:active="{icon: summary_active.color}"
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

                    <div class="profiles_wrapper">
                        <shif-draggable v-bind:value="profiles_by_dev_cat"
                                        v-bind:name="'category_' + cat_id + '_profile'"
                                        v-slot="draggable"
                                        handle=".drag_drop_icon">
                            <template v-for="i in draggable.values">
                                <shif-generic-l2 v-bind:icon="get_icon_or_default(i.val)"
                                                 v-bind:title="i.val.name"
                                                 v-bind:status="i18n('modemenu.profiles.name.label')"
                                                 v-bind:active="{icon: i.val.isActive ? 'active' : ''}"
                                                 v-on:click="profile_start(i.val)">
                                    ${shif_device_slot_favorites_profile}
                                    ${shif_device_slot_draggable}
                                </shif-generic-l2>
                            </template>
                        </shif-draggable>
                    </div>

                    <shif-draggable v-bind:value="dev_objs"
                                    v-slot="draggable"
                                    v-bind:name="cat_id"
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



let ShifAllDevices = {
    mixins: [mixin_modemenu, mixin_states, mixin_print_mounted()],

    data: function () {
        return {
            cat_id_opened: null,
        };
    },

    computed: {
        map_cats_devs: function () {
            let ret = {};

            for (const dev_idx in interfaceData.devices) {
                const cats = categories_relevant({
                    databaseId: interfaceData.devices[dev_idx].databaseId,
                });

                for (const cat of cats)
                    if (ret[cat] === undefined)
                        ret[cat] = [dev_idx];
                    else if (ret[cat].indexOf(dev_idx) === -1)
                        ret[cat].push(dev_idx);
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
            <shif-draggable v-bind:value="map_cats_devs"
                            v-slot="draggable"
                            handle=".drag_drop_icon">
                <template v-for="i in draggable.values">
                    <shif-ctrl-summary
                        v-bind:icon="interfaceData.deviceCategories[i.key].icon"
                        v-bind:title="interfaceData.deviceCategories[i.key].name"
                        v-bind:devs="i.val"
                        v-bind:cat_id="i.key"
                        v-bind:status="states[i.key]"
                        v-on:accordion-open="x => cat_id_opened = x"
                        >
                    </shif-ctrl-summary>
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
        cat_id:    { },
    },

    provide: function () {
        return {
            room_id:   this.room_id,
            floor_id:  this.floor_id,
            device_id: this.device_id,
            cat_id:    this.cat_id,
        };
    },

    template: `
        <shif-all-devices ref="devices" />
    `
};



let ShifHouseDevicesCategory = {
    mixins: [mixin_scroll_position, mixin_print_mounted('shif-house-devices-category')],

    components: {
        ShifAllDevices,
    },

    props: {
        cat_id:    { },
        room_id:   { },
        device_id: { },
        floor_id:  { },
    },

    provide: function () {
        return {
            cat_id:    this.cat_id,
            room_id:   this.room_id,
            floor_id:  this.floor_id,
            device_id: this.device_id,
        };
    },

    template: `
        <shif-all-devices />
    `
};



let ShifAllDevicesLvl3 = {
    mixins: [mixin_scroll_position, mixin_print_mounted('shif-all-devices-level-3')],

    props: {
        room_id:   { required: true, },
        device_id: { required: true, },
        floor_id:  { required: true, },
        cat_id:    { required: true, },
    },

    provide: function () {
        return {
            room_id:   this.room_id,
            floor_id:  this.floor_id,
            device_id: this.device_id,
            cat_id:    this.cat_id,
        };
    },

    template: `
        <shif-house-collected-entries v-bind:layer="3" />
    `
};
