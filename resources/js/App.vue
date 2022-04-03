<!-- component -->
<template>
    <!-- component -->
<button @click="next">Next</button>

	<button @click="greet">Greet</button>

</template>
<script>
export default {
  data() {
    return {
      name: 'Vue.js'
    }
  },
  methods: {
    greet(event) {
      // `this` inside methods points to the current active instance
      alert(`Hello ${this.name}!`)
      // `event` is the native DOM event
      if (event) {
        alert(event.target.tagName)
      }
    }
  }
}

</script>
