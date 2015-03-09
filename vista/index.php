<?php
 session_start();
 if (!isset($_SESSION['enLinea'])) {
 	# code...
 	header('Location: ../index.php');

 }
 
 echo $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
<title>POSFF</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="css/estilo.css">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
</script>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="container">
 <header class="modal-header col-md-12"> 
  <img class="logo" src="../images/logomini.png"> 
 </header>
 <section class="contenedorPersonalizado">
 <p>
   Configura tus datos 
 </p>
 <article>
  <p class="col-md-12">
   <h3>Selecciona tu rol</h3>
 	<button class="btn btn-default">
 		<a href="../ctrl/crearComensal.php">Comensal</a>
 	</button>
 	<button class="btn btn-default">
 		<a href="#">Restaurante</a>
 	</button>
 </p>	
 </article>	
 </section>
 
<footer>
<aside class="col-md-4">
	<a class="btn btn-warning" href="../logout.php">Salir</a>
</aside>
</footer>
</div>
</body>
</html>
