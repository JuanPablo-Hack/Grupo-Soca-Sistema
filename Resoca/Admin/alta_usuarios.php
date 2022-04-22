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
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
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
        <?php include 'templates/nav.php'; ?>
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> Dar de alta cliente</h3>
                <div class="row mt">
                    <!--  DATE PICKERS -->
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <form action="php/agregar_usuario.php" class="form-horizontal style-form" method='POST'>
                                <h3>Datos generales</h3>
                                <hr>
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-2">Nombre Completo</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="firstname" name="nombre" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">No. NRA</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="nra" type="text" />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Telefono</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="telefono" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="email" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Area</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="area" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Fecha de Programación de corte</label>
                                    <div class="col-md-3 col-xs-11">
                                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                                            <input type="text" readonly="" value="01-01-2014" size="16" name='fecha' class="form-control">
                                            <span class="input-group-btn add-on">
                                                <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                        <span class="help-block">Select date</span>
                                    </div>
                                </div>

                                <h3>Datos Fiscales</h3>
                                <hr>
                                <div class="form-group ">
                                    <label for="lastname" class="control-label col-lg-2">RFC</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="lastname" name="rfc" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Dirección</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="direccion" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">C.P</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="cp" type="text" />
                                    </div>
                                </div>
                                <h3>Datos del contacto</h3>
                                <hr>
                                <div class="form-group ">
                                    <label for="lastname" class="control-label col-lg-2">Nombre</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="lastname" name="nombre_representante" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Cargo</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="cargo" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">Télefono</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="tel_representante" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="username" class="control-label col-lg-2">E-mail</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="email_representante" type="text" />
                                    </div>
                                </div>
                                <h3>Datos de Usuario</h3>
                                <hr>
                                <div class="form-group ">
                                    <label for="lastname" class="control-label col-lg-2">Usuario</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="lastname" name="user" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="password" class="control-label col-lg-2">Contraseña</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="password" name="contra" type="password" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="confirm_password" class="control-label col-lg-2">Confirmar Contraseña</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="confirm_password" name="recontra" type="password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-theme" type="submit">Guardar</button>
                                        <a href="listar_clientes.php" class="btn btn-theme04" type="button">Cancelar</a>
                                    </div>
                                </div>
                            </form>


                            </form>
                        </div>


                        <!-- col-lg-12-->
                    </div>
                    <!-- /form-panel -->
                </div>
                <!-- /col-lg-12 -->
                </div>
                <!-- /row -->
                <!-- DATE TIME PICKERS -->

                <!-- /form-panel -->
                </div>
                <!-- /col-lg-12 -->
                </div>
                <!-- row -->
            </section>
            <!-- /wrapper -->
        </section>
        <?php include 'templates/footer.php'; ?>
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
    <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="lib/advanced-form-components.js"></script>

</body>

</html>