<?php
  session_start();
  if(empty($_SESSION['nik'])) { ?>
    
    <script type="text/javascript">
  alert('Maaf Anda Belum Login.');
  window.location.assign('index.php');
  </script>

<?php }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DASHBOARD</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css"/>
  <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../assets/images/navbar.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: steelblue;">
        <a class="navbar-brand " href="#"><img src="../assets/images/logobaru.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="#"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-flex mr-4 ">
              <a class="navbar__link navbar__link--account navbar__link--login navbar__link--tappable navbar__link--hoverable navbar__link-text navbar__link-text--medium navbar__link-text--normal-case" href="../index.php">Logout</a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" style="background-color: steelblue;" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="../assets/images/profil.png">
          </div>
          <div class="info" class="d-block text-white">
            <?= $_SESSION['nama_lengkap'] ?>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catatan_perjalanan.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Catatan perjalanan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="isi_data.php">
              <i class="icon-bar-graph-2 menu-icon"></i>
              <span class="menu-title">Isi data</span>
            </a>
          </li>
        </ul>
      </nav>   
      <div class="right_col" role="main" >
            <div class="page-title">
              <div class="title_left">
                <div class=" mb-4 text-gray-800">
                    <?php
                          if(!empty(@$_GET['url'])) {

                            switch (@$_GET['url']) {
                              case 'isi_catatan';
                              include 'isi_catatan.php';
                                break;


                              case 'catatan_perjalanan';
                              include 'catatan_perjalanan.php';
                                break;
                              
                              default:
                                echo "Halaman Tidak Ditemukan ";
                                break;
                            }

                          }else{
                            
                            echo "<br> <br>";
                            echo "<center><h4>Selamat Datang Di Aplikasi 
                            PEDULI DIRI </h4></center>";
                            // echo "<br><center> Anda Login Sebagai :</center><br>";
                            // echo "<h5><center>".$_SESSION['nama_lengkap']. "</center></h5>";
                            
                          }

                    ?>

                    <br>
                    <br>
                    <section class="section-app-download">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-12 img-app-pedulinlindugi">
                                    <img src="../assets/images/dashboard1.png" class="img-fluid">
                                </div>
                                <div class="col-md-6 col-12 deskripsi">
                                   <p>Aplikasi Peduli Diri adalah aplikasi yang dikembangkan 
                                      <br> untuk membantu pengguna terkait dalam melakukan pencatatan perjalanan.</p>
                                </div>
                            </div>
                        </div>
                    </section> 

        
                  </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="../assets/https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
          </div>
        </footer> -->
        <!-- partial -->
      </div>
     
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  
  <!-- base:js -->
  <script src="../assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/js/off-canvas.js"></script>
  <script src="../assets/js/hoverable-collapse.js"></script>
  <script src="../assets/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

