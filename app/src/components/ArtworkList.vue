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
  computed: {
    artworks () {
      return this.$store.getters.allArtworks
    }
  },
  mounted () {
    this.$store.dispatch('getArtworks')
  }
}
</script>

<style scoped>

</style>
