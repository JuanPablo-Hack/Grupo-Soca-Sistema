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
$no_guia=$_POST['no_guia'];
$hora=$_POST['hora_salida'];
$lote=$_POST['lote'];
$sello=$_POST['sello'];
$m3=$_POST['m3'];
$estado=$_POST['estado'];


if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE patio_acopio_salida SET patio_destino='$mina',unidad='$unidad',operador='$operador',no_guia='$no_guia',p_tara='$p_tara',p_bruto='$p_burto',p_neto='$p_neto',autoriza='$autoriza',hora_salida='$hora',no_lote='$lote',no_sello='$sello',m3='$m3',estado='$estado'  WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>