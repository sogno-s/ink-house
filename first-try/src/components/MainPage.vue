<template>
  <div class="main">
    <Preview/>
  </div>
  <section>
    <FilterSearchComponent/>
  </section>
  <div class="view_card">
    <CardComponent v-for="card in cardsRef" :key="card.id" :cards="card" />
  </div>

</template>
<script setup>
import CardComponent from './general/CardProduct.vue'
import Preview from '../components/general/SectionPreview.vue'
import {cards} from "../components/general/card-data.js";
import FilterSearchComponent from "../components/general/ui-kit/FilterSearchComponent.vue";
import  {ref} from 'vue'

const cardsRef = ref(cards)
</script>
<style scoped>
@import '../assets/main.css';
  .main {
    display: flex;
    max-width: calc(1440px - 340px);
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin: 0 auto 1rem;
  }

    .view_card{
        display: flex;
        justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
    }
</style>