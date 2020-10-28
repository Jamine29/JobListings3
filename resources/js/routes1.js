import PageJobIndex from './Pages/Jobs/PageJobIndex.vue';
import NotFound from './Pages/Error/NotFound.vue';

const routes = [
            {
                name: 'jobsIndex',
                path: '/jobs',
                component: PageJobIndex
            },
            {
                name: 'jobsIndex',
                path: '/company',
                component: PageJobIndex,
                //props: { title: "Prop" }
            },
            {
                name: 'jobsShow',
                path: '/jobs/:id',
                component: PageJobIndex
            },
            {
                name: 'jobsCreate',
                path: '/jobs/create',
                component: PageJobIndex
            },
            {
                name: 'jobsUpdate',
                path: '/jobs/update',
                component: PageJobIndex
            },
            {
                name: 'not-found',
                path: '*',
                component: NotFound
            }

];

export default routes;
