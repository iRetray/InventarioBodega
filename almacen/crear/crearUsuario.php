<?php
session_start();
$nombre = $_SESSION['nombre'];
$usuario = $_SESSION['usuario'];
$tipoUsuario = "";
switch ($_SESSION['tipoUsuario']) {
	case 1:
		$tipoUsuario = "Administrador";
		break;
	case 2:
		$tipoUsuario = "Jefe de inventario";
		break;
	case 3:
		$tipoUsuario = "Almacenista";
		break;
}
if($nombre==""){
	header("Location:../extPages/sesion.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<title>Crear usuario</title>
</head>
<body>
<section class="section" align="center">
	<table class="tablaCrear" align="center">
		<tr class="fila1" align="center">
			<td class="columna1">
				<p class="textosGrandes">Crear nuevo usuario</p>
				<p class="textoNormal">Completa los campos para crear un nuevo usuario:</p>
			</td>
		</tr>
		<form action="crearUsuarioVerificar.php" method="post" id="form1">
		<tr class="fila1">
			<td class="columna1" align="center">
				<input type="text" name="usuario" id="usuario" placeholder="Usuario del empleado" class="cajasRegistro" required="true">
				<input type="text" name="clave" id="clave" placeholder="Clave del empleado" class="cajasRegistro" required="true">
			</td>		
		</tr>
		<tr class="fila1" >
			<td class="columna1" align="center">
				<select name="tipo" class="cajasRegistro3" form="form1">
					<option value="jefe" class="cajasRegistro">Jefe de inventario</option>
					<option value="almacen" class="cajasRegistro">Almacenista</option>
				</select>
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
			<td class="columna1" align="center">
				<input type="submit" value="Crear usuario" class="cajasRegistro22" required="true">
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