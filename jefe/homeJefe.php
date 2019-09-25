<?php  
echo "Usuario1";
?>

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
	<title>Administrador</title>
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
							<p class="textosGrandes">Administrador del sistema</p>
							<img src="../resources/admin.png" class="imgAdmin">
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
							<form action="crear/crearUsuario.php" method="post">
									<input type="image" src="../resources/add.png" width="100px" align="center" class="imgTop">

									<p class="textoOscuro" align="center">Crear usuario</p>
							</form>
							</div>
						</td>
						<td class="columna22b">
							<p class="textoNormal1">Crea un nuevo usuario para que sea parte de tu empresa, puedes clasificarlo segun su trabajo en jefe de inventario o almacenista.</p>
						</td>
					</tr>

					<tr class="fila1">
							<td class="columna22">
							<div align="center">
							<form action="eliminarUsuario.php" method="post">
									<input type="image" src="../resources/borrar.png" width="100px" align="center" class="imgTop">

									<p class="textoOscuro" align="center">Eliminar usuario</p>
							</form>
						</div>
						</td>
						<td class="columna22b">
							<p class="textoNormal1">Elimina alguno de tus trabajadores existentes, recuerda que una vez borrado no se podra recuperar.</p>
						</td>
					</tr>
					<tr class="fila1">
						<td class="columna22">
							<div align="center">
							<form action="actualizarUsuario.php" method="post">
									<input type="image" src="../resources/update.png" width="100px" align="center" class="imgTop">
	
									<p class="textoOscuro" align="center">Actualizar usuario</p>
							</form>
						</div>
						</td>
						<td class="columna22b">
							<p class="textoNormal1">Actualiza los datos de un trabajador existente, como sus datos de entrada al sistema (usuario y contraseña).</p>
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
