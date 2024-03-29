<?php
include 'php/conexion.php';
$sql = "SELECT * FROM trabajador";
$result = mysqli_query($conexion, $sql);
$sql2 = "SELECT * FROM unidades";
$result2 = mysqli_query($conexion, $sql2);
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
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>Grupo<span>SOCA</span></b></a>
      <!--logo end-->

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Cerrar Sesión</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/slg.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a class="active" href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Panel de Control</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-calendar"></i>
              <span>Ingresos a granel</span>
            </a>
            <ul class="sub">
              <li><a href="crear_orden.php">Crear Registro</a></li>
              <li><a href="listar_orden.php">Bitacora</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-calendar"></i>
              <span>Consolidación de mercancias</span>
            </a>
            <ul class="sub">
              <li><a href="crear_orden2.php">Crear Registro</a></li>
              <li><a href="listar_orden2.php">Bitacora</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-calendar"></i>
              <span>Consolidación de buque</span>
            </a>
            <ul class="sub">
              <li><a href="crear_orden3.php">Crear Registro</a></li>
              <li><a href="listar_orden3.php">Bitacora</a></li>

            </ul>
          </li>


          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-car"></i>
              <span>Unidades</span>
            </a>
            <ul class="sub">
              <li><a href="alta_unidad.html">Dar de alta</a></li>
              <li><a href="listar_unidades.php">Mis Unidades</a></li>


            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-group"></i>
              <span>Usuarios</span>
            </a>
            <ul class="sub">
              <li><a href="alta_trabajador.html">Crear Trabajador</a></li>
              <li><a href="listar_trabajador.php">Listar Trabajadores</a></li>



            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Crear Registro de Consolidación de Mercancía</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form action="php/crear_orden2.php" class="form-horizontal style-form" method='POST'>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">No. Folio</label>
                  <div class="col-sm-4">
                    <input type="text" name='folio' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cliente</label>
                  <div class="col-sm-4">
                    <input type="text" name='cliente' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Fecha de llegada</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" readonly="" value="01-01-2014" size="16" name='fecha' class="form-control">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                      </span>
                    </div>
                    <span class="help-block">Select date</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ubicación en Patio</label>
                  <div class="col-sm-4">
                    <input type="text" name='ubicacion' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Carretera pavimentada:</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="carretera" onchange="myFunction()" name="tipo_ser">
                      <option value="0">-</option>
                      <option value="1">Almacen de Contenedor Lleno</option>
                      <option value="2">Almacen de Contenedor Vacío</option>
                      <option value="3">Almacenaje de Carga Paletizada</option>
                      <option value="4">Almacenaje de Mercancía Granel</option>
                      <option value="5">Almacenaje de Sobrecarga Dimensionada</option>
                      <option value="6">Almacenaje de Isotanques</option>
                    </select>
                  </div>
                </div>
                <div style="display: none;" id="contenedor_lleno">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Contenedor</label>
                    <div class="col-sm-4">
                      <input type="text" name='no_contenedor' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de mercancía</label>
                    <div class="col-sm-4">
                      <input type="text" name='tipo_mercancia' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Pedimento</label>
                    <div class="col-sm-4">
                      <input type="text" name='no_pedimento' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Contenedor</label>
                    <div class="col-sm-4">
                      <input type="text" name='tipo_contenedor' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Sello</label>
                    <div class="col-sm-4">
                      <input type="text" name='sello' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. VGM </label>
                    <div class="col-sm-4">
                      <input type="text" name='no_vgm' class="form-control">
                    </div>
                  </div>
                </div>

                <div style="display: none;" id="vacio">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Contenedor</label>
                    <div class="col-sm-4">
                      <input type="text" name='no_contenedor' class="form-control">
                    </div>
                  </div>
                </div>

                <div style="display: none;" id="mercancia">

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de Mercancía</label>
                    <div class="col-sm-4">
                      <input type="text" name='tipo_merca' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Pedimento</label>
                    <div class="col-sm-4">
                      <input type="text" name='pedimento' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo Embalaje</label>
                    <div class="col-sm-4">
                      <input type="text" name='embalaje' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Paletas</label>
                    <div class="col-sm-4">
                      <input type="text" name='paletas' class="form-control">
                    </div>
                  </div>
                </div>

                <div style="display: none;" id="granel">

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Lote</label>
                    <div class="col-sm-4">
                      <input type="text" name='lote' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de mercancia</label>
                    <div class="col-sm-4">
                      <input type="text" name='tipo_merca' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. sello</label>
                    <div class="col-sm-4">
                      <input type="text" name='sello' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Estado de la mercancia:</label>
                    <div class="col-sm-4">
                      <select class="form-control" id="estado_merca" name="estado_merca">
                        <option value="0">-</option>
                        <option value="1">Humedo</option>
                        <option value="2">Seco</option>
                        <option value="3">No contaminado</option>
                        <option value="2">Contaminado</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div style="display: none;" id="dimensionada">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Contenedor</label>
                    <div class="col-sm-4">
                      <input type="text" name='no_contenedor' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Pedimento</label>
                    <div class="col-sm-4">
                      <input type="text" name='no_pedimento' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de embalaje</label>
                    <div class="col-sm-4">
                      <input type="text" name='embalaje' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tipo de trincado o isaje</label>
                    <div class="col-sm-4">
                      <input type="text" name='trincado' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Dimensiones </label>
                    <div class="col-sm-4">
                      <input type="text" name='dimensiones' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. de piezas </label>
                    <div class="col-sm-4">
                      <input type="text" name='no_piezas' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Descripción Mercancía </label>
                    <div class="col-sm-4">
                      <input type="text" name='descrip_merca' class="form-control">
                    </div>
                  </div>
                </div>

                <div id="isotanque" style="display:none">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Isotanque</label>
                    <div class="col-sm-4">
                      <input type="text" name='no_iso' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. pedimento</label>
                    <div class="col-sm-4">
                      <input type="text" name='no_pedimento' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Sello</label>
                    <div class="col-sm-4">
                      <input type="text" name='sello' class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Como se encuentra:</label>
                    <div class="col-sm-4">
                      <select class="form-control" id="encuentra" onchange="cambio()" name="encuentra">
                        <option value="0">-</option>
                        <option value="1">Lleno</option>
                        <option value="2">Vacío</option>

                      </select>
                    </div>
                  </div>
                  <div style="display:none" id="lleno">
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Que contiene:</label>
                      <div class="col-sm-4">
                        <input type="text" name='contenido' class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">VGM</label>
                      <div class="col-sm-4">
                        <input type="text" name='vgm' class="form-control">
                      </div>
                    </div>
                  </div>
                  <div style="display:none" id="vacio">
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Tipo de Limpieza:</label>
                      <div class="col-sm-4">
                        <select class="form-control" id="tipo_limpieza"  name="tipo_limpieza">
                          <option value="0">-</option>
                          <option value="1">Parcial</option>
                          <option value="2">Interior</option>

                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Línea Naviera</label>
                  <div class="col-sm-4">
                    <input type="text" name='naviera' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Booking</label>
                  <div class="col-sm-4">
                    <input type="text" name='booking' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Agencia Aduanal</label>
                  <div class="col-sm-4">
                    <input type="text" name='agencia_aduanal' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Transportista</label>
                  <div class="col-sm-4">
                    <input type="text" name='transportista' class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Unidad</label>
                  <div class="col-sm-4">
                    <select class="form-control" name='unidad'>
                      <option value="0"></option>
                      <?php
                      while ($Row1 = mysqli_fetch_array($result2)) {
                      ?>
                        <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['modelo']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Operador</label>
                  <div class="col-sm-4">
                    <select class="form-control" name='operador'>
                      <option value="0"></option>
                      <?php
                      while ($Row1 = mysqli_fetch_array($result)) {
                      ?>
                        <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Hora de llegada</label>
                  <div class="col-sm-4">
                    <input type="text" name='hora_comienzo' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Hora salida </label>
                  <div class="col-sm-4">
                    <input type="text" name='hora_final' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Peso </label>
                  <div class="col-sm-4">
                    <input type="text" name='peso' class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Es IMO:</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="imo_id" onchange="myFunction3()" name="imo_id">
                      <option value="0">-</option>
                      <option value="1">Sí</option>
                      <option value="2">No</option>

                    </select>
                  </div>
                </div>
                <div class="form-group" id="imo" style="display:none">
                  <label class="col-sm-2 col-sm-2 control-label">No. IMO</label>
                  <div class="col-sm-4">
                    <input type="text" name='imo_desc' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Quien recibe:</label>
                  <div class="col-sm-4">
                    <input type="text" name='recibe' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Quien entrega:</label>
                  <div class="col-sm-4">
                    <input type="text" name='entrega' class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Observaciones</label>
                  <div class="col-sm-4">
                    <input type="text" name='observaciones' class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Guardar</button>
                    <button class="btn btn-theme04" type="button">Cancelar</button>
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
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>GrupoSOCA</strong>. Todos los derechos reservados
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Creado y Diseñado por Jupiter.org
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
  <script src="./main.js"></script>

</body>

</html>