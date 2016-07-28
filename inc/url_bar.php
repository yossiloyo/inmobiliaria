<?php

if($_SESSION["tipo_operacion"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `tipo_operacion` WHERE `id_tipo_operacion` = ".$_SESSION['tipo_operacion_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['tipo_operacion']."&tipo_inmueble=0&idp=0&iddep=0&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))."</a>";
}

if($_SESSION["tipo_inmueble"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `tipo_inmueble` WHERE `id_tipo_inmueble` = ".$_SESSION['tipo_inmueble_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION["tipo_inmueble"]."$url&idp=0&iddep=0&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))."</a>";
}

if($_SESSION["idp"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `pais` WHERE `idp` = ".$_SESSION['idp_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	if($_SESSION["tipo_inmueble"] != "")
		$url .= $_SESSION["tipo_inmueble"];
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['idp']."$url&iddep=0&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))."</a>";
}

if($_SESSION["iddep"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `dep` WHERE `iddep` = ".$_SESSION['iddep_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	if($_SESSION["tipo_inmueble"] != "")
		$url .= $_SESSION["tipo_inmueble"];
	if($_SESSION["idp"] != "")
		$url .= $_SESSION["idp"];
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['iddep']."$url&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))."</a>";
}

if($_SESSION["dep_iddep"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `distrito` WHERE `id_distritos` = ".$_SESSION['dep_iddep_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);	
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	if($_SESSION["tipo_inmueble"] != "")
		$url .= $_SESSION["tipo_inmueble"];
	if($_SESSION["idp"] != "")
		$url .= $_SESSION["idp"];
	if($_SESSION["iddep"] != "")
		$url .= $_SESSION["iddep"];
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['dep_iddep']."$url&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))."</a>";
}


	/////////////////////////////////////////////////////   A G R E G A D O   P A R A     O F I C I N A S   Y   A G E N T E S   /////////////////////////////////////////////////////
if($_SESSION["cod_oficina"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `oficinas` WHERE `cod_oficina` = ".$_SESSION['cod_oficina_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);	
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	if($_SESSION["tipo_inmueble"] != "")
		$url .= $_SESSION["tipo_inmueble"];
	if($_SESSION["idp"] != "")
		$url .= $_SESSION["idp"];
	if($_SESSION["iddep"] != "")
		$url .= $_SESSION["iddep"];
		if($_SESSION["cod_oficina"] != "")
		$url .= $_SESSION["cod_oficina"];
	
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['cod_oficina']."$url&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))."</a>";
}


if($_SESSION["id_agente"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `agentes` WHERE `id_agente` = ".$_SESSION['id_agente_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);	
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	if($_SESSION["tipo_inmueble"] != "")
		$url .= $_SESSION["tipo_inmueble"];
	if($_SESSION["idp"] != "")
		$url .= $_SESSION["idp"];
	if($_SESSION["iddep"] != "")
		$url .= $_SESSION["iddep"];
		/*if($_SESSION["cod_oficina"] != "")
		$url .= $_SESSION["cod_oficina"];*/
	if($_SESSION["id_agente"] != "")
		$url .= $_SESSION["id_agente"];
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['id_agente']."$url&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))."</a>";
}





if($_SESSION["id_precio"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM precios WHERE `id_precio` = ".$_SESSION['id_precio_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);	
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	if($_SESSION["tipo_inmueble"] != "")
		$url .= $_SESSION["tipo_inmueble"];
	if($_SESSION["idp"] != "")
		$url .= $_SESSION["idp"];
	if($_SESSION["iddep"] != "")
		$url .= $_SESSION["iddep"];
		if($_SESSION["cod_oficina"] != "")
		$url .= $_SESSION["cod_oficina"];
	if($_SESSION["id_agente"] != "")
		$url .= $_SESSION["id_agente"];

	if($_SESSION["id_precio"] != "")
		$url .= $_SESSION["id_precio"];
	
	echo " <font color='#9B9B9B'>></font> <a href='".$_SERVER['PHP_SELF']."?".$_SESSION['id_precio']."$url&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))."</a>";
}
// hAY QUE TOMAR EN EL ARRAY LA POSICIÓN  de la columna o campo en la base de datos 
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
