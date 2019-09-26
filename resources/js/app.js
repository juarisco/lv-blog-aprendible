require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

let router = new Router({
    routes: [
        {
            path: '/',
            component: {
                template: '<div>Este es el home</div>'
            }
        },
        {
            path: '/nosotros',
            component: {
                template: '<div>Este es el nosotros</div>'
            }
        },
        {
            path: '/archivo',
            component: {
                template: '<div>Este es el archivo</div>'
            }
        },
        {
            path: '/contacto',
            component: {
                template: '<div>Este es el contacto</div>'
            }
        },
    ]
})

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router
});