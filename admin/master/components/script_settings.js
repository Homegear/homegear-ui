/*
    global
        ModeMenuState
        i18n
        licenses
        mixin_menus
        mixin_modemenu
        mixin_print_mounted
        mixin_profiles
        mixin_rooms
        mixin_scroll_position
        user_register_webauthn_device
*/
/*
    exported
        ShifSettings
        ShifSettingsAutomations
        ShifSettingsAutomationsForm
        ShifSettingsFavorites
        ShifSettingsItems
        ShifSettingsLicenses
        ShifSettingsProfile
        ShifSettingsProfiles
        ShifSettingsSort
        ShifSettingsUser
*/



Vue.component('shif-settings-element', {
    mixins: [mixin_print_mounted()],

    props: {
        name:        { type: String, required: true, },
        description: { type: String, },
        icon:        { type: String, default: 'slider_1'},
        icon_active: { type: Boolean, default: false, },
        translate:   { type: Boolean, default: true, }
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



let ShifSettingsLicenses = {
    mixins: [mixin_print_mounted('shif-settings-licenses')],

    computed: {
        data: function () {
            return licenses;
        },
    },

    methods: {
        log_hook: function () {
            this.$router.push('/log');
        },
    },

    template: `
        <div>
        <div class="table1">
            <table>
                <thead>
                    <th v-on:click="log_hook">{{ i18n('settings.about.table.name') }}</th>
                    <th>{{ i18n('settings.about.table.version') }}</th>
                    <th>{{ i18n('settings.about.table.rights') }}</th>
                    <th>{{ i18n('settings.about.table.license') }}</th>
                    <th>{{ i18n('settings.about.table.license.url') }}</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ interfaceData.manifest.name }}</td>
                        <td>{{ interfaceData.manifest.revision }}</td>
                        <td>{{ interfaceData.manifest.author }}</td>
                        <td>{{ interfaceData.manifest.license }}</td>
                        <td>{{ interfaceData.manifest.licenseurl }}</td>
                    </tr>
                    <tr v-for="i in data">
                        <td>{{ i.name }}</td>
                        <td>{{ i.version }}</td>
                        <td>{{ i.rights }}</td>
                        <td>{{ i.licensename }}</td>
                        <td>{{ i.licenseurl }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    `
};



let ShifSettingsUser = {
    mixins: [mixin_print_mounted('shif-settings-user')],

    data: function () {
        return {
            options:   interfaceData.options,
            startpaths: [
                'favorites',
                'house.tab.rooms',
                'house.tab.devices',
                'house.tab.profiles',
            ],
            languages: interfaceData.i18n.languages,
            name:      this.$route.name,

            form: {
                name: 'user_edit',
                startPath: interfaceData.options.startPath,
                language:  interfaceData.options.language,
                theme:     interfaceData.options.theme,
                color:     interfaceData.options.highlight,
            }
        };
    },

    computed: {
        themes: function () {
            return interfaceData.themes.filter(x => x.name !== 'standard' &&
                                                    x.name !== 'highlight');
        },

        two_fa_value: function () {
            return this.options.userHasTwofaRegistrations
                ? i18n(this.name + '.twofaRegistered')
                : i18n(this.name + '.registerTwofa');
        },
    },

    methods: {
        form_submit: function () {
            this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'getUserMetadata',
                params: []
            }, (data) => {
                let new_settings = data.result;

                new_settings.locale    = this.form.language;

                if (new_settings.interface === undefined)
                    new_settings.interface = {};

                Object.assign(new_settings.interface, {
                    language:  this.form.language  || this.options.language  || 'en-US',
                    startPath: this.form.startPath || this.options.startPath || 'house.tab.rooms',
                    theme:     this.form.theme     || 'dark',
                    highlight: this.form.color     || '#e3a104',
                });

                this.$homegear.invoke({
                    jsonrpc: '2.0',
                    method: 'setUserMetadata',
                    params: [new_settings]
                }, function () {
                    window.location.reload(true);
                });
            });
        },

        two_fa_register_dev: function () {
            return user_register_webauthn_device();
        },
    },

    template: `
        <div class="user_wrapper">
            <form v-bind:id="form.name"
                  v-bind:name="form.name"
                  action="javascript:void(0);"
                  v-on:submit.stop="form_submit">

                <template v-if="options.twofaChangeable && options.twofaEnabled">
                    <div class="form-group">
                        <div class="label">{{ i18n(name + '.twofa') }}:</div>
                        <input id="registerWebauthn"
                               type="button"
                               v-bind:disabled="options.userHasTwofaRegistrations"
                               v-bind:value="two_fa_value"
                               v-on:click="two_fa_register_dev" />
                    </div>
                </template>

                <template v-if="options.languageChangeable">
                    <div class="form-group">
                        <div class="label">{{ i18n(name + '.language') }}:</div>
                        <select id="language"
                                name="language"
                                v-model="form.language">
                            <option v-for="value, key in languages"
                                    v-bind:value="key"
                                    autocomplete="off">
                                {{ value.name }}
                            </option>
                        </select>
                    </div>
                </template>

                <div class="form-group">
                    <div class="label">{{ i18n(name + '.startpath') }}:</div>
                    <select id="startpath"
                            name="startpath"
                            v-model="form.startPath">
                        <option v-for="i in startpaths"
                                v-bind:value="i"
                                autocomplete="off">
                            {{ i18n(i) }}
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="label">{{ i18n(name + '.theme') }}:</div>
                    <select id="theme"
                            name="theme"
                            v-model="form.theme">
                        <option v-for="i in themes"
                                v-bind:value="i.name"
                                autocomplete="off">
                                {{ i18n(name + '.theme.' + i.name) }}
                        </option>
                    </select>
                </div>

                <div id="user_highlight_display" class="form-group">
                    <div class="label">{{ i18n(name + '.highlight') }}:</div>
                    <input id="highlight"
                           type="hidden"
                           name="highlight"
                           v-bind:value="options.highlight" />
                    <shif-colorpicker v-bind:width=" {max_pixels: 600, percent: 100}"
                                      v-bind:height="{max_pixels: 620, percent: 100}"
                                      v-bind:color="options.highlight"
                                      v-model="form.color"
                                      />
                    <div style="clear:both;"></div>
                </div>

                <div class="form-group">
                    <input type="submit"
                           v-bind:name="form.name"
                           v-bind:value="i18n(name + '.save')" />
                </div>

            </form>
        </div>
    `
};



let ShifSettingsItems = function (level) {
    return {
        mixins: [
            mixin_scroll_position,
            mixin_menus,
            mixin_print_mounted('shif-settings-items')
        ],

        methods: {
            elements: function (level) {
                return interfaceData.menu.filter(x => x.mainmenu === 'settings' &&
                                                      x.level    === String(level) &&
                                                      ! this.disabled('menu', x.name));
            },
        },

        template: `
            <div>
                <template v-for="i in elements(${level})">
                    <router-link v-bind:to="{name: i.name}">
                        <shif-settings-element v-bind:key="i.name"
                                               v-bind:icon="i.icon"
                                               v-bind:name="i.name"
                                               v-bind:description="i.description" />
                    </router-link>
                </template>
            </div>
        `,
    };
};



let ShifSettingsSort = {
    mixins: [mixin_modemenu],

    data: function () {
        return {
            state: this.modemenu_is_state(ModeMenuState.DRAGGABLE),
        };
    },

    watch: {
        'state': function () {
            if (!this.state)
                return this.modemenu_hide();

            this.modemenu_show(ModeMenuState.DRAGGABLE);
            this.$router.push({name: 'house.tab.rooms'});
        },
    },

    template: `
        <div class="device_wrapper">
            <div class="device"
                 v-on:click.prevent="state = ! state">
                <shif-title>{{ i18n('settings.sort.mode') }}</shif-title>
                <shif-checkbox v-model="state" />
            </div>
        </div>
    `
};



let ShifSettingsFavorites = {
    mixins: [mixin_modemenu],

    data: function () {
        return {
            state: this.modemenu_is_state(ModeMenuState.FAVORITES),
        };
    },

    watch: {
        'state': function () {
            if (!this.state)
                return this.modemenu_hide();

            this.modemenu_show(ModeMenuState.FAVORITES);
            this.$router.push({name: 'house.tab.rooms'});
        },
    },

    template: `
        <div class="device_wrapper">
            <div class="device"
                 v-on:click.prevent="state = ! state">
                <shif-title>{{ i18n('settings.favorites.mode') }}</shif-title>
                <shif-checkbox v-model="state" />
            </div>
        </div>
    `
};



let ShifSettingsProfiles = {
    mixins: [
        mixin_scroll_position,
        mixin_profiles,
        mixin_print_mounted('shif-settings-profile')
    ],

    methods: {
        link: function (profile_id) {
            return {
                name: 'settings.profiles.profile',
                params: {
                    profile_id: profile_id,
                },
            };
        },
    },

    template: `
        <div>
            <div class="profiles_wrapper">
                <template v-for="i in editable_profiles">
                    <router-link v-bind:to="link(i.id)">
                        <shif-settings-element v-bind:key="i.name"
                                               v-bind:name="i.name"
                                               v-bind:translate="false"
                                               v-bind:icon="i.icon"
                                               description=""
                                               />
                    </router-link>
                </template>

                <router-link v-bind:to="{name: 'settings.profiles.new'}">
                    <shif-settings-element name="settings.profiles.new"
                                           icon="plus_1" />
                </router-link>
            </div>
        </div>
    `
};



let ShifSettingsProfileRoleValue = {
    mixins: [mixin_print_mounted('shif-settings-profile-role-value')],

    props: {
        value: {
            required: true,
        },
        role_id: {
            required: true,
        },
    },

    data: function () {
        return {
            value_: this.value,
        };
    },

    computed: {
        role: function () {
            return interfaceData.roles[this.role_id];
        },

        role_values: function () {
            return Object.keys(this.role.roleProfileValues.options)
                         .map(x => ({id: x, name: this.role.roleProfileValues.options[x]}))
                         .concat({id: null, name: '---'});
        },
    },

    watch: {
        value_: function () {
            this.$emit('input', this.value_);
            this.$emit('change', this.value_);
        },
    },

    template: `
        <div>
            <select v-if="role.roleProfileValues.type === 'select'"
                    v-model="value_">
                <option v-for="i in role_values"
                        v-bind:value="i.id">
                    {{ i.name }}
                </option>
            </select>
        </div>
    `,
};



let ShifSettingsProfile = {
    mixins: [
        mixin_modemenu,
        mixin_profiles,
        mixin_print_mounted('shif-settings-profile')
    ],

    props: [
        'profile_id',
    ],

    components: {
        ShifSettingsProfileRoleValue,
    },

    data: function () {
        if (this.profile_id === undefined ||
            ! (this.profile_id in interfaceData.profiles))
            return {
                mode: 'add',
                profile: null,
                form: {
                    name: 'profile_add',
                    icon: 'slider_1',
                    profile_name: '',
                    role: {
                        role: null,
                        value: null,
                    },
                    location: {
                        floor:    null,
                        room:     null,
                        global:   true,
                        favorite: false,
                    },
                }
            };

        const profile = interfaceData.profiles[this.profile_id];

        if (this.is_enabled) {
            return {
                mode: 'edit',
                profile: profile,
                form: this.$root.profiles.form,
            };
        }

        const [floor, room] = profile.locations.length === 0
                ? [null, null]
                : [profile.locations[0].floorId, profile.locations[0].roomId];

        const global   = profile.global === true;
        const favorite = profile.favorite === true;

        const role = profile.roles !== undefined && profile.roles.length > 0
                        ? profile.roles[0]
                        : {role: null, value: null};

        return {
            mode: 'edit',
            profile: profile,
            form: {
                name: 'profile_edit',
                icon: profile.icon,
                profile_name: profile.name,
                location: {
                    floor:    floor === undefined ? null : floor,
                    room:     room  === undefined ? null : room,
                    global:   global,
                    favorite: favorite,
                },
                role: role,
            },
        };
    },

    computed: {
        is_enabled: function () {
            return this.modemenu_is_state(ModeMenuState.PROFILES);
        },

        floors: function () {
            return Object.keys(interfaceData.floors)
                         .map(x => ({id: x, name: interfaceData.floors[x].name}))
                         .concat({id: null, name: '---'});
        },

        filtered_rooms: function () {
            let rooms = Object.keys(interfaceData.rooms);

            if (this.form.location.floor !== undefined &&
                this.form.location.floor !== null &&
                this.form.location.floor in interfaceData.floors)
                rooms = interfaceData.floors[this.form.location.floor]
                                     .rooms;

            return rooms.map(x => ({id: x, name: interfaceData.rooms[x].name}))
                        .concat({id: null, name: '---'});
        },

        filtered_roles: function () {
            return Object.keys(interfaceData.roles)
                         .filter(x => interfaceData.roles[x].roleProfileValues !== undefined)
                         .map(x => ({id: x, name: interfaceData.roles[x].name}))
                         .concat({id: null, name: '---'});
        },

        show_roles: function () {
            return interfaceData.options.roleProfileDefinable === true;
        },
    },

    methods: {
        form_submit: function (source) {
            switch (source) {
                case 'load':
                    this.$root.profiles.form = this.form;
                    this.$root.profiles.id   = this.profile.id;

                    return this.profile_load(this.profile,
                        () => this.$router.push({name: 'house.tab.rooms'})
                    );

                case 'save':
                    if (this.mode === 'edit')
                        return this.profile_update(this.profile, this.form,
                            () => this.$router.push({name: 'settings.profiles'})
                        );

                    return this.profile_add(this.form,
                        (result) => this.$router.replace({
                            name: 'settings.profiles.profile',
                            params: {
                                profile_id: result.result
                            },
                        })
                    );

                case 'delete':
                    return this.profile_delete(this.profile,
                        () => this.$router.replace({name: 'settings.profiles'})
                    );
            }
        },
    },

    mounted: function () {
        if (this.mode === 'edit' && ! this.is_enabled)
            return this.profile_build_root_devs(this.profile);

        this.modemenu_hide();
    },

    template: `
        <div class="profiles_wrapper">
            <form v-bind:id="form.name"
                  v-bind:name="form.name"
                  action="javascript:void(0);"
                  v-on:submit.stop="">

                <div class="form-group">
                    <div class="label">{{ i18n('settings.profiles.profile.name') }}:</div>
                    <input id="profile_name"
                           type="text"
                           name="profile_name"
                           v-model="form.profile_name" />
                </div>

                <div class="form-group">
                    <div class="label">{{ i18n('settings.profiles.profile.icon') }}:</div>
                    <shif-icon-selection v-model="form.icon" />
                </div>

                <div class="form-group">
                    <div class="label">{{ i18n('settings.profiles.profile.locations') }}:</div>
                    <div class="global"
                         v-on:click.prevent="form.location.global = !form.location.global">
                        <div class="label">{{ i18n('settings.profiles.profile.locations.global') }}:</div>
                        <shif-checkbox v-model="form.location.global" />
                    </div>
                    <div class="global"
                         v-on:click.prevent="form.location.favorite = !form.location.favorite">
                        <div class="label">{{ i18n('settings.profiles.profile.locations.favorite') }}:</div>
                        <shif-checkbox v-model="form.location.favorite" />
                    </div>
                    <div class="label">{{ i18n('settings.profiles.profile.locations.floor') }}:</div>
                    <select id="locationsFloors"
                            name="locationsFloors"
                            v-model="form.location.floor">
                        <option v-for="i in floors"
                                v-bind:value="i.id"
                                autocomplete="off">
                            {{ i.name }}
                        </option>
                    </select>

                    <div class="label">{{ i18n('settings.profiles.profile.locations.room') }}:</div>
                    <select id="locationsRooms"
                            name="locationsRooms"
                            v-model="form.location.room">
                        <option v-for="i in filtered_rooms"
                                v-bind:value="i.id"
                                autocomplete="off">
                            {{ i.name }}
                        </option>
                    </select>
                </div>

                <div v-if="show_roles"
                     class="form-group">
                    <div class="label">{{ i18n('settings.profiles.profile.roles') }}:</div>

                    <select v-model="form.role.role">
                        <option v-for="i in filtered_roles"
                                v-bind:value="i.id"
                                autocomplete="off">
                            {{ i.name }}
                        </option>
                    </select>

                    <shif-settings-profile-role-value
                        v-if="form.role.role"
                        v-model="form.role.value"
                        v-bind:role_id="form.role.role" />
                </div>

                <div class="form-group">
                    <input v-if="mode === 'edit' && form.role.role === null"
                           type="submit"
                           name="load"
                           v-on:click="form_submit('load')"
                           v-bind:value="i18n('settings.profiles.profile.load')" />

                    <input type="submit"
                           name="save"
                           v-on:click="form_submit('save')"
                           v-bind:value="i18n('settings.profiles.profile.save')" />

                    <input v-if="mode === 'edit'"
                           type="submit"
                           name="delete"
                           v-on:click="form_submit('delete')"
                           v-bind:value="i18n('settings.profiles.profile.delete')" />
                </div>
            </form>
        </div>
    `,
};




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



const _mixin_settings_automations = {
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
                interfaceData.automations[result.result] = {
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

        automations_delete: function (automation_id, cb) {
            return this.$homegear.invoke({
                jsonrpc: '2.0',
                method: 'deleteVariableAutomation',
                params: [automation_id],
            }, (result) => {
                delete interfaceData.automations[automation_id];

                if (cb)
                    return cb(result);
            });
        },
    },
};



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



const ShifSettingsAutomationsForm = {
    mixins: [
        mixin_names,
        mixin_rooms,
        mixin_print_mounted('shif-settings-automations-form')
    ],

    components: {
        ShifDeviceSelection,
    },

    props: {
        automation_id: {},
    },

    data: function () {
        const cur = interfaceData.automations[this.automation_id] !== undefined
                        ? interfaceData.automations[this.automation_id]
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
            return i18n('settings.automations.automation.' + key);
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

            let out = {};

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



const ShifSettingsAutomations = {
    mixins: [
        mixin_scroll_position,
        mixin_print_mounted('shif-settings-automations')
    ],

    props: {
        automation_ids: {type: String, default: '',},
    },

    methods: {
        link: function (id) {
            return {
                name: 'settings.automations.automation',
                params: {
                    automation_id: id,
                },
            };
        },
    },

    computed: {
        ids: function () {
            return this.automation_ids === ''
                    ? Object.keys(interfaceData.automations)
                    : this.automation_ids.split('-');
        },

        elements: function () {
            return this.ids.map(x => ({
                key: x,
                val: interfaceData.automations[x],
            }));
        }
    },

    template: `
        <div>
            <template v-for="i in elements">
                <router-link v-bind:to="link(i.key)">
                    <shif-settings-element v-bind:key="i.key"
                                            v-bind:description="i.val.description"
                                            v-bind:name="i.val.name"
                                            v-bind:icon="i.val.icon"
                                            v-bind:icon_active="i.val.enabled"
                                            v-bind:translate="false" />
                </router-link>
            </template>

            <router-link v-bind:to="{name: 'settings.automations.new'}">
                <shif-settings-element v-bind:name="'settings.automations.new'"
                                        icon="plus_1" />
            </router-link>
        </div>
    `
};






let ShifSettings = {
    mixins: [mixin_print_mounted('shif-settings')],

    template: `
        <shif-paging id="settings" />
    `,
};
