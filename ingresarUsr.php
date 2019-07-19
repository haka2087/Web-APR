<?php

$medidor=$_POST["medidor"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$rut=$_POST["rut"];
$direccion=$_POST["direccion"];
$sector=$_POST["sector"];

//$user="admin";
//n$pass="admin3";

$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

$update = mysqli_query($conexion, "INSERT INTO usuario (medidor, nombre, apellido, rut, direccion, sector) VALUES ($medidor, '$nombre', '$apellido', $rut, '$direccion','$sector')"); 



mysqli_close($conexion);


 ?>