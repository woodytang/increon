/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

import App from './App.vue';
import MintUI from 'mint-ui';
import 'mint-ui/lib/style.css';

import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.use(MintUI);

//const list = resolve => require(['./components/list.vue'], resolve);
//const brand = resolve => require(['./components/brand.vue'], resolve);
import list from './components/list.vue';
import brand from './components/brand.vue';

const routes = [{
    path: '/brand',
    component: brand
},{
    path: '/list',
    component: list
},{ path: '/', redirect:'/list'}
];

const router = new VueRouter({
    routes
});


const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App)
});
