import axios from 'axios'
import { api } from '~/config'
import * as types from '../mutation-types'

/**
 * Initial state
 */
export const state = {
  houses: [],
  isLoading: false
}

/**
 * Mutations
 */
export const mutations = {
  [types.SET_HOUSES](state, houses) {
    state.houses = houses;
  },
  [types.SET_LOADING](state, loading) {
    state.isLoading = loading;
  }
}

/**
 * Actions
 */
export const actions = {
  async getHouses({ commit }, query) {
    try {
      commit(types.SET_LOADING, true)
      const { data } = await axios.get(api.path('houses') + '?q=' + query)
      commit(types.SET_HOUSES, data)
      commit(types.SET_LOADING, false)
    } catch (e) {
        console.log('Error loading houses', e);
        commit(types.SET_LOADING, false)
    }
  }
}

/**
 * Getters
 */
export const getters = {
  list: state => state.houses,
  isLoading: state => state.isLoading,
}
