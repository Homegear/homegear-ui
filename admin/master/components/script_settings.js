let ShifSettingsFavorites = {
    template: `
        <div class="device_wrapper">
            <div class="device"
                 v-on:click.prevent="$root.favorites_enabled = !$root.favorites_enabled">
                <shif-title>{{ i18n('settings.favorites.mode') }}</shif-title>
                <label class="check">
                    <input type="checkbox" v-model="$root.favorites_enabled">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    `
};



Vue.component('shif-settings-element', {
    mixins: [mixin_print_mounted()],

    props: {
        icon: {
            type: String,
            required: true,
        },
        name: {
            type: String,
            required: true,
        },
        description: {
            type: String,
            required: true,
        },
    },
    template: `
        <div class="button">
            <shif-icon classname="button_icon" v-bind:src="icon" />
            <div class="button_text">
                <div class="button_title">{{ i18n(name) }}</div>
                <br/>
                <div class="button_status">{{ i18n(description) }}</div>
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
    `
};



let ShifSettingsUser = {
    mixins: [mixin_print_mounted('shif-settings-user')],

    data: function () {
        return {
            options:   interfaceData.options,
            languages: interfaceData.i18n.languages,
            name:      this.$route.name,

            form: {
                name: 'user_edit',
                language: interfaceData.options.language,
                theme:    interfaceData.options.theme,
                color:    interfaceData.options.highlight,
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

                new_settings.locale = this.form.language;

                if (new_settings.interface === undefined)
                    new_settings.interface = {};

                Object.assign(new_settings.interface, {
                    language:  this.form.language || this.options.langauge || 'en-US',
                    theme:     this.form.theme    || 'dark',
                    highlight: this.form.color    || '#e3a104',
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
                    <p style="color: red">TODO</p>
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
        mixins: [mixin_print_mounted('shif-settings-items')],

        methods: {
            elements: function (level) {
                return interfaceData.menu.filter(x => x.mainmenu === 'settings' &&
                                                      x.level    === String(level));
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



let ShifSettings = {
    mixins: [mixin_print_mounted('shif-settings')],

    template: `
        <shif-paging id="settings" />
    `,
};
