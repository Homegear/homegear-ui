let ShifProfilesGlobal = {
    mixins: [mixin_profiles, mixin_print_mounted('shif-profiles-global')],

    methods: {
        get_icon_or_default: function (profile) {
            return get_or_default(profile, 'icon', 'slider_1');
        },
    },

    template: `
        <div id="profiles" class="content content_single">
            <template v-for="i in global_profiles">
                <shif-button v-on:click="profile_start(i)">
                    <shif-icon v-bind:src="get_icon_or_default(profile)"
                               classname="profile_button_icon">
                    </shif-icon>
                    {{ i.name }}
                </shif-button>
            </template>
        </div>
    `
};



let ShifProfiles = {
    mixins: [mixin_print_mounted('shif-profiles')],

    components: {
        ShifProfilesGlobal,
    },

    template: `
        <shif-mainmenu-tabs>
            <shif-profiles-global />
        </shif-mainmenu-tabs>
    `
}
