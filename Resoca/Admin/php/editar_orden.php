<?php

include 'conexion.php';

$id=$_POST['identificador'];
$cliente=$_POST['nombre_cliente'];
$encargado=$_POST['encargado'];
$cargo=$_POST['cargo'];
$servicio=$_POST['tipo_servicio'];
$fecha=$_POST['fecha'];
$cantidad=$_POST['cantidad'];
$unidad_residuo=$_POST['unidad_residuo'];
$concepto=$_POST['concepto'];
$manifiesto=$_POST['manifiesto'];
$factura=$_POST['factura'];
$unidad=$_POST['unidad'];
$estado=$_POST['estado'];

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="UPDATE ordenes SET cliente='$cliente',encargado='$encargado',cargo='$cargo',servicio='$servicio',fecha='$fecha',unidad='$unidad_residuo',concepto='$concepto',manifiesto='$manifiesto',factura='$factura',unidadasig='$unidad',estado='$estado'  WHERE id='$id'";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }

?>