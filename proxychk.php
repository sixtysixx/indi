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
  <title>INDIAN BINNER</title>
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
  <link rel="shortcut icon" href="assets/images/favicon.png" />
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
                  Array.prototype.randomElement = function () {
                   return this[Math.floor(Math.random() * this.length)]
                   }
                   var pr = $("#proxy").val();
                   var MyArray = pr.split("\n");
                   var proxy = MyArray.randomElement();
                           $.ajax({
                        url: 'proxy.php?lista=' + value,
                        async: true,
                        success: function(resultado) {
                            if (resultado.match("success")) {
                                removelinha();
                                ap++;
                                aprovadas(resultado + "");
                            }else {
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
                }, 100 * index);
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

  function iloveyou(){
  alert('PEKPEK')}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){


    $("#bode").hide();
  $("#esconde").show();

  $('#mostra').click(function(){
  $("#bode").slideToggle();
  });

});

</script>

<script type="text/javascript">

$(document).ready(function(){


    $("#bode2").hide();
  $("#esconde2").show();

  $('#mostra2').click(function(){
  $("#bode2").slideToggle();
  });

});

</script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
    <?php include('header.php') ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">Proxy Checker</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Proxy  Checker</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div id="app">
        <nav class="navigations">
<span style="color:#fff; font-size: 18px; font-weight: bold;">Indian Binner</span>
<hr>
<center> <div class="row col-md-12">
<div class="card col-sm-12">
  <span class="badge badge-info"><h4>PROXY CHECKER </h4></span>
  <div class="card-body">
<div class="md-form">
  <div class="col-md-12">
<center>  <div class="md-form">
    <span>Working:</span>&nbsp<span id="cLive" class="badge badge-success">0</span>
    <span>Dead:</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
    <span>Checked:</span>&nbsp<span id="total" class="badge badge-info">0</span>
    <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>
</div><br>
<span class="badge badge-danger"<label for="lista">Proxy Type: HTTP/HTTPS</label></span>
<br>
<textarea type="text" style="text-align: center;" id="lista" class="md-textarea form-control" rows="50" placeholder="FORMAT: PROXY:PORT" ></textarea>
<br>

<br>
<textareaclass="md-textarea form-control1" style="text-align: center;" rows="7" id="proxy" placeholder="PROXY:PORT"></textarea>
 </center>
&nbsp;

</div>
<center>
 <button class="btn btn-primary" style="width: 140px; height:40px; margin:6px; outline: none;" id="testar" onclick="enviar()" > START </button>
   
</center>
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
  <button id="mostra" class="btn btn-warning">SHOW/HIDE</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold; margin:6px;" class="card-title">Working - <span  id="cLive2" class="badge badge-success">0</span></h6>
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
  <button id="mostra2" class="btn btn-warning">SHOW/HIDE</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">Dead - <span id="cDie2" class="badge badge-danger">0</span></h6>
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