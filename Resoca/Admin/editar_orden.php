<?php
$id = $_GET['id'];
include 'php/conexion.php';
$sql = "SELECT * FROM ordenes WHERE id='" . $id . "'";
$result = mysqli_query($conexion, $sql);
if ($Row = mysqli_fetch_array($result)) {
  $nombre = $Row['cliente'];

  $encargado = $Row['encargado'];
  $cargo = $Row['cargo'];
  $servicio = $Row['servicio'];
  $fecha = $Row['fecha'];
  $cantidad = $Row['cantidad'];
  $unidad = $Row['unidad'];
  $concepto = $Row['concepto'];
  $manifiesto = $Row['manifiesto'];
  $factura = $Row['factura'];
  $unidadasig = $Row['unidadasig'];
  $estado = $Row['estado'];
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
        <h3><i class="fa fa-angle-right"></i> Editar Orden</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form action="php/editar_orden.php" class="form-horizontal style-form" method='POST'>
                <h3>Datos del Servicio</h3>
                <hr>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Indentificador</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="identificador" value="<?php echo $id; ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Encargado</label>
                  <div class="col-sm-4">
                    <input type="text" name='encargado' class="form-control" value="<?php echo $encargado; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cargo</label>
                  <div class="col-sm-4">
                    <input type="text" name='cargo' class="form-control" value="<?php echo $cargo; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Estado de la Orden</label>
                  <div class="col-sm-4">
                    <input type="text" name='estado' class="form-control" value="<?php echo $estado; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">Fecha de programación</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" readonly="" value="<?php echo $fecha; ?> size=" 16" name='fecha' class="form-control">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                      </span>
                    </div>
                    <span class="help-block">Select date</span>
                  </div>
                </div>
                <div class="row mt"></div>
                <h3>Datos del Residuo</h3>
                <hr>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cantidad</label>
                  <div class="col-sm-4">
                    <input type="text" name='cantidad' class="form-control" value="<?php echo $cantidad; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Unidad</label>
                  <div class="col-sm-4">
                    <input type="text" name='unidad_residuo' class="form-control" value="<?php echo $unidad; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Concepto</label>
                  <div class="col-sm-4">
                    <input type="text" name='concepto' class="form-control" value="<?php echo $concepto; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Manifiesto</label>
                  <div class="col-sm-4">
                    <input type="text" name='manifiesto' class="form-control" value="<?php echo $manifiesto; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Factura</label>
                  <div class="col-sm-4">
                    <input type="text" name='factura' class="form-control" value="<?php echo $factura; ?>">
                  </div>
                </div>
                <div class="row mt"></div>

                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Guardar</button>
                    <a href="listar_orden.php" class="btn btn-theme04" type="button">Cancelar</a>
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