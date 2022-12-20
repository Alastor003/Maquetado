<?php
include("conf/conexion.php");
require_once('funciones/paginador.php');
require_once('funciones/funcionJuegos.php');

$consulta = $conexion->prepare('
    SELECT * FROM juego
');

$consulta->execute();

$juego = $consulta->fetchAll();

//Total de juegos
$cantidad = count($juego);

//Página actual.
$pagina_actual = $_GET['pag'] ?? 1;

//Juegos por pagina
$cuantos_por_pagina = 6;

//Enlaces del paginado.
$paginado_enlaces = paginador_enlaces($cantidad, $pagina_actual, $cuantos_por_pagina);

$juego = paginador_lista($juego, $pagina_actual, $cuantos_por_pagina);

?>

<?php 
require('layout/_header.php');

?>

   
        <div class="search">
            <h2 id="search-title">Catalogo de Juegos en venta</h2>
            <div class="main-search">
                <form action="productEncontrado.php">    
                <label for="nombre">
                    <input class="area" type="text" name="nombre" id="nombre" placeholder="Busqueda por nombre">
                </label>
                <button class="boton" type="sumbit">Buscar</button>    
                </form>      
            </div>
        </div>

            <div class="cars-container"> 
            <?php foreach($juego as $juegos) : ?>   
                    <div class="inner">
                        <div class="grid-card">
                            <div>
                            <img class="imagen-juego" src= "<?php echo ($juegos['imagen'])?>" alt="imagen juego">
                            </div>
                            <div class="texts">
                            <h3> <?php echo $juegos['nombre']; ?> </h3>
                            <p> Precio:<?php echo $juegos['precio']; ?> $</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

             <div class="paginas">   
                    <ul class="pagination pagination-lg">
                    <?php if($paginado_enlaces['anterior']): ?>
                        <li class="page-item">
                            <a class="page-link" href="?pag=<?php echo $paginado_enlaces['primero'] ?>"> << </a>                        
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="?pag=<?php echo $paginado_enlaces['anterior'] ?>"> <?php echo $paginado_enlaces['anterior'] ?> </a>
                        </li>
                    <?php endif ?>
                    <li class="page-item active"> 
                        <span class="page-link">
                            <?php echo $paginado_enlaces['actual'] ?> 
                        </span>
                    </li>
                    <?php if($paginado_enlaces['siguiente']): ?>
                        <li class="page-item">
                            <a class="page-link" href="?pag=<?php echo $paginado_enlaces['siguiente'] ?>"> <?php echo $paginado_enlaces['siguiente'] ?> </a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginado_enlaces['ultimo'] ?>"> >> </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>        
            </div>


            
      


<?php 
require('layout/_footer.php');

?>