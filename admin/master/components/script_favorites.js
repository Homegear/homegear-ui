let ShifFavoritesLvl3 = {
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



let ShifFavoritesLvl1 = {
    mixins: [mixin_print_mounted('shif-favorites-level-1')],

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



let ShifFavorites = {
    mixins: [mixin_print_mounted('shif-favorites')],

    template: `
        <shif-paging id="favorites" />
    `
};
