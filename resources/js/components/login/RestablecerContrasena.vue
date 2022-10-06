<template>
    <section class="">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card rounded z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header rounded p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Restablecer contraseña</h4>
              </div>
            </div>
            <div class="card-body">
                <form action="" class="text-start">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mt-3 form-floating">
                                    <input type="password" id="label1" class="form-control" placeholder="Nueva contraseña">
                                    <label for="label1">Nueva contraseña</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mt-3 form-floating">
                                    <input type="password" id="label1" class="form-control" placeholder="Confirmar contraseña">
                                    <label for="label1">Confirmar contraseña</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="button">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</template>

<style>
    .card-header {
    margin-top: -60px;
    margin-left: 20px;
    margin-right: 20px;
    height: 150px;
    background: #184E77;
    box-shadow: 1px 5px 15px #A2A2A2;
    color: #FFFFFF;
}
</style>