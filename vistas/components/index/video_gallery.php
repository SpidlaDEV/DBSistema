<link rel='stylesheet' href='https://cdn.plyr.io/3.4.6/plyr.css'>
<div class="container-video">
    <h1 class="title-video">John Deere en Acción</h1>
    <p class="subtitle-video">Tractores de la serie 9 Máxima potencia</p>
    <div style="max-width: 1000px; margin: 0 auto; padding: 30px;">
        <video controls crossorigin playsinline poster="../public/img/index/index-tractor-1.png" id="player">
            <!-- Videos: un único video, pero distintas resoluciones -->
            <source src="../public/video/index/Tractores%20de%20la%20serie%209%20Máxima%20potencia%20%20John%20Deere%20ES_1080p.mp4" type="video/mp4" size="1080">
            <source src="../public/video/index/Tractores%20de%20la%20serie%209%20Máxima%20potencia%20%20John%20Deere%20ES_720p.mp4" type="video/mp4" size="720">
            <source src="../public/video/index/Tractores%20de%20la%20serie%209%20Máxima%20potencia%20%20John%20Deere%20ES_480p.mp4" type="video/mp4" size="480">

            <!-- Subtítulos: se pueden agregar de otros idiomas -->
            <track kind="captions" label="Español" srclang="es" src="../public/video/index/subtitulos/%5BSpanish%20(auto-generated)%5D%20Tractores%20de%20la%20serie%209_%20Máxima%20potencia%20_%20John%20Deere%20ES.vtt" default>
        </video>
    </div>
</div>
<!-- partial -->
<script src='https://cdn.plyr.io/3.4.6/plyr.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
        const player = new Plyr('#player');

        // Expose
        window.player = player;

        // Bind event listener
        function on(selector, type, callback) {
            document.querySelector(selector).addEventListener(type, callback, false);
        }

        // Play
        on('.js-play', 'click', () => {
            player.play();
        });

        // Pause
        on('.js-pause', 'click', () => {
            player.pause();
        });

        // Stop
        on('.js-stop', 'click', () => {
            player.stop();
        });

        // Rewind
        on('.js-rewind', 'click', () => {
            player.rewind();
        });

        // Forward
        on('.js-forward', 'click', () => {
            player.forward();
        });
    });
</script>

<style lang="css">
    .container-video {
        display: grid;
        place-items: center;
        padding: 30px;
    }
    .title-video {
        font-size: 65px;
        font-weight: 750;
    }

    .subtitle-video {
        font-size: 20px;
        letter-spacing: 3px;
        font-weight: normal;
    }
</style>