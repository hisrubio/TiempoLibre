<?php 
// Recuperamos datos del formulario
$nUsu=$_POST['nombreUsuario'];
$nApe=$_POST['nombreApellidos'];
$cor=$_POST['correoElectronico'];
$pas=$_POST['password'];
$fNac=$_POST['fecNac'];

include("conexion.php");

$sql="INSERT INTO usuarios(usuario, nombre, correo, fecNac, password) VALUES ('$nUsu', '$nApe', '$cor', '$fNac', '$pas')";

mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");

mysqli_close($conexion);
header("location:miCuenta.php");
?>