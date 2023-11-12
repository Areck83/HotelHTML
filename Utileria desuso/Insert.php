<? php
function conectarse()
{
	if (!($link=mysql_connect("localhost","root","")))
	{
		echo "Error de conexion a la base de datos.";
		exit();
	}
	if (!mysql_select_db("proyecto2 depw",$link))
	{
		echo "Error al encontrar la base de datos.";
		exit();
	}
	return $link;
}
<?
