<?php
////////////RECEPCION DE DATOS DESDE EL SMARTFONE

$medidor=(int)$_POST["medidor"];
//$medidor=11111;
$lectura=(int)$_POST["lectura"];
//$lectura=1832;
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$direccion=$_POST["direccion"];
$sector=$_POST["sector"];
$fecha=(int)$_POST["fecha"];
//$fecha=10082019;
$rut=$_POST["rut"];
$mes1= substr((string)$fecha,2,2);
$mes=(int)$mes1;


////////////CONEXION A BASE DE DATOS

$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";

$conexion = mysqli_connect($server,$username,$password,$baseDatos);

//////////////////////////CALCULO DE MONTO

//SACA MES DE LA VARIBLE FECHA
$fechaActual = substr($fecha, 2,2); //02
//echo $fechaActual;
$fechaAnterior = (int)$fechaActual - 1; //no 01 sino que 1
//echo $fechaAnterior;

$lecturaAnterior = mysqli_query($conexion, "SELECT lectura FROM registros WHERE medidor = $medidor and mes = $fechaAnterior");
   $row2=mysqli_fetch_array($lecturaAnterior);
   $lecAnt = $row2['lectura'];
  // echo $lecAnt;
   $lecAct = $lectura;
   $monto = ($lecAct - $lecAnt) * 350 + 2000;
   
   //	echo $lecAnt;

//////////////////////////////////////INSERTAR DATOS A LA TABLA

$update = mysqli_query($conexion, "INSERT INTO registros (medidor, lectura, pago, monto, nombre, apellido, direccion, sector, fecha, rut, mes) VALUES ($medidor,$lectura, 'null', '$monto', '$nombre', '$apellido', '$direccion', '$sector', $fecha, $rut, $mes)"); 

mysqli_close($conexion);

echo "SUUUUUUUUUUUper bien"

 ?>