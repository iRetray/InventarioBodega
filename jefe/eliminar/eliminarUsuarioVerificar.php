<?php  
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}
$usuarioCambio = $_POST['usuario'];

$_SESSION['usuarioCambio'] = $usuarioCambio;

$consulta = "SELECT * FROM `usuarios` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$usuarioEncontrado = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuarioCambio) {
		$usuarioEncontrado = true;
	}		
}

if($usuarioEncontrado == true){
	header("Location:eliminarUsuarioCorrecto.php");
}
else{
 	header("Location:eliminarUsuarioError.php");
}

?>