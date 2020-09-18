/*
    exported
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
        // TODO: copied from find_unique_view_key
        name_base: function () {
            let cur = this;

            while(cur.$vnode.key === undefined && cur.$parent !== undefined)
                cur = cur.$parent;

            const key = cur.$vnode.key;
            if (key === undefined)
                throw 'BUG: TODO:implement handling';

            return key.replace(/^__transition-\d+-/, '');
        },

        _interfaceData_field: {
            get: function () {
                if (interfaceData.options.elementOrder === undefined)
                    return undefined;

                const cur = interfaceData.options.elementOrder[this.name_base];
                if (cur === undefined || cur[this.name] === undefined)
                    return undefined;

                console.log(cur[this.name]);
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
        if (typeof this.value !== 'object')
            throw 'Bug: typeof(value) != object';

        const saved = this._interfaceData_field;

        const new_ = Array.isArray(this.value)
                        ? Array.from(this.value.keys())
                        : Object.keys(this.value);

        this._interfaceData_field =
            saved === undefined || new_.length !== saved.length
                ? new_
                : saved;
    },

    template: `
        <draggable v-model="keys"
                   v-bind:handle="handle">
            <slot v-bind:keys="keys"
                  v-bind:values="values"/>
        </draggable>
    `
});



function _element_order_cleanup() {
    homegear.invoke({
        jsonrpc: '2.0',
        method: 'getUserMetadata',
        params: [],
    }, function (x) {
        let tmp = x.result;
        delete tmp.interface.elementOrder;

        homegear.invoke({
            jsonrpc: '2.0',
            method: 'setUserMetadata',
            params: [tmp],
        });
    });
}
