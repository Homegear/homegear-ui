/*
    exported
        draggable_create
        draggable_id
*/



function draggable_create(data, key = 'ui_index') {
    function key_inject(x) {
        if (x[key] === undefined)
            Vue.set(x, key, 0);

        return x;
    }

    return {
        get: function ()    {
            return Object.keys(data)
                         .map(x => Object.assign(data[x], {_draggable_id: x}))
                         .map(key_inject)
                         .sort((a, b) => a[key] > b[key] ? 1 : -1);
        },
        set: function (lst) {
            for (let i = 0; i < lst.length; ++i)
                Vue.set(data[lst[i]._draggable_id], key, i);
        },
    };
}



Vue.component('shif-draggable', window.vuedraggable);
