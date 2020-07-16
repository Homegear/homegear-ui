Vue.component('shif-settings-element', {
    mixins: [mixin_print_mounted()],

    props: {
        name:        { type: String, required: true, },
        description: { type: String, },
        icon:        { type: String, default: 'slider_1'},
        translate:   { type: Boolean, default: true, }
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
        }
    },

    computed: {
        themes: function () {
            return interfaceData.themes.filter(x => x.name !== 'standard' &&
                                                    x.name !== 'highlight');
        },

        two_fa_value: function () {
            return this.options.userHasTwofaRegistrations
                ? i18n(this.name + '.twofaRegistered')
                : i18n(this.name + '.registerTwofa')
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
                })
            })
        },

        two_fa_register_dev: function () {
            return user_register_webauthn_device()
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



let ShifSettingsFavorites = {
    data: function () {
        return {
            state: this.$root.favorites,
        };
    },

    watch: {
        'state.enabled': function () {
            if (this.state.enabled) {
                this.$root.profiles.enabled = false;
                this.$router.push({name: 'house.tab.rooms'});
            }
        },
    },

    template: `
        <div class="device_wrapper">
            <div class="device"
                 v-on:click.prevent="state.enabled = ! state.enabled">
                <shif-title>{{ i18n('settings.favorites.mode') }}</shif-title>
                <shif-checkbox v-model="state.enabled" />
            </div>
        </div>
    `
};



let ShifSettingsProfiles = {
    mixins: [mixin_scroll_position, mixin_print_mounted('shif-settings-profile')],

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
                <template v-for="i in interfaceData.profiles">
                    <template v-if="i.editable != '' || !('editable' in i)">
                        <router-link v-bind:to="link(i.id)">
                            <shif-settings-element v-bind:key="i.name"
                                                v-bind:name="i.name"
                                                v-bind:translate="false"
                                                v-bind:icon="i.icon"
                                                description=""
                                                />
                        </router-link>
                    </template>
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
    mixins: [mixin_profiles, mixin_print_mounted('shif-settings-profile')],

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
                        global:   false,
                        favorite: false,
                    },
                }
            };

        const profile = interfaceData.profiles[this.profile_id];

        if (this.$root.profiles.enabled) {
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
                        return this.profile_update(this.profile, this.form);

                    return this.profile_add(this.form,
                        (result) => this.$router.replace({
                            name: 'settings.profiles.profile',
                            params: {
                                profile: result.result
                            },
                        })
                    );

                case 'delete':
                    return this.profile_delete(this.profile,
                        () => this.$router.replace({name: 'settings.profiles'})
                    );
            };
        },
    },

    mounted: function () {
        if (this.mode === 'edit' && ! this.$root.profiles.enabled)
            return this.profile_build_root_devs(this.profile);
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



let ShifSettings = {
    mixins: [mixin_print_mounted('shif-settings')],

    template: `
        <shif-paging id="settings" />
    `,
};
