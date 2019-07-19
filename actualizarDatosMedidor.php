<?php

$medidor=(int)$_POST["medidor"];
$rut=(int)$_POST["rut"];

//$medidor=55555;
//$rut=324442223;

$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";



$conexion = mysqli_connect($server,$username,$password,$baseDatos);


$actualizar = mysqli_query($conexion,"UPDATE usuario SET medidor=$medidor WHERE rut=$rut");

  header("Location: actualizarMedidor.php");

 ?>