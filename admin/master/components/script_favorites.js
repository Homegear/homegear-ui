/*
    global
        mixin_print_mounted
        mixin_profiles
        mixin_scroll_position
*/
/*
    exported
        ShifFavorites
        ShifFavoritesLvl1
        ShifFavoritesLvl3
*/



const ShifFavoritesLvl3 = {
    mixins: [mixin_print_mounted('shif-favorites-level-3')],

    props: {
        room_id:   { required: true, },
        device_id: { },
        floor_id:  { required: true, },
    },

    provide: function () {
        return {
            floor_id:  this.floor_id,
            device_id: this.device_id,
            room_id:   this.room_id,
        };
    },

    template: `
        <shif-house-collected-entries v-bind:layer="3" />
    `
};



const ShifFavoritesLvl1 = {
    mixins: [
        mixin_scroll_position,
        mixin_profiles,
        mixin_print_mounted('shif-favorites-level-1')
    ],

    props: {
        room_id:   { },
        floor_id:  { },
        device_id: { },
    },

    provide: function () {
        return {
            floor_id:  this.floor_id,
            device_id: this.device_id,
            room_id:   this.room_id,
        };
    },

    template: `
        <shif-house-collected-entries v-bind:layer="2"
                                    v-bind:favorites="true"
                                    v-bind:include_place="true" />
    `,
};



const ShifFavorites = {
    mixins: [mixin_print_mounted('shif-favorites')],

    template: `
        <shif-paging id="favorites" />
    `
};
