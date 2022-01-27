<?php
$host="localhost";
$usuario="nahunmez_Meza92";
$clave ="coldplay1992";
$bd  ="nahunmez_Tienda2";
$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if ($conexion) {
	echo "Conectado";
}else {
	echo "No se pudo conectar";
}


?>
