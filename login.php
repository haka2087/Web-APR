<?php

$user=$_POST["user"];
$pass=$_POST["pass"];

//$user="admin";
//n$pass="admin3";

$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

$update = mysqli_query($conexion, "SELECT usuario, contrasena FROM user WHERE usuario = '$user'");

$row=mysqli_fetch_array($update);


if ($user == $row['usuario'] and $pass == $row['contrasena']) {

	header("Location: menu.html"); 
}else{
	header("Location: login.html");

}

mysqli_close($conexion);


 ?>