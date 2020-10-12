<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$curp=$_POST['curp'];
$rfc=$_POST['rfc'];
$nss=$_POST['nss'];
$cargo=$_POST['cargo'];
$user=$_POST['user'];
$contra=sha1($_POST['contra']);
$recontra=sha1($_POST['recontra']);




if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
    if($contra==$recontra){
        $sql="INSERT INTO trabajador(nombre,curp,rfc,nss,cargo,user,pwd) VALUES ('$nombre','$curp','$rfc','$nss','$cargo','$user','$contra')";
        $resultado = $conexion->query($sql);
        if($resultado){
            echo 'Trabajador subido con exito';
        }else{
            echo '<script type="text/javascript">'; echo 'alert("Error en la consulta, intentalo de nuevo!")'; echo '</script>';
            header("Refresh:0; url=../alta_usuarios.html");
        }

    }else{
        echo '<script type="text/javascript">'; echo 'alert("Las contraseñas no coinciden")'; echo '</script>';
        header("Refresh:0; url=../alta_usuarios.html");
    }
  

}


?>