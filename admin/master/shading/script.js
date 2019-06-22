////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let shading_ventilation_l2 = clone(shif_device);
shading_ventilation_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="$homegear.value_set(output, !props.value)"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let shading_ventilation_l3 = clone(shif_device);
shading_ventilation_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-on:click="$homegear.value_set(output, !props.value)">
    </shif-generic-l2>
`;

shif_comps_create('shadingVentilation', shading_ventilation_l2, shading_ventilation_l3);
shif_comps_create('shadingWindalarm', shading_ventilation_l2, shading_ventilation_l3);



let shading_slider = clone(shif_device);
shading_slider.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="props.maximumScaled"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-on:change="$homegear.value_set(output, props.value)"
                 v-model:value="props.value">
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
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;
let shading_buttons_l3 = clone(shif_device);
shading_buttons_l3.template = `
    <div>
        <div class="control_button_wrapper">
            <shif-button width="50%" v-on:click="$homegear.value_set(output, true)">
                <shif-icon v-bind:src="cond.icon.name"
                           v-bind:active="cond.icon.color">
                </shif-icon>
            </shif-button>
        </div>
    </div>
`;

shif_comps_create('shadingButtons', shading_buttons_l2, shading_buttons_l3, shading_buttons_l3);
shif_comps_create('shadingButtonsUpDown', shading_buttons_l2, shading_buttons_l3, shading_buttons_l3);