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
  
    $registros=$mysql->query("select     cod_modulo as cod,
                                          id_profesor as profesor,
                                          nombre_modulo as nombre,
                                          descripcion 
                                      from modulo
                                      WHEN ") or
      die($mysql->error);
	 
    echo '<table class="tablalistado">';
    echo '<tr><th>Codigo</th><th>Descripcion</th><th>Precio</th><th>Rubro</th><th>Borrar</th><th>Modificar</th></tr>';
    while ($reg=$registros->fetch_array())
    {
      echo '<tr>';
      echo '<td>';
      echo $reg['codigoart'];
      echo '</td>';	  
      echo '<td>';
      echo $reg['descripcionart'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['precio'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['descripcionrub'];	  
      echo '</td>';
      echo '<td>';
      echo '<a href="bajaarticulo.php?codigo='.$reg['codigoart'].'">Borra?</a>';
      echo '</td>';
      echo '<td>';
      echo '<a href="modificacionarticulo1.php?codigo='.$reg['codigoart'].'">Modifica?</a>';
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