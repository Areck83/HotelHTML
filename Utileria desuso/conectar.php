<?php
	// Ejemplo de conexi�n a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com, modificado por Alfredo Issac acorde a una conexi�n b�sica y para validaci�n de W3C
	// Datos de la base de datos
		$usuario = "root";
		$password = "";
		$servidor = "localhost";
		$basededatos = "proyecto2 depw";

		$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("Error: No se ha podido conectar al servidor de Base de datos"); 	// creaci�n de la conexi�n a la base de datos con mysql_connect()
		$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Error: No se ha podido conectar a la base de datos" ); 	// Selecci�n del a base de datos a utilizar
		$consulta = "SELECT * FROM usuario"; 	// establecer y realizar consulta. guardamos en variable.
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	//echo "<table borde='2'>";
	//echo "<tr>";
	//echo "<th>Nombre</th>";
	//echo "<th>Edad</th>";
	//echo "</tr>";

	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
//	while ($columna = mysqli_fetch_array( $resultado ))
	//{
//		echo "<tr>";
//		echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td>";
//		echo "</tr>";
	//}
//
	//echo "</table>"; // Fin de la tabla
	//// cerrar conexi�n de base de datos
	mysqli_close( $conexion );
?>
