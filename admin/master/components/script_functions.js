const mixin_names = {
    methods: {
        floor_name: function (id) {
            if (id === '-1')
                return i18n('house.storyless');

            return interfaceData.floors[id].name;
        },

        room_name: function (id) {
            return interfaceData.rooms[id].name;
        },

        position: function (floor_id, room_id) {
            return `${this.floor_name(floor_id)} - ${this.room_name(room_id)}`;
        },

        device_name: function (id) {
            return interfaceData.devices[id].label;
        },

        control_name: function (device_id, control_idx) {
            const cur = interfaceData.devices[device_id].controls[control_idx];

            return cur.texts !== undefined &&
                   cur.texts.title !== undefined &&
                   cur.texts.title.content !== undefined
                        ? cur.texts.title.content
                        : cur.uniqueUiElementId;
        },

        input_name: function (device_id, control_idx, input_idx) {
            return interfaceData.devices[device_id]
                                .controls[control_idx]
                                .variableInputs[input_idx]
                                .name
                                .toLowerCase();

        },
    },
};



const mixin_functions_automations = {
    methods: {
        _automations_add_update: function (data, automation_id, cb) {
            const method = automation_id === undefined
                ? 'addVariableAutomation'
                : 'updateVariableAutomation';
            let params = automation_id === undefined
                ? []
                : [automation_id];

            params.push({
                [interfaceData.options.language]: data.name,
            });

            params.push({
                icon:        data.icon,
                description: data.description,
                conditon:    data.condition,
                action:      data.action,
            });

            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: method,
                params: params,
            }, (result) => {
                interfaceData.functions.automations[result.result] = {
                    name: data.name,
                    icon: data.icon,
                    description: data.description,
                    condition: Object.assign({}, data.condition),
                    action: Object.assign({}, data.action),
                };

                if (cb)
                    return cb(result);
            });
        },

        automations_add: function (data, cb) {
            return this._automations_add_update(data, undefined, cb);
        },

        automations_update: function (data, automation_id, cb) {
            return this._automations_add_update(data, automation_id, cb);
        },

        automations_delete: function (automation_id) {
            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'deleteVariableAutomation',
                params: [automation_id],
            }, (result) => {
                delete interfaceData.functions.automations[automation_id]

                if (cb)
                    return cb(result);
            })
        },
    },
};



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



const ShifDeviceSelection = {
    mixins: [
        mixin_names,
        mixin_print_mounted('shif-device-selection')
    ],

    props: {
        map:   { type: Object, required: true, },
        value: { type: Object, },
    },

    methods: {
        option_value: function (floor_id, room_id, device_id) {
            return `${floor_id}-${room_id}-${device_id}`;
        },

        on_input: function (new_) {
            const [floor_id, room_id, device_id] = new_.split('-');

            this.$emit('input', {
                floor_id: floor_id,
                room_id: room_id,
                device_id: device_id,
            });
        },
    },

    template: `
        <select v-bind:value="option_value(value.floor_id, value.room_id, value.device_id)"
                v-on:input="on_input($event.target.value)">
            <option value="null-null-null" disabled>---</option>
            <template v-for="floor, floor_id in map">
                <optgroup v-for="room, room_id in floor"
                          v-bind:label="position(floor_id, room_id)">
                    <option v-for="device_id in room"
                            v-bind:value="option_value(floor_id, room_id, device_id)">
                        {{ device_name(device_id) }}
                    </option>
                </optgroup>
            </template>
        </select>

    `
};



const ShifFunctionsAutomationsForm = {
    mixins: [
        mixin_names,
        mixin_rooms,
        mixin_print_mounted('shif-functions-automations-form')
    ],

    components: {
        ShifDeviceSelection,
    },

    props: {
        automation_id: {},
    },

    data: function () {
        const cur = interfaceData.functions.automations[this.automation_id] !== undefined
                        ? interfaceData.functions.automations[this.automation_id]
                        : {condition: {}, action: {}, name: '', description: '', icon: 'calendar-time_1'};

        let astrofunction = cur.condition && cur.condition.astrofunction
            ? Object.assign({}, cur.condition.astrofunction)
            : {trigger: 'sunrise', offset: 0, enabled: false};

        let time = cur.condition && cur.condition.time
            ? Object.assign({}, cur.condition.time)
            : {hour: 0, minute: 0, enabled: false};

        let days = cur.condition && cur.condition.days
            ? Object.assign({}, cur.condition.days)
            : {values: [], enabled: false};

        let condition_devices = cur.condition && cur.condition.devices
            ? {
                enabled: cur.condition.devices.enabled,
                values: cur.condition.devices.values.map(x => Object.assign({}, x))
              }
            : {values: [], enabled: false};

        let action_device = cur.action && cur.action.device
            ? {
                enabled: cur.action.device.enabled,
                value: cur.action.device.value,
                device: Object.assign({}, cur.condition.devices.device)
              }
            : {device: {device_id: null, floor_id: null, room_id: null}, value: '', enabled: false};

        let profile = cur.action && cur.action.profile
            ? Object.assign({}, cur.action.profile)
            : {profile_id: null, enabled: false};

        return {
            when: false,
            then: false,

            name: cur.name,
            icon: cur.icon,
            description: cur.description,
            enabled: cur.enabled === true,

            condition: {
                astrofunction: astrofunction,
                time: time,
                days: days,
                devices: condition_devices,
            },
            action: {
                device: action_device,
                profile: profile,
            },

            form: {
                operators: {
                    eq: '=',
                    ne: '≠',
                    ge: '≥',
                    le: '≤',
                    gt: '>',
                    lt: '<',
                },

                cond_device: {
                    device: { device_id: null, floor_id: null, room_id: null, },
                    control: null,
                    input: null,
                    operator: null,
                    value: '',
                },

                action_device: {
                    device: { device_id: null, floor_id: null, room_id: null, },
                    control: null,
                    input: null,
                    operator: null,
                    value: '',
                },
            },
        };
    },

    methods: {
        i18n: function (key) {
            return i18n('functions.automations.automation.' + key);
        },

        cond_device_add: function () {
            this.condition.devices.values.push({
                floor_id:  this.form.cond_device.device.floor_id,
                room_id:   this.form.cond_device.device.room_id,
                device_id: this.form.cond_device.device.device_id,
                control:   this.form.cond_device.control,
                input:     this.form.cond_device.input,
                operator:  this.form.cond_device.operator,
                value:     this.form.cond_device.value,
            });
        },

        cond_device_delete: function (idx) {
            this.condition.devices.values.splice(idx, 1);
        },
    },

    computed: {
        map_room_floor_device: function () {
            function handle_room(floor_id, room_id) {
                const room = interfaceData.rooms[room_id];

                for (const device_id of room.devices) {
                    const device = interfaceData.devices[device_id];

                    if (out[floor_id] === undefined)
                        out[floor_id] = {
                            [room_id]: [device_id],
                        };
                    else if (out[floor_id][room_id] === undefined)
                        out[floor_id][room_id] = [device_id];
                    else if (out[floor_id][room_id].indexOf(device_id) === -1)
                        out[floor_id][room_id].push(device_id);
                }
            }

            let out = {}

            for (const floor_id in interfaceData.floors) {
                const floor = interfaceData.floors[floor_id];

                for (const room_id of floor.rooms)
                    handle_room(floor_id, room_id);
            }

            for (const room_id of this.unassigned_rooms)
                handle_room(-1, room_id);

            return out;
        },

        condition_device: function () {
            if (! this.form.cond_device.device)
                return undefined;

            return interfaceData.devices[this.form.cond_device.device.device_id];
        },

        condition_device_control: function () {
            if (this.condition_device === undefined)
                return undefined;

            return this.condition_device.controls[this.form.cond_device.control];
        },

        action_device: function () {
            if (! this.form.action_device.device)
                return undefined;

            return interfaceData.devices[this.form.action_device.device.device_id];
        },

        action_device_control: function () {
            if (this.action_device === undefined)
                return undefined;

            return this.action_device.controls[this.form.action_device.control];
        },
    },

    template: `
        <div id="automation">
            <div class="form-group automation-state">
                <div class="label">{{ i18n('state') }}:</div>
                <shif-checkbox v-model="enabled" />
            </div>

            <div class="form-group">
                <div class="label">{{ i18n('name') }}:</div>
                <input type="text" v-model="name"/>

                <div class="label">{{ i18n('description') }}:</div>
                <input type="text" v-model="description"/>
            </div>
            <div class="form-group">
                <div class="label">{{ i18n('icon') }}:</div>
                <shif-icon-selection v-model="icon" />
            </div>

            <div class="collapse-content">
                <div class="collapse">
                    <div class="collapse-title" v-on:click="when = !when">
                        <shif-icon classname="collapse-icon" src="slider_1" />
                        <span>{{ i18n('condition') }}</span>
                        <div class="collapse-arrow">
                            <shif-icon src="arrow_down_1" v-bind:rotate="when" />
                        </div>
                    </div>
                    <shif-trans-drop-down>
                        <div v-if="when" class="collapse-content-inner">
                        <div class="inner-content">
                            <div class="timer_wrapper">
                            <div>
                                <div class="form-group collapse-wrapper">
                                    <div class="label">{{ i18n('condition.astrofunction') }}:</div>
                                    <shif-checkbox v-model="condition.astrofunction.enabled" />
                                </div>
                                <template v-if="condition.astrofunction.enabled">
                                    <div class="form-group">
                                        <select name="astro"
                                                v-model="condition.astrofunction.trigger">
                                            <option value="sunrise">
                                                {{ i18n('condition.astrofunction.sunrise') }}
                                            </option>
                                            <option value="sunset">
                                                {{ i18n('condition.astrofunction.sunset') }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="label">{{ i18n('condition.astrofunction.offset') }}:</div>
                                        <input type="number" name="offset"
                                            v-model.number="condition.astrofunction.offset"/>
                                    </div>
                                </template>
                            </div>
                            </div>

                            <div class="timer_wrapper">
                            <div>
                                <div class="form-group collapse-wrapper">
                                    <div class="label">{{ i18n('condition.time') }}:</div>
                                    <shif-checkbox v-model="condition.time.enabled" />
                                </div>
                                <template v-if="condition.time.enabled">
                                    <div class="form-group time">
                                    <div>
                                        <div class="label">{{ i18n('condition.time.hour') }}:</div>
                                        <input type="number" name="time" min="0" max="23" step="1"
                                            v-model.number="condition.time.hour" />
                                    </div>
                                    <div>
                                        <div class="label">{{ i18n('condition.time.minute') }}:</div>
                                        <input type="number" name="time" min="0" max="59" step="1"
                                            v-model.number="condition.time.minute" />
                                    </div>
                                    </div>
                                </template>
                            </div>
                            </div>

                            <div class="timer_wrapper">
                            <div>
                                <div class="form-group collapse-wrapper">
                                    <div class="label">{{ i18n('condition.days') }}:</div>
                                    <shif-checkbox v-model="condition.days.enabled" />
                                </div>
                                <template v-if="condition.days.enabled">
                                    <select class="select_day" name="days" multiple
                                            v-model.number="condition.days.values">
                                        <option value="1">{{ i18n('condition.days.mo') }}</option>
                                        <option value="2">{{ i18n('condition.days.tu') }}</option>
                                        <option value="3">{{ i18n('condition.days.we') }}</option>
                                        <option value="4">{{ i18n('condition.days.th') }}</option>
                                        <option value="5">{{ i18n('condition.days.fr') }}</option>
                                        <option value="6">{{ i18n('condition.days.sa') }}</option>
                                        <option value="7">{{ i18n('condition.days.su') }}</option>
                                    </select>
                                </template>
                            </div>
                            </div>

                            <div class="timer_wrapper">
                            <div>
                                <div class="form-group collapse-wrapper">
                                    <div class="label">{{ i18n('condition.devices') }}:</div>
                                    <shif-checkbox v-model="condition.devices.enabled" />
                                </div>
                                <template v-if="condition.devices.enabled">
                                    <table class="table1">
                                        <thead>
                                            <tr>
                                                <th>{{ i18n('condition.devices.table.place') }}</th>
                                                <th>{{ i18n('condition.devices.table.device') }}</th>
                                                <th>{{ i18n('condition.devices.table.control') }}</th>
                                                <th>{{ i18n('condition.devices.table.input') }}</th>
                                                <th>{{ i18n('condition.devices.table.operator') }}</th>
                                                <th>{{ i18n('condition.devices.table.value') }}</th>
                                                <th>{{ i18n('condition.devices.table.delete') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="i, idx in condition.devices.values">
                                                <td>{{ position(i.floor_id, i.room_id) }}</td>
                                                <td>{{ device_name(i.device_id) }}</td>
                                                <td>{{ control_name(i.device_id, i.control) }}</td>
                                                <td>{{ input_name(i.device_id, i.control, i.input) }}</td>
                                                <td>{{ form.operators[i.operator] }}</td>
                                                <td>{{ i.value }}</td>
                                                <td>
                                                    <button v-on:click="cond_device_delete(idx)">
                                                        <shif-icon src="close_x_1" />
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="automation-device">
                                        <div class="label">{{ i18n('condition.devices.table.device') }}:</div>
                                        <shif-device-selection v-bind:map="map_room_floor_device"
                                                               v-model="form.cond_device.device" />

                                        <div class="label" v-if="condition_device">{{ i18n('condition.devices.table.control') }}:</div>
                                        <select v-if="condition_device"
                                                v-model="form.cond_device.control">
                                            <option v-bind:value="null" disabled>---</option>
                                            <option v-for="i, key in condition_device.controls"
                                                    v-bind:value="key">
                                                {{ control_name(form.cond_device.device.device_id, key) }}
                                            </option>
                                        </select>

                                        <div class="label" v-if="condition_device_control">{{ i18n('condition.devices.table.input') }}:</div>
                                        <select v-if="condition_device_control"
                                                v-model="form.cond_device.input">
                                            <option v-bind:value="null" disabled>---</option>
                                            <option v-for="i, key in condition_device_control.variableInputs"
                                                    v-bind:value="key">
                                                {{ input_name(form.cond_device.device.device_id, form.cond_device.control, key) }}
                                            </option>
                                        </select>

                                        <div class="label" v-if="condition_device_control">{{ i18n('condition.devices.table.operator') }}:</div>
                                        <select v-if="condition_device_control"
                                                v-model="form.cond_device.operator">
                                            <option v-bind:value="null" disabled>---</option>
                                            <option v-for="i, key in form.operators"
                                                    v-bind:value="key">
                                                {{ i }}
                                            </option>
                                        </select>

                                        <div class="label" v-if="condition_device_control">{{ i18n('condition.devices.table.value') }}:</div>
                                        <input v-if="condition_device_control"
                                            v-model.number="form.cond_device.value"
                                            type="text" />
                                    </div>

                                    <button v-on:click="cond_device_add" style="margin-top: 20px">
                                        {{ i18n('condition.devices.add') }}
                                    </button>
                                </template>
                            </div>
                            </div>
                        </div>
                        </div>
                    </shif-trans-drop-down>
                </div>

                <div class="collapse">
                    <div class="collapse-title" v-on:click="then = !then">
                        <shif-icon classname="collapse-icon" src="play_1" />
                        <span>{{ i18n('action') }}</span>
                        <div class="collapse-arrow">
                            <shif-icon src="arrow_down_1" v-bind:rotate="then" />
                        </div>
                    </div>
                    <shif-trans-drop-down>
                        <div v-if="then" class="collapse-content-inner">
                        <div class="inner-content">
                            <div class="timer_wrapper">
                            <div class="automation-device">
                                <div class="form-group collapse-wrapper">
                                    <div class="label">{{ i18n('action.device') }}:</div>
                                    <shif-checkbox v-model="action.device.enabled" />
                                </div>
                                <template v-if="action.device.enabled">
                                    <div class="automation-device">
                                        <div class="label">{{ i18n('condition.devices.table.device') }}:</div>
                                        <shif-device-selection v-bind:map="map_room_floor_device"
                                                               v-model="form.action_device.device" />

                                        <div class="label" v-if="action_device">{{ i18n('condition.devices.table.control') }}:</div>
                                        <select v-if="action_device"
                                                v-model="form.action_device.control">
                                            <option v-bind:value="null" disabled>---</option>
                                            <option v-for="i, key in action_device.controls"
                                                    v-bind:value="key">
                                                {{ control_name(form.action_device.device.device_id, key) }}
                                            </option>
                                        </select>

                                        <div class="label" v-if="action_device_control">{{ i18n('condition.devices.table.input') }}:</div>
                                        <select v-if="action_device_control"
                                                v-model="form.action_device.input">
                                            <option v-bind:value="null" disabled>---</option>
                                            <option v-for="i, key in action_device_control.variableInputs"
                                                    v-bind:value="key">
                                                {{ input_name(form.action_device.device.device_id, form.action_device.control, key) }}
                                            </option>
                                        </select>

                                        <div class="label" v-if="action_device_control">{{ i18n('condition.devices.table.operator') }}:</div>
                                        <select v-if="action_device_control"
                                                v-model="form.action_device.operator">
                                            <option v-bind:value="null" disabled>---</option>
                                            <option v-for="i, key in form.operators"
                                                    v-bind:value="key">
                                                {{ i }}
                                            </option>
                                        </select>

                                        <div class="label" v-if="action_device_control">{{ i18n('condition.devices.table.value') }}:</div>
                                        <input v-if="action_device_control"
                                            v-model.number="form.action_device.value"
                                            type="text" />
                                    </div>
                                </template>
                            </div>
                            </div>

                            <div class="timer_wrapper">
                            <div>
                                <div class="form-group collapse-wrapper">
                                    <div class="label">{{ i18n('action.profile') }}:</div>
                                    <shif-checkbox v-model="action.profile.enabled" />
                                </div>
                                <template v-if="action.profile.enabled">
                                    <select v-model.number="action.profile.profile_id">
                                        <option v-bind:value="null">---</option>
                                        <option v-for="profile, id in interfaceData.profiles"
                                                v-bind:value="id"
                                                v-bind:key="id">
                                            {{ profile.name }}
                                        </option>
                                    </select>
                                </template>
                            </div>
                            </div>
                        </div>
                        </div>
                    </shif-trans-drop-down>
                </div>

            </div>

            <div class="form-group">
                <input type="submit" name="submit" v-bind:value="i18n('save')">
                <input type="submit" name="delete" v-bind:value="i18n('delete')">
            </div>

        </div>
    `,
};



const ShifFunctionsAutomations = {
    mixins: [
        mixin_scroll_position,
        mixin_print_mounted('shif-functions-automations')
    ],

    methods: {
        link: function (id) {
            return {
                name: 'functions.automations.automation',
                params: {
                    automation_id: id,
                },
            };
        },
    },

    template: `
        <div>
            <template v-for="i, key in interfaceData.functions.automations">
                <router-link v-bind:to="link(key)">
                    <shif-functions-element v-bind:key="key"
                                            v-bind:description="i.description"
                                            v-bind:name="i.name"
                                            v-bind:icon="i.icon"
                                            v-bind:icon_active="i.enabled"
                                            v-bind:translate="false" />
                </router-link>
            </template>

            <router-link v-bind:to="{name: 'functions.automations.new'}">
                <shif-functions-element v-bind:name="'functions.automations.new'"
                                        icon="plus_1" />
            </router-link>
        </div>
    `
};



const ShifFunctionsLvl1 = {
    mixins: [
        mixin_scroll_position,
        mixin_print_mounted('shif-functions-level-1')
    ],

    template: `
        <div>
            <template v-for="i, key in interfaceData.functions">
                <router-link v-bind:to="{name: 'functions.' + key}">
                    <shif-functions-element v-bind:key="key"
                                            v-bind:name="'functions.' + key"
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
