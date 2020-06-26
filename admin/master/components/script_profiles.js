let ShifProfilesGlobal = {
    mixins: [mixin_profiles, mixin_print_mounted('shif-profiles-global')],

    template: `
        <div id="profiles" class="content content_single">
            <div class="profiles_wrapper">
                <template v-for="i in global_profiles">
                    <shif-generic-l2 v-bind:icon="profile_icon(i)"
                                     v-bind:title="i.name"
                                     v-bind:active="{icon: i.isActive ? 'active' : ''}"
                                     v-on:click="profile_start(i)">
                    </shif-generic-l2>
                </template>
            </div>
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
};
