<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Registro de usuarios</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="css/registro.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-grid.css" >
		<link rel="stylesheet" href="css/bootstrap-grid.min.css" >
		<link rel="stylesheet" href="css/bootstrap-reboot.css" >
		<link rel="stylesheet" href="css/bootstrap-reboot.min.css" >
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/estilos.css">
</head>

<body class="rgba-primary-4">
	<h2>Registro de usuarios</h2>
	<p>
		Para registrar un usuario completa el formulario con los datos que se solicitan y al finalizar presiona el boton de "enviar"
	</p>
	
	<form action="alta_registro.php" method="post">
		<div class="rgba-primary-3">
		Nombre:<br/>
		<input type="text" name="nombre"><br/>
		</div>
		<div>Apellido paterno:<br/>
		<input type="text" name="apellidoPaterno"><br/>
		</div>
		<div>
		Apellido materno:<br/>
		<input type="text" name="apellidoMaterno"><br/>
		</div>
		<div>
		Telefono:<br/>
		<input type="tel" name="telefono"><br/>
		</div>
		<div>
		Correo:<br/>
		<input type="email" name="correo"><br/>
		</div>
		<div>Usuario:<br/>
		<input type="text" name="usuario"><br/>
		</div>
		<div>Contraseña:<br/>
		<input type="password" name="password" autocomplete="off"><br/>
		</div>
		<div>
		<input type="submit" value="Enviar">
		</div>
	</form>

    <div>
    </div>

    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fes-la.facebook.com%2Ffca.unam.mx%2F&width=400&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="400" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    <footer>
          <div class="container-fluid espacio creditos">
 		 	 <a class="ligacreditos" href="contacto.php">Contacto</a>
               <a class="ligacreditos" href="creditos.php">Creditos</a>
               <a class="ligacreditos" href="consulta.php">Consulta</a>
               </div>
            
</footer>
</body>

</html>
