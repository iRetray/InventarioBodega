<?php
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}

$productoCambio = $_POST['producto'];
$precioCambio = $_POST['precio'];
$tipoCambio = $_POST['tipo'];

$_SESSION['productoCambio'] = $productoCambio;
$_SESSION['precioCambio'] = $precioCambio;
$_SESSION['tipoCambio'] = $tipoCambio;

$consulta = "SELECT * FROM `bodegamuebles` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$usuarioEncontrado = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$productoCambio) {
		$usuarioEncontrado = true;
	}
}

$consulta = "SELECT * FROM `bodegatalleres` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$usuarioEncontrado = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$productoCambio) {
		$usuarioEncontrado = true;
	}
}

$consulta = "SELECT * FROM `bodegaprincipal` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$usuarioEncontrado = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$productoCambio) {
		$usuarioEncontrado = true;
	}
}

if($usuarioEncontrado == true){
	header("Location:crearUsuarioError.php");
}
else{
 	header("Location:crearUsuarioCorrecto.php");
}

?>
