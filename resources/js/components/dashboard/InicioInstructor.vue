<template>
  <InstructorNavbar></InstructorNavbar>

  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12 d-flex justify-content-left">
        <router-link to="/" class="card w-25" style="margin-right: 15px; margin-left: 15px; text-decoration: none; color: #000">
            <div class="view overlay">
                <img class="card-img-top p-5" src="https://cdn-icons-png.flaticon.com/512/2921/2921226.png"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
        
            <div class="card-body">
                <h4 class="card-title text-center">Crear curso</h4>
            </div>
        </router-link>
        <CardCurso></CardCurso>
      </div>
    </div>
  </div>
</template>
  
<script>
  import $api from '../../store/api';
  import InstructorNavbar from '../auth/InstructorNavbar.vue';
  import CardCurso from '../auth/cursos/cardCurso/CardCurso.vue';
  
  export default {
    name: "InicioInstructor",
    data() {
      return {
        userData: {}
      }
    },
    async mounted() {
      await $api.get('usuario').then(response => {
          let { data } = response.data;
          this.userData = data;
      }).catch( error => {
        this.$router.push({ name:"InicioSesion" });
      });
    },
    components: {
      InstructorNavbar,
      CardCurso
    }
  };
</script>