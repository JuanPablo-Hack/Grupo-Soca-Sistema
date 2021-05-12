<?php

include 'conexion.php';

$mina=$_POST['mina'];
$no_lote=$_POST['no_lote'];
$material=$_POST['material'];
$tallas=$_POST['tallas'];
$calidad=$_POST['calidad'];
$metros=floatval($_POST['metros']);
$peso_1=$_POST['peso_1'];
$peso_2=$_POST['peso_2'];
$peso_3=$_POST['peso_3'];
$peso_4=$_POST['peso_4'];
$observaciones=$_POST['observaciones'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO lotes_acopio(mina,no_lote,material,talla,calidad,metros,peso_1,peso_2,peso_3,peso_4,observaciones) VALUES ('$mina','$no_lote','$material','$tallas','$calidad','$metros','$peso_1','$peso_2','$peso_3','$peso_4','$observaciones');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>