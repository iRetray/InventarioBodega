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
	default:
		# code...
		break;
}
if($nombre==""){
	header("Location:../extPages/sesion.php");
}
//Crea, elimina, actualiza usuarios
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<title>Almacenista</title>
</head>
<body>
<section class="section" align="center">
	<!-- Tabla General -->
	<table width="100%">
		<tr width="100%">
			<td width="30%">
				<!-- Izquierda -->
				<table class="tablaIzquierda" align="center">
					<tr class="fila1" align="center">
						<td class="columna1">
							<p class="textosGrandes">Almacenista</p>
							<img src="../resources/formulario.png" class="imgAdmin">
							<hr width="80%">
							<p><span class="textoOscuro">Nombre: </span><span class="textoMedio"><?php
								echo "$nombre";
							?></span></p>
							<p><span class="textoOscuro">Usuario: </span><span class="textoMedio"><?php
								echo "$usuario";
							?></span></p>
							<hr width="80%">
							<p class="textoNormal">¿Quieres cambiar tus credenciales? Haz clic <a href="cambiarDatos.php">aquí.</a></p>
							<p class="textoNormal"><a href="logout.php">Cerrar sesión</a></p>
						</td>
				</table>
			</td>
			<!-- Derecha -->
			<td width="65%" align="center">
				<table class="tablaDerecha" align="center">

					

					<tr class="fila1">
							<td class="columna22">
							<div align="center">
							<form action="eliminar/eliminarUsuario.php" method="post">
									<input type="image" src="../resources/caja.png" width="150px" align="center" class="imgTop">

									<p class="textoOscuro" align="center">Agregar elementos</p>
							</form>
						</div>
						</td>
						<td class="columna22b">
							<p class="textoNormal1">Agrega elementos al inventario, añadiendo unidades a productos existentes.</p>
						</td>
					</tr>
					
					
				</table>
			</td>
		</tr>
	</table>



</section>
</body>
</html>

<!-- Codigo terminado -->
