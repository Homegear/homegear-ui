/*
    exported
        shif_device_slot_automations
        shif_device_slot_automations_profile
        shif_device_slot_draggable
        shif_device_slot_favorites
        shif_device_slot_favorites_profile
        shif_device_slot_profiles
*/



const shif_device_slot_automations = `
    <template v-slot:automations>
        <router-link v-if="interfaceData.options.enableAutomations === true && used_by_automations !== false"
                     v-bind:to="automation_link">
            <shif-icon src="calendar-time_1" />
        </router-link>
    </template>
`;



const shif_device_slot_automations_profile = `
    <template v-slot:automations>
        <router-link v-if="interfaceData.options.enableAutomations === true && profile_used_by_automations(i.id) !== false"
                     v-bind:to="profile_automation_link(i.id)">
            <shif-icon src="calendar-time_1" />
        </router-link>
    </template>
`;



const shif_device_slot_draggable = `
    <template v-slot:draggable>
        <shif-icon v-if="modemenu_is_state('DRAGGABLE')"
                   src="move_1" classname="drag_drop_icon" />
    </template>
`;



const shif_device_slot_favorites = `
    <template v-slot:favorites>
        <shif-checkbox-favorites v-bind:dev="dev" />
    </template>
`;



const shif_device_slot_favorites_profile = `
    <template v-slot:favorites>
        <shif-checkbox-favorites-profile v-bind:profile_id="i.val.id" />
    </template>
`;



const shif_device_slot_profiles = `
    <template v-slot:profiles>
        <shif-checkbox-profiles v-bind:dev="dev"
                                v-bind:output="output"
                                v-bind:props="props" />
    </template>
`;
