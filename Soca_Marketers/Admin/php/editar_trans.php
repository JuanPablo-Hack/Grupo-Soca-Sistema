<?php

include 'conexion.php';

$id=$_POST['identificador'];

$nombre_empresa=$_POST['nombre_empresa'];
$rfc=$_POST['rfc'];
$dir_empresa=$_POST['dir_empresa'];
$tel_empresa=$_POST['tel_empresa'];





if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE empresa_transportista SET nombre = '$nombre_empresa', rfc = '$rfc', dir = '$dir_empresa', tel = '$tel_empresa' WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>