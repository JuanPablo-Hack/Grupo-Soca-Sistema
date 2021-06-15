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
                            <li><a href="listar_orden2.php">Bitacora</a></li>
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
                            <li><a href="alta_trans.php">Alta de Operadores Externos</a></li>
                            <li><a href="listar_transportistas.php">Operadores Externos</a></li>
                            

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
        <h3><i class="fa fa-angle-right"></i> Bitacora de Producción y Acopio de Mina</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Cliente</th>
                    <th>Nombre de Mina</th>
                    <th>Tipo de mineral</th>
                    <th>Unidad</th>
                    <th class="hidden-phone">Placas</th>
                    <th class="hidden-phone">Operador</th>
                    
                   
                    <th class="hidden-phone">Metros Cubicos</th>
                    <th class="hidden-phone">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $sql="SELECT * FROM produccion_mina";
                    $resultado = $conexion->query($sql);
                    while ($mostrar=mysqli_fetch_array($resultado)) {  
                  ?>
                  <tr >
                  
                  <td><?php 
                    
                     
                    $sql1="SELECT * FROM clientes WHERE id='".$mostrar['cliente']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;
                    ?></td>
                  <td><?php 
                    
                     
                    $sql1="SELECT * FROM minas WHERE id='".$mostrar['nombre_mina']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;
                    ?></td>
                    <td><?php echo $mostrar['mineral'] ?></td>
                    <td><?php 
                    
                     
                    $sql1="SELECT * FROM unidades WHERE id='".$mostrar['unidad']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['modelo'];  
                      }
                      echo $nombre;
                    ?></td>
                    <td><?php 
                    
                     
                    $sql1="SELECT * FROM unidades WHERE id='".$mostrar['unidad']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['placas'];  
                      }
                      echo $nombre;
                    ?></td>
                    <td><?php 
                    
                     
                    $sql1="SELECT * FROM trabajador WHERE id='".$mostrar['operador']."'";
                    $result1 = mysqli_query($conexion,$sql1);
                    if ($Row = mysqli_fetch_array($result1))
                      {
                        $nombre= $Row['nombre'];  
                      }
                      echo $nombre;
                    ?></td>
                    
                    <td><?php echo $mostrar['metros3'] ?></td>
                    <td>
                     
                      
                      <a href='./orden.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>

                      <a href='./editar_orden.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href='./eliminar_orden.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                      
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
