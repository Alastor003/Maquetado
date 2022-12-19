<?php

require_once('conf/conf.php');
require_once('funciones/funciones_input.php');
require_once('funciones/consultas.php');

$id = test_input( $_GET['id'] ?? null );

deleteProducto($conexion, $id);

header('Location: listaProductos.php');

?>