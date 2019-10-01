<?php

$user=$_POST["user"];
$pass=$_POST["pass"];

//$user="admin";
//n$pass="admin3";

$server = "localhost";
$username = "id10155249_aguabd";
$baseDatos = "id10155249_aguabd";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

$update = mysqli_query($conexion, "SELECT usuario, contrasena FROM user WHERE usuario = '$user'");

$row=mysqli_fetch_array($update);
$varUser = $row['usuario'];
$varPass = $row['contrasena'];


if($varPass== $pass and $varPass != "" and $user != ""){

	  session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] = $varUser;
   //   echo $_SESSION["usuarioactual"] ;
//      echo $_SESSION["autentica"] ;
      //nombre del usuario logueado. 
      //Direccionamos a nuestra página principal del sistema. 
      header ("Location: menu.php"); 

}else{
		echo "<script>alert('Login invalido');window.location.href='login.html';</script>";


}



/*if ($user == $row['usuario'] and $pass == $row['contrasena']) {
		echo "<script>alert('Conexion Exitosa');</script>";

	header("Location: menu.html"); 
}else{
	header("Location: login.html");

}*/

mysqli_close($conexion);


 ?>