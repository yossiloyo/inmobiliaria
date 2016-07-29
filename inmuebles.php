<?php
session_start();



/*echo "SESSION *****<br>  ";

foreach ($_SESSION as $key=>$valor) echo $key."=".$valor."<br>";

echo "POST *****<br>  ";

foreach ($_POST as $key=>$valor) echo $key."=".$valor."<br>";*/





include ("enlaces/conexion.php");

include ("inc/url.php");

//$desde= 0;
//$hasta= 1000;
$desde= $_GET['desde'];
$hasta= $_GET['hasta'];
// $_SESSION['desde']=desde;
 //$_SESSION['hasta']=hasta;

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="js/jssor.slider.mini.js"></script>

<script src="js/jquery-1.11.2.min.js"></script>

<script src="js/jrsr.js"></script>

<meta name="description" content="Venta o Alquiler de Inmuebles en Peru; Casas, Departamentos, Oficinas, Terrenos, Locales Comercial, Peru, Lima, El Callao, Miraflores">

<link rel="shortcut icon" href="../imagenes/icono.ico">

<title>Inmuebles</title>

</head>

<body>

		<tr>

          <td width="80"  align="center" valign="middle" class="hovergallery"><p align="center"><a href="../index.html" TITLE="inmuebles"><div id="shape2" style="position:static; left:-200px; top:2px; right :-200px;>

            <div align="center">

            <div align="center"><img border=0 width="1296" height="145" alt="Inmobiliariaabcperu" title="Inmobiliariaa.b.c.peru" src="iconos/encabezado.png"></div>

          </div>

          </div>

          </a>

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

                    <a href="<?=$_SERVER['PHP_SELF']?>?idp=0&iddep=0&dep_iddep=0&tipo_operacion=0&tipo_inmueble=0&cod_oficina=0&id_agente=0&inicio=0&fin=16">Inicio</a>

					<?php include ("inc/url_bar.php");?>

                    <hr color="#EDEDED">

                </td>

			</tr>

			<tr>

           	  <td width="20%" style="vertical-align:top;padding:10px;background-color:#F4F4F4;border-radius:10px;">

                	<p style='font-weight:bold;'>Filtrar Propiedades por:</p>





<?php







//ERASE SEARCH



if($_SESSION["idp"] != "" || $_SESSION["iddep"] != "" || $_SESSION["dep_iddep"] != "" || $_SESSION["tipo_operacion"] != "" || $_SESSION["tipo_inmueble"] != "" || $_SESSION["cod_oficina"] != "" || $_SESSION["id_agente"] != ""){





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





//ERASE SEARCH -> cod_oficina



	if(isset($_SESSION["cod_oficina"]) && $_SESSION["cod_oficina"] != ""){

		$sql_inmueble_des = mysql_query("SELECT * FROM `oficinas` WHERE `cod_oficina` = ".$_SESSION['cod_oficina_val']);

	    $row_inmueble_des = mysql_fetch_array($sql_inmueble_des);



?>

					<a href="<?=$_SERVER['PHP_SELF']?>?cod_oficina=0&inicio=<?=$_SESSION['inicio']?>&fin=<?=$_SESSION['fin']?>" style="font-size:12px;text-decoration:none;color:#212121;">

                        <font color="gray">Oficina:</font>

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





//ERASE SEARCH -> id_agente



    if(isset($_SESSION["id_agente"]) && $_SESSION["id_agente"] != ""){

        $sql_inmueble_des = mysql_query("SELECT * FROM `agentes` WHERE `id_agente` = ".$_SESSION['id_agente_val']);

        $row_inmueble_des = mysql_fetch_array($sql_inmueble_des);



?>

                    <a href="<?=$_SERVER['PHP_SELF']?>?id_agente=0&inicio=<?=$_SESSION['inicio']?>&fin=<?=$_SESSION['fin']?>" style="font-size:12px;text-decoration:none;color:#212121;">

                        <font color="gray">Agentes:</font>

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

    if($_SESSION["cod_oficina"] != "")

        $query .= " AND cod_oficina1 = ".$_SESSION["cod_oficina_val"];

    if($_SESSION["id_agente"] != "")

        $query .= " AND cod_agente_captador_oficina1 = ".$_SESSION["id_agente_val"];


    	$sql_inmueble = mysql_query("SELECT DISTINCT(i.tipo_operacion) FROM inmuebles i, tipo_operacion t WHERE i.status = 'Activa' $query AND i.tipo_operacion != '' and i.tipo_operacion=t.id_tipo_operacion order by t.nombre_tipo_operacion");

	$row_inmueble = mysql_num_rows($sql_inmueble);

	if($row_inmueble > 0){ ?>

					<br />

                    <span style="font-weight:bold;font-size:13px;">Tipo de Operaci&oacute;n:</span>

                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">

                        <tbody>

                        	<tr>

                            	<td>

                                	<form action="" method="get" style="width:186px;font-family:Times New Roman;font-size:16px;">

                                    	<select name="tipo_operacion" id="tipo_operacion" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">

                                        	<option value=''>-</option>



<?php

while($row_inmueble = mysql_fetch_array($sql_inmueble)){

	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM inmuebles i, datos f WHERE i.status = 'Activa' and i.precio_dolares BETWEEN '$desde' and '$hasta' and i.cod_inmueble = f.cod_inmueble $query AND i.tipo_operacion = '".$row_inmueble[0]."'");

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

    if($_SESSION["cod_oficina"] != "")

        $query .= " AND cod_oficina1 = ".$_SESSION["cod_oficina_val"];

    if($_SESSION["id_agente"] != "")

        $query .= " AND cod_agente_captador_oficina1 = ".$_SESSION["id_agente_val"];

	$sql_inmueble = mysql_query("SELECT DISTINCT(i.tipo_inmueble) FROM inmuebles i, tipo_inmueble ti WHERE i.status = 'Activa' $query AND i.tipo_inmueble != '' and i.tipo_inmueble=ti.id_tipo_inmueble order by ti.nombre_tipo_inmueble");

	$row_inmueble = mysql_num_rows($sql_inmueble);

	if($row_inmueble > 0){ ?>

					<br />

                    <span style="font-weight:bold;font-size:13px;">Tipo de Inmueble:</span>

                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">

                        <tbody>

                        	<tr>

                            	<td>

                                	<form action="" method="get" style="width:186px;font-family:Times New Roman;font-size:16px;">

                                    	<select name="tipo_inmueble" id="tipo_inmueble" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">

                                        	<option value=''>-</option>

<?php

while($row_inmueble = mysql_fetch_array($sql_inmueble)){

	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM inmuebles i, datos f WHERE i.status = 'Activa' and i.precio_dolares BETWEEN '$desde' and '$hasta' and i.cod_inmueble = f.cod_inmueble $query AND i.tipo_inmueble = '".$row_inmueble[0]."'");

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

    if($_SESSION["cod_oficina"] != "")

        $query .= " AND cod_oficina1 = ".$_SESSION["cod_oficina_val"];

    if($_SESSION["id_agente"] != "")

        $query .= " AND cod_agente_captador_oficina1 = ".$_SESSION["id_agente_val"];

	$sql_inmueble = mysql_query("SELECT DISTINCT(i.idp) FROM inmuebles i, pais p WHERE i.status = 'Activa' $query AND i.idp > 0 and i.idp = p.idp order by p.pais");

	$row_inmueble = mysql_num_rows($sql_inmueble);

	if($row_inmueble > 0){ ?>

					<br />

                    <span style="font-weight:bold;font-size:13px;">Departamento:</span>

                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">

                        <tbody>

                        	<tr>

                            	<td>

                                	<form action="" method="get" style="width:186px;font-family:Times New Roman;font-size:16px;">

                                    	<select name="idp" id="idp" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">

                                        	<option value=''>-</option>



<?php

while($row_inmueble = mysql_fetch_array($sql_inmueble)){

	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM inmuebles i, datos f WHERE i.status = 'Activa'  and i.precio_dolares BETWEEN '$desde' and '$hasta' and i.cod_inmueble = f.cod_inmueble $query AND i.idp = ".$row_inmueble[0]);

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

    if($_SESSION["cod_oficina"] != "")

        $query .= " AND cod_oficina1 = ".$_SESSION["cod_oficina_val"];

    if($_SESSION["id_agente"] != "")

        $query .= " AND cod_agente_captador_oficina1 = ".$_SESSION["id_agente_val"];

	$sql_inmueble = mysql_query("SELECT DISTINCT(i.iddep) FROM inmuebles i, dep d WHERE i.status = 'Activa' $query AND i.iddep > 0 and i.iddep=d.iddep order by d.departamento");

	$row_inmueble = mysql_num_rows($sql_inmueble);

	if($row_inmueble > 0){ ?>

					<br />

                    <span style="font-weight:bold;font-size:13px;">Provincia:</span>

                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:10px;">

                        <tbody>

                        	<tr>

                            	<td>

                                	<form action="" method="get" style="width:186px;font-family:Times New Roman;font-size:16px;">

                                    	<select name="iddep" id="iddep" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">

                                        	<option value=''>-</option>

<?php



while($row_inmueble = mysql_fetch_array($sql_inmueble)){

	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM inmuebles i, datos f WHERE i.status = 'Activa'  and i.precio_dolares BETWEEN '$desde' and '$hasta' and i.cod_inmueble = f.cod_inmueble $query AND i.iddep = ".$row_inmueble[0]);

	$row_inmueble_tot = mysql_fetch_array($sql_inmueble_tot);

	$sql_inmueble_des = mysql_query("SELECT * FROM `dep` WHERE `iddep` = ".$row_inmueble[0]);

	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);

	echo "									<option value='".$row_inmueble[0]."'>".utf8_encode(ucwords(strtolower($row_inmueble_des[2])))." (".$row_inmueble_tot[0].")</option>";

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

    if($_SESSION["cod_oficina"] != "")

        $query .= " AND cod_oficina1 = ".$_SESSION["cod_oficina_val"];

    if($_SESSION["id_agente"] != "")

        $query .= " AND cod_agente_captador_oficina1 = ".$_SESSION["id_agente_val"];

	$sql_inmueble = mysql_query("SELECT DISTINCT(i.id_distritos) FROM inmuebles i, distrito d WHERE i.status = 'Activa' $query AND i.id_distritos > 0 and i.id_distritos=d.id_distritos order by d.distrito");

	$row_inmueble = mysql_num_rows($sql_inmueble);

	if($row_inmueble > 0){ ?>

					<br />

                    <span style="font-weight:bold;font-size:13px;">Distrito:</span>

                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">

                        <tbody>

                        	<tr>

                            	<td>

                                	<form action="" method="get" style="width:186px;font-family:Times New Roman;font-size:16px;">

                                    	<select name="dep_iddep" id="dep_iddep" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">

                                        	<option value=''>-</option>



<?php

while($row_inmueble = mysql_fetch_array($sql_inmueble)){

	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM inmuebles i, datos f WHERE i.status = 'Activa'  and i.precio_dolares BETWEEN '$desde' and '$hasta' and i.cod_inmueble = f.cod_inmueble $query AND i.id_distritos = ".$row_inmueble[0]);

	$row_inmueble_tot = mysql_fetch_array($sql_inmueble_tot);

	$sql_inmueble_des = mysql_query("SELECT * FROM `distrito` WHERE `id_distritos` = ".$row_inmueble[0]);

	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);

	echo "									<option value='".$row_inmueble[0]."'>".utf8_encode(ucwords(strtolower($row_inmueble_des[2])))." (".$row_inmueble_tot[0].")</option>";

}

?>

										</select>

                                    </form>

                                </td>

                            </tr>

						</tbody>

					</table>

                    <br>

                <?php



	}



}



/////////////////////////////////////////////////// A G R E G A D  O    F I L T R O    DE      O F I C I N A S   Y   A G E N T E S       //////////////////////////////////////////////////////////////////////////////////

// FILTER BY -> Oficinas



if($_SESSION["cod_oficina"] == ""){

	$query = "";

	if($_SESSION["tipo_operacion"] != "")

		$query .= " AND tipo_operacion = ".$_SESSION["tipo_operacion_val"];

	if($_SESSION["idp"] != "")

		$query .= " AND idp = ".$_SESSION["idp_val"];

	if($_SESSION["iddep"] != "")

		$query .= " AND iddep = ".$_SESSION["iddep_val"];

	if($_SESSION["dep_iddep"] != "")

		$query .= " AND id_distritos = ".$_SESSION["dep_iddep_val"];

	if($_SESSION["tipo_inmueble"] != "")

		$query .= " AND tipo_inmueble = ".$_SESSION["tipo_inmueble_val"];

    if($_SESSION["id_agente"] != "")

        $query .= " AND cod_agente_captador_oficina1 = ".$_SESSION["id_agente_val"];

	$sql_inmueble = mysql_query("SELECT DISTINCT(i.cod_oficina1) FROM inmuebles i, oficinas o WHERE i.status = 'Activa' $query AND i.cod_oficina1 != '' and o.cod_oficina=i.cod_oficina1 order by o.nombre_comercial");

	$row_inmueble = mysql_num_rows($sql_inmueble);

	if($row_inmueble > 0){ ?>



                    <span style="font-weight:bold;font-size:13px;">Oficinas:</span>

                    <table width="100%	" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">

                        <tbody>

                        	<tr>

                            	<td>

                                	<form action="" method="get" style="width:186px;font-family:Times New Roman;font-size:16px;">

                                    	<select name="cod_oficina" id="cod_oficina" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">

                                        	<option value=''>-</option>



<?php

while($row_inmueble = mysql_fetch_array($sql_inmueble)){

	$sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM inmuebles i, datos f WHERE i.status = 'Activa'  and i.precio_dolares BETWEEN '$desde' and '$hasta' and i.cod_inmueble = f.cod_inmueble $query AND i.cod_oficina1 = '".$row_inmueble[0]."'");

	$row_inmueble_tot = mysql_fetch_array($sql_inmueble_tot);

	$sql_inmueble_des = mysql_query("SELECT * FROM `oficinas` WHERE `cod_oficina` = ".$row_inmueble[0]);

	$row_inmueble_des = mysql_fetch_array($sql_inmueble_des);

	echo "									<option value='".$row_inmueble[0]."'>".utf8_encode(ucwords(strtolower($row_inmueble_des[1])))." (".$row_inmueble_tot[0].")</option>";

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





// FILTER BY -> Agentes



if($_SESSION["id_agente"] == ""){

    $query = "";

    if($_SESSION["tipo_operacion"] != "")

        $query .= " AND tipo_operacion = ".$_SESSION["tipo_operacion_val"];

    if($_SESSION["idp"] != "")

        $query .= " AND idp = ".$_SESSION["idp_val"];

    if($_SESSION["iddep"] != "")

        $query .= " AND iddep = ".$_SESSION["iddep_val"];

    if($_SESSION["dep_iddep"] != "")

        $query .= " AND id_distritos = ".$_SESSION["dep_iddep_val"];

	if($_SESSION["cod_oficina"] != "")

        $query .= " AND cod_oficina1 = ".$_SESSION["cod_oficina_val"];

    if($_SESSION["tipo_inmueble"] != "")

        $query .= " AND tipo_inmueble = ".$_SESSION["tipo_inmueble_val"];

    $sql_inmueble = mysql_query("SELECT DISTINCT(i.cod_agente_captador_oficina1) FROM inmuebles i, agentes a WHERE i.status = 'Activa' $query AND i.cod_agente_captador_oficina1 != '' and  i.cod_agente_captador_oficina1=a.id_agente order by a.nombre_agente");

    $row_inmueble = mysql_num_rows($sql_inmueble);

    if($row_inmueble > 0){ ?>

                    <br />

                    <span style="font-weight:bold;font-size:13px;">Agentes:</span>

                    <table width="100%  " border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">

                        <tbody>

                            <tr>

                                <td>

                                    <form action="" method="get" style="width:186px;font-family:Times New Roman;font-size:16px;">

                                        <select name="id_agente" id="id_agente" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px;">

                                            <option value=''>-</option>



<?php

while($row_inmueble = mysql_fetch_array($sql_inmueble)){

    $sql_inmueble_tot = mysql_query("SELECT COUNT(*) FROM inmuebles i, datos f WHERE i.status = 'Activa'  and i.precio_dolares BETWEEN '$desde' and '$hasta' and i.cod_inmueble = f.cod_inmueble $query AND i.cod_agente_captador_oficina1 = '".$row_inmueble[0]."'");

    $row_inmueble_tot = mysql_fetch_array($sql_inmueble_tot);

    $sql_inmueble_des = mysql_query("SELECT * FROM `agentes` WHERE `id_agente` = ".$row_inmueble[0]);

    $row_inmueble_des = mysql_fetch_array($sql_inmueble_des);

    echo "                                  <option value='".$row_inmueble[0]."'>".utf8_encode(ucwords(strtolower($row_inmueble_des[2])))." (".$row_inmueble_tot[0].")</option>";

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





///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>


  			<br>

<span style="font-weight:bold;font-size:13px;">Desde:</span>
	<table width="50%  " border="0"  cellpadding="0" cellspacing="0" style="padding-top:5px;">
		<tbody>
			<tr>
				<td>
					<input type="text" name="desde" id="desde" value="<?=$_GET['desde']?>" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px; background-color:orange;color:black;" readonly="readonly">
				</td>
			</tr>
		</tbody>
	</table>


<br>

<span style="font-weight:bold;font-size:13px;">Hasta:</span>
	<table width="50%  " border="0" cellpadding="0" cellspacing="0" style="padding-top:5px;">
		<tbody>
			<tr>
				<td>
					<input type="text" name="hasta" id="hasta" value="<?=$_GET['hasta']?>" style="border-radius:5px;padding:3px;font-size:14px;color:#333333;width:175px; background-color:orange;color:black;" readonly="readonly">
				</tr></tr>
		</tbody>
	</table>





                <td width="80%">

					<table width="101%" border="0" align="center">

                        <tbody>



<?php

//$desde= $_GET['desde'];
//$hasta= $_GET['hasta'];




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

if($_SESSION["cod_oficina"] != ""){

    $query .= " AND cod_oficina1 = ".$_SESSION["cod_oficina_val"];

}

if($_SESSION["id_agente"] != ""){

    $query .= " AND cod_agente_captador_oficina1 = ".$_SESSION["id_agente_val"];

}

if($desde== "" || $hasta== "" ){
$sql = mysql_query("SELECT * FROM inmuebles i, datos d, oficinas o, agentes a WHERE  i.status = 'Activa' and d.cod_inmueble=i.cod_inmueble and o.cod_oficina = i.cod_oficina1 and a.id_agente = i.cod_agente_captador_oficina1   $query ORDER BY i.fecha_publicacion_A DESC LIMIT ".$_SESSION['inicio'].",".$_SESSION['fin']);
}

if($desde > 0 || $hasta > 0 ){
$sql = mysql_query("SELECT * FROM inmuebles i, datos d, oficinas o, agentes a WHERE  i.status = 'Activa' and d.cod_inmueble=i.cod_inmueble and o.cod_oficina = i.cod_oficina1 and a.id_agente = i.cod_agente_captador_oficina1 and i.precio_dolares BETWEEN '$desde' and '$hasta' $query ORDER BY i.fecha_publicacion_A DESC LIMIT ".$_SESSION['inicio'].",".$_SESSION['fin']);
}


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



$sql_tipo4 = mysql_query("SELECT * FROM `oficinas` WHERE `cod_oficina` = ".$row[29]);

$row_tipo4 = mysql_fetch_array($sql_tipo4);



$sql_tipo69 = mysql_query("SELECT * FROM `agentes` WHERE `id_agente` = ".$row[32]);

$row_tipo69 = mysql_fetch_array($sql_tipo69);



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

		echo "<div><a href='inmuebles_view.php?inm=$cod_inm'><img u='image' alt='inmuebles' title='inmuebles' src='".$row_img[$i]."'></a></div>";

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

                                       	US$ <?=number_format($precio,2)?>

				    <br>S/     <?=number_format($row[86],2)?>

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

	$('form[method="get"]').on('change', function(e){
		e.preventDefault();
		var target = $(e.target),
				newURL = updateURLParameter(window.location.href, target.attr('name'), target.val());
				window.location.href = newURL;
	});

	function updateURLParameter(url, param, paramVal){
    var newAdditionalURL = "";
    var tempArray = url.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";
    if (additionalURL) {
        tempArray = additionalURL.split("&");
        for (i=0; i<tempArray.length; i++){
            if(tempArray[i].split('=')[0] != param){
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }

    var rows_txt = temp + "" + param + "=" + paramVal;
    return baseURL + "?" + newAdditionalURL + rows_txt;
	}

</script>
