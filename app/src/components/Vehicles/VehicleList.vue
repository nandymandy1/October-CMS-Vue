<template>
  <div class="flex justify-between flex-wrap mt-4">
    <Vehicle
      v-for="vehicle in filteredVehicles"
      :description="vehicle.description"
      :available="vehicle.available"
      :image="vehicle.image.path"
      :title="vehicle.title"
      :price="vehicle.price"
      :slug="vehicle.slug"
      :key="vehicle.id"
    />
  </div>
</template>

<script>
/* eslint-disable */
import { mapGetters } from "vuex";
import Vehicle from "./Vehicle";

export default {
  components: {
    Vehicle
  },
  computed: {
    ...mapGetters({
      filteredVehicles: "Locations/filteredVehicles",
      filteredVehiclesApi: "Locations/filteredVehiclesApi"
    })
  }
};
</script>
