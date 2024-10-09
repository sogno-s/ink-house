import './assets/main.css'
export const url = 'http://nkdskpc-m1.wsr.ru/api-shop'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')

