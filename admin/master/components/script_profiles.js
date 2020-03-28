let ShifProfilesGlobal = {
    mixins: [mixin_profiles, mixin_print_mounted('shif-profiles-global')],

    template: `
        <div id="profiles" class="content content_single">
            <template v-for="i in global_profiles">
                <shif-button  v-on:click="load_profile(i)">
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
