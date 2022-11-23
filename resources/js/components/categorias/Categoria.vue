<template>
    <div class="container-fluid">
      <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><router-link to="/" class="text-decoration-none" style="color:#808080;">Inicio</router-link></li>
                <li class="breadcrumb-item" aria-current="page"><router-link to="/categorias" class="text-decoration-none" style="color:#2B3856">Categorías</router-link></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <router-link :to="'/categoria/' + this.name" class="text-decoration-none" style="color:#184E77"><strong>{{ this.titulo }}</strong></router-link>
                </li>
            </ol>
        </nav>
        <div class="">
            <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
                <b>Cursos de <spam style="color:#184E77">{{ this.titulo }}</spam></b>
            </h2>
            <div class="clearfix mb-5">
                <p class="float-start fw-light" style="font-size:12px;">Resultados</p>
                <p class="float-end fw-light" style="font-size:12px;">Ordenar por</p>
            </div>
            <div class="row">
              <div class="d-flex flex-wrap">
              <div v-for="{ titulo, nombreInstructor, precio, duracion, imagen } in this.cursosData" style="width: 18rem;" class="card col-xl-4 col-md-6 mb-4">
                <img :src="'/img/'+`${ imagen }`" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">{{ titulo }}</h5>
                  <p class="card-text">{{ nombreInstructor }}</p>
                  <p class="card-text">${{ precio }}</p>
                  <p class="card-text">{{ duracion }}mins</p>
                </div>
                <div class="card-footer">
                  <div class="clearfix">
                    <router-link :to="`/descripcion-curso/${ id }`" class="btn btn-primary float-start">Descripción</router-link>
                    <router-link to="" class="btn btn-primary float-end" style="color:white"><i class="fa fa-shopping-basket" aria-hidden="true"></i></router-link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <Footer/>
      </div>
    </div>
</template>

<script>
    import Footer from '../home/Footer.vue';
    import categorias from './categorias';
    import $api from '../../store/api';

    export default {
        name: "Categoria",
        data() {
            return {
                id: null,
                name: "",
                titulo: "",
                descripcion: "",
                cursos: null,
                imagen: "",
                cursosData: []
            }
        },
        components: { Footer },
        mounted() {
            this.cargarCategoriaData();
            this.cargarCursosData();
        },
        methods: {
            cargarCategoriaData() {
                categorias.map(categoria => {
                    if(categoria.name == this.$route.params.categoria) {
                        let { id, name, titulo, descripcion, cursos, imagen } = categoria;

                        this.id = id;
                        this.name = name;
                        this.titulo = titulo;
                        this.descripcion = descripcion;
                        this.cursos = cursos;
                        this.imagen = imagen;
                    }
                });
            },
            async cargarCursosData() {
                await $api.get(`cursos/por_categoria/${ this.titulo }`).then(response => {
                    let cursos = response.data.cursos;

                    cursos.map(curso => {
                        let { name, apellido_p } = curso.instructor[0];
                        curso.nombreInstructor = name + ' ' + apellido_p;

                        this.cursosData.push(curso);
                    });
                });
            }
        }
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
    .card {
        border: none;
        margin: .5rem;
        border-radius: 1rem;
        transition: all 0.2s;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }
    /* .card:hover {
        margin-top: -.25rem;
        margin-bottom: .25rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
    } */
    .card-footer {
      background: #FFF;
    }
</style>
