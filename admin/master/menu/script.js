/*
    global
        ModeMenuState
        mixin_menus
        mixin_modemenu
        mixin_notification
        mixin_print_mounted
        mixin_profiles
*/
/*
    exported
        ShifMainmenu
        ShifModemenu
        ShifTabmenu
*/



const ShifMainmenu = {
    mixins: [
        mixin_menus,
        mixin_notification,
        mixin_print_mounted()
    ],

    data: function () {
        return {
            enabled_menus: interfaceData.mainmenu
                            .filter(x => ! this.disabled('mainmenu', x.name)),
            active: true,
        };
    },

    computed: {
        width: function () {
            return (100 / this.enabled_menus.length) + '%';
        },

        notifications_available: function () {
            return this.integrated_notifications.length;
        },
    },

    methods: {
        badge_wanted: function (cur) {
            return this.notifications_available > 0 && cur === 'notifications';
        }
    },

    template: `
        <div id="mainmenu">
            <ul class="menu">
                <li v-for="i in enabled_menus"
                    v-bind:style="{width: width}">

                    <router-link v-bind:to="{name: i.name}">
                        <div v-bind:id="'mainmenu_' + i.name"
                             class="mainmenu_button"
                             v-bind:class="{badge: badge_wanted(i.name)}"
                             v-bind:data-badge="notifications_available">
                             <shif-icon v-bind:src="i.icon" />
                        </div>
                    </router-link>

                </li>
            </ul>
        </div>
    `,
};



const ShifModemenuHidden = {
    template: `
        <div></div>
    `,
};



const ShifModemenuDraggable = {
    mixins: [mixin_modemenu],

    template: `
        <div>
            <div class="mode_text">
                <span class="mode_name">{{ i18n('modemenu.sort.name') }}</span>
            </div>
            <div class="mode_buttons">
                <div v-on:click="modemenu_hide" class="mode_end">
                    {{ i18n('modemenu.sort.button.end') }}
                </div>
            </div>
        </div>
    `,
};



const ShifModemenuFavorites = {
    mixins: [mixin_modemenu],

    template: `
        <div>
            <div class="mode_text">
                <span class="mode_name">{{ i18n('modemenu.favorites.name') }}</span>
            </div>
            <div class="mode_buttons">
                <div v-on:click="modemenu_hide" class="mode_end">
                    {{ i18n('modemenu.favorites.button.end') }}
                </div>
            </div>
        </div>
    `,
};



const ShifModemenuProfiles = {
    mixins: [mixin_modemenu, mixin_profiles],

    computed: {
        link_profile: function () {
            return {
                name: 'settings.profiles.profile',
                params: {
                    profile_id: this.$root.profiles.id,
                },
            };
        },
    },

    methods: {
        submit_profile: function () {
            this.profile_update(interfaceData.profiles[this.$root.profiles.id],
                                this.$root.profiles.form);
        },
    },

    template: `
        <div id="mode_wrapper_profiles">
            <div class="mode_text">
                <span class="mode_label">
                    {{ i18n('modemenu.profiles.name.label') }}:
                </span>
                <span class="mode_name">
                    {{ $root.profiles.form.profile_name }}
                </span>
            </div>
            <div class="mode_buttons">
                <router-link v-bind:to="link_profile">
                    <div class="mode_settings">
                        {{ i18n('modemenu.profiles.button.settings') }}
                    </div>
                </router-link>
                <div v-on:click="submit_profile"
                     class="mode_end">
                    {{ i18n('modemenu.profiles.button.end') }}
                </div>
            </div>
        </div>
    `
};



const _modemenu_components = {
    [ModeMenuState.HIDDEN]:    ShifModemenuHidden,
    [ModeMenuState.FAVORITES]: ShifModemenuFavorites,
    [ModeMenuState.PROFILES]:  ShifModemenuProfiles,
    [ModeMenuState.DRAGGABLE]: ShifModemenuDraggable,
};



const ShifModemenu = {
    mixins: [mixin_modemenu],

    computed: {
        content: function () {
            return _modemenu_components[this.modemenu_state];
        },
    },

    template: `
        <div id="modemenu">
            <component v-if="content"
                       v-bind:is="content" />
        </div>
    `,
};



const mixin_tabmenu = {
    computed: {
        idx_mainmenu: function () {
            const menu_name = this.$route.matched[0].name;
            return interfaceData.mainmenu.findIndex(x => x.name === menu_name);
        },

        tabs: function () {
            const cur = interfaceData.mainmenu[this.idx_mainmenu];

            return cur === undefined ? cur : cur.tabs;
        },

        tabmenu_is_shown: function () {
            return this.tabs !== undefined &&
                   Object.keys(this.tabs).length > 0;
        },
    },
};



const ShifTabmenu = {
    mixins: [
        mixin_tabmenu,
        mixin_print_mounted()
    ],

    template: `
        <div id="tabmenu">
            <template v-for="tab in tabs">
                <router-link v-bind:to="{name: tab.name}">
                    <shif-tab>
                        {{ i18n(tab.name) }}
                    </shif-tab>
                </router-link>
            </template>
        </div>
    `,
};
