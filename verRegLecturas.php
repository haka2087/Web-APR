<!DOCTYPE html>
<html>
<head>
	<LINK rel=StyleSheet href="css/actualizarMedidor.css" type="text/css" media=screen>

	<title></title>
</head>

<a class="boton_pers" href="menu.php">Menu</a>
<a class="boton_pers" href="salir.php">Salir</a>

<?php

$server = "localhost";
$username = "id10155249_aguabd";
$baseDatos = "id10155249_aguabd";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

//$id = mysqli_query($conexion, "SELECT mes FROM registros order by id desc limit 1");
//$row1=mysqli_fetch_array($id);
//$id2=$row1[0];

$update = mysqli_query($conexion, "SELECT * FROM red_edicion_lect");

?>

<table class="tabla" border="1px">
  	
		<thead>
		<tr>
			<th class="th">MEDIDOR</th>
			<th class="th">LECTURA ERRONEA</th>
			<th class="th">LECTURA CORREGIDA</th>
			<th class="th">FECHA</th>
		</tr>
		</thead>
<?php

while ( $row=mysqli_fetch_array($update)) {?>
<tr>
<td><?php echo $row['medidor'] ?></td>
    <td><?php echo $row['lectura_ant'] ?></td>
    <td><?php echo $row['lectura_act'] ?></td>
    <td><?php echo $row['fecha'] ?></td>
  
    

 </tr>
	
<?php } ?>