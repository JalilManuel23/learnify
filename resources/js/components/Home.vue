<template>
  <section class="home">
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
  <section class="categorias">
    <div class="container py-5">
      <div>
        <h2 class="h1-responsive font-weight-bold text-center mb-3">
          Categorías
        </h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">
          Aprende lo que necesitas para desarrollar tu perfil profesional
        </p>
        <div class="row">
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card">
              <!-- Card body -->
              <div class="card-body p-3">
                <div class="d-flex align-items-center">
                  <img src="../../img/desarrollo-ingenieria.png" class="img-fluid w-25 text-center">
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
                <img src="../../img/marketing.png" class="img-fluid w-25 text-center">
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
                <img src="../../img/english.png" class="img-fluid w-25 text-center">
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
                <img src="../../img/diseno-ux.png" class="img-fluid w-25 text-center">
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
                <img src="../../img/finanzas.png" class="img-fluid w-25 text-center">
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
                <img src="../../img/videogame.png" class="img-fluid w-25 text-center">
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
                <img src="../../img/estilo-de-vida.png" class="img-fluid w-25 text-center">
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
                <img src="../../img/liderazgo.png" class="img-fluid w-25 text-center">
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
  </section>
  <section class="contact">
    <div class="container align-items-center my-4">
      <section class="mb-4">
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center ">
          Contáctanos
        </h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">
          ¿Tienes alguna duda? Envíanos un mensaje
        </p>

        <div class="row">
          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
            <form
              id="contact-form"
              name="contact-form"
              action="mail.php"
              method="POST"
            >
              <!--Grid row-->
              <div class="row">
              
                <!--Grid column-->
                <div class="col-md-6">
                  <label for="name" class="">Nombre</label>
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="name"
                      name="name"
                      class="form-control"
                    />
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                
                <div class="col-md-6">
                  <label>Correo</label>
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="email"
                      name="email"
                      class="form-control"
                    />
                  </div>
                </div>

                <!--Grid column-->
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <label for="subject" class="">Asunto</label>

                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="subject"
                      name="subject"
                      class="form-control"
                    />
                  </div>
                </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <label for="message">Mensaje</label>

                <!--Grid column-->
                <div class="col-md-12">
                  <div class="md-form">
                    <textarea
                      type="text"
                      id="message"
                      name="message"
                      rows="2"
                      class="form-control md-textarea"
                    ></textarea>
                  </div>
                </div>
              </div>
              <!--Grid row-->
            </form>

            <div class="text-center text-md-left ">
              <a
                class="btn btn-primary mt-4"
                onclick=""
                >Enviar</a
              >
            </div>
            <div class="status"></div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
              <li>
                <i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Durango - Mezquital, 34308 Gabino Santillán, Dgo.</p>
              </li>

              <li>
                <i class="fas fa-phone mt-4 fa-2x"></i>
                <br>
                <a style="text-decoration: none;" class="text-black" href="tel:+526181373050">+52 618 137 30 50</a>
              </li>

              <li>
                <i class="fas fa-envelope mt-4 fa-2x"></i>
                <br>
                <a style="text-decoration: none;" class="text-black" href="emailto:paolarosalesv2001@gmail.com">paolarosalesv2001@gmail.com</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
      </section>
    </div>
  </section>
</template>

<style>
.home {
  min-height: 150vh;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1008%26quot%3b)' fill='none'%3e%3crect width='1920' height='1080' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M1495.3560602461457 627.8359980639812L1265.8155871366573 643.6672195105116 1375.3594572036002 812.349987027254z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M2.6884913033812836 865.2342962642653L178.33131427114213 689.5914732965043 2.6884913033811983 513.9486503287435-172.95433166437965 689.5914732965044z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M410.0947490753963 741.5466940707265L217.22357783119594 844.098114916864 319.7749986773335 1036.9692861610645 512.6461699215338 934.4178653149269z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1058.5150905244618 1092.819194568122L1236.3090294171589 977.3584606267102 974.220959058693 768.3979192583705z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M162.309%2c842.864C221.275%2c846.007%2c283.726%2c825.836%2c312.75%2c774.411C341.409%2c723.632%2c322.903%2c662.137%2c292.331%2c612.486C263.496%2c565.656%2c217.21%2c533.301%2c162.309%2c530.086C100.859%2c526.487%2c32.362%2c541.473%2c2.932%2c595.537C-25.722%2c648.174%2c4.838%2c709.351%2c37.301%2c759.728C66.354%2c804.814%2c108.749%2c840.009%2c162.309%2c842.864' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1244.929464124818 1122.7770793517086L1350.5269378990063 798.8322715815045 1058.1550912082043 855.6636015244283z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1008'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
  color: #fff;
}

h1 {
  font-weight: bold;
  font-size: 9vmin;
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