<script setup>
import {ref} from "vue";

const emit = defineEmits(['close']);

const props = defineProps({
  isVisible: {
    type: Boolean,
    required:true,
  },
})

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
        <div class="email-input">
          <label>Адрес электронной почты</label>
          <input type="email" id="email" v-model="email">
        </div>
        <div class="password-input">
          <label>Пароль</label>
          <input type="password" id="password" v-model="password">
        </div>
        <button type="submit">Войти</button>
      </form>
      <button @click="closeModal">Закрыть</button>
    </div>
  </div>
</template>

<style scoped>
  .modal-overlay{
    position: fixed;
    width: 25rem;
    height: 35rem;
    background: #D4E8D9;
    border: 1px solid #376B44;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    padding: 2px;
    z-index: 10000;
  }

  .modal-content{
    display: flex;
    flex-direction: column;
    gap: 5rem;
  }

  .email-input{
    display: flex;
    flex-direction: column;
  }

  .password-input{
    display: flex;
    flex-direction: column;
  }

  .modal-content form{
    display: flex;
    flex-direction: column;
    gap: 2rem;
  }

</style>