<?php
//Activamos el almacenamiento en el buffer
require 'header_light.php';
?>
    <title>John Deere | Iniciar Sesión</title>
<!--    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">-->
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>-->

<div class="vid-container">
    <video id="vid1" class="bgvid" autoplay="autoplay" muted="muted" preload="auto" loop poster="../public/images/tractor/6115j.jpg">
        <source src="../public/video/Clip%2050%20años_360p.mp4#t=60" type="video/mp4" >
        Tu navegador no admite el elemento <code>video</code>.
    </video>
    <div class="inner-container">
        <video class="bgvid inner" autoplay="autoplay" muted="muted" preload="auto" loop poster="../public/images/tractor/6115j.jpg">
            <source src="https://mazwai.com/videvo_files/video/free/2015-09/small_watermarked/postcard_from_big_sur_preview.webm?random=1" type="video/webm">
            Tu navegador no admite el elemento <code>video</code>.
        </video>
        <div class="box">
            <h1>Login</h1>
            <input type="text" placeholder="Usuario"/>
            <input type="text" placeholder="Contraseña"/>
            <button>Login</button>
        </div>
    </div>
</div>

<style>
    .vid-container{
        margin-top: 4%;
        position:relative;
        height:112vh;
        /*overflow:hidden;*/
    }
    .bgvid{
        position:absolute;
        left:0;
        top:0;
        align-content: center;
        height:100%;
    }
    .inner-container{
        width:400px;
        height:400px;
        position:absolute;
        top:calc(50vh - 200px);
        left:calc(50vw - 200px);
        overflow:hidden;
    }
    .bgvid.inner{
        /*top:calc(-50vh + 200px);*/
        /*left:calc(-50vw + 200px);*/
        filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");
        /*-webkit-filter:blur(10px);*/
        /*-ms-filter: blur(10px);*/
        /*-o-filter: blur(10px);*/
        /*filter:blur(10px);*/
    }
    .box{
        position:absolute;
        height:100%;
        width:100%;
        font-family:Helvetica;
        color:#fff;
        background:rgba(0,0,0,0.13);
        padding:30px 0px;
    }
    .box h1{
        text-align:center;
        margin:30px 0;
        font-size:30px;
    }
    .box input{
        display:block;
        width:300px;
        margin:20px auto;
        padding:15px;
        background:rgba(0,0,0,0.2);
        color:#fff;
        border:0;
    }
    .box input:focus,.box input:active,.box button:focus,.box button:active{
        outline:none;
    }
    .box button{
        background:#2ecc71;
        border:0;
        color:#fff;
        padding:10px;
        font-size:20px;
        width:330px;
        margin:20px auto;
        display:block;
        cursor:pointer;
    }
    .box button:active{
        background:#27ae60;
    }
    .box p{
        font-size:14px;
        text-align:center;
    }
    .box p span{
        cursor:pointer;
        color:#666;
    }
</style>
