<?php


include 'conexion.php';


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

//Mandando el archivo

$archivo = $_FILES['archivo']['name'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
        
        $ruta_manifiestos = '../../prospeccion/';
        $ruta_manifiestos_cliente = $ruta_manifiestos . $folio . "/";

        if(!file_exists($ruta_manifiestos)){
        mkdir($ruta_manifiestos, 0777, true);
        }
        if(!file_exists($ruta_manifiestos_cliente)){
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }
         
        $sql="INSERT INTO prospecion_mina(fecha_recep,folio,material,peso,tipo_muestra,lab_ext,fecha_envio,servicio_soli,ele_ana,no_lote,localidad,info_geo,peso_esp,observaciones,estado,ruta) VALUES ('$fecha_recep','$folio','$material','$peso','$tipo','$lab_ext','$fecha_envio','$servicio_soli','$ele_ana','$lote','$localidad','$info_geo','$peso_esp','$observaciones',1,'$archivo');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }



?>