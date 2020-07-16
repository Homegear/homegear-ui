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



let gdpr = new Vue({
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
        this.msg.title   = i18n('functions.notifications.gdpr.title');
        this.msg.content = i18n('functions.notifications.gdpr.content');
        this.msg.buttons = [
            {
                type: 'error',
                content: i18n('functions.notifications.gdpr.decline'),
                id: 'decline',
            },
            {
                type: 'warning',
                content: i18n('functions.notifications.gdpr.more'),
                id: 'more',
            },
            {
                type: 'success',
                content: i18n('functions.notifications.gdpr.accept'),
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



const ShifFunctionsNotificationsNotification = {
    mixins: [mixin_print_mounted('shif-functions-notifications')],

    components: {
        ShifNotificationMessage,
    },

    props: {
        notification_id: {}
    },

    computed: {
        msg: function () {
            return interfaceData.functions.notifications[this.notification_id];
        },
    },

    template: `
        <div>
            <shif-notification-message v-bind="msg" />
        </div>
    `
};



const ShifFunctionsNotifications = {
    mixins: [
        mixin_scroll_position,
        mixin_print_mounted('shif-functions-notifications')
    ],

    methods: {
        link: function (id) {
            return {
                name: 'functions.notifications.notification',
                params: {
                    notification_id: id,
                },
            };
        },
    },

    template: `
        <div>
            <template v-for="i, key in interfaceData.functions.notifications">
                <router-link v-bind:to="link(key)">
                    <shif-functions-element v-bind:key="key"
                                            v-bind:name="i.title"
                                            v-bind:translate="false"
                                            icon="notification_1" />
                </router-link>
            </template>
        </div>
    `
};



function mount_interface_with_gdpr() {
    if (interfaceData.options.gdpr)
        gdpr.$mount('#gdpr');
    else
        mount_interface();
}
