<?php
//Activamos el almacenamiento en el buffer
require 'header_light.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div class="agricultura" style="text-align: center;">
    <section class="cards" style="margin: 30px;">
        <?php
            $tractores = [
                    ['6100E',               'John Deere 4045T PowerTech™','97 hp',  '24A / 12R PowrReverser™ Plus',          '540/1000 rpm',  'Centro abierto, 72,3 L/min',      'Cat II,  3420 Kg  a 610 mm.' ],
                    ['6110E',               'John Deere 4045T PowerTech™','106 hp', '24A / 12R PowrReverser™ Plus',          '540/1000 rpm',  'Centro abierto, 72,3 L/min',      'Cat II,  3420 Kg  a 610 mm.' ],
                    ['6125E',               'John Deere 4045H PowerTech™','123 hp', '24A / 12R PowrReverser™ Plus',          '540/1000 rpm',  'Centro abierto, 72,3 L/min',      'Cat II,  3420 Kg  a 610 mm.' ],
                    ['6115J',               'John Deere PowerTech™ 4045T','115 hp', 'PowrQuad™ 16x16 o SyncroPlus de 12x4',  '540/1000 rpm',  'De centro cerrado de 100 L/min',  'Cat II,  2500 kgf a 610 mm.' ],
                    ['6135J',               'John Deere PowerTech™ 6068T','135 hp', 'PowrQuad™ 16/16',                       '540/1000 rpm',  'De centro cerrado de 100 L/min',  'Cat II,  2500 kgf a 610 mm.' ],
                    ['Nuevo modelo 6135M',  'John Deere PowerTech™ 6068T','135 hp', 'CommandQuad™ 20x20',                    '540/1000 rpm',  'De centro cerrado de 110 L/min',  'Cat II,  2550 kgf a 610 mm.' ],
                    ['6150J',               'John Deere PowerTech™ 6068T','150 hp', 'PowrQuad 16/16',                        '540/1000 rpm',  'De centro cerrado de 100 L/min',  'Cat III, 3580 kgf a 610 mm.' ],
            ];

            foreach($tractores as $item){ ?>
                <article class="card">
                    <picture class="thumbnail">
                        <img class="category__01" src="https://abbeyjfitzgerald.com/wp-content/uploads/2018/01/cloud.svg"
                             alt=""/>
                    </picture>
                    <div class="card-content">
                        <p class="category category__01"><span><?=$item[0]?></span></p>
                        <h2><span><?=$item[1]?></span></h2>
                        <p><span><?=$item[6]?></span></p>
                    </div><!-- .card-content -->
                    <footer>
                        <div class="post-meta">
                            <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span>
                            <span class="comments"><i class="fa fa-comments"></i><a href="#"> 14 comments</a></span>
                        </div>
                    </footer>
                </article>
            <?php } ?>
        <!--   card 1 -->
        <article class="card">
            <picture class="thumbnail">
                <img class="category__01" src="https://abbeyjfitzgerald.com/wp-content/uploads/2018/01/cloud.svg"
                     alt=""/>
            </picture>
            <div class="card-content">
                <p class="category category__01">Cloud Storage</p>
                <h2>Photo Storage</h2>
                <p>TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but diversify kpis but
                    market-facing.</p>
            </div><!-- .card-content -->
            <footer>
                <div class="post-meta">
                    <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span>
                    <span class="comments"><i class="fa fa-comments"></i><a href="#"> 14 comments</a></span>
                </div>
            </footer>
        </article>
        <!--   card 2 -->
        <article class="card">
            <picture class="thumbnail">
                <img class="category__02" src="https://abbeyjfitzgerald.com/wp-content/uploads/2018/01/camera-1.svg"
                     alt=""/>
            </picture>
            <div class="card-content">
                <p class="category category__02">Photo Technology</p>
                <h2>Image Formatting</h2>
                <p>TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but diversify kpis but
                    market-facing.</p>
            </div><!-- .card-content -->
            <footer>
                <div class="post-meta">
                    <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span>
                    <span class="comments"><i class="fa fa-comments"></i><a href="#"> 11 comments</a></span>
                </div>
            </footer>
        </article>
        <!--   card 3 -->
        <article class="card">
            <picture class="thumbnail">
                <img class="category__03" src="https://abbeyjfitzgerald.com/wp-content/uploads/2018/01/list-1.svg"
                     alt=""/>
            </picture>
            <div class="card-content">
                <p class="category category__03">Data Management</p>
                <h2>Document Organization</h2>
                <p>TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but diversify kpis but
                    market-facing.TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but
                    diversify kpis but market-facing.TUX re-inventing the wheel, and move the needle. Feature creep
                    dogpile that but diversify kpis but market-facing.</p>
            </div><!-- .card-content -->
            <footer>
                <div class="post-meta">
                    <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span>
                    <span class="comments"><i class="fa fa-comments"></i><a href="#"> 15 comments</a></span>
                </div>
            </footer>
        </article>
        <!--   card 4 -->
        <article class="card">
            <picture class="thumbnail">
                <img class="category__04"
                     src="https://abbeyjfitzgerald.com/wp-content/uploads/2017/10/browser-icon-01.svg" alt=""/>
            </picture>
            <div class="card-content">
                <p class="category category__04">Product Management</p>
                <h2>Product Requirements</h2>
                <p>TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but diversify kpis but
                    market-facing.TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but
                    diversify kpis but market-facing.</p>
            </div><!-- .card-content -->
            <footer>
                <div class="post-meta">
                    <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span>
                    <span class="comments"><i class="fa fa-comments"></i><a href="#"> 12 comments</a></span>
                </div>
            </footer>
        </article>
        <!--   card 5 -->
        <article class="card">
            <picture class="thumbnail">
                <img class="category__02" src="https://abbeyjfitzgerald.com/wp-content/uploads/2018/01/camera-1.svg"
                     alt=""/>
            </picture>
            <div class="card-content">
                <p class="category category__02">Photo Technology</p>
                <h2>Image Techniques</h2>
                <p>TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but diversify kpis but
                    market-facing.</p>
            </div><!-- .card-content -->
            <footer>
                <div class="post-meta">
                    <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span>
                    <span class="comments"><i class="fa fa-comments"></i><a href="#"> 18 comments</a></span>
                </div>
            </footer>
        </article>
        <!--   card 6 -->
        <article class="card">
            <picture class="thumbnail">
                <img class="category__01" src="https://abbeyjfitzgerald.com/wp-content/uploads/2018/01/cloud.svg"
                     alt=""/>
            </picture>
            <div class="card-content">
                <p class="category category__01">Cloud Storage</p>
                <h2>Image Upload</h2>
                <p>TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but diversify kpis but
                    market-facing.</p>
            </div><!-- .card-content -->
            <footer>
                <div class="post-meta">
                    <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span>
                    <span class="comments"><i class="fa fa-comments"></i><a href="#"> 19 comments</a></span>
                </div>
            </footer>
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

        .category__02 {
            background-color: #5d5e5e;
        }

        .category__03 {
            background-color: #51bb7b;
        }

        .category__04 {
            background-color: #f47820;
        }

        .post-meta {
            margin-top: .5rem;
        }

        .comments {
            margin-left: .5rem;
        }
</style>
