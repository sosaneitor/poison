<?php

include_once('ConexionBD.php');

$correo=$_POST["correo"];
$clave=$_POST["clave"];

$conectar = conn(); 
$sql = "SELECT * FROM cliente WHERE correo='".$correo."' and clave ='".$clave."'";
$nombre = "SELECT nombre from cliente WHERE correo='".$correo."'" ;
$Celular = "SELECT celular from cliente WHERE correo='".$correo."'" ;

$resul = mysqli_query($conectar, $sql) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);
$nr= mysqli_num_rows($resul);
$resultado=mysqli_query($conectar, $nombre);
$numeroo=mysqli_query($conectar, $Celular);

if($nr == 1) {
  $rows=mysqli_fetch_array($resultado);
  $resultadoo=$rows[0];
  $rows1=mysqli_fetch_array($numeroo);
  $numero=$rows1[0];
  session_start();
  $_SESSION["celular"]= $numero;
  $_SESSION["Nombre"]= $resultadoo;
  
  header("location: http://localhost/finalweb/PHP/sesion.php");

  

}
else if ($nr == 0){
    echo "clave o contraseña no coinciden" ; 
}


?>