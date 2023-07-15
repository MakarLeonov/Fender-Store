<script setup>
import MyHeader from './components/MyHeader.vue';
import MyFooter from './components/MyFooter.vue';
</script>

<template>
  <div>
    <my-header />
    <router-view></router-view>
    <my-footer />
  </div>
</template>

<style>

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  background: #646464;
}
</style>
