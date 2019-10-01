<?php include("seguridad.php"); ?> 

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
    <td><?php echo $row['rut'] ?></td>
    <td><?php echo $row['direccion'] ?></td>
        
    <td><?php echo $row['sector'] ?></td>

 </tr>
	
<?php } ?>
</table>


<div id="box">
<div>
	<a>Borrar Medidor</a>
</div>
<form id="form" action="borrarMed.php" method="post">
    <div>
        <label id="nominput" >Ingrese Medidor a borrar:</label>
        <br>
        <input class="input" type="text" name="medidor"/>

    </div>
    <div>
        

    </div>
    <br>
    
     <br>
    <div>
        <button class="button" type="submit">Borrar</button>
    </div>
    
</form>
</div>