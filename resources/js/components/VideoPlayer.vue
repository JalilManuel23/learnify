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
    <div ref="player" style="width: 600px; height: 400px;"></div>
</template>