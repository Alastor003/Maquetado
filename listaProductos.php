<?php 

require_once('conf/conf.php');
require_once('funciones/consultas.php');

$productos = getProductos($conexion);

?>



        <?php require('layout/_headerAdm.php') ?>

            <main>
                <div class="container-fluid px-4 administracion">

                    <h1 class="mt-4"> Lista de productos </h1>

                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-list me-1"></i>
                        </div>

                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Nombre </th>
                                        <th scope="col"> Precio </th>
                                        <th scope="col"> Imagen </th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php foreach($productos as $prod): ?>
                                        <tr>
                                            <td> <?php echo $prod['nombre'] ?> </td>
                                            <td> $<?php echo number_format($prod['precio'], 2, ',', '.') ?> </td>
                                            <td> 
                                            <a target="_blank" href="<?php echo BASE_URL . $prod['imagen'] ?>" class="text text-primary mb-3" title="Ver imagen">     
                                            <img src= "<?php echo ($prod['imagen'])?>" width="90" alt="imagen juego"> 
                                                </a>
                                             </td>
                                             <td>   
                                                <a href="<?php require_once('conf/conf.php')?>editarProd.php?id=<?php echo $prod['id'] ?>" class="text text-success" title="Editar producto">  
                                                    <i class="fas fa-edit fa-lg"></i>
                                                </a>
                                                |
                                                <a href="<?php require_once('conf/conf.php')?>borrarProd.php?id=<?php echo $prod['id'] ?>" class="text text-danger btn-delete" title="Eliminar producto">  
                                                    <i class="fas fa-trash fa-lg"></i>
                                                </a>
                                             </td>  
                                            </td>
                                        </tr>                            
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </main>

    <script src="<?php require_once('conf/conf.php')?>js/list-productos.js"></script>
</body>

</html>