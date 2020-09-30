/*
    global
        app
*/
/*
    exported
        ModeMenuState
        mixin_modemenu
*/



const ModeMenuState =  {
    HIDDEN:   -1,
    FAVORITES: 0,
    PROFILES:  1,
    DRAGGABLE: 2,
};



const _modemenu_fields = [
    {
        obj: () => app.favorites,
        field: 'enabled',
    },
    {
        obj: () => app.profiles,
        field: 'enabled',
    },
    {
        obj: () => app.draggable,
        field: 'enabled',
    },
];

let _modemenu_state = Vue.observable({state: ModeMenuState.HIDDEN});



const mixin_modemenu = {
    computed: {
        modemenu_is_hidden: function () {
            return _modemenu_state.state === ModeMenuState.HIDDEN;
        },

        modemenu_is_shown: function () {
            return ! this.modemenu_is_hidden;
        },

        modemenu_state: function () {
            return _modemenu_state.state;
        }
    },

    methods: {
        _modemenu_get_state: function (state) {
            switch (typeof state) {
                case 'string':
                    return ModeMenuState[state];
                case 'number':
                    return state;
            }

            throw 'BUG: state unknown: ' + state;
        },

        modemenu_hide: function () {
            for (const i of _modemenu_fields)
                Vue.set(i.obj(), i.field, false);

            _modemenu_state.state = ModeMenuState.HIDDEN;
        },

        modemenu_show: function(state_) {
            const state = this._modemenu_get_state(state_);

            if (state < ModeMenuState.HIDDEN || state >= _modemenu_fields.length)
                throw 'BUG: state not in MODEMENU: ' + state;

            for (let i = 0; i < _modemenu_fields.length; ++i)
                Vue.set(
                    _modemenu_fields[i].obj(),
                    _modemenu_fields[i].field,
                    state === i
                );

            _modemenu_state.state = state;
        },

        modemenu_is_state: function (state) {
            return _modemenu_state.state === this._modemenu_get_state(state);
        },
    },
};
