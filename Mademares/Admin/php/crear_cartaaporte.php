<?php

include 'conexion.php';

$ruta=$_POST['ruta'];
$destino=$_POST['destino'];
$materia=$_POST['materia'];
$embalaje=$_POST['embalaje'];
$peligro=$_POST['peligro'];
$numun=$_POST['numun'];
$clase=$_POST['clase'];
$cpa=$_POST['cpa'];
$denominacion=$_POST['denominacion'];
$bultos=$_POST['bultos'];
$lts=$_POST['lts'];
$peso_bruto=$_POST['peso_bruto'];
$nombre_exp=$_POST['nombre_exp'];
$dir_exp=$_POST['dir_exp'];
$pob_exp=$_POST['pob_exp'];
$tel_exp=$_POST['tel_exp'];
$nombre_dest=$_POST['nombre_dest'];
$dir_dest=$_POST['dir_dest'];
$pob_dest=$_POST['pob_dest'];
$tel_dest=$_POST['tel_dest'];








if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO cartaaporte(ruta,destino,materia,embalaje,peligro,numun,clase,cpa,denominacion,bultos,lts,peso_bruto,nombre_exp,dir_exp,pob_exp,tel_exp,nombre_dest,dir_dest,pob_dest,tel_dest) VALUES ('$ruta', '$destino', '$materia', '$embalaje', '$peligro', '$numun', '$clase', '$cpa', '$denominacion', '$bultos', '$lts','$peso_bruto','$nombre_exp','$dir_exp','$pob_exp','$tel_exp','$nombre_dest','$dir_dest','$pob_dest','$tel_dest');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_orden.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
?>