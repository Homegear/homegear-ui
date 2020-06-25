let timer_l2 = clone(shif_device);
timer_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let timer_l3 = clone(shif_device);
timer_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}

timer_l3.template = `
    <form>
        <div class="timer_wrapper">
            <div>
                <input type="time" name="time">
            </div>
            <div>
                <select name="sun">
                    <option value="false">-</option>
                    <option value="sa">Sonnenaufgang</option>
                    <option value="su">Sonnenuntergang</option>
                </select>
            </div>
            <div>
                <select name="state">
                    <option value="false">off</option>
                    <option value="true">on</option>
                </select>
            </div>
            <div style="max-width: 456px;">
                <select class="select_day" name="day" multiple>
                    <option value="1">Mo.</option>
                    <option value="2">Di.</option>
                    <option value="3">Mi.</option>
                    <option value="4">Do.</option>
                    <option value="5">Fr.</option>
                    <option value="6">Sa.</option>
                    <option value="7">So.</option>
                </select>
            </div>
            <div>
                <select name="activ">
                    <option value="false">inactive</option>
                    <option value="true">active</option>
                </select>
            </div>
            <div>
                <input type="submit" name="submit" value="speichern">
            </div>
        </div>
    </form>
`;

shif_comps_create('timer', timer_l2, timer_l3);
