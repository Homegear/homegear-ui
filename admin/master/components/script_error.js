/*
    global
        mixin_print_mounted
*/
/*
    exported
        ShifPageNotFound
*/



const ShifPageNotFound = {
    mixins: [mixin_print_mounted('shif-page-not-found')],

    template: `
        <div class="content content_single">
            <h1>{{i18n('error.title')}}</h1>
            <router-link v-bind:to="{name: 'index'}">
                {{i18n('error.link.text')}}
            </router-link>
        </div>
    `,
};
