<?php
  $id=$_GET['id'];
  include 'php/conexion.php';
  $sql="SELECT * FROM registros_combustible WHERE id='".$id."'";
  $result = mysqli_query($conexion,$sql);
  if ($Row = mysqli_fetch_array($result))
  {
    $unidad= $Row['unidad'];
    
    $fecha=$Row['fecha'];
    $kminicial=$Row['kminicial'];
    $kmfinal=$Row['kmfinal'];
    $tiposervicio=$Row['tiposervicio'];
    $litros=$Row['litros'];
    $rendimiento=$Row['rendimiento'];
    $factura=$Row['factura'];
    $operador=$Row['operador'];
    $importe=$Row['importe'];
    
  }
  $sql="SELECT * FROM trabajador";
  $result = mysqli_query($conexion,$sql);
  $sql2="SELECT * FROM unidades";
  $result2 = mysqli_query($conexion,$sql2);
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
        <h3><i class="fa fa-angle-right"></i> Editar Combustible</h3>
        <!-- BASIC FORM VALIDATION -->
      
        <!-- /row -->
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
           
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="./php/editar_combustible.php">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Identificador</label>
                  <div class="col-sm-4">
                    <input type="text" name='identificador' class="form-control" value="<?php echo $id;?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Unidad</label>
                  <div class="col-sm-4">
                  <select class="form-control" name='unidad'>
                  <option value="<?php echo $unidad;?>"></option>
                  <?php 
                    while ($Row1 = mysqli_fetch_array($result2)) {			 
                 ?>
                <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['modelo'];?></option>
                <?php
                }
                ?>
                </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Fecha de carga</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" readonly="" value="<?php echo $fecha;?>" size="16" class="form-control" name="fecha">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">Select date</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Km inicial</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="km_inicial" value="<?php echo $kminicial;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Km final</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="km_final" value="<?php echo $kmfinal;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tipo de Servicio</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="tipo_servicio" value="<?php echo $tiposervicio;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Litros de Carga</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="litros" value="<?php echo $litros;?>">
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">No.Factura</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="no_factura" value="<?php echo $factura;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Operador</label>
                  <div class="col-sm-4">
                  <select class="form-control" name='operador'>
                  <option value="<?php echo $operador;?>"></option>
                  <?php 
                    while ($Row1 = mysqli_fetch_array($result)) {			 
                 ?>
                <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre'];?></option>
                <?php
                }
                ?>
                </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Importe</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="importe" value="<?php echo $importe;?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Crear</button>
                    <a href="listar_combustible.php" class="btn btn-theme04" type="button">Cancelar</a>
                  </div>
                </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
       
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
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
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
