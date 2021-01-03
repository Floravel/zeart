import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    artworks: [],
    locations: []
  },
  getters: {
    allArtworks: state => state.artworks,
    allLocations: state => state.locations
  },
  mutations: {
    GET_ARTWORKS: (state, artworks) => {
      state.artworks = artworks
    },
    GET_LOCATIONS: (state, locations) => {
      state.locations = locations
    }
  },
  actions: {
    getArtworks ({ commit }) {
      axios.get('http://zeart.test/artworks').then(response => {
        commit('GET_ARTWORKS', response.data)
      })
    },
    getLocations ({ commit }) {
      axios.get('http://zeart.test/locations/list').then(response => {
        commit('GET_LOCATIONS', response.data)
      })
    }
  }
})
