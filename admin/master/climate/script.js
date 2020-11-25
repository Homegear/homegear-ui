/*
    global
        clone
        shif_comps_create
        shif_device
        shif_device_slot_automations
        shif_device_slot_draggable
        shif_device_slot_favorites
        status_format
*/



////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let climate_main = clone(shif_device);
climate_main.computed.status_formatted = function () {
    return status_format.apply(this, [this.status_minimal(false), 1]);
};
climate_main.computed.icon = function () {
    return 'main' in this.icons
        ? this.icons.main
        : this.control.icons.main;
};
climate_main.template = `
    <shif-generic-l2 v-bind:icon="icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: icon.color, text: texts.title.color}"
                     v-bind:status="status_formatted"
                     v-bind:place="place">

        ${shif_device_slot_favorites}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

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
                     v-on:click="level3(device)">

        ${shif_device_slot_favorites}
        ${shif_device_slot_automations}
        ${shif_device_slot_draggable}

    </shif-generic-l2>
`;



shif_comps_create('humidity',             openweathermap_l2, climate_main);
shif_comps_create('temperature',          openweathermap_l2, climate_main);
shif_comps_create('climateCity',          openweathermap_l2, climate_main);
shif_comps_create('climateCloudcoverage', openweathermap_l2, climate_main);
shif_comps_create('climateDate',          openweathermap_l2, climate_main);
shif_comps_create('climatePressure',      openweathermap_l2, climate_main);
shif_comps_create('climateRain',          openweathermap_l2, climate_main);
shif_comps_create('climateRain3h',        openweathermap_l2, climate_main);
shif_comps_create('climateSnow3h',        openweathermap_l2, climate_main);
shif_comps_create('climateSunrise',       openweathermap_l2, climate_main);
shif_comps_create('climateSunset',        openweathermap_l2, climate_main);
shif_comps_create('climateDusk',          openweathermap_l2, climate_main);
shif_comps_create('climateWeather',       openweathermap_l2, climate_main);
shif_comps_create('climateWinddirection', openweathermap_l2, climate_main);
shif_comps_create('climateWindgust',      openweathermap_l2, climate_main);
shif_comps_create('climateWindspeed',     openweathermap_l2, climate_main);
// shif_comps_create('OpenWeatherMap',    openweathermap_l2, openweathermap_l2);
