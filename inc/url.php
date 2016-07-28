<?php

if(!isset($_SESSION['page']))
	$_SESSION['page'] = "1";

if(!isset($_SESSION['idp']))
	$_SESSION['idp'] = "";
	
if(!isset($_SESSION['iddep']))
	$_SESSION['iddep'] = "";
	
if(!isset($_SESSION['dep_iddep']))
	$_SESSION['dep_iddep'] = "";
	
if(!isset($_SESSION['tipo_operacion']))
	$_SESSION['tipo_operacion'] = "";
	
if(!isset($_SESSION['tipo_inmueble']))
	$_SESSION['tipo_inmueble'] = "";
	
	/////////////////////////////////////////////////////   A G R E G A D O   P A R A     O F I C I N A S    Y    A G E N T E S  ////////////////////////////////////////////////////
if(!isset($_SESSION['cod_oficina']))
	$_SESSION['cod_oficina'] = "";

if(!isset($_SESSION['id_agente']))
	$_SESSION['id_agente'] = "";

if(!isset($_SESSION['id_precio']))
	$_SESSION['id_precio'] = "";
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
if(!isset($_SESSION['inicio']))
	$_SESSION['inicio'] = "0";
	
if(!isset($_SESSION['fin']))
	$_SESSION['fin'] = "16";
	
if(isset($_GET["page"])){
	$_SESSION['page'] = $_GET["page"];
}

if(isset($_GET["idp"]) && $_GET["idp"] > 0){
	$_SESSION['idp'] = "&idp=".$_GET["idp"];
	$_SESSION['idp_val'] = $_GET["idp"];
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}
if(isset($_GET["idp"]) && $_GET["idp"] == 0){
	$_SESSION['idp'] = "";
	$_SESSION['idp_val'] = 0;
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}

if(isset($_GET["iddep"]) && $_GET["iddep"] > 0){
	$_SESSION['iddep'] = "&iddep=".$_GET["iddep"];
	$_SESSION['iddep_val'] = $_GET["iddep"];
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}
if(isset($_GET["iddep"]) && $_GET["iddep"] == 0){
	$_SESSION['iddep'] = "";
	$_SESSION['iddep_val'] = 0;
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}

if(isset($_GET["dep_iddep"]) && $_GET["dep_iddep"] > 0){
	$_SESSION['dep_iddep'] = "&dep_iddep=".$_GET["dep_iddep"];
	$_SESSION['dep_iddep_val'] = $_GET["dep_iddep"];
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}
if(isset($_GET["dep_iddep"]) && $_GET["dep_iddep"] == 0){
	$_SESSION['dep_iddep'] = "";
	$_SESSION['dep_iddep_val'] = 0;
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}

if(isset($_GET["tipo_operacion"]) && $_GET["tipo_operacion"] > 0){
	$_SESSION['tipo_operacion'] = "&tipo_operacion=".$_GET["tipo_operacion"];
	$_SESSION['tipo_operacion_val'] = $_GET["tipo_operacion"];
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}
if(isset($_GET["tipo_operacion"]) && $_GET["tipo_operacion"] == 0){
	$_SESSION['tipo_operacion'] = "";
	$_SESSION['tipo_operacion_val'] = 0;
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}

if(isset($_GET["tipo_inmueble"]) && $_GET["tipo_inmueble"] > 0){
	$_SESSION['tipo_inmueble'] = "&tipo_inmueble=".$_GET["tipo_inmueble"];
	$_SESSION['tipo_inmueble_val'] = $_GET["tipo_inmueble"];
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}
if(isset($_GET["tipo_inmueble"]) && $_GET["tipo_inmueble"] == 0){
	$_SESSION['tipo_inmueble'] = "";
	$_SESSION['tipo_inmueble_val'] = 0;
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}
	/////////////////////////////////////////////////////   A G R E G A D O   P A R A     O F I C I N A S  y    A G E N T E S     /////////////////////////////////////////////////////
if(isset($_GET["cod_oficina"]) && $_GET["cod_oficina"] > 0){
	$_SESSION['cod_oficina'] = "&cod_oficina=".$_GET["cod_oficina"];
	$_SESSION['cod_oficina_val'] = $_GET["cod_oficina"];
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}
if(isset($_GET["cod_oficina"]) && $_GET["cod_oficina"] == 0){
	$_SESSION['cod_oficina'] = "";
	$_SESSION['cod_oficina_val'] = 0;
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}


if(isset($_GET["id_agente"]) && $_GET["id_agente"] > 0){
	$_SESSION['id_agente'] = "&id_agente=".$_GET["id_agente"];
	$_SESSION['id_agente_val'] = $_GET["id_agente"];
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}
if(isset($_GET["id_agente"]) && $_GET["id_agente"] == 0){
	$_SESSION['id_agente'] = "";
	$_SESSION['id_agente_val'] = 0;
	$_SESSION['page'] = "1";
	$_SESSION['inicio'] = "0";
}



	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET["inicio"]))
	$_SESSION['inicio'] = $_GET["inicio"];
if(isset($_GET["fin"]))
	$_SESSION['fin'] = $_GET["fin"];
	
//echo "SESSION *****<br>  ";
foreach ($_SESSION as $key=>$valor) echo $key."=".$valor."<br>";

?>
