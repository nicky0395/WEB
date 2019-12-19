<?php
  if (isset($_POST['loginM'])) {
      /*
    $conexion = mysqli_connect("localhost","root","","dbproyecto") or die("Problemas con la conexion");
    $valid_Student=mysqli_query($conexion,"SELECT * FROM modulos WHERE usuarioEstudiante='$_REQUEST[nombre]' AND contraseniaEstudiante='$_REQUEST[contraseña]'");
    $reg_stud = mysqli_fetch_array($valid_Student);*/
    if($_REQUEST['nombre']=="admin" && $_REQUEST['contraseña']=="admin"){
        echo "
        <script>
            //alert('INGRESO CORRECTO');
            window.location='../html/insercionModulo.html';
        </script>";
    }else {
      die("<script>alert('Usuario o Contraseña incorrectos'); window.location='../php/servicioModulos.php';</script>");
    }
    //mysqli_close($conexion);
  }
?>

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
                        <li><a href="quienessomos.html">QUIÉNES SOMOS?</a></li>
                        <li><a href="">SERVICIOS</a>
                            <ul class="submenu">
                                <li><a href="servicioProfesores.html">Profesores</a></li>
                                <li><a href="servicioAlumno.html">Alumnos</a></li>
                                <li><a href="">Módulos</a></li>
                            </ul>
                        </li>
                        <li><a href="contactos.html">CONTÁCTENOS</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            <div class="container">
                <div class="contacto">
                    <div class="imagenContacto">
                        <img src="../img/login.png" width="100%">
                    </div>
                    <div class="cajaLogin">
                        <div class="titulo">
                            <h1>
                                LOGIN
                            </h1>
                        </div>

                        <form class="formularioLogin" action="servicioModulos.php" method="POST">
                            USUARIO: 
                            <input type="text" name="nombre">
                            <br>
                            CONTRASEÑA: 
                            <input type="password" name="contraseña">
                            <br>
                            <br>
                            <input type="submit" value="LOGIN" name="loginM">
                        </form>
                    </div>

                </div>
            </div>
        </main>


        <footer class="footer">
            <div class="container">
                <p>Página diseñada por: @Bryan Tualle</p>
            </div>

        </footer>

    </body>
</html>