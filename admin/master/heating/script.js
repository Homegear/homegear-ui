/*
    global
        clone
        homegear
        shif_comps_create
        shif_device
        shif_device_slot_automations
        shif_device_slot_favorites
        shif_device_slot_profiles
        shif_register_disable_hooks
*/



////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let heating_slider_l2 = clone(shif_device);
heating_slider_l2.methods.change = function(_event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
};
heating_slider_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="change"
                     v-on:click="level3(device)">

        ${shif_device_slot_automations}

    </shif-generic-l2>
`;
let heating_slider_l3 = clone(shif_device);
heating_slider_l3.methods.change = function(_event) {
    homegear.value_set_clickcounter(this, this.output, this.props.value);
};
heating_slider_l3.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="parseFloat(props.maximumScaled)"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step="0.5"
                 v-bind:precision="1"
                 v-on:change="change"
                 v-bind:disabled="disabled"
                 v-model:value="props.value">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}

    </shif-slider>
`;

shif_comps_create('heatingSlider', heating_slider_l2, heating_slider_l3);



let heating_is_state_l2 = clone(shif_device);
heating_is_state_l2.template = `
    <shif-generic-l2 v-bind:icon="control.icons.temperature.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: control.icons.temperature.color, text: texts.title.color}"
                     v-bind:status="status"
                     v-bind:actions="true"
                     v-bind:place="place"
                     v-on:click="level3(device)">

        ${shif_device_slot_favorites}
        ${shif_device_slot_automations}

    </shif-generic-l2>
`;
let heating_is_state_l3 = clone(shif_device);
heating_is_state_l3.template = `
    <shif-generic-l2 v-bind:icon="control.icons.temperature.name"
                     v-bind:title="title"
                     v-bind:active="{icon: control.icons.temperature.color, text: texts.title.color}"
                     v-bind:status="status"
                     v-bind:place="place">

        ${shif_device_slot_automations}

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
heating_mode_l3.methods.change = function(x) {
    homegear.value_set_clickcounter(this, this.output, x);
};
heating_mode_l3.template = `
    <shif-radio v-bind:title="title"
                v-bind:values="values"
                v-bind:disabled="disabled"
                v-on:input="x => change(parseInt(x))">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}

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
