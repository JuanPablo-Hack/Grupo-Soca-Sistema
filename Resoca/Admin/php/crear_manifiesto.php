<?php

include 'conexion.php';



$cliente=$_POST['cliente'];
$capacidad=$_POST['capacidad'];
$tipo=$_POST['tipo'];
$total_residuo=$_POST['total_residuo'];
$vol_peso=$_POST['vol_peso'];
$fecha=$_POST['fecha'];
$unidad=$_POST['unidad'];
$nombre_recibe=$_POST['nombre_recibe'];


if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO manifiestos (nombre,capacidad,tipo,totalresiduo,volpeso,fecha,unidad,nombrerecibe) VALUES ('$cliente', '$capacidad', '$tipo', '$total_residuo', '$vol_peso', '$fecha', '$unidad', '$nombre_recibe');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>