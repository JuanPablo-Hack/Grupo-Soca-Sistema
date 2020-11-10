<?php

include 'conexion.php';

$mina=$_POST['mina'];
$unidad=$_POST['unidad'];
$operador=$_POST['operador'];
$p_tara=$_POST['p_tara'];
$p_burto=$_POST['p_burto'];
$p_neto=$_POST['p_neto'];
$autoriza=$_POST['autoriza'];
$hora=$_POST['hora_salida'];





if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO produccion_mina(nombre_mina,unidad,operador,p_tara,p_bruto,p_neto,autoriza,hora_salida) VALUES ('$mina','$unidad','$operador','$p_tara','$p_burto','$p_neto','$autoriza','$hora');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>