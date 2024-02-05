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

            <!-- Main content List Pembeli -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">List Pembeli</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="tambahpembeli.php" class="btn btn-primary">Tambah Pembeli</a>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Pem</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Hp Pembeli</th>
                                    <th>ID Mobil</th>
                                    <th>Tipe Mobil</th>
                                    <th>Tanggal Cek</th>
                                    <th>Status Transaksi</th>
                                    <th>Status Penyerahan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once('koneksi.php');
                                $qry = "SELECT * FROM pembeli
                                  JOIN jenismobil ON pembeli.id_mobil = jenismobil.id_mobil";
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
                                        <td><?php echo $data['id_mobil'] ?></td>
                                        <td><?php echo $data['tipe_mobil'] ?></td>
                                        <td><?php echo $data['tgl_cek'] ?></td>
                                        <td><?php echo $data['status_transaksi']?></td>
                                        <td><?php echo $data['status_penyerahan']?></td>
                                        <td>
                                            <a href="edit_pembeli.php?no_pem=<?php echo $data['no_pem'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-alt"></i></a>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $data['no_pem']; ?>"><i class="fa fa-trash"></i></button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal<?php echo $data['no_pem']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Pembeli</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin menghapus data pembeli ini?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                <a href="proses_hapus_pembeli.php?no_pem=<?php echo $data['no_pem'] ?>" class="btn btn-danger">Hapus</a>
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
                    <!-- /.card-body -->
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
