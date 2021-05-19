<?php

include 'conexion.php';

$id=$_POST['identificador'];

$nombre_empresa=$_POST['nombre_trans'];
// Datos del operador
$operador=$_POST['operador'];
$cargo=$_POST['cargo'];
$licencia=$_POST['licencia'];
$tel_operador=$_POST['tel_operador'];
// Datos de la unidad
$modelo=$_POST['modelo'];
$placas=$_POST['placas'];
$ano=$_POST['ano'];
$capcidad=$_POST['capcidad'];
$color=$_POST['color'];
$seguro=$_POST['seguro'];
$descripcion=$_POST['descripcion'];




if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE transportista SET id_trans = '$nombre_empresa', operador = '$operador', cargo = '$cargo', licencia = '$licencia', tel_operador = '$tel_operador', modelo = '$modelo', placas = '$placas', ano = '$ano', capcidad = '$capcidad', color = '$color', seguro = '$seguro', descripcion = '$descripcion' WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>