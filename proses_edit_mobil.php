<!-- proses_edit_mobil.php -->

<?php
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan data yang dikirim menggunakan metode POST

    $id_mobil = $_POST['id_mobil'];
    $tipe_mobil = $_POST['tipe_mobil'];
    $warna = $_POST['warna'];
    $tahun_mobil = $_POST['tahun_mobil'];

    // Lakukan validasi data jika diperlukan

    // Update data ke database
    $update_query = "UPDATE jenismobil SET tipe_mobil ='$tipe_mobil',warna='$warna', tahun_mobil='$tahun_mobil' WHERE id_mobil='$id_mobil'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: daftarmobil.php");
        exit();
    } else {
        echo "Gagal menyimpan perubahan. Error: " . mysqli_error($con);
    }
} else {
    echo "Metode pengiriman data tidak valid.";
}
?>
