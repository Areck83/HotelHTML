<!DOCTYPE html>
<html lang=es>
  <head>
    <meta charset="UTF-8"/>
    <title>Acceso</title>
    <link rel="shortcut icon" type="image/png" href="imagenes/owlico.png"/>
    <link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.min.css"/>
    <link rel="stylesheet" type="text/css" href="js/alertify/css/themes/default.min.css"/>
    <script src="js/jquery-3.3.1.min.js"></script> <!--Se trae jQuery para cumplir el script de validarcampo-->
    <script src="js/alertify/alertify.min.js"></script>
    <script src="js/validarcampo.js"></script> <!--Traemos la funcion para que se usen solo letras y numeros-->
    <script>
     $(document).ready(function(){
       $("#formulario").submit(function() {
         if ($(".usuario").val().length<5 || $(".usuario").val().length>10){
           alertify.warning('El NOMBRE es obligatorio. NOTA: Debe tener entre 5 y 10 caracteres');
           return false;
         }
         if ($(".contra").val().length<5 || $(".contra").val().length>10){
           alertify.warning('La CONTRASEÑA es obligatoria. NOTA: Debe tener de 5 a 10 caracteres');
           return false;
         }
       });
     });
     </script>
     <script type="text/javascript">
        $(function(){
            //Para escribir solo letras y numeros, bloquear caracteres especiales de escritura.
            $('#caja').validCampoChar('abcdefghijklmnñopqrstuvwxyz0123456789');
            $('#caja1').validCampoChar('abcdefghijklmnñopqrstuvwxyz0123456789');
        });
     </script>
    <link href="estilos.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <h1>Hoteles Inka</h1>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" id="formulario">
        <h2>Acceso</h2>
        <input id="caja" class="usuario" placeholder="Nombre de Usuario" name="txtUsuario" type="text" size="25" maxlength="50"/>
        <br/>
        <input id="caja1" class="contra" placeholder="Contraseña" name="txtPass" type="password" size="25" maxlength="50"/>
        <br/>
        <input class="boton" name="btnRegistrarse" type="button" value="Registrarse" onclick="window.location.href='registro.php'"/>
        <input class="boton" name="btnIniciarSesion" type="submit" value="Iniciar Sesion" />
        <br/>
        <?php
			     include("conectar.php");
           session_start();
           if(isset($_POST['btnIniciarSesion'])){
              $usuario = $_POST['txtUsuario'];
              $clave = $_POST['txtPass'];
              $consulta = "SELECT * FROM `usuario` WHERE `NombreU`='$usuario' AND `Contra`='$clave'";
	            $resultado = mysqli_query($nombreConexion,$consulta);
	            $fila = mysqli_num_rows($resultado);
              //NOMAMES:'V
	             if($fila>0){
  		         $fila=mysqli_fetch_array($resultado);
               $_SESSION['usuario'] = $fila['NombreU'];
  				     $_SESSION['imgP'] = $fila['Foto'];
               mysqli_free_result();
               mysqli_close($nombreConexion);
               header("Location: index.php");
               }
               else{
                echo"<script>
                  $(document).ready(function(){
                    $('#formulario').submit(function() {
                      alertify.error('¡Usuario o contraseña incorrectos!');
                      return false;
                    });
                  });
                </script>";
               }
              }
          ?>
      </form>
  </body>
</html>
