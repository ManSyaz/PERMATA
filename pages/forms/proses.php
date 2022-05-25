<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PERMATA | Permohonan Baru</title>


  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- InputMask -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Hubungi</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../dashboard.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PERMATA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">FAKHRUL RADZI BIN AHMAD</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../../dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Halaman Utama
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Permohonan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="general.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Diproses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="approved.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Diluluskan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rejected.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Ditolak</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../table_user.php" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Senarai Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin_permohonan.php" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Permohonan Pelajar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../info.php" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Info HEP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../plogout.php" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Log Keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Permohonan Diproses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Keterangan Aktiviti</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Senarai Permohonan Diproses</h3>
              </div>
              <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo amet sit recusandae dignissimos ratione vero magnam eaque tempore enim quasi.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page specific script -->

<script>
  $(function () {
    bsCustomFileInput.init();

    // Summernote
    $(document).ready(function() {
      $('.summernote').summernote();
    });

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
  })
  
  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
  theme: 'bootstrap4'
  
});

</script>
</body>
</html>
