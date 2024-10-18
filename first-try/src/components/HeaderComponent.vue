<template>
    <div class="container">
        <h3 class="title">Ink. House</h3>
        <nav class="nav">
            <a class="nav-item">Репродукции</a>
            <a>Новинки</a>
            <a>О нас</a>
            <a>Корзина</a>
            <a class="auth" @click="openModal" >Войти</a>
        </nav>
    </div>
  <AuthModalWindow :isVisible="isModalVisible" @close="closeModal"/>
</template>

<script setup>
import {ref} from "vue";
import AuthModalWindow from "../components/modal/AuthModalWindow.vue";

console.log('HeaderComponent rendered')

const isModalVisible = ref(false);

const openModal = () =>{
  isModalVisible.value = true;
}

const closeModal = () =>{
  isModalVisible.value = false;
}

</script>

<style scoped lang="scss">

    .container{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .title{
        color: #598D66;
        font-weight: 700;
    }
    .nav{
        display: flex;

      &-item {

      }
    }
    .nav a{
      list-style: none;
        margin: 0 1rem; 
    }
</style>