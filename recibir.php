<?php
    include ("../enlaces/conexion.php");
	    require_once("../sesion.class.php");
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");

$sql = "select nivel, status from usuario where nick = '$usuario'";
		$cap = mysql_query($sql) ;
		//$r   = mysql_fetch_array($cap);	
 				
while ($r=mysql_fetch_array($cap))
 		


	if( $usuario == false or ($r["nivel"]==3) or ($r["nivel"]==2) or ($r["status"]=='I') )
	{
		header("Location: menu.php");
	}
	else
	{
	$cod_inmueble  = $_POST['cod_inmueble'];


/*
print_r($_FILES);

echo'<br>';

echo 'nombre de la imagen: ';

print_r($_FILES['imagen']['name']);



echo'<br>';

echo 'tipo de la imagen: ';

print_r($_FILES['imagen']['type']);



echo'<br>';

echo 'ruta temporal de la imagen: ';

print_r($_FILES['imagen']['tmp_name']);

*/ 



$conexion=mysql_connect('localhost','inmbilip','JEPERU011234') or die('No hay conexión a la base de datos');

$db=mysql_select_db('inmbilip_abcperu',$conexion)or die('no existe la base de datos.');



/*

$conexion=mysql_connect('localhost','root','1234') or die('No hay conexión a la base de datos');

$db=mysql_select_db('abcperu',$conexion)or die('no existe la base de datos.');

*/




$cod_inmueble  = $_POST['cod_inmueble'];
$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen1']['tmp_name'];

$nombreImagen1=$_FILES['imagen1']['name'];


if ($nombreImagen1 == null)
	{
		$rutaDestino1=$rutaEnServidor.'/'.$nombreImagen1;
		move_uploaded_file($rutaTemporal,$rutaDestino1);
	}

else
	{	
		$rutaDestino1=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'1'.'-'.$nombreImagen1;
		move_uploaded_file($rutaTemporal,$rutaDestino1);
	}

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen2']['tmp_name'];
$nombreImagen2=$_FILES['imagen2']['name'];


if ($nombreImagen2 == null)
	{
		$rutaDestino2=$rutaEnServidor.'/'.$nombreImagen2;
		move_uploaded_file($rutaTemporal,$rutaDestino2);
	}

else

	{
		$rutaDestino2=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'2'.'-'.$nombreImagen2;
		move_uploaded_file($rutaTemporal,$rutaDestino2);
	}


$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen3']['tmp_name'];
$nombreImagen3=$_FILES['imagen3']['name'];

if ($nombreImagen3 == null)
	{
		$rutaDestino3=$rutaEnServidor.'/'.$nombreImagen3;
		move_uploaded_file($rutaTemporal,$rutaDestino3);
	}

else
	{
		$rutaDestino3=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'3'.'-'.$nombreImagen3;
		move_uploaded_file($rutaTemporal,$rutaDestino3);
	}


$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen4']['tmp_name'];
$nombreImagen4=$_FILES['imagen4']['name'];

if ($nombreImagen4 == null)
	{
		$rutaDestino4=$rutaEnServidor.'/'.$nombreImagen4;
		move_uploaded_file($rutaTemporal,$rutaDestino4);
	}

else
	{
		$rutaDestino4=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'4'.'-'.$nombreImagen4;
		move_uploaded_file($rutaTemporal,$rutaDestino4);
	}



$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen5']['tmp_name'];
$nombreImagen5=$_FILES['imagen5']['name'];

if ($nombreImagen5 == null)
	{
		$rutaDestino5=$rutaEnServidor.'/'.$nombreImagen5;
		move_uploaded_file($rutaTemporal,$rutaDestino5);
	}

else
	{
		$rutaDestino5=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'5'.'-'.$nombreImagen5;
		move_uploaded_file($rutaTemporal,$rutaDestino5);
	}



$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen6']['tmp_name'];
$nombreImagen6=$_FILES['imagen6']['name'];


if ($nombreImagen6 == null)
	{
		$rutaDestino6=$rutaEnServidor.'/'.$nombreImagen6;
		move_uploaded_file($rutaTemporal,$rutaDestino6);
	}

else

	{
		$rutaDestino6=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'6'.'-'.$nombreImagen6;
		move_uploaded_file($rutaTemporal,$rutaDestino6);
	}


$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen7']['tmp_name'];
$nombreImagen7=$_FILES['imagen7']['name'];

if ($nombreImagen7 == null)
	{
		$rutaDestino7=$rutaEnServidor.'/'.$nombreImagen7;
		move_uploaded_file($rutaTemporal,$rutaDestino7);
	}

else
	{
		$rutaDestino7=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'7'.'-'.$nombreImagen7;
		move_uploaded_file($rutaTemporal,$rutaDestino7);
	}


$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen8']['tmp_name'];
$nombreImagen8=$_FILES['imagen8']['name'];

if ($nombreImagen8 == null)
	{
		$rutaDestino8=$rutaEnServidor.'/'.$nombreImagen8;
		move_uploaded_file($rutaTemporal,$rutaDestino8);
	}

else
	{
		$rutaDestino8=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'8'.'-'.$nombreImagen8;
		move_uploaded_file($rutaTemporal,$rutaDestino8);
	}


$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen9']['tmp_name'];
$nombreImagen9=$_FILES['imagen9']['name'];

if ($nombreImagen9 == null)
	{
		$rutaDestino9=$rutaEnServidor.'/'.$nombreImagen9;
		move_uploaded_file($rutaTemporal,$rutaDestino9);
	}

else
	{
		$rutaDestino9=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'9'.'-'.$nombreImagen9;
		move_uploaded_file($rutaTemporal,$rutaDestino9);
	}


$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen10']['tmp_name'];
$nombreImagen10=$_FILES['imagen10']['name'];

if ($nombreImagen10 == null)
	{
		$rutaDestino10=$rutaEnServidor.'/'.$nombreImagen10;
		move_uploaded_file($rutaTemporal,$rutaDestino10);
	}

else
	{
		$rutaDestino10=$rutaEnServidor.'/'.$_POST['cod_inmueble'].'-'.'10'.'-'.$nombreImagen10;
		move_uploaded_file($rutaTemporal,$rutaDestino10);
	}









$cod_inmueble=$_POST['cod_inmueble'];

//verifico si existe el registro

$check = mysql_query("SELECT * FROM datos WHERE cod_inmueble=$cod_inmueble");

$num_rows = mysql_num_rows($check);



//si existe mando el mensaje por el alert

if ($num_rows > 0)

	{

		 	echo "<script>alert('Ya esta asignado el codigo de inmueble')</script>";

			echo "<script>window.location='cargar.php'</script>";



	}

// si no existe inserto el registro

else

{

$sql="INSERT INTO datos (ruta, foto2, foto3, foto4, foto5, foto6, foto7, foto8, foto9, foto10, cod_inmueble) values('".$rutaDestino1."','".$rutaDestino2."','".$rutaDestino3."','".$rutaDestino4."','".$rutaDestino5."','".$rutaDestino6."','".$rutaDestino7."','".$rutaDestino8."','".$rutaDestino9."','".$rutaDestino10."','".$cod_inmueble."')";

$res=mysql_query($sql,$conexion);



//if ($res){

//	echo 'inserción con exito';

//}else{

//    echo 'no se puedo insertar';

//}

}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Registro Guardado</title>

<style type="text/css">

<!--

.Estilo1 {color: #FF3300}

-->
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

</style>

</head>
	<table width="1115" height="558" border="0" align="center">

  <tr>

    <td width="1115" height="249">

 <div class="title">
  <h3><span class="Estilo3">Bienvenido :</span> <?php echo "<font color=\"#000000\">$usuario</font>";?>
	</div>


<table  border="3" align="center" cellpadding="0" cellspacing="10" bordercolor="#00FF00" bgcolor="#FFFFFF">



<tr>

     <td colspan="2" align="center" bgcolor="#CCCCCC">

	   <span class="Estilo1" > <FONT SIZE=5>REGISTRO GUARDADO SATISFACTORIAMENTE!!!</FONT> </span>	</td>

</tr>



<tr>

	 <td   ALIGN=CENTER BGCOLOR="#000000" colspan="2"> <strong><font color="#FFFFFF">Eliga una Opcion</font></strong> </td>

</tr>



<tr>

	<td height="43" colspan="2" align="center">

<label>

	<p><a href="/formulario_registro.php">Incluir un Nuevo Inmueble</a></p>
	<p><a href="/formulario_registro.php"><img src="iconos/guardar.jpg" alt="atras" width="40" height="40" border="0" longdesc="iconos/guardar.jpg" /></a></p>


	<p><a href="buscar_cargar.php">Agregar Fotos a un Inmueble</a></p>
	<p><a href="buscar_cargar.php"><img src="iconos/foto.jpg" alt="atras" width="40" height="40" border="0" longdesc="iconos/foto.jpg"></a></p>

	<p><a href="/busca_inmueble.php">Actualizar datos de un Inmueble</a></p>
	<p><a href="/busca_inmueble.php"><img src="iconos/actualizar.jpg" alt="atras" width="40" height="40" border="0" longdesc="iconos/actualizar.jpg"></a></p>
	

	<p><a href="buscar_inmueble_actualizar.php">Actualizar fotos de un Inmueble</a></p>
	<p><a href="buscar_inmueble_actualizar.php"><img src="iconos/actualizar.jpg" alt="atras" width="40" height="40" border="0" longdesc="iconos/actualizar.jpg"></a></p>

	<p><a href="../menu.php">Ir al Menú</a></p>

	<p><a href="../menu.php"><img src="iconos/66.png" alt="atras" width="40" height="40" border="0" longdesc="iconos/66.png"></a></p>



</label>

	</tr>

<tr>

 <td   ALIGN=CENTER BGCOLOR="#000000" colspan="2"> <strong><font color="#FFFFFF">www.inmobiliariaabcperu.com</font></strong> </td>

</tr>

</table>

</html>

	<?php
	}
?>