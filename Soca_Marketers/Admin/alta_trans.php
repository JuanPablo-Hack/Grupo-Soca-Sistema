<?php
  include 'php/conexion.php';
  
  $sql4="SELECT * FROM empresa_transportista";
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
                        <a href="profile.html"><img src="img/smm.png" class="img-circle" width="80"></a>
                    </p>
                    <h5 class="centered">Admin</h5>
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
                            <li><a href="alta_trans.php">Dar de alta operador externo</a></li>
                            <li><a href="listar_transportistas.php">Operadores Externos</a></li>


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
                <h3><i class="fa fa-angle-right"></i> Alta de Transportistas</h3>
                <!-- BASIC FORM VALIDATION -->

                <!-- /row -->
                <!-- FORM VALIDATION -->

                <!-- /row -->
                <div class="row mt">
                    <div class="col-lg-12">

                        <div class="form-panel">
                            <div class="form">
                                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="./php/alta_trans.php">
                                    <h3>Datos de la empresa</h3>
                                    <hr>
                                    <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Transportista</label>
                                    <div class="col-sm-4">
                                    <select class="form-control" name='nombre_trans'>
                                    <option value="0"></option>
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
                                    <h3>Datos del operador</h3>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Nombre completo</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="username" name="operador" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Cargo</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="username" name="cargo" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Licencia</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="username" name="licencia" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Telefono</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="tel_operador" type="text" />
                                        </div>
                                    </div>
                                    <h3>Datos de la unidad</h3>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Modelo</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="username" name="modelo" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Placas</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="username" name="placas" type="text" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Año</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="ano" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Capacidad</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="capcidad" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Color</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="color" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Seguro</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="seguro" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Descripción</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="descripcion" type="text" />
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