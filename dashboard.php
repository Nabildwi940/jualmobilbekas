<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Mobil</title>

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
              <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="list_mobil.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <?php 
            //koneksi
            include_once("koneksi.php");
            //sql query
            $sql_mobil = "SELECT * FROM jenismobil";
            //jalankan query
            $result_mobil = mysqli_query($con, $sql_mobil);
            //hitung data
            $mobil = mysqli_num_rows($result_mobil);
            ?>
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php echo $mobil ?>
                </h3>

                <p>Daftar Mobil</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="daftarmobil.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <?php 
            //koneksi
            include_once("koneksi.php");
            //sql query
            $sql_pembeli = "SELECT * FROM pembeli";
            //jalankan query
            $result_pembeli = mysqli_query($con, $sql_pembeli);
            //hitung data
            $pembeli = mysqli_num_rows($result_pembeli);
            ?>
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                <?php echo $pembeli ?>
                </h3>

                <p>Daftar Pembeli</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="daftarpembeli.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <?php 
            //koneksi
            include_once("koneksi.php");
            //sql query
            $sql_pengecekan = "SELECT * FROM pengecekan";
            //jalankan query
            $result_pengecekan = mysqli_query($con, $sql_pengecekan);
            //hitung data
            $pengecekan = mysqli_num_rows($result_pengecekan);
            ?>
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                <?php echo $pengecekan ?>
                </h3>

                <p>Daftar Pengecekan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="daftarpengecekan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <?php 
            //koneksi
            include_once("koneksi.php");
            //sql query
            $sql_transaksi = "SELECT * FROM transaksi";
            //jalankan query
            $result_transaksi = mysqli_query($con, $sql_transaksi);
            //hitung data
            $transaksi = mysqli_num_rows($result_transaksi);
            ?>
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                <?php echo $transaksi ?>
                </h3>

                <p>Daftar Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="daftartransaksi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <?php 
            //koneksi
            include_once("koneksi.php");
            //sql query
            $sql_pengecekan = "SELECT * FROM pengecekan";
            //jalankan query
            $result_pengecekan = mysqli_query($con, $sql_pengecekan);
            //hitung data
            $pengecekan = mysqli_num_rows($result_pengecekan);
            ?>
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                <?php echo $pengecekan ?>
                </h3>

                <p>Daftar Pengecekan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="daftarpengecekan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

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
