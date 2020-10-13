<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$nra=$_POST['nra'];
$tel=$_POST['telefono'];
$email=$_POST['email'];
$area=$_POST['area'];
$rfc=$_POST['rfc'];
$dir=$_POST['direccion'];
$cp=$_POST['cp'];
$user=$_POST['user'];
$contra=sha1($_POST['contra']);
$recontra=sha1($_POST['recontra']);




if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
    if($contra==$recontra){
        $sql="INSERT INTO clientes(nombre,nra,telefono,email,area,rfc,dir,cp,user,pwd) VALUES ('$nombre','$nra','$tel','$email','$area','$rfc','$dir','$cp','$user','$contra')";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }else{
        header("Refresh:0; url=../error_contras.html");
    }
  

}


?>
