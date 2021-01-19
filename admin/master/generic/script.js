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
generic_status.computed.icon = function () {
    return 'main' in this.icons
        ? this.icons.main
        : this.control.icons.main;
};
generic_status.template = `
    <shif-generic-l2 v-bind:icon="icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icon.color, text: texts.title.color}"
                     v-bind:place="place">

        ${shif_device_slot_favorites}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

shif_comps_create('genericStatus', generic_status, generic_status);

let generic_status_link = clone(shif_device);
generic_status_link.computed.status_formatted = function () {
    var precision = 0;
    if (this.dynamicMetadata.hasOwnProperty("precision")) {
        precision = this.dynamicMetadata.precision;
    }
    return status_format.apply(this, [this.status_minimal(false), precision]);
};
generic_status_link.computed.icon = function () {
    return 'main' in this.icons
        ? this.icons.main
        : this.control.icons.main;
};
generic_status_link.template = `
    <shif-generic-l2 v-bind:icon="icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icon.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click="level3(device)">

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

let generic_button = clone(shif_device);
generic_button.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:mousedown="$homegear.value_set(output, true)"
                     v-on:mouseup="$homegear.value_set(output, false)">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}


    </shif-generic-l2>
`;

shif_comps_create('genericButton', generic_button, generic_button);

let generic_switch = clone(shif_device);
generic_switch.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:click_icon="$homegear.value_set(output, ! props.value)">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

shif_comps_create('genericSwitch', generic_switch, generic_switch);

let generic_slider = clone(shif_device);
generic_slider.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="props.maximumScaled"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step="dynamicMetadata.stepSize ?? 1.0"
                 v-bind:precision="dynamicMetadata.precision ?? 0"
                 v-bind:disabled="disabled"
                 v-on:change="$homegear.value_set(output, props.value)"
                 v-model:value="props.value">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}


    </shif-slider>
`;

shif_comps_create('genericSlider', generic_status_link, generic_slider);