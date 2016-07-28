<?php

$sql = mysql_query("SELECT * FROM `inmuebles` WHERE  status = 'Activa' $query ORDER BY CAST(`cod_inmueble` AS decimal) DESC");
$num = mysql_num_rows($sql);

$page = $num/16;
$cont = 1;
$sum  = 0;

while($page>=0){
	
	echo "<td><a class='page' href='".$_SERVER['PHP_SELF']."?inicio=$sum&fin=".($sum+16)."'>$cont</a></td>";
	$page--;
	$cont++;
	$sum += 16;
	
}

?>