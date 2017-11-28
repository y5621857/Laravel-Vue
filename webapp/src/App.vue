<template>
  <div id="app">
    <transition enter-active-class="animated jello">
      <router-view/>
    </transition>
  </div>
</template>

<script>
  export default {
    name: 'app'
  }
</script>

<style>
</style>
