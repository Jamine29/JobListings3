import JobsCreate from './Pages/Jobs/Create.vue';
import JobsUpdate from './Pages/Jobs/Update.vue';
import JobsIndex from './Pages/Jobs/Index.vue';
import JobsShow from './Pages/Jobs/Show.vue';
import NotFound from './Pages/Error/NotFound.vue';

const routes = [
    {
        name: 'jobsIndex',
        path: '/jobs',
        component: JobsIndex,
        //props: { title: "This is the SPA home" }
    },
    {
        name: 'jobsShow',
        path: '/jobs/:id',
        component: JobsShow
    },
    {
        name: 'jobsCreate',
        path: '/jobs/create',
        component: JobsCreate
    },
    {
        name: 'jobsUpdate',
        path: '/jobs/update',
        component: JobsUpdate
    },
    {
        name: 'not-found',
        path: '*',
        component: NotFound
    }
];

export default routes;
