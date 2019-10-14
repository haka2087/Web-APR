<!DOCTYPE html>
<html>
<head>
	<LINK rel=StyleSheet href="css/actualizarMedidor.css" type="text/css" media=screen>

	<title></title>
</head>

<a class="boton_pers" href="menu.php">Menu</a>
<a class="boton_pers" href="salir.php">Salir</a>

<?php
include'conexion.php';
/*
$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);*/

$id = mysqli_query($conexion, "SELECT mes FROM registros order by id desc limit 1");
$row1=mysqli_fetch_array($id);
$id2=$row1[0];

$update = mysqli_query($conexion, "SELECT * FROM registros WHERE mes=$id2");

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
            
            <th class="th">FECHA</th>
            <th class="th">RUT</th>
			

		</tr>
		</thead>
<?php

while ( $row=mysqli_fetch_array($update)) {?>
<tr>
<td><?php echo $row['medidor'] ?></td>
    <td><?php echo $row['lectura'] ?></td>
    <td><?php echo $row['pago'] ?></td>
    <td><?php echo $row['monto'] ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['apellido'] ?></td>
    <td><?php echo $row['direccion'] ?></td>
    
    <td><?php echo $row['fecha'] ?></td>
     <td><?php echo $row['rut'] ?></td>
        
    

 </tr>
	
<?php } ?>
</table>


<div id="box">
<div>
	<a>Editar Lectura</a>
</div>
<form id="form" action="editLect.php" method="post">
    <div>
        <label id="nominput" >Ingrese Número de Medidor:</label>
        <br>
        <input class="input" type="text" name="medidor"/>

    </div>
    <div>
        

    </div>
    <br>
    <div>
	<a>Lectura Correcta</a>
	<br>
	<br>
</div>
    <div>
         <label id="nominput" >Ingrese lectura correcta: </label>
        <br>
        <input class="input" type="text" name="pago"/>
    </div>
     <br>
    <div>
        <button class="button" type="submit">Modificar</button>
    </div>
    
</form>
</div>