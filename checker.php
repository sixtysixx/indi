<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION['login'])) {
    header('LOCATION:login/login.php'); die();
} else {
}
if(isset($_POST['but_logout'])){



    session_destroy();
    header('Location: index.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IndianBinner</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End Plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
    <?php include('header.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a href="index.php">
            <h1>🇮🇳</h1>
          </a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Search products">
              </form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="https://telegram.dog/IndianBinner">Welcome By IndianBinner </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">

            </li>
            <li class="nav-item dropdown border-left">
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <li class="nav-item dropdown border-left">
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="assets/images/favicon.png" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">IndianBinner</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
     <!-- partial -->
     <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">CC Charge Gate</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">CC Checker</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <center>
                    <div class="md-form">
                      <span>Approved CVV:</span>&nbsp<span id="cLive" class="badge badge-Warning">0
                      </span>
                      <span>Approve CCN:</span>&nbsp<span id="cWarn" class="badge badge-primary">0
                      </span>
                      <span>Declined:</span>&nbsp<span id="cDie" class="badge badge-danger">0
                      </span>
                      <span>Checked:</span>&nbsp<span id="total" class="badge badge-info">0
                      </span>
                      <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0
                      </span>
                    </div><br>
                  </center>

                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3><span style="color:#ffa100"><b>P</b></span><span style="color:#1aff00">U</span><span style="color:#1aff00">T</span>&nbsp;<span style="color:#1aff00">Y</span><span style="color:#00ff86">O</span><span style="color:#00ff86">U</span><span style="color:#1aff00">R</span>&nbsp;<span style="color:#1aff00">C</span><span style="color:#ffa100"><b>C</b></span>
                  </h3>

                   <center><br><textarea type="text" style="text-align: center; background-color: rgba(255, 255, 255, .1);color:white ; maxlength="700" 
placeholder="Enter Cards Here";" id="lista" class="md-textarea form-control" rows="4" placeholder="Enter Cards"></textarea></center>
                  &nbsp;<br>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3><span style="color:#ffa100"><b>S</b></span><span style="color:#1aff00">e</span><span style="color:#1aff00">c</span><span style="color:#1aff00">r</span><span style="color:#00ff86">e</span><span style="color:#00ff86">t</span>&nbsp;<span style="color:#1aff00">k</span><span style="color:#1aff00">e</span><span style="color:#ffa100"><b>y</b></span></h3>
            
            <textarea type="text" style="text-align: center; background-color: rgba(255, 255, 255, .1);color:white" ; maxlength="700" id="sec" class="md-textarea form-control" rows="1" placeholder="sk_live_xxxxxxx"></textarea>
                </div>
              </div>
            </div>
            </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <center>
                  <button class="btn btn-outline-info" style="width: 200px; outline: none;" id="testar" onclick="start()" ><b>S T A R T GAME</b></button>
              </div>

              <audio id="audioMusic">
                <source src="click.mp3" type="audio/mpeg">
              </audio>
              <script>
                var myVar = setInterval(function() {
                  myTimer()
                }, 1000);

                function myTimer() {
                  var d = new Date();
                  document.getElemenDById("horas").innerHTML = d.toLocaleTimeString();
                }
              </script>
              <script type="text/javascript">
                function Mudaestado(el) {
                  var display = document.getElemenDById(el).style.display;
                  if (display == "none")
                    document.getElemenDById(el).style.display = 'block';
                  else
                    document.getElemenDById(el).style.display = 'none';
                }
              </script>
              </center>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Card Will Come Here</h4>

                  <div class="col-md-12">
                    <div class="card">
                      <div style="position: absolute;top: 0;right: 0;">
                        <button id="mostra" class="btn btn-success">Show</button><br>
                      </div>
                      <div style="position: absolute; top: 0; left: 0;">
                      </div>
                      <div class="card-body">
                        <h6 style="font-weight: " class="badge badge-success" class="card-title">
                          Approved CVV: <span id="cLive2" class="badge badge-success">0</span></h6>
                        <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="card">
                      <div style="position: absolute;top: 0;right: 0;">
                        <button id="mostra3" class="btn btn-primary">Show</button><br>
                      </div>
                      <div style="position: absolute;top: 0; left: 0;">
                      </div>
                      <div class="card-body">
                        <h6 style="font-weight: " class="badge badge-primary " class="card-title">
                          Approve CCN: <span id="cWarn2" class="badge badge-primary">0</span></h6>
                        <div id="bode3"><span id=".edrovadas" class="edrovadas"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  &nbsp;&nbsp;&nbsp;</br>

                  <div class="col-md-12">
                    <div class="card">
                      <div style="position: absolute;top: 0;right: 0;">
                        <button id="mostra2" class="btn btn-danger">Show</button><br>
                      </div>
                      <div style="position: absolute;top: 0;left: 0;">
                      </div>
                      <div class="card-body">

                        <h6 style="font-weight:" class="btn btn-danger" class="card-title">
                          Declined: <span id="cDie2" class="badge badge-danger">0</span>
                        </h6>
                        <div id="bode2"><span id=".reprovadas" class="reprovadas"></span>
                        </div>
                         <script src="./script.js"></script>
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
                        <script type="text/javascript">
                          $(document).ready(function() {

                            $("#bode").hide();
                            $("#esconde").show();

                            $('#mostra').click(function() {
                              $("#bode").slideToggle();
                            });

                            $('#mostra3').click(function() {
                              $("#bode3").slideToggle();
                            });

                            $('#mostra2').click(function() {
                              $("#bode2").slideToggle();
                            });

                          });
                        </script>

                        <script title="ajax do checker">
                          function start() {
                            var linha = $("#lista").val();
                            var linhastart = linha.split("\n");
                            var total = linhastart.length;
                            var ap = 0;
                            var ed = 0;
                            var rp = 0;
                            linhastart.forEach(function(value, index) {
                              setTimeout(
                                function() {
                                  var sec = $("#sec").val();
                                  $.ajax({
                                    url: 'api/checker.php?lista=' + value + '&sec=' + sec,
                                    type: 'GET',
                                    async: true,
                                    success: function(resultado) {
                                      if (resultado.match("Approved")) {
                                        removelinha();
                                        ap++;
                                        aprovadas(resultado + "");
                                      } else if (resultado.match("Aprovada")) {
                                        removelinha();
                                        ed++;
                                        edrovadas(resultado + "");
                                      } else {
                                        removelinha();
                                        rp++;
                                        reprovadas(resultado + "");
                                      }
                                      $('#carregadas').html(total);
                                      var fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
                                      $('#cLive').html(ap);
                                      $('#cWarn').html(ed);
                                      $('#cDie').html(rp);
                                      $('#total').html(fila);
                                      $('#cLive2').html(ap);
                                      $('#cWarn2').html(ed);
                                      $('#cDie2').html(rp);
                                    }
                                  });
                                }, 1000 * index);
                            });
                          }

                          function aprovadas(str) {
                            $(".aprovadas").append(str + "<br>");
                          }

                          function reprovadas(str) {
                            $(".reprovadas").append(str + "<br>");
                          }

                          function edrovadas(str) {
                            $(".edrovadas").append(str + "<br>");
                          }

                          function removelinha() {
                            var lines = $("#lista").val().split('\n');
                            lines.splice(0, 1);
                            $("#lista").val(lines.join("\n"));
                          }
                        </script>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                
                <!-- partial -->
              </div>
              <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
          </div>
          <!-- container-scroller -->
          <!-- plugins:js -->
          <script src="assets/vendors/js/vendor.bundle.base.js"></script>
          <!-- endinject -->
          <!-- Plugin js for this page -->
          <script src="assets/vendors/chart.js/Chart.min.js"></script>
          <!-- End plugin js for this page -->
          <!-- inject:js -->
          <script src="assets/js/off-canvas.js"></script>
          <script src="assets/js/hoverable-collapse.js"></script>
          <script src="assets/js/misc.js"></script>
          <script src="assets/js/settings.js"></script>
          <script src="assets/js/todolist.js"></script>
          <!-- endinject -->
          <!-- Custom js for this page -->
          <script src="assets/js/chart.js"></script>
          <!-- End custom js for this page -->
</body>

</html>