<?php
include 'php/conexion.php';
if (empty($_GET['buscador'])) {
  $sql = "SELECT SUM(p_tara) as tara, SUM(p_bruto) as bruto, SUM(p_neto) as neto FROM patio_acopio WHERE origen=2";
  $result = mysqli_query($conexion, $sql);
  if ($Row = mysqli_fetch_array($result)) {


    $tara = $Row['tara'];
    $bruto = $Row['bruto'];
    $neto = $Row['neto'];
  }
} else {
  $buscador = $_GET['buscador'];
  $sql = "SELECT SUM(p_tara) as tara, SUM(p_bruto) as bruto, SUM(p_neto) as neto FROM patio_acopio WHERE origen=2 AND extractor='$buscador' OR no_guia='$buscador' OR no_ticket='$buscador'";
  $result = mysqli_query($conexion, $sql);
  if ($Row = mysqli_fetch_array($result)) {


    $tara = $Row['tara'];
    $bruto = $Row['bruto'];
    $neto = $Row['neto'];
  }
}

$sql3 = "SELECT * FROM minas";
$result3 = mysqli_query($conexion, $sql3);
$sql4 = "SELECT * FROM empresa_transportista";
$result4 = mysqli_query($conexion, $sql4);
$sql5 = "SELECT * FROM lotes";
$result5 = mysqli_query($conexion, $sql5);

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
  <link rel="stylesheet" href="lib/sweetalert2/sweetalert2.min.css">
  <style>
    #Buscador {
      background: url(https://cdn0.iconfinder.com/data/icons/slim-square-icons-basics/100/basics-19-32.png) no-repeat 0px 5px;
      background-size: 24px;
      width: 500px;
      border: transparent;
      border-bottom: solid 1px #ccc;
      padding: 10px 10px 10px 30px;
      outline: none;
    }
  </style>

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
        <h3><i class="fa fa-angle-right"></i> Bitacora de Compra</h3>


        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <form action="" method="get">
                <input type="text" placeholder="Busqueda No.Guía o No.Folio Ticket o Extractor" id="Buscador" name="buscador" />

              </form>
              <hr>
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>
                      <select class="form-control" name='mina' id="filtrar_mina">
                        <option>-</option>
                        <?php
                        while ($Row1 = mysqli_fetch_array($result3)) {
                        ?>
                          <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </th>
                    <th class="hidden-phone">Mineral</th>

                    <th class="hidden-phone">Peso Bruto</th>
                    <th class="hidden-phone">Peso Tara</th>
                    <th class="hidden-phone">Peso Neto</th>
                    <th class="hidden-phone">No. Guía</th>
                    <th class="hidden-phone">No. Folio ticket</th>
                    <th>
                      <select class="form-control" name='lote' id="filtrar_lote">
                        <option>-</option>
                        <?php
                        while ($Row1 = mysqli_fetch_array($result5)) {
                        ?>
                          <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['no_lote']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </th>
                    <th class="hidden-phone">Extractor</th>
                    <th class="hidden-phone">
                      <select class="form-control" name='transportista' id="filtrar_trans">
                        <option>-</option>
                        <?php
                        while ($Row1 = mysqli_fetch_array($result4)) {
                        ?>
                          <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </th>
                    <th class="hidden-phone">Fecha y hora de ingreso</th>
                    <th class="hidden-phone">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (empty($_GET['buscador'])) {
                    $sql = "SELECT * FROM patio_acopio WHERE origen=2";
                  } else {
                    $buscador = $_GET['buscador'];
                    $sql = "SELECT * FROM patio_acopio WHERE origen=2 AND extractor='$buscador' OR no_guia='$buscador' OR no_ticket='$buscador'";
                  }

                  $resultado = $conexion->query($sql);
                  while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                    <tr>

                      <td><?php


                          $sql1 = "SELECT * FROM minas WHERE id='" . $mostrar['mina_origen'] . "'";
                          $result1 = mysqli_query($conexion, $sql1);
                          if ($Row = mysqli_fetch_array($result1)) {
                            $nombre = $Row['nombre'];
                          }
                          echo $nombre;
                          ?></td>

                      <td><?php echo $mostrar['mineral'] ?></td>

                      <td><?php echo number_format($mostrar['p_bruto'], 0, '.', ',') . " " . "Kg" ?></td>
                      <td><?php echo number_format($mostrar['p_tara'], 0, '.', ',') . " " . "Kg" ?></td>
                      <td><?php echo number_format($mostrar['p_neto'], 0, '.', ',') . " " . "Kg" ?></td>
                      <td><?php echo $mostrar['no_guia'] ?></td>
                      <td><?php echo $mostrar['no_ticket'] ?></td>
                      <td><?php


                          $sql1 = "SELECT * FROM lotes WHERE id='" . $mostrar['no_lote'] . "'";
                          $result1 = mysqli_query($conexion, $sql1);
                          if ($Row = mysqli_fetch_array($result1)) {
                            $nombre = $Row['no_lote'];
                          }
                          echo $nombre;
                          ?></td>
                      <td><?php echo $mostrar['extractor'] ?></td>
                      <td><?php


                          $sql1 = "SELECT * FROM empresa_transportista WHERE id='" . $mostrar['transportista_id'] . "'";
                          if ($mostrar['transportista_id'] == 0) {
                            $nombre = "-";
                          }
                          $result1 = mysqli_query($conexion, $sql1);
                          if ($Row = mysqli_fetch_array($result1)) {
                            $nombre = $Row['nombre'];
                          }
                          echo $nombre;
                          ?></td>
                      <td><?php echo $mostrar['creado'] ?></td>
                      <td>


                        <a href='../patio/<?php echo $mostrar['no_guia'] . "/" . $mostrar['foto'] ?>' target="_blank" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                        <a href='../patio/<?php echo $mostrar['no_guia'] . "/" . $mostrar['ruta'] ?>' target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-file-text-o "></i></a>

                      </td> 

                    </tr>
                  <?php
                  }
                  ?>
                  <tr>
                    <td></td>

                    <td>Total</td>
                    <td><?php echo number_format($bruto, 0, '.', ',') . " " . "Kg" ?></td>
                    <td><?php echo number_format($tara, 0, '.', ',') . " " . "Kg" ?></td>
                    <td><?php echo number_format($neto, 0, '.', ',') . " " . "Kg" ?></td>
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
  <script src="lib/sweetalert2/sweetalert2.all.min.js"></script>
  <!--script de sweetalert2-->
  <script>
    function deleteUser(id) {
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {


          let data = new FormData();
          data.append('id', id)
          console.log(data)
          fetch('php/eliminar_orden2.php', {
              method: 'POST',
              body: data
            }).then((result) => result.text())
            .then(result => {
              if (result == 1) {
                swalWithBootstrapButtons.fire(
                  'Eliminado!',
                  'Su archivo ha sido eliminado.',
                  'success'
                )
                setTimeout(function() {
                  location.reload();
                }, 3000);
              }
            }).catch(error => {
              console.log(error);
            })


        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelado',
            'Tu archivo ha sido salvado',
            'error'
          )
        }
      })

    }
  </script>
  <!--script for this page-->
  <script>
    function addScript(url) {
      var script = document.createElement('script');
      script.type = 'application/javascript';
      script.src = url;
      document.head.appendChild(script);
    }
    addScript('https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js');

    function crearPDF(id) {
      var opt = {
        margin: 1,
        filename: 'patio.pdf',
        image: {
          type: 'jpeg',
          quality: 0.98
        },
        html2canvas: {
          scale: 3
        },
        jsPDF: {
          unit: 'in',
          format: 'a3',
          orientation: 'portrait'
        }
      };

      $.ajax({
        type: 'POST',
        data: "id=" + id,
        url: 'php/patioPDF.php',
        success: function(r) {
          // console.log(r);
          var worker = html2pdf().set(opt).from(r).toPdf().save();

        }
      });
    }
  </script>
  <script>
    $(document).ready(function() {

      $('#filtrar_mina').change(function(e) {
        e.preventDefault();
        var sistema = geturl();
        location.href = sistema + 'buscar_compra.php?mina=' + $(this).val();

      });
      $('#filtrar_trans').change(function(e) {
        e.preventDefault();
        var sistema = geturl();
        location.href = sistema + 'buscar_trans.php?transportista=' + $(this).val();

      });
      $('#filtrar_lote').change(function(e) {
        e.preventDefault();
        var sistema = geturl();
        location.href = sistema + 'buscar_lote.php?lote=' + $(this).val();

      });

    });

    function geturl() {
      var loc = window.location;
      var pathname = loc.pathname.substring(0, loc.pathname.lastIndexOf("/") + 1);
      return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathname.length));
    }
  </script>
</body>

</html>