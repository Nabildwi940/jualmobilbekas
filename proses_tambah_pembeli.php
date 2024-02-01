<?php
// Include your database connection file
include_once("koneksi.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $no_pem = $_POST["no_pem"];
    $nama_pem = $_POST["nama_pem"];
    $alamat_pem = $_POST["alamat_pem"];
    $hp_pem = $_POST["hp_pem"];
    $id_mobil = $_POST["id_mobil"];
    $id_cek = $_POST["id_cek"];

    // You may need to validate and sanitize the input data before using it in the query

    // Insert data into the database
    $query = "INSERT INTO pembeli(no_pem, nama_pem, alamat_pem, hp_pem, id_mobil, id_cek) VALUES ('$no_pem', '$nama_pem', '$alamat_pem','$hp_pem','$id_mobil', '$id_cek')";
    $result = mysqli_query($con, $query);

    // Check if the insertion was successful
    if ($result) {
        // Redirect to the list_mobil.php page after successful insertion
        header("Location: daftarpembeli.php");
        exit();
    } else {
        // Handle the error (you may want to customize this part based on your needs)
        echo "Error: " . mysqli_error($con);
    }
} else {
    // If the form is not submitted, redirect to the tambahmobil.php page
    header("Location: daftarpembeli.php");
    exit();
}

// Close the database connection
mysqli_close($con);
?>
