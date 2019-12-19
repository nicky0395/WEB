<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "instituto";

	$N_EXPEDIENTE = $_POST["N_EXPEDIENTE"];
	$APELLIDO = $_POST["APELLIDO"];
	$FECHA_NACIMIENTO = $_POST["FECHA NACIMIENTO"];
    $FECHA_PAGO = $_POST["FECHA_PAGO"];
    $CONTRASENA = $_POST["CONTRASENA"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO alumno (N_EXPEDIENTE, APELLIDO, FECHA NACIMIENTO, FECHA_PAGO,CONTRASENA)
	VALUES ('".$N_EXPEDIENTE."', '".$APELLIDO."','".$FECHA_NACIMIENTO."','".$FECHA_PAGO."','".$CONTRASENA."')";

	if ($conn->query($sql) === TRUE) {
	    echo "alumno registrado correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	echo"<br />"; 
        echo"<a href='index1.html'> Regresar Menú Principal </a>";
	$conn->close();
?>