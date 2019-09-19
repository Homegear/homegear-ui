
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
    let id = 'ui';

    for (let i = 0; i < 8; i++)
        id += possible.charAt(Math.floor(Math.random() * possible.length));

    return id;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function homegear_new() {
    return new HomegearWS(
        (interfaceData.options.websocket_url == 'location.hostname') ? location.hostname : interfaceData.options.websocket_url,
        (interfaceData.options.websocket_port == 'location.port') ? location.port : Number(interfaceData.options.websocket_port),
        homegearRandomUserName(),
        interfaceData.options.websocket_security_ssl,
        ...arguments
    );
}

if (interfaceData.options.websocket_security_ssl === false && location.protocol == 'http:')
    interfaceData.options.websocket_security_ssl = false;

var homegear = homegear_new(readCookie('PHPSESSIDUI'));

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
if(location.protocol == 'https:' && interfaceData.options.websocket_security_ssl !== true)
    console.log('Homegear security issue!');
else
    homegear.connect();

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function handle_homegear_update(resp) {
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

        //Does it improve reaction time to run the loop twice (does the "emit" hang shortly)? If not, only run it once.
        let invert = false;
        for (const roleIndex in input.roles) {
            let role = input.roles[roleIndex];
            if(!role.hasOwnProperty('id')) continue;
            else if(role.hasOwnProperty('direction') && role.direction == 1) continue;
            
            if(role.hasOwnProperty('invert'))
            {
                value = !value;
                break; //Only invert once
            }
        }

        interfaceData.devices[input.databaseId]
            .controls[input.control]
            .variableInputs[input.input].properties.value = value;

        for (const roleIndex in input.roles) {
            let role = input.roles[roleIndex];
            if(!role.hasOwnProperty('id')) continue;
            else if(role.hasOwnProperty('direction') && role.direction == 1) continue;
            app.$root.$emit('role-update', role.id);
        }
    }

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
    homegear.event(x => console.log(JSON.stringify(x, null, 4)));
    homegear.event(handle_homegear_update);

    homegear.invoke_multi = function (ops) {
        const object = {
            jsonrpc: '2.0',
            method: 'system.multicall',
            params: ops,
        };

        console.log(JSON.stringify(object, null, 4));

        return this.invoke(object);
    };

    homegear.value_set_multi = function (ops) {
        return this.invoke_multi([
            ops.map(op => ({
                methodName: 'setValue',
                params: params_create(op.input, op.value),
            }))
        ]);
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
