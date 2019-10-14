<?php
include'conexion.php';

$medidor=(int)$_POST["medidor"];
$pago=$_POST["pago"];

//$medidor=55555;
//$rut=324442223;
/*
$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";



$conexion = mysqli_connect($server,$username,$password,$baseDatos);*/
$id = mysqli_query($conexion, "SELECT mes FROM registros order by id desc limit 1");
$row1=mysqli_fetch_array($id);
$id2=$row1[0];


$actualizar = mysqli_query($conexion,"UPDATE registros SET pago='$pago' WHERE medidor=$medidor and mes=$id2");

  header("Location: pago.php");

 ?>