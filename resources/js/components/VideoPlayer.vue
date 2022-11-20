<script setup>
    import { ref, reactive, onMounted, nextTick } from 'vue';
    import Artplayer from 'artplayer';

    const player = ref(null);

    const options = reactive({
        container: '.artplayer-app',
        url: `../../videos/${props.srcVideo}`,
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
        console.log(props.srcVideo);
    });

    defineExpose({
        player,
        options
    });

    const props = defineProps({
        srcVideo: String
    });
</script>

<template>
    <div>
        <div ref="player" class="w-100 p-0 player"></div>
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