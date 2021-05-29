<?php

include 'conexion.php';

$id=$_POST['identificador'];

$mina=$_POST['mina'];
$material=$_POST['material'];
$tallas=$_POST['tallas'];
$calidad=$_POST['calidad'];
$metros=floatval($_POST['metros']);
$peso_1=$_POST['peso_1'];
$peso_2=$_POST['peso_2'];
$peso_3=$_POST['peso_3'];
$observaciones=$_POST['observaciones'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE lotes_acopio SET mina='$mina',material='$material',talla='$tallas',calidad='$calidad',metros='$metros',peso_1='$peso_1',peso_2='$peso_2',peso_3='$peso_3',observaciones='$observaciones' WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>