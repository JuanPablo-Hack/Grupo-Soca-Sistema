<?php
 include 'php/conexion.php';
 $sql="SELECT SUM(peso_1) as breña, SUM(peso_2) as triturado, SUM(peso_3) as triturado_finos, SUM(peso_4) as ganga FROM lotes_acopio";
 $result = mysqli_query($conexion,$sql);
 if ($Row = mysqli_fetch_array($result))
  {
    
    
    $breña=$Row['breña'];
    $triturado=$Row['triturado'];
    $triturado_finos=$Row['triturado_finos'];
    $ganga=$Row['ganga'];
    
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
                        <a href="profile.html"><img src="img/smm.png" class="img-circle" width="80"></a>
                    </p>
                    <h5 class="centered">Cliente</h5>
                    <li class="mt">
                        <a class="active" href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Panel de Control</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Patio de trituracion</span>
                        </a>
                        <ul class="sub">

                            <li><a href="listar_orden2.php">Bitacora</a></li>

                            <li><a href="listar_lotes_acopio.php">Bitacora de Producción</a></li>

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
        <h3><i class="fa fa-angle-right"></i> Bitacora de Lotes de Patio de trituracion</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>No. Lote</th>
                    <th>Nombre de Mina</th>
                    <th>Tipo de mineral</th>
                    <th>Peso de breña</th>
                    <th>Peso de 50 a 10 mm</th>
                    <th>Peso de 10 mm a finos</th>
                    <th>Peso de ganga</th>
                    
                    
                   
                   
                   
                  </tr>
                </thead>
                <tbody>
                <?php
                    $sql="SELECT * FROM lotes_acopio";
                    $resultado = $conexion->query($sql);
                    while ($mostrar=mysqli_fetch_array($resultado)) {  
                  ?>
                  <tr >
                  
                  <td><?php echo $mostrar['id'] ?></td>
                  <td><?php 
                    
                     
                    $sql1="SELECT * FROM lotes WHERE id='".$mostrar['no_lote']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['no_lote'];  
                      }
                      echo $nombre;
                    ?></td>
                  <td><?php 
                    
                     
                    $sql1="SELECT * FROM minas WHERE id='".$mostrar['mina']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;
                    ?></td>
                   
                    <td><?php 
                    
                     
                    $sql1="SELECT * FROM materiales WHERE id='".$mostrar['material']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;
                    ?></td>
                   <td><?php echo $mostrar['peso_1']." "."Kg"?></td>
                   <td><?php echo $mostrar['peso_2']." "."Kg"?></td>
                   <td><?php echo $mostrar['peso_3']." "."Kg"?></td>
                   <td><?php echo $mostrar['peso_4']." "."Kg"?></td>
                    
                  
                    <td><?php 
                    
                     
                    $sql1="SELECT * FROM tallas WHERE id='".$mostrar['talla']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;
                    ?></td>
                   
                  <?php
                    }                 
                 ?>
                 <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td>Total</td>
                   <td><?php echo $breña." "."Kg" ?></td>
                   <td><?php echo $triturado." "."Kg" ?></td>
                   <td><?php echo $triturado_finos." "."Kg" ?></td>
                   <td><?php echo $ganga." "."Kg" ?></td>
                 </tr>
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
 
</body>

</html>
