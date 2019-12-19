</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PROYECTO SEGUNDO PARCIAL</title>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1">

        <link href="../css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <header class="header">
            <div class="container logo-nav-container">
                <a href="#" class="logo">
                    <img src="../img/logo.png" width="200px">
                </a>
                <nav class="navegation">
                    <ul class="menu">
                        <li><a href="../index.html">INICIO</a></li>
                        <li><a href="../html/quienessomos.html">QUIÉNES SOMOS?</a></li>
                        <li><a href="">SERVICIOS</a>
                            <ul class="submenu">
                                <li><a href="../html/servicioProfesores.html">Profesores</a></li>
                                <li><a href="../html/servicioAlumno.html">Alumnos</a></li>
                                <li><a href="../html/servicioModulos.html">Módulos</a></li>
                            </ul>
                        </li>
                        <li><a href="../html/contactos.html">CONTÁCTENOS</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <?php
        $ar=fopen("datos.txt","a") or die("Problemas en la creacion");
        fputs($ar, $_REQUEST['nombre']);
        fputs($ar, "\n");
        fputs($ar, $_REQUEST['email']);
        fputs($ar, "\n");
        fputs($ar, $_REQUEST['asunto']);
        fputs($ar, "\n");
        fputs($ar, $_REQUEST['mensaje']);
        fputs($ar, "\n");
        fputs($ar, "_________________________________________________");
        fputs($ar, "\n");
        fclose($ar);
        echo "Los datos se enviaron correctamente";
        ?>

        <form method="POST" action="../html/contactos.html">
            <input class="regreso" type="submit" value="Regresar"><br>
        </form>


        <footer class="footer">
            <div class="container">
                <p>Página diseñada por: @Bryan Tualle</p>
            </div>

        </footer>

    </body>
</html>