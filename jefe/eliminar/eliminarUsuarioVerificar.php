<?php
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}
$productoCambio = $_POST['producto'];

$_SESSION['productoCambio'] = $productoCambio;

$usuarioEncontrado = false;

$consulta = "SELECT * FROM `bodegaprincipal` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$productoCambio) {
		$usuarioEncontrado = true;
	}
}

$consulta = "SELECT * FROM `bodegamuebles` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$productoCambio) {
		$usuarioEncontrado = true;
	}
}

$consulta = "SELECT * FROM `bodegatalleres` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$productoCambio) {
		$usuarioEncontrado = true;
	}
}

if($usuarioEncontrado == true){
	header("Location:eliminarUsuarioCorrecto.php");
}
else{
 	header("Location:eliminarUsuarioError.php");
}

?>
