const Home = () => import('./components/Home.vue')
const InicioSesion = () => import('./components/login/InicioSesion.vue')
export const routes = [
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

export default routes;