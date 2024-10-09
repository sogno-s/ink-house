<template>
  <div class="main">
    <Preview/>
  </div>
  <section class="container">
    <h2>Репродукции</h2>
    <div class="filter">
      <FilterSearchComponent v-for="item in countriesGet" :key="item.id" :countries="item" />
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
// import {cards} from "../components/general/card-data.js";
import FilterSearchComponent from "../components/general/ui-kit/FilterSearchComponent.vue";
import  {ref, onMounted} from 'vue'
import {countries} from "../components/general/ui-kit/filter-data.js";
import InfoComponent from "../components/general/InfoComponent.vue";
import axios from "axios";
import {url} from "../main.js";
const countriesGet = ref(countries)

const products = ref([]);
onMounted(async ()=>{
  try{
    const response = await axios.get(`${url}/products`);
    products.value = response.data;
  } catch(error){
    console.error('Ошибка ', error)
  }
})

console.log(countriesGet.value)
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