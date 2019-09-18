////////////////////////////////////////////////////////////////////////////////////////////////////////
// Auflisten der Räume
////////////////////////////////////////////////////////////////////////////////////////////////////////
var house_level1_content = '';

function house_level1(){
    $.each(interfaceData.floors, function(floorKey, floorValue) {
        // Stockwerktitel anzeigen, wenn mehr als ein Stockwerk vorhanden ist
        if (Object.keys(interfaceData.floors).length > 1)
            house_level1_content += `
                <div class="roomSelectTitle">
                    ${floorValue.name}
                </div>
            `;

        house_level1_content += '<div class="rooms_wrapper"><center>';

        $.each(floorValue.rooms, function(_, roomValue) {
            const floorBreadcrumbName = interfaceData.options.showFloor === true
                                            ? floorValue.name + ' - '
                                            : '';

            var action = 'onclick=\'house_level2( this, {"name":"'+ floorBreadcrumbName + interfaceData.rooms[roomValue]['name'] +'", "floor":"'+floorKey+'", "room":"'+roomValue+'"});\'';

            house_level1_content += `
                <div class="roomSelect_wrapper" ${action}>
                    <div class="roomSelect">
                        ${showIcon(interfaceData.rooms[roomValue].icon)}
                    </div>
                    <div class="description">
                        ${interfaceData.rooms[roomValue].name}
                    </div>
                </div>
            `;
        });

        house_level1_content += '</center></div>';
    });
}

// TODO: Return value?
house_level1();

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function check_disabled(device, indexes) {
    function check_event_trigger(event) {
        if (event.trigger == undefined || event.trigger.length != 3)
            return false;

        const trigger = event.trigger;
        return trigger[0] in interfaceData.map_invoke &&
               trigger[1] in interfaceData.map_invoke[trigger[0]] &&
               trigger[2] in interfaceData.map_invoke[trigger[0]][trigger[1]];
    }

    function check_event_disable(event, control_idx) {
        return 'disable' in event &&
               control_idx in event.disable;
    }

    function check_event_condition(event) {
        return 'condition' in event &&
               'operator'  in event.condition &&
               'value'     in event.condition;
    }

    const ret_enabled = {flag: false};

    if (! ('metadata'    in device &&
           'event_hooks' in device.metadata))
        return ret_enabled;

    for (let event of device.metadata.event_hooks) {
        if (! check_event_trigger(event) ||
            ! check_event_disable(event, indexes.control) ||
            ! check_event_condition(event))
            continue;

        const trigger   = event.trigger;
        const disable   = event.disable;
        const condition = event.condition;

        if (! disable[indexes.control])
            continue;

        let devices = interfaceData.map_invoke[trigger[0]][trigger[1]][trigger[2]];
        for (let dev of devices) {
            let res = condition_check(condition,
                                      interfaceData.devices[dev.databaseId]
                                                   .controls[dev.control]
                                                   .variableInputs[dev.input]
                                                   .properties
                                                   .value);
            if (res)
                return {
                    flag: true,
                    texts: event.texts,
                };
        }

    }

    return ret_enabled;
}

function component_create(constructor, data) {
    let comp = new constructor({
        propsData: data,
    });

    comp.$mount();

    return comp.$el;
}

function component_object(control, device, input, output, is, indexes) {
    let ret = {
        uiElement: device,
        control:   control,
        device:    device.databaseId,
        icons:     device.icons,
        texts:     device.texts,
        output:    output,
        props:     input.properties,
        indexes:   indexes,
        rendering: input.rendering
    };

    ret.control.disabled = () => check_disabled(device, indexes);

    if (is)
        ret.is = is;

    return ret;
}

function components_create(device, layer) {
    let out = [];

    if (layer == 'l2' && typeof(device.metadata) == 'object') {
        if ('l2_action' in device.metadata) {
            const keys = device.metadata.l2_action;

            const control = device.controls[keys.control];
            const input   = control.variableInputs[keys.input];
            const output  = control.variableOutputs[keys.input];


            return [component_create(
                controlComponents[control.control].l2,
                component_object(control, device, input, output, null,
                                 {input: keys.input, control: keys.control})
            )];
        }

        if (device.controls.length <= 1 &&
            (!('l3_force' in device.metadata) || device.metadata.l3_force !== true))
            layer = 'l3';
    }

    for (let i = 0; i < device.controls.length; ++i) {
        const control = device.controls[i];

        if (!(control.control in controlComponents) ||
            !(layer           in controlComponents[control.control]))
            continue;

        for (const k in control.variableInputs) {
            const input  = control.variableInputs[k];
            const output = control.variableOutputs[k];

            out.push(component_create(
                controlComponents[control.control][layer],
                component_object(control, device, input, output, null,
                                 {input: k, control: i})
            ));
        }
    }

    return out;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Auflisten der Geräte eines Raums
////////////////////////////////////////////////////////////////////////////////////////////////////////
function house_level2(element, options){
    let elements  = [];
    const devices = interfaceData.rooms[options.room]
        .devices.map(dev => interfaceData.devices[dev]);

    for (const dev of devices)
        elements = elements.concat(components_create(dev, 'l2'));

    content(this, {
        content: elements,
        name:    options.name,
        vue:     true,
    });
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function house_level3(element, options){
    const device = interfaceData.devices[options.device];

    content(this, {
        content: components_create(device, 'l3'),
        name:    options.name,
        vue:     true,
    });
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
Vue.use({
    install: function (Vue, opts) {
        Vue.prototype.$homegear = homegear;
    },
});


Vue.mixin({
    data: function () {
        return  {
            debug:          false,
            interfaceIcons: icons,
            interfaceData:  interfaceData,
        };
    },

    filters: {
        pretty: function (val) {
            return JSON.stringify(val, null, 4);
        },

        warn: function (val) {
            console.warn(val);
        },

        log: function (val) {
            console.log(val);
        },
    },

    methods: {
        level3: function (device, name) {
            house_level3(this, {
                device,
                name,
            });
        },

        round: function (val, precision) {
            let mul = Math.pow(10, precision || 0);

            return Math.round(val * mul) / mul;
        },

        float_formatted: function (val, precision=1) {
            return parseFloat(val).toFixed(precision);
        },
    },
});



Vue.component('shif-ctrl-summary', {
    props: [
        'icon',
        'title',
        'status',
        'actions',
        'devs',
        'role_id',
    ],

    data: function () {
        return {
            submenu_show: false,
        };
    },

    computed: {
        dev_objs: function () {
            return this.devs.map(x => this.find_component(this.interfaceData.devices[x], 'l2'));
        }
    },

    methods: {
        find_component: function (device, layer) {
            if (layer == 'l2' && typeof(device.metadata) == 'object') {
                if ('l2_action' in device.metadata) {
                    const keys = device.metadata.l2_action;

                    const control = device.controls[keys.control];
                    const input   = control.variableInputs[keys.input];
                    const output  = control.variableOutputs[keys.input];
                    const is      = 'shif-' + control.control + '-l2';

                    return [component_object(control, device, input, output, is,
                                             {input: keys.input, control: keys.control})];
                }

                if (device.controls.length <= 1 &&
                    (!('l3_force' in device.metadata) ||
                     device.metadata.l3_force !== true))
                    layer = 'l3';
            }

            let out = [];
            // for (const control of device.controls) {
            for (let i = 0; i < device.controls.length; ++i) {
                const control = device.controls[i];

                for (const k in control.variableInputs) {
                    const input  = control.variableInputs[k];
                    const output = control.variableOutputs[k];
                    const is     = 'shif-' + control.control + '-' + layer;

                    out.push(component_object(control, device, input, output, is,
                                              {input: k, control: i}));
                }
            }

            return out;
        },

        toggle_all: function(action) {
            const varInRole = 'roleId' in action
                            ? this.interfaceData.roles[action.roleId].varInRole
                            : this.interfaceData.roles[this.role_id].varInRole;


            let ops = [];
            for (const peer in varInRole)
                for (const channel in varInRole[peer])
                    for (const name in varInRole[peer][channel]) {
                        if(varInRole[peer][channel][name].hasOwnProperty('direction') && varInRole[peer][channel][name].direction == 0) continue;
                        ops.push({
                            input: {peer, channel, name},
                            value: action.value
                        });
                    }

            this.$homegear.value_set_multi(ops);
        }

    },

    template: `
        <div>
            <shif-generic-l2 v-bind:icon="icon"
                             v-bind:icon_rotate="submenu_show"
                             v-bind:title="title"
                             v-bind:status="status"
                             v-bind:actions="true"
                             v-bind:accordion="true"
                             v-on:click="submenu_show = !submenu_show"
                             class="accordion">
            </shif-generic-l2>

            <transition name="slide-fade">
                <div v-if="submenu_show"
                     class="categoryContainer"
                     style="margin-top: 15px;">
                    <div class="control_button_wrapper">
                        <template v-for="action in actions">
                            <shif-button v-bind:width="(100 / actions.length) + '%'"
                                         v-on:click="toggle_all(action)">
                                {{ action.buttonText }}
                            </shif-button>
                        </template>
                    </div>

                    <template v-for="dev in dev_objs">
                        <component v-bind="dev" v-bind:include_place="true">
                        </component>

                        <template v-if="debug">
                            {{ dev | pretty | log }}
                        </template>
                    </template>
                </div>
            </transition>
        </div>
    `,
});



let ShifAllDevices = {
    data: function () {
        let states = {};

        /**
         * Initialize the states so that the status component can show an empty
         * status line without error.
         **/
        for (const key of Object.keys(interfaceData.roles).map(Number))
            states[key] = [];

        return {
            status_initialized: false,
            states: states,
        };
    },

    computed: {
        map_roles_devs: function () {
            let ret = {};

            for (const dev_idx in interfaceData.devices) {
                let dev = interfaceData.devices[dev_idx];
                if (!('role' in dev))
                    continue;

                const role = dev.role;
                if (!(role in ret))
                    ret[role] = [];

                if (ret[role].indexOf(dev_idx) === -1)
                    ret[role].push(dev_idx);
            }

            return ret;
        },
    },

    methods: {
        status_gather_invokes: function (role, role_id) {
            let ret = [{
                type: get_or_default(role, 'aggregationType', 2),
                ids:  [{'id':role_id,'direction':0}],
            }];

            if (!('rolesInclude' in role))
                return ret;

            for (const role_inc of role.rolesInclude) {
                let ids = [];
                for(const index in role_inc.roles) {
                    ids.push({'id':role_inc.roles[index],'direction':0});
                }

                ret.push({
                    type: get_or_default(role_inc, 'aggregationType', 2),
                    ids:  ids,
                });
            }

            return ret;
        },

        status_text: function (role, texts_idx) {
            if (!('texts' in role))
                return '?';

            if ((typeof(texts_idx) === 'number' && role.texts.length > texts_idx) ||
                (typeof(texts_idx) === 'string' && texts_idx in role.texts))
                return role.texts[texts_idx];

            if (role.texts.length == 1)
                return role.texts[0];

            return '?';
        },

        status: function (role_id) {
            const role = interfaceData.roles[role_id];
            const invokes_descs = this.status_gather_invokes(role, role_id);

            for (const invoke_desc of invokes_descs) {
                this.$homegear.invoke({
                    jsonrpc: '2.0',
                    method: 'aggregateRoles',
                    params: [invoke_desc.type, invoke_desc.ids, []],
                }, (res) => {
                    if (res.error) {
                        console.log('[' + invoke_desc.ids.join(', ') + ']: ' + res.error.message);
                        return;
                    }

                    /**
                     * Updating this is a two step process:
                     * 1) We need to fetch the new values from upstream.
                     * 2) We need to zero out the outdated old values.
                     **/
                    const keys = Object.keys(res.result)
                                       .filter(x => x !== 'variableCount');
                    for (const key of keys) {
                        /**
                         * We have to be very careful here, to not break Vue's
                         * reactiveness.
                         * 1) In case we need to insert a value, push is needed.
                         * 2) In case we need to change a value, direct
                         *    assignment of the single object members at
                         *    relative array index is needed.
                         **/
                        for (let i = 0; i < this.states[role_id].length; ++i) {
                            if (this.states[role_id][i].raw == key) {
                                set_or_extend(this.states[role_id], i, {
                                    key:   this.status_text(role, key),
                                    value: res.result[key],
                                    raw:   key,
                                });
                                break;
                            }
                        }
                    }

                    for (let j = this.states[role_id].length - 1; j >= 0; --j) {
                        if (keys.indexOf(this.states[role_id][j].raw) === -1)
                            this.states[role_id][j].value = 0;
                    }
                });
            }
        },
    },

    mounted: function () {
        this.$homegear.ready(() => {
            for (const key of Object.keys(interfaceData.roles).map(Number)) {
                const role = interfaceData.roles[key];

                if (! ('texts' in role))
                    continue;

                /**
                 * Always reinitialize to an empty array here.
                 * In case of a homegear reconnect, we would duplicate the
                 * status text otherwise.
                 **/
                this.states[key] = [];
                /**
                 * This must be a for-in loop! Do not change it into a
                 * traditional for loop or a map.
                 * We need iterate over both, integer keys, as well as object
                 * keys (iteration order does not matter for the integer keys).
                 **/
                for (const text_idx in role.texts)
                    this.states[key].push(
                        {
                            key:   this.status_text(role, text_idx),
                            raw:   text_idx + '',
                            value: 0,
                        }
                    );
                this.status(key);
            }

        });

        this.$root.$on('role-update', (role_id) => this.status(Number(role_id)));
    },


    template: `
        <div>
            <template v-for="(devs, role) in map_roles_devs">
                <template v-if="role in interfaceData.roles">
                    <shif-ctrl-summary
                        v-on:role_update="status"
                        v-bind:actions="interfaceData.roles[role].invokeOutputs"
                        v-bind:icon="interfaceData.roles[role].icon"
                        v-bind:title="interfaceData.roles[role].name"
                        v-bind:devs="devs"
                        v-bind:role_id="role"
                        v-bind:status="states[role]">
                    </shif-ctrl-summary>
                </template>
                <template v-else>
                    {{ log("This role is not defined: " + role) }}
                </template>
            </template>
        </div>
    `,
};



let app = new Vue({
    el: '#inhalt',

    components: {
        ShifAllDevices
    }
});
