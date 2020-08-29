/*
    global
        i18n
        interface_mount
        interface_show
        mixin_print_mounted
        mixin_scroll_position
*/
/*
    exported
        ShifNotifications
        ShifNotificationsLvl1
        ShifNotificationsNotification
        interface_mount_with_gdpr
*/



const mixin_notification = {
    methods: {
        notification_action: function (id, btn, cb) {
            if (id === undefined)
                id = this.notification_id;

            this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'uiNotificationAction',
                params: [Number(id), Number(btn)],
            }, cb);
        },

        notification_get: function (id, cb) {
            if (id === undefined)
                id = this.notification_id;

            this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'getUiNotification',
                params: [Number(id), interfaceData.options.language],
            }, cb);
        },

        notification_remove: function (id, cb) {
            if (id === undefined)
                id = this.notification_id;

            this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'removeUiNotification',
                params: [Number(id)],
            }, cb);
        },
    }
};



// @vue/component
const ShifNotificationMessage = {
    props: {
        modalTitle: {
            type: String,
            default: undefined,
        },
        modalContent: {
            type: String,
            default: undefined,
        },
        buttons: {
            type: Array,
            default: function () {
                return [];
            },
        },
    },

    computed: {
        has_buttons: function () {
            return this.buttons.length > 0;
        },
    },

    methods: {
        on_click: function (btn_id) {
            this.$emit('click', {
                button: btn_id
            });
        },
    },

    template: `
        <div class="notification_message">
            <div class="notification_title" v-if="modalTitle">{{ modalTitle }}</div>

            <div class="notification_content" v-if="modalContent" v-html="modalContent">
            </div>

            <div class="notification_buttons">
                <template v-if="has_buttons">
                    <button v-for="i in buttons"
                            v-bind:class="i.type"
                            v-on:click="on_click(i.id)">
                        <shif-icon v-if="i.icon !== undefined"
                                   v-bind:src="i.icon" />
                        <span v-html="i.label"></span>
                    </button>
                </template>
                <template v-else>
                    <button v-on:click="$emit('close_delete')">
                        {{ i18n('notifications.close_delete') }}
                    </button>
                </template>
            </div>
        </div>
    `
};



Vue.component('shif-notifications-element', {
    mixins: [mixin_print_mounted()],

    props: {
        name:        { type: String, required: true, },
        description: { type: String, default: undefined, },
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
        on_click: function () {
            this.initialized = false;

            interface_show();

            this.$nextTick(() => {
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



// @vue/component
const ShifNotificationsNotification = {
    components: {
        ShifNotificationMessage,
    },

    mixins: [
        mixin_notification,
        mixin_print_mounted('shif-notifications-notification')
    ],

    props: {
        notification_id: {}
    },

    computed: {
        msg: function () {
            return interfaceData.notifications[this.notification_id];
        },
    },

    watch: {
        'msg': function (new_) {
            if (new_)
                return;

            this.$router.back();
        },
    },

    methods: {
        click: function (btn) {
            this.notification_action(this.notification_id, btn.button);
        },

        close_delete: function () {
            this.notification_remove(this.notification_id);
        },
    },

    template: `
        <div>
            <shif-notification-message v-bind="msg"
                                       v-on:close_delete="close_delete"
                                       v-on:click="click" />
        </div>
    `
};



// @vue/component
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



// @vue/component
const ShifNotifications = {
    mixins: [mixin_print_mounted('shif-notifications')],

    template: `
        <shif-paging id="notifications" />
    `
};



function interface_mount_with_gdpr() {
    gdpr.$mount('#gdpr');
    interface_mount(false);
}
