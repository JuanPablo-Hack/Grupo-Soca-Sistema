<?php
  $id=$_GET['id'];
  include 'php/conexion.php';
  $sql="SELECT * FROM unidades WHERE id='".$id."'";
  $result = mysqli_query($conexion,$sql);
  if ($Row = mysqli_fetch_array($result))
  {
    $modelo= $Row['modelo'];
    
    $ano=$Row['ano'];
    $color=$Row['color'];
    $placas=$Row['placas'];
    $no_economico=$Row['noeconomico'];
    $capacidad=$Row['capacidad'];
    $tipo_unidad=$Row['tipounidad'];
    $tipo_combustible=$Row['tipocombustible'];
    $serie=$Row['serie'];
    $descripcion=$Row['descripcion'];
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
        <h3><i class="fa fa-angle-right"></i> Editar de Unidad</h3>
        <!-- BASIC FORM VALIDATION -->
      
        <!-- /row -->
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
           
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="./php/editar_unidad.php">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Identificador</label>
                  <div class="col-sm-4">
                    <input type="text" name='identificador' class="form-control" value="<?php echo $id;?>" readonly>
                  </div>
                </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Modelo</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="modelo" minlength="2" type="text" value="<?php echo $modelo;?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Año</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="ano" minlength="2" type="text" value="<?php echo $ano;?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Color</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="text" name="color" value="<?php echo $color;?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Placas</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="text" name="placas" value="<?php echo $placas;?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">No. economico</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="text" name="no_economico" value="<?php echo $no_economico;?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Capacidad de Carga</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="text" name="capacidad" value="<?php echo $capacidad;?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Tipo de unidad</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="text" name="tipo_unidad" value="<?php echo $tipo_unidad;?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Tipo de Combustible</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="text" name="tipo_combustible" value="<?php echo $tipo_combustible;?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">No. de serie</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="text" name="serie" value="<?php echo $serie;?>" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Descripción</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="descripcion" value="<?php echo $descripcion;?>" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Enviar</button>
                      <button class="btn btn-theme04" type="button">Cancelar</button>
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
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
