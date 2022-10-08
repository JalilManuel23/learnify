import { createRouter, createWebHistory } from 'vue-router';

const Home = () => import('./components/Home.vue')
const InicioSesion = () => import('./components/login/InicioSesion.vue')

const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'InicioSesion',
        path: '/inicio-sesion',
        component: InicioSesion
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})