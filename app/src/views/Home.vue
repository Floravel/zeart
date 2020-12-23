<template>
  <div class="home">
    <p>Whats UPPPPP!?</p>
  </div>
</template>

<script>
// eslint-disable-next-line no-unused-vars
import axios from 'axios'

export default {
  name: 'Home',
  mounted () {
    axios.get('http://zeart.test/artworks').then(response => {
      console.log(response.data)
    })
  }
}
</script>
