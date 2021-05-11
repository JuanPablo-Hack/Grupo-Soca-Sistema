<?php
 include 'php/conexion.php';
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
                            <span>Produccion y Acopio en mina</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_orden.php">Crear Registro</a></li>
                            <li><a href="listar_orden.php">Bitacora</a></li>
                            <li><a href="alta_mina.html">Registrar Mina</a></li>
                            <li><a href="listar_minas.php">Minas Registradas</a></li>
                            <li><a href="listar_lotes.php">Bitacora de lotes</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Patio de trituracion</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_orden2.php">Crear Registro</a></li>
                            <li><a href="listar_orden2.php">Bitacora</a></li>
                            <li><a href="listar_lotes_acopio.php">Bitacora de lotes</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Salida de Patio de mina</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_orden3.php">Crear Registro</a></li>
                            <li><a href="listar_orden3.php">Bitacora</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Analisis y Muestras</span>
                        </a>
                        <ul class="sub">

                            <li><a href="listar_muestras.php">Bitacora de muestras</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Prospección de Minas</span>
                        </a>
                        <ul class="sub">

                            <li><a href="listar_muestras.php">Bitacora de muestras</a></li>
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
        <h3><i class="fa fa-angle-right"></i> Bitacora de Lotes</h3>
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
                    <th>Metros Cubicos</th>
                    <th class="hidden-phone">Tallas</th>
                    <th class="hidden-phone">Calidad</th>
                    
                   
                   
                    <th class="hidden-phone">Acciones</th>
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
                  <td><?php echo $mostrar['no_lote'] ?></td>
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
                   <td><?php echo $mostrar['metros'] ?></td>
                    
                  
                    <td><?php 
                    
                     
                    $sql1="SELECT * FROM tallas WHERE id='".$mostrar['talla']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;
                    ?></td>
                    <td><?php 
                    
                     
                    $sql1="SELECT * FROM calidad WHERE id='".$mostrar['calidad']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;
                    ?></td>
                    <td>
                     
                      
                    

                      <a href='./editar_lote_acopio.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href='./eliminar_lote.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                      
                    </td>
                  </tr>
                  <?php
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
