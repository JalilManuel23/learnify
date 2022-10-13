<template>
  <section id="categorias" class="categorias" v-bind:style="$route.name == 'Categorias' ? 'padding-top: 30vh;' : 'padding-top: 0;'">
      <div class="container-fluid py-5">
        <div>
          <div class="card-bg card py-5">
            <h2 class="h1-responsive font-weight-bold text-center mb-3 mt-5">
            Categorías
            </h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">
              Aprende lo que necesitas para desarrollar tu perfil profesional
            </p>
            <div class="container mt-3">
              <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                  <a href="" class="text-decoration-none" title="Ver más">
                    <div class="card">
                      <!-- Card body -->
                      <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                          <img src="../../../img/desarrollo-ingenieria.png" class="img-fluid w-25 text-center">
                          <div class="ms-3">
                            <span class="h6 font-weight-bold mb-0" style="color:black">Desarrollo e Ingeniería</span>
                            <h6 class="card-title text-capitalize text-muted text-sm mb-0">90 Cursos</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <router-link to="/"></router-link>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <a href="" class="text-decoration-none" title="Ver más">
                    <div class="card">
                      <!-- Card body -->
                      <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                          <img src="../../../img/marketing.png" class="img-fluid w-25 text-center">
                          <div class="ms-3">
                            <span class="h6 font-weight-bold mb-0" style="color:black">Marketing</span>
                            <h6 class="card-title text-capitalize text-muted text-sm mb-0">108 Cursos</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <router-link to="/"></router-link>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <a href="" class="text-decoration-none" title="Ver más">
                    <div class="card">
                      <!-- Card body -->
                      <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                          <img src="../../../img/english.png" class="img-fluid w-25 text-center">
                          <div class="ms-3">
                            <span class="h6 font-weight-bold mb-0" style="color:black">Inglés</span>
                            <h6 class="card-title text-capitalize text-muted text-sm mb-0">55 Cursos</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <router-link to=""></router-link>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <a href="" class="text-decoration-none" title="Ver más">
                    <div class="card">
                      <!-- Card body -->
                      <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                          <img src="../../../img/diseno-ux.png" class="img-fluid w-25 text-center">
                          <div class="ms-3">
                            <span class="h6 font-weight-bold mb-0" style="color:black">Diseño y UX</span>
                            <h6 class="card-title text-capitalize text-muted text-sm mb-0">15 Cursos</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <router-link to=""></router-link>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                  <a href="" class="text-decoration-none" title="Ver más">
                    <div class="card">
                      <!-- Card body -->
                      <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                          <img src="../../../img/finanzas.png" class="img-fluid w-25 text-center">
                          <div class="ms-3">
                            <span class="h6 font-weight-bold mb-0" style="color:black">Finanzas e Inversiones</span>
                            <h6 class="card-title text-capitalize text-muted text-sm mb-0">90 Cursos</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <router-link to="/"></router-link>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <a href="" class="text-decoration-none" title="Ver más">
                    <div class="card">
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <img src="../../../img/videogame.png" class="img-fluid w-25 text-center">
                          <div class="ms-3">
                            <span class="h6 font-weight-bold mb-0" style="color:black">Videojuegos</span>
                            <h6 class="card-title text-capitalize text-muted text-sm mb-0">20 Cursos</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <router-link to="/"></router-link>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <a href="" class="text-decoration-none" title="Ver más">
                    <div class="card py-0 px-">
                      <!-- Card body -->
                      <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                          <img src="../../../img/estilo-de-vida.png" class="img-fluid w-25 text-center">
                          <div class="ms-3">
                            <span class="h6 font-weight-bold mb-0" style="color:black">Estilo de vida</span>
                            <h6 class="card-title text-capitalize text-muted text-sm mb-0">89 Cursos</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <router-link to=""></router-link>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <a href="" class="text-decoration-none" title="Ver más">
                    <div class="card">
                      <!-- Card body -->
                      <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                          <img src="../../../img/liderazgo.png" class="img-fluid w-25 text-center">
                          <div class="ms-3">
                            <span class="h6 font-weight-bold mb-0" style="color:black">Liderazgo</span>
                            <h6 class="card-title text-capitalize text-muted text-sm mb-0">35 Cursos</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <router-link to=""></router-link>
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

<style>
.row .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}
.row .card:hover {
  margin-top: -.25rem;
  margin-bottom: .25rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
}

</style>