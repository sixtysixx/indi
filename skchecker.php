<?php
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
              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="https://telegram.dog/IndianBinner">Welcome To IndianBinner </a>
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
                        <h3 class="page-title">SK Checker</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">SK Checker</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <center>
                                        <div class="md-form">
                                            <span>Approved:</span>&nbsp<span id="cLive" class="badge badge-success">0</span>
                                            <span>Declined:</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
                                            <span>Checked:</span>&nbsp<span id="total" class="badge badge-info">0</span>
                                            <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>
                                        </div><br>
                                        <span class="badge badge-danger" <label for="lista">Keys should be here</label></span>
                                        <br>
                                        <textarea type="text" style="text-align: center;" id="lista" class="md-textarea form-control" rows="10" placeholder="FORMAT: sk_live_xxxxxxxxxxxxx"></textarea>
                                        <br>

                                        <br>
                                        <textareaclass="md-textarea form-control1" style="text-align: center;" rows="7" id="proxy" placeholder="PROXY:PORT"></textarea>
                                    </center>
                                    &nbsp;<br>

                                </div>
                                <center>
                                    <button class="btn btn-primary" style="width: 200px; outline: none;" id="testar" onclick="enviar()">START</button>
                                </center>
                                &nbsp;&nbsp;<br>&nbsp;&nbsp;<br>
                            </div>
                        </div>
                    </div>
                    </center>
                    &nbsp;&nbsp;<br>&nbsp;&nbsp;<br>
                    <div class="col-md-12">
                        <div class="card">
                            <div style="position: absolute;
        top: 0;
        right: 0;">
                                <button id="mostra" class="btn btn-primary">SHOW/HIDE</button>
                            </div>
                            <div class="card-body">
                                <h6 style="font-weight: bold;" class="card-title">Approved - <span id="cLive2" class="badge badge-success">0</span></h6>
                                <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="col-md-12">
                        <div class="card">
                            <div style="position: absolute;
        top: 0;
        right: 0;">
                                <button id="mostra2" class="btn btn-primary">SHOW/HIDE</button>
                            </div>
                            <div class="card-body">
                                <h6 style="font-weight: bold;" class="card-title">Declined - <span id="cDie2" class="badge badge-danger">0</span></h6>
                                <div id="bode2"><span id=".reprovadas" class="reprovadas"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script title="ajax do checker">
        function enviar() {
            var linha = $("#lista").val();
            var linhaenviar = linha.split("\n");
            var total = linhaenviar.length;
            var ap = 0;
            var rp = 0;
            var rCredits;
            linhaenviar.forEach(function(value, index) {
                setTimeout(
                    function() {
                        Array.prototype.randomElement = function() {
                            return this[Math.floor(Math.random() * this.length)]
                        }
                        var pr = $("#proxy").val();
                        var MyArray = pr.split("\n");
                        var proxy = MyArray.randomElement();
                        $.ajax({
                            url: 'api/skchecker.php?lista=' + value,
                            async: true,
                            success: function(resultado) {
                                if (resultado.match("Live")) {
                                    removelinha();
                                    ap++;
                                    aprovadas(resultado + "");
                                } else {
                                    removelinha();
                                    rp++;
                                    reprovadas(resultado + "");
                                }

                                $('#carregadas').html(total);

                                var fila = parseInt(ap) + parseInt(rp);
                                $('#cLive').html(ap);
                                $('#cDie').html(rp);
                                $('#total').html(fila);
                                $('#cLive2').html(ap);
                                $('#cDie2').html(rp);
                            }
                        });
                    }, 200 * index);
            });
        }

        function aprovadas(str) {
            $(".aprovadas").append(str);
        }

        function reprovadas(str) {
            $(".reprovadas").append(str);
        }

        function removelinha() {
            var lines = $("#lista").val().split('\n');
            lines.splice(0, 1);
            $("#lista").val(lines.join("\n"));
        }

        function iloveyou() {
            alert('PEKPEK')
        }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {


            $("#bode").hide();
            $("#esconde").show();

            $('#mostra').click(function() {
                $("#bode").slideToggle();
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {


            $("#bode2").hide();
            $("#esconde2").show();

            $('#mostra2').click(function() {
                $("#bode2").slideToggle();
            });

        });
    </script>
    <script>
        $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();


            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data', new_color);
            }

            if ($main_panel.length != 0) {
                $main_panel.attr('data', new_color);
            }

            if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data', new_color);
            }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
            var $btn = $(this);

            if (sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                sidebar_mini_active = false;
                blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
            } else {
                $('body').addClass('sidebar-mini');
                sidebar_mini_active = true;
                blackDashboard.showSidebarMessage('Sidebar mini activated...');
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
                clearInterval(simulateWindowResize);
            }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
            var $btn = $(this);

            if (white_color == true) {

                $('body').addClass('change-background');
                setTimeout(function() {
                    $('body').removeClass('change-background');
                    $('body').removeClass('white-content');
                }, 900);
                white_color = false;
            } else {

                $('body').addClass('change-background');
                setTimeout(function() {
                    $('body').removeClass('change-background');
                    $('body').addClass('white-content');
                }, 900);

                white_color = true;
            }


        });

        $('.light-badge').click(function() {
            $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
            $('body').removeClass('white-content');
        });
        });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "black-dashboard-free"
            });
    </script>
    </div>

    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                  <div class="footer__block block no-margin-bottom">
                    <div class="container-fluid text-center">
                      <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                      
                    </div>
                  </div>
                </footer>
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