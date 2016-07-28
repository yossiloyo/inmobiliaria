<?php

$desde= $_GET['desde'];
$hasta= $_GET['hasta'];

if($desde== "" || $hasta== "" ){
$sql = mysql_query("SELECT * FROM `inmuebles` WHERE  status = 'Activa'  $query ORDER BY CAST(`cod_inmueble` AS decimal) DESC");
}
if($desde > 0 || $hasta > 0 ){
$sql = mysql_query("SELECT * FROM `inmuebles` WHERE  status = 'Activa'  and precio_dolares BETWEEN '$desde' and '$hasta'  $query ORDER BY CAST(`cod_inmueble` AS decimal) DESC");
}

$num = mysql_num_rows($sql);



$page = $num/16;

$cont = 1;

$sum  = 0;



while($page>=0){

	

	echo "<td><a id='page$cont' class='page' href='".$_SERVER['PHP_SELF']."?inicio=$sum&fin=16&page=$cont'>$cont</a></td>";

	$page--;

	$cont++;

	$sum += 16;

	

}



$page = $_SESSION['page'];



?>

