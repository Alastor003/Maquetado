<?php require_once('conf/conf.php')    ?>
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
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>PortalGaming</title>
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
                <li><a class="btn_nav" href="products.php"> PRODUCTOS</a></li>
                <li><a class="btn_nav" href="noticias.php"> NOTICIAS</a></li>
                <li><a class="btn_nav" href="formulario.php"> CONTACTO</a></li>
               
                
            </ul>
    </nav>

<main class="contenedor-sombra">
      

      <section>
         <h1 class="formt">Formulario de contacto</h1>
         <form class="formulario">
            <fieldset>
                  <legend>Contactanos</legend>
                  <div class="contenedor-campos">
                  <div class="campo">
                     <label for="nombre">Nombre</label>
                     <input class="input-text" type="text" placeholder="Tu nombre" id="nombre">
                  </div>  
                  <div class="campo">
                     <label for="telefono">Telefono</label>
                     <input class="input-text" type="tel" placeholder= "Tu telefono" id="telefono" required>
                  </div> 
                  <div class="campo">
                     <label for="correo"> Correo </label>
                     <input class="input-text" type= "text" placeholder= "Tu Email" id="correo" required>
                  </div>
                  <div class="campo">
                     <label for="mensaje">Mensaje</label>
                     <textarea class="input-text" placeholder="Escriba aqui su consulta" id="mensaje"></textarea>
                  </div>
                  </div>
      
                  <!--boton-->
                  <div class="alinear-derecha flex">
                  <input id="enviar" class="boton w-sm-100" type="submit" value="Enviar">
               </div>
         <form/>            
      </section>
</main>
      <script src="js/script.js"></script>
      <?php require('layout/_footer.php'); ?>






 



