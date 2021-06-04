<?php

include 'conexion.php';

$id=$_POST['identificador'];

$fecha_recep=$_POST['fecha_recep'];
$material=$_POST['material'];
$folio=$_POST['folio'];

$peso=$_POST['peso'];
$tipo=$_POST['tipo'];
$lab_ext=$_POST['lab_ext'];
$fecha_envio=$_POST['fecha_envio'];
$servicio_soli=$_POST['servicio_soli'];
$ele_ana=$_POST['ele_ana'];
$lote=$_POST['lote'];
$localidad=$_POST['localidad'];
$info_geo=$_POST['info_geo'];
$peso_esp=$_POST['peso_esp'];
$observaciones=$_POST['observaciones'];

$estado=$_POST['estado'];

//Mando a llamar al archivo de
$archivo = $_FILES['archivo']['name'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
        $ruta_manifiestos = '../prospeccion/';
        $ruta_manifiestos_cliente = $ruta_manifiestos . $folio . "/";

        if(!file_exists($ruta_manifiestos)){
            mkdir($ruta_manifiestos, 0777, true);
            }
            if(!file_exists($ruta_manifiestos_cliente)){
            mkdir($ruta_manifiestos_cliente, 0777, true);
            }
        
        move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['archivo']['name']);  
        $sql="UPDATE prospecion_mina SET fecha_recep='$fecha_recep',folio='$folio',material='$material',peso='$peso',tipo_muestra='$tipo',lab_ext='$lab_ext',fecha_envio='$fecha_envio',servicio_soli='$servicio_soli',ele_ana='$ele_ana',no_lote='$lote',localidad='$localidad',info_geo='$info_geo',peso_esp='$peso_esp',observaciones='$observaciones',estado='$estado',ruta='$archivo' WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>