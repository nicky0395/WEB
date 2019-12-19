<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "instituto";

	$ID_PROFESOR = $_POST["id_profesor"];
	$CEDULA = $_POST["cedula"];
	$NOMBRE = $_POST["nombre"];
    $DIRECCION = $_POST["direccion"];
    $TELEFONO = $_POST["CONTRASENA"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO alumno (ID_PROFESOR, CEDULA, NOMBRE, DIRECCION,TELEFONO)
	VALUES ('".$ID_PROFESOR."', '".$CEDULA ."','".$NOMBRE."','".$DIRECCION."','".$TELEFONO."')";

	if ($conn->query($sql) === TRUE) {
	    echo "alumno registrado correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	echo"<br />"; 
        echo"<a href='index1.html'> Regresar Menú Principal </a>";
	$conn->close();
?>