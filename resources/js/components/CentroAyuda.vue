<template>
    <section id="header" class="inicio">
      <div class="container d-flex align-items-center">
        <div class="row">
          <div class="col-md-7 col text-center d-flex flex-column align-md-items-start justify-md-content-start justify-content-center align-items-center">
            <div class="title-container text-md-start text-center">
              <h1 class="display-6">Centro de Ayuda</h1>
              <nav class="mt-2" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><router-link to="/" class="text-decoration-none" style="color:#184E77">Inicio</router-link></li>
                    <li class="breadcrumb-item active" aria-current="page"><strong>Centro de Ayuda</strong></li>
                </ol>
            </nav>
            </div>
          </div>
          <div class="col-md-5 col d-flex align-md-items-end justify-md-content-center justify-content-center pt-md-5 mt-5">
            <img src="../../img/questions.png" class="img-fluid w-75 text-center" />
          </div>
        </div>
      </div>
    </section>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-9">
                <h2 class="h1-responsive font-weight-bold text-left mb-5 mt-4">
                    <b>Preguntas Frecuentes</b>
                </h2>
            </div>
            <div class="col-md-3">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                    <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../../../img/desarrollo-ingenieria.png')"></div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <p>¿Cómo puedo tomar un curso de <strong> Learnify</strong>?</p>
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-break">Todos los cursos de <strong>Learnify</strong> son bajo demanda y puedes acceder a ellos desde diversos dispositivos y plataformas, incluidos equipos de escritorio, portátiles.
                                Después de inscribirte en un curso, puedes acceder a él iniciando sesión y navegando hasta la página la sección de mis cursos.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <p>¿Qué incluyen los cursos de <strong> Learnify</strong>?</p>
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-break">
                                Los instructores crean, poseen y gestionan cada curso de <strong>Learnify</strong>. La base de cada curso de <strong>Learnify</strong> son sus clases, que pueden incluir vídeos, diapositivas y texto.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <p>¿Cómo puedo pagar un curso de <strong>Learnify</strong>?</p>
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-break">
                                Actualmente, <strong>Learnify</strong> admite métodos de pago con tarjetas de crédito y débito.
                                Para pagar y puedas adquirir un curso, sigue estos pasos:<br>
                                1. Después de encontrar el curso en el que deseas inscribirte, haz clic en la canastita en la página de inicio del curso.<br>
                                2. Se te dirigirá a la página de Pago.<br>
                                3. Ingresa los campos que se requieren de tu tarjeta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script>
    import Footer from './home/Footer.vue';
    export default {
        name: "CentroAyuda",
        components: { Footer }
    }
</script>

<style scoped>
    .inicio {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1008%26quot%3b)' fill='none'%3e%3crect width='1920' height='1080' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M1495.3560602461457 627.8359980639812L1265.8155871366573 643.6672195105116 1375.3594572036002 812.349987027254z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M2.6884913033812836 865.2342962642653L178.33131427114213 689.5914732965043 2.6884913033811983 513.9486503287435-172.95433166437965 689.5914732965044z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M410.0947490753963 741.5466940707265L217.22357783119594 844.098114916864 319.7749986773335 1036.9692861610645 512.6461699215338 934.4178653149269z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1058.5150905244618 1092.819194568122L1236.3090294171589 977.3584606267102 974.220959058693 768.3979192583705z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M162.309%2c842.864C221.275%2c846.007%2c283.726%2c825.836%2c312.75%2c774.411C341.409%2c723.632%2c322.903%2c662.137%2c292.331%2c612.486C263.496%2c565.656%2c217.21%2c533.301%2c162.309%2c530.086C100.859%2c526.487%2c32.362%2c541.473%2c2.932%2c595.537C-25.722%2c648.174%2c4.838%2c709.351%2c37.301%2c759.728C66.354%2c804.814%2c108.749%2c840.009%2c162.309%2c842.864' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1244.929464124818 1122.7770793517086L1350.5269378990063 798.8322715815045 1058.1550912082043 855.6636015244283z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1008'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
    }
    h1 {
        font-weight: bold;
        font-size: 10vmin;
        color: #FFFFFF;
    }
    .accordion-item , .accordion-header {
        background: transparent !important;
        border: none !important;
        padding: 0 !important;
        margin-bottom: 20px;
    }
    div .accordion-item {
        /* box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3); */
        /* box-shadow: 0 2px 20px 0 rgba(110, 130, 208, .18); */
        border-radius: 1rem !important;
    }
    .accordion-button {
        width: 100%;
        height: 60px;
        color: #184E77;
        font-weight: bold !important;
        /* border-left: 5px solid #184E77; */
        border-radius: 12px;
    }
    .accordion-button:focus {
        box-shadow: none !important;
    }
    .accordion-body {
        background-color: #FFFFFF;
    }

     .accordion-flush .accordion-item .accordion-button {
        border-radius: 1rem;
    }
    .accordion-item , .accordion-header {
        background: transparent !important;
        border: none !important;
        padding: 0 !important;
        margin-bottom: 20px;
    }
    .accordion-button {
        width: 100%;
        height: 60px;
        color: #184E77;
        background-color: #eef5fb;
        border-radius: 12px;
    }
    p {
        text-align: justify;
    }
    @media only screen and (max-width: 1176px) {
       .display-6 {
        font-size: 8vmin;
       } 
    }
    @media only screen and (max-width: 700px) {
        .inicio .container .row {
            margin-top: 10vh !important;
            margin-bottom: 10vh !important;
        }
        .title-container {
            margin-top: 10vh;
            text-align: left !important;
        }
         .title-container .display-6 {
            font-size: 7vmin !important;
        }
        .accordion-body {
            /* padding-bottom: 25px; */
            font-size: 12px !important;
        }
    }
    @media only screen and (max-width: 598px) {
        .inicio {
            padding: 5px;
        }
        .inicio .container .row {
            margin-top: 5vh !important;
            margin-bottom: 5vh !important;
        }
        .title-container {
            margin-top: 10vh;
            text-align: left !important;
        }
         .title-container .display-6 {
            font-size: 7vmin !important;
        }
        p {
            font-size: 12px;
        }
    }
</style>
