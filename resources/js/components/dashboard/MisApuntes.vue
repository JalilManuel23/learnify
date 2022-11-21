<template>
  <section class="gradient-custom-2">
    <div class="container p-2">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-9 col-xl-12">
          <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
            <strong>Mis Apuntes</strong>
          </h2>
          <div class="container">
          <div class="mt-2">
            <div class="container py-5">
              <div class="card py-5">
                <div class="card-body text-center">
                  <div class="icono d-flex flex-column align-items-center justify-content-center pb-3">
                    <i class="fas fa-edit" aria-hidden="true"></i>
                  </div>
                  <h4>
                    Todavía no haz tomado apuntes de tus cursos
                  </h4>
                  <p>¡No pierdas ningún detalle! Toma nota de lo que sea más interesante para ti</p>
                  <router-link to="" class="btn btn-primary border-2 fw-bold mx-md-2 mt-5 w-25" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Crear nota
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fs-5" id="exampleModalLabel">Crear nota</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <!-- <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Seleccionar curso</label>
              <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option selected>Seleccionar...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div> -->
            <!-- <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Escribe tu nota</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> -->
            <div class="form-floating mb-3">
              <select class="form-select" id="floatingSelectGrid">
                <option selected>Selecciona un curso</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <label for="floatingSelectGrid">Selecciona un curso</label>
            </div>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Escribe tu nota</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button> -->
          <a type="button" class="btn btn-primary">Guardar</a>
        </div>
      </div>
    </div>
  </div>
  <AuthFooter />
</template>

<script>
import AuthFooter from '../auth/Footer.vue';

export default {
  name: "MisApuntes",
  setup() {

  },
  components: { AuthFooter }
}
</script>

<style scoped>
.icono {
    background: #fff;
    border-radius: 50%;
    font-size: 10vmin;
    margin-bottom: 10px;
}
select:focus, textarea:focus, a:focus {
    border: 2px solid #184E77 !important;
    box-shadow: none !important;
}
button:focus {
  box-shadow: none !important;
}
router-link:focus {
  box-shadow: none !important;
}
.modal .modal-dialog .modal-content {
    border: none;
    border-radius: 1rem !important;
  }
</style>