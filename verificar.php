<?php
 include("conectar.php");
  $consulta = "SELECT * FROM usuario WHERE NombreU='$usu'";
  $resultado = mysqli_query($nombreConexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
  $fila = mysqli_num_rows($resultado);
  if($fila > 0){ echo "<center><style>p{color:white;}</style><p>***Ese nombre de usuario ya esta en uso***</p></center>";
    exit();
  }
?>
