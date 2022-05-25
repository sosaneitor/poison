<?php

include_once('ConexionBD.php');




session_start();

$nropedido=$_SESSION["Nropedido"];
$celular=$_SESSION["celular"];
$departamento=$_POST["departamento"];
$ciudad=$_POST["ciudad"];
$direccion=$_POST["direccion"];


$conectar = conn(); 
$sql = "INSERT INTO direccion (ciudad, departamento, direccion, Nrocliente, pedido)
values ('$ciudad','$departamento', '$direccion' ,'$celular', '$nropedido')";


$resul = mysqli_query($conectar, $sql) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);

header("location: payment.php")



?>