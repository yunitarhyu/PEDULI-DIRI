<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CATATAN PERJALANAN</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css"/>
  <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/fontawesome-stars.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="shortcut icon" href="../assets/images/navbar.png" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  
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
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lihat Riwayat Catatan</h4><br>
                      <div class="table-responsive">
                        <table id="tabel-data" class="table display order-column" style="width: 100%;">
  
                            <thead>
                                <tr>
                                <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Suhu</th>
                                    <th>Lokasi</th>
                                </tr>
                            </thead>
                            <tbody id="tampil">
                                              <?php
                                                  $no = 1;
                                                  $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                                                  $user = $_SESSION['nik'] . "|" . $_SESSION['nama_lengkap'];
                                                  foreach ($data as $value) {
                                                    $pecah = explode("|", $value);
                                                    if(isset($pecah[0])) {
                                                ?>
                                                <?php if($pecah[0] == $_SESSION['nik']) {
                                              ?>
                                                <tr>
                                                      <td><?= $no++ ?></td>
                                                      <td><?= $pecah['2'] ?></td>
                                                      <td><?= $pecah['3'] ?></td>
                                                      <td><?= $pecah['4'] ?> &#8451;</td>
                                                      <td><?= $pecah['5'] ?></td>
                                                      
                                                      
                                                    </tr>
                                                <?php }
                                                }
                                                }
                                              ?>
                            </tbody>
                            
                        </table>
                      </div>
                  </div>
                </div>

              </div>
          </div>
        </div>
        <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
        </script>
        <script src="../assets/js/template.js"></script>

    
</table>
</body>
</html>