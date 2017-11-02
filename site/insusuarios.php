<?php 
// Recuperamos datos del formulario
$nUsu=$_POST['nombreUsuario'];
$nApe=$_POST['nombreApellidos'];
$cor=$_POST['correoElectronico'];
$pas=$_POST['password'];
$fNac=$_POST['fecNac'];

include("conexion.php");

$sql="SELECT *
	from usuarios
	where usuario=\"$nUsu\"";

$registros=mysqli_query($conexion, $sql);
$total=mysqli_num_rows($registros);

if($total==0){
	$sql1="INSERT INTO usuarios(usuario, nombre, correo, fecNac, password) VALUES ('$nUsu', '$nApe', '$cor', '$fNac', '$pas')";
	mysqli_query($conexion, $sql1) or die("Error en la consulta de insercion $sql1");
	mysqli_close($conexion);
	header("location:miCuenta.php");
}else{
	echo "<h2>EL USUARIO YA EXISTE</h2> Pulse <a href='miCuenta.php'>aqui</a> para continuar.";
}
?>