<?php

$usuario=$_POST['usuario'];
$password=$_POST['password'];

$conexion=mysqli_connect("localhost", "root", "", "juegos");
$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location: ../añadirProducto.php");

}else{
    
    header("location: ../login.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
