import { createRouter, createWebHistory } from 'vue-router';

const Home = () => import('./components/Home.vue')

const Categorias = () => import('./components/home/Categorias.vue')
const Planes = () => import('./components/home/Planes.vue')
const Contacto = () => import('./components/home/Contacto.vue')

const InicioSesion = () => import('./components/login/InicioSesion.vue')
const Registro = () => import('./components/login/Registro.vue')
const RecuperacionContrasena = () => import('./components/login/RecuperacionContrasena.vue')
const RestablecerContrasena = () => import('./components/login/RestablecerContrasena.vue')
const Categoria = () => import('./components/categorias/Categoria.vue')

const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'Categorias',
        path: '/categorias',
        component: Categorias
    },
    {
        name: 'Planes',
        path: '/planes',
        component: Planes
    },
    {
        name: 'Contacto',
        path: '/contacto',
        component: Contacto
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
    {
        name: 'Categoria',
        path: '/categoria',
        component: Categoria
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})