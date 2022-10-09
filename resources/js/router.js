import { createRouter, createWebHistory } from 'vue-router';

const Home = () => import('./components/Home.vue')
const InicioSesion = () => import('./components/login/InicioSesion.vue')
const Registro = () => import('./components/login/Registro.vue')
const RecuperacionContrasena = () => import('./components/login/RecuperacionContrasena.vue')
const RestablecerContrasena = () => import('./components/login/RestablecerContrasena.vue')

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
    },
    {
        name: 'Registro',
        path: '/registrarse',
        component: Registro
    },
    {
        name: 'RecuperarContrasena',
        path: '/recuperar-contrasena',
        component: RecuperacionContrasena
    },
    {
        name: 'RestablecerContrasena',
        path: '/restablecer-contrasena',
        component: RestablecerContrasena
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})