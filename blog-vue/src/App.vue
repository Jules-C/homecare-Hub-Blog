<template>
  <div>
    <Navbar />
    <div
      style="min-height: 60vh"
      class="mt-10 max-w-4xl mx-auto py-25, px-4 sm:px-6 lg:px-8"
    >
      <router-view />
    </div>
    <div style="margin-top: 2em; bottom: 0; width: 100%">
      <Footer />
    </div>
  </div>
</template>

<script setup>
import Navbar from "./components/Navbar.vue"
import Footer from "./components/Footer.vue"
// This starter template is using Vue 3 <script setup> SFCs
// Check out https://vuejs.org/api/sfc-script-setup.html#script-setup
</script>
<style scoped></style>
