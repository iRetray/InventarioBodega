<?php
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}
$productoCambio = $_SESSION['productoCambio'];

$consulta = "DELETE FROM bodegaprincipal WHERE producto = '$productoCambio'";
if (mysqli_query($conexion, $consulta)) {

} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}

$consulta = "DELETE FROM bodegatalleres WHERE producto = '$productoCambio'";
if (mysqli_query($conexion, $consulta)) {

} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
$consulta = "DELETE FROM bodegamuebles WHERE producto = '$productoCambio'";
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
	<title>Eliminacion correcta</title>
</head>
<body class="errorFondo">
<table class="errorHead" align="center">
	<tr class="error1" align="center">
		<td>
			<img src="../../resources/sale.jpgs" class="imgErrorA">
		</td>
		<td class="padding1">
			<p class="textoErrorG">Producto eliminado correctamente</p> <br>
			<p class="textoErrorPequeño" align="center">El producto ha sido eliminado correctamente. </p>
			<p class="textoErrorPequeño" align="center"><a href="../homeJefe.php">Volver al inicio.</a></p>
		</td>
	</tr>
</table>
</body>
</html>

<!-- Codigo terminado -->
