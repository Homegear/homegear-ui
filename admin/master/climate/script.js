////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function status_format(status, precision) {
    if (typeof(status) === 'string') {
        const regex = /^(\d+(?:\.\d+)?)/;
        return status.replace(regex, (match) => this.float_formatted(match, precision));
    }

    for (let cur of status)
        cur.value = status_format.apply(this, [cur.value, precision])

    return status;
}


let humidity = clone(shif_device);
humidity.computed.status_formatted = function () {
    return status_format.apply(this, [this.status, 1]);
};
humidity.template = `
    <shif-generic-l2 v-bind:icon="icons.humidity.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.humidity.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place">
    </shif-generic-l2>
`;

let temperature = clone(shif_device);
temperature.computed.status_formatted = function () {
    return status_format.apply(this, [this.status, 1]);
};
temperature.template = `
    <shif-generic-l2 v-bind:icon="icons.temperature.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.temperature.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place">
    </shif-generic-l2>
`;

shif_comps_create('humidity',    humidity,    humidity);
shif_comps_create('temperature', temperature, temperature);
