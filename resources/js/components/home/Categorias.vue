<template>
    <section id="categorias" class="categorias" v-bind:style="$route.name == 'Categorias' ? 'padding-top: 30vh;' : 'padding-top: 0;'">
        <div class="container-fluid py-5">
          <div>
            <div class="card-bg card py-5">
              <h2 class="h1-responsive font-weight-bold text-center mb-3">
              Categorías
            </h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">
              Aprende lo que necesitas para desarrollar tu perfil profesional
            </p>
            <div class="container">
              <div class="row">
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                  <!-- Card body -->
                  <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                      <img src="../../../img/desarrollo-ingenieria.png" class="img-fluid w-25 text-center">
                      <div class="ms-3">
                        <span class="h6 font-weight-bold mb-0">Desarrollo e Ingeniería</span>
                        <h6 class="card-title text-capitalize text-muted text-sm mb-0">90 Cursos</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                <!-- Card body -->
                <div class="card-body p-3">
                  <div class="d-flex align-items-center">
                    <img src="../../../img/marketing.png" class="img-fluid w-25 text-center">
                    <div class="ms-3">
                      <span class="h6 font-weight-bold mb-0">Marketing</span>
                      <h6 class="card-title text-capitalize text-muted text-sm mb-0">108 Cursos</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card">
                <!-- Card body -->
                <div class="card-body p-3">
                  <div class="d-flex align-items-center">
                    <img src="../../../img/english.png" class="img-fluid w-25 text-center">
                    <div class="ms-3">
                      <span class="h6 font-weight-bold mb-0">Inglés</span>
                      <h6 class="card-title text-capitalize text-muted text-sm mb-0">55 Cursos</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card">
                <!-- Card body -->
                <div class="card-body p-3">
                  <div class="d-flex align-items-center">
                    <img src="../../../img/diseno-ux.png" class="img-fluid w-25 text-center">
                    <div class="ms-3">
                      <span class="h6 font-weight-bold mb-0">Diseño y UX</span>
                      <h6 class="card-title text-capitalize text-muted text-sm mb-0">15 Cursos</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card">
                <!-- Card body -->
                <div class="card-body p-3">
                  <div class="d-flex align-items-center">
                    <img src="../../../img/finanzas.png" class="img-fluid w-25 text-center">
                    <div class="ms-3">
                      <span class="h6 font-weight-bold mb-0">Finanzas e Inversiones</span>
                      <h6 class="card-title text-capitalize text-muted text-sm mb-0">90 Cursos</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card">
                <!-- Card body -->
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <img src="../../../img/videogame.png" class="img-fluid w-25 text-center">
                    <div class="ms-3">
                      <span class="h6 font-weight-bold mb-0">Videojuegos</span>
                      <h6 class="card-title text-capitalize text-muted text-sm mb-0">20 Cursos</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card py-0 px-">
                <!-- Card body -->
                <div class="card-body p-3">
                  <div class="d-flex align-items-center">
                    <img src="../../../img/estilo-de-vida.png" class="img-fluid w-25 text-center">
                    <div class="ms-3">
                      <span class="h6 font-weight-bold mb-0">Estilo de vida</span>
                      <h6 class="card-title text-capitalize text-muted text-sm mb-0">89 Cursos</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card">
                <!-- Card body -->
                <div class="card-body p-3">
                  <div class="d-flex align-items-center">
                    <img src="../../../img/liderazgo.png" class="img-fluid w-25 text-center">
                    <div class="ms-3">
                      <span class="h6 font-weight-bold mb-0">Liderazgo</span>
                      <h6 class="card-title text-capitalize text-muted text-sm mb-0">35 Cursos</h6>
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
    export default {
        name: "Categorias"
    }
</script>