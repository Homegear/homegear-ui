/*
    global
        NotificationDisplayType
        i18n
        mixin_notification
        mixin_print_mounted
        mixin_scroll_position
*/
/*
    exported
        ShifNotifications
        ShifNotificationsLvl1
        ShifNotificationsNotification
        modal_mount
        user_interaction
*/



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
        on_click: function (btn) {
            this.$emit('click', {
                button: btn
            });
        },
    },

    template: `
        <div class="notification_message">
            <div class="notification_title" v-if="modalTitle">{{ modalTitle }}</div>

            <div class="notification_content" v-if="modalContent" v-html="modalContent">
            </div>

            <slot />

            <div class="notification_buttons">
                <template v-if="has_buttons">
                    <button v-for="i in buttons"
                            v-bind:class="i.type"
                            v-on:click="on_click(i)">
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



let modal = new Vue({
    name: 'Modal',

    components: {
        ShifNotificationMessage,
    },

    mixins: [mixin_notification],

    computed: {
        show: function () {
            return this.modal_notifications.length > 0;
        },
    },

    methods: {
        click: function (id, _btn) {
            const btn = _btn.button;

            this.notification_action(id, btn.id, () => {
                const msg = interfaceData.notifications[id];

                if (btn.closeModal === true) {
                    switch (msg.displayType) {
                        case NotificationDisplayType.Modal:
                            this.notification_hide(id);
                            break;
                        case NotificationDisplayType.ToastIntegrated:
                        case NotificationDisplayType.Integrated:
                            this.$router.back();
                            break;
                    }
                }

                if (btn.reloadUi === true)
                    window.location.reload();
            });
        },

        close_delete: function (id) {
            this.notification_remove(id);
        },
    },

    template: `
        <div v-if="show" id="modal">
            <div class="content content_single">
                <template v-for="i in modal_notifications">
                    <shif-notification-message v-bind:key="i.id"
                                               v-bind="i"
                                               v-on:click="click(i.id, $event)"
                                               v-on:close_delete="close_delete(i.id)" />
                </template>
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
        click: function (_btn) {
            const btn = _btn.button;

            this.notification_action(this.notification_id, btn.id, () => {
                const msg = interfaceData.notifications[this.notification_id];

                if (btn.closeModal === true) {
                    switch (msg.displayType) {
                        case NotificationDisplayType.Modal:
                            this.notification_hide(msg.id);
                            break;
                        case NotificationDisplayType.ToastIntegrated:
                        case NotificationDisplayType.Integrated:
                            this.$router.back();
                            break;
                    }
                }

                if (btn.reloadUi === true)
                    window.location.reload();
            });
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
        mixin_notification,
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
            <template v-for="i in integrated_notifications">
                <router-link v-bind:to="link(i.id)">
                    <shif-notifications-element v-bind:key="i.id"
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



function modal_mount() {
    modal.$mount('#modal');
}



let user_interaction = new Vue({
    name: 'UserInteraction',

    components: {
        ShifNotificationMessage,
    },

    data: function () {
        return {
            msg: {
                modalTitle: '',
                modalContent: '',
                buttons: [],
            },

            dont_show_again: {
                show: false,
                store: undefined
            },

            show: false,
        };
    },

    created: function () {
        this._resolve = null;
    },

    computed: {
        dont_show_again_store: {
            set: function (new_) {
                if (this.dont_show_again_store === undefined)
                    return;

                const key = this.dont_show_again.store;

                this.$homegear.invoke({
                    jsonrpc: '2.0',
                    method: 'getUserMetadata',
                    params: []
                }, (data) => {
                    let new_settings = data.result;

                    if (new_settings.interface === undefined ||
                        new_settings.interface === null)
                        new_settings.interface = {};

                    if (new_settings.interface.dont_show_again === undefined)
                        new_settings.interface.dont_show_again = {};

                    new_settings.interface.dont_show_again[key] = new_;

                    this.$homegear.invoke({
                        jsonrpc: '2.0',
                        method: 'setUserMetadata',
                        params: [new_settings]
                    });
                });

                if (interfaceData.options.dont_show_again === undefined)
                    Vue.set(interfaceData.options, 'dont_show_again', {});

                Vue.set(interfaceData.options.dont_show_again, key, new_);
            },
            get: function () {
                if (this.dont_show_again.show !== true ||
                    this.dont_show_again.store === undefined)
                    return undefined;

                const obj = interfaceData.options.dont_show_again;

                return obj !== undefined &&
                       obj[this.dont_show_again.store] === true;
            }
        }
    },

    methods: {
        _trans_get: function (obj, elem, def) {
            if (obj !== undefined &&
                elem !== undefined &&
                obj[elem] !== undefined)
                return i18n(obj[elem]);
            if (def!== undefined)
                return i18n(def);

            return undefined;
        },

        confirm: function (question) {
            if (question === undefined || typeof(question) !== 'object')
                return;

            if (this._dont_show_again(question) === 'hide')
                return;

            this.msg.modalContent = this._trans_get(question, 'content');
            this.msg.modalTitle   = this._trans_get(question, 'title');

            this.msg.buttons = [
                {
                    value: true,
                    type: 'success',
                    label: this._trans_get(question.buttons, 'true',
                                           'user_interaction.confirm.button.true'),
                },
                {
                    value: false,
                    type: 'error',
                    label: this._trans_get(question.buttons, 'false',
                                           'user_interaction.confirm.button.false'),
                },
            ];
            this.show = true;

            return new Promise((res) => this._resolve = res);
        },

        alert: function (question) {
            if (question === undefined || typeof(question) !== 'object')
                return;

            if (this._dont_show_again(question) === 'hide')
                return;

            this.msg.modalContent = this._trans_get(question, 'content');
            this.msg.modalTitle   = this._trans_get(question, 'title');

            this.msg.buttons = [
                {
                    value: true,
                    type: 'success',
                    label: this._trans_get(question.buttons, 'true',
                                           'user_interaction.alert.button.true'),
                },
            ];

            this.show = true;

            return new Promise((res) => this._resolve = res);
        },

        _on_click: function (btn) {
            if (this._resolve !== undefined && this._resolve !== null)
                this._resolve(btn.button.value);

            this.show = false;
        },

        _dont_show_again: function (args) {
            if (args === undefined || args.dont_show_again === undefined){
                this.dont_show_again.show = false;
                this.dont_show_again.store = undefined;

                return 'show';
            }

            const key = args.dont_show_again;

            if (interfaceData.options.dont_show_again !== undefined &&
                interfaceData.options.dont_show_again[key] === true)
                return 'hide';

            this.dont_show_again.show = true;
            this.dont_show_again.store = key;

            return 'show';
        },

        i18n: i18n,
    },

    template: `
        <div v-if="show" id="user_interaction">
            <div class="content content_single">
                <shif-notification-message v-bind="msg"
                                           v-on:click="_on_click">

                    <div v-if="dont_show_again.show === true"
                         class="notification_content dont_show_again">
                        <p>{{ i18n('notifications.dont_show_again') }}</p>
                        <shif-checkbox v-model="dont_show_again_store" />
                    </div>

                </shif-notification-message>
            </div>
        </div>
    `
}).$mount('#user_interaction');
