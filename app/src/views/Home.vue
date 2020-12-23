<template>
  <div class="home">
    <custom-button/>
    <custom-button dark/>
    <artwork-list />
  </div>
</template>

<script>
// eslint-disable-next-line no-unused-vars
import CustomButton from '../components/Button'
import ArtworkList from '../components/ArtworkList'

export default {
  name: 'Home',

  components: {
    ArtworkList,
    CustomButton
  }
}
</script>
