<template>
    <InstructorNavbar></InstructorNavbar>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form @submit.prevent="crearCurso" id="formulario" enctype="multipart/form-data" class="w-50 mt-5">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título del curso</label>
                        <input type="text" class="form-control" id="titulo"
                        v-model="fields.titulo" placeholder="Ejemplo: Fundamentos de la programación">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio"
                        v-model="fields.precio" placeholder="Ejemplo: $125.00">
                    </div>
                    <div class="mb-3">
                        <label for="portada" class="form-label">Portada</label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" class="form-control" id="portada" aria-describedby="archivoPortada"
                            v-on:change="previewFiles">
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label mr-5">Categoría:</label>
                        <select class="form-select" name="categoria" id="categoria" v-model="fields.categoria">
                            <option v-for="{ id, titulo } in this.categorias" :key="id" :value="titulo">{{ titulo }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion"
                        v-model="fields.descripcion" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import $api from '../../../store/api';
import InstructorNavbar from '../../auth/InstructorNavbar.vue';
import categorias from '../../categorias/categorias';
import { Toast } from '../../helpers/Toast';

export default {
    name: "CrearCurso",
    data() {
        return {
            userData: {},
            categorias,
            fields: {
                instructor:'',
                titulo:'',
                precio:'',
                archivo: '',
                portada_archivo: null,
                categoria:'',
                descripcion:'',
            }
        }
    },
    methods: {
        async crearCurso() {

            var form = document.getElementById("formulario");
            var formdata = new FormData(form);

            this.fields.instructor = this.userData.id;

            formdata.append("instructor", this.fields.instructor);
            formdata.append("categoria", this.fields.categoria);
            formdata.append("titulo", this.fields.titulo);
            formdata.append("precio", this.fields.precio);
            formdata.append("imagen", this.fields.portada);
            formdata.append("imagen_portada", this.fields.imagen_portada);
            formdata.append("descripcion", this.fields.descripcion);
            
            await $api.post('curso', formdata).then(response => {
                Toast.fire({
                    icon: 'success',
                    title: '¡Curso creado correctamente!'
                });

                this.$router.push({ name: 'InicioInstructor' });
            });
        },
        previewFiles(event) {
            this.fields.portada_archivo = event.target.files[0];
            this.fields.archivo = event.target.files[0].name;
        }
    },
    async mounted() {
        await $api.get('usuario').then(response => {
            let { data } = response.data;
            this.userData = data;
        }).catch(error => {
            this.$router.push({ name: "InicioSesion" });
        });
    },
    components: {
        InstructorNavbar
    }
};
</script>