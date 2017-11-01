<?php 
// Recuperamos datos del formulario
$com=$_POST['comentario'];
$cla=$_GET['clave'];
include("conexion.php");

$sql="INSERT INTO comentarios(comentario, idUsuario, idActividad) VALUES ('$com','1', '$cla')";

mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");

mysqli_close($conexion);
header("location:verActividades.php?clave=$cla");
?>