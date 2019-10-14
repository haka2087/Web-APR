<?php
include'conexion.php';

$medidor=(int)$_POST["medidor"];
$pago=$_POST["pago"];
$fecha =date("Y-m-d");


//$medidor=55555;
//$rut=324442223;
/*
$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";

$conexion = mysqli_connect($server,$username,$password,$baseDatos);*/

$id = mysqli_query($conexion, "SELECT mes FROM registros order by id desc limit 1");
$row1=mysqli_fetch_array($id);
$id2=$row1[0];
$idant=$id2 -1;


$lecturaAnt = mysqli_query($conexion, "SELECT lectura FROM registros WHERE mes=$idant and medidor= 11111");
$rowAnt=mysqli_fetch_array($lecturaAnt);
$lectAnt=$rowAnt[0];


$respaldar = mysqli_query($conexion, "SELECT lectura FROM registros WHERE mes=$id2 and medidor= $medidor");
$row3=mysqli_fetch_array($respaldar);
$lect=$row3[0];

$monto = ($pago - $lectAnt) * 350 + 2000;

$guardar = mysqli_query($conexion, "INSERT INTO red_edicion_lect (medidor, lectura_ant, lectura_act, fecha) VALUES ($medidor,$lect,0,'$fecha')"); 


$actualizar = mysqli_query($conexion,"UPDATE registros SET lectura='$pago' WHERE medidor=$medidor and mes=$id2");

$respaldar2 = mysqli_query($conexion, "SELECT lectura FROM registros WHERE mes=$id2 and medidor= $medidor");
$row4=mysqli_fetch_array($respaldar2);
$lect2=$row4[0];

$actualizarReg = mysqli_query($conexion,"UPDATE red_edicion_lect SET lectura_act=$lect2 WHERE medidor=$medidor");

$actualizarPago = mysqli_query($conexion,"UPDATE registros SET monto='$monto' WHERE medidor=$medidor and mes=$id2");

  header("Location: editarLectura.php");

 ?>