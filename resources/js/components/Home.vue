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
              <router-link to="/inicio-sesion" class="btn btn-light px-4 py-2"
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
    <div class="container py-5">
      <div class="row pt-5">
        <div class="col-md-12">
          <div class="main">
            <div href="#" class="line">
              <div class="line-icon"><i class="fa fa-globe"></i></div>
              <div class="line-content">
                <h3 class="title">APRENDIZAJE GLOBALIZADO</h3>
                <p class="description">
                  Lo importante es logran un aprendizaje de forma global con el fin de que en el futuro se adquiera la necesidad de ser creativo,
                  interesado por la investigación y responsable de sus propios conocimientos.
                </p>
              </div>
            </div>
            <div href="#" class="line">
              <div class="line-icon"><i class="fa fa-rocket"></i></div>
              <div class="line-content">
                <h3 class="title">INNOVACIÓN EDUCATIVA</h3>
                <p class="description">
                  Este espacio de innovación educativa se constituye como contextos de aprendizaje,
                  donde estudiantes, profesores y comunidades universitarias se hallan en una arena de encuentro común.
                </p>
              </div>
            </div>
            <div href="#" class="line">
              <div class="line-icon"><i class="fa fa-briefcase"></i></div>
              <div class="line-content">
                <h3 class="title">AGREGANOS A TU CURRICULUM</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                </p>
              </div>
            </div>
            <div href="#" class="line">
              <div class="line-icon"><i class="fa fa-mobile"></i></div>
              <div class="line-content">
                <h3 class="title">APRENDE DESDE CUALQUIER DISPOSITIVO</h3>
                <p class="description">
                  Ahora el aprender no será un pretexto, con la tecnología de hoy en día aumentan las opciones de formas increíbles para que aprendas a tu ritmo desde cualquier lugar
                  y en cualquier momento que querramos, siempre y cuando tengas un dispositivo inteligente.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="final">

    </div>
    <!-- <Contacto /> -->

    <BurbujaWhatsapp />
    <Footer />

  </div>
</template>

<script>
  import Categorias from './home/Categorias.vue';
  import Planes from './home/Planes.vue';
  import Contacto from './home/Contacto.vue';
  import Footer from './home/Footer.vue';
  import BurbujaWhatsapp from './BurbujaWhatsapp.vue';

  export default {
    name: "Home",
    components: {
      Categorias,
      Planes,
      Contacto,
      Footer,
      BurbujaWhatsapp
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

@media screen and (min-width: 300px) {
  .title-container {
    margin-top: 5vh;
  }
}

h4 {text-align:center;margin:30px 0;color:#444}
.main{position:relative}
.main:before{content:"";width:5px;height:100%;border-radius:20px;margin:0 auto;background:#9C9C9C;position:absolute;top:0;left:0;right:0}
.main .line{display:inline-block;margin-bottom:50px;position:relative}
.main .line:before{content:"";width:20px;height:20px;border-radius:50%;border:4px solid #fff;background:#184C77;position:absolute;top:50%;left:50%;z-index:1;transform:translate(-50%,-50%)}
.main .line-icon{display:inline-block;width:130px;height:130px;border-radius:50%;border:3px solid #184C77;padding:13px;text-align:center;position:absolute;top:50%;left:30%;transform:translateY(-50%)}
.main .line-icon i{display:block;border-radius:50%;background:#184C77;font-size:64px;color:#fff;line-height:100px;z-index:1;position:relative}
.main .line-icon:after,.main .line-icon:before{content:"";width:100px;height:4px;background:#184C77;position:absolute;top:50%;right:-100px;transform:translateY(-50%)}
.main .line-icon:after{width:70px;height:50px;background:#fff;top:89px;right:-30px}
.main .line-content{width:50%;padding:0 50px;margin:52px 0 0;float:right;position:relative}
.main .line-content:before{content:"";width:70%;height:100%;border:3px solid #184C77;border-top:none;border-right:none;position:absolute;bottom:-13px;left:35px}
.main .line-content:after{content:"";width:37px;height:3px;background:#184C77;position:absolute;top:13px;left:0}
.main .title{font-size:20px;font-weight:600;color:#184C77;text-transform:uppercase;margin:0 0 5px}
.main .description{display:inline-block;font-size:16px;color:#404040;line-height:20px;letter-spacing:1px;margin:0}
.main .line:nth-child(even) .line-icon{left:auto;right:30%}
.main .line:nth-child(even) .line-icon:before{right:auto;left:-100px}
.main .line:nth-child(even) .line-icon:after{right:auto;left:-30px}
.main .line:nth-child(even) .line-content{float:left}
.main .line:nth-child(even) .line-content:before{left:auto;right:35px;transform:rotateY(180deg)}
.main .line:nth-child(even) .line-content:after{left:auto;right:0}
.main .line:nth-child(2n) .line-content:after,.main .line:nth-child(2n) .line-icon i,.main .line:nth-child(2n) .line-icon:before,.main .line:nth-child(2n):before{background:#f9850f;}
.main .line:nth-child(2n) .line-icon{border-color:#f9850f}
.main .line:nth-child(2n) .title{color:#f9850f}
.main .line:nth-child(2n) .line-content:before{border-left-color:#f9850f;border-bottom-color:#f9850f;}
.main .line:nth-child(3n) .line-content:after,.main .line:nth-child(3n) .line-icon i,.main .line:nth-child(3n) .line-icon:before,.main .line:nth-child(3n):before{background:#8fb800}
.main .line:nth-child(3n) .line-icon{border-color:#8fb800}
.main .line:nth-child(3n) .title{color:#8fb800}
.main .line:nth-child(3n) .line-content:before{border-left-color:#8fb800;border-bottom-color:#8fb800}
.main .line:nth-child(4n) .line-content:after,.main .line:nth-child(4n) .line-icon i,.main .line:nth-child(4n) .line-icon:before,.main .line:nth-child(4n):before{background:#2fcea5}
.main .line:nth-child(4n) .line-icon{border-color:#2fcea5}
.main .line:nth-child(4n) .title{color:#2fcea5}
.main .line:nth-child(4n) .line-content:before{border-left-color:#2fcea5;border-bottom-color:#2fcea5}
@media only screen and (max-width:1200px){.main .line-icon:before{width:50px;right:-50px}
.main .line:nth-child(even) .line-icon:before{right:auto;left:-50px}
.main .line-content{margin-top:75px}
}
@media only screen and (max-width:990px){.main .line{margin:0 0 10px}
.main .line-icon{left:25%}
.main .line:nth-child(even) .line-icon{right:25%}
.main .line-content{margin-top:115px}
}
@media only screen and (max-width:767px){.main{padding-top:50px}
.main:before{left:80px;right:0;margin:0}
.main .line{margin-bottom:70px}
.main .line:before{top:0;left:83px;right:0;margin:0}
.main .line-icon{width:60px;height:60px;line-height:40px;padding:5px;top:0;left:0}
.main .line:nth-child(even) .line-icon{left:0;right:auto}
.main .line-icon:before,.main .line:nth-child(even) .line-icon:before{width:25px;left:auto;right:-25px}
.main .line-icon:after,.main .line:nth-child(even) .line-icon:after{width:25px;height:30px;top:44px;left:auto;right:-5px}
.main .line-icon i{font-size:30px;line-height:45px}
.main .line-content,.main .line:nth-child(even) .line-content{width:100%;margin-top:-15px;padding-left:130px;padding-right:5px}
.main .line:nth-child(even) .line-content{float:right}
.main .line-content:before,.main .line:nth-child(even) .line-content:before{width:50%;left:120px}
.main .line:nth-child(even) .line-content:before{right:auto;transform:rotateY(0)}
.main .line-content:after,.main .line:nth-child(even) .line-content:after{left:85px}
}
@media only screen and (max-width:479px){.main .line-content,.main .line:nth-child(2n) .line-content{padding-left:110px}
.main .line-content:before,.main .line:nth-child(2n) .line-content:before{left:99px}
.main .line-content:after,.main .line:nth-child(2n) .line-content:after{left:65px}
}
.final {
  min-height: 30vh;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='250' preserveAspectRatio='none' viewBox='0 0 1440 250'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1003%26quot%3b)' fill='none'%3e%3crect width='1440' height='250' x='0' y='0' fill='rgba(255%2c 255%2c 255%2c 1)'%3e%3c/rect%3e%3cpath d='M25 250L275 0L326 0L76 250z' fill='url(%23SvgjsLinearGradient1004)'%3e%3c/path%3e%3cpath d='M266.6 250L516.6 0L758.1 0L508.1 250z' fill='url(%23SvgjsLinearGradient1004)'%3e%3c/path%3e%3cpath d='M487.20000000000005 250L737.2 0L1040.2 0L790.2 250z' fill='url(%23SvgjsLinearGradient1004)'%3e%3c/path%3e%3cpath d='M736.8000000000001 250L986.8000000000001 0L1342.3000000000002 0L1092.3000000000002 250z' fill='url(%23SvgjsLinearGradient1004)'%3e%3c/path%3e%3cpath d='M1430 250L1180 0L1102 0L1352 250z' fill='url(%23SvgjsLinearGradient1005)'%3e%3c/path%3e%3cpath d='M1181.4 250L931.4000000000001 0L635.9000000000001 0L885.9000000000001 250z' fill='url(%23SvgjsLinearGradient1005)'%3e%3c/path%3e%3cpath d='M947.8 250L697.8 0L426.29999999999995 0L676.3 250z' fill='url(%23SvgjsLinearGradient1005)'%3e%3c/path%3e%3cpath d='M711.1999999999999 250L461.19999999999993 0L224.19999999999993 0L474.19999999999993 250z' fill='url(%23SvgjsLinearGradient1005)'%3e%3c/path%3e%3cpath d='M1244.6190983420154 250L1440 54.61909834201535L1440 250z' fill='url(%23SvgjsLinearGradient1004)'%3e%3c/path%3e%3cpath d='M0 250L195.38090165798465 250L 0 54.61909834201535z' fill='url(%23SvgjsLinearGradient1005)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1003'%3e%3crect width='1440' height='250' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='0%25' y1='100%25' x2='100%25' y2='0%25' id='SvgjsLinearGradient1004'%3e%3cstop stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='100%25' y1='100%25' x2='0%25' y2='0%25' id='SvgjsLinearGradient1005'%3e%3cstop stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e");
  background-repeat: no-repeat;
  padding: 0;
}
</style>