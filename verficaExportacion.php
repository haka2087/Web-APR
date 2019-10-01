<?php

$variable=$_GET["var"];

$server = "localhost";
$username = "id10155249_aguabd";
$baseDatos = "id10155249_aguabd";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

$update = mysqli_query($conexion, "SELECT fecha FROM registros order by id desc limit 1");

//while ( $row=mysqli_fetch_array($update)) {
$row=mysqli_fetch_array($update);
$fecha = $row['fecha'];
$mes = substr($fecha, 2,2);

printf ($mes);
/*printf (",");
printf ($row['nombre']);
printf (",");
printf ($row['apellido']);
printf (",");
printf ($row['rut']);
printf (",");
printf ($row['direccion']);
printf (",");
printf ($row['id']);*/


//}



mysqli_close($conexion);



 ?>