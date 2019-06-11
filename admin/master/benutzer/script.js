
////////////////////////////////////////////////////////////////////////////////////////////////////////
// liefert den view für das Editieren der Benutzereinstellungen
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user(element, options){
    var themesNames = Array();
    $.each(interfaceData.themes, function(key, value) {
        if(!(value.name in themesNames) && value.name != 'standard' && value.name != 'highlight' ){
            themesNames.push('<option value="'+value.name+'" autocomplete="off" '+(userSettings.theme == value.name ? 'selected' : '')+'>'+interfaceData.l18n['settings.user.manage.theme.'+value.name]+'</option>');
        }
    });
    var langNames = Array();
    $.each(interfaceData.l18n.languages, function(key, value) {
        langNames.push('<option value="'+key+'" autocomplete="off" '+(userSettings.language == key ? 'selected' : '')+'>'+value.name+'</option>');
    });
    var output = `
        <div id="user_wrapper">
        <form id="user_${options.content}" name="user_${options.content}" action="javascript:void(0);" onsubmit="user_${options.content}_commit();">
            <div class="form-group">
                <div class="label">${l18n('settings.user.manage.language')}:</div>
                <select id="language" name="language">
                    ${langNames}
                </select>
            </div>
            <div class="form-group">
                <div class="label">${l18n('settings.user.manage.theme')}:</div>
                <select id="theme" name="theme">
                    ${themesNames}
                </select>
            </div>
            <div id="user_highlight_display" class="form-group">
                <div class="label">${l18n('settings.user.manage.highlight')}:</div>
                <input id="highlight" type="hidden" name="highlight" value="${userSettings.highlight}">
                    <div id="color-picker-container"></div>
                <div style="clear:both;"></div>
            </div>
            <div class="form-group">
                <input type="submit" class="" name="user_${options.content}" value="${l18n('settings.user.manage.save')}">
            </div>
        </form>
        </div>
    `;

    content('this', {'content':output, 'name':options['name']});

    var userColorPickerWidth = $('#user_edit').outerWidth() <= 400 ? $('#user_edit').outerWidth() : 400;
    var userColorPickerHeight = userColorPickerWidth + 20;

    var userColorPicker = new iro.ColorPicker('#color-picker-container', {
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

    userColorPicker.on('color:change', function(color, changes) {
        $('#user_highlight_display #highlight').val(color.hexString);
    });
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// verarbeitet das Editieren der Benutzereinstellungen
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user_edit_commit() {
    if ($('#user_edit #theme').val()) {
        userSettings.theme = $('#user_edit #theme').val();
    } else {
        userSettings.theme = "dark";
    }

    if ($('#user_edit #highlight').val()) {
        userSettings.highlight = $('#user_edit #highlight').val();
    } else {
        userSettings.highlight = "#e3a104";
    }

    if ($('#user_edit #language').val()) {
        userSettings.language = $('#user_edit #language').val();
    } else {
        userSettings.language = "en-US";
    }
    
    var rpc_obj_get = {
        jsonrpc: '2.0',
        method: 'getUserMetadata',
        params: []
    };

    homegear.invoke(rpc_obj_get, updateUserSettingsData);
    
    function updateUserSettingsData(data){
        var newUserSettings = data.result;
        newUserSettings['interface']['language'] = userSettings.language;
        newUserSettings['interface']['theme'] = userSettings.theme;
        newUserSettings['interface']['highlight'] = userSettings.highlight;
                
        var rpc_obj = {
            jsonrpc: '2.0',
            method: 'setUserMetadata',
            params: [newUserSettings]
        };

        homegear.invoke(rpc_obj, function(){window.location.href = interfacePath;});
    }
}
