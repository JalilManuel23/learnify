<template>
    <InstructorNavbar></InstructorNavbar>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1>Curso</h1>
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