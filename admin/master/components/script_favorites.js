let ShifFavoritesLvl3 = {
    mixins: [mixin_print_mounted('shif-favorites-level-3')],

    template: `
        <shif-house-collected-entries v-bind:layer="3" />
    `
};



let ShifFavoritesLvl1 = {
    mixins: [mixin_print_mounted('shif-favorites-level-1')],

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
