<?php

include 'conexion.php';

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$ano=$_POST['ano'];
$color=$_POST['color'];
$placas=$_POST['placas'];
$no_economico=$_POST['no_economico'];
$no_serie=$_POST['no_serie'];
$no_filtro_aceite=$_POST['no_filtro_aceite'];
$no_filtro_secu=$_POST['no_filtro_secu'];
$tipo_aceite=$_POST['tipo_aceite'];
$cantidad_aceite=$_POST['cantidad_aceite'];
$no_filtro_hidra=$_POST['no_filtro_hidra'];
$tipo_aceite2=$_POST['tipo_aceite2'];
$cantidad_aceite2=$_POST['cantidad_aceite2'];
$no_filtro_combus=$_POST['no_filtro_combus'];
$no_filtro_aire=$_POST['no_filtro_aire'];
$no_bandas=$_POST['no_bandas'];
$aceite_dif=$_POST['aceite_dif'];
$cantidad_dif=$_POST['cantidad_dif'];
$liquido_freno=$_POST['liquido_freno'];
$cantidad_freno=$_POST['cantidad_freno'];
$anticongelante=$_POST['anticongelante'];
$cantidad_anti=$_POST['cantidad_anti'];
$aceite_trans=$_POST['aceite_trans'];
$cantidad_trans=$_POST['cantidad_trans'];






if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
        
        $sql="INSERT INTO unidades(marca,modelo,ano,color,placas,no_economico,no_serie,no_filtro_aceite,no_filtro_secu,tipo_aceite,cantidad,no_filtro_hidra,tipo_aceite2,cantidad2,no_filtro_combus,no_filtro_aire,no_bandas,tipo_aceite_dif,cantidad_dif,liquido_freno,cantidad_freno,anticongelante,cantidad_anti,tipo_aceite_trans,cantidad_trans) VALUES ('$marca','$modelo','$ano','$color','$placas','$no_economico','$no_serie','$no_filtro_aceite','$no_filtro_secu','$tipo_aceite','$cantidad_aceite','$no_filtro_hidra','$tipo_aceite2','$cantidad_aceite2','$no_filtro_combus','$no_filtro_aire','$no_bandas','$aceite_dif','$cantidad_dif','$liquido_freno','$cantidad_freno','$anticongelante','$cantidad_anti','$aceite_trans','$cantidad_trans')";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_unidad.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
  




?>