<template>
    <InstructorNavbar></InstructorNavbar>
    <div class="container">
        <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
            Hola, <b>{{ `${ this.userData.name } ${ this.userData.apellido_p } ${ this.userData.apellido_m }` }}</b>. ¡Te damos la bienvenida a Learnify!
        </h2>
        <div class="pt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-3" style="max-width: 500px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="../../../img/questions.png" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">¿Necesitas Ayuda?</h5>
                                <p class="card-text mb-4">Revisa si tu duda está resuelta en preguntas frecuentes.</p>
                                <a href="#" class="btn btn-primary">Ir a centro de ayuda</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4"></div>
            </div>
        </div>
    </div>
    <AuthFooter />
</template>

<script>
import $api from '../../store/api';
import AuthFooter from '../auth/Footer.vue';
import InstructorNavbar from '../auth/InstructorNavbar.vue';

export default {
    name: "IndexInstructor",
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

        console.log(this.cursosComprados);
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
    components: { AuthFooter, InstructorNavbar }
}
</script>

<style scoped>
.nav-link {
    background: none;
    text-decoration: none;
    color: #184E77;
    border: none;

}
.nav-item .nav-link.active{
    background: none;
    color: #184E77;
    font-weight: bold;
    border: none;
    border-bottom: 5px solid #184E77;
    border-radius: 0;
}
</style>