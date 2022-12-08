<template>
  <section id="categorias" class="categorias" v-bind:style="$route.name == 'Categorias' ? 'padding-top: 30vh;' : 'padding-top: 0;'">
      <div class="container-fluid py-5">
        <div>
          <div class="card-bg card py-5">
            <h2 class="h1-responsive font-weight-bold text-center mb-3 mt-5">
            Categorías
            </h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">
              Aprende lo que necesitas para desarrollar tu perfil profesional
            </p>
            <div class="container mt-3">
              <div class="row">              
                <div v-for="({ titulo, name, cursos, imagen }, index) in this.categorias" :key="index" class="col-xl-3 col-12 col-md-6 mb-4">
                  <router-link :to="{
                    name: 'Categoria',
                    params: {
                      categoria: name
                    }
                  }"                     
                  class="text-decoration-none"
                  title="Ver más">
                    <div class="card">
                      <!-- Card body -->
                      <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                          <img :src="imagen" class="img-fluid w-25 text-center">
                          <div class="ms-3">
                            <span class="h6 font-weight-bold mb-0" style="color:black">{{ titulo }}</span>
                            <h6 class="card-title text-capitalize text-muted text-sm mb-0">{{ cursos }} Cursos</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </router-link>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</template>

<script>
  import categorias from '../categorias/categorias';

  export default {

    name: "Categorias",
    data() {
      return {
        categorias: []
      }
    },
    methods: {
      cargarCategorias() {
        this.categorias = categorias;
      }
    },
    mounted() {
      this.cargarCategorias();
    }
  }
</script>

<style>
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