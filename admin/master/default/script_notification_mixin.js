/*
    exported
        NotificationDisplayType
        mixin_notification
*/



const NotificationDisplayType = {
    Error: -1,
    Toast: 0,
    ToastIntegrated: 1,
    Integrated: 2,
    Modal: 3,

    _is_integrated: function (flags) {
        return flags.hasModal === true &&
               flags.overlayModal !== true &&
               flags.overlayNotification !== true;
    },

    _is_modal: function (flags) {
        return flags.hasModal === true &&
               flags.overlayModal === true &&
               flags.overlayNotification !== true;
    },

    _is_toast_only: function (flags) {
        return flags.hasModal !== true &&
               flags.overlayModal !== true &&
               flags.overlayNotification === true;
    },

    _is_toast_integrated: function (flags) {
        return flags.hasModal === true &&
               flags.overlayModal !== true &&
               flags.overlayNotification === true;
    },

    find: function (notification) {
        const flags = typeof(notification) === 'object'
                        ? notification.flags
                        : interfaceData.notifications[notification].flags;

        if (this._is_toast_only(flags))
            return NotificationDisplayType.Toast;

        if (this._is_integrated(flags))
            return NotificationDisplayType.Integrated;

        if (this._is_modal(flags))
            return NotificationDisplayType.Modal;

        if (this._is_toast_integrated(flags))
            return NotificationDisplayType.ToastIntegrated;

        return NotificationDisplayType.Error;
    }
};



function notification_inject_display_type(x) {
    if (x.displayType === undefined)
        Vue.set(x, 'displayType', NotificationDisplayType.find(x));

    return x;
}



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
    },

    computed: {
        _notifications: function () {
            return Object.keys(interfaceData.notifications)
                         .map(x => interfaceData.notifications[x])
                         .map(notification_inject_display_type);
        },

        modal_notifications: function () {
            return this._notifications
                       .filter(x => x.displayType === NotificationDisplayType.Modal)
                        // filter out messages hidden by closeModal
                       .filter(x => x.hidden !== true);
        },

        toast_notifications: function () {
            return this._notifications
                       .filter(
                           x => x.displayType === NotificationDisplayType.Toast ||
                                x.displayType === NotificationDisplayType.ToastIntegrated
                       );
        },

        integrated_notifications: function () {
            return this._notifications
                       .filter(
                            x => x.displayType === NotificationDisplayType.Integrated ||
                                 x.displayType === NotificationDisplayType.ToastIntegrated
                       );
        },
    },
};
