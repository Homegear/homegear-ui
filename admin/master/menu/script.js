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

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
// $(document).ready(function(){
    // const mainmenuItemWidth = 100 / Object.keys(interfaceData.mainmenu).length;
    // let mainmenuItem = '';
//
    // $.each(interfaceData.mainmenu, function(key, value){
        // const active = value.name === interfaceData.options.firstBreadcrumbId ? 'active' : '';
//
        // if (value.name == 'house') {
            // value.onclickOptions.name = interfaceData.options.firstBreadcrumb;
        // }
        // else{
            // value.onclickOptions.name = i18n(value.name);
        // }
//
        // mainmenuItem += `
            // <li style="width: ${mainmenuItemWidth}%;" onclick='${value.onclick}(${JSON.stringify(value.onclickOptions)});'>
                // <div id="mainmenu_${value.name}" class="mainmenu_button ${active}">${showIcon(value.icon)}</div>
            // </li>
        // `;
    // });
//
    // $('#inhalt').after(`
        // <div id="mainmenu">
            // <ul class="menu">
                // ${mainmenuItem}
            // </ul>
        // </div>
    // `);
//
    // if (interfaceData.options.firstBreadcrumbId == 'house') {
        // $('#house_rooms').html(house_level1_content);
        // house_level1_fix();
    // }
//
    // else if (interfaceData.options.firstBreadcrumbId == 'widgets') {
        // main({
            // name:    'Widgets',
            // content: 'widgets',
            // menu:    'widgets'
        // });
    // }
// });

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
function main(options){

    for (let i = 1; i < interfaceData.options.breadcrumbs_id_array.length; i++)
        $('#' + interfaceData.options.breadcrumbs_id_array[i]).remove();

        interfaceData.options.breadcrumbs_id_array = [
        options.content,
    ];

    $('.content_single').removeClass('content_single');
    $('.content_small').removeClass('content_small');
    $('.content_big').removeClass('content_big');
    $('.content_back').remove();

    $('.mainmenu_button').removeClass('active');
    $('#mainmenu_' + options.content).addClass('active');

    $('#back').addClass('inactive');

    if ('menu' in options){
        $('#' + options.content).html(menu({
            mainmenu: options.menu,
            level: '1'
        }));
    }

    $('#' + options.content).addClass('content_single');
    $('.content').scrollTop(0);

    interfaceData.options.breadcrumbs_array = [`
        <div class="breadcrumbsJump" onclick='main({"name":"${options.name}","content":"${options.content}"});'>
            ${options.name}
        </div>
    `];

    let text = '';
    for (let i = 0; i < interfaceData.options.breadcrumbs_array.length; i++) {
        text += interfaceData.options.breadcrumbs_array[i];

        if (i + 1 != interfaceData.options.breadcrumbs_array.length)
            text += '<div class="breadcrumbs_separator">|</div>';
    }

    // document.getElementById('breadcrumbsSub').innerHTML = text;

    // $('#breadcrumbsSub').scrollLeft(9999999999);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function menu(options){
    let menu = '';

    $.each(interfaceData.menu, function(key, value) {
        if (options.mainmenu !== value.mainmenu || options.level !== value.level)
            return;

        if ('category' in options && options.category !== value.category)
            return;

        value.onclickOptions.name = i18n(value.name);
        var name = i18n(value.name);
        var description = i18n(value.description);

        menu += `
            <div class="button" onclick='${value.onclick}(${JSON.stringify(value.onclickOptions)})'>
                <div class="button_icon">
                    ${showIcon(value.icon)}
                </div>
                <div class="button_text">
                    <div class="button_title">${name}</div>
                    <br/>
                    <div class="button_status">${description}</div>
                </div>
                <div class="button_action">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg" x="0" y="0" width="370.81" height="370.81" viewBox="0 0 370.81 370.81">
                        <g id="Ebene_1">
                            <path d="M77.9 345.97L102.03 370.81 292.92 185.41 102.03 0 77.9 24.85 243.18 185.41z"/>
                        </g>
                    </svg>
                </div>
            </div>
        `;
    });

    if ('content' in options && options.content === 'true') {
        content('this', {
            content: menu,
            name:    options.name
        });
    }
    else
        return menu;
}
*/
