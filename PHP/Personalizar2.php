<?php

include_once('ConexionBD.php');

//recibo los datos del formulario de registro 

$subirImagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];
$celular=$_POST['celular'];

$conectar = conn(); 
$sql =  "INSERT INTO pedido (cliente, Descripcion, imagen, fecha)
values ('$celular','$descripcion', '$subirImagen', '$fecha')";

$resul = mysqli_query($conectar, $sql) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);
echo "$sql";



?>