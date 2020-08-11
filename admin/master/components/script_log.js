/*
    global
        viewLog
*/
/*
    exported
        ShifLog
*/



let ShifLog = Vue.component('shif-log', {
    mounted: function () {
        viewLog('-----------------------------');
    },

    template: `
        <pre id="log" class="content content_single">
        </pre>
    `
});
