<template>
    <div class="container-fluid">
      <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none" style="color:#184E77">Inicio</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="" class="text-decoration-none" style="color:#184E77">Categorías</a></li>
                <li class="breadcrumb-item active" aria-current="page">Desarrollo e Ingeniería</li>
            </ol>
        </nav>
        <div class="">
            <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
                <b>Cursos de <spam style="color:#184E77">Desarrollo e Ingeniería</spam></b>
            </h2>
            <div class="clearfix mb-5">
                <p class="float-start fw-light" style="font-size:12px;">Resultados</p>
                <p class="float-end fw-light" style="font-size:12px;">Ordenar por</p>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../../../img/desarrollo-ingenieria.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Título del curso</h5>
                            <p class="card-text">Nombre del instructor</p>
                            <p class="card-text">Precio</p>
                            <p class="card-text">duración</p>
                            <div class="clearfix">
                                <a href="#" class="btn btn-primary float-start">Comprar ahora</a>
                                <a href="#" class="btn btn-primary float-end" style="color:white"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <Footer />
</template>

<script>
import Footer from '../home/Footer.vue';
    export default {
    name: "Categoria",
    components: { Footer }
}
</script>

<style scoped>
    .container-fluid {
        min-height: 120vh;
        background: #FFF;
        color: #000;
    }
    .container {
        padding-top: 6rem;
    }
    .row .card {
        border: none;
        border-radius: 1rem;
        transition: all 0.2s;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }
    .row .card:hover {
        margin-top: -.25rem;
        margin-bottom: .25rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
    }
</style>