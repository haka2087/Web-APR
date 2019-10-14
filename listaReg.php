<?php include("seguridad.php"); ?> 

<!DOCTYPE html>
<html>
<head>
	<LINK rel=StyleSheet href="css/listaReg.css" type="text/css" media=screen>

	<title></title>
</head>

<a class="boton_me" href="menu.php">Menu</a>
<a class="boton_me" href="salir.php">Salir</a>


<?php
include'conexion.php';
/*
$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);*/

$update = mysqli_query($conexion, "SELECT * FROM registros");

?>

<table class="tabla" border="1px">
  	
		<thead>
		<tr>
			<th class="th">MEDIDOR</th>
			<th class="th">LECTURA</th>
			<th class="th">PAGO</th>
			<th class="th">MONTO</th>
			<th class="th">NOMBRE</th>
			<th class="th">APELLIDO</th>
			<th class="th">DIRECCION</th>
			<!--<th class="th">SECTOR</th>-->
			<th class="th">FECHA</th>
			<th class="th">RUT</th>
			<th class="th">MES</th>

		</tr>
		</thead>
<?php

$ultfecha = mysqli_query($conexion, "SELECT mes FROM registros order by id desc limit 1");

$rowFecha=mysqli_fetch_array($ultfecha);
$fechaActual = $rowFecha['mes'];
//echo $fechaActual;

while ( $row=mysqli_fetch_array($update)) {?>
<tr>
<td><?php echo $row['medidor'] ?></td>
    <td><?php echo $row['lectura'] ?></td>
    <td><?php echo $row['pago'] ?></td>
    <td><?php echo $row['monto']?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['apellido'] ?></td>
    <td><?php echo $row['direccion'] ?></td>
    <!--<td><?php echo $row['sector'] ?></td>-->
    <td><?php echo $row['fecha']?></td>
    <td><?php echo $row['rut'] ?></td>
    <td><?php echo $row['mes'] ?></td>
 </tr>
	
<?php } ?>
