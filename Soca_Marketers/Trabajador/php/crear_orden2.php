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
$mineral=$_POST['mineral'];
$recibe=$_POST['recibe'];
$hora=$_POST['hora_salida'];
$nombre_cliente=$_POST['nombre_cliente'];
$lote=$_POST['lote'];
$sello=$_POST['sello'];
$estado=1;

$imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));


if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO patio_acopio(cliente,mina_origen,unidad,operador,no_guia,mineral,p_tara,p_bruto,p_neto,autoriza,recibe,hora_ingreso,no_lote,no_sello,estado,foto) VALUES ('$nombre_cliente','$mina','$unidad','$operador','$no_guia','$mineral','$p_tara','$p_burto','$p_neto','$autoriza','$recibe','$hora','$lote','$sello','$estado','$imagen');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_orden2.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>