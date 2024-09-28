<template>
  <div>
    <Preview/>
  </div>

  <div class=container>
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
    .container{
        display: flex;
        justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
    }
</style>