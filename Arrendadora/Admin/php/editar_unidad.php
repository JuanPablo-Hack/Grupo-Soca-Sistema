<?php

include 'conexion.php';


$id=$_POST['identificador'];
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
   
        
        $sql="UPDATE unidades SET marca='$marca',modelo='$modelo',ano='$ano',color='$color',placas='$placas',no_economico='$no_economico',no_serie='$no_serie',no_filtro_aceite='$no_filtro_aceite',no_filtro_secu='$no_filtro_secu',tipo_aceite='$tipo_aceite',cantidad='$cantidad_aceite',no_filtro_hidra='$no_filtro_hidra',tipo_aceite2='$tipo_aceite2',cantidad2='$cantidad_aceite2',no_filtro_combus='$no_filtro_combus',no_filtro_aire='$no_filtro_aire',no_bandas='$no_bandas',tipo_aceite_dif='$aceite_dif',cantidad_dif='$cantidad_dif',liquido_freno='$liquido_freno',cantidad_freno='$cantidad_freno',anticongelante='$anticongelante',cantidad_anti='$cantidad_anti',tipo_aceite_trans='$aceite_trans',cantidad_trans='$cantidad_trans'  WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
  




?>