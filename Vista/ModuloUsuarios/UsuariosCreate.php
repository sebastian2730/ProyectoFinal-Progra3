<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Colegio Santo Miércoles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="body-bg">

<?php
include "../Menus/Administradores.php";
 ?>

        <!-- header area end -->
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
                  <!-- basic form start -->
                  <div class="col-12 mt-5">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="header-title">Crear Usuarios</h4>
                              <form action="../Vista/ModuloUsuarios/UsuariosCreate.php" method="POST">
                                <div class="form-group">
                                     <input class="form-control"  type="text" name="nombre" placeholder="Nombre" id="example-text-input"required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="apellidos" placeholder="Apellidos" id="example-text-input" required>
                                </div>
                                <div class="form-group">
                                  <input class="form-control" type="tel" name="telefono" placeholder="Teléfono" id="example-tel-input" required>
                                </div>
                                <div class="form-group">
                                     <input class="form-control" type="text" name="direccion" placeholder="Dirección" id="example-text-input" required>
                                </div>
                                <div class="form-group">
                                     <label class="col-form-label">Perfil en el sistema</label>
                                             <select class="form-control">
                                               <option>Administrador</option>
                                               <option>Profesor</option>
                                               <option>Encargado</option>
                                             </select>
                                  </div>
                                  <div class="form-group">
                                      <input class="form-control" type="email"  name="correo" placeholder="Correo" id="exampleInputEmail1" required>
                                  </div>
                                  <div class="form-group">
                                      <input class="form-control" type="password"name="contraseña" placeholder="Contraseña" id="exampleInputPassword1" required>
                                  </div>

                                  <button class="btn btn-primary mt-4 pr-4 pl-4" type="submit" name="btn_GuardarUsuario" value="Guardar">Guardar</button>
                              </form>
                          </div>
                      </div>
                  </div>
                   <!-- basic form end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2020. Todos los derechos reservados.<br>Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>

    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="../assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="../assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="../assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="../assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>
