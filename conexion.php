<?php
$mysqli = new mysqli("localhost", "nahun", "coldplay1992", "nahunmez_Tienda2" , 3306);
if (mysqli_connect_errno()) {
	echo "Conexion Fallida : " , mysqli_connect_errno();
exit();
}




 ?>
