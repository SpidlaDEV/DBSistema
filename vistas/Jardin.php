<?php
//Activamos el almacenamiento en el buffer
require 'header_light.php';
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <div class="agricultura" style="text-align: center;">
        <h1 class="text-bold" style="font-size: 100px; color: #367c2b">John Deere <span class="font-light" style="color: #000000">Equipos de Jardín</span></h1>
        <hr style="height:10px; border:none; color:#333; background-color:#333; margin: 0 50px 0 50px; ">
        <section class="cards" style="margin: 30px;">
            <?php
            $tractores_jardin = [
                [ 'S100', '17,5 HP', '42" (107 cm)', 'Hidrostático',              '8,9 km/h',  '../public/images/jardin/s100.jpg' ],
                [ 'S140', '22 HP',   '48" (122 cm)', 'Hidrostático',              '8,9 km/h',  '../public/images/jardin/s140.jpg' ],
                [ 'S180', '24 HP',   '54" (137 cm)', 'Hidrostático e Heavy Duty', '8,9 km/h',  '../public/images/jardin/s180.jpg' ],
                [ 'X350', '18,5 HP', '48” (122 cm)', 'Hidrostático',              '8,9 km/h',  '../public/images/jardin/x350.jpg' ],
                [ 'X750', '24 HP',   '60” (152 cm)', 'Hidrostático',              '13,7 km/h', '../public/images/jardin/x750.jpg' ]
            ];

            foreach($tractores_jardin as $item){ ?>
                <article class="card">
                    <picture>
                        <img class="category__01" height="160" alt="" src="<?= $item[5] ?>" />
                    </picture>
                    <div class="card-content">
                        <p class="category category__01"><span><?=$item[2]?></span></p>
                        <h2>John Deere <span><?=$item[0]?></span></h2>
                        <table>
                            <tr>
                                <th>Potencia</th>
                                <th><?=$item[1]?></th>
                            </tr>
                            <tr>
                                <th>Control de velocidad</th>
                                <th><?=$item[3]?></th>
                            </tr>
                            <tr>
                                <th>Velocidad máxima</th>
                                <th><?=$item[4]?></th>
                            </tr>
                        </table>
                    </div><!-- .card-content -->
                    <footer>
                        <div class="post-meta">

                        </div>
                    </footer>
                </article>
            <?php } ?>

            <?php
            $tractores_jardin = [
                [ 'Z355E', '22 HP', '48" (122 cm)', 'Hidrostático', '11,2 km/h', '../public/images/jardin/z355e.jpg' ],
                [ 'Z540M', '24 HP', '48" (122 cm)', 'Hidrostático', '13,7 km/h', '../public/images/jardin/z540m.jpg' ],
                [ 'Z950M', '27 HP', '60” (152 cm)', 'Hidrostático', '16,1 km/h', '../public/images/jardin/z950m.jpg' ],
            ];

            foreach($tractores_jardin as $item){ ?>
                <article class="card">
                    <picture>
                        <img class="category__01" height="160" alt="" src="<?= $item[5] ?>" />
                    </picture>
                    <div class="card-content">
                        <p class="category category__01"><span><?=$item[2]?></span></p>
                        <h2>John Deere <span><?=$item[0]?></span></h2>
                        <table>
                            <tr>
                                <th>Potencia</th>
                                <th><?=$item[1]?></th>
                            </tr>
                            <tr>
                                <th>Control de velocidad</th>
                                <th><?=$item[3]?></th>
                            </tr>
                            <tr>
                                <th>Velocidad máxima</th>
                                <th><?=$item[4]?></th>
                            </tr>
                        </table>
                    </div><!-- .card-content -->
                    <footer>
                        <div class="post-meta">

                        </div>
                    </footer>
                </article>
            <?php } ?>

            <article class="card">
                <a href="Agricultura.php" style="color: #5d5e5e; text-decoration: none;">
                    <picture>
                        <img height="160" class="category__01" src="../public/images/tractor/6150j.jpg" alt=""/>
                    </picture>
                    <div class="card-content">
                        <h2 class="text-bold">John Deere Agricultura</h2>
                        <table>
                            <span>
                                <span class="text-bold">Serie 6E y 6J</span>, ágiles para garantizar eficiencia de trabajo y productividad.
                                <span class="text-bold">Tractores 6J, 6M, 7J y 7R</span> son una fusión entre tecnología y productividad.</span>
                            <span><span class="text-bold">Series 8R y 9R</span>, para labores pesadas, donde la necesidad de tracción y las largas jornadas de trabajo exigen el máximo nivel del equipamiento.</span>
                        </table>
                    </div><!-- .card-content -->
                    <footer>
                        <div class="post-meta">
                            <span>Ver más</span>
                        </div>
                    </footer>
                </a>
            </article>

            <article class="card">
                <a href="used-equipment.php" style="color: #5d5e5e; text-decoration: none;">
                    <picture>
                        <img height="160" class="category__01" src="../public/images/used-equipment/JD3140.jpg" alt=""/>
                    </picture>
                    <div class="card-content">
                        <h2 class="text-bold">John Deere Usados</h2>
                        <p>John Deere también le ofrece equipos usados en bue estado que esperan una segunda vida.
                            Tractores pequeños, medianos y grandes lo esperan para empezar a trabajar.
                            Todos los equipos utilizados fueron reacondicionados para rendir como uno nuevo.</p>
                    </div><!-- .card-content -->
                    <footer>
                        <div class="post-meta">
                            <span>Ver más</span>
                        </div>
                    </footer>
                </a>
            </article>

        </section
    </div>
<?php
require 'footer.php';
?>

<style lang="css">
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .agricultura {
    a {
        text-decoration: none;
        color: orange;
    }

    h2 {
        color: #000;
        margin: 2rem 0 .5rem;
        font-size: 2rem;
        font-weight: 400;
        text-transform: uppercase;
    }

    img {
        display: block;
        border: 0;
        width: 100%;
        height: auto;
    }
    }

    /***************************           Cards            *******************************/

    .cards {
        display: inline-grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 5fr)); /* see notes below */
        grid-auto-rows: minmax(auto, auto);
        grid-gap: 2rem;
    }

    .card {
        /*height: 200px;*/
        /*background: red;*/
        border: 2px solid #e7e7e7;
        border-radius: 4px;
        padding: .5rem;
        -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
        display: flex;
        /* -webkit-box-orient: vertical; */
        /* -webkit-box-direction: normal; */
        -ms-flex-direction: column;
        flex-direction: column;
        position: relative;
        color: #5d5e5e;
    }

    /* li item */

    .thumbnail img {
        fill: #c7c4c4;
        height: 135px;
        opacity: .25;
        padding: 1.5rem;
    }

    .card-content {
        font-size: 1.35rem;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    .category {
        font-size: 1.5rem;
        text-transform: uppercase;
    }

    footer {
        border-top: 2px solid #e7e7e7;
        margin: .5rem 0 0;
        min-height: 30px;
        font-size: 1.5rem;
    }

    .category {
        position: absolute;
        top: 110px;
        left: 0;
        color: #fff;
        background: #e74c3c;
        padding: 10px 15px;
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .category__01 {
        background-color: #50c6db;
    }

    .post-meta {
        margin-top: .5rem;
    }

    .comments {
        margin-left: .5rem;
    }
</style>

