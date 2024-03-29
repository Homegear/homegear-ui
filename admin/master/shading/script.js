/*
    global
        clone
        homegear
        shif_comps_create
        shif_device
        shif_device_slot_automations
        shif_device_slot_draggable
        shif_device_slot_favorites
        shif_device_slot_profiles
        shif_register_disable_hooks
*/



let shading_windalarm = clone(shif_device);
shading_windalarm.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

shif_comps_create('shadingWindalarm', shading_windalarm, shading_windalarm);
shif_comps_create('shadingRainalarm', shading_windalarm, shading_windalarm);



let shading_ventilation_l2 = clone(shif_device);
shading_ventilation_l2.template = `
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

let shading_ventilation_l3 = clone(shif_device);
shading_ventilation_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status_minimal()"
                     v-bind:disabled="disabled"
                     v-on:click="$homegear.value_set(output, ! props.value)">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;

shif_comps_create('shadingVentilation', shading_ventilation_l2, shading_ventilation_l3);



let shading_slider = clone(shif_device);
shading_slider.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="props.maximumScaled"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step=5
                 v-bind:disabled="disabled"
                 v-on:change="$homegear.value_set(output, props.value)"
                 v-model:value="props.value">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-slider>
`;

shif_comps_create('shadingPosition',      shading_ventilation_l2, shading_slider);
shif_comps_create('shadingPositionSlats', shading_ventilation_l2, shading_slider);



let shading_buttons_l2 = clone(shif_device);
shading_buttons_l2.template = `
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

let shading_buttons_l3 = clone(shif_device);
shading_buttons_l3.methods.change = function(_event) {
    let upVar = this.control.variableOutputs[0];
    let downVar = this.control.variableOutputs[2];
    if((this.indexes.input == 0 || this.indexes.input == 2) &&
        !upVar.hasOwnProperty('value') &&
        !downVar.hasOwnProperty('value') &&
        upVar.peer == downVar.peer &&
        upVar.channel == downVar.channel &&
        upVar.name == downVar.name) {
        let down = (this.indexes.input == 2);
        if((this.output.type == 'integer' ||
            this.output.type == 'integer64' ||
            this.output.type == 'float') &&
            this.output.hasOwnProperty('minimumValue') &&
            this.output.hasOwnProperty('maximumValue')) {
            let output = clone(this.output);
            output.value = (down ? this.output.maximumValue : this.output.minimumValue);
            homegear.value_set(output, null);
        }
        else if(this.output.type == 'bool') {
            let output = clone(this.output);
            output.value = down;
            homegear.value_set(output, null);
        }
    }
    else homegear.value_set(this.output, true);
};

shading_buttons_l3.template = `
    <div class="control_button_wrapper">
        <shif-button v-bind:disabled="disabled"
                     v-on:click="change">
            <shif-icon v-bind:src="cond.icon.name"
                        v-bind:active="cond.icon.color">
            </shif-icon>

            ${shif_device_slot_automations}
            ${shif_device_slot_draggable}

        </shif-button>
    </div>
`;

shif_comps_create('shadingButtons', shading_buttons_l2, shading_buttons_l3);
shif_comps_create('shadingButtonsSingleStep', shading_buttons_l2, shading_buttons_l3);
shif_comps_create('shadingButtonsUpDown', shading_buttons_l2, shading_buttons_l3);



shif_register_disable_hooks({
    'Base.shadingButtonsSingleStepPositionPositionSlatsWindalarm': [
        {
            condition: {
                index: 6,
                operator: 'eq',
                value: true
            },
            disable: [0, 1, 2, 3, 4, 5],
            reason: 'Wind alarm',
        },
    ],
});

shif_register_disable_hooks({
    'Base.shadingButtonsPositionPositionSlatsRainalarm': [
        {
            condition: {
                index: 0,
                operator: 'eq',
                value: true
            },
            disable: [0, 1, 2, 3, 4],
            reason: 'Rain alarm',
        },
    ],
});

shif_register_disable_hooks({
    'Base.shadingButtonsPositionVentilationWindalarm': [
        {
            condition: {
                index: 5,
                operator: 'eq',
                value: true
            },
            disable: [0, 1, 2, 3, 4],
            reason: 'Wind alarm',
        },
    ],
});

shif_register_disable_hooks({
    'Base.shadingButtonsPositionWindalarm': [
        {
            condition: {
                index: 4,
                operator: 'eq',
                value: true
            },
            disable: [0, 1, 2, 3],
            reason: 'Wind alarm',
        },
    ],
});


shif_register_disable_hooks({
    'Base.shadingAwningButtonsPositionRainalarm': [
        {
            condition: {
                index: 5,
                operator: 'eq',
                value: true
            },
            disable: [0, 1, 2, 3],
            reason: 'Disabled',
        },
        {
            condition: {
                index: 3,
                operator: 'eq',
                value: 1
            },
            disable: [0, 1, 2, 3],
            reason: 'Rain alarm'
        }
    ],
});

shif_register_disable_hooks({
    'Base.shadingAwningButtonsPositionRainalarm': [
        {
            condition: {
                index: 4,
                operator: 'eq',
                value: true
            },
            disable: [0, 1, 2, 3],
            reason: 'Rain alarm'
        }
    ],
});

shif_register_disable_hooks({
    'Base.shadingAwningButtonsPositionWindalarm': [
        {
            condition: {
                index: 4,
                operator: 'eq',
                value: true
            },
            disable: [0, 1, 2, 3],
            reason: 'Wind alarm'
        }
    ],
});

shif_register_disable_hooks({
    'Base.shadingAwningButtonsPositionWindalarmRainalarm': [
        {
            condition: {
                index: 4,
                operator: 'eq',
                value: true
            },
            disable: [0, 1, 2, 3],
            reason: 'Wind alarm',
        },
        {
            condition: {
                index: 5,
                operator: 'eq',
                value: true
            },
            disable: [0, 1, 2, 3],
            reason: 'Rain alarm',
        }
    ],
});
