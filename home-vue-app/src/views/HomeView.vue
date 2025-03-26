<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
    <h2>Radio</h2>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'HomeView',
  components: {
    HelloWorld
  }, 
  methods : {
    sendMessage() { 
      this.$emit('message-sent', {
        message : 'Mon magnifique message', 
      }) 
    }
  }
}
</script>
