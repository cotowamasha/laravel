window.Vue = require('vue')

import store from './store'

let HeaderPart = require('./components/layout/header')
let FooterPart = require('./components/layout/footer')
let IndexPage = require('./pages/index')
let AboutPage = require('./pages/about')
let ContactsPage = require('./pages/contacts')
let ErrorPage = require('./pages/error')
let SearchModal = require('./components/modals/search')
let CategoryPage = require('./pages/category')
let SinglePage = require('./pages/single')
let FormPage = require('./pages/form')
let AdminPage = require('./pages/admin')
let ChangePage = require('./pages/change')

const app = new Vue({
    el: '#app',
    store,
    components: {
        HeaderPart: h => h(HeaderPart),
        FooterPart: h => h(FooterPart),
        IndexPage: h => h(IndexPage),
        AboutPage: h => h(AboutPage),
        ContactsPage: h => h(ContactsPage),
        ErrorPage: h => h(ErrorPage),
        SearchModal: h => h(SearchModal),
        CategoryPage: h => h(CategoryPage),
        SinglePage: h => h(SinglePage),
        FormPage: h => h(FormPage),
        AdminPage: h => h(AdminPage),
        ChangePage: h => h(ChangePage)
    }
});

