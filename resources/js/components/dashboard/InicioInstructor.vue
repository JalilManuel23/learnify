<template>
    <h1>instructores</h1>
  </template>
  
  <script>
  import $api from '../../store/api';
  
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
    }
  };
  </script>