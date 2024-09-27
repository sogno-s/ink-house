<template>
  <div class="container">
    <div class="img">
      <img alt="картина" :src="imgSource">
    </div>
    <div class="text">
      <p>{{ author }}</p>
      <h3>{{ title }}</h3>
      <p>{{ description }} </p>
      <p>{{ price }}</p>
    </div>
    <div class="btn">
      <ButtonComponent/>
    </div>
  </div>
</template>

<script>

import ButtonComponent from "../general/ui-kit/button-component.vue";
export default {
  name: 'CardComponent',
  components: {ButtonComponent},
  props: {
    cards: {
      type: Object,
      required: true
    }
  },
  computed: {
    img() {
      return this.cards.img
    },
    imgSource(){
      // eslint-disable-next-line no-undef
      return `/img/${this.img}`
    },
    author() {
      return this.cards.author
    },
    title() {
      return this.cards.title
    },
    description() {
      return this.cards.description
    },
    price() {
      return this.cards.price
    }
  }
}
</script>

<style scoped>
.container {
  width: 350px;
  height: 730px;
  display: flex;
  flex-direction: column;
  padding: 20px 0px 20px 0px;
  gap: 5px;
  background: #E1EDE6;
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
}

.img {
  width: 310px;
  height: 422px;
  align-self: center;
}

img {
  width: 100%;
  height: 100%;
}

.text {
  margin-left: 20px;
  display: flex;
  flex-direction: column;
  gap: 7px;
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
  width: 310px;
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

