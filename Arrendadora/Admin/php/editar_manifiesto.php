<?php

include 'conexion.php';

$id=$_POST['identificador'];
$cliente=$_POST['nombre_cliente'];
$capacidad=$_POST['capacidad'];
$tipo=$_POST['tipo'];
$total_residuo=$_POST['total_residuo'];
$vol_peso=$_POST['vol_peso'];
$fecha=$_POST['fecha'];
$unidad=$_POST['unidad'];
$nombre_recibe=$_POST['nombre_recibe'];
$estado=$_POST['estado'];


if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE manifiestos SET nombre='$cliente',capacidad='$capacidad',tipo='$tipo',totalresiduo='$total_residuo',volpeso='$vol_peso',fecha='$fecha',unidad='$unidad',nombrerecibe='$nombre_recibe',estado='$estado' WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>