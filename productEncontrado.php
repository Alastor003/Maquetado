<?php

require_once('conf/conf.php');
require_once('funciones/funcionJuegos.php');
require_once('conf/conexion.php');

$nombre = $_GET['nombre'] ?? null;

$juego = getJuegosPorNombre($conexion, $nombre);

?>
<?php
require('layout/_header.php');
?>
    <div class="container_juegoEncontrado">
        <?php if ($juego) : ?>
            <h1><?php echo $juego['nombre'];?> </h1>

                <div class="juego_encontrado">
                   <div> 
                    <img class="juego_encontrado__imagen" src= "<?php echo substr($juego['imagen'],2)?>" alt="">
                    </div>

                    <div class="descripcion_juego">
                        <p class="texto_juego"><?php echo $juego['descripcion'] ?></p>
                        <p class="precio_juego">Precio:$<?php echo $juego['precio']; ?></p>
                        <div>
                        <a class="boton" href="#">Comprar</a>
                        <a class="boton" href="#">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
        <?php else : ?>
            <h1 class="mb-3 text-center">
                Sin resultados
            </h1>
            <div class="alert alert-danger">No se encontro ese juego</div>
        <?php endif ?>
        <hr>
        <a class="boton" href="products.php"> Volver </a>
    </div>

    <?php
require('layout/_footer.php');
?>