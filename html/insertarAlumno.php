<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALUMNO</title>
</head>

<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","instituto") or
        die("Problemas con la conexión");
    mysqli_query($conexion,"insert into alumno(N_EXPEDIENTE,APELLIDO, FECHA_NACIMIENTO, FECHA_PAGO, CONTRASEÑA) 
    values($_REQUEST[nexpediente],'$_REQUEST[apellido]',
        strtotime($_REQUEST[FechaNacimiento]),strtotime($_REQUEST[FechaPago]),'$_REQUEST[Contrasena]')")
        or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    echo "El alumno fue dado de alta.";
    ?>
</body>

</html>