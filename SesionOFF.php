<?php
session_start();
 $EmailCliente =  $_SESSION['EmailCliente'];
include("UserOff.php");
session_destroy();

header("location:https://nahunmeza.com/ExComp/index.php");

exit();

?>
