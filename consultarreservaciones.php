<?php
 session_start();
 $varSesion = $_SESSION['usuario'];
 $varImagen = $_SESSION['imgP'];
 if(!$_SESSION)
  {
    header("Location: iniSes.php");
  }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.min.css"/>
  <link rel="stylesheet" type="text/css" href="js/alertify/css/themes/default.min.css"/>
  <link rel="stylesheet" type="text/css" href="css-index/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="favicon.png" />
  <link rel="stylesheet" type="text/css" href="css/estylereser.css">
  <link rel="stylesheet" type="text/css" href="estilosadmin.css">
  <title>Reservaciones</title>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/alertify/alertify.min.js"></script>
  <script src="js/validarcampo.js"></script>
  <script>
         $(function(){
             $('#caja1').validCampoChar('0123456789');
             $('#nomClient').validCampoChar('abcdefghijklmnopqrstuvwxyz ');
             $('#costo').validCampoChar('0123456789.');
             $('#numHab').validCampoChar('0123456789');
             $('#placas').validCampoChar('abcdefghijklmnopqrstuvwxyz0123456789');
             $('#tel').validCampoChar('0123456789-');
             $('#observaciones').validCampoChar('abcdefghijklmnopqrstuvwxyz0123456789() ');
             $('#elab').validCampoChar('abcdefghijklmnopqrstuvwxyz ');
         });
  </script>
  <script>
   $(document).ready(function(){
     $(".form-register").submit(function() {
       if ($("#caja1").val().length==0){
         alertify.warning('El campo ID de reservacion está vacío');
         return false;
       }
       if ($("#pago").val()==0){
         alertify.warning('No se ha seleccionado la forma de pago');
         return false;
       }
       if ($("#nomClient").val().length==0){
         alertify.warning('Introduce el nombre del cliente');
         return false;
       }
       if ($("#fechaActual").val().length==0){
         alertify.warning('Introduce la fecha de hoy');
         return false;
       }
       if ($("#fechllegada").val().length==0){
         alertify.warning('Introduce la fecha de entrada');
         return false;
       }
       if ($("#fechsalida").val().length==0){
         alertify.warning('Introduce la fecha de salida');
         return false;
       }
       if ($("#tipHab").val()==0){
         alertify.warning('Selecciona el tipo de habitación');
         return false;
       }
       if ($("#costo").val().length==0){
         alertify.warning('Introduce el costo de la habitación');
         return false;
       }
       if ($("#numP").val()==0){
         alertify.warning('No se ha especificado el número de personas');
         return false;
       }
       if ($("#numHab").val().length==0){
         alertify.warning('No se ha asignado un número de habitación');
         return false;
       }
       if ($("#horaLlegada").val().length==0){
         alertify.warning('No se ha especificado hora de llegada');
         return false;
       }
       if ($("#placas").val().length==0){
         alertify.warning('El campo de placas está vacío');
         return false;
       }
       if ($("#tel").val().length==0){
         alertify.warning('Se necesita el número de teléfono del cliente');
         return false;
       }
       if ($("#observaciones").val().length==0){
         alertify.warning('El campo observaciones está vacío');
         return false;
       }
       if ($("#elab").val().length==0){
         alertify.warning('Escribe tu nombre como elaborador');
         return false;
       }
     });
   });
   </script>
   <style>
   html{font-size:16pt;}
   .fondo {background:#74D6DF;}
   .white{color:white;}
   .negro{color:#000000;}
   .fondito {background:#6b4550;}
   .borde{border: 1px #000 solid;}
   .texto{padding-top:5px; margin-left:50px;}
   .fondos {background:#2B89A5;}
   .slider{
	background:url(img/angle-banner-Hotel.jpg);
	height: 25vh;
	background-size:cover;
	background-position:center;
}

   .link{text-decoration: none; color:white;}
   .link:hover{color:black;}
   .linkNegro{text-decoration: none; color:black;}
   .linkNegro:hover{color:white;}
   </style>
</head>
<body style="background-color:#004B8C;">
<section class="container-fluid slider d-flex justify-content-center align-items-center">
  <h1 class="display-1 white">Grand Millennium</h1>
</section>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bienvenido</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Inicio</a>
      <a class="nav-item nav-link" href="directorio.php">Directorio</a>
      <a class="nav-item nav-link" href="reservacion.php">Reservaciones</a>
      <a class="nav-item nav-link" href="administrar.php">Administrar<span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4 col-sg-4 fondo text-white-50"><p class="text-center negro">Bienvenid@: <?php echo $_SESSION['usuario']; echo "<center><img class='img-thumbnail' src=".$_SESSION['imgP']." width='70%' height='50%'></center>"?>
    </div>
    <div class="col-sm-6 col-md-8 col-sg-8 fondos">



	<?php
	$host = "127.0.0.1";
	$usuario = "root";
	$password = "";

	$nombreConexion = mysqli_connect($host , $usuario , $password,"proyecto2depw");
	$result=mysqli_query($nombreConexion,"select * from reservaciones");
	?>


	<?php
	$consulta="SELECT * FROM reservaciones";
	/* Se ejecuta la consulta de selecci�n.*/
      $hacerConsulta=mysqli_query($nombreConexion,$consulta);
	/* Se determina el n�mero de registros recuperados por el cursor*/
      $numeroDereservaciones=mysqli_num_rows($hacerConsulta);
      echo "<p style='color:white; font-size:24px'>Total de Reservaciones: $numeroDereservaciones";
    ?>
	<div id="barritas">
    <form action="" method="post" name="" id="">
	  <table id="centrado" cellspacing = "1px" cellpadding = "10px" width="80%">
   	<tr style="background:#008B8B; font-size:16px;"><th>ID</th><th>Nombre</th><th width="100px">Fecha de llegada</th><th>Hora</th><th>Fecha de salida</th><th>Num. Habitacion</th><th>Tipo de habitacion</th><th>Numero de personas</th><th>Costo</th><th>Placas</th><th>Telefono</th><th>Pago</th><th>Fecha actual</th><th>Observacion</th><th>Elaboro</th></tr>

      <?php
          while($row = mysqli_fetch_array($result)) {
           printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td>",
	    	$row["id"],$row["nombre"],$row["fechllegada"],$row["hora"],$row["fechsalida"],$row["numhabitacion"],$row["tipoha"],$row["numeropersona"],$row["costo"],$row["placas"],$row["telefono"],$row["pago"],$row["fechactual"],$row["observacion"],$row["elaboro"]);
          }
      ?>
	</table>
    </form>
	</div>



	<?php
include ("conectar.php");

if(isset($_POST['id']))
{
$name=$_POST['id'];
mysqli_query($nombreConexion,"delete from reservaciones where id = '$name';" );
}
?>

<form name="Borrar" method='POST' action="" >
<select name='id'>
<?php
include ("conectar.php");
$rec=mysqli_query($nombreConexion,"select * from reservaciones");
while($kaw=mysqli_fetch_array($rec))
{
echo "<option value='".$kaw['id']."'";
echo"SELECTED";
echo ">";
echo $kaw['id'];
echo "</option>";

}
?>
</select>
<input type="submit" name="Borrar" value="Borrar Reservacion" id="delete"/>
</form>




    </div>
  </div>
</div>
<footer class="page-footer font-small pt-4 mt-4 fondito">
<div class="container-fluid text-center text-md-left">
  <div class="row">
    <div class="col-md-6 mt-md-0 mt-3">
      <h5 class="text-uppercase white">Desarrolladores</h5>
      <ul class="list-unstyled white">
        <li>
          Docente: M.S.I Alfredo Contreras Mendez.
        </li>
        <li>
          M�dulo: Dise;o y Elaboracion de paginas WEB.
        </li>
        <li>
          Integrantes: Alfredo,Sebastián,Edgar,Antonio,Andres,Angel.
        </li>
        <li>
          Carrera: PT-B en Informática, Sexto Semestre.
        </li>
        <li>
          Plantel: CONALEP Xalapa "Manuel Rivera Cambas".
        </li>
      </ul>
    </div>
    <hr class="clearfix w-100 d-md-none pb-3">
    <div class="col-md-6 mb-md-0 mb-3">
      <h5 class="text-uppercase white">Contáctanos</h5>
        <ul class="list-unstyled white">
          <li>
            Número: 01-55-5002-6300
          </li>
          <li>
            Localización: Paseo de la Reforma 24, Centro, Cuauhtémoc, 06040 Ciudad de México, CDMX
          </li>
          <li>
            Correo: hotelesvago@gmail.com
          </li>
        </ul>
    </div>
  </div>
</div>
<div class="footer-copyright white text-center py-3">© 2018 Copyright: Grand Millenium
  <a class="linkNegro" href="cerrarSes.php">Cerrar Sesión</a>
</div>
</footer>
</body>
</html>
