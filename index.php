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
  <title>Indian Binner</title>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
   <?php include('header.php') ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                  <div class="row align-items-center">
                    <div class="col-4 col-sm-3 col-xl-2">
                      <img src="Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                    </div>
                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                      <h4 class="mb-1 mb-sm-0">IndianBinner Checker </h4>

                    </div>
                    <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                      <span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Working Bins For Sites</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Site</th>
                          <th>Bin</th>
                        </tr>
                      </thead>
                      <DBody>
                        <tr>
                          <td>Microsoft 365</td>
                          <td>5154620020xxxxxx 🇺🇸</td>
                        </tr>
                        <tr>
                          <td>Hbo Max</td>
                          <td>51546200550xxxxx 🇺🇸</td>
                        </tr>
                        <tr>
                          <td>PicsArt</td>
                          <td>52297444xxxxxxxx 🇺🇸</td>
                        </tr>
                        <tr>
                          <td>DropBox</td>
                          <td>53981723426xxxxx 🇺🇸</td>
                        </tr>
                        <tr>
                          <td>NameCheap Vpn</td>
                          <td>534417862xxxxxxx 🇺🇸</td>
                        </tr>
                        <tr>
                          <td>MiMo</td>
                          <td>522974xxxxxxxxxx 🇺🇸</td>
                        </tr>
                        <tr>
                          <td>Prime Video</td>
                          <td>4725961648xxxxxx 🇳🇱</td>
                        </tr>
                      </DBody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block">
                  <div class="title"><strong>Our Channel+Group Links</strong></div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Channel</th>
                          <th>Link</th>
                        </tr>
                      </thead>
                      <DBody>
                        <tr>
                          <h4><th scope="row">1</th>
                          <td>INDIANBINNER</td>
                          <td><a type="button"class="btn btn-outline-info"<a href="https://t.me/IndianBinner"><i class="bi bi-credit-card"></i> 𝗜𝗡𝗗𝗜𝗔𝗡 𝗕𝗜𝗡𝗡𝗘𝗥</a></td>
                        <tr>
                          <th scope="row">2</th>
                          <td>Live Credit Cards  </td>
                          <td><a type="button"class="btn btn-outline-primary"<a href="https://t.me/Live_Credit_Cards"><i class="bi bi-badge-cc"></i> 𝗟𝗜𝗩𝗘 𝗖𝗥𝗘𝗗𝗜𝗧 𝗖𝗔𝗥𝗗𝗦</a></td>
                        <tr>
                          <th scope="row">3</th>
                          <td>Leaked Scripts  </td>
                          <td><a type="button"class="btn btn-outline-success"<a href="https://t.me/Leaked_Scripts"><i class="bi bi-file-earmark-code-fill"></i> 𝗟𝗘𝗔𝗞𝗘𝗗 𝗦𝗖𝗥𝗜𝗣𝗧𝗦</a></td>
                        <tr>
                          <th scope="row">4</th>
                          <td>Indian Binner Chats</td>
                          <td><a type="button"class="btn btn-outline-secondary"<a href="https://t.me/IndianBinnersChats"><i class="bi bi-chat-left-text-fill"></i> 𝗜𝗡𝗗𝗜𝗔𝗡 𝗕𝗜𝗡𝗡𝗘𝗥𝗦 𝗖𝗛𝗔𝗧</a></td>
                        <tr>
                          <th scope="row">5</th>
                          <td>Cc Checker Bot</td>
                          <td><a type="button"class="btn btn-outline-warning"<a href="https://t.me/AuthCheckerBot"><i class="bi bi-nut-fill"></i> 𝗖𝗖 𝗖𝗛𝗘𝗖𝗞𝗘𝗥 𝗕𝗢𝗧™</a></td>
                        <tr>
                        </tbody>
                        </table>
                        </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Visitors by Countries</h4>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-us"></i>
                                </td>
                                <td>🇮🇳    INDIA</td>
                                <td class="text-right"> 2000 </td>
                                <td class="text-right font-weight-medium"> 40% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-de"></i>
                                </td>
                                <td>🇪🇸    Spain</td>
                                <td class="text-right"> 1000 </td>
                                <td class="text-right font-weight-medium"> 20% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-au"></i>
                                </td>
                                <td>🇺🇸    United States</td>
                                <td class="text-right"> 800 </td>
                                <td class="text-right font-weight-medium"> 16% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-gb"></i>
                                </td>
                                <td>🇬🇧    United Kingdom</td>
                                <td class="text-right"> 700 </td>
                                <td class="text-right font-weight-medium"> 14% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-ro"></i>
                                </td>
                                <td>🇧🇩    Bangladesh</td>
                                <td class="text-right"> 300 </td>
                                <td class="text-right font-weight-medium"> 6% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-br"></i>
                                </td>
                                <td>🇪🇬    Egypt</td>
                                <td class="text-right"> 200 </td>
                                <td class="text-right font-weight-medium"> 4% </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div id="audience-map" class="vector-map"></div>
                      </div>
                    </div></td>
                    </tr><div>
                      </DBody>
                    </table>
                    <p style="display: block; text-align: center; margin-top: 10px;" class="no-margin-bottom">Visit Our <a href="https://indianbinner.tech/scrapper/dark.php">CC Scraper</a> for Live CCs</p>
                  </div>
                </div>
                </div>
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
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
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>