<?php

include 'conexion.php';


$id_cliente=$_POST['identificador'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];



echo $id_cliente;
echo $titulo;
echo $descripcion;


/*

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conn ->connect_error);
}else{
   
         
        $sql="INSERT INTO manifiestos (id_cliente,titulo,descripcion,ruta) VALUES ('$id_cliente','$titulo', '$descripcion', '$destino');";
        $resultado = $conexion->query($sql);
        if($resultado){
            header("Refresh:0; url=../registro_exitoso_manifiesto.html");
        }else{
            header("Refresh:0; url=../error_registro.html");
        }

    }*/
?>