<?php
  include_once('conexion.php');
  $idUsuario = mysql_insert_id();
  $nombreCompleto = $_POST['nombreCompleto'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];
  echo "<h1>Eres Comensal</h1>";
  $result = mysql_query("INSERT INTO `comensales`(idUsuario,nombreCompleto,telefono,direccion) VALUES('$idUsuario',  '$nombreCompleto', '$telefono','$direccion')");
  
?>