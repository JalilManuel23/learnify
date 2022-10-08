require('./bootstrap');

import { createApp } from 'vue'

import App from './components/App.vue';

//importamos Axios
import VueAxios from 'vue-axios'

import router from './router.js';

createApp(App).use(router, VueAxios, axios).mount('#app');