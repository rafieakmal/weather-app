import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
      weatherdata: {},

      quoteOrigin: 'placeholder',
      quotePosition: 'bottom-center',
      quoteColor: '#00cc00',
      quoteProgress: 'auto',
      quoteDuration: '2500',
      quoteBorder: '#FFFFFF',
      quoteText: 'placeholder',

      loadingTime: 2500,
      loadingType: 'circles',
      loadingText: 'Loading...',
      loadingColor: '#311e8e',
    },
    getters: {
      //
    },
    mutations: {
      addQuoteText(state, newQuote) {
        state.quoteText = newQuote
      },
      
      addQuoteOrigin(state, newOrigin) {
        state.quoteOrigin = newOrigin
      },

      addWeatherData(state, newPost) {
        state.weatherdata = newPost
      },
    }
})

export default store;