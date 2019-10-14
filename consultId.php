<?php
include'conexion.php';
//$variable=$_GET["var"];

//echo $variable;
//echo $variable2;
//echo $variable3;*/
/*
$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";

$conexion = mysqli_connect($server,$username,$password,$baseDatos);*/

$update = mysqli_query($conexion, "SELECT id FROM usuario order by id desc limit 1");

//while ( $row=mysqli_fetch_array($update)) {
$row=mysqli_fetch_array($update);
echo ($row[0]);


//}



mysqli_close($conexion);



 ?>