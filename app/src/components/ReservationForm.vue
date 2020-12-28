<template>
  <div class="ReservationForm p-5 bg-white w-1/2">
    <input-select :label="'Abholstandort'" :options="[
      {
        label: 'Dresden',
        value: 1
      },
      {
        label: 'Berlin',
        value: 2
      },
      {
        label: 'Mückenwiese',
        value: 3
      }
    ]"/>
  </div>
</template>

<script>
import InputSelect from './forms/InputSelect'

export default {
  components: {
    // eslint-disable-next-line vue/no-unused-components
    InputSelect
  }
}
</script>
