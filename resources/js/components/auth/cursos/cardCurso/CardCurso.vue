<template>
    <div class="card w-25" style="margin-right: 15px;">
        <div class="view overlay">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).webp"
                alt="Card image cap">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
    
        <div class="card-body">
            <h4 class="card-title">{{ this.curso.titulo }}</h4>
            <p class="card-text">{{ this.curso.descipcion }}</p>
            <a href="#" class="btn btn-primary">Button</a>
        </div>
    </div>
</template>

<script>
export default {
  props: {
    curso: Object
  }
}
</script>