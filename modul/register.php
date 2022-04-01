<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>REGISTER</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../assets/images/navbar.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
        <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end"></p>
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
            <div class="brand-logo">
                <center><img src="../assets/images/login.png" alt="logo"></center>
              </div>
              <h6 class="font-weight-light"></h6>
            <form method="POST" action="proses_register.php" >
                <div class="form-group">
                    <H4>Create Account</H4>
                  <label for="exampleInputEmail">NIK</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-folder-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="number" maxlength="16" minlength="16" id="nik" name="nik"  class="form-control form-control-rounded shadow-primary" placeholder="Masukan NIK Anda" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail">Nama Lengkap</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="nama_lengkap" required class="form-control form-control-lg border-left-0" placeholder="Masukkan Nama Lengkap Anda">                        
                  </div>
                </div>
                <div class="mt-3">
                  <a href="../index.php" > <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn btn-rounded" >SUBMIT</button>
                  </a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="../index.php" class="text-primary">Login</a>
                </div>
              </form>
              </div>
          </div>
          
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
