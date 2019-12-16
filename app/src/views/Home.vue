<template>
  <div class="home">
    <div class="HeroBlock bg-gray-300">
      <div class="container flex justify-center items-center h-64">
        <ReservationForm />
      </div>
    </div>
    <div class="container">
      <vehicle-list />
    </div>
  </div>
</template>

<script>
/* eslint-disable */
import VehicleList from "@/components/Vehicles/VehicleList";
import ReservationForm from "@/components/Reservations/ReservationFrom";
export default {
  name: "home",
  data() {
    return {};
  },
  components: {
    VehicleList,
    ReservationForm
  }
};
</script>
