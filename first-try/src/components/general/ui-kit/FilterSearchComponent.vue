<script setup>

let temp = 'param';

</script>

<template>
  <div class="container">
      <h2>Репродукции</h2>
      <input type="button" :content="temp">
      <input type="button" :content="temp">
      <input type="button" :content="temp">
  </div>
</template>

<style scoped>

  .container{
    display: flex;
    gap: 2rem;
    & h2{
      font-size: 23pt;
      font-weight: 600;
      margin-bottom: 1rem;
    }
  }
  input{
    width: 7rem;
    border-radius: 10px;
    background-color: #D4E8D9;
    border: none;
  }
  input:hover{
    background-color: #376B44;
  }
  input:active{
    background-color: #D4E8D9;
    border: 1px solid #376B44;
  }
</style>