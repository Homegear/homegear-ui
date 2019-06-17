////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let socket_switch_l2 = clone(shif_device);
socket_switch_l2.template = `
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

let socket_switch_l3 = clone(shif_device);
socket_switch_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status"
                     v-on:click="$homegear.value_set(output, !props.value)">
    </shif-generic-l2>
`;

shif_comps_create('socketSwitch', socket_switch_l2, socket_switch_l3);



let socket_button_l2 = clone(shif_device);
socket_button_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let socket_button_l3 = clone(shif_device);
socket_button_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:mousedown="$homegear.value_set(output, true)"
                     v-on:mouseup="$homegear.value_set(output, false)">
    </shif-generic-l2>
`;

shif_comps_create('socketButton', socket_button_l2, socket_button_l3);
