<script setup>
import { ref } from "vue";
import ButtonComponent from "../general/ui-kit/ButtonComponent.vue";
import loginUser from "../../requests/authRequest.js";
import { useRouter } from "vue-router";
import ErrorPopup from "../modal/ErrorPopup.vue";

const emit = defineEmits(['close']);
const router = useRouter();

const props = defineProps({
  isVisible: {
    type: Boolean,
    required: true,
  },
});

const email = ref('');
const password = ref('');
const methodRequest = ref('loginUser');
const errorMessage = ref('');

const closeModal = () => {
  emit('close');
};

function redirect() {
  router.push({ name: 'catalog' });
}

const handleSubmit = () => {
  console.log('Email:', email.value);
  console.log('Password:', password.value);
  if (methodRequest.value === 'loginUser') {
    loginUser(email.value, password.value)
        .then(data => {
          console.log('Вход пользователя ', data);
          redirect();
          closeModal()
        })
        .catch(err => {

          errorMessage.value = 'Неверный email или пароль';
          console.error('Ошибка входа:', err);
        });
  }
};
</script>

<template>
  <div v-if="isVisible" class="modal-overlay" @click="closeModal">
    <div class="modal-content" @click.stop>
      <h2>Вход</h2>
      <form @submit.prevent="handleSubmit">
        <div class="content">
          <label for="email">Адрес электронной почты</label>
          <input placeholder="example@example.com" type="email" id="email"  v-model="email">
        </div>
        <div class="content">
          <label for="password">Пароль</label>
          <input placeholder="*********" type="password"  id="password" v-model="password">
        </div>
        <div class="btn">
          <ButtonComponent :method-request="methodRequest"  title-btn="Войти" />
        </div>
      </form>
      <ErrorPopup v-if="errorMessage" :message="errorMessage"/>
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
    gap: 3rem;
    width: 25rem;
    height: 35rem;
    background: #D4E8D9;
    z-index: 10000;
    border-radius: 15px;
    align-items: center;
    justify-content: center;
  }

  h2{
    position: relative;
    text-align: center;
    width: 20rem;
  }
  h2::after {
    content: '';
    display: block;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -0.5rem; /* отступ подчеркивания от текста */
    width: 17rem; /* длина подчеркивания */
    height: 2px; /* толщина линии */
    background-color: #2e7740; /* цвет линии */
  }
  .btn{
    width: 17rem;
    height: 3rem;
  }

  .content{
    display: flex;
    flex-direction: column;
    gap: 1rem;
    width: 17rem;
  }

  .modal-content form{
    display: flex;
    flex-direction: column;
    gap: 2rem;
  }

  input{
    height: 2.5rem;
    border-radius: 5px;
    transition: border-color 1s ease;
    outline: none;
    border: 2px solid transparent;
    padding: 5px;
  }
  input::placeholder{
    color: #376B44;
  }
  input:hover{
    animation: hover-animate 2s forwards ;
  }

  input:active{
    border-color: #11591e;
  }
  input:focus{
    border-color: #11591e;
  }

  @keyframes hover-animate {
    0%{
      border-color: #7a917f;
    }
    25%{
      border-color: #659670;
    }
    50%{
      border-color: #4c9159;
    }
    75%{
      border-color: #286233;
    }
    100%{
      border-color: #11591e;
    }
  }

</style>