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
    <link href="lib/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
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
                        <a href="profile.html"><img src="img/banner.png" class="img-circle" width="80"></a>
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
                            <span>Ordenes de Servicios</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_orden.php">Crear Orden</a></li>
                            <li><a href="listar_orden.php">Bitacora</a></li>
                            <li><a href="calendar.html">Calendario</a></li>
                            <li><a href="crear_servicio.html">Crear Servicio</a></li>
                            <li><a href="listar_servicios.php">Lista de Servicios</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Cortes</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_reporte.php">Programar Corte</a></li>
                            <li><a href="listar_reportes.php">Bitacora de Corte</a></li>


                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Manifiestos</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_manifiesto.php">Crear Manifiesto</a></li>
                            <li><a href="listar_manifiesto.php">Bitacora de Corte</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Acuses</span>
                        </a>
                        <ul class="sub">
                            <li><a href="crear_acuse.php">Crear Acuses</a></li>
                            <li><a href="listar_acuses.php">Bitacora de Acuses</a></li>
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
                            <li><a href="listar_unidades.php">Mis Unidades</a></li>
                            <li><a href="bitacora_mantenimiento.php">Registrar Mantenimiento</a></li>
                            <li><a href="bitacora_combustible.php">Registrar Combustible</a></li>
                            <li><a href="listar_mantenimientos.php">Listar Mantenimientos</a></li>
                            <li><a href="listar_combustible.php">Listar Combustibles</a></li>

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
                <h3><i class="fa fa-angle-right"></i> Servicios Organizados</h3>
                <button class="btn btn-primary" data-toggle="modal" data-target="#calculo">Calcular total de
                    residuos</button>
                <div class="modal" id="calculo" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Total de residuos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label for="">Fecha de inicio</label>
                                        <input id="fechaI" type="date" class="form-control">
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="">Fecha final</label>
                                        <input id="fechaF" type="date" class="form-control">
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <button onclick="calcular()" class="btn btn-primary">Calcular</button>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="">Total de residuos (KG)</label>
                                        <input id="resultado" type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>

                            <!--Este es el pie del modal aqui puedes agregar mas botones-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page start-->
                <div class="row mt">

                    <aside class="col-lg-12 mt">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="modal" id="ModalEventos" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detalle de orden</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12 form-group">
                                                        <label>Cliente:</label>
                                                        <input id="cliente_orden" type="text" class="form-control"
                                                            disabled>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Servicio:</label>
                                                        <input id="servicio_orden" type="text" class="form-control"
                                                            disabled>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Estado:</label>
                                                        <input id="estado_orden" type="text" class="form-control"
                                                            disabled>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Cantidad de residuos (KG):</label>
                                                        <input id="cantidad_orden" type="text" class="form-control"
                                                            disabled>
                                                    </div>
                                                </div>

                                            </div>

                                            <!--Este es el pie del modal aqui puedes agregar mas botones-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="calendar" class="has-toolbar"></div>
                            </div>
                        </section>
                    </aside>
                </div>
                <!-- page end-->
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
    <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="lib/fullcalendar/fullcalendar.min.js"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->
    <script src="lib/calendar-conf-events.js"></script>

</body>

</html>