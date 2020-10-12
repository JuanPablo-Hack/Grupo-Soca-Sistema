<?php

include 'conexion.php';

$modelo=$_POST['modelo'];
$ano=$_POST['ano'];
$color=$_POST['color'];
$placas=$_POST['placas'];
$no_economico=$_POST['no_economico'];
$capacidad=$_POST['capacidad'];
$tipo_unidad=$_POST['tipo_unidad'];
$serie=$_POST['serie'];
$descripcion=$_POST['descripcion'];




if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
    echo $modelo."\n";
    echo $ano."\n";
    echo $color."\n";
    echo $placas."\n";
    echo $no_economico."\n";
    echo $capacidad."\n";
    echo $tipo_unidad."\n";
    echo $serie."\n";
    echo $descripcion."\n";
    /*if($contra==$recontra){
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
    }*/
  

}


?>