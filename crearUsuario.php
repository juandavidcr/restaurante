<?php
include_once('ctrl/conexion.php');
$tipo = $_POST['tipo'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $tipo;
echo $email;
echo $password;
mysql_query("INSERT INTO `usuarios` ( `email`, `password`,  `tipoUsuario`,`estado`) VALUES('$email',  '$password', '$tipo',1)");
$rs = mysql_query("SELECT @@identity AS id");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
$_SESSION['id']=$id;
}

header('Location: index.php');

?>