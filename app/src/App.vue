<template>
  <div id="app">
    <Navbar />
    <router-view />
  </div>
</template>

<script>
/* eslint-disable */
import Navbar from "@/components/Navbar/Navbar";
export default {
  components: {
    Navbar
  },
  mounted() {
    this.$store.dispatch("Vehicles/getVehicles");
    this.$store.dispatch("Locations/getLocations");
  }
};
</script>
