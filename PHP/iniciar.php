<?php

include_once('ConexionBD.php');

$correo=$_POST["correo"];
$clave=$_POST["clave"];

$conectar = conn(); 
$sql = "SELECT * FROM cliente WHERE correo='".$correo."' and clave ='".$clave."'";
$resul = mysqli_query($conectar, $sql) or
trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar), E_USER_ERROR);


$nr= mysqli_num_rows($resul);

if($nr == 1) {

  echo"inicio con exito" ; 
    

}
else if ($nr == 0){
    echo"correo o clave no coinciden" ; 
}


?>