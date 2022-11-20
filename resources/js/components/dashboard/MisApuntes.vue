<template>
  <section class="gradient-custom-2">
    <div class="container p-2">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-9 col-xl-12">
          <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
            <strong>Mis Apuntes</strong>
          </h2>
          <div class="container">
          <div class="mt-2">
            <div class="container py-5">
              <div class="card py-5">
                <div class="card-body text-center">
                  <div class="icono d-flex flex-column align-items-center justify-content-center pb-3">
                    <i class="fas fa-edit" aria-hidden="true"></i>
                  </div>
                  <h4>
                    Todavía no haz tomado apuntes de tus cursos
                  </h4>
                  <p>¡No pierdas ningún detalle! Toma nota de lo que sea más interesante para ti</p>
                  <router-link to="" class="btn btn-primary border-2 fw-bold mx-md-2 mt-5 w-25">Crear nota</router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <AuthFooter />
</template>

<script>
import AuthFooter from '../auth/Footer.vue';

export default {
  name: "MisApuntes",
  setup() {

  },
  components: { AuthFooter }
}
</script>

<style scoped>
.icono {
    background: #fff;
    border-radius: 50%;
    font-size: 10vmin;
    margin-bottom: 10px;
}
</style>