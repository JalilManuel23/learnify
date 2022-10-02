<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                                <button class="btn btn-primary border-2 fw-bold mx-md-2 m-0 w-100">Iniciar sesión</button>
                            </li>
                            <li class="nav-item nav-item-block d-flex justify-content-center mt-2 mt-md-0">
                                <button class="btn btn-outline-primary border-2 fw-bold w-100">Regístrarse</button>
                            </li>
                        </div>  
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <router-view></router-view>
        </div>
    </main>
</template>
 
<script>
    import styles from '../../css/app.css';

    export default {}
</script>