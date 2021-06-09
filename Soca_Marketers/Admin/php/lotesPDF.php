<?php
include_once 'conexion.php';
$id = $_POST['id'];

$orden = $conexion->query("SELECT * FROM lotes WHERE id = $id");
$ordenf = $orden->fetch_assoc();

$mina = $conexion->query("SELECT * FROM minas WHERE id = " . $ordenf['mina']);
$minaf = $mina->fetch_assoc();

$material = $conexion->query("SELECT * FROM materiales WHERE id = " . $ordenf['material']);
$materialf = $material->fetch_assoc();

$talla = $conexion->query("SELECT * FROM tallas WHERE id = " . $ordenf['talla']);
$tallaf = $talla->fetch_assoc();

$calidad = $conexion->query("SELECT * FROM calidad WHERE id = " . $ordenf['calidad']);
$calidadf = $calidad->fetch_assoc();

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
        <img class="border border-dark" src="img/inf_lote.png" width="100%">
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">N° de Orden: ' . $ordenf['id'] . '</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">Fecha: ' . strftime('%d-%m-%Y', strtotime($ordenf['creado'])) . '</label>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">Folio: ' . utf8_encode($ordenf['no_lote']) . '</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold">Metros cubícos: ' . utf8_encode($ordenf['metros']) . '</label>
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
            <label for="" class="font-weight-bold">Carácteristicas de la mina </label>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Terraceria: ' . utf8_encode($minaf['terraceria']) . '</label><br>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Estado: ' . utf8_encode($minaf['estado']) . '</label><br>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Herradura:  ' . utf8_encode($minaf['herradura']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Caminata: ' . utf8_encode($minaf['caminata']) . ' </label>
          </div>
          <div class="col-sm-6">
            <label for="" class="font-weight-bold my-2">Se cumplió
              las espectativas: <br>
              Si (X)
              No ( )
            </label>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Datos del Personal SOCA</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Operador: ' . utf8_encode($minaf['nombre_representante']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Empresa: ' . utf8_encode($minaf['nombre_empresa']) . '</label><br>
            <label for="" class="font-weight-bold my-2">Comentarios: ' . utf8_encode($minaf['comentarios']) . '</label>
          </div>
        </div>
      </div>

      <div class="col-sm-11 mx-auto my-2 border border-dark text-center titulos">
        <label for="" class="font-weight-bold">Características del Lote</label>
      </div>
      <div class="col-sm-11 mx-auto my-2 border border-dark text-center">
        <div class="row titulos">
          <div class="col-sm-2 border-bottom border-right border-dark text-center titulos">
            <label for="" class="font-weight-bold">Metros Cúbicos  </label>
          </div>
          <div class="col-sm-1 border-bottom border-dark border-right text-center titulos">
            <label for="" class="font-weight-bold">Mineral </label>
          </div>
          <div class="col-sm-6 border-bottom border-dark border-right text-center titulos">
            <label for="" class="font-weight-bold">Observaciones  </label>
          </div>
          <div class="col-sm-2 border-bottom border-dark border-right text-center mx-auto titulos">
            <label for="" class="font-weight-bold">Calidad </label>
          </div>
          <div class="col-sm-1 border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Talla </label>
          </div>
        </div>
       
        <div class="row bg-light">
          <div class="col-sm-2 border-top border-bottom border-right border-dark text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($ordenf['metros']) . '</label>
          </div>
          <div class="col-sm-1 border-top border-bottom border-dark border-right text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($materialf['nombre']) . '</label>
          </div>
          <div class="col-sm-6 border-top border-bottom border-dark border-right text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($ordenf['observaciones']) . '</label>
          </div>
          <div class="col-sm-2 border-top border-bottom border-dark border-right text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($calidadf['nombre']) . '</label>
          </div>
          <div class="col-sm-1 border-top border-bottom border-dark text-center">
            <label for="" class="font-weight-bold">' . utf8_encode($tallaf['nombre']) . '</label>
          </div>
        </div>
        
      </div>

     

      

    
      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">15-. Ejecución del servicio por Representaciones Soca Del Pacifico</label>
          </div>
          <div class="col-sm-12">
            <label for="" class="font-weight-bold my-2">Nombre y firma del
              Operador: </label><br>
            <label for="" class="font-weight-bold my-2">Nombre del
              Supervisor: </label><br>
            <label for="" class="font-weight-bold my-2">Firma del Supervisor: </label>
          </div>
        </div>
      </div>

      <div class="col-sm-5 mx-auto my-2 bg-light border border-dark">
        <div class="row">
          <div class="col-sm-12 bg-light border-bottom border-dark text-center titulos">
            <label for="" class="font-weight-bold">Observaciones Generales</label>
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

