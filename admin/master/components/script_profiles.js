let ShifProfilesGlobal = {
    mixins: [mixin_profiles, mixin_print_mounted('shif-profiles-global')],

    provide: {
        layer: 2,
    },

    template: `
        <div id="profiles" class="content content_single">
            <div class="profiles_wrapper">
                <template v-for="i in global_profiles">
                    <shif-generic-l2 v-bind:icon="profile_icon(i)"
                                     v-bind:title="i.name"
                                     v-bind:active="{icon: i.isActive ? 'active' : ''}"
                                     v-on:click="profile_start(i)">
                        <template v-slot:automations>
                            <router-link v-if="profile_used_by_automations(i.id) !== false"
                                         v-bind:to="profile_automation_link(i.id)">
                                <shif-icon src="calendar-time_1" />
                            </router-link>
                        </template>
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
