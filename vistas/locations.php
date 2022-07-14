<?php
//Activamos el almacenamiento en el buffer
require 'header_light.php';
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
<h1 style="font-size:50px; text-align: center; padding-top: 100px; color: rgba(54, 124, 43, 1);">Ubicaciones</h1>
<div id="pattern" class="pattern">
    <div class="map">
        <a href="https://maps.google.com/maps?q=Pittsburgh,+PA&hl=en&sll=40.697488,-73.979681&sspn=0.667391,1.447449&oq=Pittsburgh&hnear=Pittsburgh,+Allegheny,+Pennsylvania&t=m&z=12"
           class="btn-map">Ver en el mapa</a>
    </div>
</div>
<?php
require 'footer.php';
?>

<script lang="js">
    $(document).ready(function () {
        buildMap();
    });

    var sw = document.body.clientWidth,
        bp = 550,
        $map = $('.map');
    var lugarFijo = "https://goo.gl/maps/xBDUf6h7bDMi9DUr8";
    var embed = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4713.6144825200945!2d-60.43715054703782!3d-26.785744016777073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1c14ba7d7b%3A0x3f41780d9ada61c!2sDerka%20y%20Vargas!5e0!3m2!1ses-419!2sar!4v1657755370213!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';

    function buildMap() {
        if (sw > bp) { //If Large Screen
            if ($('.map-container').length < 1) { //If map doesn't already exist
                buildEmbed();
            }
        } else {
            if ($('.static-img').length < 1) { //If static image doesn't exist
                buildStatic();
            }
        }
    };

    function buildEmbed() { //Build iframe view
        $('<div class="map-container"/>').html(embed).prependTo($map);
    };

    function buildStatic() { //Build static map
        var mapLink = $('.map-link').attr('href'),
            $img = $('<img class="static-img" />').attr('src', lugarFijo);
        $('<a/>').attr('href', mapLink).html($img).prependTo($map);
    }

    $(window).resize(function () {
        sw = document.body.clientWidth;
        buildMap();
        google.maps.event.trigger(map, "resize");
    });


</script>

<style lang="scss">
    @import url('https://bradfrost.github.com/this-is-responsive/styles.css');

    .static-img {
        display: block;
    }

    .btn-map {
        display: inline-block;
        padding: 0.5em 1em;
        background: #808080;
        color: #fff;
        font-size: 15px;
        margin: 2em;

    :hover, :focus {
        color: #fff;
        background: #333;
    }

    }

    iframe {
        max-width: 100%;
    }

    /* From https://codepen.io/chriscoyier/full/kycDp */
    .map-container {
        width: 100%;
        margin: 0;
    }

    /* Medium Screens */
    @media all and (min-width: 34.375em) {
        .map-container {
            display: block;
        }

        .static-img {
            display: none;
        }
    }

</style>
