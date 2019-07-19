<?php

$medidor=(int)$_POST["medidor"];
$rut=(int)$_POST["rut"];


$server = "localhost";
$username = "root";
$baseDatos = "aguadb";
$password = "";



$conexion = mysqli_connect($server,$username,$password,$baseDatos);


$actualizar = mysqli_query($conexion,"UPDATE usuario SET medidor=$medidor, WHERE rut=$rut");

    header("Location: actualizarMedidor.php");

 ?>