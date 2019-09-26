<?php  
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];

$_SESSION['producto'] = $producto;
$_SESSION['cantidad'] = $cantidad;

$usuarioEncontrado = false;

$consulta = "SELECT * FROM `bodegaprincipal` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$producto) {
		$usuarioEncontrado = true;
		$tipoAntiguo = "principal";
	}
}

$consulta = "SELECT * FROM `bodegamuebles` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$producto) {
		$usuarioEncontrado = true;
		$tipoAntiguo = "muebles";
	}
}

$consulta = "SELECT * FROM `bodegatalleres` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['producto']==$producto) {
		$usuarioEncontrado = true;
		$tipoAntiguo = "talleres";
	}
}

$_SESSION['tipoAntiguo'] = $tipoAntiguo;

if($usuarioEncontrado == true){
	header("Location:eliminarUsuarioCorrecto.php");
}
else{
 	header("Location:eliminarUsuarioError.php");
}

?>