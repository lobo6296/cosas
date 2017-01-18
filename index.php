<?php include 'conexion.php'; 
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" 
		content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Portafolio</title>
	<link rel="stylesheet" href="Css/portafolio.css" />
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="./iconSocial/style.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
	<link rel="stylesheet" href="flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="js/jquery.flexslider.js"></script>
	
	<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
    	touch: true,
    	pauseOnAction: false,
    	pauseOnHover: false,
    });
  });
</script>
</head>
<body>
	<header>
		<div class="logo">
			<img src="Imagenes/logo.png" alt="Portafolio" />
		</div>
		<div class="titular">
			<h1 class="titulo">			
Catalogo de las Mejores empresa en el Departamento de Escuintla
			</h1>
			<div>
				<a href="//cresisco.com" class="filtro">
					Cresisco.com
				</a>
			</div>
		</div>
		<div class="usuario">
			<figure class="avatar">
				<img src="Imagenes/cresisco.jpg" alt="cresisco">
			</figure>
		</div>
	</header>
	
	<div class="social">
		<ul class="redes">
			<li class="redes"><a href="https://www.facebook.com/cresisco/?fref=ts" target="_blank" class="icon-facebook"></a></li>
			<li class="redes"><a href="https://www.facebook.com/cresisco/?fref=ts" target="_blank" class="icon-twitter"></a></li>
			<li class="redes"><a href="https://www.facebook.com/cresisco/?fref=ts" target="_blank" class="icon-google-plus"></a></li>
			<li class="redes"><a href="https://www.facebook.com/cresisco/?fref=ts" target="_blank" class="icon-youtube"></a></li>
			<li class="redes"><a href="https://www.facebook.com/cresisco/?fref=ts" class="icon-instagram"></a></li>
		</ul>
	</div>
	<nav>
		<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Servicios</a></li>
			<li><a href="#">Nosotros</a></li>
			<li><a href="#">Contactanos</a></li>
		</ul>
	</nav>
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="Imagenes/1.jpg" alt="">
			</li>
			<li>
				<img src="Imagenes/2.jpg" alt="">
			</li>
			<li>
				<img src="Imagenes/3.jpg" alt="">
			</li>
		</ul>
	</div>
	<section class="posts">
		<article class="post">
			<!-- <div class="descripcion">
				<div class="imagen">
					<img src="Categoria/928497_colegio.jpg">
				</div>
				<div class="detalles">
					<h2 class="titulo">
						Farmacias
					</h2>
				</div>
			</div> -->
			<?php
		$re=mysql_query("select * from negocio Where estado = 'A'")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			<div class="producto">
				<center>
					<span><?php echo $f['negocio'];?></span><br>
					<img src="Categoria/<?php echo $f['imagen'];?>"><br>
					<a href="./detalle.php?id=<?php  echo $f['idnegocio'];?>&negocio=<?php  echo $f['negocio'];?>">ver</a>
				</center>
			</div>
			<?php
		}
	?>
		</article>
	</section>
	<footer>
		<h3 class="powered">
			<strong>
				Portafolio Empresarial
			</strong>
			<span class="mejor">
				Cresisco Mejorando el Futuro
			</span>
		</h3>
	</footer>
</body>
</html>