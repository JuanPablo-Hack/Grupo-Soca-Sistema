<?php

include 'conexion.php';

//Datos de la empresa 

$id_trans=$_POST['empresa_id'];


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
   
         
        $sql="INSERT INTO transportista (id_trans, operador, cargo, licencia, tel_operador, modelo, placas, ano, capcidad, color, seguro, descripcion) VALUES ('$id_trans','$operador', '$cargo', '$licencia', '$tel_operador', '$modelo', '$placas', '$ano', '$capcidad', '$color', '$seguro', '$descripcion')";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>