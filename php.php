<?php
include'conexion.php';
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
$mes1= substr((string)$fecha,-6,2);
$mes=(int)$mes1;
$anio = substr((string)$fecha,-4,4);
$anio2= (int)$anio;
//////////////////////////CALCULO DE MONTO

//SACA MES DE LA VARIBLE FECHA
$fechaActual = substr($fecha, -6,2); //02

   $lecAct = $lectura;
  
$num = 1;

while($num < 12){

if($num == 12){

  $monto=$lectura * 350 + 2000;
  break;
}
    
$fechaAnterior = (int)$fechaActual - $num;
//echo "$fechaAnterior";

if($fechaAnterior == 0){
  $fechaActual=13;
  $anio2 = $anio2 -1;
  continue;
}

$lecturaAnterior = mysqli_query($conexion, "SELECT lectura, medidor FROM registros WHERE medidor = $medidor and mes = $fechaAnterior and anio = $anio2");
   $row2=mysqli_fetch_array($lecturaAnterior);
   $lecAnt = $row2['lectura'];
   $lecMed = $row2['medidor'];
    
if($row2['medidor']==$medidor){
    $monto = ($lecAct - $lecAnt) * 350 + 2000;
    //echo"$lecAnt";
    break;
}else{
        $num = $num + 1;
    $monto=$lectura * 350 + 2000;
}
}

//////////////////////////////////////INSERTAR DATOS A LA TABLA

$id = mysqli_query($conexion, "SELECT mes FROM registros order by id desc limit 1");
$row1=mysqli_fetch_array($id);
$id2=$row1[0];


$verificar = mysqli_query($conexion, "SELECT medidor FROM registros WHERE mes=$mes and medidor= $medidor and fecha = $fecha");
$row3=mysqli_fetch_array($verificar);
$lect=$row3[0];




if($lect == $medidor ){
    printf("El medidor ".$medidor." ya tiene lectura registrada ");
    
}else if($lectura == 0  or ($lecAct - $lecAnt) < 0){
    
 printf("El medidor ".$medidor." no tiene lectura para registrar");
    
}else{
    
    $update = mysqli_query($conexion, "INSERT INTO registros (medidor, lectura, pago, monto, nombre, apellido, direccion, sector, fecha, rut, mes, anio) VALUES ($medidor,$lectura, 'No', '$monto', '$nombre', '$apellido', '$direccion', '$sector', $fecha, $rut, $mes, '$anio')"); 

 printf("El registo del medidor ".$medidor." se realizo correctamente");

    
}



mysqli_close($conexion);


 ?>