<template>
  <section class="gradient-custom-2">
    <div class="container p-2">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-9 col-xl-12">
          <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
            <strong>Mis Cursos</strong>
          </h2>
					<div>
						<div class="d-flex flex-wrap">
							<!-- Tarjetas de cada curso -->
							<div v-for="{ id, titulo, descripcion, precio, categoria, duracion } in this.cursosComprados" :key="id" class="card col-12 col-md-2" style="margin: 20px">
								<div class="view overlay">
									<img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).webp"
									alt="Card image cap">
									<a href="#!">
										<div class="mask rgba-white-slight"></div>
									</a>
								</div>
								<div class="card-body">
									<h4 class="card-title">{{ titulo }}</h4>
									<p class="card-text mb-2">{{ descripcion }}</p>
									<p class="text-muted desc mb-2">{{ categoria }}</p>
									<div class="d-flex justify-content-between mb-2">
										<p class="text-muted desc">${{ precio }}</p>
										<p class="text-muted desc">{{ duracion }}mins.</p>
									</div>
									<router-link :to="`/descripcion-curso/${ id }`" class="btn btn-primary">Ver</router-link>
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
import $api from '../../store/api';

export default {
	name: "MisCursos",
	data() {
      return {
        userData: {},
        cursos: [],
        cursosComprados: []
      }
    },
    methods: {
      async traer_cursos() {
        await $api.get('curso').then(response => {
          this.cursos = response.data;
        });
      },
      async traer_cursos_comprados() {
        let estudiante = {
            'estudiante': this.userData.id
        }

        await $api.post('inscripciones/estudiante', estudiante).then(response => {
            let inscripciones = response.data.inscripciones;
            let cursos = [];

            inscripciones.map(inscripcion => {
                cursos.push(inscripcion.info_curso);
            });

            this.cursosComprados = cursos;
        });
      }
    },
    async mounted() {
      await $api.get('usuario').then(response => {
          let { data } = response.data;
          this.userData = data;
      }).catch( error => {
        this.$router.push({ name:"InicioSesion" });
      });

      this.traer_cursos();
      this.traer_cursos_comprados();
    },
	components: { AuthFooter }
}
</script>

<style scoped>
</style>