<template>
    <InstructorNavbar></InstructorNavbar>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <h1>Agregar vídeo a curso: <span class="badge bg-warning">{{ this.cursoData.titulo }}</span></h1>
            </div>
        </div>
        <form @submit.prevent="agregarVideo" id="formulario" enctype="multipart/form-data" class="row d-flex flex-column align-items-center mt-4">
            <div class="col-12 col-md-6">
              <label for="tituloVideo" class="form-label">Título del video</label>
              <input type="text" class="form-control" id="tituloVideo" aria-describedby="tituloVideo" v-model="fields.titulo">
            </div>
            <div class="col-12 col-md-6">
              <label for="archivoVideo" class="form-label mt-3">Archivo del vídeo</label>
              <input type="file" class="form-control" id="archivoVideo" aria-describedby="archivoVideo" v-on:change="previewFiles">
            </div>
            <button type="submit" class="btn btn-primary col-12 col-md-3 mt-5">Agregar</button>
        </form>
    </div>
</template>

<script>
import $api from '../../../store/api';
import InstructorNavbar from '../../auth/InstructorNavbar.vue';
import { Toast } from '../../helpers/Toast';

export default {
    name: "AgregarVideo",
    data() {
        return {
            userData: {},
            cursoData: {},
            fields: {
                titulo: '',
                archivo: 'ejemplo.mp4',
                video_archivo: null
            }
        }
    },
    methods: {
        async cargarCursoData() {
            await $api.get(`curso/${ this.cursoData.id }`).then(response => {
                console.log(this.cursoData);
            });
        },
        async eliminarCurso() {
                Toast.fire({
                    icon: 'success',
                    title: '¡Curso eliminado correctamente!'
                });

            this.$router.push({ name:"InicioInstructor" });
        },
        async agregarVideo() {
            var form = document.getElementById("formulario");
            var formdata = new FormData(form);

            formdata.append("curso", this.cursoData.id);
            formdata.append("titulo", this.fields.titulo);
            formdata.append("archivo", this.fields.archivo);
            formdata.append("video_archivo", this.fields.video_archivo);

            await $api.post('videos', formdata).then(response => {
                Toast.fire({
                    icon: 'success',
                    title: '¡El vídeo se ha agregado!'
                });

                this.$router.push({  name: 'Curso', params: { curso: this.cursoData.id } });
            }).catch( error => {
                console.log(error);
            });
        },
        previewFiles(event) {
            this.fields.video_archivo = event.target.files[0];
            this.fields.archivo = event.target.files[0].name;
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
    },
    components: {
        InstructorNavbar
    }
};
</script>