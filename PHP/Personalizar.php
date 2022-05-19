<?php

include_once('ConexionBD.php');

//recibo los datos del formulario de registro 
$prenda=$_POST['prenda'];
$color=$_POST['color'];
$talla=$_POST['talla'];
$celular=$_POST['celular'];
$subirImagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];


$conectar = conn(); 
$sql = "INSERT INTO prenda (tipo, talla, color, estampado, nropedido)
values ('$prenda','$talla', '$color' ,'$subirImagen', '$celular')";

$sql1 =  "INSERT INTO pedido (NoPedido, Descripcion, imagen, fecha)
values ('$celular','$descripcion', '$subirImagen', '$fecha')";

$resul = mysqli_query($conectar, $sql) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);

$resul1 = mysqli_query($conectar, $sql1) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";
echo "$sql1"; 



?>