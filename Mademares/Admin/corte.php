<?php
  $id=$_GET['id'];
  include 'php/conexion.php';
  $sql="SELECT * FROM cortes WHERE id='".$id."'";
  $result = mysqli_query($conexion,$sql);
  if ($Row = mysqli_fetch_array($result))
  {
    $folio= $Row['folio'];
    
    $ticket=$Row['ticket'];
    $porcentaje=$Row['porcentaje'];
    $kg=$Row['kg'];
    $cantidad=$Row['cantidad'];
    $unidad=$Row['unidad'];
    $descripcion=$Row['descripcion'];
    $precio=$Row['precio'];
    $importe=$Row['importe'];
    $creado=$Row['creado'];
  }
  $iva=floatval($importe)*.16;
  $total=floatval($importe)*1.16;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>GrupoSoca</title>

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.ico" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice-body">
                <div class="pull-left">
                 
                  <img src="img/resoca.png" alt="" style="height: 150px; width: 250px;">
                  <address>
                <strong>Resoca del Pacífico.</strong><br>
                Dolores Hidalgo 63-73, 16 de Septiembre<br>
                 28239 Manzanillo, Col.<br>
                <abbr title="Phone">P:</abbr> +52 314 688 2963
              </address>
              
                </div>
                
                <!-- /pull-left -->
               
                <!-- /pull-right -->
                <div class="clearfix"></div>
                <br>
                <br>
                <br>
                <div class="row">
                
                  <div class="col-md-9">
                    <h3>Datos Generales</h3>
                    
                    <address>
                  <strong>Fecha de Expedición: <?php echo $creado; ?></strong><br>
                  %: <?php echo $porcentaje; ?><br>
                  KG: <?php echo $kg; ?><br>
                  Descripción: <?php echo $descripcion; ?>
                </address>
                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-3">
                    <br>
                    <div>
                      <div class="pull-left"> NO FOLIO : </div>
                      <div class="pull-right"> <?php echo $folio; ?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> NO DE TICKET : </div>
                      <div class="pull-right"> <?php echo $ticket; ?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>
                    <div class="well well-small green">
                      <div class="pull-left"> Total a pagar : </div>
                      <div class="pull-right"> <?php echo $total; ?> </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- /invoice-body -->
                </div>
                <!-- /col-lg-10 -->
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width:60px" class="text-center">Cantidad</th>
                      <th class="text-left">Unidad</th>
                      <th class="text-left">Descripción</th>
                      <th style="width:140px" class="text-right">Precio Unitario</th>
                      <th style="width:90px" class="text-right">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center"><?php echo $cantidad; ?></td>
                      <td><?php echo $unidad; ?></td>
                      <td><?php echo $descripcion; ?></td>
                      <td class="text-right">$<?php echo $precio; ?>.00</td>
                      <td class="text-right">$<?php echo $importe; ?>.00</td>
                    </tr>
                   
                    <tr>
                      <td colspan="2" rowspan="4">
                        <h4>Terms and Conditions</h4>
                        <p> Gracias por su negocio. Esperamos el pago dentro de los 21 días, así que procese esta factura dentro de ese tiempo. Habrá un cargo de interés del 1.5% por mes en facturas atrasadas. </p>         <td> </td>               <td class="text-right"><strong>Subtotal</strong></td>
                        <td class="text-right">$<?php echo $importe; ?>.00</td>
                    </tr>
                   
                    <tr>
                      <td> </td>
                      <td class="text-right no-border"><strong>IVA </strong></td>
                      <td class="text-right">$<?php echo $iva; ?></td>
                    </tr>
                    <tr>
                      <td> </td>
                      <td class="text-right no-border">
                        <div class="well well-small green"><strong>Total</strong></div>
                      </td>
                      <td class="text-right"><strong>$<?php echo $total; ?>.00</strong></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
              </div>
              <!--/col-lg-12 mt -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
   
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
