<?php
include("conexion.php");

  $query="UPDATE  tbcliente set 	userActivity  = 'OnLine'  where 	Email  = '$EmailCliente'";

  $resultado=$mysqli->query($query);

?>
