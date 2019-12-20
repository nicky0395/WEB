<!doctype html>
<html>

<head>
  <title>Listado de articulos</title>
  <style>
    .tablalistado {
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: 20px;
    }

    .tablalistado th {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffd040;
    }

    .tablalistado td {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73;
    }
  </style>
</head>

<body>

  <?php
  $mysql = new mysqli("localhost", "root", "", "instituto");
  if ($mysql->connect_error)
    die("Problemas con la conexion a la base de datos");

  $registros = $mysql->query("select * from modulo") or
    die($mysql->error);

  echo '<table class="tablalistado">';
  echo '<tr><th>Nombre</th>
  <th>Descripcion</th></tr>';
  while ($reg = $registros->fetch_array()) {
    echo '<tr>';
    echo '<td>';
    echo $reg['NOMBRE_MODULO'];
    echo '</td>';
    echo '<td>';
    echo $reg['DESCRIPCION'];
    echo '</td>';
    echo '<td>';
    echo '<a href="../php/actualizarMod.php?codigo=' . $reg['COD_MODULO'] . '">Actualizar?</a>';
    echo '</td>';
    echo '</tr>';
  }
  echo '<tr><td colspan="6">';
 
  echo '</td></tr>';
  echo '<table>';

  $mysql->close();

  ?>
</body>

</html>