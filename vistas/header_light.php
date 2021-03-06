<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/logo.ico">
    <link rel="shortcut icon" href="../public/img/logo.ico">

    <!--Datatables-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <div class="border-bottom border-success border-5"></div>
        <div class="border-bottom border-warning border-5"></div>
        <!-- Logo -->
        <a href="index.php" class="logo" style="text-decoration: none; color: #367c2b; font-weight: bold;">
            <span class="logo-mini">
                <img src="../public/img/logo.png" alt="logo" width="35">
                John Deere
            </span>
            <span class="logo-lg">
                <img src="../public/img/logo.png" alt="logo" width="35">
                John Deere
            </span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="../vistas/desk.php" style="font-size: 15px; text-decoration: none; color: black;">
                        <span class="hidden-xs">Iniciar Sesi??n</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Header Navbar: style can be found in header.less -->

        <?php
        require dirname(__DIR__) . "/vistas/components/index/navBar.php"
        ?>

    </header>
