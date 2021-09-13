<?php
$conexion= mysqli_connect("", "", "", "", "3306");
if(mysqli_connect_errno()) {
    echo " Conexion fallida".mysqli_connect_error();
  
}
mysqli_query($conexion, "SET NAMES 'utf-8'");
?>