Vue.component('shif-mainmenu', {
    data: function () {
        return {
            width: (100 / interfaceData.mainmenu.length) + '%',
            active: true,
        };
    },

    template: `
        <div id="mainmenu">
            <ul class="menu">
                <li v-for="i in interfaceData.mainmenu"
                    v-bind:style="{width: width}">

                    <router-link v-bind:to="{name: i.name}">
                        <div v-bind:id="'mainmenu_' + i.name"
                             class="mainmenu_button">
                             <shif-icon v-bind:src="i.icon" />
                        </div>
                    </router-link>

                </li>
            </ul>
        </div>
    `,
});

Vue.component('shif-modemenu', {
    template: `
        <div id="modemenu">
            <div id="mode_wrapper_favorites">
                <div class="mode_text">
                    <span class="mode_name">Favoriten bearbeiten</span>
                </div>
                <div class="mode_buttons">
                    <div class="mode_end">Favoriten bearbeiten beenden</div>
                </div>
            </div>
            <div id="mode_wrapper_profiles">
                <div class="mode_text">
                    <span>Profil: </span>
                    <span class="mode_name">Testprofil 123</span>
                </div>
                <div class="mode_buttons">
                    <div class="mode_settings">Profil Einstellungen</div>
                    <div class="mode_end">Profil Speichern & Beenden</div>
                </div>
            </div>
        </div>
    `,
});
