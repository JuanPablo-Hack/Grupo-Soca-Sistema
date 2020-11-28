<?php

include 'conexion.php';

$no_formato=$_POST['no_formato'];
$no_contenedor=$_POST['no_contenedor'];
$naviera=$_POST['naviera'];
$tipo_contenedor=$_POST['tipo_contenedor'];
$fecha=$_POST['fecha'];
$booking=$_POST['booking'];
$referencia=$_POST['referencia'];
$agencia_aduanal=$_POST['agencia_aduanal'];
$cliente=$_POST['cliente'];
$transportista=$_POST['transportista'];
$unidad=$_POST['unidad'];
$operador=$_POST['operador'];
$observaciones=$_POST['observaciones'];
$hora_comienzo=$_POST['hora_comienzo'];
$peso=$_POST['peso'];
$hora_final=$_POST['hora_final'];
$no_vgm=$_POST['no_vgm'];
$no_lote=$_POST['no_lote'];
$embalaje=$_POST['embalaje'];






if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO mercancia(no_formato,no_contenedor,naviera,tipo_contenedor,fecha,booking,referencia,agencia_aduanal,cliente,transportista,unidad,operador,observa,hora_comienzo,peso,hora_final,no_vgm,no_lote,embalaje) VALUES ('$no_formato','$no_contenedor','$naviera','$tipo_contenedor','$fecha','$booking','$referencia','$agencia_aduanal','$cliente','$transportista','$unidad','$operador','$observaciones','$hora_comienzo','$peso','$hora_final','$no_vgm','$no_lote','$embalaje');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>