<template>
    <InstructorNavbar></InstructorNavbar>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <h1>{{ this.cursoData.titulo }}</h1>
            </div>
        </div>
        <div class="row d-flex flex-column align-items-center mb-3">
            <div class="card col-md-5 col-12 mt-4">
                <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).webp" class="card-img-top" alt="curso">
                <div class="card-body">
                    <div>
                        <p><span class="badge bg-primary">Descripción:</span> {{ this.cursoData.descripcion }}</p>
                    </div>
                    <div class="mt-3">
                        <p><span class="badge bg-primary">Precio:</span> ${{ this.cursoData.precio }}</p>
                    </div>
                    <div class="mt-3">
                        <p><span class="badge bg-primary">Duración:</span> {{ this.cursoData.duracion }}mins.</p>
                    </div>
                    <div class="mt-3">
                        <p><span class="badge bg-primary">Categoría:</span> {{ this.cursoData.categoria }}</p>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <button v-on:click="this.eliminarCurso" type="button" class="btn btn-danger" style="margin-right: 8px;">Eliminar</button>
                        <router-link :to="`/editar-curso/${ this.cursoData.id }`" type="button" class="btn btn-warning">Editar</router-link>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h4>Vídeos</h4>
            <div class="col-3">
                <router-link :to="`/agregar-video/${this.cursoData.id}`" class="btn btn-primary">Agregar</router-link> 
            </div>
            <table v-if="this.videos.length > 0" class="table mt-4">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Nombre del archivo</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody v-for="{ id, titulo, archivo, avance } in this.videos" :key="id">
                  <tr>
                    <th scope="row">{{ avance }}</th>
                    <td>{{ titulo }}</td>
                    <td>{{ archivo }}</td>
                    <td>
                        <button class="btn btn-success" style="margin-right: 8px;">Ver</button>
                        <button class="btn btn-danger" v-on:click="eliminarVideo(id)">Eliminar</button>
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import $api from '../../../store/api';
import InstructorNavbar from '../../auth/InstructorNavbar.vue';
import { Toast } from '../../helpers/Toast';

export default {
    name: "CrearCurso",
    data() {
        return {
            userData: {},
            cursoData: {},
            videos: []
        }
    },
    methods: {
        async cargarCursoData() {
            await $api.get(`curso/${ this.cursoData.id }`).then(response => {
                this.cursoData = response.data;
            });
        },
        async eliminarCurso() {
            await $api.delete(`curso/${ this.cursoData.id }`).then(response => {
                Toast.fire({
                    icon: 'success',
                    title: '¡Curso eliminado correctamente!'
                });
            });

            this.$router.push({ name:"InicioInstructor" });
        },
        async cargarVideos() {
            await $api.get(`traer_videos/curso/${this.cursoData.id}`).then(response => {
                this.videos = response.data.videos;
            });
        },
        async eliminarVideo(idVideo) {
            await $api.delete(`videos/${idVideo}`).then(response => {
                this.videos = response.data.videos;

                Toast.fire({
                    icon: 'success',
                    title: '¡Vídeo eliminado correctamente!'
                });
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
    },
    components: {
        InstructorNavbar
    }
};
</script>