<?php
	$host = "127.0.0.1";
	$usuario = "root";
	$password = "";
	$nombreConexion = mysqli_connect($host,$usuario,$password,"proyecto2depw");
	if (mysqli_connect_errno()){
  	echo "Error al conectarse a la base de datos " . mysqli_connect_error();
  }
?>
