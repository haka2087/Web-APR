<?php

$medidor=(int)$_POST["medidor"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$rut=(int)$_POST["rut"];


$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";



$conexion = mysqli_connect($server,$username,$password,$baseDatos);


$actualizar = mysqli_query($conexion,"UPDATE usuario SET nombre='$nombre', apellido='$apellido', rut=$rut WHERE medidor=$medidor");

header("Location: actualizarDueno.php");

 ?>