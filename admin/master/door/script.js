/*
    global
        clone
        shif_device
        shif_comps_create
*/



////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let door_status = clone(shif_device);
door_status.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

        <template v-slot:automations>
            <router-link v-if="used_by_automations !== false"
                         v-bind:to="automation_link">
                <shif-icon src="calendar-time_1" />
            </router-link>
        </template>
    </shif-generic-l2>
`;

shif_comps_create('doorContact', door_status, door_status);
shif_comps_create('doorHandle',  door_status, door_status);
shif_comps_create('doorLock',  door_status, door_status);
