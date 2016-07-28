<?php
	include ("cadenas.php");
	$con=mysql_connect($server,$user,$psw) or die ("Error al conectar con MySQL");
	mysql_select_db($data,$con) or die ("La base de datos no exite");
?>