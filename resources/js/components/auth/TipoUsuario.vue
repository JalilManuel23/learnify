<template>
    <section class="tipo-usuario">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="pt-5">¿Qué quieres hacer en Learnify?</h2>
                </div>
                <div class="col-12 d-flex flex-md-row flex-column justify-content-center">
                    <a href="#" class="tipo-usuario_enlace d-flex flex-column align-items-center">
                        <div class="tipo-usuario_icono d-flex flex-column align-items-center justify-content-center">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                        </div>
                        <p>Quiero enseñar</p>
                    </a>
                    <a href="#" class="tipo-usuario_enlace d-flex flex-column align-items-center">
                        <div class="tipo-usuario_icono d-flex flex-column align-items-center justify-content-center">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>
                        <p>Quiero aprender</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

</script>

<style>
.tipo-usuario {
    background: #eef5fb;
    min-height: 100vh;
}

.tipo-usuario_enlace {
    text-decoration: none;
    padding: 15vh;
}

@media (max-width: 600px) {
    .tipo-usuario_enlace {
        padding: 5vh;
    }
}

.tipo-usuario_enlace p {
    font-size: 3vmin;
}

.tipo-usuario_icono {
    width: 25vmin;
    height: 25vmin;
    background: #fff;
    border-radius: 50%;
    font-size: 10vmin;
    margin-bottom: 10px;
}

h2, .tipo-usuario_enlace, .tipo-usuario_enlace:hover {
    color: #808082;
}
</style>