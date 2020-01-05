<?php 
	$host = "localhost";  
	$basededatos = "proyecto";   
	$usuariodb = "root";    
	$clavedb = "";   

	
	$tabla_db1 = "libros"; 	   
	

	error_reporting(1); // me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>