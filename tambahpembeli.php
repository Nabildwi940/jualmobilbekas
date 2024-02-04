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
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-body">
                        <!-- Main Form -->
                        <form action="proses_tambah_pembeli.php" method="post">
                            <h2>Data Pembeli</h2>
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
                                <select name="id_mobil" class="form-control">
                                    <option>----</option>
                                    <?php
                                    include "koneksi.php";
                                    $qry = mysqli_query($con, "SELECT * FROM jenismobil");
                                    while ($data = mysqli_fetch_array($qry)) {
                                        echo "<option value='$data[id_mobil]'> $data[tipe_mobil] </option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Data Pengecekan -->
                            <div class="form-group">
                                <label for="tgl_cek">Tanggal Pengecekan</label>
                                <input type="date" class="form-control" id="tgl_cek" name="tgl_cek" required>
                            </div>

                            <!-- Data Transaksi -->
                            <div class="form-group">
                                <label for="status_transaksi">Status Transaksi</label>
                                <select name="status_transaksi" class="form-control">
                                    <option>----</option>
                                    <?php
                                    $qryStatusTransaksi = mysqli_query($con, "SHOW COLUMNS FROM pembeli LIKE 'status_transaksi'");
                                    $enumStatusTransaksi = mysqli_fetch_array($qryStatusTransaksi);
                                    $enumOptionsTransaksi = explode(",", str_replace(["enum('", "')", "''"], ["", "", "'"], $enumStatusTransaksi['Type']));
                                    foreach ($enumOptionsTransaksi as $optionTransaksi) {
                                        echo "<option value='$optionTransaksi'> $optionTransaksi </option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Data Penyerahan -->
                            <div class="form-group">
                                <label for="status_penyerahan">Status Penyerahan</label>
                                <select name="status_penyerahan" class="form-control">
                                    <option>----</option>
                                    <?php
                                    $qryStatusPenyerahan = mysqli_query($con, "SHOW COLUMNS FROM pembeli LIKE 'status_penyerahan'");
                                    $enumStatusPenyerahan = mysqli_fetch_array($qryStatusPenyerahan);
                                    $enumOptionsPenyerahan = explode(",", str_replace(["enum('", "')", "''"], ["", "", "'"], $enumStatusPenyerahan['Type']));
                                    foreach ($enumOptionsPenyerahan as $optionPenyerahan) {
                                        echo "<option value='$optionPenyerahan'> $optionPenyerahan </option>";
                                    }
                                    ?>
                                </select>
                            </div>

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
