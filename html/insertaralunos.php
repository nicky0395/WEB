<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "instituto";

	$nexpediente = $_POST["nExpediente"];
	$apellido = $_POST["Apellido"];
	$FechaNacimiento = $_POST["FechaNacimiento"];
    $FechaPago = $_POST["FechaPago"];
    $Contrasena = $_POST["Contrasena"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO alumno (N_EXPEDIENTE, APELLIDO, FECHA_NACIMIENTO, FECHA_PAGO, CONTRASENA)
	VALUES (".$nexpediente.",'".$apellido."',".strtotime($FechaNacimiento).",".strtotime($FechaPago).",'".$Contrasena."')";
	#values($_REQUEST[nexpediente],'$_REQUEST[apellido]',
	#strtotime($_REQUEST[FechaNacimiento]),strtotime($_REQUEST[FechaPago]),'$_REQUEST[Contrasena]')")

	if ($conn->query($sql) === TRUE) {
	    echo "alumno registrado correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	echo"<br />"; 
        echo"<a href='index1.html'> Regresar Menú Principal </a>";
	$conn->close();
?>