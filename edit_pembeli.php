<!-- edit_pembeli.php -->

<?php
include_once("koneksi.php");

if (isset($_GET['no_pem'])) {
    $no_pem = $_GET['no_pem'];
    
    $qry = "SELECT * FROM pembeli WHERE no_pem = '$no_pem'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pembeli</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit pembeli</h2>
    <form action="proses_edit_pembeli.php" method="POST">
        <div class="form-group">
            <label for="no_pem">No Pem:</label>
            <input type="text" class="form-control" id="no_pem" name="no_pem" value="<?php echo $data['no_pem']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_pem">Nama Pembeli:</label>
            <input type="text" class="form-control" id="nama_pem" name="nama_pem" value="<?php echo $data['nama_pem']; ?>">
        </div>
        <div class="form-group">
            <label for="alamat_pem">Alamat Pembeli:</label>
            <input type="text" class="form-control" id="alamat_pem" name="alamat_pem" value="<?php echo $data['alamat_pem']; ?>">
        </div>
        <div class="form-group">
            <label for="hp_pem">Hp Pembeli:</label>
            <input type="text" class="form-control" id="hp_pem" name="hp_pem" value="<?php echo $data['hp_pem']; ?>">
        </div>
        <div class="form-group">
            <label for="id_mobil">ID Mobil:</label>
            <select name="id_mobil" class="form-control">
                <option>----</option>
                <?php 
                include "koneksi.php";
                $qryMobil = mysqli_query($con, "SELECT * FROM jenismobil");
                while($dataMobil = mysqli_fetch_array($qryMobil)){
                    $selected = ($dataMobil['id_mobil'] == $data['id_mobil']) ? 'selected' : '';
                    echo "<option value='{$dataMobil['id_mobil']}' $selected> {$dataMobil['tipe_mobil']} </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tgl_cek">Tanggal Cek:</label>
            <input type="date" class="form-control" id="tgl_cek" name="tgl_cek" value="<?php echo $data['tgl_cek']; ?>">
        </div>
        <div class="form-group">
            <label for="status_transaksi">Status Transaksi:</label>
            <select name="status_transaksi" class="form-control">
                <option>----</option>
                <?php
                $qryStatusTransaksi = mysqli_query($con, "SHOW COLUMNS FROM pembeli LIKE 'status_transaksi'");
                $enumStatusTransaksi = mysqli_fetch_array($qryStatusTransaksi);
                $enumOptionsTransaksi = explode(",", str_replace(["enum('", "')", "''"], ["", "", "'"], $enumStatusTransaksi['Type']));
                foreach ($enumOptionsTransaksi as $optionTransaksi) {
                    $selectedTransaksi = ($optionTransaksi == $data['status_transaksi']) ? 'selected' : '';
                    echo "<option value='$optionTransaksi' $selectedTransaksi> $optionTransaksi </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="status_penyerahan">Status Penyerahan:</label>
            <select name="status_penyerahan" class="form-control">
                <option>----</option>
                <?php
                $qryStatusPenyerahan = mysqli_query($con, "SHOW COLUMNS FROM pembeli LIKE 'status_penyerahan'");
                $enumStatusPenyerahan = mysqli_fetch_array($qryStatusPenyerahan);
                $enumOptionsPenyerahan = explode(",", str_replace(["enum('", "')", "''"], ["", "", "'"], $enumStatusPenyerahan['Type']));
                foreach ($enumOptionsPenyerahan as $optionPenyerahan) {
                    $selectedPenyerahan = ($optionPenyerahan == $data['status_penyerahan']) ? 'selected' : '';
                    echo "<option value='$optionPenyerahan' $selectedPenyerahan> $optionPenyerahan </option>";
                }
                ?>
            </select>
        </div>
        <br>
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
