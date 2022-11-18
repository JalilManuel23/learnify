import { createRouter, createWebHistory } from 'vue-router';

const Home = () =>
    import ('./components/Home.vue')

const Categorias = () =>
    import ('./components/home/Categorias.vue')
const Planes = () =>
    import ('./components/home/Planes.vue')
const Contacto = () =>
    import ('./components/home/Contacto.vue')
const Footer = () =>
    import ('./components/home/Footer.vue')

const InicioSesion = () =>
    import ('./components/login/InicioSesion.vue')
const Registro = () =>
    import ('./components/login/Registro.vue')
const RecuperacionContrasena = () =>
    import ('./components/login/RecuperacionContrasena.vue')
const RestablecerContrasena = () =>
    import ('./components/login/RestablecerContrasena.vue')
const Categoria = () =>
    import ('./components/categorias/Categoria.vue')
const InicioCliente = () =>
    import ('./components/dashboard/Inicio.vue')
const VideoPlayer = () =>
    import ('./components/VideoPlayer.vue')
const TipoUsuario = () =>
    import ('./components/auth/TipoUsuario.vue')
const Instructores = () =>
    import ('./components/auth/Instructores.vue')
const Legal = () =>
    import ('./components/InformacionLegal.vue')
const CentroAyuda = () =>
    import ('./components/CentroAyuda.vue')
const Descripcion = () =>
    import ('./components/auth/Descripcion.vue')
const AuthFooter = () =>
    import ('./components/auth/Footer.vue')
const InicioInstructor = () =>
    import ('./components/dashboard/InicioInstructor.vue')
const CrearCurso = () =>
    import ('./components/auth/cursos/CrearCurso.vue');
const Curso = () =>
    import ('./components/auth/cursos/Curso.vue');
const EditarCurso = () =>
    import ('./components/auth/cursos/EditarCurso.vue');
const BurbujaWhatsapp = () =>
    import ('./components/BurbujaWhatsapp.vue')

const routes = [
    // Landing Page
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
        path: '/categoria/:categoria',
        component: Categoria
    },
    {
        name: 'InicioCliente',
        path: '/dashboard/inicio',
        component: InicioCliente
    },
    {
        name: 'VideoPlayer',
        path: '/video',
        component: VideoPlayer
    },
    {
        name: 'TipoUsuario',
        path: '/seleccionar-tipo-usuario',
        component: TipoUsuario
    },
    {
        name: 'Instructores',
        path: '/instructores',
        component: Instructores
    },
    {
        name: 'Legal',
        path: '/informacion-legal',
        component: Legal
    },
    {
        name: 'CentroAyuda',
        path: '/centro-de-ayuda',
        component: CentroAyuda
    },
    {
        name: 'Descripcion',
        path: '/descripcion-curso/:id',
        component: Descripcion
    },
    {
        name: 'InicioInstructor',
        path: '/dashboard/instructor',
        component: InicioInstructor
    },
    {
        name: 'CrearCurso',
        path: '/crear-curso',
        component: CrearCurso
    },
    {
        name: 'Curso',
        path: '/curso/:curso',
        component: Curso
    },
    {
        name: 'EditarCurso',
        path: '/editar-curso/:curso',
        component: EditarCurso
    },

    // Dashboard Estudiante
    {
        name: 'Index',
        path: '/dashboard/Index',
        component: () => import('./components/dashboard/Index.vue')
    },
    {
        name: 'MisCursos',
        path: '/dashboard/Mis-cursos',
        component: () => import('./components/dashboard/MisCursos.vue')
    },
    {
        name: 'MisDiplomas',
        path: '/dashboard/Mis-diplomas',
        component: () => import('./components/dashboard/MisDiplomas.vue')
    },
    {
        name: 'MisApuntes',
        path: '/dashboard/Mis-apuntes',
        component: () => import('./components/dashboard/MisApuntes.vue')
    },
    {
        name: 'MiPlanEstudio',
        path: '/dashboard/Plan-de-estudio',
        component: () => import('./components/dashboard/MiPlanEstudio.vue')
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})