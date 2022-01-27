<?php
include("conexion.php");

  $query="UPDATE  tbcliente set userActivity  = 'OffLine'  where Email  = '$EmailCliente'";

  $resultado=$mysqli->query($query);

?>
