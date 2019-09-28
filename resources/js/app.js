require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import router from './routes';

Vue.component('post-header', require('./components/PostHeader').default);
Vue.component('posts-list', require('./components/PostsList').default);
Vue.component('posts-list-item', require('./components/PostsListItem').default);
Vue.component('nav-bar', require('./components/NavBar').default);
Vue.component('category-link', require('./components/CategoryLink').default);
Vue.component('post-link', require('./components/PostLink').default);

const app = new Vue({
    el: '#app',
    router
});