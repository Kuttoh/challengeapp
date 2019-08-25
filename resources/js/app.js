/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue'
Vue.use(VueAxios, axios);

import HomeComponent from './components/HomeComponent.vue';
import CreateSupplierComponent from './components/CreateSupplierComponent';
import IndexSupplierComponent from './components/IndexSupplierComponent.vue';
import EditSupplierComponent from "./components/EditSupplierComponent";

const routes = [
    {
        name: 'home',
        path: '/',
        component: HomeComponent
    },
    {
        name: 'createSupplier',
        path: '/createSupplier',
        component: CreateSupplierComponent
    },
    {
        name: 'suppliers',
        path: '/suppliers',
        component: IndexSupplierComponent
    },
    {
        name: 'editSupplier',
        path: '/editSupplier/:id',
        component: EditSupplierComponent
    }
];

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');

// const app = new Vue({
//     el: '#app',
// });
