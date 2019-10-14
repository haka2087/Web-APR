<?php
include'conexion.php';
$medidor=$_POST["medidor"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$rut=$_POST["rut"];
$direccion=$_POST["direccion"];
$sector=$_POST["sector"];

function validarRut($trut){

			$dvt = substr($trut, strlen($trut) - 1, strlen($trut));
		    $rutt = substr($trut, 0, strlen($trut) - 1);
		    $rut = (($rutt) + 0);
		    $pa = $rut;
		    $c = 2;
		    $sum = 0;
		    while ($rut > 0)
		    {

		        $a1 = $rut % 10;
		        $rut = floor($rut / 10);
		        $sum = $sum + ($a1 * $c);
		        $c = $c + 1;
		        if ($c == 8)
		        {
		            $c = 2;
		        }

		    }
		    $di = $sum % 11;
		    $digi = 11 - $di;
		    $digi1 = ((string )($digi));

		    if (($digi1 == '10'))
		    {
		        $digi1 = 'K';
		    }
		    if (($digi1 == '11'))
		    {
		       $digi1 = '0';
		    }

		    if (($dvt == $digi1))

		    {

		        return 1;

		    } else

		    {

		        return 0;

		    }

        }

if(validarRut($rut)==0){
	echo "<script>alert('el rut no es valido');window.location.href='ingresarUsuarios.php';</script>";
}

$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
for ($i=0; $i<strlen($permitidos); $i++){
if (strpos($permitidos, substr($rut,$i,1))!==false){
//no es válido;
 echo "<script>alert('Formato de Rut requerido no es valido ');window.location.href='ingresarUsuarios.php';</script>";
  //header ("Location: ingresarUsuarios.php");
}
}

if (strpos($rut, '.') !== false) {
    echo "<script>alert('Formato de Rut ingresado no es valido ');window.location.href='ingresarUsuarios.php';</script>";
    //header ("Location: ingresarUsuarios.php");
}
elseif (strpos($rut, '+') !== false) {
    echo "<script>alert('Formato de Rut ingresado no es valido ');window.location.href='ingresarUsuarios.php';</script>";
    //header ("Location: ingresarUsuarios.php");
}
elseif (strpos($rut, '-') !== false) {
    echo "<script>alert('Formato de Rut ingresado no es valido ');window.location.href='ingresarUsuarios.php';</script>";
    //header ("Location: ingresarUsuarios.php");
}else{
//$user="admin";
//n$pass="admin3";
/*
$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);*/

$update = mysqli_query($conexion, "INSERT INTO usuario (medidor, nombre, apellido, rut, direccion, sector, correo) VALUES ($medidor, '$nombre', '$apellido', $rut, '$direccion','$sector','null')"); 



mysqli_close($conexion);

 echo "<script>alert('Usuario registrado con éxito. clic en aceptar para continuar');window.location.href='ingresarUsuarios.php';</script>";

}
 ?>
