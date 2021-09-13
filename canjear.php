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
                        <li> <a href="index.php">Obtener Cupon</a></li>
                        <li> <a href="#">Canjear Cupon</a></li>
                        
                    </ul>
                </nav>
            </HEADER>
    <section >
    <div id="div-formulario">
        <h2>Llene el Formulario</h2><br>
        <form action="canjearcupon.php" method="POST" id="formulario2">
           <label for="id_cupon">Codigo: </label>  <input type="text" name="id_cupon" placeholder="Escribe el codigo del cupon"/> <br> 
    </div>
   <aside >
       <input id="canjear" class="descargar" type="submit" value="Canjear"/>  </form>
    </aside>
    </section>
        </section>
        <footer>
            Realizado por Werner Ovalle &copy;
        </footer>
    </body>
</html>