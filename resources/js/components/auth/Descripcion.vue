<template>
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-9">
                    <div class="">
                        <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
                            <b style="color:#184E77">{{ this.cursoData.titulo }}</b>
                        </h2>
                        <div>
                            <h5 class="font-weight-bold text-left mt-5 mb-3">
                                <strong>Descripción</strong>
                            </h5>
                            <p class="text-justify w-responsive mx-auto mb-5">
                                {{ this.cursoData.descripcion }}
                            </p>
                        </div>
                        <div class="card">
                            <div class="row">
                                <div class="col-9">
                                    <div class="rounded-top text-black d-flex flex-row py-2">
                                        <div class="d-flex flex-column">
                                            <img
                                            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                                            alt="Generic placeholder image"
                                            class="img-fluid img-thumbnail"
                                            style="width: 50px; z-index: 1; border-radius: 50%"
                                            />
                                        </div>
                                        <div class="ms-1 d-flex flex-column">
                                            <p><span class="ml-3 font-weight-bold d-block"><strong>{{ this.cursoData.instructor }}</strong></span> <span class="font-weight-light font-italic">Developer</span></p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-9 d-flex flex-column align-items-start">
                                    <button class="btn btn-primary mt-4" v-on:click="inscribirse" v-if="!this.inscripcion">Inscribirme</button>
                                    <span v-else class="badge bg-success">Estás inscrito a este curso</span>
                                    <router-link 
                                        v-if="this.inscripcion"
                                        :to="`/ver-curso/${ this.cursoData.id }/${ this.inscripcion_id }`"
                                        class="btn btn-primary mt-2 mb-4"
                                    >Ir al curso</router-link>
                                </div>
                                <div class="col-3">
                                    <div class="justify-content-enda">
                                        <div class="d-flex flex-row mt-1">
                                            <i class="fa fa-star u-color"></i> 
                                            <i class="fa fa-star u-color"></i> 
                                            <i class="fa fa-star u-color"></i> 
                                            <i class="fa fa-star-o u-color"></i> 
                                            <i class="fa fa-star-o u-color"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-5">
                            <h5 class="font-weight-bold text-left">
                                <strong>Temario del curso</strong>
                            </h5>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item" v-for="video in this.videos">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="`#flush-${video.id_flush}`" aria-expanded="false" aria-controls="flush-collapseOne">
                                        {{ video.titulo }}
                                    </button>
                                    </h2>
                                    <div :id="`flush-${video.id_flush}`" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul class="list-group list-group-flush">
                                                <p><b>Descripción:</b> {{ video.descripcion }}</p>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-play-circle mr-2" aria-hidden="true"></i> 
                                                    <p style="margin-left: 3px;">{{ video.duracion }}</p>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="py-5">
                            <h5 class="font-weight-bold text-left">
                                <strong>Comentarios</strong>
                            </h5>
                            <div class="card"> <i class="fa fa-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="user-about mt-3">
                                        <strong><span class="font-weight-bold d-block">- Jalil M. López</span></strong>
                                        <span style="font-style: italic;">Estudiante</span>
                                        <div class="d-flex flex-row mt-1">
                                            <i class="fa fa-star u-color"></i> 
                                            <i class="fa fa-star u-color"></i> 
                                            <i class="fa fa-star u-color"></i> 
                                            <i class="fa fa-star u-color"></i> 
                                            <i class="fa fa-star u-color"></i> 
                                        </div>
                                    </div>
                                    <div class="user-image"> <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" class="rounded-circle" width="70"> </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer/>
</template>

<script>
    import Footer from '../home/Footer.vue';
    import $api from '../../store/api';
    import { Toast } from '../helpers/Toast';
    
    export default {
        name: "Descripcion",
        data() {
            return {
                userData: {},
                cursoData: {},
                inscripcion: null,
                inscripcion_id: null,
                videos: []
            }
        },
        async mounted() {
            await $api.get('usuario').then(response => {
                let { data } = response.data;
                this.userData = data;
            }).catch( error => {
                this.$router.push({ name:"InicioSesion" });
            });

            this.cargarCursoData();
            this.comprobarInscripcion();
            this.cargarVideos();
        },  
        methods: {
            async cargarCursoData() {
                await $api.get(`curso/${ this.$route.params.id }`).then(response => {
                    this.cursoData = response.data;
                });
                await $api.get(`users/${ this.cursoData.instructor }`).then(response => {
                    this.cursoData.instructor = `${response.data.name} ${response.data.apellido_p}`;
                });                
            },
            async inscribirse() {
                let inscripcion = {
                    estudiante: this.userData.id,
                    curso: this.cursoData.id,
                }

                await $api.post('inscripciones', inscripcion).then(response => {
                    this.cursoData = response.data;

                    Toast.fire({
                        icon: 'success',
                        title: '¡Te has inscrito a este curso!'
                    });
                });

                this.comprobarInscripcion();
            },
            async comprobarInscripcion() {
                let data = {
                    estudiante: this.userData.id,
                    curso: this.$route.params.id
                };
                console.log(data);

                await $api.post('/inscripcion/comprobar', data).then(response => {
                    if(response.data.inscripcion) {
                        this.inscripcion = true;

                        let inscripcion = {
                            estudiante: data.estudiante
                        }

                        $api.post('inscripciones/estudiante', inscripcion).then(response => {
                            let inscripciones = response.data.inscripciones;

                            console.log(inscripciones);
                            inscripciones.map(inscripcion => {
                                if(inscripcion.curso == data.curso) {
                                    this.inscripcion_id = inscripcion.id;
                                    console.log('entra');
                                }
                            });
                        });
                    }
                });
            },
            async cargarVideos() {
                await $api.get(`traer_videos/curso/${this.$route.params.id}`).then(response => {
                    let videosPeticion = response.data.videos;

                    let videosFinal = [];
                    videosPeticion.map(video => {
                        video.id_flush = this.generarRandom(6);
                        videosFinal.push(video);
                    });

                    this.videos = videosFinal;
                });

                console.log(this.videos);
            },
            generarRandom(num) {
                const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
                const charactersLength = characters.length;
                let result = "";
                let ch;
                while (result.length < num){
                    ch = characters.charAt(Math.floor(Math.random() * charactersLength));
                    if (!result.includes(ch)){
                        result += ch;
                    }
                }
                return result;
            }
        },  
        components: { Footer },
    }
</script>

<style scoped>
    .card[data-v-52c68af1] {
        background-color: #fff;
        border: none;
        height: 100px;
        margin-top: 10px;
    }
    .card {
        background-color: #fff;
        border: none;
        height: 250px;
        margin-top: 10px;
    }
    .u-color {
        color: yellow;
    }
    .user-image img {
        border: 3px solid #184E77;
        padding: 2px;
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
    .accordion-body {
        background-color: #FFFFFF;
        padding: 5px;
    }
    /* .accordion-button:after {
         color: #184E77;
         font-weight: bold !important;
    } */
</style>