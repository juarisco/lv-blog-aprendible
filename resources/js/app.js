require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import router from './routes';

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router
});