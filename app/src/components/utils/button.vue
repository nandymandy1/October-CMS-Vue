<template>
  <button
    class="py-3 px-5 text-white text-2xl"
    :class="{ 'bg-black': dark, 'bg-gray-500': !dark }"
  >
    Something
  </button>
</template>

<script>
/* eslint-disable */
export default {
  name: "Button",
  props: {
    dark: {
      type: Boolean,
      default: false
    }
  }
};
</script>
