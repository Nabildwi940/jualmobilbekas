<!-- edit_mobil.php -->

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
            <label for="hp_pem">Alamat Pembeli:</label>
            <input type="text" class="form-control" id="hp_pem" name="hp_pem" value="<?php echo $data['hp_pem']; ?>">
        </div>
        <div class="form-group">
            <label for="id_mobil">ID Mobil:</label>
            <td><select name="id_mobil">
                  <option>----</option>
                  <?php 
                  include "koneksi.php";
                  $qry = mysqli_query($con, "SELECT * FROM jenismobil");
                  while($data = mysqli_fetch_array($qry)){
                    echo "<option value=$data[id_mobil]> $data[tipe_mobil] </option>";
                  }
                  ?>
                  </select>
                </td>
        <div class="form-group">
            <label for="id_cek">ID Cek:</label>
            <td><select name="id_cek">
                  <option>----</option>
                  <?php 
                  include "koneksi.php";
                  $qry = mysqli_query($con, "SELECT * FROM pengecekan");
                  while($data = mysqli_fetch_array($qry)){
                    echo "<option value=$data[id_cek]> $data[tgl_cek] </option>";
                  }
                  ?>
                  </select>
                </td>
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
