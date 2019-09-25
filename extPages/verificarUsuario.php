<?php
include('conexion.php');

$usuario = $_POST['usuario'];
$clave= $_POST['pass'];

$consulta = "SELECT * FROM `usuarios` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$tipoUsuario = "";
$nombre = "";
$usuarioEncontrado = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuario) {
		if ($columna['clave']==$clave) {
			$tipoUsuario = $columna['tipoUsuario'];
			$nombre = $columna['nombre'];
			$usuarioEncontrado = true;
			}
		}
}

session_start();
$_SESSION['nombre'] = $nombre;
$_SESSION['usuario'] = $usuario;
$_SESSION['tipoUsuario'] = $tipoUsuario;

if ($usuarioEncontrado) {
	switch ($tipoUsuario) {
		case 1:
			header("Location:../admin/homeAdmin.php");
			break;
		case 2:
			header("Location:../jefe/homeJefe.php");
			break;
		case 3:
			header("Location:../almacen/homeAlmacen.php");
			break;
	
		default:
			header("Location:errorLogin.php");
			break;
	}
} else {
	header("Location:errorLogin.php");
}
?>