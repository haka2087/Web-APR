<?php include("seguridad.php"); ?> 


<!DOCTYPE html>
<html>
<head>
            <meta charset='utf-8' />

	<title>login APR</title>
    <LINK rel=StyleSheet href="css/ingresarUsr.css" type="text/css" media=screen>
</head>
<body>
    <a class="boton_m" href="menu.php">Menu</a>
    <a class="boton_m" href="salir.php">Salir</a>

	<div></div>

<div id="box">
<div>
	<a class="a">Ingreso de usuarios</a>
</div>
<form id="form" action="ingresarUsr.php" method="post">
    <div>
        <label id="nominput" >Medidor:</label>
        <br>
        <input class="input" type="text" name="medidor"/>

    </div>
    <br>
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
    <br><div>
        <label id="nominput" >Dirección:</label>
        <br>
        <input class="input" type="text" name="direccion"/>

    </div>
    <br>
    <div>
         <label id="nominput" >Sector:</label>
        <br>
        <input class="input" type="text" name="sector"/>
    </div>
    <br>
        
    <div>
        <button class="button" type="submit">Registrar Cliente</button>
    </div>
</form>
</div>

</body>
</html>