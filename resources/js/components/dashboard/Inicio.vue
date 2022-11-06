<template>
  <section class="gradient-custom-2">
    <div class="container p-2">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-9 col-xl-12">
          <div class="card">
            <div
              class="rounded-top text-black d-flex flex-row"
              style="background-color: #eeeeee; height: 200px"
            >
              <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px">
                <img
                  v-bind:src="`../../../images/${this.userData.fotografia}`"
                  alt="Generic placeholder image"
                  class="img-fluid img-thumbnail mt-4 mb-2"
                  style="width: 200px; z-index: 1; border-radius: 50%"
                />
                <button
                  type="button"
                  class="btn btn-outline-dark"
                  data-mdb-ripple-color="dark"
                  style="z-index: 1"
                >
                  <i class="fas fa-edit mx-1"></i> PERFIL: 50%
                </button>
              </div>
              <div class="ms-3 d-flex" style="margin-top: 140px">
                <h5 style="font-size: 25px">{{ `${ this.userData.name } ${ this.userData.apellido_p }` }}</h5>
                <a class="edit-user mx-3"
                  >EDITAR <i class="fas fa-edit mx-1"></i
                ></a>
              </div>
            </div>
            <div class="p-4 text-black" style="background-color: #f8f9fa">
              <div class="d-flex justify-content-end text-center py-1">
                <div>
                  <p class="mb-1 h5 d-flex">Créditos: $0</p>
                  <p class="small text-muted mb-0">Ver detalles</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="about-me d-flex justify-content-between">
                  <p>Sobre mí</p>
                  <span class="text-right"
                    >EDITAR <i class="fas fa-edit mx-1"></i
                  ></span>
                </div>

                <p>
                  Cuéntanos un poco sobre ti. ¡Nos encantaría conocerte más!
                </p>
                <p>En Crehana desde Octubre 2022</p>

                <div class="row flex-fill justify-content-center">
                  <div class="col-md-2 bg-faded justify-content-center">
                    <i class="location-icon fas fa-map-marker-alt"></i>
                  </div>
                  <div class="col-md-6 h-100">
                    <div class="row">
                      <div>
                        <!-- Button for booking -->
                        <p>México</p>
                      </div>
                    </div>
                    <div class="row">
                      <div>
                        <p class="">Hay más de 1.5M estudiantes aquí</p>
                      </div>
                    </div>
                  </div>
                </div>

                <hr />
                <div class="about-me d-flex justify-content-between">
                  <p>Mis habilidades</p>
                  <span class="text-right"
                    >EDITAR <i class="fas fa-edit mx-1"></i
                  ></span>
                </div>
                <p>
                  No olvides seleccionar tus habilidades para poder recomedarte
                  nuestros mejores cursos.
                </p>
                <div class="about-me d-flex justify-content-between">
                  <p>Software que utilizo</p>
                  <span class="text-right"
                    >EDITAR <i class="fas fa-edit mx-1"></i
                  ></span>
                </div>
                <p>Cuéntanos sobre las herrramientas que usas</p>
              </div>

              <div class="col-md-7">
                <div class="p-4 text-black" style="background-color: #eeeeee;">
            <div class="d-flex justify-content-around text-center py-1">
              <div>
                <p class="mb-1 h5">00 <i class="fas fa-folder-plus icon-progress"></i></p>
                <p class="small text-muted mb-0">Cursos inscritos</p>
              </div>
              <div class="px-3">
                <p class="mb-1 h5">00 <i class="fas fa-check-double icon-progress"></i></p>
                <p class="small text-muted mb-0">Cursos completados</p>
              </div>
              <div>
                <p class="mb-1 h5">00 <i class="fas fa-medal icon-progress"></i></p>
                <p class="small text-muted mb-0">Diplomas obtenidos</p>
              </div>
            </div>
            <p class="my-4">¡Jalil! Aún no has completado tus intereses :(</p>
            <p>Una vez que los completes podremos recomendarte los mejores cursos para potenciar tus habilidades</p>
            <button
                  type="button"
                  class="btn btn-dark my-4"
                  data-mdb-ripple-color="light"
                  style="z-index: 1"
                >
                  <i class="fas fa-edit mx-1"></i> PERFIL: 50%
                </button>
          </div>

                <div
                  class="suggestions"
                  style="background-color: white; height: 200px"
                >
                <p class="my-4 p-3">Nuestros cursos más recomendados</p>
                <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import $api from '../../store/api';

export default {
  name: "InicioCliente",
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