<?php
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}
$productoCambio = $_SESSION['productoCambio'];
$precioCambio = $_SESSION['precioCambio'];
$tipoCambio = $_SESSION['tipoCambio'];

$tipoUsuario = "";
if ($tipoCambio == "principal") {
	$tipoUsuario = 1;
	$consulta = "INSERT INTO `bodegaprincipal` (`producto`, `valor`, `cantidad`) VALUES ('$productoCambio','$precioCambio','1')";
}
if ($tipoCambio == "talleres") {
	$tipoUsuario = 2;
	$consulta = "INSERT INTO `bodegatalleres` (`producto`, `valor`, `cantidad`) VALUES ('$productoCambio','$precioCambio','1')";
}
if ($tipoCambio == "muebles") {
	$tipoUsuario = 3;
	$consulta = "INSERT INTO `bodegamuebles` (`producto`, `valor`, `cantidad`) VALUES ('$productoCambio','$precioCambio','1')";
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
	<title>Creacion correcta</title>
</head>
<body class="errorFondo">
<table class="errorHead" align="center">
	<tr class="error1" align="center">
		<td>
			<img src="../../resources/caja.png" class="imgErrorA">
		</td>
		<td class="padding1">
			<p class="textoErrorG">Producto creado correctamente</p> <br>
			<p class="textoErrorPequeño" align="center">El producto ha sido agregado correctamente. </p>
			<p class="textoErrorPequeño" align="center"><a href="../homeJefe.php">Volver al inicio.</a></p>
		</td>
	</tr>
</table>
</body>
</html>

<!-- Codigo terminado -->
