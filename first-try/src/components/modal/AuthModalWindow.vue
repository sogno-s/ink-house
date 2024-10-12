<script setup>
import {ref} from "vue";
import ButtonComponent from "../general/ui-kit/ButtonComponent.vue";

const emit = defineEmits(['close']);

const props = defineProps({
  isVisible: {
    type: Boolean,
    required:true,
  },
})

// const titleBtn = 'Войти'

const email = ref('')
const password = ref('')

const closeModal = () =>{
  emit('close')
}
</script>

<template>
  <div v-if="isVisible" class="modal-overlay" @click="closeModal">
    <div class="modal-content" @click.stop>
      <h2>Вход</h2>
      <form>
        <div class="content">
          <label>Адрес электронной почты</label>
          <input placeholder="example@example.com" type="email" id="email" v-model="email">
        </div>
        <div class="content">
          <label>Пароль</label>
          <input placeholder="*********" type="password" id="password" v-model="password">
        </div>
        <div class="btn">
          <ButtonComponent title-btn="Войти" />
        </div>
      </form>
      <button @click="closeModal">Закрыть</button>
    </div>
  </div>
</template>

<style scoped>
  .modal-overlay{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0, .7);
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    padding: 2px;
  }

  .modal-content{
    display: flex;
    flex-direction: column;
    gap: 5rem;
    width: 25rem;
    height: 35rem;
    background: #D4E8D9;
    z-index: 10000;
    border-radius: 5px;
    align-items: center;
    justify-content: center;
  }

  h2{
    text-align: center;
    text-decoration: underline #0b2e13;
    text-underline-offset: 1rem;
    width: 20rem;
  }

  .btn{
    width: 15rem;
    height: 1.8rem;
  }

  .content{
    display: flex;
    flex-direction: column;

    gap: 6px;
    max-width: 30rem;
  }

  .modal-content form{
    display: flex;
    flex-direction: column;
    gap: 2rem;
  }

  input{
    height: 1.9rem;
    border-radius: 5px;
    outline: none;
    border-color: transparent;
    padding: 5px;
  }
  input::placeholder{
    color: #376B44;
  }

</style>