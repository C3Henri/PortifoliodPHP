<?php 

$Ini = $_POST["DataIni"];
echo "<h1>Data inicial escolhida foi: $Ini</h1><br>";

$Fin = $_POST["DataFin"];
echo "<h1>Data final escolhida foi: $Fin</h1><br>";


if ($Ini <= $Fin) {
	$Data = new DateTime($Ini);
	for ($Ini=$Ini; $Ini < $Fin; $Ini++) { 
	$datat = $Data->modify('+1 day');
	echo $datat->format('d/m/Y');
	echo "<br>";
	}

}

else {
	$Data = new DateTime($Fin);
	for ($Ini=$Ini; $Ini > $Fin; $Fin++) { 
	$datat = $Data->modify('+1 day');
	echo $datat->format('d/m/Y');
	echo "<br>";
	}
}

?>