<template>
    <h3 class="title">Ink. House</h3>
    <ul class="nav">
        <li><a>Репродукции</a></li>
        <li><a>Новинки</a></li>
        <li><a>О нас</a></li>
        <li ><a>Корзина</a></li>
    </ul>
</template>

<script>
export default {
  name: 'HeaderComponent'
}
</script>

<style scoped>

    .title{
        color: #598D66;
        font-weight: 700;
    }
    .nav{
        display: flex;
        justify-content: space-between;
        
    }
    .nav li{
      list-style: none;
        margin: 0 1rem; 
    }
</style>