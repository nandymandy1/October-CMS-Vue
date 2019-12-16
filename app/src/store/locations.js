/* eslint-disable */
import { axGe } from "@/services/api";

const state = {
  pickup: "",
  dropoff: "",
  locations: [],
  location: null,
  filteredVehicles: [],
  filteredVehiclesApi: []
};

const getters = {
  pickup: state => state.pickup,
  dropoff: state => state.dropoff,
  location: state => state.location,
  allLocations: state => state.locations,
  filteredVehicles: state => state.filteredVehicles,
  filteredVehiclesApi: state => state.filteredVehiclesApi
};

const actions = {
  async getLocations({ commit }) {
    let payload = await axGe("/locations-list");
    commit("GET_LOCATIONS", payload);
  },

  filterVehicles({ commit, rootState, state }) {
    let { vehicles } = rootState.Vehicles;

    const filtered = vehicles.filter(vehicle => {
      let foundLocations = vehicle.locations.findIndex(location => {
        return location.id === state.location;
      });
      return foundLocations !== -1;
    });

    const filteredVehicles = [];

    filtered.forEach(vehicle => {
      if (vehicle.dates.length > 0) {
        const overlaps = [];
        vehicle.dates.forEach(date => {
          const startDate1 = new Date(date.pickup);
          const endDate1 = new Date(date.drop_off);
          const startDate2 = new Date(state.pickup);
          const endDate2 = new Date(state.dropoff);
          overlaps.push(startDate1 < endDate2 && startDate2 < endDate1);
        });
        if (overlaps.includes(true)) {
          filteredVehicles.push(vehicle);
        }
        return;
      }

      filteredVehicles.push(vehicle);
    });

    commit("SET_FILTERED_VEHICLES", filteredVehicles);
  },

  async filterVehiclesApi({ commit }, value) {
    let payload = await axGe(`vehicles-filter/${value}`);
    commit("SET_FILTERED_VEHICLES_API", payload);
  },

  setLocation({ commit }, value) {
    commit("SET_LOCATION", value);
  },

  setDates({ commit }, date) {
    if (date.type === "pickup") {
      commit("SET_PICKUP", date.value);
      return;
    }

    commit("SET_DROP_OFF", date.value);
    return;
  }
};

const mutations = {
  GET_LOCATIONS: (state, locations) => {
    state.locations = [...locations];
  },

  SET_FILTERED_VEHICLES: (state, payload) => {
    state.filteredVehicles = [...payload];
  },

  SET_FILTERED_VEHICLES_API: (state, payload) => {
    state.filteredVehiclesApi = [...payload];
  },

  SET_LOCATION: (state, payload) => {
    state.location = payload;
  },

  SET_PICKUP: (state, payload) => {
    state.pickup = payload;
  },

  SET_DROP_OFF: (state, payload) => {
    state.dropoff = payload;
  }
};

export default {
  state,
  getters,
  actions,
  mutations,
  namespaced: true
};
