<?php

include'conexion.php';

$user=$_POST["user"];
$pass1=$_POST["pass"];

$update = mysqli_query($conexion, "SELECT usuario, contrasena FROM user WHERE usuario = '$user'");

$row=mysqli_fetch_array($update);
$varUser = $row['usuario'];
$varPass = $row['contrasena'];
$pass = sha1($pass1);
//echo $varPass;

if($varPass == $pass and $varPass != "" and $user != ""){

	  session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] = $varUser;

      header ("Location: menu.php"); 

}else{
		echo "<script>alert('Login invalido');window.location.href='login.html';</script>";


}


mysqli_close($conexion);


 ?>