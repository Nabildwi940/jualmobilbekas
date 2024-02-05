<?php
include_once("koneksi.php");
include_once("cek_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- jsGrid -->
    <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                            //sql query for Daftar Mobil
                            $sql_mobil = "SELECT * FROM jenismobil";
                            //execute query
                            $result_mobil = mysqli_query($con, $sql_mobil);
                            //count data
                            $mobil = mysqli_num_rows($result_mobil);
                            ?>
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php echo $mobil ?></h3>
                                    <p>Daftar Mobil</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="daftarmobil.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <?php 
                            //koneksi
                            include_once("koneksi.php");
                            //sql query for Daftar Pembeli
                            $sql_pembeli = "SELECT * FROM pembeli";
                            //execute query
                            $result_pembeli = mysqli_query($con, $sql_pembeli);
                            //count data
                            $pembeli = mysqli_num_rows($result_pembeli);
                            ?>
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php echo $pembeli ?></h3>
                                    <p>Daftar Pembeli</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="daftarpembeli.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <!-- Additional section for Transaksi -->
                        <div class="col-lg-3 col-6">
                            <?php 
                            //koneksi
                            include_once("koneksi.php");
                            //sql query for Daftar Transaksi based on status_transaksi
                            $sql_transaksi = "SELECT * FROM pembeli WHERE status_transaksi = 'lunas'";
                            //execute query
                            $result_transaksi = mysqli_query($con, $sql_transaksi);
                            //count data
                            $transaksi = mysqli_num_rows($result_transaksi);
                            ?>
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?php echo $transaksi ?></h3>
                                    <p>Daftar Transaksi</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios-pulse-strong"></i>
                                </div>
                                <a href="daftartransaksi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <!-- Additional section for Penyerahan -->
                        <div class="col-lg-3 col-6">
                            <?php 
                            //koneksi
                            include_once("koneksi.php");
                            //sql query for Daftar Penyerahan based on status_pengecekan
                            $sql_penyerahan = "SELECT * FROM pembeli WHERE status_penyerahan = 'sudah'";
                            //execute query
                            $result_penyerahan = mysqli_query($con, $sql_penyerahan);
                            //count data
                            $penyerahan = mysqli_num_rows($result_penyerahan);
                            ?>
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?php echo $penyerahan ?></h3>
                                    <p>Daftar Penyerahan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios-cloud-upload"></i>
                                </div>
                                <a href="daftarpenyerahan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>

        <?php
        include_once('footer.php');
        ?>
        
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery and other scripts -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>

</html>
