import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    artworks: []
  },
  getters: {
    allArtworks: state => state.artworks
  },
  mutations: {
    GET_ARTWORKS: (state, artworks) => {
      state.artworks = artworks
    }
  },
  actions: {
    getArtworks ({ commit }) {
      axios.get('http://zeart.test/artworks').then(response => {
        commit('GET_ARTWORKS', response.data)
      })
    }
  }
})
