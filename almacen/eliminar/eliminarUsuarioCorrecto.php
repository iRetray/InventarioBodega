<?php  
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}

$tipoAntiguo = $_SESSION['tipoAntiguo'];
$producto = $_SESSION['producto'];
$cantidad = $_SESSION['cantidad'];

if ($tipoAntiguo == "principal") {
	$consulta = "UPDATE bodegaprincipal SET cantidad='$cantidad' WHERE producto='$producto'";
}
if ($tipoAntiguo == "talleres") {
	$consulta = "UPDATE bodegatalleres SET cantidad='$cantidad' WHERE producto='$producto'";
}
if ($tipoAntiguo == "muebles") {
	$consulta = "UPDATE bodegamuebles SET cantidad='$cantidad' WHERE producto='$producto'";
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
	<title>Correcto</title>
</head>
<body class="errorFondo">
<table class="errorHead" align="center">
	<tr class="error1" align="center">
		<td>
			<img src="../../resources/lot.png" class="imgErrorA">
		</td>
		<td class="padding1">
			<p class="textoErrorG">Inventario actualizado correctamente</p> <br>
			<p class="textoErrorPequeño" align="center">La cantidad ha sido actualizada. </p>
			<p class="textoErrorPequeño" align="center"><a href="../homeAlmacen.php">Volver al inicio.</a></p>
		</td>
	</tr>
</table>
</body>
</html>

<!-- Codigo terminado -->