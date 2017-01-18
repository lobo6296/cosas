<?php
	$server="31.220.104.96";
	$username="	u139863517_prueb";
	$password="saque90";
	$db='	u139863517_porta';
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>