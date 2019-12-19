<!DOCTYPE html>

<html>
    <head>
        <meta charset ="Utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="../js/validar.js"></script>
        <script src="../js/validarCedula.js"></script>
        <script src="../js/validarNrc.js"></script>
        <script src="../js/validarApellido.js"></script>
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
            
        <section>
            <form action = "consultaCedula.php" method = "POST" onsubmit="return validarCedula()">
                Cedula:
                <input type = "text" name = "cedula">
                <br>
                <input type="submit" value = "BUSCAR">
            </form>
            <form action = "consultaNrc.php" method = "POST" onsubmit="return validarNrc()">
                NRC:
                <input type = "text" name = "nrc">
                <br>
                <input type="submit" value = "BUSCAR">
            </form>
            <form action = "consultaApellido.php" method = "POST" onsubmit="return validarApellido()">
                Apellido:
                <input type = "text" name = "apellido">
                <br>
                <input type="submit" value = "BUSCAR">
            </form>
        </section>
    </body>
</html>