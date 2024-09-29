<script setup>
// eslint-disable-next-line no-unused-vars
import { RouterLink, RouterView } from 'vue-router'
import HeaderComponent from './components/HeaderComponent.vue'
import MainPage from './components/MainPage.vue'
</script>

<template>
  <header class="header">
    <HeaderComponent />
    </header>
  
  <main class="main">
    <section>
      <MainPage/>
      </section>
      </main>
  <RouterView />
</template>

<style scoped>
@import './assets/main.css';

  .header{
    padding: 25px 165px 0px 165px;
    max-width: 1280px;
    height: 5rem;
    margin: 0 auto;
    background: #E1EDE6;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    margin-bottom: 1.5rem;
  }

  .main{
    max-width: 1280px;
    margin: 0 auto;
  }

  
</style>
