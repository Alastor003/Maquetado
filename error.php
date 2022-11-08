<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php require_once('conf/conf.php')?>css/estilo.css">
    <script src="https://kit.fontawesome.com/781d92d775.js" crossorigin="anonymous"></script>
    <title>error</title>
</head>
<body>
       <div class ="contenedor_error">      
                <img class="imagen_error" src="<?php require_once('conf/conf.php')?>img/error.png" alt="link muerto">
                <h1 class ="titulo_error"> Ups!</h1>
                <p class="parrafo_error"> parece ser que encontraste un link muerto, utiliza esta extra vida y vuelve a empezar.</p>
        </div>
        <a class="link_error" href="<?php require_once('conf/conf.php')?>index.php"><i class="fa-sharp fa-solid fa-heart"></i></a>
</body>
</html>
