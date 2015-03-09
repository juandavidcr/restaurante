
<?php
$link = mysql_connect('localhost','root','')
        or die('No se pudo conectar' .mysql_error());
    echo 'Conexion exitosa';    
 mysql_select_db('restaurante') or die('No se pudo acceder');
 
 
?>
