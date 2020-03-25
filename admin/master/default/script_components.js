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

                    return [component_object(control, device, input, output, is,
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

                    out.push(component_object(control, device, input, output, is,
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



Vue.component('shif-house-collected-entries', {
    mixins: [mixin_components, mixin_print_mounted()],

    props: {
        layer: {
            type: Number,
            required: true,
        },
    },

    computed: {
        dev_objs: function () {
            if (this.layer === 2) {
                return interfaceData.rooms[this.$route.params.room]
                                    .devices
                                    .map(dev => this.find_component(interfaceData.devices[dev], 'l2'));
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
            <template v-for="dev in dev_objs">
                <component v-bind="dev" v-bind:include_place="false">
                </component>

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
            const idx = this.$route.matched.length - 1;

            return this.$route.matched[idx] !== undefined &&
                   this.$route.matched[idx].components !== undefined &&
                   this.$route.matched[idx].components.default !== undefined;
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
