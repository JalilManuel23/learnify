<template>
    <div class="nav-bottom">
      <div class="popup-whatsapp fadeIn" v-bind:class="[(this.abierto) ? 'is-active-whatsapp-popup' : '']">
        <div class="content-whatsapp-top">
             <button type="button" class="closePopup" v-on:click="this.cerrar()">
              <i class="fa fa-times" style="color:#FFFFFF;" aria-hidden="true"></i>
            </button>
          <p class="texto">
            <img src="../../img/Asistente.png" width="50" class="asistente">
            Bienvenido a <strong>Learnify</strong>, ¿En que podemos ayudarle?
          </p>
        </div>
        <div class="content-whatsapp -bottom">
          <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />
            <button class="send-msPopup" id="send-btn" type="button"  v-on:click="this.enviarMensaje()">
              <i class="fa fa-paper-plane" style="color: #C5C5C5;" aria-hidden="true"></i>
            </button>
        </div>
      </div>
      <button v-on:click="this.abrir()" type="button" id="whats-openPopup" class="whatsapp-button">
        <div class="float" >
          <i class="fa fa-whatsapp my-float"></i>
        </div>
      </button>
      <div class="circle-anime"></div>
    </div>
  </template>

  <script>

  export default {
    name: 'BurbujaWhatsapp',
    data() {
      return {
        abierto : false,
      }
    },
    methods: {
      abrir() {
        this.abierto = true;
      },
      cerrar() {
        this.abierto = false;
      },
      enviarMensaje () {
        let msg = document.getElementById('whats-in').value;
        let relmsg = msg.replace(/ /g,"%20");
        window.open('https://wa.me/5216181179153?text='+relmsg, '_blank');
      }
    }
  }
  </script>

  <style scoped>
  .float{
    position: fixed;
    width: 55px;
    height: 55px;
    bottom: 15px;
    right: 15px;
    background-color:  #0c2c4c;
    color: white;
    border-radius: 50px;
    text-align: center;
    font-size: 25px;
    border: none;
    /* box-shadow: .8px .8px 1px #; */
    z-index: 100;
  }
  .float:hover {
    text-decoration: none;
    color: white;
    background-color:  #0c3448;
  }
  .my-float{
    margin-top:16px;
    color: white !important;
  }
  @keyframes pulse {
    0% {
      transform: scale(1, 1);
    }
    50% {
      opacity: 0.3;
    }
    100% {
      transform: scale(1.45);
      opacity: 0;
    }
  }
  .pulse {
    -webkit-animation-name: pulse;
    animation-name: pulse;
  }
  .nav-bottom {
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    align-content: flex-end;
    width: auto;
    height: auto;
    position: fixed;
    z-index: 8;
    bottom: 0px;
    right: 0px;
    padding: 5px;
    margin: 0px;
  }
  @media (max-width: 360px) {
    .nav-bottom {
      width: 320px;
    }
  }
  .whatsapp-button {
    display: flex;
    justify-content: center;
    align-content: center;
    width: 55px;
    height: 55px;
    z-index: 8;
    transition: .3s;
    margin: 10px;
    padding: 7px;
    border: none;
    outline: none;
    cursor: pointer;
    border-radius: 50%;
    background-color: white;
    -webkit-box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
    -moz-box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
    box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
  }
  .circle-anime {
    display: flex;
    position: absolute;
    justify-content: center;
    align-content: center;
    width: 55px;
    height: 55px;
    top: 15px;
    right: 15px;
    border-radius: 50%;
    transition: .3s;
    background-color: #6c94b3;
    animation: pulse 1.2s 4.0s ease 4;
  }
  .popup-whatsapp {
    display: none;
    position: absolute;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    width: auto;
    height: auto;
    padding: 10px;
    bottom: 85px;
    right: 6px;
    transition: .5s;
    border-radius: 10px;
    background-color: white;
    -webkit-box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
    -moz-box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
    box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
    animation: slideInRight .6s 0.0s both;
  }
  .popup-whatsapp > div {
    margin: 5px;
  }
  @media (max-width: 680px) {
  .popup-whatsapp p {
    font-size: 0.9em;
    }
  }
  .popup-whatsapp > .content-whatsapp.-top {
    display: flex;
    flex-direction: column;
  }
  .popup-whatsapp > .content-whatsapp.-top .texto {
    color: #585858;
    font-family: 'Roboto';
    font-weight: 400;
    font-size: 1.2em;
    padding: 5px;
  }
  .popup-whatsapp > .content-whatsapp.-bottom {
    display: flex;
    flex-direction: row;
  }
  .closePopup {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 28px;
    height: 28px;
    margin: 0px 0px 15px 0px;
    border-radius: 50%;
    border: none;
    outline: none;
    cursor: pointer;
    background-color: #276391;
    -webkit-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
    -moz-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
    box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
  }
  .closePopup:hover {
    background-color: #0d202f;
    transition: .3s;
  }
  .send-msPopup {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: white;
    margin: 0px 0px 0px 5px;
    border: none;
    outline: none;
    cursor: pointer;
    -webkit-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
    -moz-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
    box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
  }
  .send-msPopup:hover {
    background-color: #f8f8f8;
    transition: .3s;
  }
  .is-active-whatsapp-popup {
    display: flex;
    animation: slideInRight .6s 0.0s both;
    background-color: #fafafa;
    color: black;
  }
  img .asistente {
    border-radius: 25% 10%;
  }
  input.whats-input[type=text] {
    width: 250px;
    height: 40px;
    box-sizing: border-box;
    border: .9px solid #F2F2F2;
    border-radius: 20px;
    font-size: .8em;
    background-color: #ffffff;
    padding: 0px 0px 0px 10px;
    -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.3s ease-in-out;
    outline: none;
    transition: .3s;
  }
  @media (max-width: 420px) {
    input.whats-input[type=text] {
      width: 225px;
    }
  }
  input.whats-input::placeholder {
    color: rgba(68, 68, 68, 0.705);
    opacity: 1;
  }
  input.whats-input[type=text]:focus {
    background-color: #C9C9C9;
    -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.3s ease-in-out;
    transition: .3s;
  }
  </style>