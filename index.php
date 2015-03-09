<!DOCTYPE html>
<html>
<head>
<title>POSFF</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="vista/css/estilo.css">
<link href="vista/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
</script>
<link rel="stylesheet" href="vista/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<header class="modal-header col-md-12"> 
  <img class="img-responsive thumbnails logo" src="images/logo.png"> 	
</header><br>
<ul class="nav navbar-nav brand">
     <li><a class="active btn btn-default" href="index.php">Inicio</a></li>
     <li><a class="btn btn-default" href="politicas.php">Politicas de uso</a></li>
     <li><a class="btn btn-default" href="documentacion.php">Documentación</a></li>
     <li><a class="btn btn-default" href="acerca.php">Acerca de </a></li>
     <li></li>
    </ul>
<aside class="colorOrange col-md-12">

<h2>Bienvenido a CafefoodExpress</h2>
	 <section class="contenedorPersonalizado" >
	  <h1>Log In</h1><br>
	     <fieldset class="form">
	     <form class="" action="ctrl/validaUsuario.php" method="POST">
	       <i class="fa fa-user"></i><input type="email" name="email" placeholder="Escribe tu email" autofocus/><br>
	       <i class="fa fa-key"></i><input type="password" name="password" placeholder="Escribe tu password"/><br>
	       <input type="submit" class="btn btn-warning" />
	       <input type="reset" class="btn btn-warning"/>
	     </form>
	     </fieldset> 	
	  </section>
</aside>
  <span class="col-md-6">
 	Ingresa tu usuario y contraseña para entrar a la aplicación... 
   ¡Esta es la Herramienta para restaurante!
 </span>
<footer class="pie">
<a class="btn btn-default" href="registro.php"><b>Registrarse *</b></a>
  

</footer> 
</div>
</body>
</html>