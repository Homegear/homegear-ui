Vue.component('shif-house-floors-rooms', {
    mixins: [mixin_print_mounted()],

    computed: {
        has_multiple_floors: function () {
            return Object.keys(interfaceData.floors).length > 1;
        },

        unassigned_rooms: function () {
            const tmp = Object.keys(interfaceData.floors)
                              .map(x => interfaceData.floors[x].rooms)
                              .flat();

            let assigned = {};
            for (const i of tmp)
                assigned[i] = true;

            return Object.keys(interfaceData.rooms)
                         .filter(x => ! assigned[x])
                         .filter(x => this.room_has_devices(x));
        },
    },

    data: function () {
        let roomSelectWrapperWidth = 185 + 30;
        let windowWidth = $( window ).width() - 100;
        let maxWidth = 1080;

        const rooms_per_floor = Object.keys(interfaceData.floors)
                                      .map(x => interfaceData.floors[x].rooms.length);
        const max_rooms_per_floor = Math.max.apply(this, rooms_per_floor);

        let roomSelectWrapperMaxCount = windowWidth / roomSelectWrapperWidth;
        roomSelectWrapperMaxCount = roomSelectWrapperMaxCount.toString().split('.')[0];

        if (max_rooms_per_floor > roomSelectWrapperMaxCount) {
            maxWidth = roomSelectWrapperMaxCount * roomSelectWrapperWidth + 20;
        }
        else {
            maxWidth = max_rooms_per_floor * roomSelectWrapperWidth + 25;
        }

        return {
            maxWidth: maxWidth + 'px',
        };
    },

    methods: {
        room_has_devices: function (room_key) {
            const room = interfaceData.rooms[room_key];

            return room.devices !== undefined && room.devices.length > 0;
        },
    },

    template: `
        <div id="house_rooms" v-bind:style="{'max-width': maxWidth}">
            <template v-for="floor_val, floor_key in interfaceData.floors">
                <div v-if="has_multiple_floors || unassigned_rooms.length > 0"
                     class="roomSelectTitle">
                    {{ floor_val.name }}
                </div>

                <div class="rooms_wrapper">
                    <shif-room v-for="room_key in floor_val.rooms"
                               v-if="room_has_devices(room_key)"
                               v-bind:key="room_key"
                               v-bind:floor="{key: floor_key, value: floor_val}"
                               v-bind:room="room_key" />
                </div>
            </template>

            <template v-if="unassigned_rooms.length > 0">
                <div class="roomSelectTitle">
                    {{ i18n('house.storyless') }}
                </div>

                <div class="rooms_wrapper">
                    <shif-room v-for="room_val in unassigned_rooms"
                               v-bind:key="room_val"
                               v-bind:floor="{key: -1}"
                               v-bind:room="room_val" />
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
