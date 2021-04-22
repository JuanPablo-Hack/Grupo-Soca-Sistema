<?php
  $id=$_GET['id'];
  include 'php/conexion.php';
  $sql="SELECT * FROM evidencias WHERE id='".$id."'";
  $result = mysqli_query($conexion,$sql);
  if ($Row = mysqli_fetch_array($result))
  {
    $id= $Row['id'];
    $folio= $Row['folio'];
    
    $tiempo=$Row['tiempo'];
    $cantidad=$Row['cantidad'];
    $comentarios=$Row['comentarios'];
    $imagen=$Row['imagen'];
    $creado=$Row['creado'];
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
                  Cantidad: <?php echo $cantidad; ?><br>

                  Comentarios: <?php echo $comentarios; ?>
                </address>
                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-3">
                    <br>
                    <div>
                      <div class="pull-left"> NO FOLIO : </div>
                      <div class="pull-right"> <?php echo $id; ?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> NO DE ORDEN : </div>
                      <div class="pull-right"> <?php echo $folio; ?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>
                    
                  </div>
                  <!-- /invoice-body -->
                </div>
                <!-- /col-lg-10 -->
                <img src='./vista.php?id=<?php echo $id ?>' alt='Img blob desde MySQL' width="600" />
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
