<template>
  <span
    class="inline-block rounded-full px-3 py-1 text-sm font-semibold text-white mr-2"
    :class="{ 'bg-green-500': available, 'bg-myRed': !available }"
  >
    {{ available ? "Available" : "Not Available" }}
  </span>
</template>

<script>
/* eslint-disable */
export default {
  props: {
    available: {
      type: Number,
      default: 1
    }
  }
};
</script>
