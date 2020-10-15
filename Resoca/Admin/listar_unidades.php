<?php
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "";
  $nombreBaseDeDatos = "resoca";
  
  $conexion = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
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
  <link href="css/table-responsive.css" rel="stylesheet">

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
          <p class="centered"><a href="profile.html"><img src="img/favicon.ico" class="img-circle" width="80"></a></p>
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
              <span>Ordenes de Servicios</span>
              </a>
            <ul class="sub">
              <li><a href="crear_orden.php">Crear Orden</a></li>
              <li><a href="listar_orden.html">Bitacora</a></li>
              <li><a href="calendar.html">Calendario</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Cortes</span>
              </a>
            <ul class="sub">
              <li><a href="crear_reporte.html">Programar Corte</a></li>
              <li><a href="listar_reportes.html">Bitacora de Corte</a></li>
              
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Manifiestos</span>
              </a>
            <ul class="sub">
              <li><a href="crear_manifiesto.html">Crear Manifiesto</a></li>
              <li><a href="listar_manifiesto.html">Bitacora de Corte</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Acuses</span>
              </a>
            <ul class="sub">
              <li><a href="crear_acuse.html">Crear Acuses</a></li>
              <li><a href="listar_acuses.html">Bitacora de Acuses</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Reporte Imades</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-car"></i>
              <span>Unidades</span>
              </a>
            <ul class="sub">
              <li><a href="alta_unidad.html">Dar de alta</a></li>
              <li><a href="listar_unidades.html">Mis Unidades</a></li>
              <li><a href="bitacora_combustible.html">Registrar Mantenimiento</a></li>
              <li><a href="bitacora_combustible.html">Registrar combustible</a></li>
              <li><a href="listar_mantenimientos.html">Listar Mantenimientos</a></li>
              <li><a href="listar_combustible.html">Listar combustibles</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-group"></i>
              <span>Usuarios</span>
              </a>
            <ul class="sub">
              <li><a href="alta_trabajador.html">Crear Trabajador</a></li>
              <li><a href="listar_trabajador.html">Listar Trabajadores</a></li>
              <li><a href="alta_usuarios.html">Crear Cliente</a></li>
              <li><a href="listar_clientes.html">Listar Clientes</a></li>
              
              
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
        <h3><i class="fa fa-angle-right"></i> Listado de Unidades</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Modelo</th>
                      <th class="numeric">Año</th>
                      <th class="numeric">Color</th>
                      <th class="numeric">Placas</th>
                      <th class="numeric">No. Economíco</th>
                      <th class="numeric">Capacidad</th>
                      <th class="numeric">Tipo de Unidada</th>
                      <th class="numeric">Tipo de Combustible</th>
                      <th class="numeric">Serie</th>
                      <th class="numeric">Descripcion</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $sql="SELECT * FROM unidades";
                    $resultado = $conexion->query($sql);
                    while ($mostrar=mysqli_fetch_array($resultado)) {  
                  ?>
                  <tr>
                    <td><?php echo $mostrar['id'] ?></td>
                    <td><?php echo $mostrar['modelo'] ?></td>
                    <td><?php echo $mostrar['ano'] ?></td>
                    <td><?php echo $mostrar['color'] ?></td>
                    <td><?php echo $mostrar['placas'] ?></td>
                    <td><?php echo $mostrar['noeconomico'] ?></td>
                    <td><?php echo $mostrar['capacidad'] ?></td>
                    <td><?php echo $mostrar['tipounidad'] ?></td>
                    <td><?php echo $mostrar['tipocombustible']?></td>
                    <td><?php echo $mostrar['serie']?></td>
                    <td><?php echo $mostrar['descripcion']?></td>
                  </tr>
                 <?php
                    }                 
                 ?>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
       
            <!-- /content-panel -->
          </div>
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
</body>

</html>
