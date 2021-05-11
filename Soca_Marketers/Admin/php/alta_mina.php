<?php

include 'conexion.php';

$nombre_mina=$_POST['nombre_mina'];
$localidad=$_POST['localidad'];
$km_patio=$_POST['km_patio'];
$no_titulo=$_POST['no_titulo'];
$vigencia=$_POST['vigencia'];
$coordenadas=$_POST['coordenadas'];
$concesionarios=$_POST['concesionarios'];
$estudios=$_POST['estudios'];
$pagos=$_POST['pagos'];
$propiedad=$_POST['propiedad'];
$carretera=$_POST['carretera'];
$terraceria=$_POST['terraceria'];
$estado=$_POST['estado'];
$herradura=$_POST['herradura'];
$caminata=$_POST['caminata'];
$veta=$_POST['veta'];
$largo_veta=$_POST['largo_veta'];
$ancho_veta=$_POST['ancho_veta'];
$alto_veta=$_POST['alto_veta'];
$cuerpo=$_POST['cuerpo'];
$largo_cuerpo=$_POST['largo_cuerpo'];
$ancho_cuerpo=$_POST['ancho_cuerpo'];
$alto_cuerpo=$_POST['alto_cuerpo'];
$otro_dimensiones=$_POST['otro_dimensiones'];
$minado_cielo=$_POST['minado_cielo'];
$minado_sub=$_POST['minado_sub'];
$otro=$_POST['otro'];
$material=$_POST['material'];
$prod_mensual=$_POST['prod_mensual'];
$presen_material=$_POST['presen_material'];
$triturado=$_POST['triturado'];
$breña=$_POST['breña'];
$otro_presen=$_POST['otro_presen'];
$laboratorio=$_POST['laboratorio'];
$metodologia=$_POST['metodologia'];
$explotacion=$_POST['explotacion'];
$transito=$_POST['transito'];
$nombre_minero=$_POST['nombre_minero'];
$tel_minero=$_POST['tel_minero'];
$email_minero=$_POST['email_minero'];
$nombre_repre=$_POST['nombre_repre'];
$nombre_empresa=$_POST['nombre_empresa'];
$expectativas=$_POST['expectativas'];
$comentarios=$_POST['comentarios'];
$propiedad_peque=$_POST['propiedad_peque'];
$ejido=$_POST['ejido'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
        
        $sql="INSERT INTO minas(nombre,localidad,km_patio,no_titulo,vigencia_concesion,coordenadas,concesionarios,estudios,pagos,propiedad,propiedad_peque,ejido,carretera,terraceria,estado,herradura,caminata,veta,largo_veta,ancho_veta,alto_veta,cuerpo,largo_cuerpo,ancho_cuerpo,alto_cuerpo,otro_dimen,minado_cielo,minado_sub,otro_minado,material,prod_mensual,presen_material,triturado,breña,otro_presen,laboratorio,metodologia,explotacion,transito,nombre_minero,tel_minero,email_minero,nombre_representante,nombre_empresa,expectativas,comentarios) VALUES ('$nombre_mina','$localidad','$km_patio','$no_titulo','$vigencia','$coordenadas','$concesionarios','$estudios','$pagos','$propiedad','$propiedad_peque','$ejido','$carretera','$terraceria','$estado','$herradura','$caminata','$veta','$largo_veta','$ancho_veta','$alto_veta','$cuerpo','$largo_cuerpo','$ancho_cuerpo','$alto_cuerpo','$otro_dimensiones','$minado_cielo','$minado_sub','$otro','$material','$prod_mensual','$presen_material','$triturado','$breña','$otro_presen','$laboratorio','$metodologia','$explotacion','$transito','$nombre_minero','$tel_minero','$email_minero','$nombre_repre','$nombre_empresa','$expectativas','$comentarios');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_mina.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }
  





?>