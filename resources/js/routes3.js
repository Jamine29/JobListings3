import PageJobIndex from './Pages/Jobs/PageJobIndex.vue';
import PageJobShow from './Pages/Jobs/PageJobShow.vue';
import NotFound from './Pages/Error/NotFound.vue';
import EmptyRouterView from './Layouts/EmptyRouterView.vue';

//import { i18n } from './app.js';

const routes = [
    {
        path: '/jobs/:id',
        component:PageJobShow
    },
    {
        path: '/:lang',
        component: EmptyRouterView,
        /*,
        beforeEnter(to, from, next) {
            console.log('ir');
            const lang = to.params.lang;
            // redirect to localhost/en when lang is not included
            if(!['en', 'de'].includes(lang)) {
                return next('en');
            }
            if(i18n.local === lang) {
                i18n.local = lang;
            }
            return next();
        },
        */
        children: [
            {
                name: 'jobsIndex',
                path: 'jobs',
                component: PageJobIndex,
                //props: { title: "Prop" }
            },
            {
                name: 'not-found',
                path: '*',
                component: NotFound
            }
        ]
    }
];

export default routes;
