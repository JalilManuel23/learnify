<template>
    <InstructorNavbar></InstructorNavbar>
    <div class="container">
        <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
            Mis calificaciones
        </h2>
    </div>
    <AuthFooter />
</template>

<script>
import $api from '../../store/api';
import AuthFooter from '../auth/Footer.vue';
import InstructorNavbar from '../auth/InstructorNavbar.vue';

export default {
    name: "Calificaciones",
    data() {
      return {
      }
    },
    components: { AuthFooter, InstructorNavbar }
}
</script>

<style scoped>

</style>