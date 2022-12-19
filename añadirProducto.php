<?php 

require_once('conf/conf.php');
require_once('funciones/funciones_input.php');
require_once('funciones/consultas.php');

$nombre = test_input( $_POST['nombre'] ?? null );
$imagen = $_FILES['imagen'] ?? null;
$precio = test_input( $_POST['precio'] ?? null );
$descripcion = test_input( $_POST['descripcion'] ?? null );

$errores = array();

if( isset($_POST['submit']) )
{

    if( empty($nombre) ){
        array_push($errores, 'Usted debe ingresar un nombre.');
    }

    if( !filter_var($precio, FILTER_VALIDATE_FLOAT) ){
        array_push($errores, 'Usted debe un precio con un formato correcto.');
    }

    if( empty($descripcion) ){
        array_push($errores, 'Usted debe ingresar una descripción.');
    }

    if( $imagen['error'] == '0' ){

        $info = pathinfo($imagen['name']);
        
        $extensiones_permitidas = array('jpg', 'png', 'gif');

        if( !in_array( $info['extension'], $extensiones_permitidas ) )
        {
            array_push($errores, 'Usted debe cargar un archivo con formato jpg, png o gif.');
        }

    }else{
        array_push($errores, 'Usted debe cargar una imagen.');
    }

    if( count($errores) == 0 )
    {

        $imagen_path = 'img/productos/' . time() . $imagen['name'];

        move_uploaded_file( $imagen['tmp_name'], $imagen_path );

        addProducto($conexion, array(
            'nombre' => $nombre,
            'imagen' => $imagen_path,
            'precio' => $precio,
            'descripcion' => $descripcion
        ));

        header('Location: listaProductos.php');

    }

}

?>



        <?php require('layout/_headerAdm.php') ?>
 
            <main>
                <div class="container-fuild px-4 administracion">

                    <h1 class="mt-4"> Producto nuevo </h1>

                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-plus me-1"></i>
                        </div>

                        <div class="card-body">

                            <ul>
                                <?php foreach($errores as $error): ?>
                                    <li class="text text-danger"> <?php echo $error ?> </li>
                                <?php endforeach ?>
                            </ul>

                            <form class="m-3" method="post" action="añadirProducto.php" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label"> Nombre </label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto" value="<?php echo $nombre ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="precio" class="form-label"> Precio </label>
                                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del producto" value="<?php echo $precio ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label"> Descripción </label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Ingrese la descripción del producto"><?php echo $descripcion ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="form-label"> Imagen </label>
                                    <input type="file" class="form-control" id="imagen" name="imagen">
                                </div>
                                <button type="submit" class="btn btn-success" name="submit"> Agregar </button>
                                <a class="btn btn-danger" href="<?php echo BASE_URL ?>listaProductos.php"> Cancelar </a>
                            </form>
                        </div>

                    </div>

                </div>
            </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>