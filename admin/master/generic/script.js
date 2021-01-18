/*
    global
        clone
        shif_comps_create
        shif_device
        shif_device_slot_automations
        shif_device_slot_draggable
        shif_device_slot_favorites
        status_format
*/



////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let generic_status = clone(shif_device);
generic_status.computed.status_formatted = function () {
    return status_format.apply(this, [this.status_minimal(false), 1]);
};
generic_status.computed.icon = function () {
    return 'main' in this.icons
        ? this.icons.main
        : this.control.icons.main;
};
generic_status.template = `
    <shif-generic-l2 v-bind:icon="icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icon.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place">

        ${shif_device_slot_favorites}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

shif_comps_create('genericStatus', generic_status, generic_status);

let generic_switch_l2 = clone(shif_device);
generic_switch_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="$homegear.value_set(output, ! props.value)"
                     v-on:click="level3(device)">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

let generic_switch_l3 = clone(shif_device);
generic_switch_l3.template = `
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

shif_comps_create('genericSwitch', generic_switch_l2, generic_switch_l3);