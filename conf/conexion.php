<?php

    try {

    $conexion = new PDO('mysql:host=localhost; dbname=juegos; charset=utf8', 'root', '');

    } catch (PDOException $e) {
        
        header('location: error.php');

        echo $e->getMessage();
        exit;
        

    }
?>