<template>
  <div class="container pt-8">
    <div class="rounded overflow-hidden shadow-lg p-8">
      <div class="mb-8">
        <img class="w-full" :src="vehicle.image.path" />
      </div>
      <div class="flex">
        <div class="CarDetails w-1/2 p-8">
          <div class="font-bold text-xl mb-2">{{ vehicle.title }}</div>
          <p class="text-grey-darker text-base mb-4" v-html="vehicle.description" />

          <h3 class="mb-4">Available in:</h3>
          <span
            class="inline-block bg-gray-400 rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2"
            v-for="location in vehicle.locations"
            :key="location.index"
          >{{ location.title }}</span>
        </div>

        <div class="CarPrices w-1/2 p-8 border-l">
          <ul class="mb-4">
            <li>
              <strong>By Day:</strong>
              Rs. {{vehicle.price}}
            </li>
            <li>
              <strong></strong>
            </li>
            <li>
              <strong></strong>
            </li>
          </ul>
          <!-- <router-link
            class="bg-green text-white font-bold py-3 px-4 rounded ml-4 inline-block"
            :to="{ name: 'Reservation' }"
          >Continue</router-link>-->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
/* eslint-disable */
import { DateTime } from "luxon";
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters({
      pickupDate: "Locations/pickup",
      dropOffDate: "Locations/dropoff",
      vehicle: "Vehicles/currentVehicle"
    }),

    dates() {
      const start = DateTime.fromISO(this.pickupDate);
      const end = DateTime.fromISO(this.dropOffDate);
      const daysBetween = end.diff(start, ["days"]);
      console.log(daysBetween);
      // const price = this.vehicle.price * daysBetween.values.days;
      return {
        end,
        start
        // price,
        // daysBetween
      };
    }
  },

  beforeMount() {
    let { slug } = this.$route.params;
    this.$store.dispatch("Vehicles/getVehicle", slug);
    console.log(this.dates);
  }
};
</script>
