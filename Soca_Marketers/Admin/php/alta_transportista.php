<?php

include 'conexion.php';

$nombre_empresa=$_POST['nombre_empresa'];
$rfc=$_POST['rfc'];
$dir_empresa=$_POST['dir_empresa'];
$tel_empresa=$_POST['tel_empresa'];


if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO empresa_transportista (nombre, rfc, dir, tel) VALUES ('$nombre_empresa', '$rfc', '$dir_empresa', '$tel_empresa')";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>