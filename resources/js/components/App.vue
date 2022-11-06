<template>
    <main>
        <HomeNavbar v-if="pagesHome.includes($route.name)" />
        <CategoriasNavbar v-else-if="pagesCategorias.includes($route.name)" />
        <AuthNavbar v-else-if="pagesAuth.includes($route.name)" />
        <router-view v-bind:class="[(pagesAuth.includes($route.name)) ? 'home-section' : '']"></router-view>
    </main>
</template>

<script>
    import styles from '../../css/app.css';

    import debounce from 'lodash/debounce';
    import HomeNavbar from './home/HomeNavbar.vue';
    import AuthNavbar from './auth/AuthNavbar.vue';
    import CategoriasNavbar from './categorias/CategoriasNavbar.vue';

    export default {
    data() {
        return {
            isActive: false,
            pagesHome: ['home', 'Categorias', 'Planes', 'Contacto', 'Footer', 'InicioSesion', 'Registro', 'RecuperarContrasena', 'Legal', 'CentroAyuda'],
            pagesCategorias: ['Categoria', 'Descripcion',],
            pagesAuth: ['Dashboard', 'InicioCliente', 'VideoPlayer', 'Instructores', 'Index']
        };
    },
    methods: {
        handleScroll(event) {
            this.isActive = (window.scrollY > 0) ? true : false;
        }
    },
    mounted() {
        this.handleDebouncedScroll = debounce(this.handleScroll);
        window.addEventListener("scroll", this.handleDebouncedScroll);
    },
    beforeDestroy() {
        window.removeEventListener("scroll", this.handleDebouncedScroll);
    },
    components: { HomeNavbar, AuthNavbar, CategoriasNavbar }
}
</script>

<style scoped>
    .dropdown-menu li {
        position: relative;
    }
    .dropdown-menu .submenu {
        display:none;
        position: absolute;
    }
    .dropdown-menu>li:hover>.submenu {
        display: block;
        left: 100%;
        top: -30%;
    }
    @media (max-width: 600px) {
        .dropdown-menu .submenu {
        display:none;
        position: absolute;
    }
        .dropdown-menu>li:hover>.submenu {
        display:block;
    }
    }
</style>