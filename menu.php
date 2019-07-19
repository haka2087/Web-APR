<?php include("seguridad.php"); ?> 

<!DOCTYPE html>
<html>
<head>
	  <meta charset='utf-8' />
	<title>Menu</title>
	<LINK rel=StyleSheet href="css/menu.css" type="text/css" media=screen>
</head>
<body>
	    <a class="button" href="salir.php">Salir</a>

	<div id="box">
		<button class="button" onclick="window.location.href = 'ingresarUsuarios.php';"> Ingresar Cliente </button>
		<br>
		<br>
		<button class="button" onclick="window.location.href = 'actualizarDueno.php';"> Actualizar Dueño Medidor </button>
		<br>
		<br>
		<button class="button"  onclick="window.location.href = 'actualizarMedidor.php';"> Actualizar Medidor </button>
		<br>
		<br>
		<button class="button" onclick="window.location.href = 'listaReg.php';"> Ver Registros Lectura </button>
			<br>
		<br>
		<button class="button" onclick="window.location.href = 'pago.php';"> Control de Pagos</button>
	</div>

</body>
</html>