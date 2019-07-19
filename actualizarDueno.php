<!DOCTYPE html>
<html>
<head>
	<LINK rel=StyleSheet href="css/actualizar.css" type="text/css" media=screen>

	<title></title>
</head>

<a class="boton_menu" href="menu.html">Menu</a>

<?php

$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";


$conexion = mysqli_connect($server,$username,$password,$baseDatos);

$update = mysqli_query($conexion, "SELECT * FROM usuario");

?>

<table class="tabla" border="1px">
  	
		<thead>
		<tr>
			<th class="th">MEDIDOR</th>
			<th class="th">NOMBRE</th>
			<th class="th">APELLIDO</th>
			<th class="th">RUT</th>
			<th class="th">DIRECCION</th>
			<th class="th">SECTOR</th>
			

		</tr>
		</thead>
<?php

while ( $row=mysqli_fetch_array($update)) {?>
<tr>
<td><?php echo $row['medidor'] ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['apellido'] ?></td>
    <td><?php echo $row['direccion'] ?></td>
        <td><?php echo $row['rut'] ?></td>
    <td><?php echo $row['sector'] ?></td>

 </tr>
	
<?php } ?>
</table>


<div id="box">
<div>
	<a>Medidor</a>
</div>
<form id="form" action="actualizarDatos.php" method="post">
    <div>
        <label id="nominput" >Ingrese medidor a cambiar:</label>
        <br>
        <input class="input" type="text" name="medidor"/>

    </div>
    <div>
        

    </div>
    <br>
    <div>
	<a>Datos de nuevo Dueño</a>
	<br>
	<br>
</div>
    <div>
         <label id="nominput" >Nombre:</label>
        <br>
        <input class="input" type="text" name="nombre"/>
    </div>
    <br>
     <div>
         <label id="nominput" >Apellido:</label>
        <br>
        <input class="input" type="text" name="apellido"/>
    </div>
    <br>
    <div>
         <label id="nominput" >Rut:</label>
        <br>
        <input class="input" type="text" name="rut"/>
    </div>
    <br>
    <div>
        <button class="button" type="submit">Actualizar</button>
    </div>
</form>
</div>