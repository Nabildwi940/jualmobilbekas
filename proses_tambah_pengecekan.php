<?php
// Include your database connection file
include_once("koneksi.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id_cek = $_POST["id_cek"];
    $no_pem = $_POST["no_pem"];
    $id_mobil = $_POST["id_mobil"];
    $tgl_cek = $_POST["tgl_cek"];

    // You may need to validate and sanitize the input data before using it in the query

    // Insert data into the database
    $query = "INSERT INTO pengecekan (id_cek, no_pem,id_mobil, tgl_cek) VALUES ('$id_cek', '$no_pem','$id_mobil', '$tgl_cek')";
    $result = mysqli_query($con, $query);

    // Check if the insertion was successful
    if ($result) {
        // Redirect to the list_mobil.php page after successful insertion
        header("Location: index.php");
        exit();
    } else {
        // Handle the error (you may want to customize this part based on your needs)
        echo "Error: " . mysqli_error($con);
    }
} else {
    // If the form is not submitted, redirect to the tambahmobil.php page
    header("Location: index.php");
    exit();
}

// Close the database connection
mysqli_close($con);
?>
