<?php    
            $conexion = mysqli_connect("localhost","root","","instituto") or
            die("Problemas con la conexion");
			$query="insert into modulo('NOMBRE_MODULO', 'DESCRIPCION', 'VISIBLE_M') 
            values ('$_REQUEST[idModulo]','$_REQUEST[descripcion]','1')";
            mysqli_query($conexion,$query ) or
            die("Problemas en el insert" .mysqli_error($conexion));
            mysqli_close($conexion);
            echo "El alumno fue Registrado";
        ?>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "instituto";

	$codigo = $_GET["codigo"];
	$nombre = $_GET["Nombre"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO matricula (N_EXPEDIENTE, COD_MODULO, )
	VALUES (".$codigo.",'".$nombre."')";
	
	if ($conn->query($sql) === TRUE) {
	    echo "Alumno Matriculado correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	echo"<br />"; 
        echo"<a href='../index.html'> Regresar Menú Principal </a>";
	$conn->close();
?>