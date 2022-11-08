<?php
include("conf/conexion.php");

$consulta = $conexion->prepare('
    SELECT * FROM juego
');

$consulta->execute();

$juego = $consulta->fetchAll();

?>

<?php 
require('layout/_header.php');

?>

    <div class="grid-layout">
        <aside class="search">
            <h2 id="search-title">Buscar un juego</h2>
            <div class="main-search">
            <label for="buscar">
                <input type="text" name="buscar" id="buscar" placeholder="Busqueda por nombre">
            </label>
            <button id="search-button" type="sumbit">Buscar</button>         
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
            <img src= "<?php echo substr($juegos['imagen'],2)?>" alt="">
            <div class="texts">
            <h3> <?php echo $juegos['nombre']; ?> </h3>
            <p> Precio:<?php echo $juegos['precio']; ?> $</p>
            </div>
            <div>
            <a href="" class="link">
                <button type="sumbit">Ver mas</button>
            </a>
            </div>
        </div>
        </div>
        <?php  endforeach; ?>
        </div>
    </div>


<?php 
require('layout/_footer.php');

?>