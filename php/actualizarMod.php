<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estiloAct.css" type="text/css">
</head>
<body>
    <?php
        $id=$_GET["codigo"];
        $mysql=new mysqli("localhost","root","","instituto");
	if ($mysql->connect_error)
	  die("Problemas con la conexion a la base de datos");
    $registros=$mysql->query('select * from modulo  where COD_MODULO="'.$id.'"') or
      die($mysql->error);
      $reg=mysqli_fetch_array($registros);
      echo '<form action="" method="post">
            <input type="hidden" name="id" value="'.$id.'"><br><br>
                NOMBRE MODULO
                <input type="text" name="nombreModulo" value="'.$reg["NOMBRE_MODULO"].'"><br><br>
                DESCRIPCION
                <input type="text" name="descripcionModulo" value="'.$reg["DESCRIPCION"].'"><br><br>
                <br><br>
                <input type="submit" name="actualizar" value="Actualizar">
            </form>';
    ?>
    
    <?php
        if(isset($_POST["actualizar"]))
        {
            $mysql=new mysqli("localhost","root","","instituto");
            if ($mysql->connect_error)
              die("Problemas con la conexion a la base de datos");
            $registros=$mysql->query('UPDATE modulo SET NOMBRE_MODULO="'.$_POST['nombreModulo'].'"
            ,DESCRIPCION="'.$_POST['descripcionModulo'].'" where COD_MODULO ="'.$_POST['id'].'"' ) or
              die($mysql->error);
            header("Location:actualizarModulos.php");
        }
    ?>
    
</body>
</html>