<template>
  <nav class="navbar bg-light">
    <div class="container-fluid">
      <div class="container">
        <div class="clearfix">
          <p class="float-start navbar-brand fw-bold mr-4">Learnify</p>
          <p class="float-end navbar-brand" style="font-size: 12px; padding: 10px;">Cancelar</p>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="image d-none d-lg-block col-md-6 d-flex align-md-items-end justify-md-content-center justify-content-center">
        <img src="../../../img/PagoTarjeta.png" class="img-fluid w-100 text-center" />
      </div>
      <div class="form-pago col-md-6 pt-5">
        <div class="container">
          <div class="card">
          <h4 class="h4-responsive">Método de Pago</h4>
          <div class="clearfix">
            <p class="float-start fw-light">Tarjeta de crédito/débito</p>
            <p class="float-end">
              <img class="tarjeta p-1" src="../../../img/mastercard.png">
              <img class="tarjeta p-1" src="../../../img/visa.png">
              <img class="tarjeta p-1" src="../../../img/paypal.png">
            </p>
          </div>
            <form @submit.prevent="crearCuenta" class="text-start">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="mt-3 form-floating">
                      <input required type="text" id="validationCustom01" class="form-control" placeholder="Nombre del titular">
                      <label for="validationCustom01">Nombre del titular</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group has-feedback mt-3 form-floating">
                      <i class="fas fa-credit-card form-control-feedback"></i>
                      <input required type="number" max="16" id="validationCustom02" class="form-control" placeholder="Numero de tarjeta">
                      <label for="validationCustom02">Numero de tarjeta</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mt-3 form-floating">
                      <input required type="number" max="4" id="validationCustom03" class="form-control" placeholder="MM / AA">
                      <label for="validationCustom03">MM / AA</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mt-3 form-floating">
                      <input required type="number" max="3" id="validationCustom04" class="form-control" placeholder="CVC">
                      <label for="validationCustom04">CVC</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mt-3 form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" v-on:click="aceptarCondiciones" required>
                      <label class="form-check-label" for="flexCheckDefault">
                        Acepto los <router-link class="text-decoration-none" to="/informacion-legal" title="Ir a Términos y condiciones">términos y condiciones</router-link> de <strong>Learnify</strong>.
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="d-grid gap-2 mt-3">
                      <button class="btn-pago btn btn-primary" type="submit">Realizar pago</button>
                    </div>
                  </div>
                  <small class="text">Garantía de rembolso de 30 días</small>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "PagoTarjeta",
  setup() {

  }
}
</script>

<style scoped>
.navbar{
  padding: 1rem;
  background: #184E77 !important;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}
.navbar-brand {
  color: #FFFFFF;
}
.form-control-feedback {
  position: absolute;
  padding: 20px 0px 20px 420px;
  pointer-events: none;
  color: #454545;
  /* padding-left: 26rem; */
}
.form-check-input:focus {
  background: #184E77;
}
.card {
  border: none;
  border-radius: 1rem !important;
}
.h4-responsive{
  font-weight: bold;
  padding: 1rem !important;
}
.clearfix {
  padding-left: 1rem !important;
  padding-right: 1rem !important;
}
.tarjeta {
  width: 30px;
}
.form-pago {
  padding-top: 3rem !important;
}
.btn-pago {
  padding: 12px;
  border: 1rem !important;
}
input:focus {
    border: 2px solid #184E77 !important;
    box-shadow: none !important;
}
input:valid{
  border: 1px solid #6b7176 !important;
}
.text {
  font-size: 13px;
  text-align: center;
  color:#454545;
  margin-top: 1rem;
}
</style>