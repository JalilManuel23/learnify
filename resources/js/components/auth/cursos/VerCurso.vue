<template>
    <div class="video-container">
        <div class="row">    
        <div class="col-md-8">
            <VideoPlayer v-if="this.srcVideo" :srcVideo="this.srcVideo" />
            <h3>Título del vídeo</h3>
        </div>
        <div class="col-md-4 mt-5">
            <h6 class="text-bold">Contenido del curso</h6>
            <ul>
                <li v-for="{ id, titulo, archivo, avance, duracion } in this.videos" :key="id" class="enlace-video">
                    <a href="#">{{ `${ avance }.- ${ titulo }` }}</a> 
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
            srcVideo: ''
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
            console.log(this.videos[0].archivo);
        },
        async setSrcVideo(archivo) {
            this.srcVideo = '';

            await setTimeout(() => {
                console.log('Cambiando URL del vídeo...');
            }, 500);

            this.srcVideo = archivo;
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
    height: 80vh;
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

.video-container {
    margin-left: 3vmin;
}

</style>