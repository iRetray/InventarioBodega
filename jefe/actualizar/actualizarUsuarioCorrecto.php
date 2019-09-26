<?php
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}
$productoAntiguo = $_SESSION['productoAntiguo'];
$productoNuevo = $_SESSION['productoNuevo'];
$precio = $_SESSION['precio'];
$tipoAntiguo = $_SESSION['tipoAntiguo'];
$tipoNuevo = $_SESSION['tipoNuevo'];


if ($tipoAntiguo == "principal") {
	$consulta = "DELETE FROM bodegaprincipal WHERE producto = '$productoAntiguo'";
}
if ($tipoAntiguo == "talleres") {
	$consulta = "DELETE FROM bodegatalleres WHERE producto = '$productoAntiguo'";
}
if ($tipoAntiguo == "muebles") {
	$consulta = "DELETE FROM bodegamuebles WHERE producto = '$productoAntiguo'";
}

if (mysqli_query($conexion, $consulta)) {

} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}

if ($tipoNuevo == "principal") {
	$consulta = "INSERT INTO `bodegaprincipal` (`producto`, `valor`, `cantidad`) VALUES ('$productoNuevo','$precio','1')";
}
if ($tipoNuevo == "talleres") {
	$consulta = "INSERT INTO `bodegatalleres` (`producto`, `valor`, `cantidad`) VALUES ('$productoNuevo','$precio','1')";;
}
if ($tipoNuevo == "muebles") {
	$consulta = "INSERT INTO `bodegamuebles` (`producto`, `valor`, `cantidad`) VALUES ('$productoNuevo','$precio','1')";
}

if (mysqli_query($conexion, $consulta)) {

} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<title>Actualizacion correcta</title>
</head>
<body class="errorFondo">
<table class="errorHead" align="center">
	<tr class="error1" align="center">
		<td>
			<img src="../../resources/productos.png" class="imgErrorA">
		</td>
		<td class="padding1">
			<p class="textoErrorG">Producto actualizado correctamente</p> <br>
			<p class="textoErrorPequeño" align="center">El producto ha sido actualizado correctamente. </p>
			<p class="textoErrorPequeño" align="center"><a href="../homeJefe.php">Volver al inicio.</a></p>
		</td>
	</tr>
</table>
</body>
</html>

<!-- Codigo terminado -->
