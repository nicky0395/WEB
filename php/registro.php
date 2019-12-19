<!DOCTYPE html>

<html>
    <head>
        <meta charset ="Utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body style="text-align: center;">
        <header>
            <div class="contenedor">
                <div id="marca">
                    <h1><span class="resaltado">Estudiantes</span>Registro</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.html">Ingreso</a></li>
                        <li><a href="../php/consultar.php">Consultar</a></li>
                    </ul>
                </nav>
            </div>
        </header>     
        <?php    
            $conexion = mysqli_connect("localhost","root","","dbexamen") or
            die("Problemas con la conexion");

            mysqli_query($conexion, "insert into estudiantes(nrc,cedula,nombre,apellido,edad,genero) 
            values ($_REQUEST[nrc],$_REQUEST[cedula],'$_REQUEST[nombre]','$_REQUEST[apellido]', $_REQUEST[edad], '$_REQUEST[genero]')") or
            die("Problemas en el SELECT" .mysqli_error($conexion));

            mysqli_close($conexion);

            echo "El alumno fue Registrado";
        ?>
    </body>
    <form method="POST" action="../index.html">
        <input class="boton1" type="submit" value="Volver al Registro"><br>
    </form>
</html>
