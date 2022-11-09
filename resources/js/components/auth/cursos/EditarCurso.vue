<template>
    <InstructorNavbar></InstructorNavbar>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form @submit.prevent="editarCurso" class="w-50 mt-5">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título del curso</label>
                        <input v-model="nuevoCurso.titulo" type="text" class="form-control" id="titulo" placeholder="Ejemplo: Fundamentos de la programación">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input v-model="nuevoCurso.precio" type="number" class="form-control" id="precio" placeholder="Ejemplo: $125.00">
                    </div>
                    <div class="mb-3">
                        <label for="portada" class="form-label">Portada</label>
                        <input type="file" class="form-control" id="portada">
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label mr-5">Categoría:</label>
                        <select v-model="nuevoCurso.categoria" class="form-select" name="categoria" id="categoria">
                            <option v-for="{ id, titulo } in this.categorias" :selected="titulo === nuevoCurso.categoria" :key="id" :value="titulo">{{ titulo }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Descripción</label>
                        <textarea v-model="nuevoCurso.descripcion" class="form-control" id="descripcion" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import $api from '../../../store/api';
import InstructorNavbar from '../InstructorNavbar.vue';
import categorias from '../../categorias/categorias';
import { Toast } from '../../helpers/Toast';

export default {
    name: "EditarCurso",
    data() {
        return {
            userData: {},
            nuevoCurso: {},
            categorias
        }
    },
    methods: {
        async cargarCursoData() {
            await $api.get(`curso/${ this.$route.params.curso }`).then(response => {
                this.nuevoCurso = response.data;
                console.log(this.nuevoCurso);
            });
        },
        async editarCurso() {
            this.nuevoCurso.instructor = this.userData.id;

            await $api.put(`curso/${ this.$route.params.curso }`, this.nuevoCurso).then(response => {
                Toast.fire({
                    icon: 'success',
                    title: '¡Curso editado correctamente!'
                });

                this.$router.push({ name: 'InicioInstructor' });
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

        this.cargarCursoData();
    },
    components: {
        InstructorNavbar
    }
};
</script>