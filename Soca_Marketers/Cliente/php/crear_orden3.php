<?php

include 'conexion.php';

$mina=$_POST['mina'];
$unidad=$_POST['unidad'];
$operador=$_POST['operador'];
$p_tara=$_POST['p_tara'];
$p_burto=$_POST['p_burto'];
$p_neto=$_POST['p_neto'];
$autoriza=$_POST['autoriza'];
$no_guia=$_POST['no_guia'];
$vgm=$_POST['vgm'];
$hora=$_POST['hora_salida'];
$nombre_cliente=$_POST['nombre_cliente'];
$lote=$_POST['lote'];
$sello=$_POST['sello'];
$estado=1;





if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO patio_acopio_salida(cliente,patio_destino,unidad,operador,no_guia,p_tara,p_bruto,p_neto,no_vgm,autoriza,hora_salida,no_lote,no_sello,estado) VALUES ('$nombre_cliente','$mina','$unidad','$operador','$no_guia','$p_tara','$p_burto','$vgm','$p_neto','$autoriza','$hora','$lote','$sello','$estado');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>