<?php

include 'conexion.php';

$mina=$_POST['mina'];
$no_lote=$_POST['no_lote'];
$material=$_POST['material'];
$tallas=$_POST['tallas'];
$calidad=$_POST['calidad'];
$metros=floatval($_POST['metros']);
$observaciones=$_POST['observaciones'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO lotes(mina,no_lote,material,talla,calidad,metros,observaciones) VALUES ('$mina','$no_lote','$material','$tallas','$calidad','$metros','$observaciones');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>