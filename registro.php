<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="estilosregistro.css"/>
  <link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.min.css"/>
  <link rel="stylesheet" type="text/css" href="js/alertify/css/themes/default.min.css"/>
  <title>Registrarse</title>
  <link rel="shortcut icon" type="image/png" href="imagenes/owlico.png"/>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/alertify/alertify.min.js"></script>
   <script src="js/validarcampo.js"></script>
     <script type="text/javascript">
          $(function(){
              $('#caja1').validCampoChar('abcdefghijklmnñopqrstuvwxyzáéíóú 0123456789');
              $('#caja2').validCampoChar('abcdefghijklmnñopqrstuvwxyz0123456789');
              $('#caja3').validCampoChar('abcdefghijklmnñopqrstuvwxyz 0123456789');
              $('#caja4').validCampoChar('abcdefghijklmnñopqrstuvwxyz 0123456789');
          });
      </script>
      <script>
       $(document).ready(function(){
         $(".form-register").submit(function() {
           if ($("#caja1").val().length==0){
             alertify.warning('Introduce tu nombre completo por favor');
             return false;
           }
           if ($("#caja1").val().length>60){
             alertify.warning('¡Nombre demasiado largo!');
             return false;
           }
           if ($("#caja2").val().length==0){
             alertify.warning('Debes de introducir un nombre de usuario para el inicio de sesión');
             return false;
           }
           if ($("#caja2").val().length>10){
             alertify.warning('El nombre de usuario debe tener máximo 10 letras');
             return false;
           }
           if ($("#caja2").val().length<5){
             alertify.warning('Nombre de usuario muy corto');
             return false;
           }
           if ($("#caja3").val().length>10){
             alertify.warning('Tu alias no debe tener más de 10 letras');
             return false;
           }
           if ($("#caja3").val().length==0){
             alertify.warning('El campo de alias está vacío');
             return false;
           }
           if ($("#caja4").val().length==0){
             alertify.warning('La contraseña es obligatoria para el inicio de sesión');
             return false;
           }
           if ($("#caja4").val().length<5){
             alertify.warning('Contraseña demasiado corta, procura que tenga entre 5 y 10 caracteres');
             return false;
           }
           if ($("#caja4").val().length>10){
             alertify.warning('Contraseña muy larga. Nota: haz una que puedas recordar fácilmente');
             return false;
           }
         });
       });
       </script>
</head>
<body>
  <h1>Usuario nuevo</h1>
  <form class="form-register" action="insert.php" method="post" enctype="multipart/form-data">
    <h2>Crea una cuenta</h2>
    <div class="contenedor-inputs">
      <input id="caja1" type="text" name="Nom" autocomplete="off" placeholder="Nombre Completo" class="input-100" size="60" maxlength="60"/> <br/>
      <input id="caja2" type="text" name="Usu" autocomplete="off" placeholder="Nombre de usuario" class="input-48" size="10" maxlength="10"/>
      <input id="caja3" type="text" name="Aka" autocomplete="off" placeholder="Alias" class="input-48" size="10" maxlength="10"/>
      <input type="email" name="Mail" autocomplete="off" placeholder="Correo" class="input-100" size="50" maxlength="50"/>
      <input id="caja4" type="password" autocomplete="off" name="Pass" placeholder="Contraseña" class="input-48" size="10" maxlength="10"/>
          <span class="img">
            <input id="img" type="file" accept="image/*" name="img"/>
          </span>
          <label for="img">
            <span>Subir imagen</span>
          </label>
      <input type="submit" value="Registrarme" name="registrar" class="btn-enviar"/>
      <p class="form__link">Si tienes una cuenta <em><a href="iniSes.php">Ingresa aqui</a></em></p>
      </div>
      <?php error_reporting(0); include("verificar.php");?>
  </form>
  <!--Debajo hay un script para que en el label que se esta usando como mascara se a?ada el nombre del archivo que se selecciono desde el explorador-->
  <script type="application/javascript">
  jQuery('input[type=file]').change(function(e){
   var filename = e.currentTarget.files[0].name;
   var idname = jQuery(this).attr('id');
   console.log(jQuery(this));
   console.log(filename);
   console.log(idname);
   jQuery('span.'+idname).next().find('span').html(filename);
  });
  </script>
</body>
</html>
