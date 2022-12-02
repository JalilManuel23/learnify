<template>
    <div class="video-container">
        <div class="row">
            <div class="col-10 d-flex justify-content-between">
                <h4>Curso: <span class="badge bg-warning">{{ this.cursoData.titulo }}</span></h4>

                <div class="alert alert-secondary" role="alert">
                    <p>Tu progreso: {{ parseInt((this.inscripcionData.avance / this.videos.length) * 100) }}%</p>
                </div>
            </div>   
            <div class="col-md-8" v-if="this.videos.length > 0">
                <VideoPlayer v-if="this.srcVideo" :srcVideo="this.srcVideo" />
                <h3>{{ this.tituloVideo }}</h3>
            </div>
            <div class="col-md-4 mt-5" v-if="this.videos.length > 0">
                <h6 class="text-bold">Contenido del curso</h6>
                <ul>
                    <li 
                        v-for="{ id, titulo, archivo, avance, duracion } in this.videos" 
                        :key="id" 
                        class="enlace-video" 
                        v-bind:class="[(this.tituloVideo == titulo)  && 'video-active']"
                        v-on:click="cambiarVideo(archivo, titulo, avance)"
                    >
                        <div class="d-flex align-items-center">
                            <p style="margin-right: 5px;">{{ `${ avance }.- ${ titulo }` }}</p>
                            <span class="badge bg-success" v-if="avance < this.inscripcionData.avance" style="font-size: 8px;"><i class="fa fa-check"></i></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-play-circle mr-2" aria-hidden="true"></i> 
                            <p style="margin-left: 3px;" v-on:click="verVideos">{{ duracion }}</p>
                        </div>
                    </li>
                    <router-link 
                        :to="`/curso-completo/${this.cursoData.id}`"
                        class="enlace-video d-flex justify-content-start align-items-start"
                        v-bind:class="[(parseInt((this.inscripcionData.avance / this.videos.length) * 100) == 100) && 'completo']"
                    >
                        <div class="d-flex align-items-center">
                            <i class="fa fa-trophy" style="margin-right: 5px;" aria-hidden="true"></i>
                            <p>Curso completo: {{ parseInt((this.inscripcionData.avance / this.videos.length) * 100) }}%</p>
                        </div>
                    </router-link>
                </ul>
            </div>
            <div v-if="this.videos.length == 0" class="alert alert-primary col-8 mt-4" role="alert">
                Aún no hay vídeos en este curso, el instructor está trabajando en esto :)
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
            videos: [],
            srcVideo: '',
            tituloVideo: '',
            inscripcionData: {}
        }
    },
    methods: {
        async cargarCursoData() {
            await $api.get(`curso/${ this.cursoData.id }`).then(response => {
                this.cursoData = response.data;
            });
        },
        async cargarVideos() {
            await $api.get(`traer_videos/curso/${this.cursoData.id}`).then(response => {
                this.videos = response.data.videos;
            });

            let avanceInscripcion = this.inscripcionData.avance - 1;

            this.srcVideo = this.videos[avanceInscripcion].archivo;
            this.tituloVideo = this.videos[avanceInscripcion].titulo;
        },
        async cambiarVideo(archivo, titulo, avance) {
            this.srcVideo = '';

            await setTimeout(() => {
                console.log('Cambiando URL del vídeo...');
            }, 500);

            this.srcVideo = archivo;
            this.tituloVideo = titulo;

            this.setAvance(avance);

            if(this.inscripcionData.avance == this.videos.length) {
                console.log('actualizando');
                //TODO aqui actualizar el estatus del curso a completo
                let nuevoEstatus = {
                    estatus: '1'
                }
                await $api.put(`curso/${this.cursoData.id}`, nuevoEstatus).then(response => {
                    console.log(response);
                });
            }
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
        async setAvance(avance) {
            await $api.put(`/inscripcion/editar_avance/${this.inscripcionData.id}`, { avance }).then(response => {
                this.traerInscripcion();
            });
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
        this.cargarVideos();
        this.traerInscripcion();
    },
    components: {
        VideoPlayer
    }
};
</script>


<style>
.player {
    height: 70vh;
}

ul {
    list-style: none;
}

.enlace-video a {
    text-decoration: none;
    color: black;
}

.enlace-video {
    padding: 20px;
    border-bottom:1px solid rgb(197, 194, 194);
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: black;
}

.enlace-video:hover {
    cursor: pointer;
    background-color: rgb(245, 245, 245);
}

.video-container {
    margin-left: 3vmin;
}

.video-active {
    background-color: rgb(241, 241, 241);
    color: rgb(10, 118, 206);
}

.completo, .completo:hover {
    background-color: rgb(7, 158, 15);
    color: #fff;
}
</style>