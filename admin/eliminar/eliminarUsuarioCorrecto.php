<?php  
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}
$usuarioCambio = $_SESSION['usuarioCambio'];

$consulta = "DELETE FROM usuarios WHERE usuario = '$usuarioCambio'";
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
			<img src="../../resources/usuarioB.png" class="imgErrorA">
		</td>
		<td class="padding1">
			<p class="textoErrorG">Usuario eliminado correctamente</p> <br>
			<p class="textoErrorPequeño" align="center">El usuario ha sido eliminado correctamente. </p>
			<p class="textoErrorPequeño" align="center"><a href="../homeAdmin.php">Volver al inicio.</a></p>
		</td>
	</tr>
</table>
</body>
</html>

<!-- Codigo terminado -->