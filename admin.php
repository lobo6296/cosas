<?php
session_start();
	include "conexion.php";
	if(isset($_SESSION['Usuario'])){

	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
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
	<section>
	<nav class="menu2">
	  <menu>
	    <li class="cosa"><a href="./">Home</a></li>
	    <li class="cosa"><a href="# ">Admin</a></li>
	    <li class="cosa"><a href="./admin/agregarproducto.php">Categoria</a></li>
	    <li class="cosa"><a href="./adminAnuncios/agregarproducto.php">Negocio</a></li>
	    <li class="cosa"><a href="./login/cerrar.php">Salir</a></li>
	  </menu>
	</nav>

	<center><h1>Últimas Compras</h1></center>
	<table border="0px" width="100%">	
		<tr>
			<td>Imagen</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
		</tr>	

		
	</table>
	</section>
</body>
</html>