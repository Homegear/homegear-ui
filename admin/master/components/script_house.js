/*
    global
        draggable_create
        mixin_modemenu
        mixin_rooms
        mixin_print_mounted
        mixin_scroll_position
*/
/*
    exported
        ShifHouse
        ShifHouseLvl2
        ShifHouseLvl3
        ShifHouseRooms
*/



Vue.component('shif-house-floors-rooms', {
    mixins: [mixin_modemenu, mixin_rooms, mixin_print_mounted()],

    data: function () {
        const windowWidth = $( window ).width() - 100;
        const roomSelectWrapperWidth = 185 + 30;
        let maxWidth = 1080;

        const rooms_per_floor = Object.keys(interfaceData.floors)
                                      .map(x => interfaceData.floors[x].rooms.length);
        const max_rooms_per_floor = Math.max.apply(this, rooms_per_floor);

        let roomSelectWrapperMaxCount = windowWidth / roomSelectWrapperWidth;
        roomSelectWrapperMaxCount = roomSelectWrapperMaxCount.toString().split('.')[0];

        if (max_rooms_per_floor > roomSelectWrapperMaxCount)
            maxWidth = roomSelectWrapperMaxCount * roomSelectWrapperWidth + 20;
        else
            maxWidth = max_rooms_per_floor * roomSelectWrapperWidth + 25;

        return {
            maxWidth: maxWidth + 'px',
        };
    },

    computed: {
        has_multiple_floors: function () {
            return Object.keys(interfaceData.floors).length > 1;
        },

        rooms_per_floor: function () {
            let out = {};

            for (const i in interfaceData.floors) {
                const cur = interfaceData.floors[i];
                out[i] = draggable_create(cur.rooms);
            }

            return out;
        }
    },

    template: `
        <div id="house_rooms" v-bind:style="{'max-width': maxWidth}">
            <shif-draggable v-bind:value="interfaceData.floors"
                            v-slot="draggable_floor"
                            handle=".drag_drop_icon">
                <div v-for="floor in draggable_floor.values">
                    <div v-if="has_multiple_floors || unassigned_rooms.length > 0"
                         class="roomSelectTitle"
                         >
                        <shif-icon v-if="modemenu_is_state('DRAGGABLE')"
                                   src="move_1" classname="drag_drop_icon" />
                        {{ floor.val.name }}
                    </div>

                    <div class="rooms_wrapper">
                        <shif-draggable v-bind:value="floor.val.rooms"
                                        v-bind:name="floor.key"
                                        v-slot="draggable_room"
                                        handle=".drag_drop_icon_right">
                            <shif-room v-for="room in draggable_room.values"
                                       v-if="room_has_devices(room.val)"
                                       v-bind:key="room.val"
                                       v-bind:floor="{key: floor.key, value: floor.val}"
                                       v-bind:room="room.val" />
                        </shif-draggable>
                    </div>
                </div>
            </shif-draggable>

            <template v-if="unassigned_rooms.length > 0">
                <div class="roomSelectTitle">
                    {{ i18n('house.storyless') }}
                </div>

                <div class="rooms_wrapper">
                    <shif-room v-for="room_val in unassigned_rooms"
                               v-bind:key="room_val"
                               v-bind:floor="{key: -1}"
                               v-bind:room="room_val"
                               />
                </div>
            </template>
        </div>
    `,
});



let ShifHouseLvl3 = {
    mixins: [mixin_print_mounted('shif-house-lvl3')],

    props: {
        room_id:   { required: true, },
        device_id: { required: true, },
        floor_id:  { required: true, },
    },

    provide: function () {
        return {
            room_id:   this.room_id,
            floor_id:  this.floor_id,
            device_id: this.device_id,
        };
    },

    template: `
        <shif-house-collected-entries v-bind:layer="3" />
    `
};



let ShifHouseLvl2 = {
    mixins: [mixin_scroll_position, mixin_print_mounted('shif-house-lvl2')],

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
        <shif-house-collected-entries v-bind:layer="2" />
    `
};



let ShifHouseRooms = {
    mixins: [mixin_scroll_position, mixin_print_mounted('shif-house-rooms')],

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
