/*
    global
        PromiseAllSettled
        app
        get_or_default
        homegear
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



function _status_gather_invokes(category) {
    return get_or_default(category, 'aggregation', [])
                .map(cat_inc => ({
                    type: get_or_default(cat_inc, 'type', 2),
                    ids:  cat_inc.roles.map(x => ({id: x})),
                 }));
}



function _status_text(category, idx) {
    if (category.statusMap === undefined ||
        category.statusMap[idx] === undefined)
        return '?';

    return category.statusMap[idx];
}



function _status_from_map(category) {
    let out = {};

    for (const key in category.statusMap)
        out[_status_text(category, key)] = 0;

    return out;
}



function _status_array_form_map(map) {
    return Object.keys(map)
                 .map(x => ({
                     key: x, value: map[x]
                  }));
}



function _invoke(op) {
    return new Promise(function (resolve, _) {
        homegear.invoke(op, function (ret) {
            return resolve(ret);
        });
    });
}



function status_category(cat_id) {
    return new Promise(function (resolve) {
        const category = interfaceData.deviceCategories[cat_id];
        const invokes_descs = _status_gather_invokes(category);

        if (category.l2_status !== true) {
            Vue.set(_states.content, cat_id, []);
            return resolve();
        }

        let new_ = _status_from_map(category);
        PromiseAllSettled(
            invokes_descs.map(x => ({
                jsonrpc: '2.0',
                method: 'aggregateRoles',
                params: [x.type, x.ids, [], 0, true],
            })).map(_invoke)
        ).then(function (results) {
            if (app.debug)
                console.log(results);

            for (const result of results) {
                if (result.status === 'rejected')
                    continue;

                for (const field of Object.keys(result.value.result)
                                          .filter(x => x !== 'variableCount')) {
                    const key = _status_text(category, field);
                    if (key === '?')
                        continue;

                    if (new_[key] === undefined)
                        new_[key] = 0;

                    new_[key] += result.value.result[field];
                }
            }
        }).then(function () {
            Vue.set(_states.content, cat_id, _status_array_form_map(new_));
        }).then(resolve());
    });
}



function states_is_enabled() {
    return interfaceData.options.deviceAggregation === true;
}



function states_init() {
    if (! states_is_enabled())
        return;

    const cat_keys = Object.keys(interfaceData.deviceCategories);

    for (const key of cat_keys) {
        const category = interfaceData.deviceCategories[key];
        if (category.statusMap === undefined)
            continue;

        const map = _status_from_map(category);
        Vue.set(_states.content, key, _status_array_form_map(map));
    }

    PromiseAllSettled(cat_keys.map(status_category))
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
            if (! this.states_is_ready || ! this.states_is_dirty)
                return;

            const dirty = _states.dirty.slice();
            _states.dirty = [];

            PromiseAllSettled(dirty.map(x => status_category(x)));
        },
    },
};
