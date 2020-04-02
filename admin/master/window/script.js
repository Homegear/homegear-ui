////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let window_rainalarm = clone(shif_device);
window_rainalarm.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">
    </shif-generic-l2>
`;

shif_comps_create('windowRainalarm', window_rainalarm, window_rainalarm);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let window_status = clone(shif_device);
window_status.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place">
    </shif-generic-l2>
`;

let window_status_l3 = clone(shif_device);
window_status_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;

shif_comps_create('windowContact', window_status, window_status_l3);
shif_comps_create('windowHandle',  window_status, window_status_l3);

let window_buttons_l2 = clone(shif_device);
window_buttons_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.l2.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.l2.color, text: texts.title.color}"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-bind:status="status"
                     v-on:click="level3(device, breadcrumb)">

        <template v-slot:favorites>
            <shif-checkbox-favorites v-bind:dev="dev" />
        </template>

    </shif-generic-l2>
`;
let window_buttons_l3 = clone(shif_device);
window_buttons_l3.methods.change = function(event) {
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
window_buttons_l3.template = `
    <div>
        <div class="control_button_wrapper">
            <shif-button v-bind:disabled="disabled"
                         v-on:click="change">
                <shif-icon v-bind:src="cond.icon.name"
                           v-bind:active="cond.icon.color">
                </shif-icon>
            </shif-button>
        </div>
    </div>
`;

shif_comps_create('windowButtonsUpDown', window_buttons_l2, window_buttons_l3);
shif_comps_create('windowButtons', window_buttons_l2, window_buttons_l3);

let window_slider = clone(shif_device);
window_slider.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, this.props.value);
}
window_slider.provides = function () {
    return {
        checkbox_wanted: true,
    };
},
window_slider.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="props.maximumScaled"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step=5
                 v-bind:disabled="disabled"
                 v-on:change="change"
                 v-model:value="props.value">
    </shif-slider>
`;

shif_comps_create('windowPosition',      window_buttons_l2, window_slider);
