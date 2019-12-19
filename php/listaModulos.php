<!doctype html>
<html>
<head>
  <title>Listado de articulos</title>
  <style>
  .tablalistado {
    border-collapse: collapse;
    box-shadow: 0px 0px 8px #000;
    margin:20px;
  }
  .tablalistado th{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#ffd040;	  
  }  
  .tablalistado td{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#ffdd73;	  
  }
  </style>
</head>  
<body>
  
  <?php
	$mysql=new mysqli("localhost","root","","instituto");
	if ($mysql->connect_error)
	  die("Problemas con la conexi�n a la base de datos");
  
    $registros=$mysql->query("select     COD_MODELO as cod,
                                          ID_PROFESOR as profesor,
                                          NOMBRE_MODULO as nombre,
                                          DESCRIPCION as desc 
                                      from modulo
                                      WHEN VISIBLE_M") or
      die($mysql->error);
	 
    echo '<table class="tablalistado">';
    echo '<tr><th>Codigo</th><th>Profesor</th><th>Nombre</th><th>Matricularse</th></tr>';
    while ($reg=$registros->fetch_array())
    {
      echo '<tr>';
      echo '<td>';
      echo $reg['cod'];
      echo '</td>';	  
      echo '<td>';
      echo $reg['profesor'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['nombre'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['desc'];	  
      echo '</td>';
      echo '<td>';
      echo '<a href="matricularse.php?codigo='.$reg['cod'].'">Matricular?</a>';
      echo '</td>';    
      echo '</tr>';	  
    }	
    echo '<tr><td colspan="6">';
    echo '<a href="altaarticulo1.php">Agrega un nuevo articulo?</a>';
    echo '</td></tr>';
    echo '<table>';	
	
    $mysql->close();

  ?>  
</body>
</html>