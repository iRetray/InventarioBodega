<?php
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}

$productoAntiguo = $_POST['productoAntiguo'];
$productoNuevo = $_POST['productoNuevo'];
$precio = $_POST['precio'];
$tipoNuevo = $_POST['tipo'];

$tipoAntiguo="";

$_SESSION['productoAntiguo'] = $productoAntiguo;
$_SESSION['productoNuevo'] = $productoNuevo;
$_SESSION['precio'] = $precio;
$_SESSION['tipoNuevo'] = $tipoNuevo;

$usuarioEncontrado = false;

$consulta = "SELECT * FROM `bodegaprincipal` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$productoAntiguo) {
		$usuarioEncontrado = true;
		$tipoAntiguo = "principal";
	}
}

$consulta = "SELECT * FROM `bodegamuebles` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$productoAntiguo) {
		$usuarioEncontrado = true;
		$tipoAntiguo = "muebles";
	}
}

$consulta = "SELECT * FROM `bodegatalleres` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$productoAntiguo) {
		$usuarioEncontrado = true;
		$tipoAntiguo = "talleres";
	}
}

$_SESSION['tipoAntiguo'] = $tipoAntiguo;

if($usuarioEncontrado == true){
	header("Location:actualizarUsuarioCorrecto.php");
}
else{
 	header("Location:actualizarUsuarioError.php");
}

?>
