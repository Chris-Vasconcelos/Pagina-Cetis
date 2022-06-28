<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "cetis64";    // sera el valor de nuestra BD 
	$usuario = "root";    // sera el valor de nuestra BD 
	$contraseña = "";    // sera el valor de nuestra BD 
	
	$conectar = new mysqli($host, $usuario, $contraseña, $basededatos);

	if ($conectar -> connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>