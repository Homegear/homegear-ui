/*
    global
        i18n
*/
/*
    exported
        user_register_webauthn_device
*/



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
