////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let heating_slider_l2 = clone(shif_device);
heating_slider_l2.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
heating_slider_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="change"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;
let heating_slider_l3 = clone(shif_device);
heating_slider_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, this.props.value);
}
heating_slider_l3.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="parseFloat(props.maximumScaled)+parseFloat(0.5)"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step=0.5
                 v-on:change="change"
                 v-model:value="props.value">
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
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;
let heating_is_state_l3 = clone(shif_device);
heating_is_state_l3.template = `
    <shif-generic-l2 v-bind:icon="control.icons.temperature.name"
                     v-bind:title="title"
                     v-bind:active="{icon: control.icons.temperature.color, text: texts.title.color}"
                     v-bind:status="status"
                     v-bind:place="place">
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
}
heating_mode_l3.template = `
    <shif-radio v-bind:title="title"
                v-bind:values="values"
                v-on:input="x => change(parseInt(x))">
    </shif-radio>
`;

shif_comps_create('heatingMode', heating_is_state_l2, heating_mode_l3);



let heating_window_l2 = clone(shif_device);
heating_window_l2.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
heating_window_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="change"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let heating_window_l3 = clone(shif_device);
heating_window_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
heating_window_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status_minimal"
                     v-on:click="change">
    </shif-generic-l2>
`;

shif_comps_create('heatingWindow', heating_window_l2, heating_window_l3);