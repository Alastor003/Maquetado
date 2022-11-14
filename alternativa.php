<?php 
//Array asocaitivo para los productos

$productos = array(
    array(
        'id' => 1,
        'title' => 'God of war',
        'image' => 'GodOfWar.jpg',
        'price' => '4200'
    ),
    array(
        'id' => 1,
        'title' => 'Dark Souls 2',
        'image' => 'DarkSoulsDos.jpg',
        'price' => '2000'
    ),
    array(
        'id' => 1,
        'title' => 'Assassin´s Creed',
        'image' => 'Origin.jpg',
        'price' => '500'
    ),
    array(
        'id' => 1,
        'title' => 'Bloodborne',
        'image' => 'Bloodborne.jpg',
        'price' => '1500'
    ),
    array(
        'id' => 1,
        'title' => 'Ghost Runner',
        'image' => 'GhostRunner.jpg',
        'price' => '1500'
    ),
    array(
        'id' => 1,
        'title' => 'Little Nightmares',
        'image' => 'LittleNightmares.jpg',
        'price' => '1000'
    ),
    array(
        'id' => 1,
        'title' => 'Cyberpunk',
        'image' => 'Cyberpunk.jpg',
        'price' => '2200'
    ),
    array(
        'id' => 1,
        'title' => 'Mortal Kombat',
        'image' => 'MortalKombat.jpg',
        'price' => '230'
    ),
    array(
        'id' => 1,
        'title' => 'Fifa 2023',
        'image' => 'Fifa2023.jpg',
        'price' => '6000'
    ),
    array(
        'id' => 1,
        'title' => 'Call Ff Duty',
        'image' => 'COD.jpg',
        'price' => '1800'
    ),
    array(
        'id' => 1,
        'title' => 'Doom',
        'image' => 'Doom.jpg',
        'price' => '3900'
    ),
    array(
        'id' => 1,
        'title' => 'Grand Theft Auto',
        'image' => 'GTA.jpg',
        'price' => '2300'
    ),
    array(
        'id' => 1,
        'title' => 'Gran Turismo 7',
        'image' => 'GranTurismo.jpg',
        'price' => '5000'
    ),
    array(
        'id' => 1,
        'title' => 'It Takes Two',
        'image' => 'ItTakesTwo.jpg',
        'price' => '2900'
    ),
    array(
        'id' => 1,
        'title' => 'King Of Fighters XV',
        'image' => 'KOF15.jpg',
        'price' => '2900'
    ),
    array(
        'id' => 1,
        'title' => 'Persona 5',
        'image' => 'Persona5.jpg',
        'price' => '2100'
    ),
    array(
        'id' => 1,
        'title' => 'Prince of Persia',
        'image' => 'Prince.jpg',
        'price' => '1200'
    ),
    array(
        'id' => 1,
        'title' => 'Ruined King',
        'image' => 'Ruined.jpg',
        'price' => '2400'
    )
);

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
    
    <?php foreach ($productos as $product) { ?>  
    
    <div class="inner">
        <div class="grid-card">
            <img src= "img/productos/<?php echo $product['image']; ?>" alt="">
            <div class="texts">
            <h3> <?php echo $product['title']; ?> </h3>
            <p> Precio:<?php echo $product['price']; ?> $</p>
            </div>
        </div>
        </div>
<?php } ?>

      

    </div>
</div>
<?php 
require('layout/_footer.php');

?>