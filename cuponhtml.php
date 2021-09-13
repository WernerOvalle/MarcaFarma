<?PHP 

include ('conexion.php');	
$resultado=mysqli_query($conexion, "Select * from cupones ORDER BY fecha desc LIMIT 1");
while( $item=mysqli_fetch_assoc($resultado)){
//var_dump( $item);// muestra contenido y tipo de variable
echo ' <link rel="stylesheet" type="text/css" href="css/style.css"/>';
echo "<div class='titulo'> Mercafarma </div><br/>";
echo "<h1 align='center'>Cupon No. ". $item['id_cupon'].'</h1>';

}
?>

