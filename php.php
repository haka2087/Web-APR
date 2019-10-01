<?php
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


////////////CONEXION A BASE DE DATOS

$server = "localhost";
$username = "id10155249_aguabd";
$baseDatos = "id10155249_aguabd";
$password = "agua2019";

$conexion = mysqli_connect($server,$username,$password,$baseDatos);

//////////////////////////CALCULO DE MONTO

//SACA MES DE LA VARIBLE FECHA
$fechaActual = substr($fecha, -6,2); //02
//echo $fechaActual;
//$fechaAnterior = (int)$fechaActual - 1; //no 01 sino que 1
//echo $fechaAnterior;

/*$lecturaAnterior = mysqli_query($conexion, "SELECT lectura, medidor FROM registros WHERE medidor = $medidor and mes = $fechaAnterior");
   $row2=mysqli_fetch_array($lecturaAnterior);
   $lecAnt = $row2['lectura'];
    $lecMed = $row2['medidor'];*/

  // echo $lecAnt;
   $lecAct = $lectura;
   //$monto = ($lecAct - $lecAnt) * 350 + 2000;
   
   	//echo $lecAnt;
   	//echo $lecMed;
$num = 1;

while($num < 3){
    
$fechaAnterior = (int)$fechaActual - $num;

$lecturaAnterior = mysqli_query($conexion, "SELECT lectura, medidor FROM registros WHERE medidor = $medidor and mes = $fechaAnterior");
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


$verificar = mysqli_query($conexion, "SELECT medidor FROM registros WHERE mes=$mes and medidor= $medidor");
$row3=mysqli_fetch_array($verificar);
$lect=$row3[0];




if($lect == $medidor ){
    printf("El medidor ".$medidor." ya tiene lectura registrada ");
    
}else if($lectura == 0  or ($lecAct - $lecAnt) < 0){
    
 printf("El medidor ".$medidor." no tiene lectura para registrar");
    
}else{
    
    $update = mysqli_query($conexion, "INSERT INTO registros (medidor, lectura, pago, monto, nombre, apellido, direccion, sector, fecha, rut, mes) VALUES ($medidor,$lectura, 'No', '$monto', '$nombre', '$apellido', '$direccion', '$sector', $fecha, $rut, $mes)"); 

 printf("El registo del medidor ".$medidor." se realizo correctamente");

    
}



mysqli_close($conexion);


 ?>