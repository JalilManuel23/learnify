<template>
    <section class="gradient-custom-2">
        <div class="container p-2">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col col-lg-9 col-xl-12">
                    <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
                        Hola, <b>{{ `${ this.userData.name } ${ this.userData.apellido_p }` }}</b>. ¡Te damos la bienvenida a Learnify!
                    </h2>
                    <div class="mt-5">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Recomendaciones</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Comunidad</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Tu actividad</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
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
                                            <router-link to="" class="btn btn-primary">Ir a Centro de ayuda</router-link>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4"></div>
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
  name: "Index",
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
  }, components: { AuthFooter }
};
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