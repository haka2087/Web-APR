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
$username = "id10155249_aguabd";
$baseDatos = "id10155249_aguabd";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

$update = mysqli_query($conexion, "INSERT INTO usuario (medidor, nombre, apellido, rut, direccion, sector, correo) VALUES ($medidor, '$nombre', '$apellido', $rut, '$direccion','$sector','null')"); 



mysqli_close($conexion);

 echo "<script>alert('Usuario registrado con éxito. clic en aceptar para continuar');window.location.href='ingresarUsuarios.php';</script>";


 ?>