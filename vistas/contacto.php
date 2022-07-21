<?php
require 'header_light.php';
?>
<title>John Deere | Contactos</title>

<div class="vid-container">
    <video class="bgvid" autoplay="autoplay" muted="muted" preload="auto" loop poster="../public/images/tractor/6115j.jpg">
        <source src="../public/video/Clip%2050%20años_360p.mp4#t=170" type="video/mp4" >
        Tu navegador no admite el elemento <code>video</code>.
    </video>
    <div class="container">
        <form id="contact" action="https://www.youtube.com/watch?v=mCdA4bJAGGk" method="post" target="_blank">
            <h3>John Deere aguarda su consulta</h3>
            <h4>Contáctenos para una cotización personalizada</h4>
            <fieldset>
                <input placeholder="Apellido, Nombre" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Correo electrónico" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Número de teléfono (Opcional)" type="tel" tabindex="3">
            </fieldset>
            <fieldset>
                <input placeholder="Ubicación (Opcional)" type="url" tabindex="4">
            </fieldset>
            <fieldset>
                <textarea placeholder="Escribe tu mensaje" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...enviando" tabindex="6">Enviar</button>
            </fieldset>
        </form>
    </div>
</div>
    <?php
    require 'footer.php';
    ?>

<style>
    .vid-container{
        margin-top: 4%;
        position:relative;
        height:112vh;
    }
    .bgvid{
        position:absolute;
        left:0;
        top:0;
        align-content: center;
        height:100%;
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

    .container {
        max-width: 500px;
        width: 100%;
        margin: 0 auto;
        position: relative;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea,
    #contact button[type="submit"] {
        font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    }

    #contact {
        background: #F9F9F9;
        padding: 25px;
        margin: 150px 0;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact h3 {
        display: block;
        font-size: 30px;
        font-weight: 300;
        margin-bottom: 10px;
    }

    #contact h4 {
        margin: 5px 0 15px;
        display: block;
        font-size: 13px;
        font-weight: 400;
    }

    fieldset {
        border: medium none !important;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea {
        width: 100%;
        border: 1px solid #ccc;
        background: #FFF;
        margin: 0 0 5px;
        padding: 10px;
    }

    #contact input[type="text"]:hover,
    #contact input[type="email"]:hover,
    #contact input[type="tel"]:hover,
    #contact input[type="url"]:hover,
    #contact textarea:hover {
        -webkit-transition: border-color 0.3s ease-in-out;
        -moz-transition: border-color 0.3s ease-in-out;
        transition: border-color 0.3s ease-in-out;
        border: 1px solid #aaa;
    }

    #contact textarea {
        height: 100px;
        max-width: 100%;
        resize: none;
    }

    #contact button[type="submit"] {
        cursor: pointer;
        width: 100%;
        border: none;
        background: #4CAF50;
        color: #FFF;
        margin: 0 0 5px;
        padding: 10px;
        font-size: 15px;
    }

    #contact button[type="submit"]:hover {
        background: #43A047;
        -webkit-transition: background 0.3s ease-in-out;
        -moz-transition: background 0.3s ease-in-out;
        transition: background-color 0.3s ease-in-out;
    }

    #contact button[type="submit"]:active {
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
    }

    #contact input:focus,
    #contact textarea:focus {
        outline: 0;
        border: 1px solid #aaa;
    }

    ::-webkit-input-placeholder {
        color: #888;
    }

    :-moz-placeholder {
        color: #888;
    }

    ::-moz-placeholder {
        color: #888;
    }

    :-ms-input-placeholder {
        color: #888;
    }
</style>
