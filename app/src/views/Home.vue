<template>
  <div class="home">
    <custom-button/>
    <custom-button dark/>
    <artwork-list :artworks="artworks"/>
  </div>
</template>

<script>
// eslint-disable-next-line no-unused-vars
import axios from 'axios'
import CustomButton from '../components/Button'
import ArtworkList from '../components/ArtworkList'

export default {
  name: 'Home',
  data () {
    return {
      artworks: []
    }
  },
  components: {
    ArtworkList,
    CustomButton
  },
  mounted () {
    axios.get('http://zeart.test/artworks').then(response => {
      console.log(response.data)
      this.artworks = response.data
    })
  }
}
</script>
