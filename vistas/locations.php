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
    var lugarFijo = "https://maps.google.com/maps/api/staticmap?center=40.440625,-79.995886&zoom=13&markers=40.440625,-79.995886&size=640x320&sensor=true";
    var embed = '<iframe width="100%" height="620" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=pittsburgh,+pa&amp;aq=&amp;sll=38.003385,-79.420925&amp;sspn=5.54782,11.612549&amp;ie=UTF8&amp;hq=&amp;hnear=Pittsburgh,+Allegheny,+Pennsylvania&amp;t=m&amp;ll=40.440676,-79.995918&amp;spn=0.117583,0.336113&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>';

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
