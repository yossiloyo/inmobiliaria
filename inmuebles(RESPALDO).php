<?php

session_start();

//echo "SESSION *****<br>  ";
//foreach ($_SESSION as $key=>$valor) echo $key."=".$valor."<br>";
//echo "POST *****<br>  ";
//foreach ($_POST as $key=>$valor) echo $key."=".$valor."<br>";

include ("enlaces/conexion.php");
include ("inc/url.php");
	
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
</head>

<body>

		<tr>
          <td width="80"  align="center" valign="middle" class="hovergallery"><p align="center"><a href="http://www.inmobiliariaabcperu.com"><img src="iconos/banner.png" alt="banner" width="482" height="69" longdesc="iconos/banner.png" /></a>
	  </label>

</tr>

	<table width="1200" border="0" align="center">
		<tbody>
			<!--<tr>
				<td colspan="5" height="50px;">ABCPerú</td>
			</tr>-->
            <tr>
				<td colspan="5" height="25px;">
                	<br/>
                    <a href="<?=$_SERVER['PHP_SELF']?>?idp=0&iddep=0&dep_iddep=0&tipo_operacion=0&tipo_inmueble=0&inicio=0&fin=16">Inicio</a>
					<?php include ("inc/url_bar.php");?>                    
                    <hr color="#EDEDED">
                </td>
			</tr>
			<tr>
            	<td width="20%" style="vertical-align:top;padding:10px;background-color:#F4F4F4;border-radius:10px;">
                	<p style='font-weight:bold;'>Filtrado por:</p>
                    
<?php

//ERASE SEARCH

if($_SESSION["idp"] != "" || $_SESSION["iddep"] != "" || $_SESSION["dep_iddep"] != "" || $_SESSION["tipo_operacion"] != "" || $_SESSION["tipo_inmueble"] != ""){
	
	//ERASE SEARCH -> tipo_operacion
	
	if(isset($_SESSION["tipo_operacion"]) && $_SESSION["tipo_operacion"] != ""){
		$sql_inmueble_des = mysql_query("SELECT * FROM `tipo_operacion` WHERE `id_tipo_operacion` = ".$_SESSION['tipo_operacion_val']);
		$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);

?>                    
					<a href="<?=$_SERVER['PHP_SELF']?>?tipo_operacion=0&inicio=<?=$_SESSION['inicio']?>&fin=<?=$_SESSION['fin']?>" style="font-size:12px;text-decoration:none;color:#212121;">
                        <font color="gray">Operaci&oacute;n:</font>
                        <br/>
                        <table width="100%" align="center" style="background-color:#D3D3D3;border-radius:3px;font-size:12px;padding:2px;text-shadow:0 1px 1px #fff;cursor:pointer;margin-bottom:5px;">
                            <tbody>
                                <tr>
                                    <td><?=utf8_encode(utf8_encode($row_inmueble_des[1]))?></td><td align="right"><img src="x.png" width="9" height="9" alt=""/> </td>
                                </tr>
                            </tbody>
                        </table>
					</a>
<?php

	}
	
	//ERASE SEARCH -> tipo_inmueble
	
	if(isset($_SESSION["tipo_inmueble"]) && $_SESSION["tipo_inmueble"] != ""){
		$sql_inmueble_des = mysql_query("SELECT * FROM `tipo_inmueble` WHERE `id_tipo_inmueble` = ".$_SESSION['tipo_inmueble_val']);
		$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);

?>                    
					<a href="<?=$_SERVER['PHP_SELF']?>?tipo_inmueble=0&inicio=<?=$_SESSION['inicio']?>&fin=<?=$_SESSION['fin']?>" style="font-size:12px;text-decoration:none;color:#212121;">
                        <font color="gray">Tipo:</font>
                        <br/>
                        <table width="100%" align="center" style="background-color:#D3D3D3;border-radius:3px;font-size:12px;padding:2px;text-shadow:0 1px 1px #fff;cursor:pointer;margin-bottom:5px;">
                            <tbody>
                                <tr>
                                    <td>
										<?=utf8_encode(utf8_encode($row_inmueble_des[1]))?></td><td align="right"><img src="x.png" width="9" height="9" alt=""/>
									</td>
                                </tr>
                            </tbody>
                        </table>
					</a>
<?php

	}

	
	//ERASE SEARCH -> idp
	
	if(isset($_SESSION["idp"]) && $_SESSION["idp"] != ""){
		$sql_inmueble_des = mysql_query("SELECT * FROM `pais` WHERE `idp` = ".$_SESSION['idp_val']);
		$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);

?>                    
					<a href="<?=$_SERVER['PHP_SELF']?>?idp=0&inicio=<?=$_SESSION['inicio']?>&fin=<?=$_SESSION['fin']?>" style="font-size:12px;text-decoration:none;color:#212121;">
                        <font color="gray">Departamento:</font>
                        <br/>
                        <table width="100%" align="center" style="background-color:#D3D3D3;border-radius:3px;font-size:12px;padding:2px;text-shadow:0 1px 1px #fff;cursor:pointer;margin-bottom:5px;">
                            <tbody>
                                <tr>
                                    <td><?=utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))?></td><td align="right"><img src="x.png" width="9" height="9" alt="x"/> </td>
                                </tr>
                            </tbody>
                        </table>
					</a>
<?php

	}
	
	//ERASE SEARCH -> iddep
	
	if(isset($_SESSION["iddep"]) && $_SESSION["iddep"] != ""){
		$sql_inmueble_des = mysql_query("SELECT * FROM `dep` WHERE `iddep` = ".$_SESSION['iddep_val']);
		$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);

?>                    
					<a href="<?=$_SERVER['PHP_SELF']?>?iddep=0&inicio=<?=$_SESSION['inicio']?>&fin=<?=$_SESSION['fin']?>" style="font-size:12px;text-decoration:none;color:#212121;">
                        <font color="gray">Provincia:</font>
                        <br/>
                        <table width="100%" align="center" style="background-color:#D3D3D3;border-radius:3px;font-size:12px;padding:2px;text-shadow:0 1px 1px #fff;cursor:pointer;margin-bottom:5px;">
                            <tbody>
                                <tr>
                                    <td><?=utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))?></td><td align="right"><img src="x.png" width="9" height="9" alt="x"/> </td>
                                </tr>
                            </tbody>
                        </table>
					</a>
<?php

	}
	
	//ERASE SEARCH -> dep_iddep
	
	if(isset($_SESSION["dep_iddep"]) && $_SESSION["dep_iddep"] != ""){
		$sql_inmueble_des = mysql_query("SELECT * FROM `distrito` WHERE `id_distritos` = ".$_SESSION['dep_iddep_val']);
		$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);

?>                    
					<a href="<?=$_SERVER['PHP_SELF']?>?dep_iddep=0&inicio=<?=$_SESSION['inicio']?>&fin=<?=$_SESSION['fin']?>" style="font-size:12px;text-decoration:none;color:#212121;">
                        <font color="gray">Distrito:</font>
                        <br/>
                        <table width="100%" align="center" style="background-color:#D3D3D3;border-radius:3px;font-size:12px;padding:2px;text-shadow:0 1px 1px #fff;cursor:pointer;margin-bottom:5px;">
                            <tbody>
                                <tr>
                                    <td><?=utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))?></td><td align="right"><img src="x.png" width="9" height="9" alt="x"/> </td>
                                </tr>
                            </tbody>
                        </table>
					</a>
<?php

	}
			
}

echo "				<br />";
echo "				<hr color='#BABABA' style='border-top:#000000;' />";

// FILTER BY -> tipo_operacion

if($_SESSION["tipo_operacion"] == ""){
	
	$query = "";
	
	if($_SESSION["idp"] != "")
		$query .= " AND idp = ".$_SESSION["idp_val"];
	if($_SESSION["iddep"] != "")
		$query .= " AND iddep = ".$_SESSION["iddep_val"];
	if($_SESSION["dep_iddep"] != "")
		$query .= " AND id_distritos = ".$_SESSION["dep_iddep_val"];
	if($_SESSION["tipo_inmueble"] != "")
		$query .= " AND tipo_inmueble = ".$_SESSION["tipo_inmueble_val"];
	
	$sql_inmueble = mysql_query("SELECT DISTINCT(tipo_operacion) FROM `inmuebles` WHERE status = 'Activa' $query AND `tipo_operacion` != ''");
	$row_inmueble = mysql_num_rows($sql_inmueble);
	
	if($row_inmueble > 0){ ?>
	
					<br />
                    <span style="font-weight:bold;font-size:13px;">Operaci&oacute;n:</span>
                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">
                        <tbody>
                        	<tr>
                            	<td>
                                	<form action="" method="get" onChange="submit()" style="width:186px;font-family:Times New Roman;font-size:16px;">
                                    	<select name="tipo_operacion" id="tipo_operacion" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">
                                        	<option value=''>-</option>
<?php
while($row_inmueble = mysql_fetch_array($sql_inmueble)){
	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM `inmuebles` WHERE status = 'Activa' $query AND `tipo_operacion` = '".$row_inmueble[0]."'");
	$row_inmueble_tot = mysql_fetch_array($sql_inmueble_tot);
	$sql_inmueble_des = mysql_query("SELECT * FROM `tipo_operacion` WHERE `id_tipo_operacion` = ".$row_inmueble[0]);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	echo "									<option value='".$row_inmueble[0]."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))." (".$row_inmueble_tot[0].")</option>";	
}
?>
										</select>
                                    </form>
                                </td>
                            </tr>
						</tbody>
					</table>
<?php 
	}
}

// FILTER BY -> tipo_inmueble

if($_SESSION["tipo_inmueble"] == ""){
	
	$query = "";

	if($_SESSION["idp"] != "")
		$query .= " AND idp = ".$_SESSION["idp_val"];
	if($_SESSION["iddep"] != "")
		$query .= " AND iddep = ".$_SESSION["iddep_val"];
	if($_SESSION["dep_iddep"] != "")
		$query .= " AND id_distritos = ".$_SESSION["dep_iddep_val"];
	if($_SESSION["tipo_operacion"] != "")
		$query .= " AND tipo_operacion = ".$_SESSION["tipo_operacion_val"];
	
	$sql_inmueble = mysql_query("SELECT DISTINCT(tipo_inmueble) FROM `inmuebles` WHERE status = 'Activa' $query AND `tipo_inmueble` != ''");
	$row_inmueble = mysql_num_rows($sql_inmueble);
	
	if($row_inmueble > 0){ ?>
	
					<br />
                    <span style="font-weight:bold;font-size:13px;">Tipo:</span>
                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">
                        <tbody>
                        	<tr>
                            	<td>
                                	<form action="" method="get" onChange="submit()" style="width:186px;font-family:Times New Roman;font-size:16px;">
                                    	<select name="tipo_inmueble" id="tipo_inmueble" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">
                                        	<option value=''>-</option>
<?php
while($row_inmueble = mysql_fetch_array($sql_inmueble)){
	
	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM `inmuebles` WHERE status = 'Activa' $query AND `tipo_inmueble` = '".$row_inmueble[0]."'");
	$row_inmueble_tot = mysql_fetch_array($sql_inmueble_tot);
	$sql_inmueble_des = mysql_query("SELECT * FROM `tipo_inmueble` WHERE `id_tipo_inmueble` = ".$row_inmueble[0]);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	echo "									<option value='".$row_inmueble[0]."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))." (".$row_inmueble_tot[0].")</option>";	
}
?>
										</select>
                                    </form>
                                </td>
                            </tr>
						</tbody>
					</table>
<?php 
	}
}

// FILTER BY -> idp (idp)

if($_SESSION["idp"] == ""){
	
	$query = "";

	if($_SESSION["iddep"] != "")
		$query .= " AND iddep = ".$_SESSION["iddep_val"];
	if($_SESSION["dep_iddep"] != "")
		$query .= " AND id_distritos = ".$_SESSION["dep_iddep_val"];
	if($_SESSION["tipo_operacion"] != "")
		$query .= " AND tipo_operacion = ".$_SESSION["tipo_operacion_val"];
	if($_SESSION["tipo_inmueble"] != "")
		$query .= " AND tipo_inmueble = ".$_SESSION["tipo_inmueble_val"];
	
	$sql_inmueble = mysql_query("SELECT DISTINCT(idp) FROM `inmuebles` WHERE status = 'Activa' $query AND `idp` > 0");
	$row_inmueble = mysql_num_rows($sql_inmueble);
	
	if($row_inmueble > 0){ ?>
	
					<br />
                    <span style="font-weight:bold;font-size:13px;">Departamento:</span>
                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">
                        <tbody>
                        	<tr>
                            	<td>
                                	<form action="" method="get" onChange="submit()" style="width:186px;font-family:Times New Roman;font-size:16px;">
                                    	<select name="idp" id="idp" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">
                                        	<option value=''>-</option>
<?php
while($row_inmueble = mysql_fetch_array($sql_inmueble)){
	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM `inmuebles` WHERE status = 'Activa' $query AND `idp` = ".$row_inmueble[0]);
	$row_inmueble_tot = mysql_fetch_array($sql_inmueble_tot);
	$sql_inmueble_des = mysql_query("SELECT * FROM `pais` WHERE `idp` = ".$row_inmueble[0]);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	echo "									<option value='".$row_inmueble[0]."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[1])))." (".$row_inmueble_tot[0].")</option>";	
}
?>                      
										</select>
                                    </form>
                                </td>
                            </tr>
						</tbody>
					</table>
<?php
	}
}

// FILTER BY -> iddep

if($_SESSION["iddep"] == ""){
	
	$query = "";

	if($_SESSION["idp"] != "")
		$query .= " AND idp = ".$_SESSION["idp_val"];
	if($_SESSION["dep_iddep"] != "")
		$query .= " AND id_distritos = ".$_SESSION["dep_iddep_val"];
	if($_SESSION["tipo_operacion"] != "")
		$query .= " AND tipo_operacion = ".$_SESSION["tipo_operacion_val"];
	if($_SESSION["tipo_inmueble"] != "")
		$query .= " AND tipo_inmueble = ".$_SESSION["tipo_inmueble_val"];
	
	$sql_inmueble = mysql_query("SELECT DISTINCT(iddep) FROM `inmuebles` WHERE status = 'Activa' $query AND `iddep` > 0");
	$row_inmueble = mysql_num_rows($sql_inmueble);
	
	if($row_inmueble > 0){ ?>
	
					<br />
                    <span style="font-weight:bold;font-size:13px;">Provincia:</span>
                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:10px;">
                        <tbody> 
                        	<tr>
                            	<td>
                                	<form action="" method="get" onChange="submit()" style="width:186px;font-family:Times New Roman;font-size:16px;">
                                    	<select name="iddep" id="iddep" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">
                                        	<option value=''>-</option>
<?php
while($row_inmueble = mysql_fetch_array($sql_inmueble)){
	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM `inmuebles` WHERE status = 'Activa' $query AND `iddep` = ".$row_inmueble[0]);
	$row_inmueble_tot = mysql_fetch_array($sql_inmueble_tot);
	$sql_inmueble_des = mysql_query("SELECT * FROM `dep` WHERE `iddep` = ".$row_inmueble[0]);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	echo "									<option value='".$row_inmueble[0]."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))." (".$row_inmueble_tot[0].")</option>";	
}
?>                      
										</select>
                                    </form>
                                </td>
                            </tr>
						</tbody>
					</table>
<?php
	}
}

// FILTER BY -> dep_iddep

if($_SESSION["dep_iddep"] == ""){
	
	$query = "";

	if($_SESSION["idp"] != "")
		$query .= " AND idp = ".$_SESSION["idp_val"];
	if($_SESSION["iddep"] != "")
		$query .= " AND iddep = ".$_SESSION["iddep_val"];
	if($_SESSION["tipo_operacion"] != "")
		$query .= " AND tipo_operacion = ".$_SESSION["tipo_operacion_val"];
	if($_SESSION["tipo_inmueble"] != "")
		$query .= " AND tipo_inmueble = ".$_SESSION["tipo_inmueble_val"];
	
	$sql_inmueble = mysql_query("SELECT DISTINCT(id_distritos) FROM `inmuebles` WHERE status = 'Activa' $query AND `id_distritos` > 0");
	$row_inmueble = mysql_num_rows($sql_inmueble);
	
	if($row_inmueble > 0){ ?>
	
					<br />
                    <span style="font-weight:bold;font-size:13px;">Distrito:</span>
                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">
                        <tbody> 
                        	<tr>
                            	<td>
                                	<form action="" method="get" onChange="submit()" style="width:186px;font-family:Times New Roman;font-size:16px;">
                                    	<select name="dep_iddep" id="dep_iddep" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">
                                        	<option value=''>-</option>
<?php
while($row_inmueble = mysql_fetch_array($sql_inmueble)){
	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM `inmuebles` WHERE status = 'Activa' $query AND `id_distritos` = ".$row_inmueble[0]);
	$row_inmueble_tot = mysql_fetch_array($sql_inmueble_tot);
	$sql_inmueble_des = mysql_query("SELECT * FROM `distrito` WHERE `id_distritos` = ".$row_inmueble[0]);
	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);
	echo "									<option value='".$row_inmueble[0]."'>".utf8_encode(ucfirst(strtolower($row_inmueble_des[2])))." (".$row_inmueble_tot[0].")</option>";	
}
?>                      
										</select>
                                    </form>
                                </td>
                            </tr>
						</tbody>
					</table>
<?php
	}
}

?>						
                </td>
                <td width="80%">
					<table width="100%" border="0" align="center">
                        <tbody>
                        
<?php

// SEARCH -> inmuebles

$query = "";

if($_SESSION["idp"] != ""){
	$query .= " AND idp = ".$_SESSION["idp_val"];
}
if($_SESSION["iddep"] != ""){
	$query .= " AND iddep = ".$_SESSION["iddep_val"];
}
if($_SESSION["dep_iddep"] != ""){
	$query .= " AND id_distritos = ".$_SESSION["dep_iddep_val"];
}
if($_SESSION["tipo_operacion"] != ""){
	$query .= " AND tipo_operacion = ".$_SESSION["tipo_operacion_val"];
}
if($_SESSION["tipo_inmueble"] != ""){
	$query .= " AND tipo_inmueble = ".$_SESSION["tipo_inmueble_val"];
}
		
$sql = mysql_query("SELECT * FROM `inmuebles` WHERE  status = 'Activa' $query ORDER BY fecha_publicacion_A DESC LIMIT ".$_SESSION['inicio'].",".$_SESSION['fin']);
$tot = mysql_num_rows($sql);

$tr = 1;
$td = 1;
$slider = 1;

while($row = mysql_fetch_array($sql)){
	if($td == 1)
		echo "				<tr>";
?>    
                                <td width="25%" align="center" style="vertical-align:top; padding-top:12px;">
                                	<div id="slider<?=$slider?>_container" style="position: relative; top: 0px; left: 0px; width: 210px; height: 210px;">
                                        <!-- Slides Container -->
                                        <div u="slides" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 210px; height: 210px;">
                                        
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
	if($row_img[$i] != "" && $row_img[$i] != "imagenes/" && $row_img[$i] != "../ABCPeru/imagenes/")
		echo "<div><a href='inmuebles_view.php?inm=$cod_inm'><img u='image' src='".$row_img[$i]."'></a></div>";
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
                                    <p style="text-align:left;padding:8px;">
                                    	<a href="#">
                                        	<?=utf8_encode(ucfirst(strtolower($row_provincia[1])))." - ".utf8_encode(ucfirst(strtolower($row_distrito[2])))?>
                                        </a>
                                        <br />
                                        <span style="color: #900;font-size: 16px;font-weight: bold;">
                                        	$ <?=number_format($precio,2)?>
                                        </span>
                                        <br />
                                        <span href="#" style="font-size: 12px;font-weight: bold;">
                                        	<?=$row[15]?> m² |	<?=utf8_encode(ucfirst(strtolower($row_tipo2[1])))." en ".utf8_encode(ucfirst(strtolower($row_tipo3[1])))?>
                                        </span>
                                        <br />
                                        <span href="#" style="color: #9B9B9B;font-size: 12px;font-family: Arial,Helvetica,"Nimbus Sans L",sans-serif;">
                                        	<?php
												if($row_tipo[1] > 25)
                                            		echo substr(utf8_encode(ucfirst(strtolower($row_tipo[1]))),0,25)."...";
												else
													echo utf8_encode(ucfirst(strtolower($row_tipo[2])));
											?>
                                        </span>
                                        <br />
                                    </p>
                                </td>
<?php

if($td == 4){
	$td = 1;
	echo "</tr>";
}else
	$td++;
	
$slider++;

}

if($tot == 1)
	echo "<td width='25%'></td><td width='25%'></td><td width='25%'></td>";
if($tot == 2)
	echo "<td width='25%'></td><td width='25%'></td>";
if($tot == 3)
	echo "<td width='25%'></td>";

?>                      
							</tr>
						</tbody>
                	</table>
                    <br/>
                    <table align="right" cellspacing="5">
                    	<tr>
							<?php include ("inc/page.php");?>
                        </tr>
                    </table>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </td>
				
			</tr>
            <tr>
            	<td>
                	
                </td>
            </tr>
		</tbody>
	</table>
</body>
</html>
<script>
	$("#page<?=$page?>").css("background-color","#03B").css("color","#fff");
</script>
