<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"  href="css/Nav.css">
		<link rel="stylesheet" type="text/css" href="css/Inisesion.css">
		<link rel="stylesheet" href="css/footer.css">
		
		<title>Inicio de Sesion</title>
	</head>
	<?php
	include "Clases/Navegador.php";
	?>
</head>
<body>
	<div><img src="img/Icono.svg"  width="10.6%" height="auto" style="float: left;"></div>
	<div>
		<br>
		<br>
		<h1 style="color: black;">Inicio de sesion</h1>
		<br>
		<br>
		<br>
		<br>
	</div>
	<div class="container-all">
		
		<div class="ctn-form">
			<img src="img/image2s.png" width="100%" height="auto" class="logo" alt="">
			<h1 style="text-align: center;">Iniciar Sesion</h1>
			<form action="">
				
				
				<label>Email</label>
				<input type="email" id="mail" name="email" required>
				<label>Contraseña</label>
				<input type="password" name="password" required>
				<input type="submit" name="iniciar">
			</form>
			
			
			<span class="text-footer">Aun no te has registrado?<a href="registro.php">Registrate</a><br><a href="registro.php">Olvidaste tu contraseña?</a></span>
			
		</div>
		<div class="ctn-text">
			
			<div class="capa"></div>
			<h1 class="text-description"></h1><br>
			<p class="text-description"></p>
		</div>
	</div>
	<div>
		<?php
			
			include "Clases/footer.php";
		?>
	</div>
</body>
</html>