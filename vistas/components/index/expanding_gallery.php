<section class="gallery-expand">
    <h1 style="font-size: 65px; font-weight: 750;">John Deere - Servicios</h1>
    <div class="container-gallery">
        <img onclick="location='../vistas/Agricultura.php'" class="img-gallery" src="../public/images/tractor/6115j.jpg"           alt="" />
        <img onclick="location='../vistas/Jardin.php'" class="img-gallery" src="../public/images/jardin/z355e.jpg"            alt="" />
        <img onclick="location='../vistas/Agricultura.php'" class="img-gallery" src="../public/images/cosechadora/s780.jpg"        alt="" />
        <img onclick="location='../vistas/otros-productos.php'" class="img-gallery" src="../public/images/otros/fs19_avatar.png"       alt="" />
        <img onclick="location='../vistas/used-equipment.php'" class="img-gallery" src="../public/images/used-equipment/JD3140.jpg"   alt="" />
    </div>
</section>

<style lang="css">
    @import "https://unpkg.com/open-props";

    .gallery-expand {
        box-sizing: border-box;
        display: grid;
        place-items: center;
        min-height: 70vh;
        background: #2c2b2b;

        transition: all 1s;
    }

    .gallery-expand:hover {
        background-color: #477626;
        color: #ffff00;
    }

    :root {
        --magnifier: 6;
        --gap: 1vmin;
        --transition: 0.5s;
    }

    .container-gallery {
        width: 80vw;
        height: 50vmin;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: var(--gap);
    }

    .img-gallery {
        --brightness: 0.75;
        --grayscale: 1;
        transition: flex var(--transition), filter var(--transition);
        height: 100%;
        filter: grayscale(var(--grayscale)) brightness(var(--brightness));
        object-fit: cover;
        overflow: hidden;
        flex: 1;
    }

    .img-gallery:hover {
        --brightness: 1.15;
        --grayscale: 0;
        flex: var(--magnifier);
        cursor: pointer;
    }
</style>