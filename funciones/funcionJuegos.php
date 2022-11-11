<?php

function getJuegos(PDO $conexion)
{

    $consulta = $conexion->prepare('
        SELECT id, nombre, precio, imagen, descripcion
        FROM juego
    ');

    $consulta->execute();

    $juego = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $juego;

}

function getJuegosPorNombre(PDO $conexion, $nombre)
{

    $consulta = $conexion->prepare('
        SELECT id, nombre, precio, imagen, descripcion
        FROM juego
        WHERE nombre = :nombre
    ');

    $consulta->bindValue(':nombre', $nombre);

    $consulta->execute();

    $juego = $consulta->fetch(PDO::FETCH_ASSOC);

    return $juego;

}