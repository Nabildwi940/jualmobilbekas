<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Khalis Cars</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
 
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('navbar.php'); ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include_once('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Khalis Cars</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Khalis Cars</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <center>    
    <!-- Main content -->
    <section class="content">
    <img src="dist/img/sampulmobil.png" class="img-fluid" alt="img" width="700">
      <!-- tombol jenis mobil -->
      <br>
      <div class="container">
<p class="d-inline-flex gap-1">
<img src="dist/img/logomobil.png" alt="Icon" width="50">
  <a href="jenismobil.php" class="btn btn-primary" role="button" data-bs-toggle="button">jenis mobil</a>
  </p>
  
  <!-- tombol pembeli -->
<p class="d-inline-flex gap-1">
<img src="dist/img/logomobil.png" alt="Icon" width="50">
  <a href="pembeli.php" class="btn btn-primary" role="button" data-bs-toggle="button">Daftar Pembeli</a>
  </p>
  <br>
  <!-- tombol jenis mobil -->
<p class="d-inline-flex gap-1">
<img src="dist/img/logomobil.png" alt="Icon" width="50">
  <a href="jenismobil.php" class="btn btn-primary" role="button" data-bs-toggle="button">Pengecekan</a>
  </p>
  
  <!-- tombol pembeli -->
<p class="d-inline-flex gap-1">
<img src="dist/img/logomobil.png" alt="Icon" width="50">
  <a href="pembeli.php" class="btn btn-primary" role="button" data-bs-toggle="button">Transaksi</a>
  </p>
  <br>
  <!-- tombol jenis mobil -->
<p class="d-inline-flex gap-1">
<img src="dist/img/logomobil.png" alt="Icon" width="50">
  <a href="jenismobil.php" class="btn btn-primary" role="button" data-bs-toggle="button">penyerahan</a>
  </p>
  
 
  
  
  <br>
  <div class="card" style="width: 30rem;">
  <div class="card-body">
    <!-- tombol pembeli -->
<p class="d-inline-flex gap-1">
<img src="dist/img/logomobil.png" alt="Icon" width="50">
  <a href="pembeli.php" class="btn btn-primary" role="button" data-bs-toggle="button">pembeli</a>
  </p>
  <!-- tombol jenis mobil -->
<p class="d-inline-flex gap-1">
<img src="dist/img/logomobil.png" alt="Icon" width="50">
  <a href="jenismobil.php" class="btn btn-primary" role="button" data-bs-toggle="button">jenis mobil</a>
  </p>
  </div>
  </div>
</div>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse" >
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
       
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include_once('footer.php')?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</center>
</body>
</html>
