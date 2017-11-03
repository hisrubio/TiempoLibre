<?php
session_start();
//recuperar datos del formulario
$usr=$_POST['usuario'];
$psw=$_POST['contraseña'];

include("conexion.php");

//localizar el usuario en la tabla usuarios
$sql="SELECT *
	from usuarios
	where usuario=\"$usr\"";

$registros=mysqli_query($conexion, $sql);
$total=mysqli_num_rows($registros);

if($total==0){
		echo "<h2>USUARIO NO EXISTE</h2> Pulse <a href='index.php'>aqui</a> para continuar.";
	}else{
		while ($linea=mysqli_fetch_array($registros)) {
			if($linea['password']==$psw){
				//variables de sesion, el valor perdura mientras el usuario navega y hay que poner al principio session_start();
				$_SESSION['nombreUsuario']=$linea['usuario']; 
				
				header("location:index2.php");
			}else{
				echo "<h2>CLAVE INCORRECTA</h2> Pulse <a href='index.php'>aqui</a> para continuar.";
			}
		}
	}
?>