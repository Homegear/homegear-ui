const mixin_print_mounted = function (name) {
    return {
        mounted: function () {
            console.log(this.$options.name || name);
        },
    };
};



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
