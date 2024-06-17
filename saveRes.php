<?php
include("conectar.php");

if(isset($_POST["BtnGuardar"]))
  {

    $id=$_POST["idreservacion"];
    $pago=$_POST["pago"];
    $nombre=$_POST["Nombre"];
    $fechactual=$_POST["fechactual"];
    $fechllegada=$_POST["fechllegada"];
    $fechsalida=$_POST["fechsalida"];
    $tipohabitacion=$_POST["tipohabitacion"];
    $costo=$_POST["costo"];
    $numpersonas=$_POST["numpersonas"];
    $numhab=$_POST["numhab"];
    $hrllegada=$_POST["hrllegada"];
    $placas=$_POST["placas"];
    $telefono=$_POST["telefono"];
    $observacion=$_POST["observacion"];
    $elaboro=$_POST["elaboro"];

$cons="INSERT INTO reservaciones(id,nombre,fechllegada,hora,fechsalida,numhabitacion,tipoha,numeropersona,costo,placas,telefono,pago,fechactual,observacion,elaboro)
VALUES('$id','$nombre','$fechllegada','$hrllegada','$fechsalida','$numhab','$tipohabitacion','$numpersonas','$costo','$placas','$telefono','$pago','$fechactual','$observacion','$elaboro')";

mysqli_query($nombreConexion,$cons);

echo "<script languaje='javascript'>alert('Registro Exitoso'); location.href = 'reservacion.php';</script>";}
else
{
echo "<script languaje='javascript'>alert('Registro Exitoso'); location.href = 'reservacion.php';</script>";
}
?>
