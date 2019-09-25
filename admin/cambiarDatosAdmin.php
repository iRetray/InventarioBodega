<?php  
include('../extPages/conexion.php');

session_start();
if($_SESSION['usuario']==""){
	header("Location:../extPages/sesion.php");
}
$usuarioAnterior = $_SESSION['usuario'];

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];

$consulta = "UPDATE usuarios SET usuario='$usuario', `nombre`='$nombre', `clave`='$pass' WHERE usuario='$usuarioAnterior'";
if (mysqli_query($conexion, $consulta)) {

} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}

session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet"> 
	<title>Cambio Correcto</title>
</head>
<body class="errorFondo">
<table class="errorHead" align="center">
	<tr class="error1" align="center">
		<td>
			<img src="../resources/cambio.jpg" class="imgError">
		</td>
		<td>
			<p class="textoErrorG">Cambio aplicado en el sistema</p> <br>
			<p class="textoErrorP">Ahora intenta <a href="../index.html">iniciar sesión</a> con tus nuevos datos.</p>
		</td>
	</tr>
</table>
</body>
</html>