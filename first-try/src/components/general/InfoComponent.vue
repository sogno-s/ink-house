<script setup>

</script>

<template>
  <div class="background">
    <div class="content">
      <h2>Новая коллекция французских авторов</h2>
      <p>Сложно сказать, почему акционеры крупнейших компаний призывают нас к новым свершениям, которые, в свою очередь, должны быть заблокированы в рамках своих собственных рациональных ограничений. </p>
      <p>Принимая во внимание показатели успешности, граница обучения кадров предопределяет высокую востребованность направлений прогрессивного развития.</p>
      <button>Ознакомиться</button>
    </div>
   >
  </div>
</template>

<style scoped>
  .background{
    position: relative;
    display: flex;
    align-items: center;
    height: 35rem;
    overflow: hidden;
  }
  .background::before{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background-image: url("/img/background.jpeg");
    background-size: cover;
    background-position: center 30%;
    transform: scaleX(-1);
    z-index: -1;
    filter: brightness(80%);
  }
  .background::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Затемнение */
    z-index: 0; /* Помещаем затемнение над фоном, но под контентом */
  }
  .content{
    text-align: left;
    padding: 2rem;
    max-width: 33rem;
    z-index: 1; /* Помещаем контент над псевдоэлементом */
    color: #f2f2f2;
  }
</style>