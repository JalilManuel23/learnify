require('./bootstrap');

import { createApp } from 'vue'
import VueVideoPlayer from '@videojs-player/vue'
import 'video.js/dist/video-js.css'

import App from './components/App.vue';

//importamos Axios
import VueAxios from 'vue-axios'

import router from './router.js';

createApp(App).use(router, VueAxios, axios, VueVideoPlayer).mount('#app');