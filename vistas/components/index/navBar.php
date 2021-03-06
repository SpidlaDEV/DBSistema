<div class="topbarcontainer">
    <div class="topbarnav">
        <ul>
            <li class="current"><a href="../vistas/index.php" title="Inicio">Inicio </a>
            </li>
            <li class="link"><a href="../vistas/our-mission.php" title="Nuestra Historia">Nuestra Historia</a>
            </li>
            <li class="link"><a href="../vistas/locations.php" title="Ubicaciones">Ubicaciones </a>
                <ul>
                    <li class="link"><a href="../vistas/locations.php" title="Buenos Aires, Ar">Buenos Aires</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Catamarca">Catamarca</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Chaco">Chaco</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Chubut">Chubut</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Córdoba">Córdoba</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Corrientes">Corrientes</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Entre Ríos">Entre Ríos</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Formosa">Formosa</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Jujuy">Jujuy</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="La Pampa">La Pampa</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="La Rioja">La Rioja</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Mendoza">Mendoza</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Misiones">Misiones</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Neuquén">Neuquén</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Río Negro">Río Negro</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Salta">Salta</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="San Juan">San Juan</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="San Luis">San Luis</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Santa Cruz">Santa Cruz</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Santa Fe">Santa Fe</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Santiago del Estero">Santiago del Estero</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Tierra del Fuego">Tierra del Fuego</a></li>
                    <li class="link"><a href="../vistas/locations.php" title="Tucumán">Tucumán</a></li>
                </ul>
            </li>

            <li class="link"><a href="../vistas/contacto.php" title="Contacto">Contacto</a></li>
        </ul>
    </div> <!-- end of topbarnav -->
</div> <!-- end of topbarcontainer -->
<!-- END OF TOP BAR -->
<div class="navigation_container">
    <nav>
        <ul>
            <li class="link"><a title="Equipamiento Nuevo">Equipamiento Nuevo</a>
                <ul>
                    <li class="link"><a href="../vistas/Agricultura.php" title="Agricultural">Agricultura</a></li>
                    <li class="link"><a href="../vistas/Jardin.php" title="Equipos de Jardín">Equipos de Jardín</a></li>
                </ul>
            </li>

            <li class="link"><a href="../vistas/used-equipment.php" title="Equipamiento Usado">Equipamiento Usado </a></li>

            <li class="link"><a href="../vistas/otros-productos.php" title="Otros Productos">Otros Productos</a></li>

            <li class="link"><a href="../vistas/drive-green-events.php" title="Drive Green Events">Drive Green Events </a></li>
        </ul>
    </nav>
</div>

<style>
    .navigation_container {
        /* text-align:center; */
        /* margin:0 auto; */
        width: 100%;
        background: #477626;
        color: #FFF;
        float: left;
    }

    .menu nav ul li {
        text-align: left !important;
    }

    nav {
        position: relative;
        display: block;
        margin: 0 auto 0 auto;
        padding: 0 0 0 0;
        text-align: center;
        width: 1020px;
        z-index: 100 !important;

    }

    nav ul, nav li {
        list-style: none !important;
        margin: 0 0 0 0 !important;
        padding: 0 0 0 0 !important;
    }

    nav ul li {
        position: relative;
        text-align: center;
        float: left;
        margin: 0;
        padding: 0;
    }

    nav li ul {
        display: none;
    }


    nav ul li a { /* appearance of the first-level links */
        display: block;
        text-decoration: none;
        color: #FFF;
        font-size: 13px;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        padding: 10px 15px;
        height: 1%;
        text-transform: uppercase;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
        border-right: 1px solid #5c9231;
        border-left: 1px solid #3b631f;

    }

    nav ul li a:hover { /* appearance of the first-level links on hover */
        height: 1%;
        background: #164732;
        border-right: 1px solid #144331;
        border-left: 1px solid #144331;
    }

    nav ul li li a { /* appearance of the sub-level links */
        width: 350px;
        padding: 10px 0 10px 10px;
        text-align: left;
        background-color: #AAA;
        border: 0;
        text-transform: capitalize;
        border-bottom: 1px solid #999;
        font-size: 12px;

    }

    nav ul li li:last-child a {
        border-bottom-left-radius: 2px;
        border-bottom-right-radius: 2px;

    }

    nav ul li li a:hover { /* appearance of the sub-level links on hover */
        color: #FFF;
        background: #BBB;
        border: 0;
        border-bottom: 1px solid #999;

    }

    /* unless needing to do something extra or experimental, don't edit these positioning styles below! */
    nav ul ul {
        display: none;
        position: absolute;
        top: 100%;
        z-index: 100 !important;
    }

    nav ul ul ul {
        position: absolute;
        left: 100%;
        top: 0;
        z-index: 100 !important;
    }

    nav ul li:hover > ul {
        display: block;
        line-height: normal;
        z-index: 100;
    }

    nav ul ul li {
        float: none;
        position: relative;
    }

    nav ul li:first-child a {
        border-left: 0;
    }

    nav ul li:last-child a {
        border-right: 0;
    }


    /*Top bar nav */
    .topbarcontainer {
        width: 1020px;
        margin: 0 auto;
    }

    .topbarnav {
        margin-top: 5px;
        position: relative;
        display: block;
        padding: 0;
        text-align: center;
        /* width: 1020px; */
        z-index: 101 !important;
        float: left;
        border-bottom: 0;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .topbarnav ul {
    }

    .topbarnav ul, li {
        list-style: none !important;
        margin: 0 0 0 0 !important;
        padding: 0 0 0 0 !important;
    }

    .topbarnav ul li {
        position: relative;
        text-align: center;
        float: left;
        margin: 0;
        padding: 0;
    }

    .topbarnav li ul {
        display: none;
    }


    .topbarnav ul li a { /* appearance of the first-level links */
        display: block;
        text-decoration: none;
        color: #333;
        font-size: 14px;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        padding: 10px 15px;
        height: 1%;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;

        margin: 0;

    }

    .topbarnav ul li a:hover { /* appearance of the first-level links on hover */
        height: 1%;
        color: #477626;
    }

    .topbarnav ul li li a { /* appearance of the sub-level links */
        min-width: 260px;
        padding: 10px 0 10px 15px;
        text-align: left;
        background-color: #134731;
        color: #FFF;
        font-size: 12px;
    }

    .topbarnav ul li li:last-child a {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;

    }

    .topbarnav ul li li a:hover { /* appearance of the sub-level links on hover */
        background: #1b563d;
        color: #fff;
    }

    /* unless needing to do something extra or experimental, don't edit these positioning styles below! */
    .topbarnav ul ul {
        display: none;
        position: absolute;
        top: 100%;
        z-index: 101 !important;
    }

    .topbarnav ul ul ul {
        position: absolute;
        left: 100%;
        top: 0;
        z-index: 101 !important;
    }

    .topbarnav ul li:hover > ul {
        display: block;
        line-height: normal;
        z-index: 101;
    }

    .topbarnav ul ul li {
        float: none;
        position: relative;
    }
</style>
