Vue.component('shif-house-floors-rooms', {
    mixins: [mixin_print_mounted()],

    computed: {
        has_multiple_floors: function () {
            return Object.keys(interfaceData.floors).length > 1;
        }
    },

    data: function () {
        var roomSelectWrapperWidth = 185 + 30;
        var windowWidth = $( window ).width() - 20;
        var rooms_wrapper_child_count_max = 0;
    
        $('.rooms_wrapper').each(function(){
            if(this.childElementCount > rooms_wrapper_child_count_max){
                rooms_wrapper_child_count_max = this.childElementCount;
            }
        });
    
        var roomSelectWrapperMaxCount = windowWidth / roomSelectWrapperWidth;
        roomSelectWrapperMaxCount = roomSelectWrapperMaxCount.toString().split('.')[0];
    
        if (rooms_wrapper_child_count_max > roomSelectWrapperMaxCount) {
            var maxWidth = roomSelectWrapperMaxCount * roomSelectWrapperWidth + 20;
            //console.log('1 roomSelectWrapperMaxCount');
        }
        else {
            var maxWidth = rooms_wrapper_child_count_max * roomSelectWrapperWidth + 25;
            //console.log('2 rooms_wrapper_child_count_max');
        }
    
        //console.log('roomSelectWrapperWidth: '+roomSelectWrapperWidth);
        //console.log('windowWidth: '+windowWidth);
        //console.log('rooms_wrapper_child_count_max: '+rooms_wrapper_child_count_max);
        //console.log('roomSelectWrapperMaxCount: '+roomSelectWrapperMaxCount);
        console.log('maxWidth: '+maxWidth);

        return {
            maxWidth: 1080 + 'px',
        };
    },

    template: `
        <div id="house_rooms" v-bind:style="{'max-width': maxWidth}">
            <template v-for="floor_val, floor_key in interfaceData.floors">
                <div v-if="has_multiple_floors"
                     class="roomSelectTitle">
                    {{ floor_val.name }}
                </div>

                <div class="rooms_wrapper">
                    <shif-room v-for="room_val in floor_val.rooms"
                               v-bind:key="room_val"
                               v-bind:floor="{key: floor_key, value: floor_val}"
                               v-bind:room="room_val" />
                </div>
            </template>
        </div>
    `,
});



let ShifHouseLvl3 = {
    mixins: [mixin_print_mounted('shif-house-lvl3')],

    template: `
        <shif-house-collected-entries v-bind:layer="3" />
    `
};



let ShifHouseLvl2 = {
    mixins: [mixin_print_mounted('shif-house-lvl2')],

    computed: {
        breadcrumb_name: function () {
            const floor_name = interfaceData.options.showFloor === true
                                ? interfaceData.floors[this.$route.params.floor].name + ' - '
                                : '';

            return floor_name + interfaceData.rooms[this.$route.params.room].name
        },
    },

    mounted: function () {
        interfaceData.i18n[this.$route.name] = this.breadcrumb_name;
    },

    template: `
        <shif-house-collected-entries v-bind:layer="2" />
    `
};



let ShifHouseRooms = {
    mixins: [mixin_print_mounted('shif-house-rooms')],

    template: `
        <shif-mainmenu-tabs>
            <shif-house-floors-rooms />
        </shif-mainmenu-tabs>
    `
};



let ShifHouse = {
    mixins: [mixin_print_mounted('shif-house')],

    template: `
        <shif-paging id="house" />
    `,
};
