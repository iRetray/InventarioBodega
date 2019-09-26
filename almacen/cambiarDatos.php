<?php  
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../extPages/sesion.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<title>Cambio de datos</title>
</head>
<body>
<section class="section" align="center">
	<table class="tabla1" align="center">
		<tr class="fila1">
			<td class="columna1">
				<p class="textosGrandes">Cambio de datos</p>
				<p class="textoNormal">Completa los campos con los datos que quieras cambiar, si no quieres cambiar alguno, escribe su valor anterior.</p>
			</td>
		</tr>
		<form action="cambiarDatosAdmin.php" method="post">
		<tr class="fila1">
			<td class="columna1">
				<input type="text" name="nombre" id="nombre" placeholder="Tu nombre" class="cajasRegistro" required="true">
			</td>
		</tr>
		<tr class="fila1">
			<td class="columna1">
				<input type="text" name="usuario" id="usuario" placeholder="Tu usuario" class="cajasRegistro" required="true">
			</td>
		</tr>
		<tr class="fila1">
			<td class="columna1">
				<input type="password" name="pass" id="pass" placeholder="Tu clave" class="cajasRegistro" required="true">
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr class="fila1">
			<td class="columna1">
				<input type="submit" value="Cambiar mis datos" class="cajasRegistro2" required="true">
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		</form>
	</table>
</section>
</body>
</html>