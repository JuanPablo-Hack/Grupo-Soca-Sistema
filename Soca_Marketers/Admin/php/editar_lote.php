<?php

include 'conexion.php';

$id=$_POST['identificador'];

$mina=$_POST['mina'];
$material=$_POST['material'];
$tallas=$_POST['tallas'];
$calidad=$_POST['calidad'];
$metros=floatval($_POST['metros']);
$observaciones=$_POST['observaciones'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE lotes SET mina='$mina',material='$material',talla='$tallas',calidad='$calidad',metros='$metros',observaciones='$observaciones' WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>