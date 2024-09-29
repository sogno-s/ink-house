<template>
  <div class="main">
    <Preview/>
  </div>
  <div>
    <h2>Репродукции</h2>
  </div>
  <div class="view_card">
    <CardComponent v-for="(card, index ) in cards" :key="index" :cards="card" />
  </div>

</template>
<script>
import CardComponent from '../components/general/card-product.vue'
import Preview from '../components/general/SectionPreview.vue'
    import {cards} from "../components/general/card-data.js";

    export default {
      components:{
        CardComponent,
        Preview
  },
      data(){
        return {
          cards
        }
      }
    }
</script>
<style scoped>
@import '../assets/main.css';
  .main {
    display: flex;
    margin: 0 auto;
    max-width: calc(1440px - 340px);
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 1rem;
  }
  h2{
    font-size: 23pt;
    font-weight: 600;
    margin-bottom: 1rem;
  }
    .view_card{
        display: flex;
        justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
    }
</style>