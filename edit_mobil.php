<!-- edit_mobil.php -->

<?php
include_once("koneksi.php");

if (isset($_GET['id_mobil'])) {
    $id_mobil = $_GET['id_mobil'];
    
    $qry = "SELECT * FROM jenis_mobil WHERE id_mobil = '$id_mobil'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Mobil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Mobil</h2>
    <form action="page_mobil/proses_edit_mobil.php" method="POST">
        <div class="form-group">
            <label for="id_mobil">Kode Mobil:</label>
            <input type="text" class="form-control" id="id_mobil" name="id_mobil" value="<?php echo $data['id_mobil']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tipe_mobil">Tipe Mobil:</label>
            <input type="text" class="form-control" id="tipe_mobil" name="tipe_mobil" value="<?php echo $data['tipe_mobil']; ?>">
        </div>
        <div class="form-group">
            <label for="tahun_mobil">Tahun Mobil:</label>
            <input type="text" class="form-control" id="tahun_mobil" name="tahun_mobil" value="<?php echo $data['tahun_mobil']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>

</body>
</html>

<?php
    } else {
        echo "Gagal mengambil data dari database. Error: " . mysqli_error($con);
    }
} else {
    echo "ID tidak valid.";
}
?>
