<?php
include_once("koneksi.php");

if (isset($_GET['id_transaksi'])) {
    $id_transaksi = $_GET['id_transaksi'];
    
    $qry = "SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Transaksi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Transaksi</h2>
    <form action="proses_edit_transaksi.php" method="POST">
        <div class="form-group">
            <label for="id_transaksi">ID Transaksi:</label>
            <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $data['id_transaksi']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="id_cek">ID Cek:</label>
            <select class="form-control" id="id_cek" name="id_cek">
                <option>----</option>
                <?php 
                $qryPengecekan = mysqli_query($con, "SELECT * FROM pengecekan");
                while($dataPengecekan = mysqli_fetch_array($qryPengecekan)){
                    $selected = ($data['id_cek'] == $dataPengecekan['id_cek']) ? "selected" : "";
                    echo "<option value='$dataPengecekan[id_cek]' $selected> $dataPengecekan[tgl_cek] </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="no_pem">No Pembeli:</label>
            <select class="form-control" id="no_pem" name="no_pem">
                <option>----</option>
                <?php 
                $qryPembeli = mysqli_query($con, "SELECT * FROM pembeli");
                while($dataPembeli = mysqli_fetch_array($qryPembeli)){
                    $selected = ($data['no_pem'] == $dataPembeli['no_pem']) ? "selected" : "";
                    echo "<option value='$dataPembeli[no_pem]' $selected> $dataPembeli[no_pem] </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_mobil">ID Mobil:</label>
            <select class="form-control" id="id_mobil" name="id_mobil">
                <option>----</option>
                <?php 
                $qryJenismobil = mysqli_query($con, "SELECT * FROM jenismobil");
                while($dataJenismobil = mysqli_fetch_array($qryJenismobil)){
                    $selected = ($data['id_mobil'] == $dataJenismobil['id_mobil']) ? "selected" : "";
                    echo "<option value='$dataJenismobil[id_mobil]' $selected> $dataJenismobil[tipe_mobil] </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tgl_pengecekan">Tanggal Pengecekan:</label>
            <select class="form-control" id="tgl_pengecekan" name="tgl_pengecekan">
                <option>----</option>
                <?php 
                $qryPengecekan = mysqli_query($con, "SELECT * FROM pengecekan");
                while($dataPengecekan = mysqli_fetch_array($qryPengecekan)){
                    $selected = ($data['tgl_pengecekan'] == $dataPengecekan['tgl_cek']) ? "selected" : "";
                    echo "<option value='$dataPengecekan[tgl_cek]' $selected> $dataPengecekan[tgl_cek] </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="status_transaksi">Status Transaksi:</label>
            <select class="form-control" id="status_transaksi" name="status_transaksi">
                <option>----</option>
                <?php 
                $qryStatusTransaksi = mysqli_query($con, "SELECT DISTINCT status_transaksi FROM transaksi");
                while($dataStatusTransaksi = mysqli_fetch_array($qryStatusTransaksi)){
                    $selected = ($data['status_transaksi'] == $dataStatusTransaksi['status_transaksi']) ? "selected" : "";
                    echo "<option value='$dataStatusTransaksi[status_transaksi]' $selected> $dataStatusTransaksi[status_transaksi] </option>";
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
