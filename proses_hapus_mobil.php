<?php
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan variabel id_mobil diset dan merupakan angka
    if (isset($_POST['id_mobil']) && is_numeric($_POST['id_mobil'])) {
        $id_mobil = $_POST['id_mobil'];

        // Buat query hapus
        $qry_hapus = "DELETE FROM jenis_mobil WHERE id_mobil = $id_mobil";

        // Eksekusi query
        if (mysqli_query($con, $qry_hapus)) {
            echo "Data mobil berhasil dihapus.";
        } else {
            echo "Gagal menghapus data mobil: " . mysqli_error($con);
        }
    } else {
        echo "Parameter tidak valid.";
    }
} else {
    echo "Akses tidak valid.";
}

// Redirect kembali ke halaman list mobil setelah menghapus
header("location: jenis_mobil.php");
?>
