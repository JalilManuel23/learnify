<template>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <table class="table" ref="printcontent">
                    <thead>
                        <tr>
                            <td style="padding-top: 25px; border: none; text-align: center;">
                                <h2>Certificado de finalización</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 25px; border: none; text-align: center;">
                                <h3>¡Felicidades has terminado el curso de {{this.cursoData.titulo}}!</h3>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 40px; border: none; text-align: center;">
                                <h5 style="font-size: 25px; line-height: 40px;">
                                    Este documento certifica que {{ this.userData.name }} ha completado con éxito el curso de {{this.cursoData.titulo}} en la plataforma de aprendizaje en línea Learnify.
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 40px; border: none; text-align: center;">
                                <h5 style="font-size: 25px; line-height: 40px;">
                                    El día {{ this.fecha.dia }} de {{ this.fecha.mes }} del año {{ this.fecha.anio }}
                                </h5>
                            </td>
                        </tr>
                    </tbody>
                    
                  </table>
            </div>
            <div class="col-5">
                <button class="btn btn-primary" v-on:click="this.printThis">Descargar diploma en PNG</button>
            </div>
        </div>
    </div>
</template>

<script>
import VideoPlayer from '../../VideoPlayer.vue';
import $api from '../../../store/api';

export default {
    name: "VerCurso",
    data() {
        return {
            userData: {},
            cursoData: {},
            inscripcionData: {},
            fecha: {
                dia: '',
                mes: '',
                anio: ''
            }
        }
    },
    methods: {
        async cargarCursoData() {
            await $api.get(`curso/${ this.cursoData.id }`).then(response => {
                this.cursoData = response.data;
            });
        },
        async traerInscripcion() {
            let data = {
                estudiante: this.userData.id,
                curso: this.$route.params.curso
            };

            await $api.post('/inscripcion/comprobar', data).then(response => {
                this.inscripcionData = response.data.inscripcion;
            });
        },
        async printThis() {
            console.log("printing..");
            const el = this.$refs.printcontent;

            const options = {
                type: "dataURL",
            };
            const printCanvas = await html2canvas(el, options);

            const link = document.createElement("a");
            link.setAttribute("download", "download.png");
            link.setAttribute(
                "href",
                printCanvas
                .toDataURL("image/png")
                .replace("image/png", "image/octet-stream")
            );
            link.click();

            console.log("done");
        },
        generarFecha() {
            const fecha = new Date();
            const hoy = fecha.getDate();
            const mesActual = fecha.getMonth() + 1; 
            const anioActual = fecha.getFullYear();

            switch(mesActual) {
                case 1: {
                    this.fecha.mes = 'Enero';
                }break;
                case 2: {
                    this.fecha.mes = 'Febrero';
                }break;
                case 3: {
                    this.fecha.mes = 'Marzo';
                }break;
                case 4: {
                    this.fecha.mes = 'Abril';
                }break;
                case 5: {
                    this.fecha.mes = 'Mayo';
                }break;
                case 6: {
                    this.fecha.mes = 'Junio';
                }break;
                case 7: {
                    this.fecha.mes = 'Julio';
                }break;
                case 8: {
                    this.fecha.mes = 'Agosto';
                }break;
                case 9: {
                    this.fecha.mes = 'Septiembre';
                }break;
                case 10: {
                    this.fecha.mes = 'Octubre';
                }break;
                case 11: {
                    this.fecha.mes = 'Noviembre';
                }break;
                case 12: {
                    this.fecha.mes = 'Diciembre';
                }break;
            }

            this.fecha.dia = hoy;
            this.fecha.anio = anioActual;
        }
    },
    async mounted() {
        await $api.get('usuario').then(response => {
            let { data } = response.data;
            this.userData = data;
        }).catch( error => {
            this.$router.push({ name:"InicioSesion" });
        });

        this.cursoData.id = this.$route.params.curso;

        this.cargarCursoData();
        this.traerInscripcion();
        this.generarFecha();

        console.log(this.cursoData);
    },
    components: {
        VideoPlayer
    }
};
</script>

<style>
    .table {
        height: 85vh;
        width: 80%;
        color: #000;
        border: 1px solid #000;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1050%26quot%3b)' fill='none'%3e%3crect width='1920' height='1080' x='0' y='0' fill='rgba(255%2c 255%2c 255%2c 0.42)'%3e%3c/rect%3e%3cpath d='M29 1080L1109 0L2006 0L926 1080z' fill='url(%23SvgjsLinearGradient1051)'%3e%3c/path%3e%3cpath d='M664.6 1080L1744.6 0L1980.1 0L900.1 1080z' fill='url(%23SvgjsLinearGradient1051)'%3e%3c/path%3e%3cpath d='M1896 1080L816 0L574.5 0L1654.5 1080z' fill='url(%23SvgjsLinearGradient1052)'%3e%3c/path%3e%3cpath d='M1159.4 1080L79.40000000000009 0L-690.0999999999999 0L389.9000000000001 1080z' fill='url(%23SvgjsLinearGradient1052)'%3e%3c/path%3e%3cpath d='M912.0446564089546 1080L1920 72.04465640895455L1920 1080z' fill='url(%23SvgjsLinearGradient1051)'%3e%3c/path%3e%3cpath d='M0 1080L1007.9553435910454 1080L 0 72.04465640895455z' fill='url(%23SvgjsLinearGradient1052)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1050'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='0%25' y1='100%25' x2='100%25' y2='0%25' id='SvgjsLinearGradient1051'%3e%3cstop stop-color='rgba(7%2c 73%2c 205%2c 0.79)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(7%2c 73%2c 205%2c 0.79)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='100%25' y1='100%25' x2='0%25' y2='0%25' id='SvgjsLinearGradient1052'%3e%3cstop stop-color='rgba(7%2c 73%2c 205%2c 0.79)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(7%2c 73%2c 205%2c 0.79)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e");
    }
    th {
        padding: 50px;
    }
</style>