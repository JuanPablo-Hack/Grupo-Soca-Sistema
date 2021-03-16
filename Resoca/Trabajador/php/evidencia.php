<?php

include 'conexion.php';

$tiempo=$_POST['tiempo'];
$folio=$_POST['folio'];
$cantidad=intval($_POST['cantidad']);
$comentarios=$_POST['comentarios'];
$revisar = getimagesize($_FILES["image"]["tmp_name"]);




if($revisar !== false){
    $image = $_FILES['image']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($image));

    if ($conexion ->connect_error) {
        die("Conexion Fallida: " . $conn ->connect_error);
    }else{
       
             
            $sql="INSERT INTO evidencias (tiempo, folio, cantidad, comentarios, imagen) VALUES ('$tiempo', '$folio', '$cantidad', '$comentarios', '$imgContenido');";
            $resultado = $conexion->query($sql);
            if($resultado){
                header("Refresh:0; url=../registro_exitoso.html");
            }else{
                header("Refresh:0; url=../error_registro.html");
            }
    
        }
    
}
else{
    echo "Por favor seleccione imagen a subir.";
}

?>