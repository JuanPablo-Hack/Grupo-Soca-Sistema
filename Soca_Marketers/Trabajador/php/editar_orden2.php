<?php

include 'conexion.php';

$id=$_POST['identificador'];

$mina=$_POST['mina'];
$unidad=$_POST['unidad'];
$operador=$_POST['operador'];
$p_tara=$_POST['p_tara'];
$p_burto=$_POST['p_burto'];
$p_neto=$_POST['p_neto'];
$autoriza=$_POST['autoriza'];
$no_sello=$_POST['no_sello'];
$hora=$_POST['hora_salida'];
$mineral=$_POST['mineral'];
$recibe=$_POST['recibe'];

//Mandando el archivo

$archivo = $_FILES['archivo']['name'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
       
        $ruta_manifiestos = '../../patio/';
        $ruta_manifiestos_cliente = $ruta_manifiestos . $no_guia . "/";

        if(!file_exists($ruta_manifiestos)){
        mkdir($ruta_manifiestos, 0777, true);
        }
        if(!file_exists($ruta_manifiestos_cliente)){
        mkdir($ruta_manifiestos_cliente, 0777, true);
        }

        move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['archivo']['name']); 

        $sql="UPDATE patio_acopio SET mina_origen='$mina',unidad='$unidad',operador='$operador',no_guia='$no_guia',mineral='$mineral',p_tara='$p_tara',p_bruto='$p_burto',p_neto='$p_neto',autoriza='$autoriza',recibe='$recibe',hora_ingreso='$hora',ruta='$archivo'  WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>