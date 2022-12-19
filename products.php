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

    <div class="grid-layout">
        <aside class="search">
            <h2 id="search-title">Buscar un juego</h2>
            <div class="main-search">
           <form action="productEncontrado.php">    
            <label for="nombre">
                <input type="text" name="nombre" id="nombre" placeholder="Busqueda por nombre">
            </label>
            <button id="search-button" type="sumbit">Buscar</button>    
            </form>      
            </div>
            <div class="categories">
                <h4>Categorias</h4>
                <label for="">
                    <input type="checkbox">
                    Acción
                </label>
                <label for="">
                    <input type="checkbox">
                    Aventura
                </label>
                <label for="">
                    <input type="checkbox">
                    Peleas
                </label>
                <label for="">
                    <input type="checkbox">
                    Carreras
                </label>
            </div>
            <br>
            <h4>Rango de precios</h4>
            <br>
            <label for="">
                100$ (min)
                <input type="range">
                10.000$ (max)
            </label>
        </aside>

    <div class="cars-container">
    
<?php foreach($juego as $juegos) : ?>    
    
    <div class="inner">
        <div class="grid-card">
            <img src= "<?php echo ($juegos['imagen'])?>" alt="">
            <div class="texts">
            <h3> <?php echo $juegos['nombre']; ?> </h3>
            <p> Precio:<?php echo $juegos['precio']; ?> $</p>
            </div>
        </div>
        </div>
<?php endforeach ?>



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