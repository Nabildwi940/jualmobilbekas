<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Penyerahan Dokumen</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
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
              <h1>Penyerahan Dokumen</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">penyerahan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Penyerahan Dokumen</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="jsGrid4"></div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

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
  <!-- jsGrid -->
  <script src="plugins/jsgrid/demos/db.js"></script>
  <script src="plugins/jsgrid/jsgrid.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      var clients = [
        { id_penyerahan: "001", tanggal: "2022-01-01", nama_penerima: "John Doe", jenis_dokumen: "Surat Penyerahan" },
        { id_penyerahan: "002", tanggal: "2022-02-01", nama_penerima: "Jane Doe", jenis_dokumen: "Laporan Akhir" },
        { id_penyerahan: "003", tanggal: "2022-03-01", nama_penerima: "Bob Smith", jenis_dokumen: "Invoice" },
        // Add more document deliveries as needed
      ];

      $("#jsGrid4").jsGrid({
        width: "100%",
        height: "400px",
        sorting: true,
        paging: true,
        data: clients,
        fields: [
          { name: "id_penyerahan", title: "ID Penyerahan", type: "text", width: 50 },
          { name: "tanggal", title: "Tanggal", type: "text", width: 100 },
          { name: "nama_penerima", title: "Nama Penerima", type: "text", width: 100 },
          { name: "jenis_dokumen", title: "Jenis Dokumen", type: "text", width: 100 },
          {
            name: "edit",
            type: "control",
            width: 50,
            editButton: false,
            itemTemplate: function (value, item) {
              return $("<button>").text("Edit").addClass("btn btn-primary btn-sm").on("click", function () {
                // Implement your edit logic here
                alert("Edit clicked for ID " + item.id_penyerahan);
              });
            }
          },
          {
            name: "hapus",
            type: "control",
            width: 50,
            deleteButton: false,
            itemTemplate: function (value, item) {
              return $("<button>").text("Hapus").addClass("btn btn-danger btn-sm").on("click", function () {
                // Implement your delete logic here
                alert("Hapus clicked for ID " + item.id_penyerahan);
              });
            }
          }
        ]
      });
    });
  </script>
</body>
</html>
