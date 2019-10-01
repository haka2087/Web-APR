<?php

//$variable=$_GET["var"];

//echo $variable;
//echo $variable2;
//echo $variable3;*/
$server = "localhost";
$username = "id10155249_aguabd";
$baseDatos = "id10155249_aguabd";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

 //$inserccion = mysqli_query($conexion, "INSERT INTO registros (medidor, lectura, pago, monto, nombre, apellido, direccion, sector, fecha, rut) VALUES //('null','null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 1232312)"); 

$update =  mysqli_query($conexion, "SELECT * FROM usuario");
while ( $row=mysqli_fetch_array($update)) {
	//identificar cunales don enteros con (int)
	$medidor=(int)$row[1]; 
	$nombre=$row[2];
	$apellido=$row[3];
	$direccion=$row[5];
	$sector=$row[6];
	$rut=$row[4];
	printf($row[1]);
	printf(",");
	printf($row[2]);
	printf(",");
	printf($row[3]);
	printf(",");
	printf($row[4]);
	printf(",");
	printf($row[5]);
	printf(",");
	printf($row[6]);
	printf(",");
	//NOTA= los enteros sin comillas y los strign con comillas
 $inserccion = mysqli_query($conexion, "INSERT INTO registros (medidor, lectura, pago, monto, nombre, apellido, direccion, sector, fecha, rut) VALUES ($medidor,'null', 'null', 'null', '$nombre', '$apellido', '$direccion', '$sector', 'null', $rut)"); 



} 

mysqli_close($conexion);



 ?>