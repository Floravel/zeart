<template>
  <div>
    <h2 class="text-3xl">Artwork List</h2>
    <ol v-for="(artwork, index) in artworks" :key="index">
      <li>
        {{artwork.title}}
      </li>
    </ol>
  </div>
</template>

<script>
export default {
  props: {
    artworks: {
      type: Array,
      default: () => []
    }
  }
}
</script>

<style scoped>

</style>
