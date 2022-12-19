<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="<?php require_once('conf/conf.php')?>css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="cajaLogin">

    <form class="contacto-form flex-form" action="funciones/funcionLogin.php" method="post">
        <div>
            <h1 class="tituform">Ingrese su cuenta</h1>
        </div>
        <div>
            <label class="text-form" for="usuario"></label>
            <input class="area" placeholder="usuario" type="text" placeholder="ingrese su nombre" name="usuario">
        </div>
        <div>
            <label class="text-form" for="password"></label>
            <input class="area" placeholder="contraseña" type="password" placeholder="ingrese su contraseña" name="password">
        </div>
        <div>
             <input class="boton-form" type="submit" value="Entrar">
             <a class="back" href="index.php">volver atras</a>
        </div>
   </form>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
