<?php

if(isset($_GET["inm"]))
{

session_start();

//echo "SESSION *****<br>  ";
//foreach ($_SESSION as $key=>$valor) echo $key."=".$valor."<br>";
//echo "POST *****<br>  ";
//foreach ($_POST as $key=>$valor) echo $key."=".$valor."<br>";

include ("enlaces/conexion.php");
	
$cod_inm = $_GET["inm"]-8520;

$sql = mysql_query("SELECT * FROM `inmuebles` WHERE  status = 'Activa' AND cod_inmueble = $cod_inm LIMIT 1");
$row = mysql_fetch_array($sql);
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/jssor.slider.mini.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<title>ABCP&eacute;ru</title>
<script src="js/jrsr.js"></script>
<style type="text/css">
<!--
.Estilo1 {
	color: #333;
	font-weight: bold;
}
-->
</style>
</head>

<body>

	<table width="1200" border="0" align="center">
		<tbody>
			<!--<tr>
				<td colspan="5" height="50px;">ABCPerú</td>
			</tr>-->
            <tr>
				<td colspan="5" height="25px;">
                	<br/>
                	<a href="inmuebles.php">Volver al listado</a> &nbsp;| &nbsp;
                    <a href="inmuebles.php?idp=0&iddep=0&dep_iddep=0&tipo_operacion=0">Inicio</a>
<?php

if($_SESSION["tipo_operacion"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `tipo_operacion` WHERE `id_tipo_operacion` = ".$_SESSION['tipo_operacion_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	echo " <font color='#9B9B9B'>></font> <a href='inmuebles.php?".$_SESSION['tipo_operacion']."&idp=0&iddep=0&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))."</a>";
}

if($_SESSION["idp"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `pais` WHERE `idp` = ".$_SESSION['idp_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	
	echo " <font color='#9B9B9B'>></font> <a href='inmuebles.php?".$_SESSION['idp']."$url&iddep=0&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))."</a>";
}

if($_SESSION["iddep"] != ""){
	$sql_inmueble_des = mysql_query("SELECT * FROM `dep` WHERE `iddep` = ".$_SESSION['iddep_val']);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	
	$url = "";
	if($_SESSION["tipo_operacion"] != "")
		$url .= $_SESSION["tipo_operacion"];
	if($_SESSION["idp"] != "")
		$url .= $_SESSION["idp"];
	
	echo " <font color='#9B9B9B'>></font> <a href='inmuebles.php?".$_SESSION['iddep']."$url&dep_iddep=0&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))."</a>";
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
	
	echo " <font color='#9B9B9B'>></font> <a href='inmuebles.php?".$_SESSION['dep_iddep']."$url&inicio=".$_SESSION['inicio']."&fin=".$_SESSION['fin']."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))."</a>";
}

?>                    
                    <hr color="#EDEDED">
                </td>
			</tr>
            <tr>
            	<td>
                	<table width="100%">
                    	<tbody>
                            <tr>
                                <td width="40%" align="center">
                                	<br/>
                                	<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 410px; height: 370px;">
                                        <!-- Slides Container -->
                                        <div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 410px; height: 370px;">
                                        
<?php

$sql_img = mysql_query("SELECT * FROM `datos` WHERE cod_inmueble = ".$row[0]);
$row_img = mysql_fetch_array($sql_img);

$sql_provincia = mysql_query("SELECT * FROM `pais` WHERE `idp` = ".$row[2]);
$row_provincia = mysql_fetch_array($sql_provincia);

$sql_distrito = mysql_query("SELECT * FROM `dep` WHERE `iddep` = ".$row[3]);
$row_distrito = mysql_fetch_array($sql_distrito);

$sql_tipo = mysql_query("SELECT * FROM `distrito` WHERE `id_distritos` = ".$row[4]);
$row_tipo = mysql_fetch_array($sql_tipo);

$sql_tipo2 = mysql_query("SELECT * FROM `tipo_inmueble` WHERE `id_tipo_inmueble` = ".$row[16]);
$row_tipo2 = mysql_fetch_array($sql_tipo2);

$sql_tipo3 = mysql_query("SELECT * FROM `tipo_operacion` WHERE `id_tipo_operacion` = ".$row[6]);
$row_tipo3 = mysql_fetch_array($sql_tipo3);

/*$sql_operacion = mysql_query("SELECT * FROM `tipo_operacion` WHERE `id_tipo_operacion` = ".$row[5]);
$row_operacion = mysql_fetch_array($sql_operacion);*/
$row_operacion = $row[5];
	

if($row[7] == '0')
	$precio = $row[8];
else
	$precio = $row[7];
	
$cod_inm = $row[0]+8520;

for($i=1;$i<11;$i++){
	//if($row_img[$i] != "" && $row_img[$i] != "imagenes/")
		if($row_img[$i] != "" && $row_img[$i] != "imagenes/" && $row_img[$i] != "../ABCPeru/imagenes/")

		echo "<div><img u='image' src='".$row_img[$i]."'></div>";
}

?>                                         
                                        </div>
                                        <!-- Bullet Navigator Skin Begin -->
                                        <div u="navigator" class="jssorb11" style="position: absolute; bottom: 16px; right: 6px;">
                                            <div u="prototype" style="POSITION: absolute; WIDTH: 11px; HEIGHT: 11px;margin-top:10px;"></div>
                                        </div>
                                        <!-- Bullet Navigator Skin End -->
                                        <!-- Arrow Navigator Skin Begin -->
                                        <!-- Arrow Left -->
                                        <span u="arrowleft" class="jssora14l" style="width: 30px; height: 50px; top: 123px; left: 0px;">
                                        </span>
                                        <!-- Arrow Right -->
                                        <span u="arrowright" class="jssora14r" style="width: 30px; height: 50px; top: 123px; right: 0px">
                                        </span>
                                        <!-- Arrow Navigator Skin End -->
                                    </div>
                                </td>
                                <td width="60%" style="vertical-align:text-top;">
                                    <table width="100%">
                                    	<tr>
                                        	<td>
                                            	<span style="font-weight:bold;color:#666;">C&oacute;digo del inmueble: <?=$row[0]?></span>
                                                <br/><br/>
                                            	<h2 style="color:#494949;display:inline;"><?=utf8_encode($row_tipo2[1])." en ".utf8_encode($row_tipo3[1])?></h2>
                                            </td>
                                            <td align="right" style="color:#333;">
                                            	
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td style="padding-top: 15px;color:#505050;">
												<?=utf8_encode(ucfirst(strtolower($row_provincia[1])))." - ".utf8_encode(ucfirst(strtolower($row_distrito[2])))?>
                                                <br/>
                                                <span style="color: #9B9B9B;font-size: 12px;font-family: Arial,Helvetica,"Nimbus Sans L",sans-serif;">
                                                    <?=utf8_encode(ucfirst(strtolower($row_tipo[2])))?>
                                                </span>
                                            </td>
                                            <td align="right" style="padding-top: 15px;color:#505050;">
                                            	Superficie cubierta: <?=$row[14]?>m<sup>2</sup>
                                                <br/>
                                                Superficie total: <?=$row[15]?>m<sup>2</sup>&nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <br/>
                                    <span style="color: #900;font-size: 24px;font-weight: bold;">
                                        $ <?=number_format($precio,2)?>
                                    </span>
                                    <p>
                                    	<table width="100%" style="border:#E5E5E5 1px solid; border-radius:5px;" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="50%" bgcolor="#EDEDED" style="padding:10px;border-right:1px solid #E5E5E5;">
                                                        <b>Oficina:</b>
                                                    </td>
                                                    <td width="50%" bgcolor="#EDEDED" style="padding:10px;">
                                                        <b>Contacto:</b>
                                                    </td>
                                                </tr>
<?php
$sql_oficina = mysql_query("SELECT * FROM `oficinas` WHERE `cod_oficina` = ".$row[29]);
$row_oficina = mysql_fetch_array($sql_oficina);	
?>
                                                <tr>
                                                    <td width="50%" style="padding:10px;border-right:1px solid #E5E5E5;" valign="top" >
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="2"><big><b><?=utf8_encode(ucwords(strtolower($row_oficina[1])))?></b></big><br/><br/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="right"><b>Tel&eacute;fono:</b></td>
                                                                    <td><?=utf8_encode($row_oficina[6])?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="right"><b>Email:</b></td>
                                                                    <td><?=utf8_encode($row_oficina[18])?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
<?php
$sql_agente = mysql_query("SELECT * FROM `agentes` WHERE `id_agente` = ".$row[32]);
$row_agente = mysql_fetch_array($sql_agente);	
?>
                                                    <td width="50%" style="padding:10px;">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="2"><big><b><?=utf8_encode(ucwords(strtolower($row_agente[2])))?></b></big><br/><br/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="right"><b>Cargo:</b></td>
                                                                    <td><?=utf8_encode(ucfirst(strtolower($row_agente[4])))?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="right"><b>Tel&eacute;fono:</b></td>
                                                                    <td><?=$row_agente[9]?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="right"><b>Email:</b></td>
                                                                    <td><?=utf8_encode($row_agente[11])?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                            	<td colspan="2" style="padding-top:20px;padding:20px;">
                                	<br/>
                                	<table width="100%" style="padding:20px;border:#CECECE 1px solid; border-radius:5px;">
                                        <tbody>
                                            <tr>
                                                <td width="50%" bordercolor="#FFFFFF" bgcolor="#EDEDED" style="color:#999;font-size:24px"><span class="Estilo1">
                                               	  Caracteresiticas del inmueble:<br/>
                                               	<br/>                                              
                                           	  </span></td>
                                			</tr>
                                            <tr>
                                            	<td style="font-size:16px">
                                                	
<?php

if($row[5] != "" && $row[5] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Calle / Avenida</strong>: ".utf8_encode($row[5])."</ul><br/><br/>";

if($row[17] != "" && $row[17] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Antiguedad</strong>: ".utf8_encode($row[17])." a&ntilde;os</ul>";
if($row[60] != "" && $row[60] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Amoblado</strong>: ".utf8_encode($row[60])."</ul>";
if($row[61] != "" && $row[61] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Ascensor</strong>: ".utf8_encode($row[61])."</ul>";
if($row[19] != "" && $row[19] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Estacionamientos</strong>: ".utf8_encode($row[19])."</ul>";

echo "<br/><br/>";

if($row[18] != "" && $row[18] != "0")
	echo "<ul style='display:inline;color:#333;'><strong>Dormitorios</strong>: ".utf8_encode($row[18])."</ul>";
if($row[23] != "" && $row[23] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Habitaci&oacute;n de Servicio</strong>: ".utf8_encode($row[23])."</ul>";
if($row[20] != "" && $row[20] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Ba&ntilde;os</strong>: ".utf8_encode($row[20])."</ul>";
if($row[24] != "" && $row[24] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Ba&ntilde;os de Servicio</strong>: ".utf8_encode($row[24])."</ul>";
if($row[25] != "" && $row[25] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Medio ba&ntilde;o</strong>: ".utf8_encode($row[25])."</ul>";	

echo "<br/><br/>";

if($row[62] != "" && $row[62] != "0")
	echo "<ul style='display:inline;color:#333'><strong>Mantenimiento</strong>: ".utf8_encode($row[62])."</ul>";

echo "<br/>";

?>                                                    
                                                </td>
                                			</tr>
                                            <tr>
                                            	<td bgcolor="#EDEDED" style="color:#999;font-size:24px"><span class="Estilo1"> Descripci&oacute;n: <br/>
                           	                      <br/>
                                              </span></td>
                                			</tr>
                                            <tr>
                                            	<td style="color:#333;font-size:16px;">
                                                    <?=utf8_encode($row[26])?>
                                                    <br/><br/><br/>
                                                </td>
                                			</tr>
                                		</tbody>
                                	</table>
                                </td>
                            </tr>
                        </tbody>
                    </table> 	
                </td>
            </tr>
		</tbody>
	</table>

</body>
</html>

<?php

}
else
	header("Location: inmuebles.php");

?>