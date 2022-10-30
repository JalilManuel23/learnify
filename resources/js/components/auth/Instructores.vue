<template>
  <section class="gradient-custom-2">
    <div class="container p-2">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-9 col-xl-12">
          <div class="card">
            <div class="rounded-top text-black d-flex flex-row" style="background-color: #eeeeee; height: 200px">
              <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px">
                <img
                  src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                  alt="Generic placeholder image"
                  class="img-fluid img-thumbnail mt-4 mb-2"
                  style="width: 200px; z-index: 1; border-radius: 50%"
                />
              </div>
              <div class="ms-3 d-flex" style="margin-top: 140px">
                <h5 style="font-size: 25px">Alejandra Barbosa</h5>
              </div>
            </div>
            <div class="p-4 text-black" style="background-color: #f8f9fa">
              <div class="d-flex justify-content-end text-center py-1">
                <div>
                  <button
                  type="button"
                  class="btn btn-outline-primary"
                  data-mdb-ripple-color="dark"
                  style="z-index: 1"
                >Seguir
                </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5" id="informacion">
                <div class="about-me d-flex justify-content-between">
                  <h5 class="mb-1 mt-5">Sobre mi</h5>  
                </div>
                  <p>
                    No olvides seleccionar tus habilidades para poder recomedarte
                    nuestros mejores cursos.
                  </p>
                <hr/>
                <div class="about-me d-flex justify-content-between">
                  <h5 class="mb-1">Mis habilidades</h5>
                </div>
                  <p>
                    No olvides seleccionar tus habilidades para poder recomedarte
                    nuestros mejores cursos.
                  </p>     
                <hr/>
                <div class="about-me d-flex justify-content-between">
                  <h5 class="mb-1">Sobre mi </h5>
                </div>
                  <p class="mb-5">
                    No olvides seleccionar tus habilidades para poder recomedarte
                    nuestros mejores cursos.
                  </p>     
              </div>
              <div class="col-md-7">
                <div class="p-4 text-black" style="background-color: #eeeeee;">
                  <div class="d-flex justify-content-around text-center py-1">
                  <div>
                    <p class="mb-1 h5">00 <i class="fas fa-folder-plus icon-progress"></i></p>
                    <p class="small text-muted mb-0">Cursos impartidos</p>
              </div>
              <div class="px-3">
                <p class="mb-1 h5">00 <i class="fas fa-check-double icon-progress"></i></p>
                <p class="small text-muted mb-0">Estudiantes</p>
              </div>
              <div>
                <p class="mb-1 h5">00 <i class="fas fa-medal icon-progress"></i></p>
                <p class="small text-muted mb-0">Calificación</p>
              </div>
            </div>
          </div>

                <div class="suggestions" style="background-color: white; height: 200px">
                <h5 class="py-5" style="font-size: 30px"><b>Mis cursos</b></h5>
                <div class="card-group">
                  <div class="card">
                    <img class="card-img-top" src="" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
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
        name: "Instructores",
    };
</script>

<style>
.card {
  border: none;
}
#informacion {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}
</style>