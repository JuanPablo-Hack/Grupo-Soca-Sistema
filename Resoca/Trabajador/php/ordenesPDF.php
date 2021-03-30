<?php

require_once '../../vendor/autoload.php';
include_once 'conexion.php';

$orden = $conexion->query("SELECT * FROM ordenes WHERE id = ".$_GET['orden']);
$ordenf = $orden -> fetch_assoc();

$cliente = $conexion -> query("SELECT * FROM clientes WHERE id = ".$ordenf['cliente']);
$clientef = $cliente -> fetch_assoc();

$servicio = $conexion -> query("SELECT * FROM servicios WHERE id = ".$ordenf['servicio']);
$serviciof = $servicio -> fetch_assoc();

$unidad = $conexion -> query("SELECT * FROM unidades WHERE id = ".$ordenf['unidadasig']);
$unidadf = $unidad -> fetch_assoc();

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orden de servicio</title>
</head>

<body>
  <style>
    table {
      margin-top: 15px;
      width: 100%;
      border-collapse: collapse;
    }

    tr, td, th{
      padding: 5px 12px;
    }
  </style>

  <img src="../img/orden_servicio.png" width="100%">

  <table border="1">
    <tr>
      <td colspan="2">
        <strong>N° de Orden:</strong> '.$ordenf['id'].'
        <br><br>
        <strong>Fecha:</strong> '.strftime('%d-%m-%Y', strtotime($ordenf['creado'])).'
      </td>
      <td colspan="3">
        <strong>Autoriza:</strong> '.utf8_encode($ordenf['encargado']).'
        <br><br>
        <strong>Puesto:</strong> '.utf8_encode($ordenf['cargo']).'
      </td>
    </tr>
    <tr style="background: #E8E8E8;">
    <th colspan="2">Empresa Generadora</th>
    <th colspan="3">Tipo de Servicio</th>
    </tr>
    <tr>
      <td colspan="2">
        <br><br>
        <strong>Nombre: </strong> '.utf8_encode($clientef['nombre']).'
        <br><br>
        <strong>Domicilio: </strong> '.utf8_encode($clientef['dir']).'
        <br><br>
        <strong>Ciudad: </strong> 
        <br><br>
        <strong>Teléfono: </strong> '.$clientef['telefono'].'
        <br><br>
        <strong>Área: </strong> '.utf8_encode($clientef['area']).'
      </td>
      <td colspan="3">
        <br><br>
        <strong>Tipo: </strong> '.utf8_encode($serviciof['tipo']).'
        <br><br>
        <strong>Concepto: </strong> '.utf8_encode($serviciof['nombre']).'
        <br><br>
        <strong>Otro (especifique): </strong>
        <br><br>
        <strong>Indicaciones especiales del servicio: </strong> '.utf8_encode($serviciof['descripcion']).'
      </td>
    </tr>
    <tr style="background: #E8E8E8;">
      <th colspan="2">Hora programada del servicio</th>
      <th colspan="3">Datos del Personal SOCA</th>
    </tr>
    <tr>
      <td colspan="2">
        <strong>Hora programada: </strong> '.strftime('%d-%m-%Y', strtotime($ordenf['fecha'])).'
        <br><br>
        <strong>Inició: </strong>
        <br><br>
        <strong>Terminó: </strong>
        <br><br>
        <strong>Duración: </strong>
        <br><br>
        <strong>Se cumplió
        el horario: </strong>
      </td>
      <td colspan="3">
        <strong>Operador: </strong> '.utf8_encode($serviciof['operador']).'
        <br><br>
        <strong>Auxiliar: </strong> '.utf8_encode($serviciof['auxiliar']).'
        <br><br>
        <strong>Supervisor: </strong> '.utf8_encode($serviciof['supervisor']).'
      </td>
    </tr>
    <tr style="background: #E8E8E8;">
      <th colspan="5">
        Características del Residuo
      </th>
    </tr>
    <tr>
      <th>Cantidad </th>
      <th>Unidad </th>
      <th>Concepto </th>
      <th>Manifiesto</th>
      <th>Factura</th>
    </tr>
    <tr style="text-align: center;">
      <td>'.$ordenf['cantidad'].'</td>
      <td>'.$ordenf['unidad'].'</td>
      <td>'.utf8_encode($ordenf['concepto']).'</td>
      <td>'.$ordenf['manifiesto'].'</td>
      <td>'.$ordenf['factura'].'</td>
    </tr>
    <tr>
      <td><br></td>
      <td><br></td>
      <td><br></td>
      <td><br></td>
      <td><br></td>
    </tr>
    <tr>
      <td><br></td>
      <td><br></td>
      <td><br></td>
      <td><br></td>
      <td><br></td>
    </tr>
    <tr style="background: #E8E8E8;">
      <th colspan="2">Datos del vehículo de servicio</th>
      <th colspan="3">Datos del destino final</th>
    </tr>
    <tr>
      <td colspan="2">
        <strong>Vehículo: </strong> '.utf8_encode($unidadf['modelo']).'
        <br><br>
        <strong>Placas: </strong> '.$unidadf['placas'].'
        <br><br>
        <strong>Otros: </strong> '.utf8_encode($unidadf['tipounidad']).'
        <br><br><br>
      </td>
      <td colspan="3">
        <strong>Nombre: </strong> '.utf8_encode($serviciof['destinofinal']).'
        <br><br>
        <strong>Ubicación: </strong> '.utf8_encode($serviciof['ubicacion']).'
        <br><br>
        <strong>Otros: </strong>
        <br><br><br>
<div></div>
      </td>
    </tr>
    <tr style="background: #E8E8E8;">
      <th colspan="2">Herramientas y materiales a utilizar</th>
      <th colspan="3">Equipo de seguridad necesario</th>
    </tr>
    <tr>
      <td colspan="2">
        '.utf8_encode($serviciof['material']).'
        <br><br>
        <strong>Otros: </strong>
      </td>
      <td colspan="3">
        '.utf8_encode($serviciof['equipo']).'
        <br><br>
        <strong>Otros:</strong>
        <br><br>
      </td>
    </tr>
    <tr style="background: #E8E8E8;">
      <th colspan="2">Conformidad del Generador con el servicio:</th>
      <th colspan="3">Ejecución del servicio por Representaciones Soca Del Pacifico</th>
    </tr>
    <tr>
      <td colspan="2">
        <strong>Nombre:</strong> _____________________________________
        <br><br>
        <strong>Firma:</strong> _____________________________
        <br><br>
        <strong>Puesto:</strong> ____________________________
      </td>
      <td colspan="3">
        <strong>Nombre y firma del
        Operador:</strong> ________________________________________________
        <br><br><br>
        <strong>Nombre del
        Supervisor:</strong> ________________________________________________
        <br><br><br>
        <strong>Firma del Supervisor:</strong> ______________________________________
        <br><br>
      </td>
    </tr>
    <tr style="background: #E8E8E8;">
      <th colspan="2">Observaciones del Generador:</th>
      <th colspan="3">Observaciones del transportista SOCA:</th>
    </tr>
    <tr>
      <td colspan="2">
        <strong></strong>
        <br><br>
        <br><br><br><br><br><br>
      </td>
      <td colspan="3">
        <strong></strong>
        <br><br><br><br><br><br><br><br>
      </td>
    </tr>
  </table>

</body>

</html>
';

$mpdf->WriteHTML($html);
$mpdf->Output();
?>