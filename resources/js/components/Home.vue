<template>
  <div>
    <section id="header" class="home">
      <div class="container vh-100 d-flex align-items-center">
        <div class="row">
          <div
            class="
              col-md-6 col-12
              text-center
              d-flex
              flex-column
              align-md-items-start
              justify-md-content-start justify-content-center
              align-items-center
            "
          >
            <div class="title-container text-md-start text-center mb-4">
              <h1>Aprende sin límites</h1>
              <p>
                Somos la plataforma de aprendizaje y desarrollo de talento que
                ayuda a construir equipos más competitivos.
              </p>
            </div>
            <div>
              <router-link to="/" class="btn btn-light px-4 py-2"
                >Empezar ahora</router-link
              >
            </div>
          </div>
          <div
            class="
              col-md-6
              d-flex
              align-md-items-end
              justify-md-content-center justify-content-center
              pt-md-5
              mt-5
            "
          >
            <img src="../../img/bg.png" class="img-fluid w-100 text-center" />
          </div>
        </div>
      </div>
    </section>

    <Categorias />
    <Planes />
    <Contacto />

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
              <div class="col-md-3 col-lg-4 col-xl-5 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">Learnify
                </h6>
                <form action="">
                  <!--Grid row-->
                  <div class="row">
                    <!--Grid column-->
                    <div class="col-auto mb-4 mb-md-0">
                      <p class="pt-2 pb-4">
                        <strong>Suscribete a nuestro boletín de noticias</strong>
                      </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-7 col-12 mb-4 mb-md-0">
                      <!-- Email input -->
                      <div class="form-outline mb-4 form-floating">
                        <input type="email" id="label" class="form-control form-control-sm" placeholder="Correo electrónico"/>
                        <label class="form-label col-form-label col-form-label-sm" for="label">Correo electrónico</label>
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto mb-4 mb-md-0">
                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary mb-4">
                        Subscribe
                      </button>
                    </div>
                    <!--Grid column-->
                  </div>
                  <!--Grid row-->
                </form>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Categorías
                </h6>
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
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4" style="color:#FFF;">
                  Categorías
                </h6>
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
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Enlaces de ayuda</h6>
                <p>
                  <a href="#!" class="text-reset text-decoration-none">Sobre Learnify</a>
                </p>
                <p>
                  <a href="#!" class="text-reset text-decoration-none">Centro de ayuda</a>
                </p>
                <p>
                  <a href="#!" class="text-reset text-decoration-none">Aviso de privacidad</a>
                </p>
                <p>
                  <a href="#!" class="text-reset text-decoration-none">Términos y condiciones</a>
                </p>
                <p>
                  <a href="#!" class="text-reset text-decoration-none">Políticas de calidad</a>
                </p>
                <p>
                  <a href="#!" class="text-reset text-decoration-none">Derechos ARCO</a>
                </p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
        <div class="container justify-content-lg-between p-4 border-top">
          <div class="row">
            <!-- Left -->
            <div class="col text-left">
              Todos los derechos reservados © 2022
              <a class="text-reset fw-bold text-decoration-none" href="">Learnify</a>
            </div>
            <!-- Left -->
            <!-- Right -->
            <div class="col text-end">
              <a href="" class="me-4 link-secondary">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="me-4 link-secondary">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="me-4 link-secondary">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="me-4 link-secondary">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
            <!-- Right -->
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </section>
  </div>
</template>

<script>
  import Categorias from './home/Categorias.vue';
  import Planes from './home/Planes.vue';
  import Contacto from './home/Contacto.vue';

  export default {
    name: "Home",
    components: {
      Categorias,
      Planes,
      Contacto
    }
  }
</script>

<style>
.home {
  min-height: 120vh;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1008%26quot%3b)' fill='none'%3e%3crect width='1920' height='1080' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M1495.3560602461457 627.8359980639812L1265.8155871366573 643.6672195105116 1375.3594572036002 812.349987027254z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M2.6884913033812836 865.2342962642653L178.33131427114213 689.5914732965043 2.6884913033811983 513.9486503287435-172.95433166437965 689.5914732965044z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M410.0947490753963 741.5466940707265L217.22357783119594 844.098114916864 319.7749986773335 1036.9692861610645 512.6461699215338 934.4178653149269z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1058.5150905244618 1092.819194568122L1236.3090294171589 977.3584606267102 974.220959058693 768.3979192583705z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M162.309%2c842.864C221.275%2c846.007%2c283.726%2c825.836%2c312.75%2c774.411C341.409%2c723.632%2c322.903%2c662.137%2c292.331%2c612.486C263.496%2c565.656%2c217.21%2c533.301%2c162.309%2c530.086C100.859%2c526.487%2c32.362%2c541.473%2c2.932%2c595.537C-25.722%2c648.174%2c4.838%2c709.351%2c37.301%2c759.728C66.354%2c804.814%2c108.749%2c840.009%2c162.309%2c842.864' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1244.929464124818 1122.7770793517086L1350.5269378990063 798.8322715815045 1058.1550912082043 855.6636015244283z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1008'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
  color: #fff;
}

h1 {
  font-weight: bold;
  font-size: 9vmin;
}
.card-bg{
    margin-top: -150px;
    margin-left: 50px;
    margin-right: 50px;
    border: transparent;
}
.title-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
  width: 85%;
  font-size: 2.5vmin;
}

@media (min-width: 300px) {
  .title-container {
    margin-top: 5vh;
  }
}
</style>