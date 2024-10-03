<script setup>

import {computed} from "vue";

const props = defineProps({
  countries: {
    type: Object,
    required: true
  }
})

console.log(props)

const countryGet = computed(()=> props.countries.country)

// const temp = 'temp'

</script>

<template>
      <input type="button" :value="countryGet">


</template>

<style scoped>

    h2{
      font-size: 23pt;
      font-weight: 600;
      margin-bottom: 1rem;
    }

      input{
        width: 7rem;
        height: 2rem;
        border-radius: 20px;
        background-color: #D4E8D9;
        border: none;
      }

  input:hover{
    background-color: #598D66;
  }
  input:active{
    background-color: #D4E8D9;
    border: 1px solid #598D66;
  }
</style>