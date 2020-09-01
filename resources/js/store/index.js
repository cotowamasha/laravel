window.Vue = require('vue')
window.Vuex = require('vuex')

import layout from "./layout"

export default new Vuex.Store({
    modules: {
        layout
    }
})
