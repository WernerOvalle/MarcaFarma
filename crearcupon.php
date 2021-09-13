<?php
include ('conexion.php');	
include ('obtenerip.php');	
require 'vendor/autoload.php';




$name = $_POST['name'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$ip = getRealIP();


/*$resultado=mysqli_query($conexion, "Select * from cupones");
while( $item=mysqli_fetch_assoc($resultado)){
//var_dump( $item);// muestra contenido y tipo de variable
echo $item['nombre'].'<br/>';

create table cupones_canjeados(
id_cupon int not null ,
fecha  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)

*/

$resultado=mysqli_query($conexion, "Select * from cupones where ip = '$ip' or email='$email' ");


if(mysqli_fetch_row($resultado)== 0) {
    $sql = "INSERT INTO cupones(nombre,telfono,email,ip)VALUES('$name', $telefono, '$email', '$ip'); ";		
    $insercion=mysqli_query($conexion, $sql);
    if($insercion) {
        echo "<h1> Cupon Generado </h1>" ;
        echo "<meta http-equiv='refresh' content='0; url=cupon.php'>" ;

    }else{
        echo "<H1> Error </H1>" .mysqli_connect_error();;
    }
}else{
    echo "<h1> Cupon ya Generado </h1>" ;
    

}


?>


