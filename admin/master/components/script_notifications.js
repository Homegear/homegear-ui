const ShifNotificationMessage = {
    props: {
        title: {
            type: String,
        },
        content: {
            type: String,
        },
        buttons: {
            type: Array,
            default: function () {
                return [];
            },
        },
    },

    methods: {
        on_click: function (btn_id) {
            this.$emit('click', {
                button: btn_id
            })
        },
    },

    template: `
        <div class="notification_message">
            <div class="notification_title" v-if="title">{{ title }}</div>

            <div class="notification_content" v-if="content" v-html="content">
            </div>

            <div class="notification_buttons" v-if="buttons.length > 0">
                <button v-for="i in buttons"
                        v-bind:class="i.type"
                        v-on:click="on_click(i.id)"
                        v-html="i.content">
                </button>
            </div>
        </div>
    `
};



Vue.component('shif-notifications-element', {
    mixins: [mixin_print_mounted()],

    props: {
        name:        { type: String, required: true, },
        description: { type: String, },
        icon:        { type: String, default: 'notification_1'},
        translate:   { type: Boolean, default: true, },
    },

    computed: {
        icon_active_class: function () {
            return this.icon_active ? 'active' : '';
        },
    },

    template: `
        <div class="button">
            <shif-icon v-if="icon" classname="button_icon" v-bind:src="icon" />
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



let gdpr = new Vue({
    name: 'GDPR',

    components: {
        ShifNotificationMessage,
    },

    data: function () {
        return {
            msg: {
                title: '',
                content: '',
                buttons: [],
            },
            initialized: false,
        };
    },

    created: function () {
        // Setting those values here instead of defining them directly in data
        // simulates fetching them via an invoke from homegear.
        //
        // TODO: refactor into an invoke once the backed is implemented.
        this.msg.title   = i18n('notifications.gdpr.title');
        this.msg.content = i18n('notifications.gdpr.content');
        this.msg.buttons = [
            {
                type: 'error',
                content: i18n('notifications.gdpr.decline'),
                id: 'decline',
            },
            {
                type: 'success',
                content: i18n('notifications.gdpr.accept'),
                id: 'accept',
            },
        ];
        this.initialized = true;
    },

    methods: {
        on_click: function (btn_id) {
            this.initialized = false;
            this.$nextTick(() => {
                mount_interface();
                this.$destroy();
            });
        },
    },

    template: `
        <div id="gdpr">
            <div v-if="initialized"
                 class="content content_single">
                <shif-notification-message v-bind:title="msg.title"
                                           v-bind:content="msg.content"
                                           v-bind:buttons="msg.buttons"
                                           v-on:click="on_click($event.button)" />
            </div>
        </div>
    `
});



const ShifNotificationsNotification = {
    mixins: [mixin_print_mounted('shif-notifications-notification')],

    components: {
        ShifNotificationMessage,
    },

    props: {
        notification_id: {}
    },

    computed: {
        msg: function () {
            return interfaceData.notifications[this.notification_id];
        },
    },

    template: `
        <div>
            <shif-notification-message v-bind="msg" />
        </div>
    `
};



const ShifNotificationsLvl1 = {
    mixins: [
        mixin_scroll_position,
        mixin_print_mounted('shif-notifications-lvl1')
    ],

    methods: {
        link: function (id) {
            return {
                name: 'notifications.notification',
                params: {
                    notification_id: id,
                },
            };
        },
    },

    template: `
        <div>
            <template v-for="i, key in interfaceData.notifications">
                <router-link v-bind:to="link(key)">
                    <shif-notifications-element v-bind:key="key"
                                                v-bind:name="i.title"
                                                v-bind:translate="false"
                                                icon="notification_1" />
                </router-link>
            </template>
        </div>
    `
};



const ShifNotifications = {
    mixins: [mixin_print_mounted('shif-notifications')],

    template: `
        <shif-paging id="notifications" />
    `
};



function mount_interface_with_gdpr() {
    if (interfaceData.options.gdpr)
        gdpr.$mount('#gdpr');
    else
        mount_interface();
}
