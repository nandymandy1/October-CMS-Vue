<template>
  <div class="ReservationForm p-5 bg-white flex items-end">
    <div class="mr-4">
      <input-select :options="locations" label="Pickup Location" @onSelect="setLocation" />
    </div>
    <div class="mr-4">
      <label for>Pickup Date</label>
      <Datetime
        id="pickup-date"
        type="datetime"
        input-class="block appreance-none w-full bg-gray-300 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray mt-2"
        :min-datetime="now"
        @input="setDate($emit, 'pickup')"
      />
    </div>
    <div class="mr-4">
      <label for>Drop Off Date</label>
      <Datetime
        id="dropoff-date"
        type="datetime"
        input-class="block appreance-none w-full bg-gray-300 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray mt-2"
        :min-datetime="now"
        @input="setDate($emit, 'dropoff')"
      />
    </div>
    <button
      class="bg-green-400 text-white font-bold py-3 px-4 rounded ml-1"
      @click="filterVehicles"
    >Search</button>
  </div>
</template>

<script>
/* eslint-disable */
import { mapGetters } from "vuex";
import { Datetime } from "vue-datetime";
import InputSelect from "@/components/Forms/InputSelect";

export default {
  components: {
    InputSelect,
    Datetime
  },

  computed: {
    ...mapGetters({
      locations: "Locations/allLocations"
    }),
    now() {
      return new Date(Date.now()).toISOString();
    }
  },

  methods: {
    filterVehicles() {
      this.$store.dispatch("Locations/filterVehicles");
    },

    filtervehiclesApi(value) {
      this.$store.dispatch("Locations/filterVehiclesApi", +value);
    },

    setLocation(locationID) {
      this.$store.dispatch("Locations/setLocation", +locationID);
    },

    setDate(value, type) {
      this.$store.dispatch("Locations/setDates", { value, type });
    }
  }
};
</script>
