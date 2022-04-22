<?php
$id = $_GET['id'];
include 'php/conexion.php';
$sql = "SELECT * FROM trabajador WHERE id='" . $id . "'";
$result = mysqli_query($conexion, $sql);
if ($Row = mysqli_fetch_array($result)) {
  $nombre = $Row['nombre'];

  $curp = $Row['curp'];
  $rfc = $Row['rfc'];
  $nss = $Row['nss'];
  $cargo = $Row['cargo'];
  $user = $Row['user'];
  $pwd = $Row['pwd'];
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
    <?php include 'templates/nav.php'; ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Editar Trabajador</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="./php/editar_trabajador.php">
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
                    <label for="lastname" class="control-label col-lg-2">CURP</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="curp" type="text" value="<?php echo $curp; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">RFC</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="rfc" type="text" value="<?php echo $rfc; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">NSS</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="nss" type="text" value="<?php echo $nss; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Cargo</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="cargo" type="text" value="<?php echo $cargo; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Usuario</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="user" type="text" value="<?php echo $user; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Contraseña</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="contra" type="password" value="<?php echo $pwd; ?>" />
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
                      <a href="listar_trabajador.php" class="btn btn-theme04" type="button">Cancelar</a>
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