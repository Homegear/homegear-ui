function comp_obj(control, device, input, output, is, indexes) {
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



const mixin_print_mounted = function (name) {
    return {
        // This is for debug reasons only
        // mounted: function () {
            // console.log(this.$options.name || name);
        // },
    };
};



const mixin_profiles = {
    computed: {
        global_profiles: function () {
            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(x => x.global === true);
        },

        local_profiles: function () {
            const floor = parseInt(this.$route.params.floor);
            const room  = parseInt(this.$route.params.room);

            return Object.keys(interfaceData.profiles)
                         .map(x => interfaceData.profiles[x])
                         .filter(
                x => x.locations.findIndex(
                    loc => loc.floorId === floor &&
                          (loc.roomId === undefined || loc.roomId === room)
                ) !== -1
            );
        }
    },

    methods: {
        load_profile: function (profile) {
            return this.$homegear.value_set_multi(profile.outputPeers.map(x => ({
                input: x,
                value: x.value,
            })));
        },

        unload_profile: function (profile) {
            throw 'TBD'
            return this.$homegear.value_set_multi(profile.outputPeers.map(x => ({
                input: x,
                value: x.value,
            })));
        },
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
                let new_metadata = data.result;

                if (new_metadata.favorites === undefined)
                    new_metadata.favorites = {};

                new_metadata.favorites.state = state;

                this.$homegear.invoke({
                    jsonrpc: '2.0',
                    method: 'setUiElementMetadata',
                    params: [dev, new_metadata],
                })
            })
        },
    },
};



Vue.component('shif-house-collected-entries', {
    mixins: [
        mixin_components,
        mixin_favorites,
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
        }
    },

    computed: {
        dev_objs: function () {
            if (this.layer === 2) {
                const devices = this.favorites === true
                                    ? Object.keys(interfaceData.devices)
                                            .map(dev => interfaceData.devices[dev])
                                            .filter(dev => dev.metadata.favorites &&
                                                           dev.metadata.favorites.state)
                                    : interfaceData.rooms[this.$route.params.room]
                                                   .devices
                                                   .map(dev => interfaceData.devices[dev]);

                return devices.map(dev => this.find_component(dev, 'l2'));
            }

            if (this.layer === 3) {
                const device = interfaceData.devices[this.$route.params.device];
                return this.find_component(device, 'l3');
            }

            throw 'Not implemented';
        },
    },

    methods: {
        favorites_handle: function (value) {
            console.log(value)
            return this.dev_toggle_favorite(value.dev.databaseId, value.state);
        },
    },

    mounted: function () {
        this.$root.$on('favorites-clicked', this.favorites_handle);
    },

    template: `
        <div>
            <template v-if="layer === 2 && ! favorites"
                      v-for="i in local_profiles">
                <shif-button v-bind:classname="'profiles_button'" v-on:click="load_profile(i)">
                    {{ i.name }}
                </shif-button>
            </template>

            <template v-for="dev in dev_objs">
                <component v-bind="dev"
                           v-bind:include_place="include_place" />

                <template v-if="debug">
                    {{ dev | pretty | log }}
                </template>
            </template>
        </div>
    `,
});



Vue.component('shif-mainmenu-tabs', {
    mixins: [mixin_print_mounted()],

    computed: {
        idx_mainmenu: function () {
            const menu_name = this.$route.matched[0].name;
            return interfaceData.mainmenu.findIndex(x => x.name === menu_name);
        },

        tabs: function () {
            return interfaceData.mainmenu[this.idx_mainmenu].tabs;
        },

        tab_width: function () {
            return (100 / this.tabs.length) + '%';
        },
    },

    template: `
        <div>
            <div id="tabs">
                <template v-for="tab in tabs">
                    <router-link v-bind:to="{name: tab.name}">
                        <shif-tab v-bind:width="tab_width">
                            {{ i18n(tab.name) }}
                        </shif-tab>
                    </router-link>
                </template>
            </div>

            <div class="tabWrapper activeTab" style="text-align: center;">
                <slot />
            </div>
        </div>
    `
});



Vue.component('shif-paging', {
    mixins: [mixin_print_mounted()],

    computed: {
        is_single_view: function () {
            const idx   = this.$route.matched.length - 1;
            const route = this.$route.matched[idx];

            return route !== undefined &&
                   route.components !== undefined &&
                   route.components.default !== undefined;
        }
    },

    template: `
        <div>
            <router-view v-if="is_single_view"
                         class="content content_single"
                         v-bind:key="$route.fullPath" />

            <template v-else>
                <router-view name="small"
                             class="content content_small"
                             v-on:click.native="$router.go(-1)"
                             v-bind:key="$route.fullPath + '_left'" />

                <router-view name="big"
                             class="content content_big"
                             v-bind:key="$route.fullPath" />
            </template>
        </div>
    `,
});
