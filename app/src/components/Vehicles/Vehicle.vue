<template>
  <div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" :src="image" alt="" />
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ title }}</div>
      <p
        v-if="description"
        class="text-gray-700 text-base"
        v-html="description"
      ></p>
    </div>
    <div class="px-6 py-4">
      <router-link
        class="btn btn-sm bg-blue-500 text-white p-3 mr-2"
        :to="{ name: 'vehicleDetail', params: { slug: slug } }"
        >More Details</router-link
      >
      <span
        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
        >Rs.{{ price }}/day</span
      >
      <Available :available="available" />
    </div>
  </div>
</template>

<script>
/* eslint-disable */
import Available from "./AvailabilityBadge";
export default {
  components: {
    Available
  },
  props: {
    title: {
      type: String,
      required: true
    },
    description: {
      type: String,
      default: ""
    },
    price: {
      type: Number,
      required: true
    },
    image: {
      type: String,
      required: true
    },
    available: {
      type: Number,
      default: 1
    },
    slug: {
      type: String,
      required: true
    }
  }
};
</script>
