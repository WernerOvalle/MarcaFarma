<?php   

include ('conexion.php');	
include ('obtenerip.php');	

$id = $_POST['id_cupon'];

$resultado1=mysqli_query($conexion, "Select * from cupones where id_cupon = '$id' ");


if(mysqli_fetch_row($resultado1)> 0) {

$resultado2=mysqli_query($conexion, "Select * from cupones_canjeados where id_cupon = '$id' ");
if(mysqli_fetch_row($resultado2)== 0) {
    $sql = "INSERT INTO cupones_canjeados(id_cupon)VALUES('$id'); ";		
    $insercion=mysqli_query($conexion, $sql);
    if($insercion) {
        echo "<H1> Cupon Canjeado</H1>" ;
    }else{
        echo "<H1> Error </H1>" .mysqli_connect_error();;
    }
}else{
    echo "<H1> Cupon ya ha sido canjeado</H1>" ;
}
}else {
    echo "<H1> Codigo de Cupon incorrecto</H1>" ;
}
?>