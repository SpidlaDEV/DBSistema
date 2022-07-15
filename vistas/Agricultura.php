<?php
//Activamos el almacenamiento en el buffer
require 'header_light.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div class="agricultura" style="text-align: center;">
    <h1 class="text-bold" style="font-size: 150px; color: #367c2b">John Deere <span class="font-light" style="color: #000000">Agricultura</span></h1>
    <hr style="height:10px; border:none; color:#333; background-color:#333; margin: 0 50px 0 50px; ">
    <section class="cards" style="margin: 30px;">
        <?php
            $tractores = [
                    ['6100E',               'John Deere 4045T PowerTech™','97 hp',  '24A / 12R PowrReverser™ Plus',          '540/1000 rpm',  'Centro abierto, 72,3 L/min',      'Cat II,  3420 Kg  a 610 mm.', '../public/images/tractor/6100e.jpg'],
                    ['6110E',               'John Deere 4045T PowerTech™','106 hp', '24A / 12R PowrReverser™ Plus',          '540/1000 rpm',  'Centro abierto, 72,3 L/min',      'Cat II,  3420 Kg  a 610 mm.', '../public/images/tractor/6110e.jpg' ],
                    ['6125E',               'John Deere 4045H PowerTech™','123 hp', '24A / 12R PowrReverser™ Plus',          '540/1000 rpm',  'Centro abierto, 72,3 L/min',      'Cat II,  3420 Kg  a 610 mm.', '../public/images/tractor/6125e.jpg' ],
                    ['6115J',               'John Deere PowerTech™ 4045T','115 hp', 'PowrQuad™ 16x16 o SyncroPlus de 12x4',  '540/1000 rpm',  'De centro cerrado de 100 L/min',  'Cat II,  2500 kgf a 610 mm.', '../public/images/tractor/6115j.jpg' ],
                    ['6135J',               'John Deere PowerTech™ 6068T','135 hp', 'PowrQuad™ 16/16',                       '540/1000 rpm',  'De centro cerrado de 100 L/min',  'Cat II,  2500 kgf a 610 mm.', '../public/images/tractor/6135j.jpg' ],
                    ['Nuevo modelo 6135M',  'John Deere PowerTech™ 6068T','135 hp', 'CommandQuad™ 20x20',                    '540/1000 rpm',  'De centro cerrado de 110 L/min',  'Cat II,  2550 kgf a 610 mm.', '../public/images/tractor/6135m.jpg' ],
                    ['6150J',               'John Deere PowerTech™ 6068T','150 hp', 'PowrQuad 16/16',                        '540/1000 rpm',  'De centro cerrado de 100 L/min',  'Cat III, 3580 kgf a 610 mm.', '../public/images/tractor/6150j.jpg' ],
            ];

            foreach($tractores as $item){ ?>
                <article class="card">
                    <picture>
                        <img class="category__01" height="160" alt="" src="<?= $item[7] ?>" />
                    </picture>
                    <div class="card-content">
                        <p class="category category__01"><span><?=$item[2]?></span></p>
                        <h2 class="text-bold">John Deere <span><?=$item[0]?></span></h2>
                        <table>
                            <tr>
                                <th>Motor</th>
                                <th><?=$item[1]?></th>
                            </tr>
                            <tr>
                                <th>Transmisión</th>
                                <th><?=$item[3]?></th>
                            </tr>
                            <tr>
                                <th>Toma de fuerza</th>
                                <th><?=$item[4]?></th>
                            </tr>
                            <tr>
                                <th>Sistema hidráulico</th>
                                <th><?=$item[5]?></th>
                            </tr>
                            <tr>
                                <th>Levante 3 puntos</th>
                                <th><?=$item[6]?></th>
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
        $cosechadoras = [
            ['S760', 'Motor PowerTech™ PSS de 9 L',     '320 hp', '30/35 pies (Sinfín o FlexDraper)',   '10.600 L', '116 L/seg', 'De Serie', 'Suscripción gratuita por un año', 'Opcional', 'Opcional', '-',         '../public/images/cosechadora/s760.jpg'  ],
            ['S770', 'Motor PowerTech™ PSS de 9 L',     '373 hp', '35/40 pies (Sinfín o FlexDraper)',   '11.600 L', '135 L/sec', 'De Serie', 'Suscripción gratuita por un año', 'Opcional', 'Opcional', 'Opcional',  '../public/images/cosechadora/s770.jpg' ],
            ['S780', 'Motor PowerTech™ PSS de 13.5 L',  '473 hp', '40/45 pies (FlexDraper)',            '14.100 L', '135 L/seg', 'De Serie', 'Suscripción gratuita por un año', 'De Serie', 'Opcional', 'De Serie',  '../public/images/cosechadora/s780.jpg'  ],
            ['S790', 'Motor PowerTech™ PSS de 13.5 L',  '543 hp', '45 pies (FlexDraper)',               '14.100 L', '135 L/seg', 'De Serie', 'Suscripción gratuita por un año', 'De Serie', 'Opcional', 'De Serie',  '../public/images/cosechadora/s790.jpg'  ],
        ];

        foreach($cosechadoras as $item){ ?>
            <article class="card">
                <picture>
                    <img class="category__01" height="160" alt="" src="<?= $item[11] ?>" />
                </picture>
                <div class="card-content">
                    <p class="category category__01"><span><?=$item[4]?></span></p>
                    <h2 class="text-bold">John Deere <span><?=$item[0]?></span></h2>
                    <table>
                        <tr>
                            <th>Motor</th>
                            <th><?=$item[1]?></th>
                        </tr>
                        <tr>
                            <th>Plataforma</th>
                            <th><?=$item[3]?></th>
                        </tr>
                        <tr>
                            <th>Capacidad de descarga</th>
                            <th><?=$item[5]?></th>
                        </tr>
                        <tr>
                            <th>Pilo automático</th>
                            <th><?=$item[6]?></th>
                        </tr>
                        <tr>
                            <th>JDLink</th>
                            <th><?=$item[7]?></th>
                        </tr>
                        <tr>
                            <th>Combine Advisor</th>
                            <th><?=$item[8]?></th>
                        </tr>
                        <tr>
                            <th>Activeyield</th>
                            <th><?=$item[9]?></th>
                        </tr>
                        <tr>
                            <th>Haverst Smart 2.0</th>
                            <th><?=$item[10]?></th>
                        </tr>
                    </table>
                </div><!-- .card-content -->
            </article>
        <?php } ?>

        <article class="card">
            <a href="Jardin.php" style="color: #5d5e5e; text-decoration: none;">
                <picture>
                    <img height="160" class="category__01" src="../public/images/jardin/z355e.jpg" alt=""/>
                </picture>
                <div class="card-content">
                    <h2 class="text-bold">John Deere Equipos de Jardín</h2>
                    <p class="text-bold">Mantener el césped dejó de ser un trabajo y paso a ser un pasatiempo.</p>
                    <p>Las líneas de tractores de jardín John Deere son versátiles, ágiles y cómodos, ideales para áreas de hasta 6.000 m².</p>
                    <p>Alta maniobrabilidad incluso en zonas de espacio limitado. Motores extremadamente potentes con una eficacia de combustible sobresaliente.</p>
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

<script lang="js">
$tractores = [
        { 'id': '6100E',                'MOTOR (MARCA Y MODELO)': 'John Deere 4045T PowerTech™', 'POTENCIA': '97 hp',  'TRANSMISION': '24A / 12R PowrReverser™ Plus',           'TOMA DE POTENCIA': '540/1000 rpm', 'SISTEMA HIDRAULICO': 'Centro abierto, 72,3 L/min',     'LEVANTE 3 PUNTOS': 'Cat II,  3420 Kg  a 610 mm.' },
        { 'id': '6110E',                'MOTOR (MARCA Y MODELO)': 'John Deere 4045T PowerTech™', 'POTENCIA': '106 hp', 'TRANSMISION': '24A / 12R PowrReverser™ Plus',           'TOMA DE POTENCIA': '540/1000 rpm', 'SISTEMA HIDRAULICO': 'Centro abierto, 72,3 L/min',     'LEVANTE 3 PUNTOS': 'Cat II,  3420 Kg  a 610 mm.' },
        { 'id': '6125E',                'MOTOR (MARCA Y MODELO)': 'John Deere 4045H PowerTech™', 'POTENCIA': '123 hp', 'TRANSMISION': '24A / 12R PowrReverser™ Plus',           'TOMA DE POTENCIA': '540/1000 rpm', 'SISTEMA HIDRAULICO': 'Centro abierto, 72,3 L/min',     'LEVANTE 3 PUNTOS': 'Cat II,  3420 Kg  a 610 mm.' },
        { 'id': '6115J',                'MOTOR (MARCA Y MODELO)': 'John Deere PowerTech™ 4045T', 'POTENCIA': '115 hp', 'TRANSMISION': 'PowrQuad™ 16x16 o SyncroPlus de 12x4',   'TOMA DE POTENCIA': '540/1000 rpm', 'SISTEMA HIDRAULICO': 'De centro cerrado de 100 L/min', 'LEVANTE 3 PUNTOS': 'Cat II,  2500 kgf a 610 mm.' },
        { 'id': '6135J',                'MOTOR (MARCA Y MODELO)': 'John Deere PowerTech™ 6068T', 'POTENCIA': '135 hp', 'TRANSMISION': 'PowrQuad™ 16/16',                        'TOMA DE POTENCIA': '540/1000 rpm', 'SISTEMA HIDRAULICO': 'De centro cerrado de 100 L/min', 'LEVANTE 3 PUNTOS': 'Cat II,  2500 kgf a 610 mm.' },
        { 'id': 'Nuevo modelo 6135M',   'MOTOR (MARCA Y MODELO)': 'John Deere PowerTech™ 6068T', 'POTENCIA': '135 hp', 'TRANSMISION':'CommandQuad™ 20x20',                      'TOMA DE POTENCIA': '540/1000 rpm', 'SISTEMA HIDRAULICO': 'De centro cerrado de 110 L/min', 'LEVANTE 3 PUNTOS': 'Cat II,  2550 kgf a 610 mm.' },
        { 'id': '6150J',                'MOTOR (MARCA Y MODELO)': 'John Deere PowerTech™ 6068T', 'POTENCIA': '150 hp', 'TRANSMISION': 'PowrQuad 16/16',                         'TOMA DE POTENCIA': '540/1000 rpm', 'SISTEMA HIDRAULICO': 'De centro cerrado de 100 L/min', 'LEVANTE 3 PUNTOS': 'Cat III, 3580 kgf a 610 mm.' },
    ]
</script>

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
            grid-template-columns: repeat(auto-fill, minmax(400px, 6fr)); /* see notes below */
            grid-auto-rows: minmax(auto, auto);
            grid-gap: 2rem;
        }

        .card {
            /*height: 200px;*/
            /*background: red;*/
            border: 2px solid #e7e7e7;
            border-radius: 4px;
            padding: 2rem;
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
</style>
