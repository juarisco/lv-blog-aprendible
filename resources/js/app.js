require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import router from './routes';

Vue.component('post-header', require('./components/PostHeader.vue').default);
Vue.component('nav-bar', require('./components/NavBar.vue').default);

const app = new Vue({
    el: '#app',
    router
});