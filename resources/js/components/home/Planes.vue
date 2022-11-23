<style>

.pricing .card {
   border: none;
   border-radius: 1rem;
   transition: all 0.2s;
   box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
   margin: 1.5rem 0;
}

.pricing .card-title {
   margin: 0.5rem 0;
   font-size: 0.9rem;
   letter-spacing: .1rem;
   font-weight: bold;
}

.pricing .card-price {
   font-size: 3rem;
   margin: 0;
}

.pricing .card-price .period {
   font-size: 0.8rem;
}

.pricing ul li {
   margin-bottom: 1rem;
}

.pricing .text-muted {
   opacity: 0.7;
}

.pricing .btn {
   font-size: 80%;
   border-radius: 5rem;
   letter-spacing: .1rem;
   font-weight: bold;
   padding: 1rem;
   opacity: 0.7;
   transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
   .pricing .card:hover {
      margin-top: -.25rem;
      margin-bottom: .25rem;
      box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
   }

   .pricing .card:hover .btn {
      opacity: 1;
   }
}
</style>

<template>
   <section id="planes"
      v-bind:style="$route.name == 'Planes' ? 'padding-top: 20vh;padding-bottom: 25vh;' : 'padding-top: 0;'"
      class="pricing">
      <div class="container">
         <!--Section heading-->
         <h2 class="h1-responsive font-weight-bold text-center ">
            Planes
         </h2>
         <!--Section description-->
         <p class="text-center w-responsive mx-auto mb-5">
            Descubre los distintos planes que tenemos para ti, y elige el que más se acomode a tus necesidades.
         </p>
         <div class="row">
            <!-- Free Tier -->
            <div class="col-lg-4">
               <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                     <h5 class="card-title text-muted text-uppercase text-center">Básico</h5>
                     <h6 class="card-price text-center">$99<span class="period">/mes</span></h6>
                     <hr>
                     <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a cursos limitados</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Obtención de Constancia de Participación</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a actividades y evaluaciones limitadas</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Obtención de Certificado de Nivel de Conocimiento</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Asesorías Personalizadas</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Espacio para realización de Proyectos</li>
                     </ul>
                     <div class="d-grid">
                        <router-link to="/plan-basico" class="btn btn-primary text-uppercase">¡Lo quiero!</router-link>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Plus Tier -->
            <div class="col-lg-4">
               <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                     <h5 class="card-title text-muted text-uppercase text-center">Intermedio</h5>
                     <h6 class="card-price text-center">$179<span class="period">/mes</span></h6>
                     <hr>
                     <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a cursos limitados</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Obtención de Constancia de Participación</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a actividades y evaluaciones limitadas</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Obtención de Certificado de Nivel de Conocimiento</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Asesorías Personalizadas</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Espacio para realización de Proyectos</li>
                     </ul>
                     <div class="d-grid">
                        <router-link to="/plan-intermedio" class="btn btn-primary text-uppercase">¡Lo quiero!</router-link>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Pro Tier -->
            <div class="col-lg-4">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                     <h6 class="card-price text-center">$259<span class="period">/mes</span></h6>
                     <hr>
                     <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a cursos limitados</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Obtención de Constancia de Participación</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a actividades y evaluaciones limitadas</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Obtención de Certificado de Nivel de Conocimiento</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Asesorías Personalizadas</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Espacio para realización de Proyectos</li>
                     </ul>
                     <div class="d-grid">
                        <router-link to="/plan-pro" class="btn btn-primary text-uppercase">¡Lo quiero!</router-link>
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
   name: "Planes"
}
</script>