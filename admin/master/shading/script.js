////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let shading_ventilation_l2 = clone(shif_device);
shading_ventilation_l2.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
shading_ventilation_l2.template = `
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

let shading_ventilation_l3 = clone(shif_device);
shading_ventilation_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
shading_ventilation_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status_minimal"
                     v-on:click="change">
    </shif-generic-l2>
`;

shif_comps_create('shadingVentilation', shading_ventilation_l2, shading_ventilation_l3);
shif_comps_create('shadingWindalarm', shading_ventilation_l2, shading_ventilation_l3);



let shading_slider = clone(shif_device);
shading_slider.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, this.props.value);
}
shading_slider.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="props.maximumScaled"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step=5
                 v-on:change="change"
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
shading_buttons_l3.methods.change = function(event) {
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
            homegear.value_set_clickcounter(this, output, null);
        }
        else if(this.output.type == 'bool') {
            let output = clone(this.output);
            output.value = down;
            homegear.value_set_clickcounter(this, output, null);
        }
    }
    else homegear.value_set_clickcounter(this, this.output, true);
}
shading_buttons_l3.template = `
    <div>
        <div class="control_button_wrapper">
            <shif-button v-on:click="change">
                <shif-icon v-bind:src="cond.icon.name"
                           v-bind:active="cond.icon.color">
                </shif-icon>
            </shif-button>
        </div>
    </div>
`;

shif_comps_create('shadingButtons', shading_buttons_l2, shading_buttons_l3, shading_buttons_l3);
shif_comps_create('shadingButtonsSingleStep', shading_buttons_l2, shading_buttons_l3, shading_buttons_l3);
shif_comps_create('shadingButtonsUpDown', shading_buttons_l2, shading_buttons_l3, shading_buttons_l3);
