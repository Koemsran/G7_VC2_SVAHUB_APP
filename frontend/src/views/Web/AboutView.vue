<template>
  <WebHeaderMenu></WebHeaderMenu>
  <AboutPage />
  <CardCom></CardCom>

  <WebFooter></WebFooter>
</template>

<script setup lang="ts">
import WebHeaderMenu from '@/Components/WebHeaderMenu.vue'
import WebFooter from '../../Components/WebFooter.vue'
import AboutPage from '@/Components/Bodies/AboutPage.vue'
import CardCom from '../../Components/Cards/CardCom.vue'
</script>

<style scoped>
html,
body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}
</style>
