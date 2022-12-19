<?php require_once('conf/conf.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php require_once('conf/conf.php')?>css/estilo.css">
    <link rel="stylesheet" href="<?php require_once('conf/conf.php')?>css/normalize.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Trabajo Practico</title>
</head>
<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="botoncheck">
            <i class="fas fa-bars"></i>
        </label>
        <img id="logoimg" src="img/logo.jpg" alt="logoPortalGaming">
        <label class="logo" >PORTAL<span class="house">GAMING</span> </label>
            <ul class="header_ul">
                <li><a class="btn_nav" href="index.php">HOME</a></li>
                <li><a class="btn_nav" href="añadirProducto.php">AÑADIR PRODUCTOS</a></li>
                <li><a class="btn_nav" href="listaProductos.php">LISTA DE PRODUCTOS</a></li>
                
               
                
            </ul>
    </nav>