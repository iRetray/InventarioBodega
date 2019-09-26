<?php  
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}

$usuarioAnterior = $_POST['usuario'];
$usuarioCambio = $_POST['usuarioNuevo'];
$claveCambio = $_POST['clave'];
$tipoCambio = $_POST['tipo'];

$_SESSION['usuarioCambio'] = $usuarioCambio;
$_SESSION['claveCambio'] = $claveCambio;
$_SESSION['tipoCambio'] = $tipoCambio;
$_SESSION['usuarioAnterior'] = $usuarioAnterior;

$consulta = "SELECT * FROM `usuarios` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$usuarioEncontrado = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuarioAnterior) {
		$usuarioEncontrado = true;
	}		
}

if($usuarioEncontrado == true){
	header("Location:actualizarUsuarioCorrecto.php");
}
else{
 	header("Location:actualizarUsuarioError.php");
}

?>