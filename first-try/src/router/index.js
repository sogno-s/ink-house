import { createRouter, createWebHistory } from 'vue-router'
import AppPage from '../App.vue'
import AuthModalWindow from "../components/modal/AuthModalWindow.vue";
const router = createRouter({
  history: createWebHistory('/'),

  routes: [
    { 
      path: '/',
      component: AppPage
    },
    {
      path: '/login',
      component: AuthModalWindow
    },
    {
      path: '/catalog',
      name: 'catalog',
      component: () => import('../components/TestPage.vue')
    }
  ]
})

export default router
