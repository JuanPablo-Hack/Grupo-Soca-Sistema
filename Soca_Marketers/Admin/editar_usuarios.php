<?php
  $id=$_GET['id'];
  include 'php/conexion.php';
  $sql="SELECT * FROM clientes WHERE id='".$id."'";
  $result = mysqli_query($conexion,$sql);
  if ($Row = mysqli_fetch_array($result))
  {
    $nombre= $Row['nombre'];
    
    $nra=$Row['nra'];
    $telefono=$Row['telefono'];
    $email=$Row['email'];
    $area=$Row['area'];
    
    $rfc=$Row['rfc'];
    $dir=$Row['dir'];
    $cp=$Row['cp'];
    $user=$Row['user'];
    $pwd=$Row['pwd'];
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
          <p class="centered"><a href="profile.html"><img src="img/smm.png" class="img-circle" width="80"></a></p>
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
              <span>Producción de Mina</span>
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
              <span>Ingresos de Patio de Acopio</span>
              </a>
            <ul class="sub">
              <li><a href="crear_orden2.php">Crear Registro</a></li>
              <li><a href="listar_orden2.php">Bitacora</a></li>
              <li><a href="listar_lotes_acopio.php">Minas Registradas</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Salida de Patio de Acopio</span>
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
        <h3><i class="fa fa-angle-right"></i>Editar Usuarios</h3>
        <!-- BASIC FORM VALIDATION -->
        
        <!-- /row -->
        <!-- FORM VALIDATION -->
        
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="./php/editar_usuario.php">
                  <h3>Datos generales</h3>
                  <hr>
                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Indentificador</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="identificador" value="<?php echo $id; ?>" readonly>
                  </div>
                </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Nombre Completo</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="nombre" type="text" value="<?php echo $nombre; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">No. NRA</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="nra" type="text" value="<?php echo $nra; ?>" />
                    </div>
                  </div>
                  
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Telefono</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="telefono" type="text" value="<?php echo $telefono; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="email" type="text" value="<?php echo $email; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Area</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="area" type="text" value="<?php echo $area; ?>" />
                    </div>
                  </div>
                  
                  
                  <h3>Datos Fiscales</h3>
                  <hr>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">RFC</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="rfc" type="text"  value="<?php echo $rfc; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Dirección</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="direccion" type="text" value="<?php echo $dir; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">C.P</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="cp" type="text" value="<?php echo $cp; ?>" />
                    </div>
                  </div>
                  <h3>Datos de Usuario</h3>
                  <hr>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Usuario</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="user" type="text" value="<?php echo $user; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Contraseña</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="contra" type="password" value="<?php echo $pwd; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirmar Contraseña</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="recontra" type="password" value="<?php echo $pwd; ?>" />
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
            </div>
            <!-- /form-panel -->
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
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
