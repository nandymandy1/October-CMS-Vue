/* eslint-disable */
import { axGe } from "@/services/api";

const state = {
  vehicles: [],
  currentVehicle: {}
};

const getters = {
  allVehicles: state => state.vehicles,
  currentVehicle: state => state.currentVehicle
};

const actions = {
  async getVehicles({ commit }) {
    let payload = await axGe("/vehicles");
    commit("GET_VEHICLES", payload);
  },

  getVehicle({ commit, state }, slug) {
    let playload = state.vehicles.find(vehicle => vehicle.slug === slug);
    commit("SET_CURRENT_VEHICLE", playload);
  }
};

const mutations = {
  GET_VEHICLES: (state, payload) => {
    state.vehicles = [...payload];
  },

  SET_CURRENT_VEHICLE: (state, payload) => {
    state.currentVehicle = payload;
  }
};

export default {
  state,
  getters,
  actions,
  mutations,
  namespaced: true
};
