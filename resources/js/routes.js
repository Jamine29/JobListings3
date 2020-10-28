import PageJobIndex from './Pages/Jobs/PageJobIndex.vue';
import PageJobShow from './Pages/Jobs/PageJobShow.vue';
import NotFound from './Pages/Error/NotFound.vue';
import EmptyRouterView from './Layouts/EmptyRouterView.vue';

//import { i18n } from './app.js';

const routes = [
    {
        name:'jobs.show',
        path: '/jobs/1',
        component: PageJobShow,
        children: [
            {
                name:'jobs.show.index',
                path: '/jobs/1/jobs',
                component: PageJobIndex,
            }
        ]
    },
    {
        path: '/jobs',
        component:PageJobIndex
    },
    {
        path: '*',
        component:NotFound
    }
];

export default routes;
