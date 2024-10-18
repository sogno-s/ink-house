import { createRouter, createWebHistory } from 'vue-router'
import MainPage from '../components/MainPage.vue'
import AuthModalWindow from "../components/modal/AuthModalWindow.vue";
import TestComponent from "../components/TestPage.vue";

const router = createRouter({
  routes: [
    { 
      path: '/',
      name: 'MainPage',
      component: MainPage
    },
    {
      path: '/login',
      component: AuthModalWindow
    },
    {
      path: '/catalog',
      name: 'catalog',
      component: TestComponent
    }
  ],

  history: createWebHistory()
})

export default router
