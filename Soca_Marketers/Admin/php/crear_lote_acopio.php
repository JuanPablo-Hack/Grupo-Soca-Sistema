<?php

include 'conexion.php';

$mina = $_POST['mina'];
$lote = $_POST['lote'];
$material = $_POST['material'];
$tallas = $_POST['tallas'];
$calidad = $_POST['calidad'];
$metros = floatval($_POST['metros']);
$peso_1 = $_POST['peso_1'];
$peso_2 = $_POST['peso_2'];
$peso_3 = $_POST['peso_3'];
$peso_4 = $_POST['peso_4'];
$observaciones = $_POST['observaciones'];

//Mandando el archivo

$archivo = $_FILES['archivo']['name'];

if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conn->connect_error);
} else {

    $ruta_manifiestos = '../../lotes_acopio/';
    $ruta_manifiestos_cliente = $ruta_manifiestos . $lote . "/";

    if (!file_exists($ruta_manifiestos)) {
        mkdir($ruta_manifiestos, 0777, true);
    }
    if (!file_exists($ruta_manifiestos_cliente)) {
        mkdir($ruta_manifiestos_cliente, 0777, true);
    }

    move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_manifiestos_cliente . $_FILES['archivo']['name']);

    $sql = "INSERT INTO lotes_acopio(mina,no_lote,material,talla,calidad,metros,peso_1,peso_2,peso_3,peso_4,observaciones,ruta) VALUES ('$mina','$lote','$material','$tallas','$calidad','$metros','$peso_1','$peso_2','$peso_3','$peso_4','$observaciones','$archivo');";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        header("Refresh:0; url=../registro_exitoso.html");
    } else {
        header("Refresh:0; url=../error_registro.html");
    }
}
