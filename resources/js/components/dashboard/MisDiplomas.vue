<template>
  <section class="gradient-custom-2">
    <div class="container p-2">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-9 col-xl-12">
          <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
            <strong>Mis Diplomas</strong>
          </h2>
        </div>
      </div>
      <div class="row d-flex flex-wrap justify-content-start">
        <router-link :to="`/curso-completo/${curso.info_curso.id}`"
          class="card p-3 mb-2 col-12 col-md-3" style="margin-right: 25px;" v-for="curso in this.cursosCompletos"
        >
          <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                  <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                  <div class="ms-2 c-details">
                      <h6 class="mb-0">Curso finalizado</h6>
                  </div>
              </div>
              <div class="badge"> <span>Design</span> </div>
          </div>
          <div class="mt-5">
              <h3 class="heading">{{ curso.info_curso.titulo }}</h3>
              <div class="mt-5">
                  <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="mt-3"><i class="fas fa-check text-success"></i> ¡Curso completo! </div>
              </div>
          </div>
        </router-link>
      </div>
    </div>
  </section>
  <AuthFooter />
</template>

<script>
import $api from '../../store/api';
import AuthFooter from '../auth/Footer.vue';

export default {
  name: "MisDiplomas",
  data() {
    return {
        userData: {},
        cursosCompletos: {}
    }
  },
  components: { AuthFooter },
  methods: {
    async traer_cursos_completos() {
        let estudiante = {
            'estudiante': this.userData.id
        }

        await $api.post('/inscripcion/traer_completas', estudiante).then(response => {
          this.cursosCompletos = response.data.inscripciones;
        });
    },
  },
  async mounted() {
    await $api.get('usuario').then(response => {
        let { data } = response.data;
        this.userData = data;
    }).catch( error => {
      this.$router.push({ name:"InicioSesion" });
    });

    this.traer_cursos_completos();
  }
}
</script>

<style scoped>
a {
  text-decoration: none;
  color: #000;
}
</style>