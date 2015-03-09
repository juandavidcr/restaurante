<?php
 session_start();
 if (!isset($_SESSION['enLinea'])) {
 	# code...
 	header('Location: ../index.php');

 }
 echo $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>POSFF</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="../vista/css/estilo.css">
<link href="../vista/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
</script>
<link rel="stylesheet" href="../vista/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<header> 
   <img class="logo" src="../images/logo.png"> 
   <nav class="nav navbar-nav">
  
    <a class="active list-group-item" href="../vista/index.php"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
    <a class="list-group-item" href="#comanda"><i class="fa fa-pencil fa-fw"></i>&nbsp; Comandas</a>
    <a class="list-group-item" href="#entrega"><i class="fa fa-book fa-fw"></i>&nbsp; Datos de entrega</a>
    <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Configuraciones</a>
  
</nav>
 </header>
 <section  class="col-md-12">
   <h3>Aqui crearemos la orden</h3>
   <button class="btn btn-default">
     <a name="comanda">Restaurantes Disponibles</a>
   </button>
 </section>
 <section class="col-md-12">
 <a name="entrega">Por favor danos tus datos</a>
   <p class="row">
    <fieldset class="form" >
      <form class="formulario" action="insertaDatos.php" method="post">
      <input type="text" name="nombreCompleto" placeholder="Ingresa tu nombre completo"><br>
      <input type="text" name="telefono" placeholder="Ingresa tu telefono"><br>
      <input type="text" name="direccion" placeholder="calle num,col,Delg,cp"><br>
      <input type="submit"/>
      <input type="reset" />
      </form>
    </fieldset>
  </p>
 </section> 
<footer>
<aside class="col-md-8">
<ul class="nav navbar-nav brand">
     <li><a class="active btn btn-default" href="../vista/index.php">Inicio</a></li>
     <li><a class="btn btn-default" href="../politicas.php">Politicas de uso</a></li>
     <li><a class="btn btn-default" href="../documentacion.php">Documentación</a></li>
     <li><a class="btn btn-default" href="../acerca.php">Acerca de </a></li>
</ul>
	<a class="btn btn-warning" href="../logout.php">Salir</a>
</aside>
</footer>
</div>
</body>
</html>
