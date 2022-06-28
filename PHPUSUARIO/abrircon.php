<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost"; // sera el valor de nuestra BD 
	$basededatos = "cetis64";//nombre de nuestra base de datos
	$usuario = "root"; //sera el valor de usuario en caso de ser necesario  
	$contraseña = ""; // dato extraido de la base de datos

/* /* Creating a new instance of the mysqli class. */

	$conectar = new mysqli($host, $usuario, $contraseña, $basededatos);

/* Checking if there is an error in the connection. */
	if ($conectar -> connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>