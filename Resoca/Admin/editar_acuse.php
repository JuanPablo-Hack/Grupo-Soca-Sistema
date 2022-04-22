<?php
  $id=$_GET['id'];
  include 'php/conexion.php';
  $sql="SELECT * FROM acuses WHERE id='".$id."'";
  $result = mysqli_query($conexion,$sql);
  if ($Row = mysqli_fetch_array($result))
  {
    $nombre= $Row['cliente'];
    
    $encargado=$Row['encargado'];
    $puesto=$Row['puesto'];
    $descripcion=$Row['descripcion'];
    $manifiesto=$Row['manifiesto'];
    $estado=$Row['estado'];
    
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
  <title>GrupoSOCA</title>

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <?php include 'templates/nav.php'; ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Editar Acuse</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              
              
              <form action="php/editar_acuse.php" class="form-horizontal style-form" method="POST">
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Indentificador</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="identificador" value="<?php echo $id; ?>" readonly>
                  </div>
                </div>
                
               
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Encargado</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="encargado" value="<?php echo $encargado; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Puesto</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="puesto" value="<?php echo $puesto; ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Descripción</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion; ?>">
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Manifiestos relacionados</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="manifiesto" value="<?php echo $manifiesto; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Estado</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="estado" value="<?php echo $estado; ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Guardar</button>
                    <a href="listar_acuses.php" class="btn btn-theme04" type="button">Cancelar</a>
                  </div>
                </div>
               
                
                
               
              </form>
            </div>
            
          <!-- col-lg-12-->
        </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- DATE TIME PICKERS -->
       
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->
      </section>
      <!-- /wrapper -->
    </section>
    <?php include 'templates/footer.php'; ?>
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>

</body>

</html>
