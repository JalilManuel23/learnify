<template>
    <section id="contacto" class="contact pb-4" v-bind:style="$route.name == 'Contacto' ? 'padding-top: 20vh;' : 'padding-top: 10vh;'">
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

<script>
    export default {
        name: "Contacto"
    }
</script>