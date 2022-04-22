<?php
include 'php/conexion.php';
session_start();
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
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
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
          <li><a class="logout" href="php/logout.php">Cerrar Sesión</a></li>
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
          <p class="centered"><a href="profile.html"><img src="img/banner.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Cliente</h5>
          <li class="mt">
            <a class="active" href="index.php">
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

              <li><a href="listar_orden.php">Bitacora</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Cortes</span>
            </a>
            <ul class="sub">
              <li><a href="listar_reportes.php">Mis cortes</a></li>



            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Manifiestos</span>
            </a>
            <ul class="sub">
              <li><a href="listar_manifiesto.php">Mis manifiestos</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Acuses</span>
            </a>
            <ul class="sub">
              <li><a href="listar_acuses.php">Mis acuses</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Reporte General</span>
            </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Bitacora de Ordenes</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Folio</th>
                    <th>Cliente</th>
                    <th class="hidden-phone">Fecha</th>
                    <th class="hidden-phone">Tipo Servicio</th>
                    <th class="hidden-phone">Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($_SESSION['user'])) {
                    $id = $_SESSION['user'];
                    $sql = "SELECT * FROM ordenes WHERE cliente = '$id'";
                    $resultado = $conexion->query($sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                      <tr>

                        <td><?php echo '97/22-' . $mostrar['id'] ?></td>
                        <td><?php


                            $sql1 = "SELECT * FROM clientes WHERE id='" . $mostrar['cliente'] . "'";
                            $result1 = mysqli_query($conexion, $sql1);
                            if ($Row = mysqli_fetch_array($result1)) {
                              $nombre = $Row['nombre'];
                            }
                            echo $nombre;
                            ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php


                            $sql1 = "SELECT * FROM servicios WHERE id='" . $mostrar['servicio'] . "'";
                            $result1 = mysqli_query($conexion, $sql1);
                            if ($Row = mysqli_fetch_array($result1)) {
                              $nombre = $Row['nombre'];
                            }
                            echo $nombre;
                            ?></td>
                        <td><?php echo $mostrar['estado'] ?></td>
                        <td>
                          <a onclick="crearPDF(<?php echo $mostrar['id']; ?>)" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>





                        </td>
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
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
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- PDF -->

  <script>
    function addScript(url) {
      var script = document.createElement('script');
      script.type = 'application/javascript';
      script.src = url;
      document.head.appendChild(script);
    }
    addScript('https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js');

    function crearPDF(id) {
      var opt = {
        margin: 1,
        filename: 'Orden.pdf',
        image: {
          type: 'jpeg',
          quality: 0.98
        },
        html2canvas: {
          scale: 3
        },
        jsPDF: {
          unit: 'in',
          format: 'a3',
          orientation: 'portrait'
        }
      };

      $.ajax({
        type: 'POST',
        data: "id=" + id,
        url: 'php/ordenesPDF.php',
        success: function(r) {
          // console.log(r);
          var worker = html2pdf().set(opt).from(r).toPdf().save();

        }
      });
    }
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      var oTable = $("#hidden-table-info").dataTable({
        aoColumnDefs: [{
          bSortable: false,
          aTargets: [0],
        }, ],
        aaSorting: [
          [1, "asc"]
        ],
      });
    });
  </script>

</body>

</html>