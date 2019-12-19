<html>
    <head>
        <meta charset ="Utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="../js/validar.js"></script>
    </head>
    <body>
        <header>
            <div class="contenedor">
                <div id="marca">
                    <h1><span class="resaltado">Estudiantes</span>Registro</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.html">Ingreso</a></li>
                        <li class="actual"><a href="consultar.php">Consultas</a></li>
                    </ul>
                </nav>
            </div>
        </header> 
        <?php
            $conexion = mysqli_connect("localhost","root","","dbexamen") or
            die("Problemas con la conexion");

            $registros = mysqli_query($conexion, "SELECT cedula, nombre, apellido, edad, genero FROM estudiantes where nrc = '$_REQUEST[nrc]'") or
            die("Problemas en el SELECT" .mysqli_error($conexion));
            
            while ($reg=$registros->fetch_array())
            {
                echo "Cedula: ".$reg['cedula']."<br>";
                echo "Nombre: ".$reg['nombre']."<br>";
                echo "Apellido: ".$reg['apellido']."<br>";
                echo "Edad: ".$reg['edad']."<br>";
                echo "Género: ".$reg['genero']."<br><br>";
            }	


            mysqli_close($conexion);

        ?>
        <form method="POST" action="consultar.php">
            <input class="boton1" type="submit" value="Volver al Consultar"><br>
        </form>
    </body>
</html>