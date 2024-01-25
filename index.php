<?php
include_once("koneksi.php");
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

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Mobil Tersedia</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>kode mobil</th>
                                    <th>Tipe Mobil</th>
                                    <th>Tahun Mobil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qry = "SELECT * FROM jenis_mobil";
                                $tampil = mysqli_query($con, $qry);
                                $nomor = 1;
                                foreach ($tampil as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $nomor++ ?></td>
                                        <td><?php echo $data['id_mobil'] ?></td>
                                        <td><?php echo $data['tipe_mobil'] ?></td>
                                        <td><?php echo $data['tahun_mobil'] ?></td>
                                        <td>
                                            <a href="edit_mobil.php?id_mobil=<?php echo $data['id_mobil'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-alt"></i></a>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_mobil'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="hapus<?php echo $data['id_mobil'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Data Mobil Dengan Kode <b><?php echo $data['id_mobil'] ?></b> Ingin Dihapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                            <a href="proses_hapus_mobil.php?id_mobil=<?php echo $data['id_mobil'] ?>" class="btn btn-danger">Ya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>kode mobil</th>
                                    <th>Tipe Mobil</th>
                                    <th>Tahun Mobil</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- Main content List Pembeli -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Pembeli</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode </th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Hp Pembeli</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qry = "SELECT * FROM pembeli";
                                $tampil = mysqli_query($con, $qry);
                                $nomor = 1;
                                foreach ($tampil as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $nomor++ ?></td>
                                        <td><?php echo $data['no_pem'] ?></td>
                                        <td><?php echo $data['nama_pem'] ?></td>
                                        <td><?php echo $data['alamat_pem'] ?></td>
                                        <td><?php echo $data['hp_pem'] ?></td>
                                        
                                        <td>
                                            <a href="edit_pembeli.php?no_pem=<?php echo $data['no_pem'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-alt"></i></a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Kode </th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Hp Pembeli</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </section>
        </div>
        <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Transaksi</h3>
                    </div>

                    <div class="card-body">
                        <table id="transaksiTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Transaksi</th>
                                    <th>ID Pengecekan</th>
                                    <th>No Pem</th>
                                    <th>ID Mobil</th>
                                    <th>Tanggal Pengecekan</th>
                                    <th>Status Transaksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qry = "SELECT * FROM transaksi,jenis_mobil,pengecekan,pembeli";
                                $tampil = mysqli_query($con, $qry);
                                $nomor = 1;
                                foreach ($tampil as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $nomor++ ?></td>
                                        <td><?php echo $data['id_transaksi'] ?></td>
                                        <td><?php echo $data['id_pedok'] ?></td>
                                        <td><?php echo $data['no_pem'] ?></td>
                                        <td><?php echo $data['id_mobil'] ?></td>
                                        <td><?php echo $data['tgl_pedok'] ?></td>
                                        <td><?php echo $data['status_transaksi'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>ID Transaksi</th>
                                    <th>ID Pengecekan</th>
                                    <th>No Pem</th>
                                    <th>ID Mobil</th>
                                    <th>Tanggal Pengecekan</th>
                                    <th>Status Transaksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
            <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Pengecekan</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="pengecekanTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Cek</th>
                                        <th>No Pem</th>
                                        <th>ID Mobil</th>
                                        <th>Tanggal Cek</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $qry = "SELECT * FROM pengecekan";
                                    $tampil = mysqli_query($con, $qry);
                                    $nomor = 1;
                                    foreach ($tampil as $data) {
                                    ?>
                                        <tr>
                                            <td><?php echo $nomor++ ?></td>
                                            <td><?php echo $data['id_cek'] ?></td>
                                            <td><?php echo $data['no_pem'] ?></td>
                                            <td><?php echo $data['id_mobil'] ?></td>
                                            <td><?php echo $data['tgl_cek'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Cek</th>
                                        <th>No Pem</th>
                                        <th>ID Mobil</th>
                                        <th>Tanggal Cek</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </section>


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
    <!-- DataTables & Plugins -->
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
    <!-- Admin
