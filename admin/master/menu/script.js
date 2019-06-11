////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
$(document).ready(function(){
    const mainmenuItemWidth = 100 / Object.keys(interfaceData.mainmenu).length;
    let mainmenuItem = '';

    $.each(interfaceData.mainmenu, function(key, value){
        const active = value.name === firstBreadcrumbId ? 'active' : '';

        mainmenuItem += `
            <li style="width: ${mainmenuItemWidth}%;" onclick="${value.onclick};">
                <div id="mainmenu_${value.name}" class="mainmenu_button ${active}">${showIcon(value.icon)}</div>
            </li>
        `;
    });

    $('#inhalt').after(`
        <div id="mainmenu">
            <ul class="menu">
                ${mainmenuItem}
            </ul>
        </div>
    `);

    if (firstBreadcrumbId == 'house')
        $('#houseJS').html(house_level1_content);

    else if (firstBreadcrumbId == 'widgets') {
        main(this, {
            name:    'Widgets',
            content: 'widgets',
            menu:    'widgets'
        });
    }
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
// zeigt den Rauminhalt
////////////////////////////////////////////////////////////////////////////////////////////////////////
function main(element, options){

    for (let i = 1; i < breadcrumbs_id_array.length; i++)
        $('#' + breadcrumbs_id_array[i]).remove();

    breadcrumbs_id_array = [
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

    breadcrumbs_array = [`
        <div class="breadcrumbsJump" onclick='main(this, {"name":"${options.name}","content":"${options.content}"});'>
            ${options.name}
        </div>
    `];

    let text = '';
    for (let i = 0; i < breadcrumbs_array.length; i++) {
        text += breadcrumbs_array[i];

        if (i + 1 != breadcrumbs_array.length)
            text += '<div class="breadcrumbs_separator">|</div>';
    }

    document.getElementById('breadcrumbsSub').innerHTML = text;

    $('#breadcrumbsSub').scrollLeft(9999999999);
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

        menu += `
            <div class="button" onclick="${value.onclick}">
                <div class="button_icon">
                    ${showIcon(value.icon)}
                </div>
                <div class="button_text">
                    <div class="button_title">${value.name}</div>
                    <br/>
                    <div class="button_status">${value.description}</div>
                </div>
                <div class="button_action">
                    ${showIcon('pfeil3')}
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
