<?php require_once('conf/conf.php') ?>
<?php require('layout/_header.php'); ?>
<?php require_once('funciones/funciones_input.php'); ?>
<?php
$nombre = test_input($_POST['nombre'] ?? null);
$mensaje = test_input($_POST['mensaje'] ?? null);
$email = test_input($_POST['email'] ?? null);
$asunto = test_input($_POST['asunto'] ?? null);

$errores = array();

if ( isset($_POST['submit']) ){

    if( empty($nombre) ){
        array_push($errores, 'Debes ingresar un nombre');
    }

    if( filter_var($email, FILTER_VALIDATE_EMAIL ) == FALSE ) {
        array_push($errores, 'Ingrese un mail valido');
    }
    
    if( empty($asunto) ) {
        array_push($errores, 'Ingrese un asunto al mensaje');
    }
    if( empty($mensaje) ) {
        array_push($errores, 'Ingrese un Mensaje');
    }
}
?>

<section class="contenedor_form">
    <h1 class= "tituform">Contactanos</h1>

        <div class="contacto-form">
          <form class="form-grid" action="formulario.php" method="post">
            <div>
                <label class="text-form" for="nombre"></label>
                <input placeholder="Nombre" class="area" type ="text" name ="nombre" id="nombre">
            </div>
            <div>
                <label class="text-form" for="email"></label> 
                <input placeholder="email" class="area" type ="email"  name="email" id="email">
            </div>
            <div>
                <label class="text-form" for="telefono"></label>
                <input placeholder="telefono" class="area" type ="number" Tel ="Telefono" id="telefono">
            </div>
            <div>
                <label class="text-form" for="asunto"></label>
                <input placeholder="asunto" class="area" type ="text" name="asunto" id="asunto">
            </div>
            <div class="grid-mensaje">        
            <label for="mensaje" class="text-form" ></label>
            <textarea placeholder="Escribe tu mensaje"  class="area" id="mensaje" name="mensaje" rows="3"></textarea>
            </div>        
            <div class="grid-boton">
            <button class="boton-form" type="submit" name="submit" >
            Enviar
            </button>
            </div>
         </form>   
        </div>    
        <ul>
            <?php foreach($errores as $error){ ?>
                <li class="error"> <?php echo $error ?> </li>
            <?php } ?>
        </ul>
</section>


<?php require('layout/_footer.php'); ?>






 



