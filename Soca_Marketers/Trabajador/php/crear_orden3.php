<?php

include 'conexion.php';

$mina=$_POST['mina'];
$unidad=$_POST['unidad'];

$p_tara=$_POST['p_tara'];
$p_burto=$_POST['p_burto'];
$p_neto=$_POST['p_neto'];
$autoriza=$_POST['autoriza'];
$no_guia=$_POST['no_guia'];
$hora=$_POST['hora_salida'];
$nombre_cliente=$_POST['nombre_cliente'];
$lote=$_POST['lote'];
$sello=$_POST['sello'];
$m3=$_POST['m3'];
$transportista_id=$_POST['transportista_id'];
$estado=1;

// Enviando Fotos
$imagen = $_FILES['foto']['name'];

//Mandando el archivo

$archivo = $_FILES['archivo']['name'];


if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
        $ruta_manifiestos = '../../salidas/';
        $ruta_manifiestos_cliente = $ruta_manifiestos . $no_guia . "/";

        if(!file_exists($ruta_manifiestos)){
        mkdir($ruta_manifiestos, 0777, true);
        }   
        if(!file_exists($ruta_manifiestos_cliente)){
        mkdir($ruta_manifiestos_cliente, 0777, true);
        }

        move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['archivo']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['foto']['name']);
         
        $sql="INSERT INTO patio_acopio_salida(cliente,patio_destino,unidad,no_guia,p_tara,p_bruto,p_neto,autoriza,hora_salida,no_lote,no_sello,m3,transportista_id,estado,foto,ruta) VALUES ('$nombre_cliente','$mina','$unidad','$no_guia','$p_tara','$p_burto','$p_neto','$autoriza','$hora','$lote','$sello','$m3','$transportista_id','$estado','$imagen','$archivo');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_orden3.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>