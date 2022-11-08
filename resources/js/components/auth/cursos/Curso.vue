<template>
    <InstructorNavbar></InstructorNavbar>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <h1>{{ this.cursoData.titulo }}</h1>
            </div>
        </div>
        <div class="row d-flex flex-column align-items-center">
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
                        <button type="button" class="btn btn-danger" style="margin-right: 8px;">Eliminar</button>
                        <button type="button" class="btn btn-warning">Editar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import $api from '../../../store/api';
import InstructorNavbar from '../../auth/InstructorNavbar.vue';

export default {
    name: "CrearCurso",
    data() {
        return {
            userData: {},
            cursoData: {}
        }
    },
    methods: {
        async cargarCursoData() {
            await $api.get(`curso/${ this.cursoData.id }`).then(response => {
                this.cursoData = response.data;
                console.log(this.cursoData);
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
    },
    components: {
        InstructorNavbar
    }
};
</script>