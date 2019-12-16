/* eslint-disable */
import Vue from "vue";
import Vuex from "vuex";
import Vehicles from "./vehicles";
import Locations from "./locations";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {},
  mutations: {},
  actions: {},
  modules: {
    Vehicles,
    Locations
  }
});
