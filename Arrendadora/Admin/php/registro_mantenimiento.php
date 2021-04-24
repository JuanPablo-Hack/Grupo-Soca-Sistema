<?php

include 'conexion.php';


$unidad=$_POST['unidad'];
$aceite_motor=$_POST['aceite_motor'];
$comen_motor=$_POST['comen_motor'];
$aceite_hidra=$_POST['aceite_hidra'];
$comen_hidra=$_POST['comen_hidra'];
$anticogelante=$_POST['anticogelante'];
$comen_anti=$_POST['comen_anti'];
$frenos=$_POST['frenos'];
$comen_frenos=$_POST['comen_frenos'];
$mangueras=$_POST['mangueras'];
$pernos=$_POST['pernos'];
$marcadores=$_POST['marcadores'];
$carroceria=$_POST['carroceria'];
$solicitante=$_POST['solicitante'];
$autoriza=$_POST['autoriza'];
$descrip=$_POST['descrip'];







if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO mantenimiento (unidadasig,aceite_motor,comen_motor,aceite_hidra,comen_hidra,anticogelante,comen_anti,frenos,comen_frenos,mangueras,pernos,marcadores,carroceria,solicitante,autoriza,descrip) VALUES ('$unidad', '$aceite_motor', '$comen_motor', '$aceite_hidra', '$comen_hidra', '$anticogelante','$comen_anti','$frenos','$comen_frenos','$mangueras','$pernos','$marcadores','$carroceria','$solicitante','$autoriza','$descrip');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            //header("Refresh:0; url=../error_registro.html");
        }

    }

?>