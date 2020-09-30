/*
    exported
        shif_device_slot_automations
        shif_device_slot_draggable
        shif_device_slot_favorites
        shif_device_slot_profiles
*/



const shif_device_slot_automations = `
    <template v-slot:automations>
        <router-link v-if="used_by_automations !== false"
                     v-bind:to="automation_link">
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



const shif_device_slot_profiles = `
    <template v-slot:profiles>
        <shif-checkbox-profiles v-bind:dev="dev"
                                v-bind:output="output"
                                v-bind:props="props" />
    </template>
`;
