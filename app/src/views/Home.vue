<template>
  <div class="home">
    <custom-button/>
    <custom-button dark/>
    <custom-button/>
  </div>
</template>

<script>
// eslint-disable-next-line no-unused-vars
import axios from 'axios'
import CustomButton from '../components/Button'

export default {
  name: 'Home',
  components: {
    CustomButton
  },
  mounted () {
    axios.get('http://zeart.test/artworks').then(response => {
      console.log(response.data)
    })
  }
}
</script>
