<?php
include("ConexLog.php");
session_start();
$EmailCliente =$_POST['EmailCliente'];
$userPass  =$_POST['userPass'];
$query  = "SELECT    userTipo,COUNT(*) AS verificaUser from tbcliente  where Email =  '$EmailCliente' and 	clientePass =  '$userPass'";

$resultado = mysqli_query($conexion,$query);
$array =  mysqli_fetch_array($resultado);

if ($array['verificaUser']>0   && $array['userTipo'] == 'Admin' ) {
	$_SESSION['EmailCliente'] = $EmailCliente;
include("UserssasaOn.php");
    header("location:https://nahunmeza.com/ExComp/admin");
}
if ($array['verificaUser']>0   && $array['userTipo'] == 'Cliente' ) {
	include("UserOn.php");
	$_SESSION['EmailCliente'] = $EmailCliente;
    header("location:https://nahunmeza.com/ExComp/home.php");
}

else {
	echo "Usuario o Password Incorrectos.........";
}

 ?>
