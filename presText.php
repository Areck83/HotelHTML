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
  <title>Pagina Principal</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.min.css"/>
  <link rel="stylesheet" type="text/css" href="js/alertify/css/themes/default.min.css"/>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/alertify/alertify.min.js"></script>
  <script>
      window.onload = function(){
         alertify.success('Sesión Iniciada');
      }
  </script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css-index/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="favicon.png" />
  <style>
    html{font-size:16pt;}
    .fondo {background:#2c3e50;}
    .borde{border: 1px #000 solid;}
    .fondos {background: #e9f7ef ;}
    .slider{ background:url(img/Wallpaper-2.jpg);
    height:100vh;
    background-size:cover;
    background-position:center;
    }
  </style>
</head>
<body style="background-color:#74394a;">
<section class="container-fluid slider d-flex justify-content-center align-items-center">
  <h1 class="display-1">Hotel Trivago</h1>
</section>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bienvenido</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Directorio</a>
      <a class="nav-item nav-link" href="#">Reservaciones</a>
      <a class="nav-item nav-link" href="#">Administrar</a>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4 col-sg-4 fondo text-white-50"><p>Bienvenid@: <?php echo $_SESSION['usuario']; echo "<center><img src=".$_SESSION['imgP']." width='40%' height='40%'></center>"?>
    </div>
    <div class="col-sm-6 col-md-8 col-sg-8 fondos">
      <p>Hola, bienvenido a nuestro sitio de reservaciones.
       Mira nuestro video de presentación para que tengas mayor información de lo que podrás realizar en nuestro sitio.
      </p>
      <p>
        <center> <a class="text-black-50" href="#">Ver presentación Textual</a> </center>
      </p>
    </div>
  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<footer class="page-footer font-small pt-4 mt-4 fondo">
<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">
      <!-- Content -->
      <h5 class="text-uppercase">Desarrolladores</h5>
      <ul class="list-unstyled text-white-50">
        <li>
          Docente: M.S.I Alfredo Contreras Mendez
        </li>
        <li>
          Módulo: Diseño y Elaboración de paginas WEB
        </li>
        <li>
          Integrantes: Alfredo,Sebastián,Edgar,Antonio,Andres,Angel
        </li>
        <li>
          Carrera: PT-B en Informática, Sexto Semestre
        </li>
        <li>
          Plantel: CONALEP Xalapa "Manuel Rivera Cambas"
        </li>
      </ul>
    </div>
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none pb-3">
    <!-- Grid column -->
    <div class="col-md-6 mb-md-0 mb-3">
      <!-- Links -->
      <h5 class="text-uppercase">Contáctanos</h5>
        <ul class="list-unstyled text-white-50">
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
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- Footer Links -->
<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Copyright: HotelTrivago
  <a href="cerrarSes.php">Cerrar Sesión</a>
</div>
<!-- Copyright -->
</footer>
</body>
</html>
