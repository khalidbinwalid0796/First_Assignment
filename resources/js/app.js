require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//router imported
import {routes} from './routes';

//window.Reload = new Vue();

const router = new VueRouter({
  routes,
  mode: 'history' 
})

const app = new Vue({
    el: '#app',
    router
});
