
<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ISI DATA</title>
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
        <ul class="navbar-nav mr-lg-2">
        </ul>
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
          <div class="info">
          <a href="#" class="d-block text-white">
            <!-- <?= $_SESSION['nik'] ?> -->
          </a>
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
        
      <div class="main-panel">        
        <div class="content-wrapper">
            <div class="row">
              <div class="card col-12">
                <div class="card-body">
                  <h4 class="card-title">Silahkan Isi Data</h4>              
                   <form action="proses_isi.php" method="POST">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label" >Tanggal</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="Tanggal" max="<?= date('Y-m-d') ?>" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Jam</label>
                      <div class="col-sm-9">
                        <input type="time" class="form-control" name="Jam" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Lokasi yang dikunjungi</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Suhu" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Suhu Tubuh</label>
                      <div class="col-sm-9">
                        <input type="Number" class="form-control" rows="3" name="Lokasi" required>
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-info mr-2">Submit</button>
                    <button type="reset"class="btn btn-light mr-2">Cancel</button>

                    

                  </form>
                </div>
              </div>
            </div>
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

