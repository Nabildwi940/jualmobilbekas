<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Pembeli</title>

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
              <h1>Tambah Pembeli</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="list_mobil.php">List Pembeli</a></li>
                <li class="breadcrumb-item active">Tambah Pembeli</li>
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
            <form action="proses_tambah_pembeli.php" method="post">
              <!-- Add your form fields here -->
              <div class="form-group">
                <label for="no_pem">No Pem</label>
                <input type="text" class="form-control" id="no_pem" name="no_pem" required>
              </div>
              <div class="form-group">
                <label for="nama_pem">Nama Pembeli</label>
                <input type="text" class="form-control" id="nama_pem" name="nama_pem" required>
              </div>
              <div class="form-group">
                <label for="alamat_pem">Alamat Pembeli</label>
                <input type="text" class="form-control" id="alamat_pem" name="alamat_pem" required>
              </div>
              <div class="form-group">
                <label for="hp_pem">Hp Pembeli</label>
                <input type="text" class="form-control" id="hp_pem" name="hp_pem" required>
              </div>
              <div class="form-group">
                <label for="id_mobil">ID Mobil</label>
                <td><select name="id_mobil">
                  <option>----</option>
                  <?php 
                  include "koneksi.php";
                  $qry = mysqli_query($con, "SELECT * FROM jenismobil");
                  while($data = mysqli_fetch_array($qry)){
                    echo "<option value=$data[id_mobil]> $data[tipe_mobil] </option>";
                  }
                  ?>
                  </select>
                </td>
                <div class="form-group">
                <label for="id_cek">ID Cek</label>
                <td><select name="id_cek">
                  <option>----</option>
                  <?php 
                  include "koneksi.php";
                  $qry = mysqli_query($con, "SELECT * FROM pengecekan");
                  while($data = mysqli_fetch_array($qry)){
                    echo "<option value=$data[id_cek]> $data[tgl_cek] </option>";
                  }
                  ?>
                  </select>
                </td>
                <br>
              <!-- Add more fields as needed -->

              <button type="submit" class="btn btn-primary">Tambah Pembeli</button>
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
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>
</html>
