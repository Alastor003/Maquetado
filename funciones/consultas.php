<?php

try {

    $conexion = new PDO('mysql:host=localhost; dbname=juegos; charset=utf8', 'root', '');

    } catch (PDOException $e) {
        
        header('location: error.php');

        echo $e->getMessage();
        exit;
    }

function addProducto(PDO $conexion, $data)
{
    $consulta = $conexion->prepare('
        INSERT INTO juego(nombre, imagen, precio, descripcion)
        VALUES(:nombre, :imagen, :precio, :descripcion)
    ');
    $consulta->bindValue(':nombre', $data['nombre']);
    $consulta->bindValue(':imagen', $data['imagen']);
    $consulta->bindValue(':precio', $data['precio']);
    $consulta->bindValue(':descripcion', $data['descripcion']);
    $consulta->execute();
}

function getProductos(PDO $conexion)
{
    $consulta = $conexion->prepare('
        SELECT juego.id, juego.nombre, juego.imagen, juego.precio, juego.descripcion
        FROM  juego
    ');
    $consulta->execute();
    $productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $productos;
}

function getProductoById(PDO $conexion, $id)
{
    $consulta = $conexion->prepare('
        SELECT id, nombre, imagen, precio, descripcion
        FROM juego
        WHERE id = :id
    ');
    $consulta->bindValue(':id', $id);
    $consulta->execute();
    $producto = $consulta->fetch(PDO::FETCH_ASSOC);
    return $producto;
}

function updateProducto(PDO $conexion, $id, $data)
{
    $consulta = $conexion->prepare('
        UPDATE juego
        SET
            nombre = :nombre,
            imagen = :imagen,
            precio = :precio,
            descripcion = :descripcion
        WHERE id = :id
    ');
    $consulta->bindValue(':nombre', $data['nombre']);
    $consulta->bindValue(':imagen', $data['imagen']);
    $consulta->bindValue(':precio', $data['precio']);
    $consulta->bindValue(':descripcion', $data['descripcion']);
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}

function deleteProducto(PDO $conexion, $id)
{
    $consulta = $conexion->prepare('
        DELETE FROM juego
        WHERE id = :id
    ');
    $consulta->bindValue(':id', $id);
    $consulta->execute();
}

?>