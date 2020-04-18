<!-- CURSO:Programacion3
     PROFESOR:Noé Otoniel Nájera Morales
     AUTORES: Sebastian Morales Barboza
              Lureth Zuñiga Fonseca
              Mónica Vega Garbanzo
-->
<!doctype html>
<?php
include "../../Controlador/ControladorPeriodo.php";
 ?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Colegio Santo Miércoles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../../assets/css/typography.css">
    <link rel="stylesheet" href="../../assets/css/default-css.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
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

                  <!-- Progress Table start -->
                  <div class="col-12 mt-5">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="header-title">Eliminar Periodos</h4>
                              <div class="single-table">
                                  <div class="table-responsive">
                                      <table class="table table-hover progress-table text-center">
                                          <thead class="text-uppercase">
                                              <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Periodo</th>
                                                <th scope="col">Opción Eliminar</th>

                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                <?php
                                                $ControladorPerido = new ControladorPeriodo();

                                                $datosPeriodo = new ArrayObject();
                                                $todosDatos = $ControladorPerido->ConsultarPeriodo();

                                                for ($i=0; $i <= count($todosDatos) - 1; $i++) {
                                                  // code...
                                                  $unaFila = $todosDatos->offsetGet($i);
                                                echo "<tr><form action='PeriodoDelete.php' method= 'POST'>";
                                                echo "<input type='hidden' name='idPeriodo' value='".$unaFila->getIdPeriodo()."'>";
                                                echo "<input type='hidden' name='periodo' value='".$unaFila->getPeriodo()."'>";
                                                echo "<th scope='col'>" . $unaFila->getIdPeriodo() . "</th>";
                                                echo "<th scope='col'>" . $unaFila->getPeriodo() . "</th>";
                                                echo "<th scope='col'><h6> <input type='submit'  value='Eliminar' class=' text-danger'></h6></th>";

                                                echo "</form></tr>";

                                              }
                                                 ?>

                                              </tr>
                                          </tbody>
                                      </table>

                                      <?php

                                      if ($_POST){
                                        $idPeriodo = $_POST['idPeriodo'];
                                      $periodo = $_POST['periodo'];

                                        if($ControladorPerido->Eliminar($idPeriodo)){
                                          echo "<script>"
                                          . "alert('El periodo: ". $periodo . "  se ha "
                                          . " eliminado correctamente'); "
                                          . "window.location = '/ProyectoFinal-Progra3/Vista/ModuloPeriodo/PeriodoDelete.php';"
                                          . "</script>";
                                        }
                                      }

                                      ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Progress Table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2020. Todos los derechos reservados.<br>  Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>

    <!-- jquery latest version -->
    <script src="../../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/metisMenu.min.js"></script>
    <script src="../../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../../assets/js/jquery.slicknav.min.js"></script>

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
    <script src="../../assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="../../assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="../../assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="../../assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>
