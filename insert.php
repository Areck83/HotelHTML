<?php
  include("conectar.php");
    $nom=$_POST["Nom"];
    $usu=$_POST["Usu"];
    $alias=$_POST["Aka"];
    $mail=$_POST["Mail"];
    $pass=$_POST["Pass"];
    //Lo de abajo es especial para la foto
	  $foto=$_FILES["img"]["name"];
    $ruta=$_FILES["img"]["tmp_name"];
    $destino="imagenes/".$foto;
    //Termina foto
    if($foto == ""){
      $destino = "imagenes/default.jpg";
      $SQL="INSERT INTO usuario(NombreC,NombreU,Alias,Correo,Contra,Foto) VALUES ('$nom','$usu','$alias','$mail','$pass','$destino')";
      $resultado = mysqli_query($nombreConexion,$SQL);
      mysqli_free_result();
      mysqli_close($nombreConexion);
      header("Location: iniSes.php");
    }
    else{
      $SQL="INSERT INTO usuario(NombreC,NombreU,Alias,Correo,Contra,Foto) VALUES ('$nom','$usu','$alias','$mail','$pass','$destino')";
      $resultado = mysqli_query($nombreConexion,$SQL);
      copy($ruta,$destino);
      mysqli_free_result();
      mysqli_close($nombreConexion);
      header("Location: iniSes.php");
    }
?>
