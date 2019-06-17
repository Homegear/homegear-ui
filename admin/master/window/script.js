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
