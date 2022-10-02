<template>
    <main>
        <nav class="navbar navbar-expand-lg fixed-top" v-bind:class="[isActive ? 'navbar-light navactive' : 'navbar-dark']">
            <div class="container">
                <a class="navbar-brand fw-bold mr-4" href="#">
                    Learnify
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
                        <li class="nav-item">
                            <router-link exact-active-class="active" to="/" class="nav-link active" aria-current="page">Inicio</router-link>
                        </li>           
                        <li class="nav-item">
                            <router-link exact-active-class="active" to="/" class="nav-link" aria-current="page">Cursos</router-link>
                        </li>           
                        <li class="nav-item">
                            <router-link exact-active-class="active" to="/" class="nav-link" aria-current="page">Planes</router-link>
                        </li>           
                        <li class="nav-item">
                            <router-link exact-active-class="active" to="/" class="nav-link" aria-current="page">Nosotros</router-link>
                        </li>           
                        <li class="nav-item">
                            <router-link exact-active-class="active" to="/" class="nav-link" aria-current="page">Contacto</router-link>
                        </li>     
                        <div class="d-flex flex-md-row flex-column w-100 justify-content-cente r justify-content-md-end align-items-center">
                            <li class="nav-item nav-item-block d-flex justify-content-center">
                                <router-link class="btn border-2 fw-bold mx-md-2 m-0 w-100 btn-primary" to="/">Iniciar sesión</router-link>
                            </li>
                            <li class="nav-item nav-item-block d-flex justify-content-center mt-2 mt-md-0">
                                <router-link class="btn border-2 btn-outline-primary fw-bold w-100" to="/" >Regístrarse</router-link>
                            </li>
                        </div>  
                    </ul>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </main>
</template>
 
<script>
    import styles from '../../css/app.css';

    import debounce from 'lodash/debounce';

    export default {
        data() {
            return {
                isActive: false
            }
        },  
        methods: {
            handleScroll(event) {
                this.isActive = (window.scrollY > 0) ? true : false;
            }
        },

        mounted() {
            this.handleDebouncedScroll = debounce(this.handleScroll);
            window.addEventListener('scroll', this.handleDebouncedScroll);
        },

        beforeDestroy() {
            window.removeEventListener('scroll', this.handleDebouncedScroll);
        }
    }
</script>