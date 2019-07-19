<?php 
$var = "XXXXXXXXXXXXXX";
$destinatario = "fkrausea@hotmail.com"; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Consumo de Agua Potable</h1> 
<p> 
<b>Adjunto detalle de consumo de agua para este mes</b>. Prueba x
</p> 
</body> 
</html> 
'; 
$mensaje=str_replace("x", $var, $cuerpo);

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset='utf-81\r\n"; 

//dirección del remitente 
$headers .= "From: Comité del Agua <secretaria@apragua.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; */



mail($destinatario,$asunto,$mensaje,$headers);
?>