<template>
    <div class="container">
        <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
            Hola, <b>{{ `${ this.userData.name } ${ this.userData.apellido_p }` }}</b>. ¡Te damos la bienvenida a Learnify!
        </h2>
        <div class="mt-5">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Recomendaciones</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-mis-cursos-tab" data-bs-toggle="pill" data-bs-target="#pills-mis-cursos" type="button" role="tab" aria-controls="pills-mis-cursos" aria-selected="false">Mis cursos</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active container" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="d-flex flex-wrap">
                        <!-- Tarjetas de cada curso -->
                        <div v-for="{ id, titulo, descripcion, precio, categoria, duracion } in this.cursos" :key="id" class="card col-12 col-md-2" style="margin: 20px">
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
                <div class="tab-pane fade" id="pills-mis-cursos" role="tabpanel" aria-labelledby="pills-mis-cursos-tab" tabindex="0">
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

export default {
    name: "Index",
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
    components: { AuthFooter }
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