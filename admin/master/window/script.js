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

shif_comps_create('windowContact', window_status, window_status);
shif_comps_create('windowHandle',  window_status, window_status);

let window_buttons_l2 = clone(shif_device);
window_buttons_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.l2.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.l2.color, text: texts.title.color}"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-bind:status="status"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;
let window_buttons_l3 = clone(shif_device);
window_buttons_l3.methods.change = function(event) {
    let upVar = this.control.variableOutputs[0];
    let downVar = this.control.variableOutputs[2];
    if((this.index == 0 || this.index == 2) &&
        !upVar.hasOwnProperty('value') &&
        !downVar.hasOwnProperty('value') &&
        upVar.peer == downVar.peer &&
        upVar.channel == downVar.channel &&
        upVar.name == downVar.name) {
        let down = (this.index == 2);
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
        <div class="window-buttons-up-down_control_button_wrapper">
            <shif-button v-on:click="change">
                <shif-icon v-bind:src="cond.icon.name"
                           v-bind:active="cond.icon.color">
                </shif-icon>
            </shif-button>
        </div>
    </div>
`;

shif_comps_create('windowButtonsUpDown', window_buttons_l2, window_buttons_l3, window_buttons_l3);
