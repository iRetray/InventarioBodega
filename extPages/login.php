<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<title>Registro</title>
</head>
<body>
<section class="section" align="center">
	<table class="tabla1" align="center">
		<tr class="fila1">
			<td class="columna1">
				<p class="textosGrandes">Bienvenido</p>
				<p class="textoNormal">
					<?php  
						echo "";
					?>
				</p>
			</td>
		</tr>
		<form action="registro.php" method="post">
		<tr class="fila1">
			<td class="columna1">
				<input type="text" name="name" id="name" placeholder="Tu nombre" class="cajasRegistro" required="true">
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
		<tr class="fila1">
			<td>
				<table class="tabla2" align="center">
					<tr class="columna1">
						<td class="fila2">
							<input type="radio" name="cargo" value="admin"><p class="textoNormal">Administrador</p>
						</td>
						<td class="fila2">
							<input type="radio" name="cargo" value="invent"><p class="textoNormal">Jefe de Inventario</p>
						</td>
						<td class="fila2">
							<input type="radio" name="cargo" value="almacen"><p class="textoNormal">Almacenista</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr class="fila1">
			<td class="columna1">
				<input type="submit" value="Registrarse" placeholder="Tu clave" class="cajasRegistro2" required="true">
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