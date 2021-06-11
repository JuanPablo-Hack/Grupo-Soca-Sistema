<?php
include_once 'conexion.php';
$id = $_POST['id'];

$orden = $conexion->query("SELECT * FROM patio_acopio WHERE id = $id");
$ordenf = $orden->fetch_assoc();

$cliente = $conexion->query("SELECT * FROM clientes WHERE id = " . $ordenf['cliente']);
$clientef = $cliente->fetch_assoc();

$mina = $conexion->query("SELECT * FROM minas WHERE id = " . $ordenf['mina_origen']);
$minaf = $mina->fetch_assoc();

$unidad = $conexion->query("SELECT * FROM unidades WHERE id = " . $ordenf['unidad']);
$unidadf = $unidad->fetch_assoc();

$lote = $conexion->query("SELECT * FROM lotes WHERE id = " . $ordenf['no_lote']);
$lotef = $lote->fetch_assoc();

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
        <img class="border border-dark" src="img/inf_patio.png" width="100%">
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">1-. N° de Orden: ' . $ordenf['id'] . '</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">3-. Fecha: ' . strftime('%d-%m-%Y', strtotime($ordenf['creado'])) . '</label>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">2-. Autoriza: ' . utf8_encode($ordenf['autoriza']) . '</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">4-. Recibe: ' . utf8_encode($ordenf['recibe']) . '</label>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark text-center titulos">
        <label for="" class="font-weight-bold">Datos de la mina</label>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark text-center titulos">
        <label for="" class="font-weight-bold">Contacto en Mina</label>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Nombre: ' . utf8_encode($minaf['nombre']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Domicilio: ' . utf8_encode($minaf['localidad']) . '</label><br>
            <label for="" class="font-weight-bold my-2">No. título:' . $minaf['no_titulo'] . ' </label><br>
            <label for="" class="font-weight-bold my-2">Distancias de Manzanillo a Mina: ' . $minaf['km_patio'] . '</label><br>
            <label for="" class="font-weight-bold my-2">Tipo de propiedad: ' . utf8_encode($minaf['tipo_propiedad']) . '</label><br>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Nombre: ' . utf8_encode($minaf['nombre_minero']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Concepto: ' . utf8_encode($minaf['tel_minero']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Email: ' . utf8_encode($minaf['email_minero']) . ' </label><br>
            <label for="" class="font-weight-bold my-2">Dirección: ' . utf8_encode($minaf['dir_minero']) . '</label><br>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Datos clientes </label>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Nombre: ' . utf8_encode($clientef['nombre']) . '</label><br>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Télefono:' . $clientef['telefono'] . ' </label><br>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">RFC:' . utf8_encode($clientef['rfc']) . ' </label><br>
            <label for="" class="font-weight-bold my-2">C.P:' . utf8_encode($clientef['cp']) . ' </label>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Se cumplió
              con las espectativas: <br>
              Si (X)
              No ( )
            </label>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Datos de la unidad</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Operador: ' . utf8_encode($unidadf['modelo']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Auxiliar: ' . utf8_encode($unidadf['placas']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Supervisor: ' . utf8_encode($unidadf['color']) . '</label>
          </div>
        </div>
      </div>

      <div class="col-sm-11 mx-auto my-2 border border-dark text-center titulos">
        <label for="" class="font-weight-bold">Características del Lote</label>
      </div>
      <div class="col-sm-11 mx-auto my-2 border border-dark text-center">
        <div class="row titulos">
          <div class="col-sm-2 border-bottom border-right border-dark text-center titulos">
            <label for="" class="font-weight-bold">Mineral  </label>
          </div>
          <div class="col-sm-1 border-bottom border-dark border-right text-center titulos">
            <label for="" class="font-weight-bold">Peso Tara </label>
          </div>
          <div class="col-sm-2 border-bottom border-dark border-right text-center mx-auto titulos">
            <label for="" class="font-weight-bold">Peso Bruto </label>
          </div>
          <div class="col-sm-1 border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Peso Neto </label>
          </div>
          <div class="col-sm-6 border-bottom border-dark border-right text-center titulos">
            <label for="" class="font-weight-bold">Observaciones  </label>
          </div>
        </div>
       
        <div class="row bg-light">
          <div class="col-sm-2 border-top border-bottom border-right border-dark text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($ordenf['mineral']) . '</label>
          </div>
          <div class="col-sm-1 border-top border-bottom border-dark border-right text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($ordenf['p_tara']) . ' KG</label>
          </div>
          <div class="col-sm-2 border-top border-bottom border-dark border-right text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($ordenf['p_bruto']) . ' KG</label>
          </div>
          <div class="col-sm-1 border-top border-bottom border-dark border-right text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($ordenf['p_neto']) . ' KG</label>
          </div>
          <div class="col-sm-6 border-top border-bottom border-dark text-center">
            <label for="" class="font-weight-bold">Esta todo en buen estado</label>
          </div>
        </div>
        
      </div>
       

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Datos del Lote </label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">No. Lote: ' . utf8_encode($lotef['no_lote']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Fecha y Hora: ' . strftime('%d-%m-%Y', strtotime($lotef['creado'])) . '</label><br>
            <label for="" class="font-weight-bold my-2">Metros Cubicos: ' . utf8_encode($lotef['metros']) . '</label>
          </div>
        </div>
      </div>
      

     
      

      

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Observaciones Generales:</label>
          </div>
          <div class="col-sm-12">
            <div class="row bg-light">
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Observaciones del transportista SOCA:</label>
          </div>
          <div class="col-sm-12">
            <div class="row bg-light">
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-bottom border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>
              <div class="col-sm-12 border-dark">
                <label for="" class="font-weight-bold"></label>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
';
?>

