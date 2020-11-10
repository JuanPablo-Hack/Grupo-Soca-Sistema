<?php
  $id=$_GET['id'];
  include 'php/conexion.php';

  $sql="SELECT * FROM produccion_mina WHERE id='".$id."'";
  $result = mysqli_query($conexion,$sql);
  if ($Row = mysqli_fetch_array($result))
  {
    $folio=$Row['id'];
    $nombre= $Row['nombre_mina'];
    $unidad=$Row['unidad'];
    $encargado=$Row['operador'];
    $p_tara=$Row['p_tara'];
    $p_bruto=$Row['p_bruto'];
    $p_neto=$Row['p_neto'];
    $autoriza=$Row['autoriza'];
    
    $hora=$Row['hora_salida'];
    $fecha=$Row['creado'];
   
    
  }
  $sql2="SELECT * FROM unidades WHERE id='$unidad'";
  $result2 = mysqli_query($conexion,$sql2);
  if ($Row = mysqli_fetch_array($result2))
  {
    
    $nombre2= $Row['modelo'];
    
    $placas=$Row['placas'];
   
    
    
    
  }
  $sql3="SELECT * FROM trabajador WHERE id='$encargado'";
  $result3 = mysqli_query($conexion,$sql3);
  if ($Row = mysqli_fetch_array($result3))
  {
    
    $nombre3= $Row['nombre'];
    
    $cargo= $Row['cargo'];
    
    
    
  } 
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
                 
                  <img src="img/login_banner.png" alt="" style="height: 150px; width: 250px;">
                  <address>
                <br>
                <strong>Soca Marketers Minerals.</strong><br>
                Dolores Hidalgo 63-73, 16 de Septiembre<br>
                 28239 Manzanillo, Col.<br>
                <abbr title="Phone">P:</abbr> +52 314 688 2963
              </address>
                </div>
                <!-- /pull-left -->
                
                <!-- /pull-right -->
                <div class="clearfix"></div>
                
                <div class="row">
                  <div class="col-md-9">
                   
                    <h4>Nombre de la Mina: <?php echo $nombre; ?></h4>
                    <address>
                  <strong>Autoriza:<?php echo $autoriza; ?></strong><br>
                  Unidad: <?php echo $nombre2; ?><br>
                  Placas: <?php echo $placas; ?><br>
                  Operador: <?php echo $nombre3; ?><br>
                  Cargo: <?php echo $cargo; ?>
                </address>
                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-3">
                    <br>
                    <div>
                      <div class="pull-left"> Hora de Salida: </div>
                      <div class="pull-right"> <?php echo $hora; ?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> Fecha de Expedición : </div>
                      <div class="pull-right"> <?php echo $fecha; ?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>
                    <div class="well well-small green">
                      <div class="pull-left"> Folio : </div>
                      <div class="pull-right"><?php echo $folio; ?> </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- /invoice-body -->
                </div>
                <!-- /col-lg-10 -->
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width:60px" class="text-center">P. Tara</th>
                      <th class="text-left">P. Burto</th>
                      <th style="width:140px" class="text-right">P. Neto</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center"><?php echo $p_tara; ?></td>
                      <td><?php echo $p_bruto; ?></td>
                      <td class="text-right"><?php echo $p_neto; ?></td>
                      
                    </tr>
                   
                   
                    
                    
                    
                  </tbody>
                </table>
              
               
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
