<?php

?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Cupones</title>
        <!--Estilos CSS-->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"> </script>
        <script type="text/javascript" src="js/main.js"> </script>
     
    </head>
    <body>
        <section id="global">
            <!-- CABECERA-->
            <HEADER>
                <DIV ID="logo">
                    Mercafarma
                </DIV>
                <div id="clearfix"></div>
                <nav id="menu">
                    
                    <ul >
                            <li> <a href="#">Obtener Cupon</a></li>
                            <li> <a href="canjear.php">Canjear Cupon</a></li>
                    </ul>
                </nav>
            </HEADER>
    <section >
    <div id="div-formulario">
        <h2>Llene el Formulario</h2><br>
        <form action="crearcupon.php" method="POST" id="formulario">
           <label for="name">Nombre: </label>  <input type="text" name="name" placeholder="Escribe tu nombre" required/> <br>
           <label>Telefono: </label> <input type="tel" placeholder="Escribe tu telefono" name="telefono" required/> <br>
           <label>Email: </label>   <input type="email" placeholder="Escribe tu email" name="email"/>  <br>
       
           <img id="cargando"  src="img/load.gif"/>
    </div>
   <aside >
       <input id="descargar"  class="descargar"  type="submit" value="Descargar Cupon"/>  </form>
      
    </aside>
    </section>
        </section>
        <footer>
            Realizado por Werner Ovalle &copy;
        </footer>
    </body>
</html>