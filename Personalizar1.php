<?php

include_once('PHP/ConexionBD.php');


//recibo los datos del formulario de registro 
$prenda=$_POST['prenda'];
$color=$_POST['color'];
$talla=$_POST['talla'];
$celular=$_POST['celular'];
$subirImagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];
$Nropedido= bin2hex(random_bytes(5));

$conectar = conn(); 
$sql = "INSERT INTO predas (CelularC, tipo, Talla, Color, Descripcion, Imagen, Fecha, NoPedido)
values ('$celular','$prenda', '$talla' ,'$color','$descripcion','$subirImagen','$fecha', '$Nropedido')";


$resul = mysqli_query($conectar, $sql) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);

header("location: payment.html");



?>