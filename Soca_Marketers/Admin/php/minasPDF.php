<?php
include_once 'conexion.php';
$id = $_POST['id'];

$orden = $conexion->query("SELECT * FROM minas WHERE id = $id");
$ordenf = $orden->fetch_assoc();



echo '
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>

  <style>
    body {
      position: absolute;
      width: 100%;
      height: 100%;
      font-size: 13px;
      font-family: "Roboto", sans-serif;
    }

    .titulos {
      background: rgb(189, 189, 189) !important;
    }
  </style>

  <div class="">
    <div class="m-2 p-3 row border border-dark bg-secondary">
      <div class="col-sm-12 mb-1 mx-auto">
        <img class="border border-dark" src="img/registro_mina.png" width="100%">
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">1-. N° de Mina: ' . $ordenf['id'] . '</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">3-. Fecha: ' . strftime('%d-%m-%Y', strtotime($ordenf['creado'])) . '</label>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">2-. Nombre: ' . utf8_encode($ordenf['nombre']) . '</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">4-. Localidad: ' . utf8_encode($ordenf['localidad']) . '</label>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark text-center titulos">
        <label for="" class="font-weight-bold">Aspectos Legales</label>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark text-center titulos">
        <label for="" class="font-weight-bold">Accesos al proyecto minero</label>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Km de Mina a Manzanillo: ' . utf8_encode($ordenf['km_patio']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Número del título: ' . utf8_encode($ordenf['no_titulo']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Vigencia de la concesión minera: '. utf8_encode($ordenf['vigencia_concesion']) .' </label><br>
            <label for="" class="font-weight-bold my-2">Coordenadas: ' . $ordenf['coordenadas'] . '</label><br>
            <label for="" class="font-weight-bold my-2">Consesionarios: ' . utf8_encode($ordenf['concesionarios']) . '</label><br>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Terraceria: ' . utf8_encode($ordenf['terraceria']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Estado: ' . utf8_encode($ordenf['estado']) . '</label><br>
           
            <label for="" class="font-weight-bold my-2">Camino de herradura: ' . utf8_encode($ordenf['herradura']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Tiempo aproximado de caminata: ' . utf8_encode($ordenf['caminata']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Otro (especifique): </label><br>
          </div>
        </div>
      </div>

      
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Contacto con los propietarios</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Nombre: ' . utf8_encode($ordenf['nombre_minero']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Teléfonos:: ' . utf8_encode($ordenf['tel_minero']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Correo electrónico: ' . utf8_encode($ordenf['email_minero']) . '</label>
            <label for="" class="font-weight-bold my-2">Dirección: ' . utf8_encode($ordenf['dir_minero']) . '</label>
          </div>
        </div>
      </div>

     

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Datos del prospectador </label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Vehículo: ' . utf8_encode($ordenf['nombre_representante']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Placas: ' . $ordenf['nombre_empresa'] . '</label><br>
            <label for="" class="font-weight-bold my-2">Otros: ' . utf8_encode($ordenf['comentarios']) . '</label>
          </div>
        </div>
      </div>
      

      

      

      
      
    </div>
  </div>
</body>

</html>
';
?>

