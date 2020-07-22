Vue.component('shif-functions-element', {
    mixins: [mixin_print_mounted()],

    props: {
        name:        { type: String, required: true, },
        description: { type: String, },
        icon:        { type: String, default: 'calendar-time_1'},
        icon_active: { type: Boolean, default: false, },
        translate:   { type: Boolean, default: true, },
    },

    computed: {
        icon_active_class: function () {
            return this.icon_active ? 'active' : '';
        },
    },

    template: `
        <div class="button">
            <shif-icon v-if="icon" classname="button_icon" v-bind:src="icon" v-bind:active="icon_active_class" />
            <div class="button_text">
                <template v-if="description && description.length > 0">
                    <div class="button_title">{{ translate ? i18n(name) : name }}</div>
                </template>
                <template v-else="description && description.length > 0">
                    <div class="button_title button_no_description">{{ translate ? i18n(name) : name }}</div>
                </template>
                <template v-if="description && description.length > 0">
                    <div class="button_status" style="display:block;">{{ translate ? i18n(description) : description }}</div>
                </template>
            </div>
            <div class="button_action">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg" x="0" y="0" width="370.81" height="370.81" viewBox="0 0 370.81 370.81">
                    <g id="Ebene_1">
                        <path d="M77.9 345.97L102.03 370.81 292.92 185.41 102.03 0 77.9 24.85 243.18 185.41z"/>
                    </g>
                </svg>
            </div>
        </div>
    `
});



const ShifFunctionsLvl1 = {
    mixins: [
        mixin_scroll_position,
        mixin_print_mounted('shif-functions-level-1')
    ],

    methods: {
        name: function (key) {
            return i18n('functions.' + key);
        },

        description: function (i, key) {
            if (key !== 'notifications')
                return undefined;

            const amount = Object.keys(i).length;

            return `${i18n('functions.notifications.amount')}: ${amount}`;
        },
    },

    template: `
        <div>
            <template v-for="i, key in interfaceData.functions">
                <router-link v-bind:to="{name: 'functions.' + key}">
                    <shif-functions-element v-bind:key="key"
                                            v-bind:name="name(key)"
                                            v-bind="{description: description(i, key)}"
                                            v-bind:translate="false"
                                            icon="calendar-time_1" />
                </router-link>
            </template>
        </div>
    `
};



const ShifFunctions = {
    mixins: [mixin_print_mounted('shif-functions')],

    template: `
        <shif-paging id="functions" />
    `
};
