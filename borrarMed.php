<?php
include'conexion.php';
$medidor=(int)$_POST["medidor"];


//$medidor=55555;
//$rut=324442223;
/*
$server = "localhost";
$username = "id9909986_pruebas";
$baseDatos = "id9909986_bd_pruebas";
$password = "agua2019";

$conexion = mysqli_connect($server,$username,$password,$baseDatos);*/

$idUl = mysqli_query($conexion, "SELECT id FROM usuario order by id desc limit 1");
$row2=mysqli_fetch_array($idUl);
$idU = $row2['id'];

$actualizar = mysqli_query($conexion,"DELETE FROM usuario WHERE medidor=$medidor");

$idPr = mysqli_query($conexion, "SELECT id FROM usuario order by id asc limit 1");
$row1=mysqli_fetch_array($idPr);
$idP = $row1['id'];

$cont=1;
$cont2 = $row1['id'];

//echo (int)$idU;

while($cont <= $row2['id']){
    $conexion = mysqli_connect($server,$username,$password,$baseDatos);
    $consul = mysqli_query($conexion, "SELECT id FROM usuario WHERE id=$cont2");
    $row3=mysqli_fetch_array($consul);
    if($row3['id'] != null){
       $actualizar = mysqli_query($conexion,"UPDATE usuario SET id=$cont WHERE id=$cont2");
        $cont = $cont + 1;
        $cont2 = $cont2 + 1;
    }else{
        $actualizar = mysqli_query($conexion,"UPDATE usuario SET id=$cont WHERE id=$cont2+1");
        $cont2 = $cont2 + 2;
        $cont = $cont + 1;
    }

   

}


  header("Location: borrarMedidor.php");

 ?>