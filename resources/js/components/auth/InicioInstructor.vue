<template>
  <InstructorNavbar></InstructorNavbar>

  <div class="container">
    <div class="d-flex row flew-wrap justify-content-start mt-4">
      <!-- Enlace para agregar nuevo curso -->
      <router-link to="/crear-curso" class="card col-12 col-md-2 bg-light" style="margin: 10px; text-decoration: none; color: #000">
          <div class="view overlay">
              <img class="card-img-top p-5" src="https://cdn-icons-png.flaticon.com/512/2921/2921226.png"
                  alt="Card image cap">
              <a href="#!" >
                  <div class="mask rgba-white-slight"></div>
              </a>
          </div>
      
          <div class="card-body">
              <h4 class="card-title text-center">Crear curso</h4>
          </div>
      </router-link>

      <!-- Tarjetas de cada curso -->
      <div v-for="{ id, titulo, descripcion, precio, categoria, duracion } in this.cursos" :key="id" class="card col-12 col-md-2" style="margin: 10px">
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

            <router-link :to="`/curso/${ id }`" class="btn btn-primary">Ver</router-link>
        </div>
      </div>
    </div>
  </div>
  <AuthFooter />
</template>
  
<script>
  import $api from '../../store/api';
  import InstructorNavbar from '../auth/InstructorNavbar.vue';
  import AuthFooter from '../auth/Footer.vue';

  export default {
    name: "BotonCrearCurso",
    data() {
      return {
        userData: {},
        cursos: []
      }
    },
    methods: {
      async traer_cursos() {
        await $api.get(`cursos/por_instructor/${ this.userData.id }`).then(response => {
          this.cursos = response.data.cursos;
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
    },
    components: {
      InstructorNavbar , AuthFooter
    }
  };
</script>

<style>
.desc {
  font-size: 10px;
}
</style>