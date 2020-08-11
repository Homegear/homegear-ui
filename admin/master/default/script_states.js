/*
    global
        get_or_default
        homegear
        set_or_extend
*/
/*
    exported
        mixin_states
        states_flag_dirty
*/



let _states = Vue.observable({
    initialized: false,
    content: {},
    dirty: [],
});



function _status_gather_invokes(role, role_id) {
    let ret = [{
        type: get_or_default(role, 'aggregationType', 2),
        ids:  [{'id':role_id,'direction':0}],
    }];

    if (!('rolesInclude' in role))
        return ret;

    for (const role_inc of role.rolesInclude) {
        // TODO: test this refactoring
        // const ids = role_inc.roles.map(x => ({
            // id: x,
            // direction: 0
        // }));
        let ids = [];
        for(const index in role_inc.roles) {
            ids.push({
                id: role_inc.roles[index],
                direction: 0,
            });
        }

        ret.push({
            type: get_or_default(role_inc, 'aggregationType', 2),
            ids:  ids,
        });
    }

    return ret;
}



function _status_text(role, texts_idx) {
    if (role.texts === undefined)
        return '?';

    if ((typeof(texts_idx) === 'number' && role.texts.length > texts_idx) ||
        (typeof(texts_idx) === 'string' && texts_idx in role.texts))
        return role.texts[texts_idx];

    if (role.texts.length == 1)
        return role.texts[0];

    return '?';
}



function _invoke(op) {
    return new Promise(function (resolve, _) {
        homegear.invoke(op, function (ret) {
            return resolve(ret);
        });
    });
}



function status_role(role_id) {
    return new Promise(function (resolve) {
        const role = interfaceData.roles[role_id];
        const invokes_descs = _status_gather_invokes(role, role_id);

        if ('l2_status' in role) {
            _states.content[role_id] = [];
            return resolve();
        }

        for (const invoke_desc of invokes_descs) {
            const invoke_op = {
                jsonrpc: '2.0',
                method: 'aggregateRoles',
                params: [invoke_desc.type, invoke_desc.ids, [], 0, true],
            };
            homegear.invoke(invoke_op, function (res) {
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
                    *    respective array index is needed.
                    **/
                    for (let i = 0; i < _states.content[role_id].length; ++i) {
                        if (_states.content[role_id][i].raw == key) {
                            set_or_extend(_states.content[role_id], i, {
                                key:   _status_text(role, key),
                                value: res.result[key],
                                raw:   key,
                            });
                            break;
                        }
                    }
                }

                for (let j = _states.content[role_id].length - 1; j >= 0; --j) {
                    if (keys.indexOf(_states.content[role_id][j].raw) === -1)
                        _states.content[role_id][j].value = 0;
                }
            });
        }

        return resolve();
    });
}



function states_init() {
    const keys = Object.keys(interfaceData.roles).map(Number);

    for (const key of keys) {
        /**
         * Always reinitialize to an empty array here.
         * In case of a homegear reconnect, we would duplicate the
         * status text otherwise.
         **/
        Vue.set(_states.content, key, []);

        const role = interfaceData.roles[key];
        if (!('texts' in role))
            continue;

        /**
         * This must be a for-in loop! Do not change it into a
         * traditional for loop or a map.
         * We need iterate over both, integer keys, as well as object
         * keys (iteration order does not matter for the integer keys).
         **/
        for (const text_idx in role.texts)
            _states.content[key].push(
                {
                    key:   _status_text(role, text_idx),
                    raw:   text_idx + '',
                    value: 0,
                }
            );
    }

    Promise.allSettled(keys.map(key => status_role(key)))
           .then(() => _states.initialized = true);
}
homegear.ready(states_init);



function states_flag_dirty(roles) {
    _states.dirty = _states.dirty.concat(roles)
                                 .filter((v, i, a) => a.indexOf(v) === i);
}



const mixin_states = {
    computed: {
        states_is_ready: function () {
            return _states.initialized;
        },

        states: function () {
            return _states.content;
        },

        states_is_dirty: function () {
            return _states.dirty.length > 0;
        },
    },

    methods: {
        states_refetch_dirty: function () {
            if (! this.states_is_dirty)
                return;

            const dirty = _states.dirty.slice();
            _states.dirty = [];

            Promise.allSettled(dirty.map(x => status_role(x)));
        },
    },
};
