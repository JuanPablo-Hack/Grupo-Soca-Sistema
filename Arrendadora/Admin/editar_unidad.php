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
    $no_economico=$Row['no_economico'];
    $no_serie=$Row['no_serie'];
    $no_filtro_aceite=$Row['no_filtro_aceite'];
    $no_filtro_secu=$Row['no_filtro_secu'];
    $tipo_aceite=$Row['tipo_aceite'];
    $cantidad=$Row['cantidad'];

    $no_filtro_hidra=$Row['no_filtro_hidra'];
    $tipo_aceite2=$Row['tipo_aceite2'];
    $cantidad2=$Row['cantidad2'];
    $no_filtro_combus=$Row['no_filtro_combus'];

    $no_filtro_aire=$Row['no_filtro_aire'];
    $no_bandas=$Row['no_bandas'];
    $tipo_aceite_dif=$Row['tipo_aceite_dif'];
    $cantidad_dif=$Row['cantidad_dif'];

    $liquido_freno=$Row['liquido_freno'];
    $cantidad_freno=$Row['cantidad_freno'];
    $anticongelante=$Row['anticongelante'];
    $cantidad_anti=$Row['cantidad_anti'];
    $tipo_aceite_trans=$Row['tipo_aceite_trans'];

    $cantidad_trans=$Row['cantidad_trans'];

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
                    <p class="centered">
                        <a href="profile.html"><img src="img/login_banner.png" class="img-circle" width="80"></a>
                    </p>
                    <h5 class="centered">Admin</h5>
                    <li class="mt">
                        <a class="active" href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Panel de Control</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Inventario</span>
                        </a>
                        <ul class="sub">
                            <li><a href="alta_unidad.html">Dar de alta</a></li>
                            <li><a href="listar_unidades.php">Mis Unidades</a></li>


                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-car"></i>
                            <span>Mantenimientos</span>
                        </a>
                        <ul class="sub">

                            <li><a href="bitacora_mantenimiento.php">Registrar Mantenimiento</a></li>
                            <li><a href="listar_mantenimientos.php">Listar Mantenimientos</a></li>


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
                            <li><a href="alta_usuarios.html">Crear Cliente</a></li>
                            <li><a href="listar_clientes.php">Listar Clientes</a></li>


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
                <h3>Datos Generales de la unidad</h3>
                <hr>
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
                    <label for="curl" class="control-label col-lg-2">No. de Serie</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="curl" type="text" name="capacidad" value="<?php echo $no_serie;?>" />
                    </div>
                  </div>
                  <h3>Datos Generales de las refacciones</h3>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">No. filtro de aceite</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="no_filtro_aceite" value="<?php echo $no_filtro_aceite;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">No. filtro de secundario</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="no_filtro_secu" value="<?php echo $no_filtro_secu;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Tipo de aceite</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="tipo_aceite" value="<?php echo $tipo_aceite;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Cantidad</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="cantidad_aceite" value="<?php echo $cantidad;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">No. filtro de hidraulico</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="no_filtro_hidra" value="<?php echo $no_filtro_hidra;?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Tipo de aceite</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="tipo_aceite2" value="<?php echo $tipo_aceite2;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Cantidad</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="cantidad_aceite2" value="<?php echo $cantidad2;?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">No. de filtro de combustible</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="no_filtro_combus" value="<?php echo $no_filtro_combus;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">No. de filtros de aire</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="no_filtro_aire" value="<?php echo $no_filtro_aire;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">No. de bandas</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="no_bandas" value="<?php echo $no_bandas;?>" />
                                        </div>
                                    </div>
                                    <h3>Medidas del rodado</h3>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Tipo de aceite de diferencial</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="aceite_dif" value="<?php echo $tipo_aceite_dif;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Cantidad</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="cantidad_dif" value="<?php echo $cantidad_dif;?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Tipo de líquido de freno</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="liquido_freno" value="<?php echo $liquido_freno;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Cantidad</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="cantidad_freno" value="<?php echo $cantidad_freno;?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Tipo de anticongelante</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="anticongelante" value="<?php echo $anticongelante;?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Cantidad</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="cantidad_anti" value="<?php echo $cantidad_anti;?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Tipo de aceite de transmisión</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="aceite_trans" value="<?php echo $tipo_aceite_trans;?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Cantidad</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="cantidad_trans" value="<?php echo $cantidad_trans;?>"/>
                                        </div>
                                    </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Enviar</button>
                      <a href="listar_unidades.php" class="btn btn-theme04" type="button">Cancelar</a>
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
