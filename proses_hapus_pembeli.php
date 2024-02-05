<?php
include_once("koneksi.php");

if (isset($_GET['no_pem'])) {
    $no_pem = $_GET['no_pem'];

    // Perform deletion query
    $delete_query = "DELETE FROM pembeli WHERE no_pem = '$no_pem'";
    $result = mysqli_query($con, $delete_query);

    if ($result) {
        // Redirect back to the list of pembeli
        header("Location: daftarpembeli.php");
        exit(); // Ensure that the script stops here
    } else {
        echo "Gagal menghapus data pembeli. Error: " . mysqli_error($con);
    }
} else {
    echo "ID tidak valid.";
}
?>
