<?php
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'templates/head.php'; ?>
</head>

<body>
  <section id="container">
    <?php include 'templates/nav.php'; ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Bitacora de Evidencias</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Folio</th>
                    <th>Ticket</th>
                    <th class="hidden-phone">Cantidad</th>
                    <th class="hidden-phone">Comentarios</th>
                    <th class="hidden-phone">Hora de Registro y Día</th>
                    <th class="hidden-phone">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM evidencias";
                  $resultado = $conexion->query($sql);
                  while ($mostrar = mysqli_fetch_array($resultado)) {
                  ?>
                    <tr>
                      <td><?php echo $mostrar['folio'] ?></td>
                      <td><?php echo $mostrar['ticket'] ?></td>
                      <td><?php echo $mostrar['cantidad'] ?></td>
                      <td><?php echo $mostrar['comentarios'] ?></td>
                      <td><?php echo $mostrar['creado'] ?></td>

                      <td>
                        <a href='../evidencias/<?php echo $mostrar['folio'] . "/" . $mostrar['foto'] ?>' class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></a>
                        <a href='./eliminar_evidencia.php?id=<?php echo $mostrar['id']  ?>' class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
    <?php include 'templates/footer.php'; ?>
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
  <script type="text/javascript">
    $(document).ready(function() {
      var oTable = $("#hidden-table-info").dataTable({
        aoColumnDefs: [{
          bSortable: false,
          aTargets: [0],
        }, ],
        aaSorting: [
          [1, "asc"]
        ],
      });
    });
  </script>
</body>

</html>