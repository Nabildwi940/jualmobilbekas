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
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">List Mobil Tersedia</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="tambahmobil.php" class="btn btn-primary">Tambah Mobil</a>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>kode mobil</th>
                                    <th>Tipe Mobil</th>
                                    <th>Warna</th>
                                    <th>Tahun Mobil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qry = "SELECT * FROM jenismobil";
                                $tampil = mysqli_query($con, $qry);
                                $nomor = 1;
                                foreach ($tampil as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $nomor++ ?></td>
                                        <td><?php echo $data['id_mobil'] ?></td>
                                        <td><?php echo $data['tipe_mobil'] ?></td>
                                        <td><?php echo $data['warna'] ?></td>
                                        <td><?php echo $data['tahun_mobil'] ?></td>
                                        <td>
                                            <a href="edit_mobil.php?id_mobil=<?php echo $data['id_mobil'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-alt"></i></a>
                                            <button type="button" data-toggle="modal" data-target="#hapus<?php echo $data['id_mobil'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="hapus<?php echo $data['id_mobil'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Data Mobil Dengan tipe <b><?php echo $data['tipe_mobil'] ?></b> Ingin Dihapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
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
                        </table>
                    </div>
                </div>
            </section>
        </div>

        <!-- Include your script tags at the end of the body section -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="dist/js/adminlte.min.js"></script>
    </body>
</html>
