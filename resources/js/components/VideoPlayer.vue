<script setup>
    import { ref, reactive, onMounted, nextTick } from 'vue';
    import Artplayer from 'artplayer';

    const player = ref(null);

    const options = reactive({
    container: '.artplayer-app',
    url: '../../videos/sample.mp4',
    title: 'Your Name',
    poster: '/assets/sample/poster.jpg',
    volume: 0.5,
    isLive: false,
    muted: false,
    autoplay: false,
    pip: true,
    autoSize: true,
    autoMini: true,
    screenshot: true,
    setting: true,
    loop: true,
    flip: true,
    playbackRate: true,
    aspectRatio: true,
    fullscreen: true,
    fullscreenWeb: true,
    subtitleOffset: true,
    miniProgressBar: true,
    mutex: true,
    backdrop: true,
    playsInline: true,
    autoPlayback: true,
    airplay: true,
    theme: '#23ade5',
    lang: navigator.language.toLowerCase(),
    whitelist: ['*'],
    moreVideoAttr: {
        crossOrigin: 'anonymous',
    },
    contextmenu: [
        {
            html: 'Custom menu',
            click: function (contextmenu) {
                console.info('You clicked on the custom menu');
                contextmenu.show = false;
            },
        },
    ]
    });

    onMounted(() => {
        nextTick(() => {
            new Artplayer({
                ...options,
                container: player.value
            });
        });
    });

    defineExpose({
        player,
        options
    });
</script>

<template>
    <div class="video-container">
        <div class="row">    
        <div class="col-md-8">
            <div ref="player" class="w-100 p-0 player"></div>
            <h3>Título del vídeo</h3>
        </div>
        <div class="col-md-4 mt-5">
            <h6 class="text-bold">Contenido del curso</h6>
            <ul>
                <li class="enlace-video">
                    <a href="#">1. Introducción</a> 
                    <div class="d-flex align-items-center">
                            <i class="fa fa-play-circle mr-2" aria-hidden="true"></i> 
                            <p style="margin-left: 3px;">5 min</p>
                    </div>
                </li>
                <li class="enlace-video">
                    <a href="#">2. Vídeo 1</a>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-play-circle mr-2" aria-hidden="true"></i> 
                        <p style="margin-left: 3px;">5 min</p>
                   </div>
                </li>
                <li class="enlace-video">
                    <a href="#">3. Vídeo 2</a>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-play-circle mr-2" aria-hidden="true"></i> 
                        <p style="margin-left: 3px;">5 min</p>
                    </div>
                </li>
                <li class="enlace-video">
                    <a href="#">4. Vídeo 2</a>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-play-circle mr-2" aria-hidden="true"></i> 
                        <p style="margin-left: 3px;">5 min</p>
                    </div>
                </li>
                <li class="enlace-video">
                    <a href="#">5. Vídeo 4</a>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-play-circle mr-2" aria-hidden="true"></i> 
                        <p style="margin-left: 3px;">5 min</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</template>

<script>
   export default {
    name: "VideoPlayer",
    };
</script>


<style>
.player {
    height: 80vh;
}

ul {
    list-style: none;
}

.enlace-video a {
    text-decoration: none;
    color: black;
}

.enlace-video {
    padding: 20px;
    border-bottom:1px solid rgb(197, 194, 194);
    display: flex;
    flex-direction: column;
}

.video-container {
    margin-left: 3vmin;
}

</style>