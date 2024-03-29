<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Pengecekan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include_once('navbar.php'); ?>

    <!-- Main Sidebar Container -->
    <?php include_once('sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah Pengecekan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="list_mobil.php">Pengecekan</a></li>
                <li class="breadcrumb-item active">Tambah Pengecekan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card">
          <div class="card-body">
            <!-- Add your form here -->
            <form action="proses_tambah_pengecekan.php" method="post">
              <!-- Modified form fields -->
              <div class="form-group">
                <label for="id_cek">ID Pengecekan</label>
                <input type="text" class="form-control" id="id_cek" name="id_cek" required>
              </div>
              <div class="form-group">
                <label for="no_pem">Nomor Pembeli</label>
                <input type="text" class="form-control" id="no_pem" name="no_pem" required>
              </div>
              <div class="form-group">
                <label for="id_mobil">Kode Mobil</label>
                <input type="text" class="form-control" id="id_mobil" name="id_mobil" required>
              </div>
              <div class="form-group">
                <label for="tgl_cek">Tanggal Cek</label>
                <input type="date" class="form-control" id="tgl_cek" name="tgl_cek" required>
              </div>
              <!-- Add more fields as needed -->

              <button type="submit" class="btn btn-primary">Tambah Pengecekan</button>
            </form>
          </div>
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark
