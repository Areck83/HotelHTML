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
  <title>Directorio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.min.css"/>
  <link rel="stylesheet" type="text/css" href="js/alertify/css/themes/default.min.css"/>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/alertify/alertify.min.js"></script>
  <script type="text/javascript">
    $(".cierre").click(function(){
      alertify.message('Sesión cerrada');
    });
  </script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css-index/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="favicon.png" />
  <style>
  html{font-size:16pt;}
  .fondo {background:#74D6DF;}
  .white{color:white;}
  .negro{color:#000000;}
  .fondito {background:#6b4550;}
  .borde{border: 1px #000 solid;}
  .texto{padding-top:5px; margin-left:50px;}
  .fondos {background:#2B89A5;}

  .link{text-decoration: none; color:white;}
  .link:hover{color:black;}
  .linkNegro{text-decoration: none; color:black;}
  .linkNegro:hover{color:white;}
  .slider{
	background:url(img/angle-banner-Hotel.jpg);
	height: 25vh;
	background-size:cover;
	background-position:center;
}

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
      <a class="nav-item nav-link active" href="directorio.php">Directorio <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="reservacion.php">Reservaciones</a>
      <a class="nav-item nav-link" href="administrar.php">Administrar</a>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4 col-sg-4 fondo text-white-50"><p class="text-center negro">Bienvenid@: <?php echo $_SESSION['usuario']; echo "<center><img class='img-thumbnail' src=".$_SESSION['imgP']." width='70%' height='50%'></center>"?>
    </div>
    <div class="col-sm-6 col-md-8 col-sg-8 fondos">
      <table align="center" width="100%" BGCOLOR="#20B2AA">
        <h3 style="text-align:center; color:white">Directorio Administrativo</h3>
                  <tr BGCOLOR="#055b5b">
                    <th><font color="white">Nombre</font></th><th style="text-align:center"><font color="white">Cargo</font></th><th><font color="white">Extensión</font></th>
                  </tr>
                  <tr>
                    <th colspan="3" BGCOLOR="#008B8B">Recursos financieros</th>
                  </tr>
                  <tr >
                    <td><font color="white">Julio Cesar Báez Pérez</font></td><td align="center"><font color="white">Jefe de Tesorería</font></td><td align="center"><font color="white">91115</font></td>
                  </tr>
                  <tr >
                    <td><font color="white">Maráa Esther Rosales Gómez</font></td><td align="center"><font color="white">Jefa de Contabilidad</font></td><td align="center"><font color="white">91116</font></td>
                  </tr>
                  <tr>
                    <th colspan="3" BGCOLOR="#008B8B">Recursos humanos</th></tr>
                  <tr>
                    <td ><font color="white">Elisa Montiel González</font></td><td align="center"><font color="white">Jefa de Nómina</font></td><td align="center"><font color="white">91120</font></td>
                  </tr>
                  <tr>
                    <td ><font color="white">Humberto Rodrí­guez Losilla</font></td><td align="center"><font color="white">Jefe de Gestión de personal</font></td><td align="center"><font color="white">91121</font></td>
                  </tr>
                  <tr>
                    <th colspan="3" BGCOLOR="#008B8B">Recursos materiales</th>
                  </tr>
                  <tr>
                    <td ><font color="white">Emilio Grajales Viveros</font></td><td align="center"><font color="white">Jefe de Manteniminto</font></td><td align="center"><font color="white">91130</font></td>
                  </tr>
                  <tr>
                    <td ><font color="white">Rodrigo Roman Sánchez</font></td><td align="center"><font color="white">Jefe de Gestión de Muebles e Inmuebles</font></td><td align="center"><font color="white">91131</font></td>
                  </tr>
                  <tr>
                    <th colspan="3" BGCOLOR="#008B8B">Tecnologías</th>
                  </tr>
                  <tr>
                    <td ><font color="white">Angel López Méndez</font></td><td align="center"><font color="white">Jefe de Soporte Técnico</font></td><td align="center"><font color="white">91140</font></td>
                  </tr>
                  <tr>
                    <td ><font color="white">Alfredo Ramírez González</font></td><td align="center"><font color="white">Jefe de redes</font></td><td align="center"><font color="white">91141</font></td></tr>
                  </table>
    </div>
  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<footer class="page-footer font-small pt-4 mt-4 fondito">
<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">
      <!-- Content -->
      <h5 class="text-uppercase white">Desarrolladores</h5>
      <ul class="list-unstyled white">
        <li>
          Docente: M.S.I Alfredo Contreras Mendez.
        </li>
        <li>
          Módulo: Diseño y Elaboración de páginas WEB.
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
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none pb-3">
    <!-- Grid column -->
    <div class="col-md-6 mb-md-0 mb-3">
      <!-- Links -->
      <h5 class="text-uppercase white">Contáctanos</h5>
        <ul class="list-unstyled white">
          <li>
            Número: 01-55-5002-6300
          </li>
          <li>
            Localización: Paseo de la Reforma 24, Centro, Cuauhtémoc, 06040 Ciudad de México, CDMX
          </li>
          <li>
            Correo: hotgrandmillen@gmail.com
          </li>
        </ul>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- Footer Links -->
<!-- Copyright -->
<div class="footer-copyright white text-center py-3">© 2018 Copyright: Grand Millenium
  <a class="linkNegro" href="cerrarSes.php">Cerrar Sesión</a>
</div>
<!-- Copyright -->
</footer>
</body>
</html>
