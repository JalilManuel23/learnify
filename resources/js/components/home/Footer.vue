<template>
    <section class="footer">
      <!-- Footer -->
      <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Links  -->
        <section class="">

          <div class="container text-center text-md-start mt-5">
            <hr>
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-5 col mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">Learnify
                </h6>
                <form action="">
                  <!--Grid row-->
                  <div class="row">
                    <!--Grid column-->
                    <div class="col-auto mb-4 mb-md-0">
                      <p class="pt-2 mb-4">
                        <strong>Suscribete a nuestro boletín de noticias</strong>
                      </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-7 col-8">
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <input type="email" id="label" class="form-control form-control-md" placeholder="Correo electrónico"/>
                        <!-- <label class="form-label col-form-label col-form-label-sm" for="label">Correo electrónico</label> -->
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col mb-md-0">
                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary mb-4">
                        Suscribir
                      </button>
                    </div>
                    <!--Grid column-->
                  </div>
                  <!--Grid row-->
                </form>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Categorías
                </h6>
                <div class="row">
                  <div class="col-md-6">
                    <p class="mb-1">
                      
                      <a href="#!" class="text-reset text-decoration-none">Desarrollo e Ingeniería</a>
                    </p>
                    <p class="mb-1">
                      <a href="#!" class="text-reset text-decoration-none">Marketing</a>
                    </p>
                    <p class="mb-1">
                      <a href="#!" class="text-reset text-decoration-none">Inglés</a>
                    </p>
                    <p class="mb-1">
                      <a href="#!" class="text-reset text-decoration-none">Diseño UX/UI</a>
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p class="mb-1">
                      <a href="#!" class="text-reset text-decoration-none">Negocios y Finanzas</a>
                    </p>
                    <p class="mb-1">
                      <a href="#!" class="text-reset text-decoration-none">Videojuegos</a>
                    </p>
                    <p class="mb-1">
                      <a href="#!" class="text-reset text-decoration-none">Estilo de vida</a>
                    </p>
                    <p class="mb-1">
                      <a href="#!" class="text-reset text-decoration-none">Liderazgo</a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Enlaces de ayuda</h6>
                <p>
                  <router-link to="/centro-de-ayuda" class="text-reset text-decoration-none">
                    Centro de ayuda
                  </router-link>
                </p>
                <p>
                  <router-link to="/informacion-legal#aviso-privacidad" class="text-reset text-decoration-none">
                    Aviso de privacidad
                  </router-link>
                </p>
                <p>
                  <router-link to="/informacion-legal#terminos-condiciones" class="text-reset text-decoration-none">
                    Términos y condiciones
                  </router-link>
                </p>
                <p>
                  <router-link to="/informacion-legal#politicas-calidad" class="text-reset text-decoration-none">
                    Políticas de calidad
                  </router-link>
                </p>
                <p class="mb-3">
                  <router-link to="/informacion-legal#aviso-privacidad" class="text-reset text-decoration-none">
                    Derechos ARCO
                  </router-link>
                </p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
        <div class="container justify-content-md-between py-3 border-top">
          <div class="row">
            <!-- Left -->
            <div class="col-md-9 col text-left" style="font-size: 14px;">
              Todos los derechos reservados © 2022. <strong>Learnify</strong>
            </div>
            <!-- Left -->
            <!-- Right -->
            <div class="sociales col-md-3 col text-end">
              <a href="" class="me-4 link-secondary" title="Síguenos en Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="me-4 link-secondary" title="Síguenos en Twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="me-4 link-secondary" title="Síguenos en Instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="me-4 link-secondary" title="Síguenos en Linkedin">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
            <!-- Right -->
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </section>
</template>

<script>

  export default {
      name: "Footer",
      data() {

      }
  }
</script>

<style scoped>
a:hover {
  color:#184E77 !important;
  font-weight: bold;
}
 @media only screen and (min-width: 300px) {
  .text-reset {
    font-size: 14px !important;
  }
}
</style>