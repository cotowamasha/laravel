// require('./bootstrap');
window.Vue = require('vue')

import VueRouter from 'vue-router';
import router from './router';
import defaultLayout from './layouts/default';


Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    render: h => h(defaultLayout),
    router
});


