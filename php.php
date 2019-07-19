<?php

$medidor=(int)$_POST["medidor"];
$lectura=(int)$_POST["lectura"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$direccion=$_POST["direccion"];
$sector=$_POST["sector"];
$fecha=$_POST["fecha"];
$rut=(int)$_POST["rut"];
/*
$medidor=11111;
$lectura=22222;
$nombre="nombre";
$apellido="apellido";
$direccion="direccion";
$sector="sector";
$fecha="20171243";
$rut=123334445; */

$server = "localhost";
$username = "id9909986_apr";
$baseDatos = "id9909986_apr";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

$update = mysqli_query($conexion, "INSERT INTO registro (medidor, lectura, pago, monto, nombre, apellido, direccion, sector, fecha, rut) VALUES ($medidor,$lectura, 'no', 0, '$nombre', '$apellido', '$direccion', '$sector', '$fecha', $rut)"); 

mysqli_close($conexion);

echo "SUUUUUUUUUUUper bien"

 ?>