let ShifLog = Vue.component('shif-log', {
    mounted: function () {
        viewLog('<br /><hr />')
    },

    template: `
        <div id="log" class="content content_single">
        </div>
    `
});
