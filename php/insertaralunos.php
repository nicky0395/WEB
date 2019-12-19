<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "instituto";

	$nexpediente = $_POST["nExpediente"];
	$nombre = $_POST["Nombre"];
	$apellido = $_POST["Apellido"];
	$FechaNacimiento = $_POST["FechaNacimiento"];
    $FechaResgistro = $_POST["FechaPago"];
    $Contrasena = $_POST["Contrasena"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo strtotime($FechaNacimiento);
	?><br><?php
	echo $FechaNacimiento;
	?><br><?php

	

	$sql = "INSERT INTO alumno (N_EXPEDIENTE, NOMBRE_ALUMNO, APELLIDO_ALUMNO, CLAVE_ALUMNO, FECHA_NACIMIENTO, FECHA_REGISTRO)
	VALUES (".$nexpediente.",'".$nombre."','".$apellido."','".$Contrasena."','".$FechaNacimiento."','".$FechaResgistro."')";
	
	if ($conn->query($sql) === TRUE) {
	    echo "alumno registrado correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	echo"<br />"; 
        echo"<a href='../index.html'> Regresar Menú Principal </a>";
	$conn->close();
?>