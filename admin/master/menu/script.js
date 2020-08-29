/*
    global
        mixin_menus
        mixin_notification
        mixin_print_mounted
        mixin_profiles
*/



Vue.component('shif-mainmenu', {
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
});



Vue.component('shif-modemenu', {
    mixins: [mixin_profiles],

    computed: {
        link_profile: function () {
            console.log(this.$root.profiles.id);
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
        <div id="modemenu">
            <div v-if="$root.favorites.enabled">
                <div class="mode_text">
                    <span class="mode_name">{{ i18n('modemenu.favorites.name') }}</span>
                </div>
                <div class="mode_buttons">
                    <div v-on:click="$root.favorites.enabled = false" class="mode_end">
                        {{ i18n('modemenu.favorites.button.end') }}
                    </div>
                </div>
            </div>

            <div v-if="$root.profiles.enabled" id="mode_wrapper_profiles">
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
        </div>
    `,
});
