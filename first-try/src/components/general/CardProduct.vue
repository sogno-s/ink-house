<template>
  <div class="container">
    <div class="img">
      <img :alt="title" :src="imgSource">
    </div>
    <div class="text">
      <p>{{ author }}</p>
      <h3>{{ title }}</h3>
      <p>{{ description }} </p>
      <p>{{ price }}</p>
    </div>
    <div class="btn">
      <ButtonComponent title-btn="В корзину"/>
    </div>
  </div>
</template>

<script setup>
import ButtonComponent from "./ui-kit/ButtonComponent.vue";
import {computed} from "vue";

const props = defineProps({
  cards: {
    type: Object,
    required: true
  }
})

let img = null
const imgSource = computed(() => img);
const author = computed(() => props.cards.author);
const title = computed(() => props.cards.title);
const description = computed(() => props.cards.description);
const price = computed(() => props.cards.price);

if (props.cards.linkToImage === null){
  img = 'img/notloaded.jpg'
}else{
  img = computed(()=> props.cards.linkToImage);
}

</script>


<style scoped>
.container {
  width: 25em;
  display: flex;
  flex-direction: column;
  padding: 20px 0px 20px 0px;
  background: #E1EDE6;
  gap: 1rem;
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
}

.img {
  width: 20em;
  align-self: center;
}

img {
  width: 100%;
  height: 100%;
}

.text {
  margin-left: 2.5rem;
  display: flex;
  flex-direction: column;
  //gap: 7px;
  align-self: flex-start;
}

p {
  font-size: 13pt;
}

.text p:first-of-type {
  color: #86928B;
}

.text p:last-of-type {
  color: #598D66;
  font-weight: 500;
}

h3 {
  font-size: 24pt;
}

.btn {
  width: calc( 23rem - 2.5rem);
  height: 65px;
  align-self: center;
}

button {

  color: #598D66;
  width: 100%;
  height: 100%;
  border: 1px solid #598D66;
  background: transparent;
}


</style>

