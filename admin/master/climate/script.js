////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function status_format(status, precision) {
    if (typeof(status) === 'string') {
        const regex = /^(\d+(?:\.\d+)?)/;
        return status.replace(regex, (match) => this.float_formatted(match, precision));
    }

    for (let cur of status)
        cur.value = status_format.apply(this, [cur.value, precision]);

    return status;
}


let humidity = clone(shif_device);
humidity.computed.status_formatted = function () {
    return status_format.apply(this, [this.status_minimal(false), 1]);
};
humidity.computed.icon = function () {
    return 'humidity' in this.icons
        ? this.icons.humidity
        : this.control.icons.humidity;
};
humidity.template = `
    <shif-generic-l2 v-bind:icon="icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: icon.color, text: cond.text.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place">
    </shif-generic-l2>
`;

let temperature = clone(shif_device);
temperature.computed.status_formatted = function () {
    return status_format.apply(this, [this.status_minimal(false), 1]);
};
temperature.computed.icon = function () {
    return 'temperature' in this.icons
        ? this.icons.temperature
        : this.control.icons.temperature;
};
temperature.template = `
    <shif-generic-l2 v-bind:icon="icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: icon.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place">
    </shif-generic-l2>
`;


let openweathermap_l2 = clone(shif_device);
openweathermap_l2.computed.status_formatted = function () {
    return status_format.apply(this, [this.status, 1]);
};
openweathermap_l2.template = `
    <shif-generic-l2 v-bind:icon="icons.weather.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: icons.weather.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;


shif_comps_create('humidity',       openweathermap_l2,       humidity);
shif_comps_create('temperature',    openweathermap_l2,    temperature);
// shif_comps_create('OpenWeatherMap', openweathermap_l2, openweathermap_l2);
