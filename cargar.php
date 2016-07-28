<?php
	include ("../enlaces/conexion.php");
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");


	$sql = "select nivel, status from usuario where nick = '$usuario'";
	$cap = mysql_query($sql) ;
	//$r   = mysql_fetch_array($cap);	
		while ($r=mysql_fetch_array($cap))
//abre while 		
			if( $usuario == false or ($r["nivel"]==3) or ($r["nivel"]==2) or ($r["status"]=='I') )
				{
					header("Location: usuario.php");
				}
			else
				{
?>


<?php

$cod_inmueble  = $_POST['cod_inmueble'];
$cod_inmueble_get  = $_GET['cod_inmueble'];



//para ver si el registro existe
if ($cod_inmueble > 0)

	{

	$check = mysql_query("SELECT * FROM inmuebles WHERE cod_inmueble=$cod_inmueble");

	$num_rows = mysql_num_rows($check);

if ($num_rows == 0)

	{
		//me imprime que el registro no existe
			echo "<script>alert('El Inmueble al que desea agregar fotos no exite')</script>";

		//me devuelve a busca_act.php

			echo "<script>window.location='buscar_cargar.php'</script>";

	}





else

{

	$sql = "SELECT * FROM inmuebles WHERE cod_inmueble=$cod_inmueble";

	$cap = mysql_query($sql) or die ("Registro no consultado");

	$r   = mysql_fetch_array($cap);

}

	}

else

	{

	$check = mysql_query("SELECT * FROM inmuebles WHERE cod_inmueble=$cod_inmueble_get");

	$num_rows = mysql_num_rows($check);

	

if ($num_rows == 0)



	{

		//me imprime que el registro no existe

			echo "<script>alert('El Inmueble al que desea agregar fotos no exite')</script>";

		//me devuelve a busca_act.php

			echo "<script>window.location='busca_inmueble.php'</script>";



	}





else

{

	$sql = "SELECT * FROM inmuebles WHERE cod_inmueble=$cod_inmueble_get";

	$cap = mysql_query($sql) or die ("Registro no consultado");

	$r   = mysql_fetch_array($cap);

}


}



	
?>

<html>

<style type="text/css">

<!--

.Estilo1 {color: #FF3300}
.Estilo5 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo15 {color: #009900}
.Estilo6 {color: #FF3300; font-weight: bold; }

-->

</style>




<style>

body {

background:transparent url('iconos/fotosistema1.jpg')no-repeat  center center fixed;

-webkit-background-size: cover;

-moz-background-size: cover;

-o-background-size: cover;

background-size: cover;

margin:0;

font-family: 'Ubuntu', sans-serif;

}

.title {

 background:#6E96E6;
  margin-top: 0px;
  border-bottom:2px solid #fff;
  border-top:2px solid #fff;
  text-align:center;
  opacity:0.7;
  width:20%;
  color:#fff;
}

</style>  </tr>


<head>
	<link rel="shortcut icon" href="icono.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
	<title>Cargar Fotos</title>

</head>

<table width="1300" border="0" align="center" cellpadding="0" cellspacing="0">
	<br>
	<td align="right" >
		<div class="title">
			<span class="Estilo3">Usuario:
			</span> <?php echo "<font color=\"#000000\">$usuario</font>";?>
		</div>
		</td>
</table>

<form id="form1" name="form1" method="post" action="recibir.php" enctype="multipart/form-data">
      


<table width="687" height="35" align="center" border=1 bordercolor=#33FF00>

	<tr>
		<td width="679" colspan="2" align="center" bgcolor="#CCCCCC">
			<p class="Estilo1"> <FONT SIZE=5>Registrar Fotos del Inmueble</FONT></p>
	   	</td>
	</tr>   


		<tr>
		<tr>
			<td align=CENTER bgcolor="#000000" colspan="2"><span class="Estilo5">Datos de la Propiedad </span></td>
        	</tr>
		
		<tr>
          		<td height="64" bgcolor="#CCCCCC"><p align="center"><strong><span class="Estilo1"><span class="Estilo15">(*)</span> C&oacute;digo del Inmueble:</span></strong></td>
          
			<td bgcolor="#CCCCCC"><input type="text" name="cod_inmueble" id="cod_inmueble" value="<?=$r['cod_inmueble'];?>" readonly="readonly"/>
		</tr>							 

		<tr>
			<td align=CENTER bgcolor="#000000" colspan="2"><span class="Estilo5">Fotos de la Propiedad </span></td>
		</tr>

		<tr>
			<td width="237" height="60" bgcolor="#CCCCCC"><p align="center" class="Estilo6">Foto N° 1 y Portada:</td>
			<td width="428" bgcolor="#CCCCCC"><input type="file" name="imagen1"/></td>
		</tr>

		<tr>
			<td height="64" bgcolor="#CCCCCC"><p align="center" class="Estilo6">Foto N° 2:</td>
			<td bgcolor="#CCCCCC"><input type="file" name="imagen2"/></td>
		</tr>

		<tr>
			<td height="64" bgcolor="#CCCCCC"><p align="center"><strong><span class="Estilo1">Foto N° 3:</span></strong></td>
          		<td bgcolor="#CCCCCC"><input type="file" name="imagen3"/></td>
		</tr>
	
		<tr>
			<td height="64" bgcolor="#CCCCCC"><p align="center"><strong><span class="Estilo1">Foto N° 4:</span></strong></td>
			<td bgcolor="#CCCCCC"><input type="file" name="imagen4"/></td>
		</tr>
        
		<tr>
			<td height="64" bgcolor="#CCCCCC"><p align="center"><strong><span class="Estilo1">Foto N° 5:</span></strong></td>
          		<td bgcolor="#CCCCCC"><input type="file" name="imagen5"/></td>
		</tr>
        
		<tr>
			<td height="64" bgcolor="#CCCCCC"><p align="center"><strong><span class="Estilo1">Foto N° 6:</span></strong></td>
			<td bgcolor="#CCCCCC"><input type="file" name="imagen6"/></td>
		</tr>
	
		<tr>
			<td height="64" bgcolor="#CCCCCC"><p align="center"><strong><span class="Estilo1">Foto N° 7:</span></strong></td>
			<td bgcolor="#CCCCCC"><input type="file" name="imagen7"/></td>

		</tr>
		
		<tr>
			<td height="64" bgcolor="#CCCCCC"><p align="center"><strong><span class="Estilo1">Foto N° 8: </span></strong></td>
			<td bgcolor="#CCCCCC"><input type="file" name="imagen8"/></td>
		</tr>
        
		<tr>
			<td height="64" bgcolor="#CCCCCC"><p align="center"><strong><span class="Estilo1">Foto N° 9:</span></strong></td>
			<td bgcolor="#CCCCCC"><input type="file" name="imagen9"/></td>
		</tr>
	
		<tr>
			<td height="64" bgcolor="#CCCCCC"><p align="center"><strong><span class="Estilo1">Foto N° 10:</span></strong></td>
			<td bgcolor="#CCCCCC"><input type="file" name="imagen10"/></td>
		</tr>

		<tr>
			<td align=CENTER bgcolor="#000000" colspan="2"><span class="Estilo15"><strong>(*) Campos Obligatorios,  Eliga una Opci&oacute;n</strong> </span></td>
		</tr>

		<tr>
			<td height="43" colspan="2" align="center">
				<label>
					<input type="submit" name="button" class="Estilo1" id="button" value="Guardar" >
				</label>     
			</td>
		</tr>
        
		<tr>
          		<td height="40" colspan="2"><p align="center"><a href="../menu.php"><img src="iconos/66.png" alt="atras" width="40" height="40" border="0" longdesc="/menu.php"></a></p>
              		<p align="center"><strong>Ir al Men&uacute;</strong></p></td>
		</tr>
        
		<tr>
			<td align=CENTER bgcolor="#000000" colspan="2"><strong><font color="#FFFFFF">www.inmobiliariaabcperu.com</font></strong> </td>
		</tr>
</table>
</form>
</html>

<?php

}

?>
