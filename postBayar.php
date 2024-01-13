<?php
session_start();
$conn = new mysqli("localhost", "root", "", "crud - sim");

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
    exit();
}

// Tangkap data
$username = $_SESSION["username"];
$norek = $_POST["norek"];
$notelp = $_POST["notelp"];
$jenis = $_POST["bayar"];

// Insert Data
$query = "INSERT INTO pembayaran(username, norek, notelp, bayar) VALUES('$username','$norek', '$notelp', '$jenis')";
$result = $conn -> query($query);
header("location: notification.php") 
?>