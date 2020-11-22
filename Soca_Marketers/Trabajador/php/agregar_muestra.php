<?php


include 'conexion.php';


$fecha_recep=$_POST['fecha_recep'];
$material=$_POST['material'];
$no_muestras=intval($_POST['no_muestras']);
$peso=$_POST['peso'];
$tipo=$_POST['tipo'];
$lab_ext=$_POST['lab_ext'];
$fecha_envio=$_POST['fecha_envio'];
$servicio_soli=$_POST['servicio_soli'];
$ele_ana=$_POST['ele_ana'];
$observaciones=$_POST['observaciones'];


if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO muestras(fecha_recep,material,no_muestras,peso,tipo_muestra,lab_ext,fecha_envio,servicio_soli,ele_ana,observaciones) VALUES ('$fecha_recep','$material','$no_muestras','$peso','$tipo','$lab_ext','$fecha_envio','$servicio_soli','$ele_ana','$observaciones');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }



?>