////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let humidity = clone(shif_device);
humidity.template = `
    <shif-generic-l2 v-bind:icon="icons.humidity.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.humidity.color, text: texts.title.color}"
                     v-bind:status="status"
                     v-bind:place="place">
    </shif-generic-l2>
`;

let temperature = clone(shif_device);
temperature.template = `
    <shif-generic-l2 v-bind:icon="icons.temperature.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.temperature.color, text: texts.title.color}"
                     v-bind:status="status"
                     v-bind:place="place">
    </shif-generic-l2>
`;

shif_comps_create('humidity',    humidity,    humidity);
shif_comps_create('temperature', temperature, temperature);
