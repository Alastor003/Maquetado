<?php require('layout/_header.php'); ?>

<div class="bg-light index">

  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="products.php" target="_blank">  <img src="img/index/Fifita1.jpg" alt="Image"></a>
        </div>

        <div class="item">
        <a href="products.php" target="_blank"><img src="img/index/tlou1.jpg" alt="Image"></a>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    


    <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/productos.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Bienvenido a <span class="portal">Portal</span><span class="house">Gaming</span></h1>
        <p class="lead">Tú portal de videojuegos con las noticias y la venta de los mejores juegos en el catálogo actual del mundo gamer. ¿No encuentras ese juego que buscas, quieres reservar algún título que salga proximamente o tenes algún problema técnico al realizar tú compra?. ¡Escríbenos!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a class="btn btn-primary" href="formulario.php" target="_blank">Ir a contacto</a>
        </div>
      </div>
    </div>
  </div>


    <!---------------------- Section ----------------------->

  

    <section class="projects-section" id="projects">
    <h2 class="text-center">Novedades</h2>
    <br/>
    <br/>
      <div class="container px-4 px-lg-5">
        <!-- Featured Project Row-->
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0 card" src="img/index/section1.jpg" alt="Fifa 23" />
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Compra EA SPORTS™ FIFA 23</h4>
              <p class="text-black-50 mb-0">Disponible para PS5, PS4, Xbox Series X|S, Xbox One y PC. </p>
            </div>
            <br>
            <div class="text-center">
              <a class="btn btn-primary" href="products.php" target="_blank">Ir a productos</a>
            </div>
          </div>
        </div>
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0 card" src="img/index/gow1.jpg" alt="God of War" />
        </div> 
        <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left ">
              <h4>God of War Ragnarok</h4>
              <p class="text-black-50 mb-0">God of War: Ragnarok fue anunciado el 16 de septiembre de 2020. Finalmente llegará el el próximo 9 de noviembre de 2022</p>
            </div>
            <br>
            <div class="text-center">
              <a class="btn btn-primary" href="noticias.php" target="_blank">Ir a noticias</a>
            </div>
          </div>         
        </div>
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0 card " src="img/index/Vr3.jpg" alt="Oculus rift" />
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Nuevos Oculus Rift</h4>
              <p class="text-black-50 mb-0">Mark Zuckerberg responde a las críticas por los gráficos de Horizon Worlds</p>
            </div>
            <br>
            <div class="text-center">
              <a class="btn btn-primary" href="noticias.php" target="_blank">Ir a noticias</a>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>  
<!-- 
  
 -->
 
    <?php require('layout/_footer.php'); ?>
