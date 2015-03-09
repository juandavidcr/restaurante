<?php
include('header.php');
?>
<body>
<div class="container">
<header class="modal-header col-md-12">
  <img class="img-responsive logo" src="images/logomini.png">
  <ul class="nav navbar-nav brand">
     <li><a class="btn btn-default" href="index.php">Inicio</a></li>
     <li><a class="btn btn-default" href="politicas.php">Politicas de uso</a></li>
     <li><a class="btn btn-default" href="documentacion.php">Documentación</a></li>
     <li><a class="btn btn-default" href="acerca.php">Acerca de </a></li>
     <li><a class="btn btn-warning" href="#">Dashboard</a> </li>
    </ul>
</header><br>

<aside class="colorOrange col-md-12">
<section class="contenedorPersonalizado">
<span class="col-md-8">
 <form  class="form-group"action="crearUsuario.php" method="post">
 <label>
 	Selecciona tu rol
 </label><br>
 <select class="form-control" name="tipo">
   <option value="1">comensal</option>
   <option value="2">proveedor de alimentos y bebidas</option>
 </select>
 <label>
 	Ingresa tu correo electrónico
 </label> <br>
   <input type="mail" name="email" placeholder="@" required="yes"/><br>   
   <label> 
   	ingresa una contraseña
   </label><br>
   <input type="password" name="password" placeholder="Contraseña" required="yes"/>
   <br>
   <input type="submit" value="Enviar" />
   <input type="reset" value="Cancelar"/>
 </form>
</span>
</section>
</aside>
<footer class="pie">
   Notificanos algo!
  <i class="fa fa-envelope">  <a href="mailto:info@posff.com">Contacto</a></i>
</footer>
</div>
</body>
</html>
