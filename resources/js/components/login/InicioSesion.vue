<template>
  <section class="inicio">
    <div class="page-header align-items-start max-vh-100 mb-5" style="background-image: url('');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header rounded p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-3 mb-0"><strong>Inicio Sesión</strong></h4>
                <p class="mb-0 mt-2 text-center">Ingrese su correo electrónico y contraseña para iniciar sesión</p>
                <!-- <div class="row mt-3">
                  <div class="col-2 text-center ms-auto">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-facebook text-white text-lg"></i>
                    </a>
                  </div>
                  <div class="col-2 text-center px-1">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fab fa-google text-white text-lg"></i>
                    </a>
                  </div>
                  <div class="col-2 text-center me-auto">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-github text-white text-lg"></i>
                    </a>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="card-body">
                <form @submit.prevent="iniciarSesion" class="text-start needs-validation">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mt-3 form-floating">
                                    <input type="email" id="validationCustom01" class="form-control" placeholder="Correo electrónico" v-model="user.email" required>
                                    <label for="validationCustom01">Correo electrónico</label>
                                </div>
                                <div class="valid-feedback">
                                  Ingrese su correo electrónico
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mt-3 form-floating">
                                    <input type="password" id="validationCustom02" class="form-control" placeholder="Contraseña" v-model="user.password" required>
                                    <label for="validationCustom02">Contraseña</label>
                                </div>
                                <div class="valid-feedback">
                                  Ingrese su contraseña
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn-inicio btn btn-primary" type="submit">Iniciar sesión</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-center mt-3">
                                  <p class="text">¿Olvidaste tu contraseña? <router-link class="text-decoration-none" to="/recuperar-contrasena">Presiona aquí</router-link></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-center mt-3">
                                    <router-link class="text text-decoration-none" to="/registrarse">Crear cuenta</router-link>
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

<style scoped>
    .inicio {
      padding-top: 10rem;
      padding-bottom: 10rem;
      height: 110vh;
      /* background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1055%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M180.03309788588592 10.855644305711259L27.77338966372872-60.144223666726226-43.22647830870875 92.11548455543098 109.03322991344844 163.11535252786845z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M-32.32073399441876 154.09011249310166L135.44902784434964 145.297671844287 126.656587195535-22.472089994481394-41.11317464323341-13.679649345666746z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M-45.1127078116777-28.843635832114806L-30.470543030071106 138.51707344729843 136.89016624934214 123.87490866569183 122.24800146773555-43.4858006137214z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1200.59 52.74 a180.15 180.15 0 1 0 360.3 0 a180.15 180.15 0 1 0 -360.3 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1252.0268373922192 53.69639987789902L1368.729443629331 174.54548633479234 1489.5785300862242 57.84288009768077 1372.8759238491125-63.00620635921256z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1463.542%2c270.628C1513.179%2c270.605%2c1560.241%2c248.631%2c1586.939%2c206.785C1615.876%2c161.43%2c1626.635%2c103.501%2c1599.987%2c56.764C1573.134%2c9.668%2c1517.748%2c-8.774%2c1463.542%2c-9.636C1407.488%2c-10.527%2c1347.158%2c3.614%2c1319.367%2c52.302C1291.745%2c100.694%2c1309.237%2c160.405%2c1339.942%2c206.902C1367.319%2c248.36%2c1413.86%2c270.652%2c1463.542%2c270.628' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M-129.87 503.2 a185.07 185.07 0 1 0 370.14 0 a185.07 185.07 0 1 0 -370.14 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M142.26%2c728.236C190.351%2c724.172%2c232.865%2c698.297%2c256.573%2c656.259C279.848%2c614.989%2c281.492%2c564.585%2c257.644%2c523.643C233.949%2c482.965%2c189.238%2c463.043%2c142.26%2c460.009C88.121%2c456.513%2c28.968%2c462.448%2c-2.184%2c506.865C-37.524%2c557.252%2c-44.89%2c627.35%2c-11.258%2c678.893C20.223%2c727.141%2c84.855%2c733.087%2c142.26%2c728.236' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M88.29%2c652.881C128.865%2c654.981%2c164.523%2c627.207%2c184.086%2c591.598C202.921%2c557.315%2c200.715%2c516.532%2c182.1%2c482.129C162.443%2c445.8%2c129.596%2c414.443%2c88.29%2c414.55C47.125%2c414.657%2c13.027%2c445.452%2c-4.682%2c482.613C-20.162%2c515.096%2c-8.988%2c550.915%2c8.257%2c582.497C26.505%2c615.917%2c50.264%2c650.913%2c88.29%2c652.881' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1476.667%2c764.027C1538.309%2c766.895%2c1598.092%2c737.996%2c1630.501%2c685.483C1664.572%2c630.277%2c1670.132%2c559.875%2c1637.131%2c504.023C1604.634%2c449.023%2c1540.533%2c423.638%2c1476.667%2c425.127C1415.512%2c426.553%2c1357.295%2c457.159%2c1328.662%2c511.216C1301.583%2c562.338%2c1316.549%2c622.311%2c1345.777%2c672.236C1374.633%2c721.526%2c1419.614%2c761.373%2c1476.667%2c764.027' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1443.146%2c685.016C1488.181%2c686.425%2c1531.128%2c665.896%2c1555.703%2c628.131C1582.805%2c586.484%2c1595.953%2c532.285%2c1570.178%2c489.804C1545.065%2c448.413%2c1491.559%2c442.915%2c1443.146%2c442.616C1394.001%2c442.312%2c1337.529%2c445.422%2c1313.363%2c488.216C1289.417%2c530.621%2c1315.35%2c580.795%2c1342.16%2c621.45C1365.63%2c657.039%2c1400.536%2c683.683%2c1443.146%2c685.016' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1494.6988672114792 432.11131507450233L1330.3700702881997 397.1821510171188 1295.4409062308164 561.5109479403982 1459.7697031540956 596.4401119977817z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1055'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e"); */
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1008%26quot%3b)' fill='none'%3e%3crect width='1920' height='1080' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M1495.3560602461457 627.8359980639812L1265.8155871366573 643.6672195105116 1375.3594572036002 812.349987027254z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M2.6884913033812836 865.2342962642653L178.33131427114213 689.5914732965043 2.6884913033811983 513.9486503287435-172.95433166437965 689.5914732965044z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M410.0947490753963 741.5466940707265L217.22357783119594 844.098114916864 319.7749986773335 1036.9692861610645 512.6461699215338 934.4178653149269z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1058.5150905244618 1092.819194568122L1236.3090294171589 977.3584606267102 974.220959058693 768.3979192583705z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M162.309%2c842.864C221.275%2c846.007%2c283.726%2c825.836%2c312.75%2c774.411C341.409%2c723.632%2c322.903%2c662.137%2c292.331%2c612.486C263.496%2c565.656%2c217.21%2c533.301%2c162.309%2c530.086C100.859%2c526.487%2c32.362%2c541.473%2c2.932%2c595.537C-25.722%2c648.174%2c4.838%2c709.351%2c37.301%2c759.728C66.354%2c804.814%2c108.749%2c840.009%2c162.309%2c842.864' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1244.929464124818 1122.7770793517086L1350.5269378990063 798.8322715815045 1058.1550912082043 855.6636015244283z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1008'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
    }
    .card-header {
    margin-top: -60px;
    margin-left: 20px;
    margin-right: 20px;
    height: 150px;
    background: #184E77;
    /* box-shadow: 1px 5px 15px #A2A2A2; */
    color: #FFFFFF;
    border: none;
    border-radius: 1rem !important;
}
.card {
  border: none;
  border-radius: 1rem !important;
}
.btn-inicio {
  padding: 12px;
}
input:focus {
    border: 2px solid #184E77 !important;
    box-shadow: none !important;
}
.text {
  font-size: 13px;
}
</style>

<script>
import $api from '../../store/api';
import { Toast } from '../helpers/Toast';

export default {
    data(){
        return {
            user: {
                email: "",
                password: ""
            }
        }
    },
    methods:{
        // Método que se ejecuta al dar clic en botón de -Iniciar Sesión-
        async iniciarSesion() {
          Swal.fire({
                title: 'Cargando ...',
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                }
            });
          // Hace petición al backend a la ruta 'api/login' y manda como body el objeto user
          await $api.post('login', this.user).then(response => {
            // En caso de que las credenciales sean correctas, se muestra una alerta con sweetalert del tipo 'toast'

            // Crea el token y muestra alerta
            localStorage.setItem('token', response.data.token);  

            // Después hace una redirección al inicio
            this.redireccionUsuario();
            Toast.fire({
              icon: 'success',
              title: '¡Bienvenido!'
            });

          }).catch(error=>{
            // En caso de que los datos sean incorrectos se muestra una alerta
            Swal.fire({
              title: '¡Credenciales incorrectas!',
              text: 'El correo electrónico o la contraseña ingresados no son correctos',
              icon: 'error',
              confirmButtonText: 'Cerrar'
            })
          })
        },
        async redireccionUsuario() {
          await $api.get('usuario').then(response => {
            let { data } = response.data;

            this.buscarEstudiante(data.id);
          });
        },
        async buscarEstudiante(idUsuario) {
          await $api.get(`estudiantes/buscar_perfil/${ idUsuario }`).then(response => {
            let perfil = response.data.estudiante;

            let redireccion = (perfil) ? 'Index' : 'IndexInstructor';
            this.$router.push({ name: redireccion });
          });
        }
    }
}
</script>