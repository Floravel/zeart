<template>
  <div id="app">
    <Navbar/>
    <router-view/>
  </div>
</template>

<script>
import Navbar from '@/components/NavBar'

export default {
  components: {
    Navbar
  },

  mounted () {
    this.$store.dispatch('getLocations')
  }
}
</script>
