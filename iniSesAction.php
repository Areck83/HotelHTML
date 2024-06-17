<?php
    include("conectar.php");
    session_start();
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
  ?>
