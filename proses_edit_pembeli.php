<!-- proses_edit_mobil.php -->

<?php
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan data yang dikirim menggunakan metode POST

    $no_pem = $_POST["no_pem"];
    $nama_pem = $_POST["nama_pem"];
    $alamat_pem = $_POST["alamat_pem"];
    $hp_pem = $_POST["hp_pem"];
    $id_mobil = $_POST["id_mobil"];
    $id_cek = $_POST["id_cek"];
    

    // Lakukan validasi data jika diperlukan

    // Update data ke database
    $update_query = "UPDATE pembeli  SET nama_pem='$nama_pem', alamat_pem='$alamat_pem',hp_pem='$hp_pem' WHERE no_pem='$no_pem'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: daftarpembeli.php");
        exit();
    } else {
        echo "Gagal menyimpan perubahan. Error: " . mysqli_error($con);
    }
} else {
    echo "Metode pengiriman data tidak valid.";
}
?>
