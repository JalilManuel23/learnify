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
const CrearCurso = () =>
    import ('./components/auth/cursos/CrearCurso.vue');
const Curso = () =>
    import ('./components/auth/cursos/Curso.vue');
const VerCurso = () =>
    import ('./components/auth/cursos/VerCurso.vue');
const EditarCurso = () =>
    import ('./components/auth/cursos/EditarCurso.vue');
const BurbujaWhatsapp = () =>
    import ('./components/BurbujaWhatsapp.vue')
const AgregarVideo = () =>
    import ('./components/auth/videos/AgregarVideo.vue')

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
        name: 'VerCurso',
        path: '/ver-curso/:curso',
        component: VerCurso
    },
    {
        name: 'EditarCurso',
        path: '/editar-curso/:curso',
        component: EditarCurso
    },
    {
        name: 'AgregarVideo',
        path: '/agregar-video/:curso',
        component: AgregarVideo
    },
    {
        name: 'PagoTarjeta',
        path: '/Pago-tarjeta',
        component: () => import('./components/auth/PagoTarjeta.vue')
    },

    // Dashboard Estudiante
    {
        name: 'Index',
        path: '/dashboard/index',
        component: () => import('./components/dashboard/Index.vue')
    },
    {
        name: 'MisCursos',
        path: '/dashboard/mis-cursos',
        component: () => import('./components/dashboard/MisCursos.vue')
    },
    {
        name: 'MisDiplomas',
        path: '/dashboard/mis-diplomas',
        component: () => import('./components/dashboard/MisDiplomas.vue')
    },
    {
        name: 'MisApuntes',
        path: '/dashboard/mis-apuntes',
        component: () => import('./components/dashboard/MisApuntes.vue')
    },
    {
        name: 'MiPlanEstudio',
        path: '/dashboard/plan-de-estudio',
        component: () => import('./components/dashboard/MiPlanEstudio.vue')
    },
    // Dashboard Instructor
    {
        name: 'IndexInstructor',
        path: '/auth/Index',
        component: () => import('./components/auth/Index.vue')
    },
    {
        name: 'BotonCrearCurso',
        path: '/auth/crear-curso',
        component: () => import ('./components/auth/InicioInstructor.vue')
    },
    {
        name: 'CalificacionesInstructor',
        path: '/auth/calificaciones',
        component: () => import ('./components/auth/Calificaciones.vue')
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})