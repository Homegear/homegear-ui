
////////////////////////////////////////////////////////////////////////////////////////////////////////
// liefert den view für das Editieren der Benutzereinstellungen
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user(element, options){
    let themesNames = [];
    for (let i of interfaceData.themes) {
        if (i.name === 'standard' || i.name === 'highlight')
            continue;

        const selected = userSettings.theme == i.name ? 'selected' : '';
        themesNames.push(`
            <option value="${i.name}" autocomplete="off" ${selected}>
                ${interfaceData.i18n['settings.user.manage.theme.'+i.name]}
            </option>
        `);

    }

    let langNames = [];
    $.each(interfaceData.i18n.languages, function(key, value) {
        const selected = userSettings.language == key ? 'selected' : '';
        langNames.push(`
            <option value="${key}" autocomplete="off" ${selected}>
                ${value.name}
            </option>
        `);
    });

    const output = `
        <div id="user_wrapper">
        <form id="user_${options.content}" name="user_${options.content}" action="javascript:void(0);" onsubmit="user_${options.content}_commit();">
            <div class="form-group">
                <div class="label">${i18n('settings.user.manage.language')}:</div>
                <select id="language" name="language">
                    ${langNames}
                </select>
            </div>
            <div class="form-group">
                <div class="label">${i18n('settings.user.manage.theme')}:</div>
                <select id="theme" name="theme">
                    ${themesNames}
                </select>
            </div>
            <div id="user_highlight_display" class="form-group">
                <div class="label">${i18n('settings.user.manage.highlight')}:</div>
                <input id="highlight" type="hidden" name="highlight" value="${userSettings.highlight}">
                    <div id="color-picker-container"></div>
                <div style="clear:both;"></div>
            </div>
            <div class="form-group">
                <input type="submit" class="" name="user_${options.content}" value="${i18n('settings.user.manage.save')}">
            </div>
        </form>
        </div>
    `;

    content('this', {'content':output, 'name':options['name']});

    const outerWidth = $('#user_edit').outerWidth()
    const userColorPickerWidth = outerWidth <= 400 ? outerWidth : 400;
    const userColorPickerHeight = userColorPickerWidth + 20;

    const userColorPicker = new iro.ColorPicker('#color-picker-container', {
        width: userColorPickerWidth,
        height: userColorPickerHeight,
        color: userSettings.highlight,
        markerRadius: 12,
        padding: 1,
        sliderMargin: 24,
        sliderHeight: 36,
        borderWidth: 3,
        borderColor: '#fff',
        anticlockwise: true,
    });

    userColorPicker.on('color:change', function (color, changes) {
        $('#user_highlight_display #highlight').val(color.hexString);
    });
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// verarbeitet das Editieren der Benutzereinstellungen
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user_edit_commit() {
    userSettings.theme     = $('#user_edit #theme').val()     || 'dark';
    userSettings.highlight = $('#user_edit #highlight').val() || '#e3a104';
    userSettings.language  = $('#user_edit #language').val()  || 'en-US';

    var rpc_obj_get = {
        jsonrpc: '2.0',
        method: 'getUserMetadata',
        params: []
    };

    homegear.invoke(rpc_obj_get, updateUserSettingsData);

    function updateUserSettingsData(data) {
        let newUserSettings = data.result;
        if (!newUserSettings.interface) {
            newUserSettings.interface = userSettings;
        }

        newUserSettings.locale  = userSettings.language;
        newUserSettings.interface.language  = userSettings.language;
        newUserSettings.interface.theme     = userSettings.theme;
        newUserSettings.interface.highlight = userSettings.highlight;

        const rpc_obj = {
            jsonrpc: '2.0',
            method: 'setUserMetadata',
            params: [newUserSettings]
        };

        homegear.invoke(rpc_obj, function() {
            window.location.href = interfacePath;
        });
    }
}
