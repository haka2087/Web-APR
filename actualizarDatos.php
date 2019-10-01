<?php

$medidor=(int)$_POST["medidor"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$rut=(int)$_POST["rut"];


$server = "localhost";
$username = "id10155249_aguabd";
$baseDatos = "id10155249_aguabd";
$password = "agua2019";



$conexion = mysqli_connect($server,$username,$password,$baseDatos);


$actualizar = mysqli_query($conexion,"UPDATE usuario SET nombre='$nombre', apellido='$apellido', rut=$rut WHERE medidor=$medidor");

header("Location: actualizarDueno.php");

 ?>