<?php
include 'php/conexion.php';
$sql = "SELECT SUM(p_tara) as tara, SUM(p_bruto) as bruto, SUM(p_neto) as neto FROM patio_acopio WHERE origen=1";
$result = mysqli_query($conexion, $sql);
if ($Row = mysqli_fetch_array($result)) {


    $tara = $Row['tara'];
    $bruto = $Row['bruto'];
    $neto = $Row['neto'];
}
$sql2 = "SELECT SUM(peso_1) as breña, SUM(peso_2) as triturado, SUM(peso_3) as triturado_finos, SUM(peso_4) as ganga FROM lotes_acopio";
$result2 = mysqli_query($conexion, $sql2);
if ($Row = mysqli_fetch_array($result2)) {


    $breña = $Row['breña'];
    $triturado = $Row['triturado'];
    $triturado_finos = $Row['triturado_finos'];
    $ganga = $Row['ganga'];
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
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>


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
                    <h5 class="centered">Ademsa</h5>
                    <li class="mt">
                        <a class="active" href="index.php">
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
                            
                            <li><a href="listar_orden2.php">Bitacora de Extracción</a></li>
                            <li><a href="listar_compra.php">Bitacora de Compra</a></li>
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
                <div class="row">
                    <div class="col-lg-9 main-chart">
                        <!--CUSTOM CHART START -->
                        <div class="border-head">
                            <h3>Producción en Patio de Trituración</h3>
                        </div>
                        <div class="custom-bar-chart">
                            <ul class="y-axis">
                                <li><span><?php echo $breña; ?></span></li>
                                <li><span><?php echo $triturado; ?></span></li>
                                <li><span><?php echo $triturado_finos; ?></span></li>
                                <li><span><?php echo $ganga; ?></span></li>
                                <li><span>0</span></li>
                            </ul>
                            <div class="bar">
                                <div class="title">Peso de Breña</div>
                                <div class="value tooltips" data-original-title="<?php echo $breña; ?>" data-toggle="tooltip" data-placement="top">99%</div>
         
                            </div>
                            <div class="bar ">
                                <div class="title">Peso de 50 a 10 mm</div>
                                <div class="value tooltips" data-original-title="<?php echo $triturado; ?>" data-toggle="tooltip" data-placement="top">65%</div>
     
                            </div>
                            <div class="bar ">
                                <div class="title">Peso de 10 mm a finos</div>
                                <div class="value tooltips" data-original-title="<?php echo $triturado_finos; ?>" data-toggle="tooltip" data-placement="top">95%</div>
                            </div>
                            <div class="bar ">
                                <div class="title">Peso de ganga</div>
                                <div class="value tooltips" data-original-title="<?php echo $ganga; ?>" data-toggle="tooltip" data-placement="top">99%</div>
         
                            </div>

                        </div>
                        <!--custom chart end-->
                        <div class="row mt">
                            <!-- SERVER STATUS PANELS -->
                            <div class="col-md-6 col-sm-4 mb">
                                <div class="border-head">
                                    <h3>Producción en Minas</h3>
                                </div>
                                <div class="custom-bar-chart">
                                    <ul class="y-axis">
                                        <li><span><?php echo $breña; ?></span></li>
                                        <li><span><?php echo $triturado; ?></span></li>
                                        <li><span><?php echo $triturado_finos; ?></span></li>
                                        <li><span><?php echo $ganga; ?></span></li>
                                        <li><span>2.000</span></li>
                                        <li><span>0</span></li>
                                    </ul>
                                    <div class="bar">
                                        <div class="title">ENE</div>
                                        <div class="value tooltips" data-original-title="<?php echo $breña; ?>" data-toggle="tooltip" data-placement="top">99%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">FEB</div>
                                        <div class="value tooltips" data-original-title="<?php echo $triturado; ?>" data-toggle="tooltip" data-placement="top">65%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">MAR</div>
                                        <div class="value tooltips" data-original-title="<?php echo $triturado_finos; ?>" data-toggle="tooltip" data-placement="top">95%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">ABR</div>
                                        <div class="value tooltips" data-original-title="<?php echo $ganga; ?>" data-toggle="tooltip" data-placement="top">99%</div>
                                    </div>
                                    <div class="bar">
                                        <div class="title">MAY</div>
                                        <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">JUN</div>
                                        <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                                    </div>
                                    <div class="bar">
                                        <div class="title">JUL</div>
                                        <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                                    </div>
                                </div>
                                <!-- /grey-panel -->
                            </div>
                            <!-- /col-md-4-->
                            <div class="col-md-6 col-sm-4 mb">
                                <div class="border-head">
                                    <h3>Productos en elaboración</h3>
                                </div>
                                <div class="custom-bar-chart">
                                    <ul class="y-axis">
                                        <li><span><?php echo $tara; ?></span></li>

                                        <li><span><?php echo $bruto; ?></span></li>
                                        <li><span><?php echo $neto; ?></span></li>
                                        <li><span>4.000</span></li>
                                        <li><span>2.000</span></li>
                                        <li><span>0</span></li>
                                    </ul>
                                    <div class="bar">
                                        <div class="title">Peso Tara</div>
                                        <div class="value tooltips" data-original-title="<?php echo $tara; ?>" data-toggle="tooltip" data-placement="top">65%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">Peso Bruto</div>
                                        <div class="value tooltips" data-original-title="<?php echo $bruto; ?>" data-toggle="tooltip" data-placement="top">95%</div>
                                    </div>
                                    <div class="bar ">
                                        <div class="title">Peso Neto</div>
                                        <div class="value tooltips" data-original-title="<?php echo $neto; ?>" data-toggle="tooltip" data-placement="top">75%</div>
                                    </div>

                                </div>
                                <!--  /darkblue panel -->
                            </div>
                            <!-- /col-md-4 -->

                            <!-- /col-md-4 -->
                        </div>
                        <!-- /row -->

                        <!-- /row -->
                    </div>
                    <!-- /col-lg-9 END SECTION MIDDLE -->
                    <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
                   
                <!-- /row -->
            </section>
        </section>
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
                <a href="#" class="go-top">
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
    <script src="lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="lib/sparkline-chart.js"></script>
    <script src="lib/zabuto_calendar.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Bienvenido Ademsa',
                // (string | mandatory) the text inside the notification
                text: 'Usa el sistema SOCA MARkETERS para información relevante!.',
                // (string | optional) the image to display on the left
                image: 'img/banner.png',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (int | optional) the time you want it to be alive for before fading out
                time: 8000,
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'my-sticky-class'
            });

            return false;
        });
    </script>
    <script type="application/javascript">
        $(document).ready(function() {
            $("#date-popover").popover({
                html: true,
                trigger: "manual"
            });
            $("#date-popover").hide();
            $("#date-popover").click(function(e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function() {
                    return myDateFunction(this.id, false);
                },
                action_nav: function() {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [{
                    type: "text",
                    label: "Special event",
                    badge: "00"
                }, {
                    type: "block",
                    label: "Regular event",
                }]
            });
        });

        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
</body>

</html>