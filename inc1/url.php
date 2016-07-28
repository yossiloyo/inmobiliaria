<?php

if(!isset($_SESSION['idp']))
	$_SESSION['idp'] = "";
	
if(!isset($_SESSION['iddep']))
	$_SESSION['iddep'] = "";
	
if(!isset($_SESSION['dep_iddep']))
	$_SESSION['dep_iddep'] = "";
	
if(!isset($_SESSION['tipo_operacion']))
	$_SESSION['tipo_operacion'] = "";
	
if(!isset($_SESSION['inicio']))
	$_SESSION['inicio'] = "0";
	
if(!isset($_SESSION['fin']))
	$_SESSION['fin'] = "16";

if(isset($_GET["idp"]) && $_GET["idp"] > 0){
	$_SESSION['idp'] = "&idp=".$_GET["idp"];
	$_SESSION['idp_val'] = $_GET["idp"];
}
if(isset($_GET["idp"]) && $_GET["idp"] == 0){
	$_SESSION['idp'] = "";
	$_SESSION['idp_val'] = 0;
}

if(isset($_GET["iddep"]) && $_GET["iddep"] > 0){
	$_SESSION['iddep'] = "&iddep=".$_GET["iddep"];
	$_SESSION['iddep_val'] = $_GET["iddep"];
}
if(isset($_GET["iddep"]) && $_GET["iddep"] == 0){
	$_SESSION['iddep'] = "";
	$_SESSION['iddep_val'] = 0;
}

if(isset($_GET["dep_iddep"]) && $_GET["dep_iddep"] > 0){
	$_SESSION['dep_iddep'] = "&dep_iddep=".$_GET["dep_iddep"];
	$_SESSION['dep_iddep_val'] = $_GET["dep_iddep"];
}
if(isset($_GET["dep_iddep"]) && $_GET["dep_iddep"] == 0){
	$_SESSION['dep_iddep'] = "";
	$_SESSION['dep_iddep_val'] = 0;
}

if(isset($_GET["tipo_operacion"]) && $_GET["tipo_operacion"] > 0){
	$_SESSION['tipo_operacion'] = "&tipo_operacion=".$_GET["tipo_operacion"];
	$_SESSION['tipo_operacion_val'] = $_GET["tipo_operacion"];
}
if(isset($_GET["tipo_operacion"]) && $_GET["tipo_operacion"] == 0){
	$_SESSION['tipo_operacion'] = "";
	$_SESSION['tipo_operacion_val'] = 0;
}
	
if(isset($_GET["inicio"]))
	$_SESSION['inicio'] = $_GET["inicio"];
if(isset($_GET["fin"]))
	$_SESSION['fin'] = $_GET["fin"];
	
//echo "SESSION *****<br>  ";
//foreach ($_SESSION as $key=>$valor) echo $key."=".$valor."<br>";

?>