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



function root_profiles_idx(peer, channel, name) {
    return `${peer}.${channel}.${name}`;
}


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
        locations: function (floor, room) {
            if (floor === undefined && room === undefined)
                return [];

            return [
                {
                    floorId: floor === null ? undefined : floor,
                    roomId:  room  === null ? undefined : room,
                }
            ];
        },

        profile_build_root_devs: function (profile) {
            // Overwrite current profile on new load
            this.$root.profiles.devs = {};

            for (const i of profile.values) {
                const idx = root_profiles_idx(i[0], i[1], i[2]);
                this.$root.profiles.devs[idx] = {
                    peer:    i[0],
                    channel: i[1],
                    name:    i[2],
                    value:   i[3],
                };
            }
        },

        profile_load: function (profile, cb) {
            this.profile_start(profile, (result) => {
                this.$root.favorites.enabled = false;
                this.$root.profiles.enabled = true;

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
                delete interfaceData.profiles[this.profile.id];

                if (cb)
                    return cb(result);
            });
        },

        profile_add: function (form, cb) {
            const locations = this.locations(form.location.floor,
                                             form.location.room);

            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'addVariableProfile',
                params: [
                    {
                        [interfaceData.options.language]: form.profile_name,
                    },
                    {
                        global: form.location.global,
                        locations: locations,
                        values: [],
                    }
                ],
            }, (result) => {
                interfaceData.profiles[result.result] = {
                    id:        result.result,
                    locations: locations,
                    global:    form.location.global,
                    name:      form.profile_name,
                    values:    [],
                }

                this.$root.profiles.enabled = false;

                if (cb)
                    return cb(result);
            });
        },

        profile_update: function (profile, form, cb) {
            const locations = this.locations(form.location.floor,
                                             form.location.room);
            const values = Object.keys(this.$root.profiles.devs)
                                 .map(x => this.$root.profiles.devs[x])
                                 .map(x => [x.peer, x.channel, x.name, x.value]);

            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'updateVariableProfile',
                params: [
                    profile.id,
                    {
                        [interfaceData.options.language]: form.profile_name,
                    },
                    {
                        global: form.location.global,
                        locations: locations,
                        values: values,
                    }
                ],
            }, (result) => {
                interfaceData.profiles[profile.id] = {
                    id:        profile.id,
                    locations: locations,
                    global:    form.location.global,
                    name:      form.profile_name,
                    values:    values,
                }

                this.$root.profiles.enabled = false;

                if (cb)
                    return cb(result);
            });
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
                }, () => {
                    interfaceData.devices[dev].dynamicMetadata.favorites =
                        new_metadata.favorites;
                });
            });
        },
    },
};



Vue.component('shif-house-collected-entries', {
    mixins: [
        mixin_components,
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

    // TODO: remove
    provide: function () {
        return {
            layer: this.layer,
        };
    },

    computed: {
        dev_objs: function () {
            if (this.layer === 2) {
                const devices = this.favorites === true
                                    ? Object.keys(interfaceData.devices)
                                            .map(dev => interfaceData.devices[dev])
                                            .filter(dev => dev.dynamicMetadata.favorites &&
                                                           dev.dynamicMetadata.favorites.state)
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

    template: `
        <div>
            <div class="profiles_wrapper">
                <template v-if="layer === 2 && ! favorites"
                          v-for="i in local_profiles">
                    <shif-button v-bind:classname="'profiles_button'" v-on:click="profile_start(i)">
                        {{ i.name }}
                    </shif-button>
                </template>
            </div>

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



Vue.component('shif-checkbox-favorites', {
    mixins: [mixin_favorites],

    props: {
        dev: {
            type: Object,
            required: true,
        },
        classname: {
            type: String,
            default: 'checkbox_right_50',
        },
    },

    inject: ['layer'],

    data: function () {
        return {
            state: this.dev !== undefined &&
                   this.dev.dynamicMetadata !== undefined &&
                   this.dev.dynamicMetadata.favorites !== undefined &&
                   this.dev.dynamicMetadata.favorites.state === true,
        };
    },

    methods: {
        change: function () {
            return this.dev_toggle_favorite(this.dev.databaseId, this.state);
        },
    },

    template: `
        <div>
            <template v-if="layer === 2 && $root.favorites.enabled">
                <div v-on:click.stop=""
                     v-on:change.stop="change">
                    <div v-bind:class="classname">
                        <shif-checkbox v-model="state" />
                    </div>
                </div>
            </template>
        </div>
    `
});



Vue.component('shif-checkbox-profiles', {
    mixinx: [mixin_profiles],

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

    data: function () {
        const idx = root_profiles_idx(this.output.peer, this.output.channel,
                                      this.output.name);

        return {
            idx:   idx,
            state: (idx in this.$root.profiles.devs),
        };
    },

    watch: {
        'props.value': function () {
            if (this.$root.profiles.enabled)
                this.$root.profiles.devs[this.idx].value = this.props.value;
        },
    },

    methods: {
        change: function () {
            if (this.state)
                this.$root.profiles.devs[this.idx] = {
                    peer:    this.output.peer,
                    channel: this.output.channel,
                    name:    this.output.name,
                    value:   this.props.value,
                };

            else if (this.idx in this.$root.profiles.devs)
                delete this.$root.profiles.devs[this.idx];
        },
    },

    template: `
        <div>
            <template v-if="$root.profiles.enabled">
                <div v-on:click.stop=""
                     v-on:change.stop="change">
                    <div v-bind:class="classname">
                        <shif-checkbox v-model="state" />
                    </div>
                </div>
            </template>
        </div>
    `
});
