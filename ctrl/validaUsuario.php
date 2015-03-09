<?php
session_start();

include_once("conexion.php");
$email = $_POST['email'];
$password = $_POST['password'];
echo $email;
echo $password;
$resultado = mysql_query("SELECT * FROM usuarios WHERE '$email'=email AND '$password'= password");
echo $resultado;
$numFilas = mysql_num_rows($resultado);
echo $numFilas;
if ($resultado){ 
$_SESSION['email']=$email;	
$_SESSION['enLinea']=TRUE;

	 if ($numFilas == 1) {
	 header('Location: ../vista/index.php'); 
	 //si exite
	
}	 
	else{
     header('Location: ../index.php');
    }
    die('Consulta no válida: ' . mysql_error());

}
if ($tipo==2) {
	# code...
	echo 'Escribe tus datos de Proveedor de alimentos y/o Bebidas';
    include('crearProveedor.php');	
}
else{
    echo ' Escribe tus datos de comensal y preferencias';
    include('crearComensal.php');
} 

?>
