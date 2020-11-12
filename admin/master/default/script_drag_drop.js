/*
    global
        homegear
*/



Vue.component('shif-draggable', {
    // mixins: [mixin_unique_view_key],

    components: {
        draggable: window.vuedraggable,
    },

    props: {
        value: {
            type: [Array, Object],
            default: undefined,
        },
        handle: {
            type: String,
            default: undefined,
        },
        name: {
            type: String,
            default: 'default',
        }
    },

    computed: {
        // Copied from find_unique_view_key
        // Maybe consolidate in future back...
        name_base: function () {
            let cur = this;

            while(cur.$vnode.key === undefined && cur.$parent !== undefined)
                cur = cur.$parent;

            const key = cur.$vnode.key;
            if (key === undefined)
                throw 'BUG: key should be set: ' + key;

            return key.replace(/^__transition-\d+-/, '');
        },

        _interfaceData_field: {
            get: function () {
                if (interfaceData.options.elementOrder === undefined)
                    return undefined;

                const cur = interfaceData.options.elementOrder[this.name_base];
                if (cur === undefined || cur[this.name] === undefined)
                    return undefined;

                return cur[this.name];
            },
            set: function (new_) {
                if (interfaceData.options.elementOrder === undefined)
                    Vue.set(interfaceData.options, 'elementOrder', {});

                if (interfaceData.options.elementOrder[this.name_base] === undefined)
                    Vue.set(interfaceData.options.elementOrder, this.name_base, {});

                Vue.set(interfaceData.options.elementOrder[this.name_base], this.name, new_);
            },
        },

        keys: {
            get: function () {
                return this._interfaceData_field || [];
            },
            set: function (new_) {
                this._interfaceData_field = new_;

                this.$homegear.invoke({
                    jsonrpc: '2.0',
                    method: 'getUserMetadata',
                    params: []
                }, (data) => {
                    let new_settings = data.result;

                    if (new_settings.interface === undefined)
                        new_settings.interface = {};

                    if (new_settings.interface.elementOrder === undefined)
                        new_settings.interface.elementOrder = {};

                    if (new_settings.interface.elementOrder[this.name_base] === undefined)
                        new_settings.interface.elementOrder[this.name_base] = {};

                    new_settings.interface.elementOrder[this.name_base][this.name] = new_;

                    this.$homegear.invoke({
                        jsonrpc: '2.0',
                        method: 'setUserMetadata',
                        params: [new_settings]
                    });
                });
            },
        },

        values: function () {
            return this.keys.map(x => ({
                key: x,
                val: this.value[x],
            }));
        },
    },

    mounted: function () {
        this.init_interfaceData_field();
    },

    watch: {
        'value': function () {
            this.init_interfaceData_field();
        },
    },

    methods: {
        init_interfaceData_field: function () {
            if (typeof this.value !== 'object')
                throw 'Bug: typeof(value) != object: ' + this.value;

            const saved = this._interfaceData_field;

            const new_ = Array.isArray(this.value)
                            ? Array.from(this.value.keys())
                            : Object.keys(this.value);

            this._interfaceData_field =
                saved === undefined || new_.length !== saved.length
                    ? new_
                    : saved;
        }
    },

    template: `
        <draggable v-model="keys"
                   v-bind:handle="handle"
                   v-on:start="$root.draggable.in_progress = true"
                   v-on:end="$root.draggable.in_progress = false">
            <slot v-bind:keys="keys"
                  v-bind:values="values"/>
        </draggable>
    `
});



function _element_order_cleanup() {
    const args = arguments;

    homegear.invoke({
        jsonrpc: '2.0',
        method: 'getUserMetadata',
        params: [],
    }, function (x) {
        let tmp = x.result;

        if (args.length === 0)
            delete tmp.interface.elementOrder;
        else
            for (const i of args)
                delete tmp.interface.elementOrder[i];

        homegear.invoke({
            jsonrpc: '2.0',
            method: 'setUserMetadata',
            params: [tmp],
        });
    });
}
