<template>
    <section class="">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header rounded p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar Sesión</h4>
                <div class="row mt-3">
                  <div class="col-2 text-center ms-auto">
                   <!--<a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-facebook text-white text-lg"></i>
                    </a>-->
                  </div>
                  <div class="col-2 text-center px-1">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fab fa-google text-white text-lg"></i>
                    </a>
                  </div>
                  <div class="col-2 text-center me-auto">
                    <!--<a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-github text-white text-lg"></i>
                    </a>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
                <form action="" class="text-start">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mt-3 form-floating">
                                    <input type="email" id="label1" class="form-control" placeholder="Correo electrónico">
                                    <label for="label1">Correo electrónico</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mt-3 form-floating">
                                    <input type="password" id="label1" class="form-control" placeholder="Contraseña">
                                    <label for="label1">Contraseña</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="button">Iniciar sesión</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-center mt-3">
                                    <a href="">¿Olvidaste  tu contraseña?</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-center mt-3">
                                    <a href="">Crear cuenta</a>
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