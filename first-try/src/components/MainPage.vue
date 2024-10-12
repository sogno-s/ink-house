<template>
  <section class="main">
    <Preview/>
  </section>
  <section class="container">
    <h2>Репродукции</h2>
    <div class="filter">
      <FilterSearchComponent v-for="item in categories" :key="item.id" :countries="item" />
    </div>
  </section>
  <section class="container">
    <CardComponent v-for="card in products" :key="card.id" :cards="card" />
  </section>
  <section>
    <InfoComponent/>
  </section>
</template>

<script setup>
import CardComponent from './general/CardProduct.vue'
import Preview from '../components/general/SectionPreview.vue'
import FilterSearchComponent from "../components/general/ui-kit/FilterSearchComponent.vue";
import  {ref, onMounted} from 'vue'
import InfoComponent from "../components/general/InfoComponent.vue";
import axios from "axios";
import {url} from "../main.js";


const categories = ref([]);
onMounted(async ()=> {
    await  axios.get(`${url}/products/categories`)
        .then(response=>{
          categories.value = response.data;
        })
        .catch(error => {
          console.error('Ошибка ', error);
        })
})

const products = ref([]);
onMounted(async ()=>{
  await axios.get(`${url}/products`)
      .then(response => {
        products.value = response.data;
      })
      .catch(error => {
        console.error('Ошибка ', error)
      })
})


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

  .filter{
    display: flex;
    gap: 2rem;
  }

    .container{
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;

      margin-bottom: 1em;
    }
</style>