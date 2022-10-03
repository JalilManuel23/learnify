<template>
    <section class="home">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-6 col-12 text-center d-flex flex-column align-md-items-start justify-md-content-start justify-content-center align-items-center">
                    <div class="title-container text-md-start text-center mb-4">
                        <h1>Aprende sin límites</h1>
                        <p>Somos la plataforma de aprendizaje y desarrollo de talento que ayuda a construir equipos más competitivos.</p>
                    </div>
                    <div>
                        <router-link to="/" class="btn btn-light px-4 py-2">Empezar ahora</router-link>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center pt-md-5 mt-5 h-100">
                    <img src="../../img/bg.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</template>

<style>
    .home {
        height: 100vh;
        background: rgb(26,117,159);
        background: linear-gradient(0deg, rgba(26,117,159,1) 0%, rgba(25,78,120,1) 100%);
        color: #fff;
    }

    h1 {
        font-weight: bold;
        font-size: 9vmin;
    }

    .title-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        width: 85%;
        margin-top: 20vh;
        font-size: 2.5vmin;
    }

    @media (min-width: 300px) {
        .title-container {
            margin-top: 5vh;
        }
    }
</style>