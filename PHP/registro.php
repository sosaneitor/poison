<?php

include_once('ConexionBD.php');

//recibo los datos del formulario de registro 
$nombre=$_POST['nombre'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];


$conectar = conn(); 
$sql = "INSERT INTO cliente (celular, nombre, correo, clave)
values ('$celular','$nombre', '$correo', '$clave')";
$resul = mysqli_query($conectar, $sql) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);
echo "$sql";


?>
