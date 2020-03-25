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
