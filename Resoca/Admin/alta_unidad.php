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
        <?php include 'templates/nav.php'; ?>
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> Alta de Unidad</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <div class=" form">
                                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="./php/agregar_unidad.php">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Modelo</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="cname" name="modelo" minlength="2" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Año</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="cname" name="ano" minlength="2" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Color</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="color" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Placas</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="placas" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">No. economico</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="no_economico" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Capacidad de Carga</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="capacidad" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Tipo de unidad</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="tipo_unidad" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Tipo de Combustible</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="tipo_combustible" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">No. de serie</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="curl" type="text" name="serie" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2">Descripción</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control " id="ccomment" name="descripcion"></textarea>
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
    <script src="lib/form-validation-script.js"></script>

</body>

</html>