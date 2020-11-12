////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let helper_switch_l2 = clone(shif_device);
helper_switch_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="$homegear.value_set(output, ! props.value)"
                     v-on:click="level3(device)">

        ${shif_device_slot_favorites}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

let helper_switch_l3 = clone(shif_device);
helper_switch_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status_minimal()"
                     v-on:click="$homegear.value_set(output, ! props.value)">

        ${shif_device_slot_favorites}
        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}


    </shif-generic-l2>
`;

shif_comps_create('helperSwitch', helper_switch_l2, helper_switch_l3);