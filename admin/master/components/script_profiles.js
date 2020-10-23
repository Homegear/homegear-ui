/*
    global
        mixin_modemenu
        mixin_print_mounted
        mixin_profiles
        shif_device_slot_automations_profile
        shif_device_slot_draggable
*/
/*
    exported
        ShifProfiles
*/



let ShifProfilesGlobal = {
    mixins: [
        mixin_modemenu,
        mixin_profiles,
        mixin_print_mounted('shif-profiles-global')
    ],

    provide: {
        layer: 2,
    },

    template: `
        <div id="profiles" class="content content_single">
            <div class="profiles_wrapper">
                <shif-draggable v-bind:value="global_profiles"
                                v-slot="draggable"
                                handle=".drag_drop_icon">
                    <template v-for="i in draggable.values">
                        <shif-generic-l2 v-bind:icon="profile_icon(i.val)"
                                         v-bind:key="i.val.id"
                                         v-bind:title="i.val.name"
                                         v-bind:active="{icon: i.val.isActive ? 'active' : ''}"
                                         v-on:click="profile_start(i.val)">
                            ${shif_device_slot_automations_profile}
                            ${shif_device_slot_draggable}
                        </shif-generic-l2>
                    </template>
                </shif-draggable>
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
        <shif-profiles-global />
    `
};
