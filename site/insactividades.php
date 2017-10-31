<?php 
// Recuperamos datos del formulario
$tit=$_POST['tituloActividad'];
$obj=$_POST['objetivos'];
$des=$_POST['descripcion'];

include("conexion.php");

$sql="INSERT INTO actividades(titulo, objetivos, actividad, imagen) VALUES ('$tit','$obj', '$des', 'images/page-1_img3.jpg')";

mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");

$siguiente = mysqli_insert_id($conexion);

$sql1 = "SELECT * FROM categorias";
  $registros=mysqli_query($conexion, $sql1);
  while($linea=mysqli_fetch_array($registros)){
	$idCat=$_POST[$linea['idCategoria']];
  	if($idCat){
  		$sql2="INSERT INTO actividad_categoria(idActividad,idCategoria) values($siguiente,$linea[idCategoria])";
		mysqli_query($conexion, $sql2) or die("Error en la consulta de insercion $sql2");	
	}
  }

mysqli_close($conexion);
header("location:subirActividad.php");
?>