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
        <?php include 'templates/nav.php'; ?>
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-9 main-chart">
                        <!--CUSTOM CHART START -->
                        <div class="border-head">
                            <h3>Servicios Realizados</h3>
                        </div>
                        <div class="custom-bar-chart">
                            <ul class="y-axis">
                                <li><span>10.000</span></li>
                                <li><span>8.000</span></li>
                                <li><span>6.000</span></li>
                                <li><span>4.000</span></li>
                                <li><span>2.000</span></li>
                                <li><span>0</span></li>
                            </ul>
                            <div class="bar">
                                <div class="title">ENE</div>
                                <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                            </div>
                            <div class="bar ">
                                <div class="title">FEB</div>
                                <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                            </div>
                            <div class="bar ">
                                <div class="title">MAR</div>
                                <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                            </div>
                            <div class="bar ">
                                <div class="title">ABR</div>
                                <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
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
                        <!--custom chart end-->
                        <div class="row mt">
                            <!-- SERVER STATUS PANELS -->
                            <div class="col-md-6 col-sm-4 mb">
                                <div class="grey-panel pn donut-chart">
                                    <div class="grey-header">
                                        <h5>Analisis de Servicios</h5>
                                    </div>
                                    <canvas id="serverstatus01" height="120" width="120"></canvas>
                                    <script>
                                        var doughnutData = [{
                                            value: 70,
                                            color: "#FF6B6B"
                                        }, {
                                            value: 30,
                                            color: "#fdfdfd"
                                        }];
                                        var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                    </script>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6 goleft">
                                            <p>Serivicios<br />Finalizados:</p>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <h2>21%</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- /grey-panel -->
                            </div>
                            <!-- /col-md-4-->
                            <div class="col-md-6 col-sm-4 mb">
                                <div class="darkblue-panel pn">
                                    <div class="darkblue-header">
                                        <h5>Unidades</h5>
                                    </div>
                                    <canvas id="serverstatus02" height="120" width="120"></canvas>
                                    <script>
                                        var doughnutData = [{
                                            value: 60,
                                            color: "#1c9ca7"
                                        }, {
                                            value: 40,
                                            color: "#f68275"
                                        }];
                                        var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                                    </script>
                                    <p>Agosto 17, 2020</p>
                                    <footer>
                                        <div class="pull-left">
                                            <h5><i class="fa fa-hdd-o"></i> </h5>
                                        </div>
                                        <div class="pull-right">
                                            <h5>60% Uso</h5>
                                        </div>
                                    </footer>
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
                    <div class="col-lg-3 ds">
                        <!--COMPLETED ACTIONS DONUTS CHART-->
                        <div class="donut-main">
                            <h4>COMPLETED ACTIONS & PROGRESS</h4>
                            <canvas id="newchart" height="130" width="130"></canvas>
                            <script>
                                var doughnutData = [{
                                    value: 70,
                                    color: "#4ECDC4"
                                }, {
                                    value: 30,
                                    color: "#fdfdfd"
                                }];
                                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
                            </script>
                        </div>
                        <!--NEW EARNING STATS -->
                        <div class="panel terques-chart">
                            <div class="panel-body">
                                <div class="chart">
                                    <div class="centered">
                                        <span>TODAY EARNINGS</span>
                                        <strong>$ 890,00 | 15%</strong>
                                    </div>
                                    <br>
                                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                                </div>
                            </div>
                        </div>
                        <!--new earning end-->
                        <!-- RECENT ACTIVITIES SECTION -->
                        <h4 class="centered mt">RECENT ACTIVITY</h4>
                        <!-- First Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>Just Now</muted>
                                    <br />
                                    <a href="#">Paul Rudd</a> purchased an item.<br />
                                </p>
                            </div>
                        </div>
                        <!-- Second Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>2 Minutes Ago</muted>
                                    <br />
                                    <a href="#">James Brown</a> subscribed to your newsletter.<br />
                                </p>
                            </div>
                        </div>
                        <!-- Third Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>3 Hours Ago</muted>
                                    <br />
                                    <a href="#">Diana Kennedy</a> purchased a year subscription.<br />
                                </p>
                            </div>
                        </div>
                        <!-- Fourth Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>7 Hours Ago</muted>
                                    <br />
                                    <a href="#">Brando Page</a> purchased a year subscription.<br />
                                </p>
                            </div>
                        </div>
                        <!-- USERS ONLINE SECTION -->
                        <h4 class="centered mt">TEAM MEMBERS ONLINE</h4>
                        <!-- First Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="img/ui-divya.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                    <a href="#">DIVYA MANIAN</a><br />
                                    <muted>Available</muted>
                                </p>
                            </div>
                        </div>
                        <!-- Second Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="img/ui-sherman.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                    <a href="#">DJ SHERMAN</a><br />
                                    <muted>I am Busy</muted>
                                </p>
                            </div>
                        </div>
                        <!-- Third Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="img/ui-danro.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                    <a href="#">DAN ROGERS</a><br />
                                    <muted>Available</muted>
                                </p>
                            </div>
                        </div>
                        <!-- Fourth Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="img/ui-zac.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                    <a href="#">Zac Sniders</a><br />
                                    <muted>Available</muted>
                                </p>
                            </div>
                        </div>
                        <!-- CALENDAR-->

                        <!-- / calendar -->
                    </div>
                    <!-- /col-lg-3 -->
                </div>
                <!-- /row -->
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <?php include 'templates/footer.php'; ?>
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
                title: 'Bienvenido Administrador',
                // (string | mandatory) the text inside the notification
                text: 'Recuerda de revisar todos tus pendientes para la semana, éxito!.',
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