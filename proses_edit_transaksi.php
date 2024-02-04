<?php
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that the data is sent using the POST method

    $id_transaksi = $_POST["id_transaksi"];
    $id_cek = $_POST["id_cek"];
    $no_pem = $_POST["no_pem"];
    $id_mobil = $_POST["id_mobil"];
    $tgl_pengecekan = $_POST["tgl_pengecekan"];
    $status_transaksi = $_POST["status_transaksi"];

    // Perform data validation if needed

    // Update data in the database
    $update_query = "UPDATE transaksi 
                    SET id_cek='$id_cek', no_pem='$no_pem', id_mobil='$id_mobil', tgl_pengecekan='$tgl_pengecekan', status_transaksi='$status_transaksi' 
                    WHERE id_transaksi='$id_transaksi'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // If successful, redirect back to the main page
        header("Location: daftartransaksi.php");
        exit();
    } else {
        echo "Failed to save changes. Error: " . mysqli_error($con);
    }
} else {
    echo "Invalid data submission method.";
}
?>
