<?php

$medidor=(int)$_POST["medidor"];
$rut=(int)$_POST["rut"];

//$medidor=55555;
//$rut=324442223;

$server = "localhost";
$username = "id10155249_aguabd";
$baseDatos = "id10155249_aguabd";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);


$actualizar = mysqli_query($conexion,"UPDATE usuario SET medidor=$medidor WHERE rut=$rut");

  header("Location: actualizarMedidor.php");

 ?>