/*
    global
        clone
        homegear
        shif_comps_create
        shif_device
        shif_device_slot_automations
        shif_device_slot_draggable
        shif_device_slot_favorites
*/



let media_buttons_l2 = clone(shif_device);
media_buttons_l2.template = `
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

let media_buttons_l3 = clone(shif_device);
media_buttons_l3.methods.change = function(_event) {
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

media_buttons_l3.template = `
    <div class="control_button_wrapper">
        <shif-button v-bind:disabled="disabled"
                     v-on:click="change">
            <shif-icon v-bind:src="cond.icon.name"
                        v-bind:active="cond.icon.color">
            </shif-icon>
        </shif-button>

        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </div>
`;

shif_comps_create('mediaButtons', media_buttons_l2, media_buttons_l3);
