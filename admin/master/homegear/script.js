
////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function readCookie(key) {
    const regex = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)');
    const result = regex.exec(document.cookie);

    return result ? result[1] : null;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function homegearRandomUserName() {
    const possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let id = 'shif-';

    for (let i = 0; i < 8; i++)
        id += possible.charAt(Math.floor(Math.random() * possible.length));

    return id;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function homegear_websocket_security() {
    const opts = interfaceData.options;

    if (location.protocol === 'https:')
        return true;

    if (opts.websocket_user || opts.websocket_password)
        return true;

    if (opts.websocket_security_ssl === undefined ||
        opts.websocket_security_ssl === 'location.protocol')
        return location.protocol === 'https:'

    return !! opts.websocket_security_ssl;

}

function homegear_new() {
    const host = (interfaceData.options.websocket_url == 'location.hostname')
                    ? location.hostname
                    : interfaceData.options.websocket_url;
    const port = (interfaceData.options.websocket_port == 'location.port')
                    ? location.port
                    : Number(interfaceData.options.websocket_port);

    const secure = homegear_websocket_security();

    return new HomegearWS(
        host,
        port,
        homegearRandomUserName(),
        secure,
        ...arguments
    );
}

if (interfaceData.options.websocket_user && interfaceData.options.websocket_password) {
    var homegear = homegear_new(interfaceData.options.websocket_user, interfaceData.options.websocket_password);
}
else {
    var homegear = homegear_new(readCookie('PHPSESSIDUI'));
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
homegear.ready(function() {
    var addDevicesAsHomegearPeers = Object.keys(interfaceData.map_invoke).map(Number);

    console.log('HomegearPeers: ');
    console.log(addDevicesAsHomegearPeers);

    homegear.addPeers( addDevicesAsHomegearPeers );
    $('#loadingPage').hide();
});

homegear.connected(function() {

});

homegear.disconnected(function() {
    $('#loadingPage').show();
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
//get new sessionid when websocket reconnects
////////////////////////////////////////////////////////////////////////////////////////////////////////
homegear.reconnected(function() {
    window.location.reload(true);
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
//print Homegear errors
////////////////////////////////////////////////////////////////////////////////////////////////////////
homegear.error(function (message) {
    console.log(message);
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
if(location.protocol == 'https:' && interfaceData.options.websocket_security_ssl == false)
    alert('Error: If you connect to the interface via https you have to use a secure websocket connection!');
else homegear.connect();

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function roles_relevant(roles) {
    return roles.filter(x => x.hasOwnProperty('id') && x.direction !== 1);
}




function handle_update_event(resp) {
    // DEBUG: works as expected
    const peer    = resp.params[1],
          channel = resp.params[2],
          name    = resp.params[3];
    let   value   = resp.params[4];

    if (!(peer    in interfaceData.map_invoke &&
          channel in interfaceData.map_invoke[peer] &&
          name    in interfaceData.map_invoke[peer][channel]))
        return;

    const inputs = interfaceData.map_invoke[peer][channel][name];
    for (const input of inputs) {
        if (!(input.databaseId in interfaceData.devices &&
              input.control    in interfaceData.devices[input.databaseId]
                                               .controls &&
              input.input      in interfaceData.devices[input.databaseId]
                                               .controls[input.control]
                                               .variableInputs))
            continue;

        if (input.roles === undefined)
            continue;

        interfaceData.devices[input.databaseId]
            .controls[input.control]
            .variableInputs[input.input].properties.value = value;

        for (const role of roles_relevant(input.roles))
            app.$root.$emit('role-update', role.id);
    }
}



function date_format() {
    const dt = new Date ();

    const month  = (dt.getMonth()+1).toString().padStart(2, '0');
    const day    = dt.getDate().toString().padStart(2, '0');
    const year   = dt.getFullYear().toString().padStart(4, '0');
    const hour   = dt.getHours().toString().padStart(2, '0');
    const minute = dt.getMinutes().toString().padStart(2, '0')
    const second = dt.getSeconds().toString().padStart(2, '0');

    return `${month}.${day}.${year} ${hour}:${minute}:${second}`;
}



function handle_update_request_ui_refresh(resp) {
    error.set(`
        <div class="toast_text">
            ${i18n('refresh.message')}
        </div>
        <button class="toast_action" onclick="window.location.reload(true)">
            ${i18n('refresh.message.button.text')}
        </button>
    `);
}



function handle_update_variable_profile_state_changed(resp) {
    const id    = resp.params[0],
          state = resp.params[1];

    if (interfaceData.profiles[id] === undefined)
        return;

    interfaceData.profiles[id].isActive = state;
}



function homegear_handle_update(resp) {
    console.log(JSON.stringify(resp, null, 4));

    const funcs = {
        'event': handle_update_event,
        'requestUiRefresh': handle_update_request_ui_refresh,
        'variableProfileStateChanged': handle_update_variable_profile_state_changed,
    };

    if (resp.method in funcs)
        funcs[resp.method](resp)
}



////////////////////////////////////////////////////////////////////////////////////////////////////////
// Extensions to the homegear object
////////////////////////////////////////////////////////////////////////////////////////////////////////
function params_create(input, value) {
    if ('value' in input) {
        value = input.value;
    }
    return [
        Number(input.peer),
        Number(input.channel),
        input.name,
        value,
        false,
    ];
}



function homegear_prepare(homegear) {
    homegear.event(homegear_handle_update);
    homegear.ready(() => {
        app.$mount('#inhalt');
        breadcrumbs.$mount('#breadcrumbs');
    });

    homegear.invoke_raw = homegear.invoke;
    homegear.invoke = function (op, cb) {
        homegear.invoke_raw(op, function (ret) {
            if (ret.error === undefined)
                return cb ? cb(ret) : undefined;

            console.log('Invoke Error: ' + JSON.stringify(ret.error, null, 4));
        })
    };

    homegear.invoke_multi = function (ops, cb) {
        const object = {
            jsonrpc: '2.0',
            method: 'system.multicall',
            params: ops,
        };

        console.log(JSON.stringify(object, null, 4));

        return this.invoke(object, cb);
    };

    homegear.value_set_multi = function (ops, cb) {
        return this.invoke_multi([
            ops.map(op => ({
                methodName: 'setValue',
                params: params_create(op.input, op.value),
            }))
        ], cb);
    };

    homegear.value_set_clickcounter = function(control, params, value) {
        let methods = [[
            {
                methodName: 'setValue',
                params: params_create(params, value)
            }
        ]];

        if(Date.now() - control.lastClickCount > 10000) {
            control.lastClickCount = Date.now();
            methods[0].push({
                methodName: 'setUserData',
                params: ['ui.clickCounts', control.uiElement.databaseId.toString(), ++control.uiElement.clickCount]
            });
        }

        return this.invoke_multi(methods);
    };
}
homegear_prepare(homegear);
