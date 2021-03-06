/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue Components. It will recursively scan this directory for the Vue
 * Components and automatically register them with their "basename".
 *
 * Eg. ./Components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./Components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding Components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import moment from 'moment';

Vue.filter('dateFormat', function(date) {
    return moment(date).locale('en').format('dddd, Do MMMM YYYY');
})

import Vue from 'vue';
import VueI18n from 'vue-i18n';
import messages from './Lang/translations/indexLang.js';

Vue.use(VueI18n);
export const i18n = new VueI18n({
    locale:'en',
    fallbackLocal: 'en',
    messages
});

import axios from 'axios';
import { Model } from 'vue-api-query';

Model.$http = axios;

import VueRouter from 'vue-router';
import routes from './routes.js';

Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

import AppLayout from './Layouts/AppLayout.vue';

const app = new Vue({
    router,
    i18n,
    el: '#app',
    components: { AppLayout },
});
