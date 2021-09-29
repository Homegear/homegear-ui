/*
    global
        clone
        shif_comps_create
        shif_device
        shif_device_slot_automations
        shif_device_slot_draggable
        shif_device_slot_favorites
        shif_device_slot_profiles
*/



////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let ventilation_mode_l2 = clone(shif_device);
ventilation_mode_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.l2.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.l2.color, text: texts.title.color}"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-bind:status="status"
                     v-on:click="level3(device)">

        ${shif_device_slot_favorites}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

let ventilation_mode_l3 = clone(shif_device);
ventilation_mode_l3.computed.values = function () {
    return this.rendering
        .map(x => ({
            name:     x.definitions.texts.state.content,
            value:    x.condition.value,
            selected: x.condition.value == this.props.value,
        }));
};
ventilation_mode_l3.template = `
    <shif-radio v-bind:title="title"
                v-bind:values="values"
                v-on:input="$homegear.value_set(output, parseInt($event))">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-radio>
`;

shif_comps_create('ventilationMode', ventilation_mode_l2, ventilation_mode_l3);
