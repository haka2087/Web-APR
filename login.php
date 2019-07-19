<?php

$user=$_POST["user"];
$pass=$_POST["pass"];

//$user="admin";
//n$pass="admin3";

$server = "localhost";
$username = "id9909986_apr";
$baseDatos = "id9909986_apr";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

$update = mysqli_query($conexion, "SELECT usuario, contrasena FROM user WHERE usuario = '$user'");

$row=mysqli_fetch_array($update);


if ($user == $row['usuario'] and $pass == $row['contrasena']) {

	header("Location: menu.html"); 
}else{
	echo "No pass";
}

mysqli_close($conexion);


 ?>