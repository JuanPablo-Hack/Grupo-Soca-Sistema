<?php
  
  include 'php/conexion.php';

  $id=$_GET['id'];
  $sql="SELECT * FROM 	produccion_mina WHERE id='".$id."'";
  $result = mysqli_query($conexion,$sql);
  if ($Row = mysqli_fetch_array($result))
  {
    $cliente= $Row['cliente'];
    $nombre= $Row['nombre_mina'];
    $mineral= $Row['mineral'];
    $unidad=$Row['unidad'];
    $operador=$Row['operador'];
    $no_guia=$Row['no_guia'];
    $p_tara=$Row['p_tara'];
    $p_bruto=$Row['p_bruto'];
    $p_neto=$Row['p_neto'];
    $metros=$Row['metros3'];
    $autoriza=$Row['autoriza'];
    $hora_salida=$Row['hora_salida'];
    $destino=$Row['destino'];
    $estado=$Row['estado'];
   
  }
  $sql="SELECT * FROM trabajador";
  $result = mysqli_query($conexion,$sql);
  $sql2="SELECT * FROM unidades";
  $result2 = mysqli_query($conexion,$sql2);
  $sql3="SELECT * FROM minas";
  $result3 = mysqli_query($conexion,$sql3);
  $sql4="SELECT * FROM estados";
  $result4 = mysqli_query($conexion,$sql4);
  
  
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
            <a href="index.php" class="logo"><b>Grupo<span>SOCA</span></b></a>
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
                    <p class="centered">
                        <a href="index.php"><img src="img/smm.png" class="img-circle" width="80"></a>
                    </p>
                    <h5 class="centered">Supervisor</h5>
                    <li class="mt">
                        <a class="active" href="index.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Panel de Control</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Prospección de Minas</span>
                        </a>
                        <ul class="sub">
                            <li><a href="alta_mina.html">Registrar Mina</a></li>
                            <li><a href="listar_minas.php">Minas Registradas</a></li>
                            <li><a href="alta_muestras.php">Registro de Muestra</a></li>
                            <li><a href="listar_muestras.php">Bitacora de muestras</a></li>
                        </ul>
                    </li>


                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-calendar"></i>
                            <span>Produccion en mina</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_lote.php">Crear Lote</a></li>
                            <li><a href="listar_lotes.php">Bitacora de lotes</a></li>
                            <li><a href="prospeccion_mina.php">Crear Muestreo de Lote</a></li>
                            <li><a href="listar_prospeccionmina.php">Bitacora de muestras de lotes</a></li>

                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Salida de Patio de mina</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_orden3.php">Crear Registro de Salida</a></li>
                            <li><a href="listar_orden3.php">Bitacora de Salidas</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Patio de trituracion</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_orden2.php">Registro Ingreso a Patio</a></li>
                            <li><a href="listar_orden2.php">Bitacora de Extracción</a></li>
                            <li><a href="listar_compra.php">Bitacora de Compra</a></li>
                            <li><a href="crear_lote_acopio.php">Registro de Producción</a></li>
                            <li><a href="listar_lotes_acopio.php">Bitacora de Producción</a></li>

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
                            <li><a href="alta_trans.html">Dar de alta transportista</a></li>
                            <li><a href="listar_transportistas_empresas.php">Transportistas</a></li>
                            

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
        <h3><i class="fa fa-angle-right"></i> Editar salida de mina</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form action="php/editar_orden.php" class="form-horizontal style-form" method='POST'>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Identificador</label>
                  <div class="col-sm-4">
                    <input type="text" name='identificador' class="form-control" value="<?php echo $id;?>" readonly>
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nombre de la mina</label>
                  <div class="col-sm-4">
                  <select class="form-control" name='mina'>
                  <option value="<?php echo $nombre; ?>"><?php  $sql1="SELECT * FROM minas WHERE id='".$nombre."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;?></option>
                  <?php 
                    while ($Row1 = mysqli_fetch_array($result3)) {			 
                 ?>
                <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre'];?></option>
                <?php
                }
                ?>
                </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tipo de Mineral</label>
                  <div class="col-sm-4">
                    <input type="text" name='mineral' class="form-control" value="<?php echo $mineral;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Unidad</label>
                  <div class="col-sm-4">
                  <select class="form-control" name='unidad'>
                  <option value="<?php echo $unidad; ?>"><?php   $sql1="SELECT * FROM unidades WHERE id='".$unidad."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['modelo'];  
                      }
                      echo $nombre; ?></option>
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
                  <label class="col-sm-2 col-sm-2 control-label">Operador</label>
                  <div class="col-sm-4">
                  <select class="form-control" name='operador'>
                  <option value="<?php echo $operador; ?>"><?php $sql1="SELECT * FROM trabajador WHERE id='".$operador."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;?></option>
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
                  <label class="col-sm-2 col-sm-2 control-label">No. Guía</label>
                  <div class="col-sm-4">
                    <input type="text" name='no_guia' class="form-control" value="<?php echo $no_guia;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">P. Tara</label>
                  <div class="col-sm-4">
                    <input type="text" name='p_tara' class="form-control" value="<?php echo $p_tara;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">P. Burto</label>
                  <div class="col-sm-4">
                    <input type="text" name='p_burto' class="form-control" value="<?php echo $p_bruto;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">W.M.T</label>
                  <div class="col-sm-4">
                    <input type="text" name='p_neto' class="form-control" value="<?php echo $p_neto;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Metros Cúbicos</label>
                  <div class="col-sm-4">
                    <input type="text" name='metros' class="form-control" value="<?php echo $metros;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Autoriza</label>
                  <div class="col-sm-4">
                    <input type="text" name='autoriza' class="form-control" value="<?php echo $autoriza;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Hora de Salida</label>
                  <div class="col-sm-4">
                    <input type="text" name='hora_salida' class="form-control" value="<?php echo $hora_salida;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Destino</label>
                  <div class="col-sm-4">
                    <input type="text" name='destino' class="form-control" value="<?php echo $destino;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Estado</label>
                  <div class="col-sm-4">
                  <select class="form-control" name='estado'>
                  <option value="<?php echo $estado; ?>"><?php $sql1="SELECT * FROM estados WHERE id='".$estado."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;?></option>
                  <?php 
                    while ($Row1 = mysqli_fetch_array($result4)) {			 
                 ?>
                <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre'];?></option>
                <?php
                }
                ?>
                </select>
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

</body>

</html>
