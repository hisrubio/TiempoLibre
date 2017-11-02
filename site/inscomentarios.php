<?php 
// Recuperamos datos del formulario
session_start();


$com=$_POST['comentario'];
$cla=$_GET['clave'];
$usr=$_SESSION['nombreUsuario'];

include("conexion.php");

$sql="INSERT INTO comentarios(comentario, idUsuario, idActividad) VALUES ('$com','$usr', '$cla')";

mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");

mysqli_close($conexion);
header("location:verActividades.php?clave=$cla");
?>