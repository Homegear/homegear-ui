
////////////////////////////////////////////////////////////////////////////////////////////////////////
// liefert den view für das Editieren der Benutzereinstellungen
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user(options){
    let themesNames = [];
    for (let i of interfaceData.themes) {
        if (i.name === 'standard' || i.name === 'highlight')
            continue;

        const selected = interfaceData.options.theme == i.name ? 'selected' : '';
        themesNames.push(`
            <option value="${i.name}" autocomplete="off" ${selected}>
                ${i18n('settings.user.manage.theme.'+i.name)}
            </option>
        `);

    }

    let langNames = [];
    $.each(interfaceData.i18n.languages, function(key, value) {
        const selected = interfaceData.options.language == key ? 'selected' : '';
        langNames.push(`
            <option value="${key}" autocomplete="off" ${selected}>
                ${value.name}
            </option>
        `);
    });

    var output = `
        <div id="user_wrapper">
        <form id="user_${options.content}" name="user_${options.content}" action="javascript:void(0);" onsubmit="user_${options.content}_commit();">
    `;
    if (interfaceData.options.twofaChangeable == true){
        output += `
                <div id="twofaContainer" class="form-group" style="display: none">
                    <div class="label">${i18n('settings.user.manage.twofa')}:</div>
                    <input id="registerWebauthn" onclick="user_register_webauthn_device()" type="button" class="" ${interfaceData.options.userHasTwofaRegistrations ? 'disabled="disabled"' : ''} value="${interfaceData.options.userHasTwofaRegistrations ? i18n('settings.user.manage.twofaRegistered') : i18n('settings.user.manage.registerTwofa')}">
                </div>
        `;
    }
    if (interfaceData.options.languageChangeable == true){
        output += `
            <div class="form-group">
                <div class="label">${i18n('settings.user.manage.language')}:</div>
                <select id="language" name="language">
                    ${langNames}
                </select>
            </div>
        `;
    }
    output += `
            <div class="form-group">
                <div class="label">${i18n('settings.user.manage.theme')}:</div>
                <select id="theme" name="theme">
                    ${themesNames}
                </select>
            </div>
    `;
    output += `
            <div id="user_highlight_display" class="form-group">
                <div class="label">${i18n('settings.user.manage.highlight')}:</div>
                <input id="highlight" type="hidden" name="highlight" value="${interfaceData.options.highlight}">
                    <div id="color-picker-container"></div>
                <div style="clear:both;"></div>
            </div>
    `;
    output += `
            <div class="form-group">
                <input type="submit" class="" name="user_${options.content}" value="${i18n('settings.user.manage.save')}">
            </div>
        </form>
        </div>
    `;

    content('this', {'content':output, 'name':options['name']});
    if(interfaceData.options.twofaEnabled) $('#twofaContainer').show();

    const outerWidth = $('#user_edit').outerWidth();
    const userColorPickerWidth = outerWidth <= 400 ? outerWidth : 400;
    const userColorPickerHeight = userColorPickerWidth + 20;

    const userColorPicker = new iro.ColorPicker('#color-picker-container', {
        width: userColorPickerWidth,
        height: userColorPickerHeight,
        color: interfaceData.options.highlight,
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
// Register a new WebAuthn device
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user_register_webauthn_device() {
    /**
     * convert RFC 1342-like base64 strings to array buffer
     * @param {mixed} obj
     * @returns {undefined}
     */
    function recursiveBase64StrToArrayBuffer(obj) {
        let prefix = '?BINARY?B?';
        let suffix = '?=';
        if (typeof obj === 'object') {
            for (let key in obj) {
                if (typeof obj[key] === 'string') {
                    let str = obj[key];
                    if (str.substring(0, prefix.length) === prefix && str.substring(str.length - suffix.length) === suffix) {
                        str = str.substring(prefix.length, str.length - suffix.length);

                        let binary_string = window.atob(str);
                        let len = binary_string.length;
                        let bytes = new Uint8Array(len);
                        for (var i = 0; i < len; i++)        {
                            bytes[i] = binary_string.charCodeAt(i);
                        }
                        obj[key] = bytes.buffer;
                    }
                } else {
                    recursiveBase64StrToArrayBuffer(obj[key]);
                }
            }
        }
    }

    /**
     * Convert a ArrayBuffer to Base64
     * @param {ArrayBuffer} buffer
     * @returns {String}
     */
    function arrayBufferToBase64(buffer) {
        var binary = '';
        var bytes = new Uint8Array(buffer);
        var len = bytes.byteLength;
        for (var i = 0; i < len; i++) {
            binary += String.fromCharCode( bytes[ i ] );
        }
        return window.btoa(binary);
    }

    if(interfaceData.options.userHasTwofaRegistrations) return;
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
        $('#registerWebauthn').val(i18n('settings.user.manage.browserNotSupported'));
        $('#registerWebauthn').attr('disabled', 'disabled');
        return;
    }

    window.fetch('webauthnServer.php?command=getCredentialArgs', {method:'GET',cache:'no-cache'}).then(function(response) {
        return response.json();
    }).then(function(json) {
        recursiveBase64StrToArrayBuffer(json);
        return json;
    }).then(function(createCredentialArgs) {
        return navigator.credentials.create(createCredentialArgs);
    }).then(function(cred) {
        return {
            clientDataJson: cred.response.clientDataJSON ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
            attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null
        };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
        return window.fetch('webauthnServer.php?command=registerDevice', {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        if (json.success) {
            $('#registerWebauthn').val(i18n('settings.user.manage.twofaRegistered'));
            $('#registerWebauthn').attr('disabled', 'disabled');
        } else {
            throw new Error(json.msg);
        }
    }).catch(function(error) {
        $('#registerWebauthn').val(error.message);
        $('#registerWebauthn').attr('disabled', 'disabled');
    });
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// verarbeitet das Editieren der Benutzereinstellungen
////////////////////////////////////////////////////////////////////////////////////////////////////////
function user_edit_commit() {
    interfaceData.options.theme     = $('#user_edit #theme').val()     || 'dark';
    interfaceData.options.highlight = $('#user_edit #highlight').val() || '#e3a104';
    interfaceData.options.language  = $('#user_edit #language').val() || interfaceData.options.language || 'en-US';

    var rpc_obj_get = {
        jsonrpc: '2.0',
        method: 'getUserMetadata',
        params: []
    };

    homegear.invoke(rpc_obj_get, updateUserSettingsData);

    function updateUserSettingsData(data) {
        let newUserSettings = data.result;

        newUserSettings.interface           = newUserSettings.interface || {};
        newUserSettings.locale              = interfaceData.options.language;
        newUserSettings.interface.language  = interfaceData.options.language;
        newUserSettings.interface.theme     = interfaceData.options.theme;
        newUserSettings.interface.highlight = interfaceData.options.highlight;

        const rpc_obj = {
            jsonrpc: '2.0',
            method: 'setUserMetadata',
            params: [newUserSettings]
        };

        homegear.invoke(rpc_obj, function() {
            window.location.reload(true);
        });
    }
}
