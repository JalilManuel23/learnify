<template>
    <main>
        <nav class="navbar navbar-expand-lg fixed-top pt-3 pb-3" v-bind:class="[(isActive || pagesNavWhite.includes($route.name)) ? 'navbar-light navactive' : 'navbar-dark']">
            <div class="container">
                <router-link exact-active-class="active" to="/" class="navbar-brand fw-bold mr-4">
                    Learnify
                </router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
                        <li class="nav-item">
                            <a v-if="$route.name == 'home'" href="#header" class="nav-link active">Inicio</a>
                            <router-link v-else to="/" class="nav-link active">Inicio</router-link>
                        </li>           
                        <li class="nav-item">
                            <a v-if="$route.name == 'home'" href="#categorias" class="nav-link active">Cursos</a>
                            <router-link v-else to="/categorias" class="nav-link active">Cursos</router-link>
                        </li>           
                        <li class="nav-item">
                            <a v-if="$route.name == 'home'" href="#planes" class="nav-link active">Planes</a>
                            <router-link v-else to="/planes" class="nav-link active">Planes</router-link>
                        </li>                      
                        <li class="nav-item">
                            <a v-if="$route.name == 'home'" href="#contacto" class="nav-link active">Contacto</a>
                            <router-link v-else to="/contacto" class="nav-link active">Contacto</router-link>
                        </li>     
                        <div class="d-flex flex-md-row flex-column w-100 justify-content-cente r justify-content-md-end align-items-center">
                            <li class="nav-item nav-item-block d-flex justify-content-center">
                                <router-link class="btn border-2 fw-bold mx-md-2 m-0 w-100"
                                v-bind:class="[isActive ? 'btn-primary' : 'btn-light']" to="/inicio-sesion">Iniciar sesión</router-link>
                            </li>
                            <li class="nav-item nav-item-block d-flex justify-content-center mt-2 mt-md-0">
                                <router-link class="btn border-2 fw-bold w-100" to="/registrarse" v-bind:class="[isActive ? 'btn-outline-primary' : 'btn-outline-light']" >Regístrarse</router-link>
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
                isActive: false, 
                pagesNavWhite: ['Categorias', 'Planes', 'Contacto']
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