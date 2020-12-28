<template>
  <div class="home">
    <div class="HeroBlock bg-gray-300 h-screen">
      <div class="container flex justify-center items-center h-screen">
        <reservation-form/>
      </div>
    </div>
  </div>
</template>

<script>
// eslint-disable-next-line no-unused-vars
import CustomButton from '../components/Button'
// import ArtworkList from '../components/ArtworkList'
import ReservationForm from '@/components/ReservationForm'

export default {
  name: 'Home',

  components: {
    // ArtworkList,
    // CustomButton
    ReservationForm
  }
}
</script>
