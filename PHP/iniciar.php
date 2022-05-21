<?php

include_once('ConexionBD.php');

$correo=$_POST["correo"];
$clave=$_POST["clave"];

$conectar = conn(); 
$sql = "SELECT * FROM cliente WHERE correo='".$correo."' and clave ='".$clave."'";
$nombre = "SELECT nombre from cliente WHERE correo='".$correo."'" ;
$resul = mysqli_query($conectar, $sql) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);
$nr= mysqli_num_rows($resul);
$resultado=mysqli_query($conectar, $nombre);

if($nr == 1) {
  $rows=mysqli_fetch_array($resultado);
  $resultadoo=$rows[0];
  session_start();
  
  $_SESSION["Nombre"]= $resultadoo;
  echo "la variable de sesion tiene guardado " .$_SESSION["Nombre"];

  

}
else if ($nr == 0){
    echo"correo o clave no coinciden" ; 
}


?>