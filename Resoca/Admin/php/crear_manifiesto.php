<?php

include 'conexion.php';


$id_cliente=$_POST['identificador'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$nombre = $_FILES['archivo']['name'];
$destino = "archivos/" . $nombre;


echo $id_cliente;
echo $titulo;
echo $descripcion;
echo $nombre;
echo $destino;

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