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
	<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><title>Hinox</title>
	<link rel="shortcut icon" type="image/png" href="favicon.png" />
	</head>
<header>
	<p>Hola</p>
	<p>	Bienvenido: <?php echo $_SESSION['usuario']; echo "<img src=".$_SESSION['imgP']." width='35px' height='35px'>"?><br></p>
  <section class="wrapper">
        <nav>
            <ul>
                <li><a href="reservacion/reservacion.php"><span class="primero"><i class="icon icon-home3"></i></span>Probar la pag de reservacion</a></li>
				<li><a href="cerrarSes.php"><span class="segundo"><i class="icon icon-users"></i></span>cerrar la sesion jaja</a></li>
				<li><a href="dasda/estilo.php"><span class="tercero"><i class="icon icon-eye"></i></span>Pagina culera del ricardo (no abrir)</a></li>
            </ul>
  	  </nav>
  </section>
</header>
	</body>
</html>
