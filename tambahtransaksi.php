<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Transaksi</title>

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
                            <h1>Tambah Transaksi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="list_transaksi.php">List Transaksi</a></li>
                                <li class="breadcrumb-item active">Tambah Transaksi</li>
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
                        <form action="proses_tambah_transaksi.php" method="post">
                            <!-- Add your form fields here -->
                            <div class="form-group">
                                <label for="id_cek">ID Cek</label>
                                <select name="id_cek" class="form-control">
                                    <option>----</option>
                                    <?php
                                    include "koneksi.php";
                                    $qryCek = mysqli_query($con, "SELECT * FROM pengecekan");
                                    while ($dataCek = mysqli_fetch_array($qryCek)) {
                                        echo "<option value='$dataCek[id_cek]'> $dataCek[tgl_cek] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_pem">No Pembeli</label>
                                <select name="no_pem" class="form-control">
                                    <option>----</option>
                                    <?php
                                    include "koneksi.php";
                                    $qryPembeli = mysqli_query($con, "SELECT * FROM pembeli");
                                    while ($dataPembeli = mysqli_fetch_array($qryPembeli)) {
                                        echo "<option value='$dataPembeli[no_pem]'> $dataPembeli[no_pem] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_mobil">ID Mobil</label>
                                <select name="id_mobil" class="form-control">
                                    <option>----</option>
                                    <?php
                                    include "koneksi.php";
                                    $qryMobil = mysqli_query($con, "SELECT * FROM jenismobil");
                                    while ($dataMobil = mysqli_fetch_array($qryMobil)) {
                                        echo "<option value='$dataMobil[id_mobil]'> $dataMobil[tipe_mobil] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tgl_pengecekan">Tanggal Pengecekan</label>
                                <select name="tgl_pengecekan" class="form-control">
                                    <option>----</option>
                                    <?php
                                    include "koneksi.php";
                                    $qryPengecekan = mysqli_query($con, "SELECT DISTINCT tgl_cek FROM pengecekan");
                                    while ($dataPengecekan = mysqli_fetch_array($qryPengecekan)) {
                                        echo "<option value='$dataPengecekan[tgl_cek]'> $dataPengecekan[tgl_cek] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="status_transaksi">Status Transaksi</label>
                            <select name="status_transaksi" class="form-control">
                                <option>----</option>
                                <?php
                                include "koneksi.php";
                                $qryStatusTransaksi = mysqli_query($con, "SHOW COLUMNS FROM transaksi WHERE Field = 'status_transaksi'");
                                $enumList = mysqli_fetch_assoc($qryStatusTransaksi)['Type'];
                                $enumValues = explode("','", substr($enumList, 6, -2));

                                foreach ($enumValues as $value) {
                                    $selected = ($data['status_transaksi'] == $value) ? "selected" : "";
                                    echo "<option value='$value' $selected> $value </option>";
                                }
                                ?>
                            </select>
                        </div>
                            <!-- Add more fields as needed -->

                            <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
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
