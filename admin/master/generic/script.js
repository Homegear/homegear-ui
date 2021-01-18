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
let generic_main = clone(shif_device);
generic_main.computed.status_formatted = function () {
    return status_format.apply(this, [this.status_minimal(false), 1]);
};
generic_main.computed.icon = function () {
    return 'main' in this.icons
        ? this.icons.main
        : this.control.icons.main;
};
generic_main.template = `
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

shif_comps_create('genericStatus', generic_main, generic_main);
