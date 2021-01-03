<template>
  <div class="ReservationForm p-5 bg-white w-1/2">
    <input-select :label="'Abholstandort'" :options="locations"/>
  </div>
</template>

<script>
import InputSelect from './forms/InputSelect'

export default {
  components: {
    // eslint-disable-next-line vue/no-unused-components
    InputSelect
  },

  computed: {
    locations () {
      return this.$store.getters.allLocations
    }
  }
}
</script>
