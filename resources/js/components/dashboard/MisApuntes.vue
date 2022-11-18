<template>
  <section class="gradient-custom-2">
    <div class="container p-2">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-9 col-xl-12">
          <h2 class="h1-responsive font-weight-bold text-left mb-3 mt-4">
            <strong>Mis Apuntes</strong>
          </h2>
        </div>
      </div>
    </div>
  </section>
  <AuthFooter />
</template>

<script>
import AuthFooter from '../auth/Footer.vue';

export default {
  name: "MisApuntes",
  setup() {

  },
  components: { AuthFooter }
}
</script>

<style scoped>

</style>