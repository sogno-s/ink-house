<template>
    <div class="img">
        <img alt="bird" src="/img/bird.png">
    </div>
    <div class="text">
        <h2>Реплики картин от <text>Ink. House</text></h2>
        <p>Высокое качество отрисовки на плотной бумаге или льняном холсте. Редкие произведения, доступные цены.</p>
        <div class="btn">
            <ButtonComponent />
        </div>
    </div>
</template>

<script setup>
    import ButtonComponent from './ui-kit/button-component.vue'
</script>

<style scoped>
    .img{
        width: 25rem;
    }
    img{
        width: 100%;
    }
    .text{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        width: 30rem;
    }
    h2 {
        font-size: 2.5rem;

    }
    h2 text{
        color: #598D66;
    }
    p{
        color: #86928B;
    }
    .btn{
        width: 15rem;
        height: 3rem;
    }
</style>