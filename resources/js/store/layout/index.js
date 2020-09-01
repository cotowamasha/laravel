import * as TYPES from './types'

export default {
    namespaced: true,
    state: {
        search: {
            bg: false,
            box: false
        }
    },
    mutations: {
        [TYPES.CHANGE_STATE] (state, payload) {
            state[payload.type] = payload.data
        }
    }
}
