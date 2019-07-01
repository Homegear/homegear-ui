////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let timer_l2 = clone(shif_device);
timer_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let timer_l3 = clone(shif_device);
timer_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status"
                     v-on:click="$homegear.value_set(output, !props.value)">
    </shif-generic-l2>
`;

shif_comps_create('timer', timer_l2, timer_l3);