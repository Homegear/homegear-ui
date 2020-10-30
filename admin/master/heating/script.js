/*
    global
        clone
        shif_comps_create
        shif_device
        shif_device_slot_automations
        shif_device_slot_draggable
        shif_device_slot_favorites
        shif_device_slot_profiles
        shif_register_disable_hooks
        status_format
*/



////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let heating_slider_l2 = clone(shif_device);
heating_slider_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="$homegear.value_set(output, ! props.value)"
                     v-on:click="level3(device)">

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;
let heating_slider_l3 = clone(shif_device);
heating_slider_l3.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="parseFloat(props.maximumScaled)"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step="0.5"
                 v-bind:precision="1"
                 v-on:change="$homegear.value_set(output, props.value)"
                 v-bind:disabled="disabled"
                 v-model:value="props.value">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-slider>
`;

shif_comps_create('heatingSlider', heating_slider_l2, heating_slider_l3);



let heating_is_state_l2 = clone(shif_device);
heating_is_state_l2.computed.status_formatted = function () {
    return status_format.apply(this, [this.status, 1]);
};
heating_is_state_l2.template = `
    <shif-generic-l2 v-bind:icon="control.icons.temperature.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: control.icons.temperature.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:actions="true"
                     v-bind:place="place"
                     v-on:click="level3(device)">

        ${shif_device_slot_favorites}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;
let heating_is_state_l3 = clone(shif_device);
heating_is_state_l3.computed.status_formatted = function () {
    return status_format.apply(this, [this.status_minimal(false), 1]);
};
heating_is_state_l3.template = `
    <shif-generic-l2 v-bind:icon="control.icons.temperature.name"
                     v-bind:title="title"
                     v-bind:active="{icon: control.icons.temperature.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place">

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

shif_comps_create('heatingIsState', heating_is_state_l2, heating_is_state_l3);



let heating_mode_l3 = clone(shif_device);
heating_mode_l3.computed.values = function () {
    return this.rendering
        .map(x => ({
            name:     x.definitions.texts.state.content,
            value:    x.condition.value,
            selected: x.condition.value == this.props.value,
        }));
};
heating_mode_l3.template = `
    <shif-radio v-bind:title="title"
                v-bind:values="values"
                v-bind:disabled="disabled"
                v-on:input="$homegear.value_set(output, parseInt($event))">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-radio>
`;

shif_comps_create('heatingMode', heating_is_state_l2, heating_mode_l3);



let heating_window = clone(shif_device);
heating_window.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

shif_comps_create('heatingWindow', heating_window, heating_window);



shif_register_disable_hooks({
    'Base.heatingIsStateSliderMode': [
        {
            condition: {
                index: 2,
                operator: 'eq',
                value: 0
            },
            disable: [1],
            reason: 'Frost',
        }
    ],
});

shif_register_disable_hooks({
    'Base.heatingIsStateSliderModeWindow': [
        {
            condition: {
                index: 2,
                operator: 'eq',
                value: 0
            },
            disable: [1],
            reason: 'Frost'
        },
        {
            condition: {
                index: 3,
                operator: 'gt',
                value: 0
            },
            disable: [1, 2],
            reason: 'Window',
        }
    ],
});

shif_register_disable_hooks({
    'Base.heatingIsStateSliderModeWindowHandle': [
        {
            condition: {
                index: 2,
                operator: 'eq',
                value: 0
            },
            disable: [1],
            reason: 'Frost'
        },
        {
            condition: {
                index: 3,
                operator: 'gt',
                value: 0
            },
            disable: [1, 2],
            reason: 'Window',
        }
    ],
});

shif_register_disable_hooks({
    'Base.heatingIsStateSliderModeWindowContact': [
        {
            condition: {
                index: 2,
                operator: 'eq',
                value: 0
            },
            disable: [1],
            reason: 'Frost'
        },
        {
            condition: {
                index: 3,
                operator: 'gt',
                value: 0
            },
            disable: [1, 2],
            reason: 'Window',
        }
    ],
});
