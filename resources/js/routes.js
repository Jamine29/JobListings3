import ExampleComponent from "./components/ExampleComponent.vue";

const routes = [
    {
        name: 'example',
        path: '/example',
        component: ExampleComponent,
        props: { title: "This is the SPA home" }
    }
];

export default routes;
