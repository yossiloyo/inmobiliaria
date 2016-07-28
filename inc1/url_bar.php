<?php

if($_SESSION["tipo_operacion"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `tipo_operacion` WHERE `id_tipo_operacion` = ".$_SESSION['tipo_operacion_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['tipo_operacion']."&idp=0&iddep=0&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".ucfirst(strtolower($row_inmueble_des[1]))."</a>";
}

if($_SESSION["idp"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `pais` WHERE `idp` = ".$_SESSION['idp_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['idp']."$url&iddep=0&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".ucfirst(strtolower($row_inmueble_des[1]))."</a>";
}

if($_SESSION["iddep"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `dep` WHERE `iddep` = ".$_SESSION['iddep_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	if($_SESSION["idp"] != "")
		$url .= $_SESSION["idp"];
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['iddep']."$url&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".ucfirst(strtolower($row_inmueble_des[2]))."</a>";
}

if($_SESSION["dep_iddep"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `distrito` WHERE `id_distritos` = ".$_SESSION['dep_iddep_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);	
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	if($_SESSION["idp"] != "")
		$url .= $_SESSION["idp"];
	if($_SESSION["iddep"] != "")
		$url .= $_SESSION["iddep"];
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['dep_iddep']."$url&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".ucfirst(strtolower($row_inmueble_des[2]))."</a>";
}

?>