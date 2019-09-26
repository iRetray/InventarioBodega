<?php  
include('../../extPages/conexion.php');
session_start();
$nombre = $_SESSION['nombre'];
if($nombre==""){
	header("Location:../../extPages/sesion.php");
}

$usuarioCambio = $_POST['usuario'];
$claveCambio = $_POST['clave'];
$tipoCambio = $_POST['tipo'];

$_SESSION['usuarioCambio'] = $usuarioCambio;
$_SESSION['claveCambio'] = $claveCambio;
$_SESSION['tipoCambio'] = $tipoCambio;

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
	header("Location:crearUsuarioError.php");
}
else{
 	header("Location:crearUsuarioCorrecto.php");
}

?>