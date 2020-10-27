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



////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let lighting_switch_l2 = clone(shif_device);
lighting_switch_l2.template = `
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

let lighting_switch_l3 = clone(shif_device);
lighting_switch_l3.template = `
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

shif_comps_create('lightingSwitch', lighting_switch_l2, lighting_switch_l3);



let lighting_brightness = clone(shif_device);
lighting_brightness.template = `
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

shif_comps_create('lightingBrightness', lighting_switch_l2, lighting_brightness);
shif_comps_create('lightingSpeed', lighting_switch_l2, lighting_brightness);



let lighting_button_l2 = clone(shif_device);
lighting_button_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:click="level3(device)">

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}


    </shif-generic-l2>
`;

let lighting_button_l3 = clone(shif_device);
lighting_button_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place"
                     v-on:mousedown="$homegear.value_set(output, true)"
                     v-on:mouseup="$homegear.value_set(output, false)">

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}


    </shif-generic-l2>
`;

shif_comps_create('lightingButton', lighting_button_l2, lighting_button_l3);
shif_comps_create('refresh', lighting_button_l2, lighting_button_l3);



let lighting_color_l2 = clone(shif_device);
lighting_color_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:click="level3(device)">

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}


    </shif-generic-l2>
`;

let lighting_color_l3 = clone(shif_device);
lighting_color_l3.methods.change = function(event) {
    this.props.value = event;
    homegear.value_set(this.output, this.props.value);
};
lighting_color_l3.template = `
    <shif-colorpicker v-bind:width="{max_pixels: 600, percent: 100}"
                      v-bind:height="{max_pixels: 620, percent: 100}"
                      v-bind:color="props.value"
                      v-bind:title="title"
                      v-on:input="change">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}


    </shif-colorpicker>
`;

shif_comps_create('lightingColor', lighting_color_l2, lighting_color_l3);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let lighting_function_l2 = clone(shif_device);
lighting_function_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.l2.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.l2.color, text: texts.title.color}"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-bind:status="status"
                     v-on:click="level3(device)">

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}


    </shif-generic-l2>
`;

let lighting_function_l3 = clone(shif_device);
lighting_function_l3.computed.values = function () {
    return this.rendering
        .map(x => ({
            name:     x.definitions.texts.state.content,
            value:    x.condition.value,
        }));
};
lighting_function_l3.template = `
    <shif-dropdown v-bind:title="title"
                   v-bind:values="values"
                   v-bind:selected="props.value"
                   v-on:change="$homegear.value_set(output, parseInt($event))">

        ${shif_device_slot_profiles}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}


    </shif-dropdown>
`;

shif_comps_create('lightingFunction', lighting_function_l2, lighting_function_l3);



shif_register_disable_hooks({
    'Base.lightingSwitchButtonBrightnessColorDEMO': [
        {
            condition: {
                or: [
                    {
                        index: 0,
                        operator: 'eq',
                        value: false,
                    },
                    {
                        index: 1,
                        operator: 'eq',
                        value: false,
                    },
                ],
            },
            disable: [3, 4],
            reason: 'Disabled because device is turned off',
        },
    ],
});
