<?php 
// Recuperamos datos del formulario
$tit=$_POST['tituloActividad'];
$cat=$_POST['categorias'];
$obj=$_POST['objetivos'];
$des=$_POST['descripcion'];
// conectamos con la BD
include("conexion.php");
// creamos consulta
$sql="INSERT INTO actividades(titulo, objetivos, actividad, imagen) VALUES ('$tit','$obj', '$des', 'images/page-1_img3.jpg')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:subirActividad.php");
?>