<template>
    <div class="video-container">
        <div class="row">
            <div class="col-12">
                <h4>Curso: <span class="badge bg-warning">{{ this.cursoData.titulo }}</span></h4>
            </div>    
            <div class="col-md-8">
                <VideoPlayer v-if="this.srcVideo" :srcVideo="this.srcVideo" />
                <h3>{{ this.tituloVideo }}</h3>
            </div>
            <div class="col-md-4 mt-5">
                <h6 class="text-bold">Contenido del curso</h6>
                <ul>
                    <li 
                        v-for="{ id, titulo, archivo, avance, duracion } in this.videos" 
                        :key="id" 
                        class="enlace-video" 
                        v-bind:class="[(this.tituloVideo == titulo)  && 'video-active']"
                        v-on:click="cambiarVideo(archivo, titulo)"
                    >
                        <p>{{ `${ avance }.- ${ titulo }` }}</p> 
                        <div class="d-flex align-items-center">
                            <i class="fa fa-play-circle mr-2" aria-hidden="true"></i> 
                            <p style="margin-left: 3px;" v-on:click="verVideos">{{ duracion }}</p>
                        </div>
                    </li>
                </ul>
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
            tituloVideo: ''
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
            this.srcVideo = this.videos[0].archivo;
            this.tituloVideo = this.videos[0].titulo;
        },
        async cambiarVideo(archivo, titulo) {
            this.srcVideo = '';

            await setTimeout(() => {
                console.log('Cambiando URL del vídeo...');
            }, 500);

            this.srcVideo = archivo;
            this.tituloVideo = titulo;
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

</style>