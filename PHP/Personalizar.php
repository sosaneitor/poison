<?php

include_once('ConexionBD.php');

session_start();
//recibo los datos del formulario de registro 
$prenda=$_POST['prenda'];
$color=$_POST['color'];
$talla=$_POST['talla'];
$celular=$_SESSION["celular"];
$subirImagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$fecha=date('Y-m-d H:i:s');
$Nropedido= bin2hex(random_bytes(5));

$conectar = conn(); 
$sql = "INSERT INTO predas (CelularC, tipo, Talla, Color, Descripcion, Imagen, Fecha, NoPedido)
values ('$celular','$prenda', '$talla' ,'$color','$descripcion','$subirImagen','$fecha', '$Nropedido')";


$resul = mysqli_query($conectar, $sql) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);


$sql1 = "SELECT NoPedido FROM `predas` WHERE CelularC=3212210569 and Fecha= '$fecha' ORDER BY Fecha asc"; 

$arco = mysqli_query($conectar, $sql1);
$rows=mysqli_fetch_array($arco);
$Nropedido1=$rows[0];
$_SESSION["Nropedido"]= $Nropedido1;


header("location: checkout.php")



?>