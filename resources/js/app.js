require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import router from './routes';

// require('vue2-animate/dist/vue2-animate.min.css')

Vue.component('post-header', require('./components/PostHeader').default);
Vue.component('posts-list', require('./components/PostsList').default);
Vue.component('posts-list-item', require('./components/PostsListItem').default);
Vue.component('nav-bar', require('./components/NavBar').default);
Vue.component('category-link', require('./components/CategoryLink').default);
Vue.component('tag-link', require('./components/TagLink').default);
Vue.component('post-link', require('./components/PostLink').default);
Vue.component('disqus-comments', require('./components/DisqusComments').default);
Vue.component('paginator', require('./components/Paginator').default);
Vue.component('pagination-links', require('./components/PaginationLinks').default);
Vue.component('social-links', require('./components/SocialLinks').default);

const app = new Vue({
    el: '#app',
    router
});