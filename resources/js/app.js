require('./bootstrap');

import { createApp } from 'vue'

import App from './components/App.vue';

//importamos Axios
import VueAxios from 'vue-axios'


//Importamos y configuramos el Vue-router
import { createWebHashHistory, createRouter } from "vue-router";
import {routes} from './routes';
 
const router = createRouter({
    history: createWebHashHistory(),
    routes
});

createApp(App).use(router).mount('#app')
app.use(VueAxios, axios);
 