<?php

include 'conexion.php';

$nombre_cliente=$_POST['nombre_cliente'];
$mina=$_POST['mina'];
$mineral=$_POST['mineral'];
$metros=$_POST['metros'];
$destino=$_POST['destino'];
$unidad=$_POST['unidad'];
$operador=$_POST['operador'];
$p_tara=$_POST['p_tara'];
$p_burto=$_POST['p_burto'];
$p_neto=$_POST['p_neto'];
$autoriza=$_POST['autoriza'];
$no_guia=$_POST['no_guia'];
$hora=$_POST['hora_salida'];





if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO produccion_mina(cliente,nombre_mina,mineral,unidad,operador,no_guia,p_tara,p_bruto,p_neto,metros3,autoriza,hora_salida,destino) VALUES ('$nombre_cliente','$mina','$mineral','$unidad','$operador','$no_guia','$p_tara','$p_burto','$p_neto','$metros','$autoriza','$hora','$destino');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>