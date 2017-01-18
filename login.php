<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<div class="logo left">
			<img src="./imagenes/cresisco.jpg" alt="Puls4" />
		</div>
		<div class="titular">
			<h1 class="titulo">
				Portafolio
			</h1>
			
		</div>
		
	</header>
	<form id="formulario" method="post" action="./login/verificar.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
		<label for="usuario">Usuario</label><br>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>
		<label for="password">Password</label><br>
		<input type="password" id="password" name="Password" placeholder="password" ><br>
		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</section>
</body>
</html>