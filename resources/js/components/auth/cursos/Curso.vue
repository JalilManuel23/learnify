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
                <img :src="'/img/'+`${this.cursoData.imagen}`" class="card-img-top" alt="curso">
                <div class="card-body">
                    <div>
                        <p><span class="badge bg-primary">Descripción:</span> {{ this.cursoData.descripcion }}</p>
                    </div>
                    <div class="mt-3">
                        <p><span class="badge bg-primary">Precio:</span> ${{ this.cursoData.precio }}</p>
                    </div>
                    <div class="mt-3">
                        <p><span class="badge bg-primary">Duración:</span> {{ this.cursoData.duracion }}</p>
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
                    <th scope="col">Duración</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody v-for="{ id, titulo, archivo, avance, duracion } in this.videos" :key="id">
                  <tr>
                    <th scope="row">{{ avance }}</th>
                    <td>{{ titulo }}</td>
                    <td>{{ archivo }}</td>
                    <td>{{ duracion }}</td>
                    <td>
                        <button class="btn btn-success" v-on:click="setSrcVideo(archivo)" style="margin-right: 8px;" data-bs-toggle="modal" data-bs-target="#verVideo" :data-id="`${archivo}`">Ver</button>
                        <button class="btn btn-danger" v-on:click="eliminarVideo(id)">Eliminar</button>
                    </td>
                  </tr>
                </tbody>
            </table>
            <div class="col-12 alert alert-primary mt-4 text-center" role="alert" v-else>
                <p>No hay vídeos en este curso. <router-link :to="`/agregar-video/${this.cursoData.id}`">Agrega</router-link> uno aquí.</p>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="verVideo" tabindex="-1" aria-labelledby="verVideo" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width: 900px; margin-left: -200px;">
                    <VideoPlayer v-if="this.srcVideo!=''" :srcVideo="this.srcVideo" style="width: 100%" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import $api from '../../../store/api';
import InstructorNavbar from '../../auth/InstructorNavbar.vue';
import VideoPlayer from '../../VideoPlayer.vue';
import { Toast } from '../../helpers/Toast';

export default {
    name: "CrearCurso",
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
        async eliminarCurso() {
            Swal.fire({
                    title: '¿Está seguro que desea eliminar este curso?',
                    showDenyButton: true,
                    confirmButtonText: 'Eliminar',
                    denyButtonText: `Cancelar`,
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $api.delete(`curso/${ this.cursoData.id }`).then(response => {
                        Toast.fire({
                            icon: 'success',
                            title: '¡Curso eliminado correctamente!'
                        });

                        this.$router.push({ name:"InicioInstructor" });
                    });
                } else if (result.isDenied) {
                    Swal.fire('Acción cancelada', '', 'info')
                }
            });
        },
        async cargarVideos() {
            await $api.get(`traer_videos/curso/${this.cursoData.id}`).then(response => {
                this.videos = response.data.videos;
            });
        },
        async eliminarVideo(idVideo) {
            Swal.fire({
                    title: '¿Está seguro que desea eliminar este vídeo?',
                    showDenyButton: true,
                    confirmButtonText: 'Eliminar',
                    denyButtonText: `Cancelar`,
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $api.delete(`videos/${idVideo}`).then(response => {
                        this.videos = response.data.videos;

                        Toast.fire({
                            icon: 'success',
                            title: '¡Vídeo eliminado correctamente!'
                        });
                    });
                } else if (result.isDenied) {
                    Swal.fire('Acción cancelada', '', 'info')
                }
            });
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
        InstructorNavbar,
        VideoPlayer
    }
};
</script>