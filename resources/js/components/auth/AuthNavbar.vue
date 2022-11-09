<template>
  <div class="sidebar" v-bind:class="[(isOpen) ? 'open' : '']">
    <div class="logo-details">
        <div class="logo_name">Learnify</div>
        <div class='bx bx-menu' id="btn" v-on:click="this.toggleCloseButton()">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
    </div>
    <hr style="color:#F2F2F2;">
    <ul class="nav-list">
      <li>
        <router-link to="">
          <i class="fas fa-home" aria-hidden="true"></i>
          <span class="links_name">Inicio</span>
        </router-link>
         <span class="tooltip">Inicio</span>
      </li>
      <li>
       <router-link to="">
        <i class="fas fa-folder" aria-hidden="true"></i>
        <span class="links_name">Mis cursos</span>
       </router-link>>
       <span class="tooltip">Mis cursos</span>
      </li>
      <li>
        <router-link to="">
          <i class="fas fa-medal icon-progress" aria-hidden="true"></i>
          <span class="links_name">Mis diplomas</span>
        </router-link>
        <span class="tooltip">Mis diplomas</span>
      </li>
      <li>
        <router-link to="">
          <i class="fas fa-file" aria-hidden="true"></i>
          <span class="links_name">Mis apuntes</span>
        </router-link>
        <span class="tooltip">Mis apuntes</span>
      </li>
      <li>
        <router-link to="">
          <i class="fas fa-calendar-alt" aria-hidden="true"></i>
          <span class="links_name">Mi plan de estudio</span>
        </router-link>
        <span class="tooltip">Mi plan de estudio</span>
      </li>
      <hr style="color:#F2F2F2;">
      <li>
        <router-link to="">
          <i class="fas fa-info-circle" aria-hidden="true"></i>
          <span class="links_name">Centro de Ayuda</span>
        </router-link>
        <span class="tooltip">Centro de Ayuda</span>
      </li>
      <hr style="color:#F2F2F2;">
    </ul>
  </div>
  <section class="home-section">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark text-decoration-none" href="#">Inicio</a></li>
              <!--<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>-->
            </ol>
            <h6 class="font-weight-bolder mb-0"><strong>Inicio</strong></h6>
          </nav>
          <div class="mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <div class="input-group">
                  <router-link class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" to="">¡Hazte premium!</router-link>
                </div>
                  <img v-bind:src="`../../../images/${this.userData.fotografia}`" class="img-fluid rounded-circle avatar">
                  <a href="#" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n5" aria-labelledby="dropdownMenuButton">
                    <li class="">
                      <router-link class="dropdown-item border-radius-md" to="/dashboard/inicio">
                        <div class="d-flex">
                          <div class="d-flex flex-column justify-content-center mt-2">
                            <h6 class="text-sm font-weight-normal">
                              <span class="font-weight-bold">Mi perfil</span>
                            </h6>
                          </div>
                          <hr>
                        </div>
                      </router-link>
                    </li>
                    <li class="">
                      <router-link class="dropdown-item border-radius-md" to="/centro-de-ayuda">
                        <div class="d-flex">
                          <div class="d-flex flex-column justify-content-center mt-2">
                            <h6 class="text-sm font-weight-normal">
                              <span class="font-weight-bold">Centro de ayuda</span>
                            </h6>
                          </div>
                          <hr>
                        </div>
                      </router-link>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="">
                      <router-link class="dropdown-item border-radius-md" to="/">
                        <div class="d-flex">
                          <div class="d-flex flex-column justify-content-center mt-2">
                            <h6 class="text-sm font-weight-normal">
                              <span class="font-weight-bold">Cerrar Sesión</span>
                            </h6>
                          </div>
                          <hr>
                        </div>
                      </router-link>
                    </li>
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr>
    <!-- End Navbar -->
    <div class="home-section">

    </div>
    </main>
  </section>
</template>

<script>
import $api from '../../store/api';

export default {
  name: "AuthNavbar",
  data() {
    return {
      userData: {}, isOpen: false,
    }
  },
  async mounted() {
    await $api.get('usuario').then(response => {
      let { data } = response.data;
      this.userData = data;
    }).catch( error => {
      this.$router.push({ name:"InicioSesion" });
    });
  },
    methods:{
        toggleCloseButton() {
            this.isOpen = !this.isOpen;
        }
    }
};
</script>

<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.sidebar{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #184E77;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}
.sidebar.open{
  width: 250px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details .icon{
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 18px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 18px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #184E77;
}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #184E77;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #184E77;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}
.sidebar li.profile .name,
.sidebar li.profile .job{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}
.sidebar li.profile .job{
  font-size: 12px;
}
.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #184E77;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}
.home-section{
  position: relative;
  background: #FFFFFF;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
}
/* .home-section .text{
  display: inline-block;
  color: #184E77;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
} */
ol, ul {
 padding-left: 0;
}
.avatar {
  height: 35px;
  width: 35px;
  margin-right: 10px;
}
.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #696969;
  border-radius: 10px;
}
.dropdown-item:hover{
  text-decoration: none;
  background-color: #F2F3F4;
  border-radius: 10px;
}
@media (max-width: 600px) {
  .navbar {
    background-color: #FFFFFF;
  }
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}
</style>