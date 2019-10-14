<?php
include'conexion.php';
$variable=$_GET["var"];
//$variable2=$_POST["var2"];
//$variable3=$_POST["var3"];

//$variable= 4;
//$variable2= 11111;
//$variable3= '2222222443556';

//$variable = 123;

//echo $variable;
//echo $variable2;
//echo $variable3;*/
/*
$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);*/

$update = mysqli_query($conexion, "SELECT * FROM usuario where id = $variable");



//while ( $row=mysqli_fetch_array($update)) {
$row=mysqli_fetch_array($update);
printf ($row['medidor']);
printf (",");
printf ($row['nombre']);
printf (",");
printf ($row['apellido']);
printf (",");
printf ($row['rut']);
printf (",");
printf ($row['direccion']);
printf (",");
printf ($row['id']);


//}



mysqli_close($conexion);



 ?>