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
                <button class="btn btn-primary" v-on:click="this.printThis">Descargar diploma en PDF</button>
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
        color: #FFF;
        border: 1px solid #000;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1049%26quot%3b)' fill='none'%3e%3crect width='1920' height='1080' x='0' y='0' fill='rgba(21%2c 67%2c 96%2c 1)'%3e%3c/rect%3e%3cpath d='M0%2c862.322C157.909%2c839.325%2c233.391%2c658.129%2c364.425%2c567.056C488.854%2c480.574%2c658.209%2c463.456%2c748.728%2c341.933C847.702%2c209.059%2c926.825%2c32.578%2c881.178%2c-126.694C835.724%2c-285.292%2c636.483%2c-333.592%2c521.276%2c-451.688C415.291%2c-560.331%2c370.147%2c-727.823%2c232.459%2c-791.684C87.919%2c-858.723%2c-90.161%2c-867.586%2c-235.719%2c-802.787C-376.347%2c-740.183%2c-441.311%2c-584.038%2c-524.67%2c-454.629C-596.839%2c-342.592%2c-655.716%2c-228.107%2c-689.024%2c-99.067C-725.859%2c43.637%2c-772.523%2c191.946%2c-727.815%2c332.382C-680.885%2c479.798%2c-564.75%2c593.099%2c-439.684%2c684.162C-309.203%2c779.169%2c-159.72%2c885.583%2c0%2c862.322' fill='%230e2c3e'%3e%3c/path%3e%3cpath d='M1920 1833.9099999999999C2067.108 1861.6950000000002 2224.026 1829.837 2352.534 1753.036 2483.098 1675.0059999999999 2577.337 1547.283 2635.067 1406.56 2691.43 1269.1680000000001 2680.8940000000002 1120.024 2673.056 971.727 2664.478 809.4390000000001 2690.508 627.3199999999999 2587.247 501.828 2483.634 375.908 2297.157 374.25 2141.4809999999998 325.706 1982.838 276.23699999999997 1817.316 146.11199999999997 1665.871 214.51700000000005 1511.385 284.29600000000005 1536.05 523.02 1423.671 649.929 1309.289 779.101 1078.783 789.634 1014.738 949.843 950.192 1111.305 989.013 1321.595 1102.5 1453.34 1214.1390000000001 1582.94 1426.032 1535.1390000000001 1581.106 1607.33 1706.845 1665.865 1783.714 1808.1689999999999 1920 1833.9099999999999' fill='%231c5a82'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1049'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
    }
    th {
        padding: 50px;
    }
</style>