<?php

include 'conexion.php';

// Aspectos legales de la mina
$nombre_mina=$_POST['nombre_mina'];
$localidad=$_POST['localidad'];
$km_patio=$_POST['km_patio'];
$no_titulo=$_POST['no_titulo'];
$vigencia=$_POST['vigencia'];
$coordenadas=$_POST['coordenadas'];
$concesionarios=$_POST['concesionarios'];
$propiedad=$_POST['propiedad'];
$tipo_propiedad=$_POST['tipo_propiedad'];

// Accesos al proyecto minero
$terraceria=$_POST['terraceria'];
$estado=$_POST['estado'];
$herradura=$_POST['herradura'];
$caminata=$_POST['caminata'];

//Tipo de explotacion minera
$minado_cielo=$_POST['minado_cielo'];
$minado_sub=$_POST['minado_sub'];
$otro=$_POST['otro'];

//Permisos locales
$permiso_comun=$_POST['permiso_comun'];
$transito=$_POST['transito'];

// Datos del minero
$nombre_minero=$_POST['nombre_minero'];
$tel_minero=$_POST['tel_minero'];
$email_minero=$_POST['email_minero'];
$dir_minero=$_POST['dir_minero'];

//Datos del representante
$nombre_repre=$_POST['nombre_repre'];
$nombre_empresa=$_POST['nombre_empresa'];
$expectativas=$_POST['expectativas'];
$comentarios=$_POST['comentarios'];






if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
        
        $sql="INSERT INTO minas (nombre,localidad,km_patio, no_titulo,vigencia_concesion,coordenadas,concesionarios,propietarios,tipo_propiedad,terraceria,estado,herradura,caminata,minado_cielo,minado_sub,otro_minado,explotacion,transito,nombre_minero,tel_minero,email_minero,dir_minero,nombre_representante,nombre_empresa,expectativas,comentarios) VALUES ('$nombre_mina','$localidad','$km_patio','$no_titulo','$vigencia','$coordenadas','$concesionarios','$propiedad','$tipo_propiedad','$terraceria','$estado','$herradura','$caminata','$minado_cielo','$minado_sub','$otro','$explotacion','$transito','$nombre_minero','$tel_minero','$email_minero','$dir_minero','$nombre_repre','$nombre_empresa','$expectativas','$comentarios');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_mina.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
  





?>